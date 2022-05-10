const BASE_URL = "http://192.168.0.14:8080/mybiblio";

function clearErrors(){
    $(".has-error").removeClass("has-error");
    $(".help-block").html("");
}

function showErrors(error_list){
    clearErrors();
    
    $.each(error_list, function(id, message){
        $(id).parent().addClass("has-error");
        $(id).siblings(".help-block").html(message);
    });
}

function loadingImg(message="") {
    return "<i class='fa fa-circle-o-notch fa-spin'></i>&nbsp;"+message;
}
