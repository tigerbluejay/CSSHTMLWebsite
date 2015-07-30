<!doctype html>
<html>
<head>
    	<meta charset="utf-8">
    	<title>Hot Dog Designs: User-friendly designs, on fire.</title>
    	<script src="js/modernizr.js" type="text/javascript"></script>
    	<script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
		<script>
		$(document).ready(function() {
			$('.answer').hide();
			$('h2').toggle(
				function() {
					$(this).next('.answer').fadeIn();
					$(this).addClass('close');
				},
				function() {
					$(this).next('.answer').fadeOut();
					$(this).removeClass('close');
				}
			); //end toggle
		});
		</script>  
        
        <link href="css/reset.css" rel="stylesheet" type="text/css" />
    	<link href="css/styles.css" rel="stylesheet" type="text/css" />
		 
    
</head>
    
<body>
	<div id=container>
    <header><?php include 'header.php';?></header>
    <nav><?php include 'nav.php';?></nav>
    <div id =main3><?php include 'main3.php';?> </div>
    <footer><?php include 'footer.php';?></footer>
    </div>
    </body>

</html>

</html>