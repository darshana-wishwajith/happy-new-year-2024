function coppy() {
  var link = document.getElementById("link").innerHTML;

  navigator.clipboard.writeText(link);

  document.getElementById("clipBtn").classList.toggle("bi-clipboard");
  document.getElementById("clipBtn").classList.toggle("bi-clipboard-fill");
}

function saveGreeting(){
  var sfname = document.getElementById("sfname");
  var slname = document.getElementById("slname");
  var rfname = document.getElementById("rfname");
  var rlname = document.getElementById("rlname");
  var cmsg = document.getElementById("cmsg");

  var form = new FormData();

  form.append("sfname",sfname.value);
  form.append("slname",slname.value);
  form.append("rfname",rfname.value);
  form.append("rlname",rlname.value);
  form.append("cmsg",cmsg.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function(){
    if(request.readyState == 4 && request.status == 200){
      var response = request.responseText;

      response_object = JSON.parse(response);

      var status = response_object.status;
      var error = response_object.error;
      var res_link = response_object.link;

      if(status == "success" && error == "no_error" && link !="no_link"){
        var sfname = document.getElementById("sfname");
        var slname = document.getElementById("slname");
        var rfname = document.getElementById("rfname");
        var rlname = document.getElementById("rlname");
        var cmsg = document.getElementById("cmsg");
      
        sfname.value = "";
        slname.value = "";
        rfname.value = "";
        rlname.value = "";
        cmsg.value = "";
        

        var link_container = document.getElementById("link_container");
        link_container.classList.toggle("d-none");

        var link = document.getElementById("link");
        link.innerHTML = res_link;
        
        alert("Your greeting is recorded successfully! You can copy the link to your clipboard and send it to your sender through WhatsApp.");

      }
      else if(error != "no_error"){
        alert(error);
      }
    }
  }

  request.open("POST", "saveGreeting.php",true);

  request.send(form);
}

function clr(){

  var sfname = document.getElementById("sfname");
  var slname = document.getElementById("slname");
  var rfname = document.getElementById("rfname");
  var rlname = document.getElementById("rlname");
  var cmsg = document.getElementById("cmsg");

  sfname.value = "";
  slname.value = "";
  rfname.value = "";
  rlname.value = "";
  cmsg.value = "";
}

function new_year_timer(){
  //var newYear = new Date("January 01, 2024 00:00:00").getTime();

  var newYear = new Date("December 31, 2023 22:14:50").getTime();

  var counter = setInterval(function () {
    var dateTimeNow = new Date().getTime();
    var range = newYear - dateTimeNow;
  
    var days = Math.floor(range / (1000 * 60 * 60 * 24));
    var hours = Math.floor((range % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((range % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((range % (1000 * 60)) / 1000);
  
    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("minutes").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;
  
    if (range < 0) {
      clearInterval(counter);
  
      document.getElementById("days").innerHTML = "00";
      document.getElementById("hours").innerHTML = "00";
      document.getElementById("minutes").innerHTML = "00";
      document.getElementById("seconds").innerHTML = "00";

      document.getElementById("counter").classList.toggle("d-none");

      countdownTimer();
      
      

    }
  }, 1000);
}

// function ten_counter(){
//   var ten_counter = document.getElementById("ten-counter");
//   ten_counter.classList.toggle("d-none");

//   ten_counter_number = document.getElementById("ten_counter_number");

//   for(i = 10; i>=0; i--){

//       ten_counter_number.innerHTML = i;
//   }

//   }

 var countdown = 10;
  function countdownTimer() {

    var ten_counter = document.getElementById("ten-counter");
    ten_counter.classList = "container d-inline";

    document.getElementById("ten_counter_number").textContent = countdown;
    countdown--; 
  
    if (countdown >= 0) {
      setTimeout(countdownTimer, 1000); 

    } else {
      document.getElementById("ten_counter_number").textContent = 0;
      ten_counter.classList = "container d-none";
      happyNewYear();
    }
  }

  function happyNewYear(){
    createConfettiExplosion();
    var ten_counter = document.getElementById("confetti-canvas");
    ten_counter.classList = "container d-inline";
  }

  function createConfettiExplosion() {
    // Ensure the canvas-confetti library is loaded
    if (!window.ConfettiGenerator) {
      throw new Error("canvas-confetti library not found. Please include it in your HTML.");
    }
  
    // Get the canvas element
    const canvas = document.getElementById('confetti-canvas');
  
    // Create the confetti generator with customizable options
    const confetti = new ConfettiGenerator(canvas, {
      particleCount: 100,
      spread: 150,
      colors: ['#f0f', '#0f0', '#f00'], // Customize colors
      shapes: ['square', 'circle'], // Customize shapes
      // Explore more options in the library's documentation: https://www.skypack.dev/view/canvas-confetti
    });
  
    // Start the confetti
    confetti.start();
  
    // Optional: Stop the confetti after a duration
    setTimeout(() => confetti.stop(), 5000); // Adjust duration as needed
  }
  
  // Example usage:
  //createConfettiExplosion(); // Trigger immediately
  
  // // Trigger on a button click
  // document.getElementById('myButton').addEventListener('click', createConfettiExplosion);
  
  // // Trigger on page load
  // window.addEventListener('load', createConfettiExplosion);



