document.onclick = function (event) {
    console.dir(event.target);
    if (event.target.tagName == "IMG" && event.target.classList.contains('border', 'border-warning')){
        event.target.classList.remove('border', 'border-warning')
    }else{
        if (event.target.tagName == "IMG"){
            event.target.classList.add('border', 'border-warning');
        }
    }


};