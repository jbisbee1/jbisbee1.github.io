<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-B6ZC29XHD9"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-B6ZC29XHD9');
	</script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>James Bisbee - Code</title>
	<meta name="description" content="James Bisbee code for various projects.">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.Cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
	
</head>

<body class="code">
	<div class="overlay hidden"></div>
	<div class="shape square"></div>
	<div class="shape square"></div>
	<div class="shape square"></div>
	<div class="shape circle"></div>
	<div class="shape circle"></div>
	<h1 class="shape asterisk">*</h1>
	<h1 class="shape asterisk">*</h1>
	<div class="wrap">


		<div class="content">
			<?php include 'templates/header.php';?>
			<main>
				<section class="tab-code tab">
					<h2 class="page-title mobile-hide">Code</h2>
					<div class="tab-content">
						<div class="masonry-grid">
							<div class="grid-item">
								<div class="img-wrap">
									<img src="assets/img/polisci-twitter.webp" alt="Polisci Twitter">
								</div>
								<div class="grid-item-text">
									<h4>BARP (MRP - MR + BART = BARP)</h4>
									<p>This package predicts opinion at a given level of geography, even if the original survey was not representative at this level. It augments multilevel regression and poststratification (MRP) by replacing the multilevel model with either Bayesian Additive Regression Trees (BART, found to be best-in-class when compared to multilevel models and other regularization algorithms) or any one of the 43 regularization methods included in the SuperLearner package. This provides a more accurate estimate of opinion as a function of observables and insulates the researcher from missing data and specification error. The user must provide both a survey dataset and census dataset with identically labeled covariates. The package can be installed via devtools by running devtools::install_github('jbisbee1/BARP').</p>
									<p><a href="https://github.com/jbisbee1/BARP" target="_blank">Source code <i class="fa fa-angle-right" aria-hidden="true"></i></a></p>
								</div>
							</div>
							<div class="grid-item">
								<div class="img-wrap">
									<img src="assets/img/echo-chamber-static-ideology.webp" alt="Polisci Twitter">
								</div>
								<div class="grid-item-text">
									<h4>QualtricsCreatoR</h4>
									<p>This package builds a Qualtrics survey in R using a provided list of survey questions and choices. The resulting .txt file can be imported into Qualtrics, facilitating the rapid creation of large-scale surveys. The package is inspired by Sean Murphy's blog post on the same topic. The package can be installed via devtools by running devtools::install_github('jbisbee1/QualtricsCreatoR').</p>
									<p><a href="https://github.com/jbisbee1/QualtricsCreatoR" target="_blank">Source code <i class="fa fa-angle-right" aria-hidden="true"></i></a></p>
								</div>
							</div>
							<div class="grid-item">
								<div class="img-wrap">
									<img src="assets/img/covid-paper.webp" alt="Polisci Twitter">
								</div>
								<div class="grid-item-text">
									<h4>dyadRobust</h4>
									<p>This package estimates cluster-robust standard errors for dyadic data using multiway decomposition as decsribed in Aronow, Peter M., Cyrus Samii, and Valentina A. Assenova. "Cluster-robust variance estimation for dyadic data." Political Analysis 23.4 (2015): 564-577. It was developed by myself and <a href="http://prodriguezsosa.com/" target="_blank">Pedro Rodriguez</a> The package can be installed via devtools by running devtools::install_github('jbisbee1/dyadRobust').</p>
									<p><a href="https://github.com/jbisbee1/dyadRobust" target="_blank">Source code <i class="fa fa-angle-right" aria-hidden="true"></i></a></p>
								</div>
							</div>
							<div class="grid-item">
								<div class="img-wrap">
									<img src="assets/img/covid-paper.webp" alt="Polisci Twitter">
								</div>
								<div class="grid-item-text">
									<h4>FuzzyHash</h4>
									<p>This package facilitates a rapid implementation of the <a href="https://pypi.org/project/fuzzywuzzy/" target="_blank">fuzzywuzzy</a> Python package via hashing. The user must provide a search string and a list of reference strings in which to find suitable matches. Work in progress.</p>
									<p>Work in progress</p>
								</div>
							</div>
						</div>
					</div>




				</section>
			</main>
			<?php include 'templates/footer.php';?>
		</div>
	</div>


	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/main.js"></script>

	

</body>

</html>