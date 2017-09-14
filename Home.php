<?php
session_start();
extract($_SESSION);
$email=$_SESSION['em'];
?>
<html>
<head>
	<link rel="stylesheet" href="Home.css">

</head>
<body id="container" style="background-image:url(background8.jpg)">
<h1 id="head1" align='center' style="background-color:black;color:white;opacity:0.8;" >Welcome</h1>
<div>
<div class="l"><a href="SramanHome.html">
    <img id="wrapper" class="img-circle1" src="left.jpg" height="80%">

	</br></br><center style="color:grey">PORTFOLIO & BLOG MAKER</center>
</div></a>
<div class="r"><a href="#">
    <img class="img-circle2" src="right.jpg" height="80%">
	</br></br><center style="color:grey">PROFESSIONAL RESUME MAKER</br>coming soon</center>
</div></a>
</div>
<script>
    var email='<?php echo $email; ?>'
    function show()
    {
        var h=document.getElementById("head1");
        h.textContent="Welcome "+email;
    }
    show();
</script>
</body>
</html>