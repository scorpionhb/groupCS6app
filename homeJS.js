/**
 * Created by azifchyy on 4.12.2016 г..
 */
//log in button
function logIn() {
    var i = 0;

    if (i == 0) {

        document.getElementById("loginFields").remove();


        //add logout button
        var button = document.createElement("li"),
            a = document.createElement("a"),
            span = document.createElement("span"),
            buttonText = document.createTextNode("Logout");

        span.appendChild(buttonText);
        a.appendChild(span);
        button.appendChild(a);

        span.className = "btn btn-default btn-sm";
        button.className = "nav navbar-nav navbar-right";
        var logoutButton = document.getElementById("myNavbar");

        button.style.paddingTop = "10px";
        button.style.marginLeft = "15px";

        logoutButton.appendChild(button);
        logoutButton.addEventListener("mousedown", logOut);

        button.id = "loginFields";

        // add welcome sign
        var helloSign = document.createElement("ul"),
            hiText = document.createTextNode("HELLO JOHN!");
        helloSign.appendChild(hiText);

        var element = document.getElementById("myNavbar");

        helloSign.className = "nav navbar-nav navbar-right";
        helloSign.style.paddingTop = "15px";

        element.appendChild(helloSign);
        helloSign.id = "loginFields1";


    refresh();


    }
}
//if logout kick user from platform
function logOut(){

        location.reload();

}
//kick user after 10 minutes in website
function refresh() {

    setTimeout(function(){ location.reload(); }, 3000);
}