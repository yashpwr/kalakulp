var Fabric = function () {

    var fabriclist = function () {

        $(document).ready(function(){
            $("#fabriclist").DataTable().buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)")});
            $('body').on("click", ".deleteFabric", function () {
                var id = $(this).attr("data-id");
                setTimeout(function () {
                    $('.yes-sure:visible').attr('data-id', id);
                }, 500);
            });

            $('body').on('click', '.yes-sure', function () {
            var id = $(this).attr('data-id');
            var data = {id: id, _token: $('#_token').val()};
            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val(),
                },
                url: baseurl + "fabric-datatable-ajaxAction",
                data: {'action': 'deleteFabric', 'data': data},
                success: function (data) {
                    handleAjaxResponse(data);
                }
            });
        });     
    }

    var SingleFabDelete = function () {
        
            $('body').on('click', '.SingleFabDelete', function () {
            var id = $(this).attr('data-id');
            var data = {id: id, _token: $('#_token').val()};
            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val(),
                },
                url: baseurl + "fabric-datatable-ajaxAction",
                data: {'action': 'SingleFabDelete', 'data': data},
                success: function (data) {
                    handleAjaxResponse(data);
                }
            });
            $(this).parents(".record").animate("fast").animate({
                opacity : "hide"
            }, "slow");
        });
    }

    var addFabric = function () {
        var form = $('#addFabric');
        var rules = {
            fab_name: {required: true},
            style_no: {required: true},
            material: {required: true},
            width: {required: true},
            weight: {required: true},
            feel: {required: true},
            price: {required: true},
            quantity: {required: true},
            img: {required: true},
        };
        
        handleFormValidate(form, rules, function (form) {
            handleAjaxFormSubmit(form, true);
        });
    }
    return {
        init: function () {
            fabriclist();
        },
        addFab: function (){
            addFabric();
        },
        singleDelete: function(){
            SingleFabDelete();
        }
    }
}();