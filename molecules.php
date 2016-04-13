<!doctype html>
<html class="no-js" lang="en">
  <head>
    <title>Molecules</title>
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
        <h1 class="margbot-5">Molecules</h1>
      </div>
      <div class="sm-4 md-8 lg-8 lg-centered">
        <div class="molecule">
          <span class="title">Messages</span>
          <div class="message info">
            <p><img src="images/icon_star.svg" class="svg icon"> Your data has been saved</p>
          </div>
          <div class="message success">
            <p><img src="images/icon_star.svg" class="svg icon"> Message sent successfully</p>
          </div>
          <div class="message error">
            <p><img src="images/icon_star.svg" class="svg icon"> There was an error uploading. Try again.</p>
          </div>
          <div class="message warning">
            <p><img src="images/icon_star.svg" class="svg icon"> Please do not click the back button.</p>
          </div>
          <div class="message special">
            <p><img src="images/icon_star.svg" class="svg icon"> Special event! Sign up now.</p>
          </div>
        </div>

        <div class="molecule">
          <span class="title">Table (table)</span>
          <table class="responsive">
            <thead>
              <tr>
                <th width="100">Name</th>
                <th width="125">Birthday</th>
                <th>Message</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Nick Comito</td>
                <td>August 20, 1982</td>
                <td>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</td>
              </tr>

              <tr>
                <td>Thomas J. Jones</td>
                <td>January 5, 1991</td>
                <td>Sed posuere consectetur est at lobortis.</td>
              </tr>

              <tr>
                <td>Chris Stephenville Walker</td>
                <td>March 3, 1983</td>
                <td>Nullam quis risus eget urna mollis ornare vel eu leo. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <td>Total 3</td>
                <td>Avg 1990</td>
                <td></td>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
    <div id="tutorial-overlay">
      <div class="island"><iframe src="https://player.vimeo.com/video/14396098" width="800" height="500" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
    </div>
    <?php include('includes/scripts.inc'); ?>
  </body>
</html>