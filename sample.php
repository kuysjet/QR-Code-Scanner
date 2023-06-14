<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMS API</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">

<style>
/* Text box */
  input::-webkit-outer-spin-button,
  input::-webkit-inner-spin-button {
  -webkit-appearance: none;}



.card {
  width: 360px;
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
}

.chat-header {
  background-color: #0275d8;
  color: #fff;
  padding: 10px;
  font-size: 18px;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}

.chat-window {
  height: 220px;
  overflow-y: scroll;
}

.message-list {
  list-style: none;
  margin: 0;
  padding: 0;
}

.chat-input {
  display: flex;
  align-items: center;
  padding: 10px;
  border-top: 1px solid #ccc;
}

.message-input {
  flex: 1;
  border: none;
  outline: none;
  padding: 5px;
  font-size: 14px;
}

.send-button {
  border: none;
  outline: none;
  background-color: #0275d8;
  color: #fff;
  font-size: 14px;
  padding: 5px 10px;
  cursor: pointer;
}

.send-button:hover {
  background-color: rgb(255, 255, 255);
  color: rgb(0, 0, 0);
  box-shadow: 0 4px 18px 0 rgba(0, 0, 0, 0.25);
}

.clear-button {
  border: none;
  outline: none;
  background-color: #6c757d;
  color: #fff;
  font-size: 14px;
  padding: 5px 10px;
  cursor: pointer;
}

.clear-button:hover {
  background-color: rgb(255, 255, 255);
  color: rgb(0, 0, 0);
  box-shadow: 0 4px 18px 0 rgba(0, 0, 0, 0.25);
}

/* --------------- */
.form-container{margin-top: 150px;}

/* ------------------- */

/* dark mode */

body {
	background-color: #fafafa;
	transition: background 0.2s linear;
}

body.dark {
	background: #292C35;
}

body.dark .chat-header {
  background-color: #333;
  color: #fff;
}

body.dark .send-button {
  background-color: #333;
  color: #fff;
}

.checkbox {
	opacity: 0;
	position: absolute;
}

.label {
	background-color: #111;
	border-radius: 50px;
	cursor: pointer;
	display: flex;
	align-items: center;
	justify-content: space-between;
	padding: 5px;
	position: relative;
	height: 26px;
	width: 50px;
	transform: scale(1.5);
}

.label .ball {
	background-color: #fff;
	border-radius: 50%;
	position: absolute;
	top: 2px;
	left: 2px;
	height: 22px;
	width: 22px;
	transform: translateX(0px);
	transition: transform 0.2s linear;
}

.checkbox:checked + .label .ball {
	transform: translateX(24px);
}


.fa-moon {
	color: #f1c40f;
}

.fa-sun {
	color: #f39c12;
}


/* Gradient */





</style>
</head>
<body>
<div class="one-quarter" id="switch">
  <input type="checkbox" class="checkbox" id="chk" />
  <label class="label mt-3 ml-3" for="chk">
      <i class="fas fa-moon"></i>
      <i class="fas fa-sun"></i>
      <div class="ball"></div>
  </label>
</div>
  <div class="form-container d-flex justify-content-center">
    <form id="form-box" action="sms_sample.php" method="post">
      <div class="card shadow-lg">
        <div class="chat-header">Chat</div>
          <div class="chat-window">
          <div class="form-group input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-phone"></i></i></span>
              </div>
              <input type="number" name="number" id="number" class="form-control" placeholder="Mobile Number" required>
            </div>
            <ul class="message-list"></ul>
          </div>
          <div class="chat-input">
              <input type="text" name="text" id="text" class="message-input" placeholder="Type your message here">
              <!-- <button name="clearbtn" onclick="clearfield()" class="clear-button mr-1">Clear</button> -->
              <button type="submit" name="submit" id="submit" class="send-button">Send</button>
          </div>
          <div class="card-footer">
            <div id="response">

            </div>
          </div>
        </div>
      </form>
      
    </div>


</body>


<!-- Dark Mode -->
<script>
  const chk = document.getElementById('chk');

chk.addEventListener('change', () => {
	document.body.classList.toggle('dark');
});

// SOCIAL PANEL JS
const floating_btn = document.querySelector('.floating-btn');
const close_btn = document.querySelector('.close-btn');
const social_panel_container = document.querySelector('.social-panel-container');

floating_btn.addEventListener('click', () => {
	social_panel_container.classList.toggle('visible')
});

close_btn.addEventListener('click', () => {
	social_panel_container.classList.remove('visible')
});
</script>


<!-- form submission -->
<!-- <script>
    $(document).ready(function() {
      // adding click eventon submit button
    $('#submitbtn').click(function() {
        // prevent the default form submission
        // event.preventDefault();
        
        // get input field values
        var number = $("#number").val();
        var text = $("#textmsg").val();

        // making ajax call after this recieve
        $.post("sms_sample.php",{
          number:number,
          textsmg:textsmg
        },function(response){
          // response from api
          // showing response in message alert box
          $("#response").html("<div class='alert alert-success'>"+response.message+"</div>")
          clearfield();
        })
        

        // clear text field
        function clearfield(){
          $("#textmsg").val("");
        }


        
        // // send the form data to the server using AJAX
        // $.ajax({
        // url: 'sms.php', // use the form's action attribute as the URL
        // type: 'POST', // use the form's method attribute as the HTTP method
        // data: formData,
        // success: function(response) {
        //     // code to execute if the form submission is successful
        //     alert('Message sent successfully!');
        // },
        // error: function(xhr, status, error) {
        //     // code to execute if the form submission fails
        //     alert('Message could not be sent. Please try again later.');
        // }
        // });
    });
    });
</script> -->

<script src="script.js"></script>
<script
  src="https://code.jquery.com/jquery-3.7.0.js"
  integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</html>