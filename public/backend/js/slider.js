var Slider = function () {

    var sliderlist = function () {

        $(document).ready(function(){
            $("#sliderlist").DataTable().buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)")
            });

            $('body').on("click", ".deleteSlider", function () {
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
                url: baseurl + "slider-datatable-ajaxAction",
                data: {'action': 'deleteSlider', 'data': data},
                success: function (data) {
                    handleAjaxResponse(data);
                }
            });
        });

    }
    return {
        init: function () {
            sliderlist();
        },
    }
}();