function toggleItem(e){
    var target = e.currentTarget || event.srcElement;
    if(target.id === 'less'){
        target.id = 'more';
        $(target).css("background", "rgb(230, 230, 230)");
        $(target).css('border-top', '1px solid #A3A3A3'); 
    } else {
        target.id = 'less';
        $(target).css("background-color", "#f8f8f8");
        $(target).css('border-top', '0px solid #A3A3A3'); 
    }
}
    
