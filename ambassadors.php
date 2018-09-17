<?php
$status = "open";
$GLOBALS['page_title'] = 'Ambassadors | Students | Dance Marathon at UF';
$GLOBALS['parent'] = 'get-involved';
include("includes/head.php");
include("includes/navbar.php");
?>

<div class="page-heading parallax delegates">
  <div class="inner-wrapper">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <h1>Ambassadors</h1>
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
            <li><a href="/alumni">Alumni</a></li>
						<li><a href="/applications">Applications</a></li>
						<li><a href="/captain-teams">Captain Teams</a></li>
						<li><a href="/dancers">Dancers</a></li>
						<li><a class="active">Ambassadors</a></li>
						<li><a href="/emerging-leaders">Emerging Leaders</a></li>
						<li><a href="/ftkrew">FTKrew</a></li>
						<li><a href="/organizations">Organizations</a></li>

          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
      <div role="tabpanel">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#become-a-delegate" aria-controls="become-a-delegate" role="tab" data-toggle="tab">Become a Ambassador</a></li>
          <li role="presentation"><a href="#starting-a-team" aria-controls="starting-a-team" role="tab" data-toggle="tab">Starting a Team</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade in active" id="become-a-delegate">


            <h3>What is an Ambassador?</h3>
            <p>Organization Ambassadors will serve as a liaison between Dance Marathon and their respective organization.</p>

            <p>Organization Ambassadors will attend weekly meetings to obtain information to be relayed to their organizations and work on professional and personal development. Each organization will be assigned their own Fundraising and Organization Development Captain to remain in contact throughout the year to work on organization involvement and fundraising.</P>

              <h3>Responsibilities:</h3>
              <ul>
                <li>Recruit and motivate members of their organization to fundraise and participate</li>
                <li>Encourage members to apply for involvement within Dance Marathon</li>
                <li>Inform all organization members of events, registration dates, fundraising incentives, etc.</li>
                <li>Work with the Family Relations Team to engage with their respective Miracle Family throughout the year</li>
                <li>Host a minimum of one Hospitality Night or fundraising event</li>
                <li>Be in attendance at various Dance Marathon events during the year (i.e. Warrior Run, FTKickoff, FT5K, Miracle Family Events, etc.)</li>
              </ul>

                <p class="alert alert-info">Ambassadors are also eligible to apply for ELP and Captain positions in the Fall.</p>

              <h3>Responsibilities during the 26.2-hour event:</h3>
              <ul>
                <li>Help assign Dancer buddies prior to the event for each Dancer during the event</li>
                <li>Work with their Fundraising and Organization Development Captain to encourage and help Dancers fundraise at the event</li>
                <li>Be available for Dancers in case of emergency</li>
              </ul>

              <p class="alert alert-info">Ambassadors can also be Dancers if they choose, and are eligible for free Dancer Registration upon meeting expectations of the Program.</p>


          </div>
          <div role="tabpanel" class="tab-pane fade" id="starting-a-team">


            <p>To participate as an organization in Dance Marathon, you must register your team each year. First, check to make sure your team is not already registered. To register a new team, please complete the following steps:</p>
            <ol>
            <li>Go to floridadm.org and click “Donate.”</li>
            <li>Scroll down and click “Register Now.”</li>
            <li>Input your information and create a new organization.</li>
            <li>Fill out the proceeding information for your team and once your team has been registered, your members can join your team by following the steps and joining your existing organization team.</li>
          </ol>
            <p>Each team will need an Ambassador to represent them. Please email the Fundraising & Organizational Development Overall, Shayna Goldrich, at <a href=mailto:sgoldrich@floridadm.org>sgoldrich@floridadm.org</a> to inform her you have created a team and will be serving as the Ambassador or have plans of selecting an Ambassador in the near future. The Fundraising & Organizational Development Overall will not be able to get in contact with you unless you email her to let her know you started a team.</p>

          </div>
        </div>

      </div>
      <?php } else { echo 'This page is currently closed.'; } ?>
    </div>
  </div>
</div>
</div>

<?php include("includes/foot.php"); ?>