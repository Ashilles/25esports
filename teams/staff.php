<!DOCTYPE html>
<html lang="en" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php $title="Staff"; require_once(__DIR__."/../sources/backend/metas.php");$memb = ""; ?>

</head>
<body class="back-darken">
	<?php require_once(__DIR__."/../sources/backend/navbar.php"); ?>

	<?php

	// print_r($json['members'][0]['name']);

	?>

	<div class="col-12 text-white mx-auto text-center mt-5"><h1 style="color: orange;">Managing Staff</h1><small>Team</small></div>	
		<div class="container pt-2 pl-5 pr-5 mx-auto">
			<h4 style="color: #fff;" class="mt-4 text-center">Founder</h4><hr class="bg-white" style="box-shadow: 3px 3px 3px rgba(0,0,0,0.25);" width="200">
			<div class="row">
				<?php 

				foreach ($json['staff']['founders'] as $member) {

					if(isset($member['name'])) {

						echo '
					<div class="col-4 mx-auto mt-4">
						<div class="member">

						<p class="member_name founder pl-3 pb-2 pt-2" style="font-family: \'protocol-regular\';">'.$member["name"].'</p>

						';

						if($member["youtube"] != null) {
							echo '<p class="member_social p-2 mt-2"><a href="'.$member['youtube'].'"><i class="fa fa-youtube"></i></a></p>';
						}

						if($member["twitter"] != null) {
							echo '<p class="member_social p-2 mt-2"><a href="'.$member['twitter'].'"><i class="fa fa-twitter"></i></a></p>';
						}

						if($member["twitch"] != null) {
							echo '<p class="member_social p-2 mt-2"><a href="'.$member['twitch'].'"><i class="fa fa-twitch"></i></a></p>';
						}

						if($member["instagram"] != null) {
							echo '<p class="member_social p-2 mt-2"><a href="'.$member['instagram'].'"><i class="fa fa-instagram"></i></a></p>';
						}

						echo '<hr class="m-0 bg-white mb-2 mx-auto text-center" width="50">
							
							';
						if($member["role"] != null) {
							echo '<h6 class="mb-2"><span class="role">&smashp;</span> '.$member['role'].'</h6>';
						}
						else{
							echo '<h6 class="mb-2"><span>&starf;</span> Member</h6>';
						}

						echo '
						</div>
					</div>	


						';

						echo $memb;
					}
				}

				?>
	
			</div>
		</div>

		<div class="container pt-2 pl-5 pr-5 mx-auto">
			<h4 style="color: #fff;" class="mt-4 text-center">Co-Founders</h4><hr class="bg-white" style="box-shadow: 3px 3px 3px rgba(0,0,0,0.25);" width="200">
			<div class="row mx-auto">
				<?php 

				foreach ($json['staff']['co_founders'] as $member) {

					if(isset($member['name'])) {

						echo '
					<div class="col-4 mx-auto mt-4">
						<div class="member">

						<p class="member_name pl-3 pb-2 pt-2" style="font-family: \'protocol-regular\';">'.$member["name"].'</p>

						';

						if($member["youtube"] != null) {
							echo '<p class="member_social p-2 mt-2"><a href="'.$member['youtube'].'"><i class="fa fa-youtube"></i></a></p>';
						}

						if($member["twitter"] != null) {
							echo '<p class="member_social p-2 mt-2"><a href="'.$member['twitter'].'"><i class="fa fa-twitter"></i></a></p>';
						}

						if($member["twitch"] != null) {
							echo '<p class="member_social p-2 mt-2"><a href="'.$member['twitch'].'"><i class="fa fa-twitch"></i></a></p>';
						}

						if($member["instagram"] != null) {
							echo '<p class="member_social p-2 mt-2"><a href="'.$member['instagram'].'"><i class="fa fa-instagram"></i></a></p>';
						}

						echo '<hr class="m-0 bg-white mb-2 mx-auto text-center" width="50">
							
							';
						if($member["role"] != null) {
							echo '<h6 class="mb-2"><span class="role">&smashp;</span> '.$member['role'].'</h6>';
						}
						else{
							echo '<h6 class="mb-2"><span>&starf;</span> Member</h6>';
						}

						echo '
						</div>
					</div>	


						';

						echo $memb;
					}
				}

				?>
	
			</div>
		</div>	

		<div class="container pt-2 pl-5 pr-5 mx-auto">
			<h4 style="color: #fff;" class="mt-4 text-center">Managers</h4><hr class="bg-white" style="box-shadow: 3px 3px 3px rgba(0,0,0,0.25);" width="200">
			<div class="row">
				<?php 

				foreach ($json['staff']['managers'] as $member) {

					if(isset($member['name'])) {

						echo '
					<div class="col-4 mt-4">
						<div class="member">

						<p class="member_name pl-3 pb-2 pt-2" style="font-family: \'protocol-regular\';">'.$member["name"].'</p>

						';

						if($member["youtube"] != null) {
							echo '<p class="member_social p-2 mt-2"><a href="'.$member['youtube'].'"><i class="fa fa-youtube"></i></a></p>';
						}

						if($member["twitter"] != null) {
							echo '<p class="member_social p-2 mt-2"><a href="'.$member['twitter'].'"><i class="fa fa-twitter"></i></a></p>';
						}

						if($member["twitch"] != null) {
							echo '<p class="member_social p-2 mt-2"><a href="'.$member['twitch'].'"><i class="fa fa-twitch"></i></a></p>';
						}

						if($member["instagram"] != null) {
							echo '<p class="member_social p-2 mt-2"><a href="'.$member['instagram'].'"><i class="fa fa-instagram"></i></a></p>';
						}

						echo '<hr class="m-0 bg-white mb-2 mx-auto text-center" width="50">
							
							';
						if($member["role"] != null) {
							echo '<h6 class="mb-2"><span class="role">&smashp;</span> '.$member['role'].'</h6>';
						}
						else{
							echo '<h6 class="mb-2"><span>&starf;</span> Member</h6>';
						}

						echo '
						</div>
					</div>	


						';

						echo $memb;
					}
				}

				?>
	
			</div>
		</div>	

</body>
</html>