<!doctype html>
<html class="no-js" lang="en">
  <head>
    <title>Organisms</title>
    <?php include('includes/stylesheets.inc'); ?>
    <?php include('includes/meta.inc'); ?>
  </head>
  <body>
    <div class="contain">
      <div class="row">
        <div class="sm-4 md-8 lg-8 lg-centered">
          <?php include('includes/nav_atomic.inc'); ?>
        </div>
      </div>
      <div class="row">
        <div class="sm-4 md-8 lg-8 lg-centered">
          <hr>
          <a id="tutorial-trigger" class="right">tutorial</a>
          <h1 class="margbot-5">Organisms</h1>
        </div>
      </div>
      <div class="sm-4 md-8 lg-8 lg-centered">
        <div class="organism">
          <span class="title">Header</span>

        </div>

        <div class="organism">
          <span class="title">Footer</span>

        </div>
      </div>
    </div>
    <div id="tutorial-overlay">
      <div class="island"><iframe src="https://player.vimeo.com/video/14396098" width="800" height="500" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
    </div>
    <?php include('includes/scripts.inc'); ?>
  </body>
</html>