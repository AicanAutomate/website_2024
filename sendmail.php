<?php
if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
    $company=$_POST['company'];
    $mobile=$_POST['mobile'];
	


	$word = "http"; 
 

	$headers='From:'.$email."\n".'Reply-To:'.$email."\n".	
    'X-Mailer: PHP/' . phpversion()."\n".'content-type :text/html;charset=UTF-8';
	$message='<br>Name: '.$name.'<br>Email: '.$email.'<br>Company: '.$company.'<br>Mobile: '.$mobile. '<br>';
	if(mail('work@aican.co.in','enquiry mail from enquiry form',$message,$headers)){
	    
	  
	   // echo "123";
		header('Location:thank-you.html');
	}
else{
    //   echo "123456";
	header('Location:contact.html?Message=error');
}
	
}