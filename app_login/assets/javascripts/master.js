$(document).ready(function(){

    $("#type_id").change(function () {
        var selectedText = $(this).find("option:selected").text();
        var selectedValue = $(this).val();
        if(selectedText == 'Gallery Page'){
           $('#gallery-id').show();
           $('#gallery-id #gallery_id').removeAttr('disabled','true');
        }else if(selectedText == 'Video Gallery Page'){
            $('#video-gallery-id').show();
            $('#video-gallery-id #video_gallery_id').removeAttr('disabled','true');
        }else{
            $('#gallery-id #gallery_id').attr('disabled','true');
            $('#gallery-id').hide();
        }
    });

    var country = $('#country_table').DataTable({ 
        // 'processing': true,
        //  'serverSide': true,
        //  'serverMethod': 'post',
        //  "searching": true,
        "ajax": {
            url: "master/country_list",
           
        },
        
        // Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ 0 ], //first column / numbering column
            "orderable": false, //set not orderable
        },
        ],
    })

    var city = $('#city_table').DataTable({
        "ajax":{
            url:"master/city_list"

        },
        "columnDefs":[{
            "targets":[ 0 ],
            "orderable": false
        }]
    })
    var state = $('#state_table').DataTable({
        "ajax":{
            url:"master/state_list"

        },
        "columnDefs":[{
            "targets":[ 0 ],
            "orderable": false
        }]
    })

    var menu = $('#menu_table').DataTable({
        "ajax":{
            url:"master/menu_list"

        },
        "columnDefs":[{
            "targets":[ 0 ],
            "orderable": false
        }]
    })
    var menu = $('#form_table').DataTable({
        "ajax":{
            url:"master/form_list"

        },
        "columnDefs":[{
            "targets":[ 0 ],
            "orderable": false
        }]
    })
    var product_category = $('#product_category_table').DataTable({
        "ajax":{
            url:"master/product_category_list"

        },
        "columnDefs":[{
            "targets":[ 0 ],
            "orderable": false
        }]
    })
    var products = $('#products_table').DataTable({
        "ajax":{
            url:"master/products_list"

        },
        "columnDefs":[{
            "targets":[ 0 ],
            "orderable": false
        }]
    })
    var products = $('#banner_table').DataTable({
        "ajax":{
            url:"master/banner_list"
    
        },
        "columnDefs":[{
            "targets":[ 0 ],
            "orderable": false
        }]
    })
    var pages = $('#pages_table').DataTable({
      
    })
    
    var products = $('#features_table').DataTable({
        "ajax":{
            url:"master/features_list"
    
        },
        "columnDefs":[{
            "targets":[ 0 ],
            "orderable": false
        }]
    })
    
})


function getslug(val){
    $.getJSON('master/getslug/master_model/page_slug/' + val, function(data) {
        $("#" + data.field_id).val(data.field_val);
    });
}