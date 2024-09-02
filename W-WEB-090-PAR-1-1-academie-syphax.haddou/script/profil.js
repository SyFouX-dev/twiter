document.addEventListener("DOMContentLoaded", function () {

let avatar = document.getElementById("avatar");
let inputFile = document.getElementById("input-file");

inputFile.onchange = function(){
  avatar.src = URL.createObjectURL(inputFile.files[0]);
}

});
