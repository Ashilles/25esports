	<?php 

		$json = json_decode(file_get_contents(__DIR__.'/data.json'), true);

	 ?>
<!-- 

	Made by Ahmed © 2020 (CC 4.0)
	Instagram (@_pmy)

	[Date: <?php echo htmlspecialchars(date("Y/m/d")); ?>]
	[Last Update 2020/09/28]
	[Page: <?php echo ucfirst(basename(htmlspecialchars($_SERVER['PHP_SELF']), '.php')); ?>]

	-->

	<!-- Metas -->
	<meta charset="utf-8">
	<meta name="description" content="25Esports Organization &mdash; Official Website">
	<meta name="keywords" content="Gaming, Esports, Esports Team, Organization, 25Esports">
	<meta name="author" content="Ahmed">

	<meta property="og:title" content="25Esports" />
	<meta property="og:type" content="website" />

	<meta property="og:image" content="https://cdn.discordapp.com/attachments/761654967417176085/761698688401014814/Untitled-1.png" />
	<meta property="og:description" content="25Esports Organization &mdash; Official Website">
	<meta property="og:site_name " content="25Esports">

	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->


	<!-- Build -->
	<link rel="stylesheet" type="text/css" href="/sources/assets/styles/style.css">
	<link href="/favicon.ico" rel="icon" type="image/x-icon" />

	<!-- jQuery 3.5.1 -->
	<script type="text/javascript" src="/sources/assets/frameworks/scripts/jquery.js"></script>
	<script type="text/javascript" src="/sources/assets/frameworks/scripts/jquery.min.js"></script>
	<!-- Bootstrap 4.3 -->
	<link rel="stylesheet" type="text/css" href="/sources/assets/frameworks/styles/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/sources/assets/frameworks/styles/bootstrap.min.css">
	<script type="text/javascript" src="/sources/assets/frameworks/scripts/bootstrap.js"></script>
	<script type="text/javascript" src="/sources/assets/frameworks/scripts/bootstrap.min.js"></script>
	<!-- Font Awesome 4.7.0 -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Animate.css v4 -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
	<!-- Others -->
	<title>25Esports — <?php echo $title; ?></title>
	<?php
	$page = basename(htmlspecialchars($_SERVER['PHP_SELF']), '.php');
	if($page == "home") {
		
	} 

	?>