document.querySelector('#tack_1').onclick = function (event) {
    event = event || window.event;
    if (event.target.tagName == "IMG" && event.target.classList.contains('border', 'border-warning')) {
        event.target.classList.remove('border', 'border-warning')
    } else {
        if (event.target.tagName == "IMG") {
            event.target.classList.add('border', 'border-warning');
        }
    }
};