<?php
if($isset($_POST['submit'])) {
	$emailbody = 'Full Name: '.$_POST['name']."\n"
    .'Email Address: '.$_POST['email']."\n"
	.'Message: '.$_POST['message']."\n"
	.'Reply: '.$_POST['reply']."\n"
	.'Message: '.$_POST['message']."\n";
	mail('zhang.jerry7@gmail.com', 'Subject Line', $emailbody);
    header('location: index.html');    
} else {
	header('location: contact.html'); 
}
?>