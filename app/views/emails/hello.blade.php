<?php
//get the first name
$first_name = Input::get('firstname');
$last_name = Input::get ('lastname');
$email = Input::get ('email');
$subject = Input::get ('subject');
$message = Input::get ('message');
$date_time = date("F j, Y, g:i a");
$userIpAddress = Request::getClientIp();
?> 
<h2>We have been contacted by <span style="font-weight:lighter"> (<?php echo ($first_name." ".$last_name); ?>)</span> </h2>
<div>
<p><span style="font-weight:bolder">Subject : </span> <?php echo ($subject); ?></p>
<p><span style="font-weight:bolder">Message : </span><?php echo ($message); ?></p>
</div>
<dl>
  <dt style="font-weight:bolder">Sender Details :</dt>
  <dd><span style="font-weight:bolder">Name : </span><?php echo ($first_name." ".$last_name); ?></dd>
  <dd><span style="font-weight:bolder">Email address : </span><?php echo ($email);?></dd>
  <dd><span style="font-weight:bolder">Date : </span><?php echo($date_time);?></dd>
  <dd><span style="font-weight:bolder">User IP address : </span> <?php echo($userIpAddress);?></dd>
</dl>