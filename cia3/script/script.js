//login form validation
function validateform() {
    var name = document.myform.name.value;
    var email = document.myform.email.value;
    var password = document.myform.password.value;
    var password2 = document.myform.password2.value;
    var phone = document.myform.phone.value;

    if (name == null || name == "") {
        alert("Name can't be blank");
        return false;
    } else if (name.length < 6) {
        alert("name must be at least 6 characters long.");
        return false;
    } else if (email == "" || email == null) {
        alert("email can't be blank");
        return false;
    } /*else if (email != " ") {
      validateEmail(email);
      return false;
    } */else if (password.length < 6) {
        alert("Password must be at least 6 characters long.");
        return false;
    } else if (password != password2 || password2 == ' ' || password2 == null) {
        alert("Passwords are not matching");
        return false;
    } else if (phone.length != 10) {
        alert("phone number should be 10 digits");
        return false;
    }/* else {
      alert("Do you want to submit the form?");
      return false;
    }*/
}
function validateEmail(email) {
    var mail_format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (email.match(mail_format)) {
        return true;
    } else {
        alert("invalid mail id");
        return false;
    }
}

//login form validation
function logInValidation() {
    var password = document.logInForm.password.value;
    var email = document.logInForm.email.value;
    if (email != null) {
        validateEmail(email);
    }
    else if (email == null || email == "") {
        alert("email can't be blank");
        return false;
    }
    else if (password == null) {
        alert("password is not matching");
        return false;
    }
}

//cards selection
//card 1
function zoomIn1(){
    var x1 = document.getElementById('card1');
    var x2 = document.getElementById('card2');
    var x3 = document.getElementById('card3');
    var x4 = document.getElementById('card4');
    var x5 = document.getElementById('card5');
    x2.style.filter = "blur(9px)"
    x3.style.filter = "blur(9px)"
    x4.style.filter = "blur(9px)"
    x5.style.filter = "blur(9px)"
}
function normal1(){
    var x1 = document.getElementById('card1');
    var x2 = document.getElementById('card2');
    var x3 = document.getElementById('card3');
    var x4 = document.getElementById('card4');
    var x5 = document.getElementById('card5');
    x2.style.filter = "blur(0px)"
    x3.style.filter = "blur(0px)"
    x4.style.filter = "blur(0px)"
    x5.style.filter = "blur(0px)"
}
//card 2
function zoomIn2(){
    var x1 = document.getElementById('card1');
    var x2 = document.getElementById('card2');
    var x3 = document.getElementById('card3');
    var x4 = document.getElementById('card4');
    var x5 = document.getElementById('card5');
    x1.style.filter = "blur(9px)"
    x3.style.filter = "blur(9px)"
    x4.style.filter = "blur(9px)"
    x5.style.filter = "blur(9px)"
}
function normal2(){
    var x1 = document.getElementById('card1');
    var x2 = document.getElementById('card2');
    var x3 = document.getElementById('card3');
    var x4 = document.getElementById('card4');
    var x5 = document.getElementById('card5');
    x1.style.filter = "blur(0px)"
    x3.style.filter = "blur(0px)"
    x4.style.filter = "blur(0px)"
    x5.style.filter = "blur(0px)"
}
//card 3
function zoomIn3(){
    var x1 = document.getElementById('card1');
    var x2 = document.getElementById('card2');
    var x3 = document.getElementById('card3');
    var x4 = document.getElementById('card4');
    var x5 = document.getElementById('card5');
    x2.style.filter = "blur(9px)"
    x1.style.filter = "blur(9px)"
    x4.style.filter = "blur(9px)"
    x5.style.filter = "blur(9px)"
}
function normal3(){
    var x1 = document.getElementById('card1');
    var x2 = document.getElementById('card2');
    var x3 = document.getElementById('card3');
    var x4 = document.getElementById('card4');
    var x5 = document.getElementById('card5');
    x2.style.filter = "blur(0px)"
    x1.style.filter = "blur(0px)"
    x4.style.filter = "blur(0px)"
    x5.style.filter = "blur(0px)"
}
//card 4
function zoomIn4(){
    var x1 = document.getElementById('card1');
    var x2 = document.getElementById('card2');
    var x3 = document.getElementById('card3');
    var x4 = document.getElementById('card4');
    var x5 = document.getElementById('card5');
    x2.style.filter = "blur(9px)"
    x3.style.filter = "blur(9px)"
    x1.style.filter = "blur(9px)"
    x5.style.filter = "blur(9px)"
}
function normal4(){
    var x1 = document.getElementById('card1');
    var x2 = document.getElementById('card2');
    var x3 = document.getElementById('card3');
    var x4 = document.getElementById('card4');
    var x5 = document.getElementById('card5');
    x2.style.filter = "blur(0px)"
    x3.style.filter = "blur(0px)"
    x1.style.filter = "blur(0px)"
    x5.style.filter = "blur(0px)"
}
//crad 5
function zoomIn5(){
    var x1 = document.getElementById('card1');
    var x2 = document.getElementById('card2');
    var x3 = document.getElementById('card3');
    var x4 = document.getElementById('card4');
    var x5 = document.getElementById('card5');
    x2.style.filter = "blur(9px)"
    x3.style.filter = "blur(9px)"
    x4.style.filter = "blur(9px)"
    x1.style.filter = "blur(9px)"
}
function normal5(){
    var x1 = document.getElementById('card1');
    var x2 = document.getElementById('card2');
    var x3 = document.getElementById('card3');
    var x4 = document.getElementById('card4');
    var x5 = document.getElementById('card5');
    x2.style.filter = "blur(0px)"
    x3.style.filter = "blur(0px)"
    x4.style.filter = "blur(0px)"
    x1.style.filter = "blur(0px)"
}
//card navigation
//card 1 
function lifeStyle(){
    window.location = "genre.php#lifeStyle"
}
//card 2 
function travel(){
    window.location = "genre.php#travel"
}
//card 3 
function food(){
    window.location = "genre.php#food"
}
//card 4 
function fashion(){
    window.location = "genre.php#fashion"
}
//card 5 
function others(){
    window.location = "genre.php#others"
}
function login(){
    window.location = "index.php"
}