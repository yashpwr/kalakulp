$(document).ready(function() {

    $(".btn-success").click(function(){ 
        var html = $(".clone").html();
        $(".increment").after(html);
        
    }
    );

    $("body").on("click",".delete",function(){ 
        $(this).parents(".control-group").remove();
    });

  });
