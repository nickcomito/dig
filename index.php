<!DOCTYPE html>
<html>
	<head>
		<title>Project's Dynamic Interface Guide</title>	
		<?php include('includes/stylesheets.inc'); ?>
    <?php include('includes/meta.inc'); ?>
	</head>

	<body>
		<div class="contain">
			<div class="sm-4 md-8 lg-9 centered">
				<div class="row">
					<hgroup class="margtop-2">
						<h1>Dynamic UI Guide</h1>
						<h4 class="font-secondary margbot-2">Project: <strong>Example</strong> &mdash; <a id="tutorial-trigger">Introduction</a></h4>
					</hgroup>
				</div>

				<hr>

				<div class="row padded">
					<div class="sm-4 md-4 lg-6 trim">
						<ul class="margbot-0">
							<li><a href="atoms.php">Atoms</a></li>
							<li><a href="molecules.php">Molecules</a></li>
							<li><a href="organisms.php">Organisms</a></li>
							<li class="no-bullet">&nbsp;</li>
							<li><a href="patterns.php">Patterns</a></li>
							<li><a href="sample.php">Sample</a></li>
							<li><a href="http://praxent.com">Final</a></li>
						</ul>
					</div>
					<div class="sm-4 md-4 lg-6 trim">
						<ul class="margbot-0 md-right lg-right">
							<li><a href="animation.php">Animation</a></li>
							<li><a href="color.php">Color</a></li>
							<li><a href="grid.php">Grid</a></li>
							<li><a href="icons.php">Icons</a></li>
							<li><a href="scale.php">Scale</a></li>
							<li><a href="tone.php">Tone</a></li>
							<li><a href="type.php">Type</a></li>
						</ul>
					</div>
				</div>
				<hr>
			</div>

			<div class="contain margtop-5">
				<footer class="sm-4 md-8 lg-9 centered">
					<small>Created by <a href="http://praxent.com" style="color: #2ec0c6;">Praxent</a></small>
				</footer>
			</div>
		</div>
		<div id="tutorial-overlay">
      <div class="island"><iframe src="https://player.vimeo.com/video/14396098" width="800" height="500" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
    </div>
    <?php include('includes/scripts.inc'); ?>
	</body>
</html>