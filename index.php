<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
	<!-- Bootstrap Practice -->
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Bootstrap Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
				crossorigin="anonymous"/>

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
				integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
				crossorigin="anonymous"/>

		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">

		<!-- My Custom CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css">

		<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js" type="text/javascript"></script>

		<!-- Latest compiled and minified Bootstrap JavaScript, all compiled plugins included -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>

		<title>Lea McDuffie Bootstrap Challenge</title>
	</head>

	<body class="sfooter">
		<div class="sfooter-content">

			<!-- Header -->
			<header>

				<!-- Navigation bar -->
				<nav class="navbar navbar-default">
					<div class="container">

						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
									  data-target="#main-nav" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#"><img src="img/2.png" width="150" height="50"
																			  alt="littleloveprint logo" align="left"></a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="main-nav">
							<ul class="nav navbar-nav navbar-right">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
										aria-expanded="false">Navigation Station<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="https://www.bosquebrewing.com" target="_blank">Bosque Brewing Co.</a></li>
										<li><a href="https://www.marblebrewery.com" target="_blank">Marble Brewery</a></li>
										<li><a href="https://www.lacumbrebrewing.com" target="_blank">La Cumbre Brewing Co.</a>
										</li>
										<li role="separator" class="divider"></li>
										<li><a href="https://www.littleloveprint.io">All Lea</a></li>
									</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav><!-- /.navigation bar -->
			</header>

			<!-- Welcome -->
			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="jumbotron text-center">
								<h1>WELCOME!</h1>
								<P>Hope you're well. I'm great! Let's grab a beer!</p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Photo and text section -->
			<section class="bg-info">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<img class="responsive-image" data-src="holder.js/400x400/auto" src="img/bosque-white-sands.gif"
								  width="182.5" height="243.28" alt="Bosque Beer GIF" data-holder-rendered="true">
						</div>
						<div class="col-md-9">
							<h2 class="">ABQrafty!</h2>
							<p class="lead">Brought to us in 16-ounce pints on tap, the condensation-covered glass and dim
								lighting yielded a shimmering copper-colored brew with a tawny center and a slight touch of
								haze. Atop the brew, a wonderful tight lacing with more than ample head retention and stick.
								Aroma is big, with notes of resinous pine, grapefruit, distinct fruit cocktail characters and
								caramelized sugars spread on toasted bread.</p>
						</div>
					</div>
				</div>
			</section>

			<!-- Thumbnail Section -->
			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-3 text-center">

							<!-- Icon -->
							<span class="fa-stack- fa-5x">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-beer fa-stack-1x fa-inverse"></i>
							</span>

							<!-- Panel -->
							<div class="panel panel-dafault">
								<div class="panel-body">
									<h3>Brews</h3>
									<p>Brewed with licorice; a proprietary, hand-smoked malt; and almost a pound of East Kent Goldings hops per barrel. Opaque brown in color, with muddy brown edges and a cola-colored head that drops quickly to a ringed lace. Strong and dominating licorice aroma with an underlying robust molasses-ness and highly roasted malts. Thick-ish, deep blackstrap molasses character (sweet, tangy nectar), quite robust. Licorice is assertive and smacks of herbal flavors. As the beer warms, both flavors become very intense, overpowering the palate a bit with some cloying action.</p>
								</div>
							</div><!-- /.col-md-3 -->

							<div class="col-md-3 text-center">

								<!-- Icon -->
								<span class="fa-stack- fa-5x">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-beer fa-stack-1x fa-inverse"></i>
							</span>

								<!-- Panel -->
								<div class="panel panel-dafault">
									<div class="panel-body">
										<h3>Brews</h3>
										<p>Body is light, and the mouthfeel smooth. The palate gathers apple peel, light clove notes and a thin sweetness that's touched with caramel. In the middle, ripe and juicy fresh wheat malt with pear edge, while a husky, grainy, wheat twang livens things up. Suggestions of bubblegum are noted. There's very little bitterness, but a slight lemony sourness, banana pith and light hop leaf character that, combined, increase the perceived bitterness. Yeast is rather neutral, a bit chalky. Some medicinal phenols show through toward the finish. Finish dries the palate, with a lingering wheat and barley husk.</p>
									</div>
								</div><!-- /.col-md-3 -->

								<div class="col-md-3 text-center">

									<!-- Icon -->
									<span class="fa-stack- fa-5x">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-beer fa-stack-1x fa-inverse"></i>
							</span>

									<!-- Panel -->
									<div class="panel panel-dafault">
										<div class="panel-body">
											<h3>Brews</h3>
											<p>Extremely pale straw yellow beer, a touch hazy, with a soda-like appearance. Candied ginger aroma, spicy and herbal, with suggestions of cardamom and lilacs. Thin and crisp in the mouth, with some unpleasant tannins up front. Compared to the aroma, the ginger character is very tame in the flavor, while a lemony bitterness puckers things up just a bit. Light pale malt sweetness, while the wildflower honey used is well-attenuated, leaving behind a pleasing floral note and slight remnants of raw honey. Hints of cardamom, with a lingering raw and semi-astringent pith, husky and wheat-like character in the finish. The tannins throughout the beer, especially in the finish, took a lot away from allowing the subtleties of the brew to shine. Interesting, but not refreshing or overly drinkable.</p>
										</div>
									</div>
								</div><!-- /.col-md-3 -->
							</div><!-- /.row -->
						</div><!-- /.container -->
			</section>
		</div>
		<footer class="bg-info text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-offset-4">
						This is a footer.. If you didn't know.
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>