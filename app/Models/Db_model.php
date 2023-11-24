<?php


namespace App\Models;

use CodeIgniter\Model;
use App\Models\Db_model;

class Db_model extends Model {

    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();
        $this->tables = array('files' => 'files');
    }

    /**
     * Common Function to get data from Database
     * @param type $params
     * @return array having data
     */
    function get_data($params = array()) {
        extract($params);


        if (!isset($table) || !$table) {
            return array();
        }
        //$this->db->protect_idenifiers(FALSE);

        $order_by = isset($order_by) ? $order_by : false;
        $order = isset($order) ? $order : 'ASC';
        $limit = isset($limit) ? $limit : false;
        $start = isset($start) ? $start : 0;
        $where = isset($where) ? $where : array();
        $where_in = isset($where_in) ? $where_in : array();
        $fields = isset($fields) ? $fields : '';
        $like = isset($like) ? $like : array();
        $count = isset($count) ? $count : FALSE;
        $group_by = isset($group_by) ? $group_by : FALSE;
        $having = isset($having) ? $having : FALSE;

        if ($order_by) {
            $this->db->order_by($order_by, $order);
        }

        if ($limit) {
            $this->db->limit($limit, $start);
        }

        if (!empty($where)) {
            $this->db->where($where, NULL, FALSE);
        }
        if (!empty($where_in)) {
            foreach ($where_in as $key => $value) {
                $this->db->where_in($key, $value);
            }
        }
        if (!empty($like)) {
            //for ($i = 0,$len=count($col_sort); $i < $len; $i++) {
            if (!empty($where)) {
                $search_array=array();
                foreach($like as $key=>$value){
                    $search_array[] = $key. ' = "%'.$value.'%"';
                    //$info_array['like'] = $search_array;
                }
                $this->db->where("(".implode(" OR ", $search_array).")", NULL, FALSE);
            } else {
                $this->db->or_like($like);
            }
        }

        if ($fields) {
            if ($count) {
                $this->db->select('SQL_CALC_FOUND_ROWS ' . $fields, FALSE);
            } else {
                $this->db->select($fields, FALSE);
            }
        }

        if (isset($join) && !empty($join)) {
            foreach ($join as $key => $value) {
                $this->db->join($value['table'], $value['on'], $value['type']);
            }
        }
        
        if (isset($group_by) && !empty($group_by)) {
            $this->db->group_by($group_by); 
		}
		
        if (isset($having) && $having) {
            $this->db->having($having,false);
        }

        $data['result'] = $this->db->get($table)->result_array();
        //print_r($params);
        if (isset($debug) && $debug) {
            echo $this->db->last_query();
        }

        if ($count) {
            $data['total'] = $this->db->query('SELECT FOUND_ROWS() AS `Count`')->row()->Count;
        }
        return $data;
    }

    function insert_data($params = array()) {
        $table = (isset($params['table']) and $params['table']) ? $params['table'] : "";
        # passes as a array of data to insert multiple records at a time
        $data = (isset($params['data']) and ! empty($params['data'])) ? $params['data'] : "";
        $return_insert_id = (isset($params['return_insert_id'])) ? $params['return_insert_id'] : FALSE;
        $insert_id = array();
        $returnArray = array('status' => 'error');
        if ($table and $data) {
            $this->db->trans_start();
            foreach ($data as $d) {
                $this->db->insert($table, $d);
                if ($return_insert_id === TRUE) {
                    $insert_id[] = $this->db->insert_id();
                }
            }
            $this->db->trans_complete();
            if ($this->db->trans_status() !== FALSE) {
                $returnArray = array('status' => 'success');
            }
        }
        if ($return_insert_id === TRUE) {
            $returnArray['insert_id_array'] = $insert_id;
        }
        return $returnArray;
    }

    function upload_document($files, $inpt_file_name, $type, $file_id = FALSE) {
        $config = $this->config->item('assets_' . $type);
        $config['upload_path'] = check_directory_exists($config['path']);
        $this->load->library('upload');
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($inpt_file_name)) {
            echo $error = $this->upload->display_errors();
            return FALSE;
        } else {
            $data = $this->upload->data();
            $file_data = array('type' => $data['file_type'], 'name' => $data['client_name'], 'unique_name' => $data['file_name'], 'size' => $data['file_size'], 'created_at' => date('Y-m-d H:i:s'), 'is_active' => '1');
            if ($file_id) {
                $query = $this->db->where('id', $file_id)->limit(1)->get($this->tables['files']);
                if ($query->num_rows() > 0) {
                    $file_detail = $query->row();
                    $filename = $file_detail->unique_name;
                    $upload_path = check_directory_exists($config['path']);
                    $path = $upload_path . '/' . $filename;
                    // file name not blank and file exists then delete it
                    if ($filename != '' && file_exists($path)) {
                        unlink($path);
                    }
                    $this->db->update($this->tables['files'], $file_data, array('id' => $file_id));
                    //$file_id = $previous_file_id;
                }
            } else {
                $this->db->insert($this->tables['files'], $file_data);
                $file_id = $this->db->insert_id();
            }
            return ($file_id > 0) ? $file_id : FALSE;
        }
    }

    public function delete_data($params = array()) {
        extract($params);
        if (!isset($table) || !$table) {
            return array();
        }
        $where = isset($where) ? $where : array();
        $this->db->trans_begin();
        $this->db->query("SET FOREIGN_KEY_CHECKS=0");
        $this->db->where($where);
        $this->db->delete($table);
        $this->db->trans_complete();
        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            $error = $this->db->error();
            return $error;
        } else {
            $this->db->trans_commit();
            $this->db->query("SET FOREIGN_KEY_CHECKS=1");
            return true;
        }
    }

}
