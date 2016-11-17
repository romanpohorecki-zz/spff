<!DOCTYPE html>
<html>
	<head>
	    <title>Seattle Polish Film Festival</title>
	    <meta http-equiv="content-type" content="text/html; charset=utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet'>

		<link href="../css/style.css" media="screen" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-latest.js"></script>
		<script src="js/full-screen-video.js" type="text/javascript"></script>
		<script src="js/menu-fade-in.js" type="text/javascript"></script>

		<link href="../dist/lity.css" rel="stylesheet">
		<script src="../vendor/jquery.js"></script>
		<script src="../dist/lity.js"></script>
	</head>
	<body id="event">

		<?php include '../includes/nav.php';?>

		<section id='splash' style="background-image: url('../images/events/film-event.jpg')">
			<div class='section-black-overlay'>
				<div class='vertical-align'>
					<h1>Title of the movie
						<span>(Polski Tytuł)</span>
					</h1>
					<a class='button-preview' href="https://www.youtube.com/watch?v=ba2VFJEP71c" data-lity></a>
				</div>
			</div>

			<div class='triangle triangle-lower-left '>
				<img src='../images/site/triangle.png'>
			</div>
		</section>

		<section class=''>
			<div class='event-details'>
					<h3><span>October 18, 2016</span>6:00PM</h3>
					<div>
						<a class='button-3' href='https://www.google.com/maps/place/SIFF+Cinema+Uptown' target='_blank'>SIFF Uptown Cinema</a>
						<a class='button-3 button-tickets' href='http://www.siff.com'>buy tickets</a>
						<a class='button-3 button-tickets' href='../events/film-event.ics'>add to calendar</a>
					</div>
			</div>

			<div class='event-description'>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
					Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
					Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
					Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, 
					eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
					Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos
					 qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
					  adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
				</p>
			</div>

			<ul class='event-film-details'>
				<li>Director<span>Jacek Lusiński</span></li>
				<li>Screenplay<span>Jacek Lusiński</span></li>
				<li>Cinematography<span>Witold Płóciennik</span></li>
				<li>Music<span>Paweł Lucewicz</span></li>
				<li>Film Editor<span>Jacek Lusiński</span></li>
				<li>Genre<span>Jacek Lusiński</span></li>
				<li>Runtime<span>Jacek Lusiński</span></li>
				<li>Release Year<span>Jacek Lusiński</span></li>
				<li>Principal Cast<span>Andrzej Chyra, Urszula Grabowska, Arkadiusz Jakubik, Eliza Rycembel, Tomasz Ziętek, Dorota Kolak, 
					Andrzej Blumenfeld, Maria Chwalibóg, Wojciech Pszoniak</span>
				</li>
			</ul>
		</section>


		<section class='section-grey next-up'>
			<div class='triangle triangle-upper-left'>
				<img src='../images/site/triangle-border.png'>
			</div>

			<h2>Next Up</h2>

			<div id='tiles'>

				<div class='tile'>
					<div class='tile-content' style="background-image: url('../images/events/film1.jpg')">
						<div class='tile-genre'>genre</div>
						<div class='button-preview'></div>
					</div>
					<div class='tile-additional-context'>
						<h3>Title of the movie
							<span>OCT. 18 <em>6:00PM</em></span>
						</h3>
						<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</p>
					</div>
					<a href=''></a>
				</div>

				<div class='tile'>
					<div class='tile-content' style="background-image: url('../images/events/film2.jpg')">
						<div class='tile-genre'>genre</div>
						<div class='button-preview'></div>
					</div>
					<div class='tile-additional-context'>
						<h3>Title of the movie
							<span>OCT. 18 <em>6:00PM</em></span>
						</h3>
						<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</p>
					</div>
					<a href=''></a>
				</div>

			</div><!--close tiles-->
		</section>

		<?php include '../includes/footer.php';?>

	</body>
</html>		