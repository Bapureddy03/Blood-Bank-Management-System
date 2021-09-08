var temp=document.getElementById("database").textContent;
console.log(temp);
function myFunction() {
  if(document.getElementById("database").value == 'lobby'){
      console.log("True");
      window.open("data.php");
  }
}