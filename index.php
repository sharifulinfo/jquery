<?php require_once('inc/header.php');?>

<?php 
	function test(){
		return 'SlideUp';
	} 
?>

<div class="container">
	<section class="headsection">
		<h1>My First Bootstrap Page</h1>
	</section>
	<section class="main-content">
		<p>main contant</p>
	</section>
	<section class="footersection">
		<p>This is footer</p> 
	</section>
</div>

<?php require_once('inc/footer.php')?>


<script type="text/javascript">
var vars = '<?php echo test();?>';
</script>
