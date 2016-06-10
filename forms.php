<!DOCTYPE html>
<html>

<head>
	<title>Forms</title>	
  <?php include('includes/stylesheets.inc'); ?>
  <?php include('includes/meta.inc'); ?>
</head>

<body>
	<div class="contain">
    <div class="row">
      <div class="sm-4 md-8 lg-9 centered">
        <?php include('includes/nav_style.inc'); ?>
      </div>
    </div>
    <div class="sm-4 md-8 lg-9 centered">
      <hr>
			<h1 class="margbot-5">Forms</h1>
		</div>

		<div class="row">
			<div class="sm-4 md-8 lg-9 centered">
				<div class="sm-4 md-8 lg-8 trim-l sm-trim">
					<form class="ede">
					  <h2 class="margbot-2">Text Input</h2>
					  <div class="md" data-label="First Name">
					  	<input type="text" ></input>	
					  </div>
					  <div class="md" data-label="Last Name">
					  	<input type="text" ></input>	
					  </div>
					  <div class="xs" data-label="Initials">
					  	<input type="text" ></input>	
					  </div>
					  <div class="lg" data-label="Address">
					  	<input type="text" ></input>	
					  </div>
					  <div class="lg" data-label="">
					  	<input type="text" ></input>	
					  </div>
					</form>
				</div>

				<div class="sm-4 md-8 lg-4 trim-r sm-trim">
					<form class="ede">
					  <h4 class="margbot-2">Radios &amp; Checkboxes</h4>
						<div class="xl radio" data-label="Do you like apples?">
							<input type="radio" name="apples" id="apples-yes" data-label="Yes">
							<input type="radio" name="apples" id="apples-no" data-label="No">
						</div>

						<div class="xl checkbox" data-label="What color apples are your favorite?">
							<input type="checkbox" name="apple-color" id="apples-red" data-label="Red">
							<input type="checkbox" name="apple-color" id="apples-green" data-label="Green">
							<input type="checkbox" name="apple-color" id="apples-yellow" data-label="Yellow">
						</div>
					</form>
				</div>
			</div>
		</div>	
	</div>
  <?php include('includes/scripts.inc'); ?>
</body>

</html>