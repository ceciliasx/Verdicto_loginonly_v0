function visibility() {
   var x = document.getElementById("password");
   if (x.type === "password") {
    x.type = "text";
   } else {
    x.type = "password";
   }
}

function visibility1() {
   var x = document.getElementById("password_confirmation");
   if (x.type === "password") {
     x.type = "text";
   } else {
     x.type = "password";
   }
}