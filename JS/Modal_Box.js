function myFunction(input) {
    var x = document.getElementsByClassName(input)[0];
    if (x.style.display == "none") {
      x.style.display = "block";
    } 
    
    else {
      x.style.display = "none";
    }
}
