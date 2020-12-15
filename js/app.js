function hamburgeFunc() {
    
  let hamburgerMenu = document.getElementById("hamb");
 
  if (hamburgerMenu.style.display === "block") {
    hamburgerMenu.style.display = "none";
  } else {
    hamburgerMenu.style.display = "block";
  }
}