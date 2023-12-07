(function ($) {
    $(function () {
      if ($.fn.dataTable) {
        $.extend(true, $.fn.dataTable.defaults, {
          oLanguage: {
            sProcessing:
              "<div class='loader-center'><img height='50' width='50' src='" +
              BASE_URL +
              "assets/images/loading.gif'></div>",
          },
          bProcessing: true,
          bServerSide: true,
          ordering: true,
          iDisplayLength: 10,
          responsive: true,
          bSortCellsTop: false,
          aaSorting: [
            [], //0, 'asc'
          ],
          order: [],
          bDestroy: true, //!!!--- for remove data table warning.
          aLengthMenu: [
            [5, 10, 20, -1],
            [5, 10, 20, "All"],
          ],
          aoColumnDefs: [
            {
              bSortable: false,
              // aTargets: [-1]
              aTargets: ["nosort"],
            },
          ],
          searching: true,
        });
        if ($(".data-table").length) {
          $(".data-table").each(function () {
            var opts = {};
            var obj = $(this);
            if ($(this).attr("data-src")) {
              opts["sAjaxSource"] = $(this).attr("data-src");
            } else if ($(this).attr("data-opts")) {
              $.extend(opts, $.parseJSON($(this).attr("data-opts")));
            }
            var reorder_url;
            if ($(this).attr("data-reorder-url")) {
              reorder_url = $(this).attr("data-reorder-url");
            }
            var classes_id = $(this).attr("data-classes_id"),
              course_id = $(this).attr("data-course_id"),
              table = $(this).DataTable(opts);
            table.on("row-reorder", function (e, diff, edit) {
              var result =
                "Reorder started on row: " + edit.triggerRow.data()[1] + "\n";
              var json = {
                data: [],
                classes_id: classes_id,
                course_id: course_id,
              };
              for (var i = 0, ien = diff.length; i < ien; i++) {
                var rowData = table.row(diff[i].node).data();
                result +=
                  rowData[1] +
                  " updated to be in position " +
                  diff[i].newData +
                  " (was " +
                  diff[i].oldData +
                  ")+\n\t";
                json.data[i] = {
                  position: parseInt(diff[i].newPosition),
                  id: $(diff[i].node).find('[name^="page_id"]').val(),
                };
              }
              reorder_url &&
                $.ajax({
                  url: BASE_URL + reorder_url, //'classes/reorder-pages',
                  method: "POST",
                  dataType: "json",
                  data: json, // must be json
                  success: function (res) {
                    if (res["status"] == "success") {
                      toastr.success(res["msg"]);
                    } else {
                      toastr.options = {
                        closeButton: true,
                        hideDuration: 500,
                        onHidden: function () {
                          window.location.reload();
                        },
                        onCloseClick: function () {
                          window.location.reload();
                        },
                      };
                      toastr.error(res["msg"]);
                    }
                  },
                });
  
              console.log("Event result:\n" + result);
            });
          });
        }
      }
     

    });
 
  })(jQuery);
  
  