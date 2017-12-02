<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Gallery</title>
<link rel="icon" href="images/icon.png">
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Konstructs Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>
<body>
	<!-- header-section-starts -->
	<div class="header">
		<div class="container">
			<div class="logo">
				<a href="index.php"><h1>pabaya</h1></a>
			</div>
			<div class="pages">
				<ul>
					<li><a href="index.php">Beranda</a></li>
					<li><a class="active" href="gallery.php">Gallery</a></li>
					<li><a href="">Wisata</a></li>
				</ul>
			</div>
			<div class="navigation">
				<ul>
					<li><a href="contact.php">Kontak</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="form-group">
					<select name="" id="idData" class="form-control" style="margin-top:10px;">
						<option value="1">Tempat Wisata 1</option>
						<option value="2">Tempat Wisata 2</option>
						<option value="3">Tempat Wisata 3</option>
					</select>
				</div>
			</div>
		</div>
		<div class="row" id="showGallery">
			
		</div>
	</div>
	<div class="footer">
		<div class="footer-bottom">
			<div class="container">
				<div class="copyrights">
					<p>Copyright © 2017 by Rexa Akbar Malik and Koeda Studio | Template by  <a href="http://w3layouts.com">  W3layouts</a></p>
				</div>
			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			var idData = $("#idData").val();
			$.ajax({
				url : 'content/show_gallery.php' , 
				data : { idData : idData , } ,
				type : "POST" ,
				success : function(data){
					$("#showGallery").html(data);
				}
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#idData").change(function(){
				var idData = $("#idData").val();
				$.ajax({
					url : 'content/show_gallery.php' , 
					data : { idData : idData , } ,
					type : "POST" ,
					success : function(data){
						$("#showGallery").html(data);
					}
				});
			});
		});
	</script>
</body>
</html>