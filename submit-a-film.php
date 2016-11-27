<!DOCTYPE html>
<html>
	<head>
	    <title>Seattle Polish Film Festival</title>
	    <meta http-equiv="content-type" content="text/html; charset=utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet'>

		<link type="text/css" rel="stylesheet" href="css/style.css" media="screen" />
		<script src="https://code.jquery.com/jquery-latest.js"></script>
		<script src="js/full-screen-video.js" type="text/javascript"></script>
		<script src="js/scroll-to-top.js" type="text/javascript"></script>
		<script src="js/open-close.js" type="text/javascript"></script>
	</head>

	<body id="submit-a-film">

		<?php include 'includes/nav.php';?>

		<section id='splash' style="background-image: url('images/site/submit.jpg')">
			<div class='section-black-overlay'>
				<h1 class='vertical-align'>Submit A Film</h1>
			</div>

			<div class='triangle triangle-lower-left '>
				<img src='images/site/triangle-black.png'>
			</div>
		</section>

		<section class='section-black section-submit'>
			<div class='content'>
				<div class='description-columns'>
					<p>Now in our 24th year, we’ve reigned as one of the premiere Polish film festivals across America
					 – and we want your film to be part of the independent and short film program of the festival. And there is a prize!
					We are accepting submissions by filmmakers across the world to screen their independent films that embrace the smart, 
					unexpected, and incredibly personal ethos that unites Poland and Seattle in artistic expression.
					</p>
					<p>
						The criteria for submission are that the film has to have a connection to Poland: either a Polish (or Polish-American) director,
					 lead actor or actress, cinematographer, screenwriter, composer or editor, or is in Polish, filmed in Poland, or about Poland or Polish culture. 
					 And we’ll be awarding a prize for Best Indie Film. Films will be reviewed by a panel of judges. Come to Seattle and get recognized!
					</p>
				</div>

				<form class='submit' action="">
					<input type="text" name="name" placeholder="Your name *" required class='submit-name'>
					<input type="text" name="email" placeholder="Email *" required class='submit-email'>
					<input type="text" name="name" placeholder="Film Title *" required>
					<input type="text" name="link" placeholder="Link to your film * required">
					<textarea name="message" cols="30">Describe your film in a few sentences...</textarea>

					<div class='agreement'>
						<input class='checkbox' type="checkbox" name="agree" value="1" required/>
						<p>I agree to SPFF’s <a href='#rules'>Submission Rules</a> for submitting my film. *</p>	
					</div>	
					<span><input type="submit" value="Submit"></span>

					<div id="submit-film-success">
						<div class='vertical-align'>
							<p>Thanks for submitting your film! <br>We'll be in touch shortly.</p>
						</div>
						<div class='button-close' onclick="hide('submit-film-success')"></div>
					</div>
				</form>
			</div>
		</section>

		<section class='section-rules'>
			<h2>Submission Rules</h2>
			<div class='content'>
				<div class='description-columns'>
				<a name='rules'></a>
				<p>The Seattle Polish Film Festival (SPFF) has as its objective the promotion of cinematographic art by presenting films of quality. 
					SPFF will accept all submissions of any format film: full-length feature, short film, documentary, animation, experimental video, or music video. 
				</p>
				<p>	
				All accepted submissions must be deemed of sufficient quality to be viewed by a public audience, and be Polish-themed or in a deliberate and meaningful
					 way connected to Polish culture, language, or persons. It is SPFF policy not to offer comments or reasons for films not selected for the official program.
				</p>
				<p>
					All feature and documentary films in a language other than English must be subtitled in English. Short subjects, experimental video, 
					or music videos carry the same requirement for English subtitling, unless dialogue or commentary is unnecessary for comprehension and appreciation.
					Upon reception of viewing copies, the SPFF will determine which works are granted entry into the SPFF official program. At this point, a festival copy of 
					the work (if a higher quality format version exists) may be requested from the filmmaker. All shipping and insurance costs will be incurred by the sender.
					No cuts or changes in any film will be made by the SPFF for any reason. Excerpts from films will only be shown on television for promotional purposes if permission is obtained from the producer. Submission of a film represents agreement with the regulations set forth here.
				</p>
			</div>
		</section>
		<?php include 'includes/footer.php';?>

	</body>
</html>		