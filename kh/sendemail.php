<?php
	session_start();
	require_once 'mailer/class.smtp.php';
	require_once 'mailer/class.phpmailer.php';
	require_once 'mailer/PHPMailerAutoload.php';
	
	$mail = new PHPMailer;
	$mail->IsSendMail();
	//$mail->IsSMTP();
	$mail->SMTPDebug = 3;                                    
	$mail->Host = 'smtp.gmail.com';  
	$mail->SMTPAuth = true;                               
	$mail->Username = 'info@asiato.asia';                
	$mail->Password = 'a2acambodia2016';                    
	$mail->SMTPSecure = 'tls';           
	$mail->Port = 587;                                    
	$mail->setFrom('info@asiato.asia', 'vKirirom Pine Resort');
	$mail->addAddress('reservation@asiato.asia', 'vKirirom Pine Resort');    
	$mail->addReplyTo('reservation@asiato.asia', 'vKirirom Pine Resort');
	$mail->isHTML(false);	
	$datetime = date("Y-m-d  h:i:sa");
	$rn = "\r\n";

	if(isset($_POST['sendMsg'])){
		//$mail->SMTPDebug = 3;                               

		$name       = $_POST['userName'] == "" ? "NONE" : $_POST['userName']; 
		$from       = $_POST['userEmail'] == "" ? "NONE" : $_POST['userEmail'];
		$mobile     = $_POST['userPhone'] == "" ? "NONE" : $_POST['userPhone'];
		$message    = $_POST['userMsg'] == "" ? "NONE" : $_POST['userMsg'];
		
		$sendStatus = "";
		
		if(($name!="NONE" and trim($name)!="") and ($from!="NONE" and trim($from)!="") and ($message!="NONE" and trim($message)!="")){
			$mail->Subject = "Message from vKirirom website.";
			$mail->Body = "Send From : ".$name.$rn
						 ."Email : ".$from.$rn
						 ."Mobile : ".$mobile.$rn
						 ."Date : ".$datetime.$rn
						 ."Message body : ".$rn
						 .$message;
			if(!$mail->send()){
				echo $mail->ErrorInfo;
			}else{
				?>
					<?php
						//$_SESSION["te"] = true;
						$_SESSION["te"] = true;
					?>
					<script type="text/javascript">
						//alert('Thanks you for sending us a message.');
						window.location.href = "http://www.vkirirom.com/kh/thank.php";
					</script>
				<?php
			}
		}else{
			?>
				<script type="text/javascript">
					alert('Please fill all the required fields and submit again.');
				</script>
			<?php
		}

	}

	// END SEND EMAIL CONTACT FORM IN INDEX.PHP

	/*function random_string($length) {
	    $key = '';
	    $keys = array_merge(range(0, 9), range('A', 'Z'));

	    for ($i = 0; $i < $length; $i++) {
	        $key .= $keys[array_rand($keys)];
	    }

	    return $key;
	}*/

	
?>