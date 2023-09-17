if (document.getElementById("header-red-lantern") != null) {
    window.onscroll = function() {
        myCityHeader();
    };
    var headerRedLantern = document.getElementById("header-red-lantern");
}

function myCityHeader() {
    if (window.pageYOffset > 50) {
        headerRedLantern.classList.add("header-red-lantern");
    } else {
        headerRedLantern.classList.remove("header-red-lantern");
    }
}