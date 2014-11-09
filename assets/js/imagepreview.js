var oldElement = "";
$(".imageblock").click(function() {
    if (oldElement !== "") {
        $(oldElement).css("outline", "");
        $(oldElement).popover('hide');
    }
    $(this).css("outline", "8px solid #7AC");
    $(this).css("margin", "10px");

    oldElement = this;
});

$('[data-toggle="popover"]').popover({
    trigger: 'click',
    placement: 'auto',
    html: true,
    content: function() {
        return $(this).next('.popper-content').html();
    }});

$(".new-image").click(function() {
    $(".popout").slideDown();
    $(".shade").css("display", "block");
});

$(".shade").click(function() {
    $(".popout").slideUp();
    $(".shade").css("display", "none");
});

$(document).on('click', '#close-preview', function() {
    $('.image-preview').popover('hide');
    // Hover befor close the preview
    $('.image-preview').hover(
            function() {
                $('.image-preview').popover('show');
            },
            function() {
                $('.image-preview').popover('hide');
            }
    );
});

$(function() {
    var closebtn = $('<button/>', {
        type: "button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class", "close pull-right");
    $('.image-preview').popover({
        trigger: 'manual',
        html: true,
        title: "<strong>Preview</strong>" + $(closebtn)[0].outerHTML,
        content: "There's no image",
        placement: 'bottom'
    });
    $('.image-preview-clear').click(function() {
        $('.image-preview').attr("data-content", "").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Browse");
    });
    $(".image-preview-input input:file").change(function() {
        var img = $('<img/>', {
            id: 'dynamic',
            width: 250,
            height: 200
        });
        var file = this.files[0];
        var reader = new FileReader();

        reader.onload = function(e) {
            $(".image-preview-input-title").text("Change");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);
            img.attr('src', e.target.result);
            $(".image-preview").attr("data-content", $(img)[0].outerHTML).popover("show");
        }
        reader.readAsDataURL(file);
    });
});