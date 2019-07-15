<title>Belajar English - Redirect</title>
<?php
include 'partials/head.php';
$link = base64_decode($_GET['id']);
?>
<style>
	.center {
    height: 200px;
    width: 400px;
    text-align: center;
    position: fixed;
    top: 50%;
    left: 50%;
    margin-left: -200px;
}
</style>
<div class="center">
	<div class="spinner-border" role="status">
  		<span class="sr-only">Loading...</span>
	</div>
	<div>Loading...</div>
</div>
<form id="jsform" method="POST" action="stt.php">
	<input type="hidden" name="test" value="<?php echo $link ?>">
</form>
<script>
	document.getElementById('jsform').submit();
</script>