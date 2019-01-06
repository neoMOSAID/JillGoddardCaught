
$(document).ready(function() {
    $(".dropdown1").click(function() {
        $(this).children().next().toggle(200);
    });
    $(".dropdown1-content").mouseleave(function() {
        $(this).hide(200);
    });
    $("#dropdown2-content p").click(function() {
        //alert();
    });
    $("#loginDiv").click(function(){
        $("#loginDiv-content").toggle(200);
    });
});

Dropzone.autoDiscover = false;

$(function() {
    //Dropzone class
    var myDropzone = new Dropzone(".dropzone", {
        url: "includes/upload.php",
        paramName: "file",
        maxFilesize: 2,
        maxFiles: 1,
        dictDefaultMessage: "Upload",
        acceptedFiles: "image/*,application/pdf",
        init: function() {
            this.on("success", function(file, responseText) {
                $("#divphotos").load(window.location.href + " #divphotos");
            });
        }
    });

    myDropzone.on("complete", function(file) {
        myDropzone.removeFile(file);
    });

});

function view_images(image){
    const gallery = new Viewer(document.getElementById('divphotos'),{
        viewed() {
            var curr=gallery.image.alt;
            $.ajax({
                type: 'POST',
                data: { image_id: curr },
                url: 'includes/increaseViews.php',
                success: function (data) {
                    $("#v-"+curr).load(window.location.href + " #v-"+curr);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                   // alert(errorThrown+' : '+textStatus);
                }
            });
        },
        destroy(){ alert() ; }
    });
}

function view_image(image){
    const viewer = new Viewer(document.getElementById(image), {
        inline: false,
        viewed() {
            $.ajax({
                type: 'POST',
                data: { image_id: image },
                url: 'includes/increaseViews.php',
                success: function (data) {
                    $("#divphotos").load(window.location.href + " #divphotos");
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    //alert(errorThrown+' : '+textStatus);
                }
            });
        }
    });
}

function orderby(order){
    document.cookie = "order_by="+order;
    //$("#divphotos").load(window.location.href + " #divphotos");
    //window.load(window.location.href +' #divphotos');
    location.reload();
}


/*
    var divs = $("#divphotos div");
for (var i = 0; i < divs.length; i++) {
    divs[i].parentNode.removeChild(divs[i]);
}
    */
