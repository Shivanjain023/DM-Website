<?php
	$status = "open";
	$GLOBALS['page_title'] = 'FT5K | Events | Florida Dance Marathon';
	$GLOBALS['parent'] = 'events';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax events">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Miracles In The Milky Way</h1>
	  		</div>
    	</div>
	  </div>
	</div>
</div>

<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
  			<div class="sub-nav">
          <ul>
						<li><a href="/community-events">Community Events</a></li>
						<li><a href="/mini-marathon">Mini-Marathon</a></li>
            <li><a href="/ft5k" class="active">FT5K</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>

				<h2>Miracles In The Milky Way</h2>
  			<p>Dance Marathon at UF’s annual FT5K is a 5K race benefitting UF Health Shands Children’s Hospital and Children’s Miracle Network. In its fourth year, the FT5K will bring together students and Gainesville community members, alike. This year, DM at UF is taking the race out of this world with the theme of Miracles in the Milky Way. <b>The galactical race will begin on Flavet Field at 11 a.m. on January 22, 2017.</b> Following will be a stellar <b>post-race runner’s celebration on Flavet </b>where participants and onlookers can enjoy food, music, giveaways and games as we also award the top finishers from the race.</p>
				<h3>Sign Up</h3>
				<p>Whether you’re a walker or a runner, anyone can register to participate! The registration fee is $25 and will include a t-shirt.
					Sign ups will open soon, and if you would like, sign up on the <a href="https://goo.gl/forms/d35pV27QIz96nLkJ2" target="_blank">following Document </a>and we will inform you once registration is open. </p>
				<p> <b>Won’t be in Gainesville on this date? No worries! </b> You can register for our <b>virtual FT5K</b>, in which you can pledge to run 3 miles in a different location on the day of the race. This is a great way to get your friends and family together and run through your local community! Registration will be $25, and after proof of running the 5K, you will be mailed your runner’s packet and t-shirt.</p>
<p>If you have any questions, please contact Adam Lassley,  Community Events Overall at <a href="mailto:alassley@floridadm.org">alassley@floridadm.org</a></p>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
