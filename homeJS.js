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
        span.addEventListener("mousedown", logOut);

        button.id = "loginFields";

        // add welcome sign
        var helloSign = document.createElement("p"),
          //  text = document.getElementById("username").value ,
            hiText = document.createTextNode("Hello John");
      //  helloSign.appendChild(hiText);
        helloSign.style.color = "white";

        var element = document.getElementById("myNavbar");

        helloSign.className = "nav navbar-nav navbar-right";
        helloSign.style.paddingTop = "15px";

        element.appendChild(helloSign);
        helloSign.id = "loginFields1";

     // var  display = document.querySelector('#test');
        startTimer(600);
    }
};

//if logout kick user from platform
function logOut(){
   location.reload();
    alertify.success("Timer resseted for 10 minutes");

};

function timeout(){
    bootbox.confirm({
        title: "Session ending?",
        id: "probvai",
        message: "Do you want to activate the Deathstar now? This cannot be undone.",
        buttons: {
            cancel: {
                label: '<i class="fa fa-check"></i> Logout' ,

            },
            confirm: {
                label: '<i class="fa fa-times"></i> Reset timer',

            },

        },
        callback: function (result) {
            if(result){
                alertify.set('notifier','position', 'top-right');
                alertify.success("Timer resseted for 10 minutes");
                timer = 600;
            }else{
                location.reload();
            }
        }
    });


};
var timer, minutes, seconds;
function startTimer(duration) {
    timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

      //  display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
                location.reload();
        }else if(timer == 60 ){
            timeout();


        }
    }, 1000);
}

 function logginTimeout() {
     alertify.success("Timer resseted for 10 minutes");
};










//------calendar---------------------







var eventData = [
    {"date":"2016-12-01","badge":false,"title":"Example 1"},
    {"date":"2016-12-16","badge":true,"title":"Example 2"}
];
////////////testttttttttttt

$(document).ready(function () {
    $("#demo").zabuto_calendar({
        language: false,
        year: year,
        month: month,
        show_previous: true,
        show_next: true,
        data: false, //can hard-code using eventData.. now we use event.txt for the events
        legend: false, // object array, [{type: string, label: string, classname: string}]
        action: false, // function
        action_nav: true,
        cell_border: true,
        today: true,
        show_days: false,
        weekstartson: 0,
        nav_icon: false,
        /*nav_icon: {
            prev: '<i class="fa fa-chevron-circle-left"></i>',
            next: '<i class="fa fa-chevron-circle-right"></i>'
        },*/
        ajax:{
            url: "event.txt",
            modal: true,
        }
    });


var now = new Date();
var year = now.getFullYear();
var month = now.getMonth() + 1;
var calSettings = {
  /*  language: false,
    year: year,
    month: month,
    show_previous: true,
    show_next: true,
    cell_border: false,
    today: false,
    show_days: true,
    weekstartson: 1,
    nav_icon: false, // object: prev: string, next: string
    data: eventData,
    ajax: false, // object: url: string, modal: boolean,
    legend: false, // object array, [{type: string, label: string, classname: string}]
    action: false, // function
    action_nav: false,*/
// function

};




});









//----------------------photo grid----------------------

jQuery(document).ready(function($) {

    $('#myCarousel').carousel({
        interval: 5000
    });

    //Handles the carousel thumbnails
    $('[id^=carousel-selector-]').click(function () {
        var id_selector = $(this).attr("id");
        try {
            var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            jQuery('#myCarousel').carousel(parseInt(id));
        } catch (e) {
            console.log('Regex failed!', e);
        }
    });
    // When the carousel slides, auto update the text
    $('#myCarousel').on('slid.bs.carousel', function (e) {
        var id = $('.item.active').data('slide-number');
        $('#carousel-text').html($('#slide-content-'+id).html());
    });
});












