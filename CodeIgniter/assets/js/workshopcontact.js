function contactToggle(obj, obj2) {
    $(obj).addClass("active");
    $(obj2).removeClass("active");

    $(obj + 'content').slideDown();
    $(obj2 + 'content').slideUp();
}