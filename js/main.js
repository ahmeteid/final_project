function coursesDropDown() {
    var dropdown = document.getElementById("myDropdown");
    dropdown.getElementsByClassName("dropdown-content")[0].classList.toggle("show");
}

window.onclick = function(event) {
    if (!event.target.matches(".dropdown button")) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; dropdowns.length; i++) {
            var openDropDown = dropdowns[i];
            if (openDropDown.classList.contains("show")) {
                openDropDown.classList.remove("show");
            }
        }
    }
}

function watch_bottom() {
    // var watch = document.getElementById("watch");
    window.location.href = "../html/video_content.html"
}