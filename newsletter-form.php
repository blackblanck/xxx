<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<link href="popup.css" rel="stylesheet">
<script src="hi.js"></script>
</head>

<body>

<div id="fade" class="overlay"></div>
<div class="pretend"> 
<a href='#' class='text'><h2>SIGN ME UP</h2></span>
<div class="popup">
  <div class='popup-text'>
    <form action="newsletter-add.php" method="post">
	<fieldset>
		<legend>JA TAK, NULLAM UT ANTE QUAM LOREM IPSUM CRAS FACILIS</legend>
		<input type="text" name="name" placeholder="Name" required><br>
		<input type="email" name="email" placeholder="Email" required><br>
		<input type="phone" name="phone" placeholder="Telephone" required><br>
		<input type="submit" name="cmd" value="Send">
	</fieldset>
</form>	
  </div>
  <a class='popup-close' href="#">Close</a>
</div>
</div>
<script>
	// Open popup
$('.text').click(function() {
    $('.popup').css('opacity', 1);
    $('.overlay').css('opacity', 0.8);
    $('.popup').css('display', 'block');
		$('.overlay').css('display', 'block'); 
});
// close popup
$('.popup-close').click(function() {
    $('.popup').css('opacity', 0);
    $('.overlay').css('opacity', 0);
    setTimeout(function() {
        $('.popup').css('display', 'none');
		    $('.overlay').css('display', 'none'); 
    }, 1000);
    
});
	</script>


</body>
</html>