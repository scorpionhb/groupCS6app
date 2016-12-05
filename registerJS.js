
function myFunction() {
    var pass1 = document.getElementById("password1").value;
    var pass2 = document.getElementById("password2").value;
    var textLength = pass1.length;
    var ok = true;


        if (pass1 != pass2 || textLength <=8) {
            alert("Passwords Do not match or their length is less than 8 symbols");
            document.getElementById("password1").style.borderColor = "#E34234";
            document.getElementById("password2").style.borderColor = "#E34234";
            ok = false;
            console.log("Hi");
        }

    else {
        alert("Passwords Match!!!");
    }
    return ok;
}

