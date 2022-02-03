<?php
if (isset($_POST['continue'])) {

if(!isset($_SESSION['username'])){

    $_SESSION['msg'] = "You most log in to view this page";
    header('location: Adminpage/page-login.php'); 
}else{
	$prompt ="<p>Click the button to demonstrate the prompt box.</p>

<button onclick='myFunction()'>Try it</button>

<p id='demo'></p>";

echo($prompt);
}
	
	
	

}
?>