<!doctype html>
<html class="no-js" lang="en">
  <head>
    <title>Patterns</title>
    <?php include('includes/stylesheets.inc'); ?>
    <?php include('includes/meta.inc'); ?>
  </head>
  <body>
    <div class="contain">
      <div class="row">
        <div class="sm-4 md-8 lg-9 centered">
          <nav>
            <a href="index.php">&laquo; Home</a>
          </nav>
        </div>
      </div>
      <div class="sm-4 md-8 lg-9 centered">
        <hr>
        <h1>Patterns</h1>
        <p class="margbot-4">Common interface elements that you can reuse and override</p>
      </div>
      <div class="sm-4 md-8 lg-9 lg-centered">
        <div class="pattern">
          <span class="title">Blocks</span>
          <div class="blocks two">
            <div class="block subtle text-center"><h2 class="dkcolor-subtle-alt-25">One</h2></div>
            <div class="block subtle text-center"><h2 class="dkcolor-subtle-alt-25">Two</h2></div>
          </div>

          <div class="blocks three">
            <div class="block subtle text-center"><h2 class="dkcolor-subtle-alt-25">One</h2></div>
            <div class="block subtle text-center"><h2 class="dkcolor-subtle-alt-25">Two</h2></div>
            <div class="block subtle text-center"><h2 class="dkcolor-subtle-alt-25">Three</h2></div>
          </div>

          <div class="blocks four">
            <div class="block subtle text-center"><h2 class="dkcolor-subtle-alt-25">One</h2></div>
            <div class="block subtle text-center"><h2 class="dkcolor-subtle-alt-25">Two</h2></div>
            <div class="block subtle text-center"><h2 class="dkcolor-subtle-alt-25">Three</h2></div>
            <div class="block subtle text-center"><h2 class="dkcolor-subtle-alt-25">Four</h2></div>
          </div>
        </div>

        <div class="pattern">
          <span class="title">Header</span>
          <header class="global-header clearfix">            
            <a href="#!" class="button outline right hide-lg-up" id="menu-toggle">Menu</a>
            <a href="#!"><h1 class="logo left">Logo</h1></a>
          
            <nav class="primary hide-sm hide-md show-lg-up right">
              <a href="#!">About Us</a>
              <a href="#!">Our Services</a>
              <a href="#!">Generic Page</a>
              <a href="#!">Contact Us</a>
            </nav>
          </header>
        </div>

        <div class="pattern">
          <span class="title">Login Form</span>
          <div class="login-form">
            <form class="ede">
              <div class="xl">
                <input type="email" placeholder="Email">
              </div>
              <div class="xl">
                <input type="password" placeholder="Password">
              </div>

              <div class="xl checkbox">
                <input type="checkbox" name="terms" id="terms-cond" data-label="I accept the terms &amp; conditions">
              </div>

              <button class="sm-expand">Log In</button>
            </form>
            <div class="form-support">
              <p class="md-left lg-left"><a href="#">Forgot your password?</a> It happens.</p>
              <p class="md-right lg-right">No account? <a href="#">Sign Up</a></p>
            </div>
          </div>
        </div>

        <div class="pattern">
          <span class="title">List Group</span>
          <div class="list-group six">
            <ul>
              <li>Parent</li>
              <li>List Item 1</li>
            </ul>
            <ul>
              <li>Parent</li>
              <li>List Item 1</li>
              <li>List Item 2</li>
              <li>List Item 3</li>
              <li>List Item 4</li>
            </ul>
            <ul>
              <li>Parent</li>
              <li>List Item 1</li>
              <li>List Item 2</li>
              <li>List Item 3</li>
            </ul>
            <ul>
              <li>Parent</li>
              <li>List Item 1</li>
              <li>List Item 2</li>
            </ul>
            <ul>
              <li>Parent</li>
              <li>List Item 1</li>
              <li>List Item 2</li>
            </ul>
            <ul>
              <li>Parent</li>
              <li>List Item 1</li>
              <li>List Item 2</li>
            </ul>
          </div>
        </div>

        <div class="pattern">
          <span class="title">Context Steps</span>
          <div class="context-steps">
            <div class="step one"><label>Step 1</label></div>
            <div class="step two current"><label>Step 2</label></div>
            <div class="step three"><label>Step 3</label></div>
            <div class="step four"><label>Step 4</label></div>
          </div>
        </div>

        <div class="pattern">
          <span class="title">Progress Bar</span>
          <div class="progress-bar">
            <div class="progress p25"></div>
          </div>
        </div>

        <div class="pattern">
          <span class="title">Popup</span>
          <div class="popup">
            <div class="">
              <h2>Popup</h2>
            </div>
          </div>
        </div>

        <div class="pattern">
          <span class="title">Tabs</span>
          <div class="tabs">
            <ul class="tab-titles">
              <li class="tab active" data-tab="tab-1">Tab 1</li>
              <li class="tab" data-tab="tab-2">Tab 2</li>
              <li class="tab" data-tab="tab-3">Tab 3</li>
              <li class="tab" data-tab="tab-4">Tab 4</li>
              <li class="tab" data-tab="tab-5">Tab 5</li>
            </ul>
            <div class="tab-container">
              <div class="tab-content active" id="tab-1">
                <h2>Tab 1</h2>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Maecenas faucibus mollis interdum. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
              </div>

              <div class="tab-content" id="tab-2">
                <h2>Tab 2</h2>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Maecenas faucibus mollis interdum. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
              </div>

              <div class="tab-content" id="tab-3">
                <h2>Tab 3</h2>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Maecenas faucibus mollis interdum. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
              </div>

              <div class="tab-content" id="tab-4">
                <h2>Tab 4</h2>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Maecenas faucibus mollis interdum. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
              </div>

              <div class="tab-content" id="tab-5">
                <h2>Tab 5</h2>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Maecenas faucibus mollis interdum. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="pattern">
          <span class="title">Pagination</span>
          <div class="pagination">
            <ul>
              <li><a href="#">&laquo;</a></li>
              <li class="active"><a href="#!">1</a></li>
              <li><a href="#!">2</a></li>
              <li><a href="#!">3</a></li>
              <li><a href="#!">4</a></li>
              <li><a href="#!">5</a></li>
              <li><a href="#!">&raquo;</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <?php include('includes/scripts.inc'); ?>
  </body>
</html>