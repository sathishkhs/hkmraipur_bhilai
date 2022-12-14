$(document).ready(function(){
    $('#seva_category_table').DataTable({
        "ajax": {
            'url':'sevas/seva_category_list'
        },

        "columnDefs": [
            { 
                "targets": [ 0 ], //first column / numbering column
                "orderable": false, //set not orderable
            },
            ],
    });
    $('#events_table').DataTable({
        "ajax": {
            'url':'events/events_list'
        },

        "columnDefs": [
            { 
                "targets": [ 0 ], //first column / numbering column
                "orderable": false, //set not orderable
            },
            ],
    });

    $('#vaishnava_calendar_table').DataTable({
        "ajax": {
            'url':'events/vaishnava_calendar_list'
        },

        "columnDefs": [
            { 
                "targets": [ 0 ], //first column / numbering column
                "orderable": false, //set not orderable
            },
            ],
    });
    
    $('#sevas_page_table').DataTable({
        "ajax": {
            'url':'sevas/sevas_page_list'
        },

        "columnDefs": [
            { 
                "targets": [ 0 ], //first column / numbering column
                "orderable": false, //set not orderable
            },
            ],
    });
    
})

function getslug(val){
    $.getJSON('ajax/getslug/sevas_model/page_slug/' + val, function(data) {
        $("#" + data.field_id).val(data.field_val);
    });
}
