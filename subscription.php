<?php
if(isset($_REQUEST['email'])){
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";  
  $headers .= 'From: dayasagar940@gmail.com' . "\r\n";
//  $headers .= 'Cc: myboss@example.com' . "\r\n";
  $to = 'dayasagar940@gmail.com';
  $subject = "Stay in the loop";
  $message = '<p><strong>Hello Sir/Madam,</strong></p>
  <p><strong>Please contact with : <b>'.$_REQUEST['email'].'</b></p>
  <p><br />
  <b>Regards<br />
  SMTeh Team</b></p>';
 // echo mail($to,$subject,$message,$headers);
    if(mail($to,$subject,$message,$headers)){
      $mes =  'success';
    }else{
      $mes = 'error';
    }
    echo $mes;
};
?>