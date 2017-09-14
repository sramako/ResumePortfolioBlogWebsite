<html>
<head >
	<title>My Resume</title>
	<link rel="stylesheet" href="New1.css"/>
	<style>

h2:hover
{
        color:skyblue;
        height:100;
        background-color:black;
        text-shadow:0px 30px grey;
        border:2px dotted lightblue
}



</style>
    
    <?php

        $link=mysqli_connect("localhost","root",'');
		mysqli_select_db($link,"users");
        $result = mysqli_query($link,"SELECT email,password,username,phone FROM cred WHERE email = 'a@b'");
        if (!$result) {
            echo 'Could not run query: ' . mysql_error();
            exit;
        }
        $row = mysqli_fetch_row($result);

        echo $row[0]; // 42
        echo $row[1]; // the email value
        echo $row[2];
        echo $row[3];
    ?>

</head>


<body background="background13.jpg">

<script>
window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";//again because google chrome don't insert first hash into history
window.onhashchange=function(){window.location.hash="no-back-button";}
</script> 

<div style="background-color:black;opacity:0.8;padding-left:10px;"><br>
<!-- Save Button BEGIN -->
<script type="text/javascript">
var
pdfbuttonlabel="Save my progress!"
</script>
<script src="pdf.js" id="Web2PDF" type="text/javascript"></script>
<!-- Save xButton END -->
<br><br>
</div>

	<div style="float:left;color:white">
	<br><br><br>
		<b style="color:white">Name: </b> <i><a id="1"></a></i>
		
		
		
		<b style="color:lightblue">         <br/><br/>Contact: </b>         <i><a id="3"></a></i>
		
	        <b style="text-decoration:blink">       <br/><br/>Send mail: <a id="2"></a> </b>    
	</div>
	
	<div style="z-index:1">
	<p align="right">
	        <img id=im src="photo3.jpg" border='8' alt="Photo" height="80%">
        </p>
        </div>
	
	<script>
	var s=document.cookie;
	var x=s.split("/");
	document.getElementById("1").innerHTML = x[0];
	document.getElementById("2").innerHTML = x[1];
	document.getElementById("3").innerHTML = x[2];
	</script>
</body>
</html>
