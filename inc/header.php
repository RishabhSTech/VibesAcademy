<?php
$root_url = "https://www.thevibes.academy/";
?>
<div class="miniHeader" style="display:none;background: #ff3701; color: #fff; padding: 1px 0px; text-align: center; font-size: 15px;">
    	   <p>New batch starts on 3rd June 2024</p>
</div>
<header>
	<div class="container-fluid">
		<nav class="mobile-menu">
		    
		    <?php
            if(isset($_GET['lang'])) {
            $lang = $_GET['lang'];
            
            if($lang == 'hi') {
        
        ?>

			<a class="logo" href="<?php echo $root_url; ?>?lang=hi">
			<img src="<?php echo $root_url; ?>images/logo.png" alt="logo"/>
		</a>
		
		<?php
			} elseif($lang == 'mr') {
			// Content for Marathi
		} else {
			header("Location:index.php");
		}
	} else { ?>
		
			<a class="logo" href="<?php echo $root_url; ?>">
			<img src="<?php echo $root_url; ?>images/logo.png" alt="logo"/>
		</a>
		
			<?php } ?>
		
		
			<a href="javascript:;" class="hamburger-wrapper">
				<div class="hamburger-menu"></div>
			</a>
			<div class="mobile-menu-overlay">
				<ul>
					<li><a href="<?php echo $root_url; ?>">Home</a></li>
						<li><a href="<?php echo $root_url; ?>about-us.php">About us</a></li>
					<li><a href="<?php echo $root_url; ?>about-i-mba.php">About i-MBA</a></li>
					<li><a href="<?php echo $root_url; ?>enroll-now.php">Join Now</a></li>
					<li><a href="<?php echo $root_url; ?>our-team.php">Our team</a></li>
						<li><a href="<?php echo $root_url; ?>faqs-english.php">Course FAQs</a></li>
				</ul>
			</div>

		</nav>
	</div>
</header>