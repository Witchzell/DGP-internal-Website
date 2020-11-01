function myFunction(input) {
    var x = document.getElementsByClassName(input)[0];
    if (x.style.display == "none") {
      x.style.display = "grid";
    } 
    
    else {
      x.style.display = "none";
    }
}

function btnDropdown() {
    document.getElementById("dropdown").classList.toggle("show");  
}
