"use strict";
function PreLoader() {
    setTimeout(function () {
        document.getElementById('pre_loader').style.display = 'none';
    }, 2000);
}
filterSel("all");
function filterSel(c) {
    var x, i;
    x = document.getElementsByClassName("filterDiv");
    if (c == "all")
        c = "";
    for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1)
            w3AddClass(x[i], "show");
    }
}
function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
            element.className += " " + arr2[i];
        }
    }
}
function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
    }
    element.className = arr1.join(" ");
}
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
}
function DarkSwitch() {
    const darkModeBtn = document.querySelector("#darkMode");
    const useDark = window.matchMedia("(prefers-color-scheme: dark)");
    function toggleDarkMode(state) {
        document.documentElement.classList.toggle("darkMode", state);
        DarkIconS();
    }
    toggleDarkMode(useDark.matches);
    useDark.addListener((evt) => toggleDarkMode(evt.matches));
    darkModeBtn.addEventListener("click", () => {
        document.documentElement.classList.toggle("darkMode");
        DarkIconS();
    });
    function DarkIconS() {
        if (document.documentElement.classList.value == "darkMode") {
            darkMode.src = "img/sun-fill.svg";
        }
        else {
            darkMode.src = "img/moon-fill.svg";
        }
    }
}
window.addEventListener("DOMContentLoaded", DarkSwitch);
window.addEventListener("DOMContentLoaded", PreLoader);
