function home() {
    document.getElementById("latest-div").style.display = "none";
    document.getElementById("main-home").style.display = "block";
    document.getElementById("movies-div").style.display = "none";
    document.getElementById("mylist-div").style.display = "none";
    document.getElementById("tvshow-div").style.display = "none";
}

function tvshow() {
    document.getElementById("latest-div").style.display = "none";
    document.getElementById("main-home").style.display = "none";
    document.getElementById("movies-div").style.display = "none";
    document.getElementById("mylist-div").style.display = "none";
    document.getElementById("tvshow-div").style.display = "block";
}

function movies() {
    document.getElementById("latest-div").style.display = "none";
    document.getElementById("main-home").style.display = "none";
    document.getElementById("movies-div").style.display = "block";
    document.getElementById("mylist-div").style.display = "none";
    document.getElementById("tvshow-div").style.display = "none";
}

function latest() {
    document.getElementById("latest-div").style.display = "block";
    document.getElementById("main-home").style.display = "none";
    document.getElementById("movies-div").style.display = "none";
    document.getElementById("mylist-div").style.display = "none";
    document.getElementById("tvshow-div").style.display = "none";
}

function myList() {
    document.getElementById("latest-div").style.display = "none";
    document.getElementById("main-home").style.display = "none";
    document.getElementById("movies-div").style.display = "none";
    document.getElementById("mylist-div").style.display = "block";
    document.getElementById("tvshow-div").style.display = "none";
}