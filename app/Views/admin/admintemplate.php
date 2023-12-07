<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($title)){ echo $title; } else {echo "Fintech Loans";}?></title>
    <link rel="shortcut icon" href="<?=base_url('images/money-bag.png') ?>" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <link rel="stylesheet" href="<?=base_url('css/admin/style.css') ?>">

    <link rel="stylesheet" href="<?php echo base_url('css/dataTables.bootstrap.min.css') ?>"/>
   

</head>
<body>

<?= $this->renderSection('content') ?>


 


<script src="<?php echo base_url('js/jquery.min.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<script src="<?php echo base_url('js/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('js/dataTables.bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('js/dataTables.responsive.min.js') ?>"></script>

<script src="<?php echo base_url('js/admin.js'); ?>"></script>

<script>
    let AjaxUrl = "<?php echo base_url('get_all_loans_opportunity') ?>";
    // console.log("This is Ajax URL",AjaxUrl);
    // $(document).ready( function () {
    //     $('#opportunityDataTable').DataTable({
    //         "processing": true,
    //         "serverSide": true,
    //         "ajax": AjaxUrl,
    // });
    // } );

    $(document).ready(function(){
        $('#opportunityDataTable').DataTable( {
                "processing": true,
                "serverSide": false,
                "order":[],
                "ajax": AjaxUrl,
                columns: [
                    { data: 'Id' },
                    { data: 'user_detail' },
                    { data: 'opportunity' }, 
                    { data: 'Amount' },
                    { data: 'close_date' },
                    { data: 'owner_alias' },
                    { data: 'Created_on' },
                    { data: 'action' },
                ]
                });
});
</script>
    
</body>
</html>