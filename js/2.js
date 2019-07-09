document.querySelector('#Work_1').onmousemove = function (event) {
    event = event || window.event;
    document.querySelector('#offx').innerHTML = event.offsetX;
    document.querySelector('#offy').innerHTML = event.offsetY;
    var moveDiv = document.getElementById('mousediv');
    var x = event.offsetX;
    var y = event.offsetY;
    if (x > 0 && y > 0) {
        moveDiv.style.top = (y - 40) + 'px';
        moveDiv.style.left = (x - 40) + 'px';
    }
};