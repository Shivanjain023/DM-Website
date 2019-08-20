<?php global $parent; ?>

		<style>
			@media (min-width: 1551px) {
			  .container-fluid {
			    max-width: 85%;
			  }
			}
			@media (max-width: 1550px) {
			  .container-fluid {
			    max-width: 100%;
			  }
			}
		</style>

    <!-- Fixed navbar -->
	<div id="nav" class="navbar navbar-fixed-top">


		  <div class="container-fluid">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="/"><img src="/assets/images/secondary_white.png" alt="logo" height="40" width="34"></a>
			</div>
			<div class="navbar-collapse collapse">
			  <ul class="sf-menu navbar-nav navbar-left">
					<li <?php echo ($parent == 'contactus') ? "class='open'" : ""; ?>>
						<a href="/meet-the-overalls" class="dropdown-toggle">Contact Us</a>
					</li>
				<li <?php echo ($parent == 'about') ? "class='open'" : ""; ?>>
					<a href="/about" class="dropdown-toggle">About</a>
					<ul class="dropdown-menu" role="menu">
						<li><a href ="/blog">Blog</a></li>
						<li><a href="/uf-health">CMNH & UF Health</a></li>
						<li><a href="/fastfacts-nomenclature">Fast Facts / Nomenclature</a></li>
						<li><a href="/faq">FAQ</a></li>
						<li><a href="/meet-the-kids">Meet the Kids</a></li>
						<li><a href="/our-story">Our Story</a></li>
						<li><a href="/press-releases">Press Release</a></li>
						<!--<li><a href="/dmaa">DMAA</a></li>-->
            			<!--<li><a href="/alumni">Alumni</a></li>-->
					</ul>
				</li>

				<li <?php echo ($parent == 'get-involved') ? "class='open'" : ""; ?>>
					<a href="/get-involved" class="dropdown-toggle">Get Involved</a>
					<ul class="dropdown-menu" role="menu">
					  <li><a href="/applications">Applications</a></li>
						<li><a href="/alumni">Alumni</a></li>
						<li><a href="/ambassadors">Ambassadors</a></li>
						<li><a href="/captain-teams">Captain Teams</a></li>
						<li><a href="/emerging-leaders">Emerging Leaders</a></li>
						<li><a href="/dancers">Dancers</a></li>
						<li><a href="/kirstynskrew">Kirstyn's Krew</a></li>
						<li><a href="/organizations">Organizations</a></li>

						<!--	<li><a href="/overall-applications">Overall Applications</a></li>  -->
					</ul>
				</li>



				<li <?php echo ($parent == 'events') ? "class='open'" : ""; ?>>
					<a href="/events" class="dropdown-toggle">Events</a>
					<ul class="dropdown-menu" role="menu">
						<!--<li><a href="/campus-events">Campus Events</a></li> -->
						<li><a href="/dance-marathon">Dance Marathon </a></li>
						<!--<li><a href="/golf-tournament">Golf Tournament</a></li>-->
						<li><a href="/mini-marathon">Mini-Marathons</a></li>
						<!--<li><a href="">Running Event (Coming Soon)</a></li>-->
						<li><a href="/miracle-gala">Miracle Gala</a></li>
						<li><a href="/Warrior">Warrior Run</a></li>

						<!-- <li><a href="/ftk-festival">FTK Festival</a></li> -->



					</ul>
				</li>

				<li <?php echo ($parent == 'partners') ? "class='open'" : ""; ?>>
					<a href="/partners" class="dropdown-toggle">Sponsors</a>
				</li>


				<li <?php echo ($parent == 'fundraising') ? "class='open'" : ""; ?>>
					<a href="/register-to-fundraise" class="dropdown-toggle">Fundraising</a>
					<ul class="dropdown-menu" role="menu">
						<li><a href ="/campus-push-days">Transform Today</a></li>
						<li><a href ="/classy">Classy</a></li>
						<li><a href="/employee-matching">Employee Matching</a></li>
						<li><a href="/fundraising_brackets">Fundraising Brackets</a></li>
						<li><a href="/fundraising-guide">Fundraising Guide</a></li>
						<li><a href="/register-to-fundraise">Register to Fundraise</a></li>
					</ul>
				</li>



<!--SPACEEEEEEEE ---->

				<li><a href="https://squareup.com/market/dance-marathon-at-uf" target="_blank">Store</a></li>
				<li><a href="https://donate.giving.ufhealth.org/campaign/dance-marathon-at-the-university-of-florida-2020/c223292/fundraiser/create?amount=NaN" target="_blank">Register to Fundraise</a></li>

				 <!--
				 <li><a href="/blog/">Blog</a></li>
				 -->

				<li class="open"><a href="https://donate.giving.ufhealth.org/campaign/dance-marathon-at-the-university-of-florida-2020/c223292" target="_blank" class="active">Donate</a></li>

			  </ul>
			  <ul class="nav navbar-nav navbar-right social-icons hidden-sm">
				  <li><a href="http://urlgeni.us/instagram/dmatuf"><i class="fa fa-instagram"></i></a></li>
				  <li><a href="http://urlgeni.us/twitter/floridaDM"><i class="fa fa-twitter"></i></a></li>
				  <li><a href="http://urlgeni.us/facebook/floridaDM"><i class="fa fa-facebook"></i></a></li>
			  </ul>
			</div><!--/.nav-collapse -->
		  </div>
		</div>
