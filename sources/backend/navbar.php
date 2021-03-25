<nav class="navbar navbar-expand-lg back-darken" style="box-shadow: 0px 0px 20px black; z-index: 999;">
	<div class="container">
	<div style="display: inline-block;" class="navbar-brand"><?php require_once(__DIR__."../../../sources/assets/media/logo.svg"); ?></div>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navMarkUp" aria-controls="navMarkUp" aria-expanded="false" aria-label="Toggle navigation">
		<span class="fa fa-bars text-white"></span>
	</button>	
	<div class="collapse navbar-collapse mx-auto justifiy-content-center text-center" id="navMarkUp">
		<div class="navbar-nav" style="display:inline-block !important;">
			<?php
				$pages = ['home','teams','news','media','sponsors','about us'];
				$activepage = basename(htmlspecialchars($_SERVER['PHP_SELF']), '.php');
				foreach ($pages as $page) {
					if($activepage == $page) {
						echo '<a class="nav-item nav-link text-white active-nav ml-4 ml-0-xs ml-0-sm ml-0-xs ml-0-md ml-0-lg ml-0-xl animate__animated animate__fadeInDown" style="display:inline-block !important;text-align: center;color: #FFB32C !important;" href="#">'.$page.'</a>';
					}
					else {				
						if($page == "teams") {
							echo '<a onclick="smoothScroll(document.getElementById(\'teams\'))" href="#'.$page.'" class="nav-item nav-link text-white ml-4 animate__animated animate__fadeInDown" style="display:inline-block !important;text-align: center;animation-delay: 0.1s;" href="#">'.$page.'</a>';
						}
						else {
						echo '<a onclick="smoothScroll(document.getElementById(\'teams\'))" href="/'.$page.'" class="nav-item nav-link text-white ml-4 animate__animated animate__fadeInDown" style="display:inline-block !important;text-align: center;animation-delay: 0.1s;" href="#">'.$page.'</a>';
						}
					}
				}

			?>
		</div>
	</div>
	</div>
</nav>

