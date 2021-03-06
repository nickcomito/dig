<!DOCTYPE html>
<html>

	<head>
		<title>Sample</title>	
	  <?php include('includes/stylesheets.inc'); ?>
    <?php include('includes/meta.inc'); ?>
	</head>

	<body>
		<div class="bgcolor-dark padall-2">
			<div class="contain">
				<div class="sm-4 md-8 lg-10 centered color-light">
					<a href="index.php">&laquo; Go home</a><p class="margbot-0">Hey there, Nick. Welcome to your dashboard.</p>
				</div>
			</div>
		</div>

		<div class="contain">
			<div class="sm-4 md-8 lg-12">
				<div class="row padded">
					<div class="sm-4 md-8 lg-8 centered trim">
						<div class="blocks three">
							<div class="block one text-center">
								<h2><sup>$</sup>2,100.25</h2>
								<div class="margbot-2 uppercase scale-1">Sales Revenue</div>
								<button class="outline rounded shadowed">Full Report</button>
							</div>
							<div class="block two text-center">
								<h2>10,800</h2>
								<div class="margbot-2 uppercase scale-1">Impressions</div>
								<button class="outline rounded shadowed">Full Report</button>
							</div>
							<div class="block three text-center">
								<h2>3.5<sup>%</sup></h2>
								<div class="margbot-2 uppercase scale-1">ROI</div>
								<button class="outline rounded shadowed" id="popup-trigger">Full Report</button>
							</div>
						</div>
					</div>
				</div>

				<div class="margtop-2 margbot-4"></div>

				<div class="row padded margbot-4">
					<div class="sm-4 md-8 lg-12 centered trim">
						<h3>Participant Roster</h3>
						<table class="responsive">
							<thead>
								<tr>
									<th>Name</th>
									<th>Phone</th>
									<th>Birthday</th>
									<th class="md-text-center">Status</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Nick Comito</td>
									<td>512-553-6830</td>
									<td>August 20, 1982</td>
									<td class="md-text-center"><img src="images/icon_star.svg" class="svg icon md fill-secondary"></td>
								</tr>
								<tr>
									<td>Joe Smith</td>
									<td>912-523-1131</td>
									<td>January 5, 1955</td>
									<td class="md-text-center"><img src="images/icon_star.svg" class="svg icon md outline stroke-secondary"></td>
								</tr>
								<tr>
									<td>Jane Doe</td>
									<td>912-523-1131</td>
									<td>February 25, 1985</td>
									<td class="md-text-center"><img src="images/icon_star.svg" class="svg icon md fill-accent"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="row">
					<div class="sm-4 md-4 lg-6 trim-l sm-trim margbot-3">
						<div class="island subtle">
							<h4>Add new participant</h4>
							<form>
								<div class="sm-4 md-4 lg-6 trim-l sm-trim">
									<label>First Name</label>
									<input type="text">
								</div>
								<div class="sm-4 md-4 lg-6 trim-r sm-trim">
									<label>Last Name</label>
									<input type="text">
								</div>
								<div class="sm-4 trim">
									<label>Email</label>
									<input type="email">
								</div>
								<div class="sm-4 trim"><button class="tertiary">Add</button></div>
							</form>
						</div>
					</div>
					
					<div class="sm-4 md-4 lg-6 trim-r sm-trim">
						<h4>Edit Participant</h4>
						<ul class="scale1 no-bullets padall-0">
							<li><a href=""><img src="images/icon_pencil.svg" class="svg icon md"> Nick Comito</a></li>
							<li><a href=""><img src="images/icon_pencil.svg" class="svg icon md"> Joe Smith</a></li>
							<li><a href=""><img src="images/icon_pencil.svg" class="svg icon md"> Jane Doe</a></li>
						</ul>
					</div>
				</div>

				<hr class="margtop-5 margbot-4">
			</div>
		</div>
		<div class="popup">
			<div class="island">
				<h2>Full Report</h2>
				<p>Curabitur blandit tempus porttitor. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
			</div>
		</div>
		<?php include('includes/scripts.inc'); ?>
	</body>
</html>