<?php 
include('connect.php');
$query="select * from detail ORDER by date DESC";
$res=mysqli_query($con,$query);
while($data=mysqli_fetch_array($res)){
$user=$data['user'];
$chatbot=$data['chatbox'];
$date=$data['date'];

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Chatbot</title>
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<div class="container">
<div class="chatbot"><i class="fa fa-comments" value="Animate"></i></div>
<div id="main-frame" style="display:none;">
<div id="frame">
	<div class="content">
		<div class="contact-profile">
			<img src="" alt="" />
			<p>Janvi</p>
			<div class="social-media">
				<i class="fa fa-facebook" aria-hidden="true"></i>
				<i class="fa fa-twitter" aria-hidden="true"></i>
				 <i class="fa fa-instagram" aria-hidden="true"></i>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="messages">
			<ul>
				
	
				
				
			</ul>
		</div>
		<div class="message-input" >
			<div class="wrap">
			<input type="text" placeholder="Write your message..." id="input" />
			
			<input type="button" class="btn btn-primary" value="send" onclick="send()">
			
			</div>
		</div>
	</div>
	
</div>
</div>
</div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="js/tether.min.js" ></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script>
	
				$(document).ready(function(){
  $(".chatbot").click(function(){
	$(".messages").stop().animate({ scrollTop: $(".messages")[0].scrollHeight}, 1000);
    $("#main-frame").slideToggle("slow");
  });
  });
$(window).on("load", function () {
    $(".messages").stop().animate({ scrollTop: $(".messages")[0].scrollHeight}, 1000);
});

$(".submit").click(function() {
        $(".messages").stop().animate({ scrollTop: $(".messages")[0].scrollHeight}, 1000);
});

</script>
</html>
