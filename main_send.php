<?php
$mailTo     = 'yourmail@gmail.com';
if(
    !isset($_POST['contact-name']) ||
    !isset($_POST['contact-phone']) ||
    empty($_POST['contact-name']) ||
	empty($_POST['contact-phone'])  
) {
    echo '<script type="text/javascript">window.parent.$("#msg").html("' . $fillMsg . '");window.parent.$("#msg").show();</script>';
} else {

	$msg = "Имя: ".$_POST['contact-name']."\r\n";
	$msg .= "Телефон: ".$_POST['contact-phone']."\r\n\r\n";
    $theme = "Your message";
    $success = mail($mailTo, $theme, $msg);
    if ($success) {
        echo '<script type="text/javascript">window.parent.$("#msg").html("' . $successMsg . '");
	</script>';
    } 
		else {
        echo '<script type="text/javascript">window.parent.$("#msg").html("' . $errorMsg . '");window.parent.$("#msg").show();</script>';
    }
}
?>