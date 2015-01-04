function toggle(e) {
    var target = e.currentTarget,
            pointer = target.children[0];

    if (pointer.id === 'more') {
        pointer.id = 'less';
        $(pointer).css('border-bottom-color', 'rgba(141, 133, 133, 0.81)');
        $(pointer).css('border-top-color', 'rgba(0,0,0,0)');
        $(pointer).css('margin-bottom', '2px');
    } else {
        pointer.id = 'more';
        $(pointer).css('border-top-color', 'rgba(141, 133, 133, 0.81)');
        $(pointer).css('border-bottom-color', 'rgba(0,0,0,0)');
        $(pointer).css('margin-bottom', '-3px');
    }
}