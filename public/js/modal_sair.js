 // Get the modal
 var modal = document.getElementById('myModal');

 // Get the button that opens the modal
 var btn = document.getElementsByClassName("myBtn_modal_sair")[0];
 var btn_ = document.getElementById('myBtn_modal_sair');

 // Get the <span> element that closes the modal
 var span = document.getElementsByClassName("close")[0];
 var span = document.getElementById("sair");
 
 var sair = document.getElementById("sair_");

 // When the user clicks the button, open the modal 
 btn.onclick = function () {
     modal.style.display = "block";
 }

 btn_.onclick = function () {
    modal.style.display = "block";
}

 // When the user clicks on <span> (x), close the modal
 span.onclick = function () {
     modal.style.display = "none";
 }
 sair.onclick = function () {
    modal.style.display = "none";
}

 // When the user clicks anywhere outside of the modal, close it
 window.onclick = function (event) {
     if (event.target == modal) {
         modal.style.display = "none";
     }
 }