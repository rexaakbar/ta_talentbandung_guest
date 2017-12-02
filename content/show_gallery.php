<?php 
	$idData = $_POST['idData'];
	$urlGambar = 'images/asset-img/'.$idData.'.jpg';
	for ($i = 0; $i < 10; $i++) {
?>
	<div class="col-md-3" style="padding-top:10px;padding-bottom:10px;">
		<img src="<?php echo $urlGambar; ?>" class="img-responsive" alt="">
	</div>
<?php
	}
?>