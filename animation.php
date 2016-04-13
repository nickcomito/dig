<!doctype html>
<html class="no-js" lang="en">
  <head>
    <title>Animation</title>
    <link rel="stylesheet" href="stylesheets/screen.css">
    <script data-main="js/ui.js" src="js/require.js"></script>
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
        <a id="tutorial-trigger" class="right">tutorial</a>
        <h1 class="margbot-5">Animation</h1>
      </div>

      <div class="sm-4 md-8 lg-9 centered">
        <div class="animation">
          <span class="title">Slide Right &mdash; <button class="small outline color-light" id="slide-r-trigger">Run Animation</button></span>
          <span class="circle slide-r"></span>
        </div>

        <div class="animation">
          <span class="title">Slide Left &mdash; <button class="small outline color-light" id="slide-l-trigger">Run Animation</button></span>
          <span class="circle slide-l right"></span>
        </div>

        <div class="animation">
          <span class="title">Open &mdash; <button class="small outline color-light" href="#" id="open-trigger">Run Animation</button></span>
          <div class="open bgcolor-primary" style="height: 20px; width: 20px;"></div>
        </div>
      </div>
    </div>
    <?php include('includes/scripts.inc'); ?>
  </body>
</html>