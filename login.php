<?php 
session_start();
if(isset($_SESSION['set']))
	if($_SESSION['set']==1)
		echo("<script type='text/javascript'> alert('Invalid password....Retry');</script>");
	if($_SESSION['set']==2){
		echo("<script type='text/javascript'> alert('Registered successfully....Login to Continue');</script>");
	$_SESSION['set']=0;
	}	
?>
<!DOCTYPE html>
<html>
<style>
/* Full-width input fields */
input[type=email], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body style="background-image:url(background11.jpg)">

<div style="width:50%;position:fixed;top:30%;left:25%">
<button onclick="document.getElementById('id01').style.display='block'"><h1>Login</h1></button>
<center><button onclick="document.getElementById('id02').style.display='block'" style="width:auto"><h2>New User? Register</h2></button></center>
</div>
<div id="id01" class="modal">
  
  <form id="f1" class="modal-content animate" method="POST" action="log.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label><b>E-Mail</b></label>
      <input type="email" id="e" placeholder="Enter E-Mail" name="email" required>
	
      <label><b>Password</b></label>
      <input id="p" type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
    </div>
        
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<div id="id02" class="modal">
  
  <form id="f2" onsubmit="check()" class="modal-content animate" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label><b>E-Mail</b></label>
      <input type="email" placeholder="Enter E-Mail" name="email" required>

      <label><b>Password</b></label>
      <input type="password" id="p1" placeholder="Enter Password" name="psw" required>
	  
	  <label><b>Confirm Password</b></label>
	  <input type="password" id="p2" placeholder="Re-Enter Password" name="psw1" required>
	  
        
      <button type="submit">Sign Up</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');
var modal1 = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
	else if (event.target == modal1) {
        modal1.style.display = "none";
    }
}
function check(){
	if(document.getElementById("p1").value!=document.getElementById("p2").value){
		alert("Passwords dont match");
	}	
	else{
	document.getElementById("f2").action="register.php";
	}
}
</script>


</body>
</html>
