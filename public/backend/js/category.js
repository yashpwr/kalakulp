var Category = function () {

    var categorylist = function () {

        $(document).ready(function(){
            $("#categorylist").DataTable().buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)")});

            $('body').on("click", ".deleteCategory", function () {
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
                url: baseurl + "category-datatable-ajaxAction",
                data: {'action': 'deleteCategory', 'data': data},
                success: function (data) {
                    handleAjaxResponse(data);
                }
            });
        });     
    }
    var addCategory = function () {
        
        var form = $('#addCategory');
        var rules = {
            category_name: {required: true}
        };
        handleFormValidate(form, rules, function (form) {
            handleAjaxFormSubmit(form, true);
        });
    }
    return {
        init: function () {
            categorylist();
        },
        addcategoryy: function (){
            addCategory();
        }
    }
}();