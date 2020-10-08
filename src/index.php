

<?php include "includes/_variables.php";?>

<!DOCTYPE html>
<html lang="da" class="no-js">

<head>
	<script>
		document.documentElement.className = document.documentElement.className.replace(/(\s|^)no-js(\s|$)/, '$1js$2');
	</script>
	
	<?php include('includes/head.php'); ?>

</head>

<body>
	<main>
		Hello world
	</main>
		
	<?php echo $script; ?>

<script id="__bs_script__">//<![CDATA[
document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.26.12'><\/script>".replace("HOST", location.hostname));
//]]></script>
</body>
</html>