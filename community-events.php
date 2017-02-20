<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Campus Events | Events | Florida Dance Marathon';
	$GLOBALS['parent'] = 'events';
	include("includes/head.php");
	include("includes/navbar.php");

	$events = array(
        array(
            'name' => 'Bowling',
            'description' => 'Teams of four compete at Alley Gatorz Bowling Alley, many dressing in costumes to show team spirit. A DJ is in attendance, along with Miracle Families who bowl in the tournament. Many teams participate for a fun day of bowling with friends, while others put on their game faces and compete for a top spot in the tournament. A number of trophies, which are bowling pins painted by the kids at Shands Children&#39;s Hospital, are awarded for highest individual score, highest team score and best costumes.',
            'image' => 'Bowling.JPG',
            ),
        array(
            'name' => 'Dodge Ball',
            'description' => 'Wipe off your sneakers, pull out your sweatbands and get ready for an intense, but fun, game of dodgeball For The Kids! The event will include a DJ, water and snacks. Don’t forget to watch out for flying dodgeballs while cheering on your team!',
            'image' => 'Dodgeball.jpg',
            ),
        array(
            'name' => 'Field Day',
            'description' => 'With games including tug-of-war, water balloon fights, three-legged races and dizzy bat, Field Day lets us relive our elementary school days! Live music featuring local bands from our DMLive event provide the soundtrack for the day, and voting on favorite bands can help get them to the event in March. You won’t want to miss out on this chance to be a kid, while helping the kids!',
            'image' => 'FieldDay.jpg',
            ),
        array(
            'name'  => 'Food Truck Rally',
            'description' => 'Dance Marathon at UF partners with CYMplify to put on a Food Truck rally for the Gainesville community. CYMplify&#39;s motto of ‘doing good things with good people’ is all-encompassing of what DM stands for and helps create a great atmosphere for an even better event. The food truck line-up includes Bubba Luigi\'s Road Trip, FED Food Company, Go Go Stuff Yourself, Humble Pie, Off The Griddle, Soup to Nuts and Monsta Lobsta. With entertainment, great food and stories shared from our Miracle Families, this is one event not to miss out on!',
            'image' => 'DMCymp.jpg',
            ),
        array(
            'name' => 'FT5K',
            'description' => 'FT5K is an early morning race that takes participants through the beautiful UF campus each spring. Over 1,000 members of the UF/Gainesville community register to run and compete for prizes. Participants register to enjoy a light walk/jog through campus with friends, get in shape for Spring Break or compete for a trophy. <a href="http://events.dancemarathon.com/event/ft5k/">Click Here</a> to sign up!',
            'image' => '5k.jpg',
            ),
        array(
            'name'  => 'FTKarnival',
            'description' => 'Come one, come all to Dance Marathon’s FTKarnival. We\'re celebrating DM’s 23rd year, and this is the perfect way to get us ready for the event! Get ready for food, entertainment, bounce houses, snow cones, clowns, face-painting, balloon animals and carnival games. FTKarnival is a family favorite, dont miss out!',
            'image' => 'carnival.jpg',
            ),
        );
?>

<div class="page-heading parallax community_events">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Campus Events</h1>
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
            <li><a class="active">Campus Events</a></li>
            <li><a href="/mini-marathon">Mini-Marathon</a></li>
            <li><a href="/ft5k">FT5K</a></li>
            <li><a href ="/fundraising-days">Fundraising Days</a></li><!--NOT YET MADE -->
            <li><a href="/gala">Gala</a></li><!--NOT YET MADE -->
           <!-- <li><a href="/event">Event</a></li><!--NOT YET MADE -->

<!--            <li><a href="/eventsurvey">DM 2015 Event Survey</a></li> -->
          </ul>
        </div>
      </div>
      <div class="col-md-8 col-md-push-1">
      <?php if ($status=="open" ) { ?>
				<h3>Campus Events </h3>
			   <!--	<p>quick explination about community events</p> -->
		


				<div class="container-fluid">
          <div class="row">
            <?php for($i=0 ; $i < count($events); $i++) { ?>

					  <!-- Button trigger modal -->
              <?php if ($i % 3==0 ) { ?>
              <div class="clearfix visible-xs-block visible-sm-block"></div>
              <?php } ?>
              <?php if ($i % 4==0 ) { ?>
              <div class="clearfix visible-md-block visible-lg-block"></div>
              <?php } ?>
              <div class="col-xs-4 col-md-3">
                <a href="#" class="text-center" data-toggle="modal" data-target="#myModal<?php echo $i; ?>">
                  <img class="img-square img-thumbnail" src="<?php echo ('/assets/images/'.$events[$i]['image']); ?>" alt="..."><br>
                  <p><?php echo $events[$i]['name']; ?></p>
                </a>
              </div>

              <!-- Modal -->
              <div class="modal fade" id="myModal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h3 class="modal-title" id="#myModal<?php echo $i; ?>Label"><?php echo $events[$i]['name']; ?></h3>
                    </div>
                    <div class="modal-body">
                      <!--<img src="<?php //echo ('/assets/images/kids/fullsize/'.$events[$i]['image']); ?>" class="img-responsive img-full" />
                      <hr>-->
                      <p><?php echo $events[$i]['description']; ?></p>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>
<?php include("includes/foot.php"); ?>
