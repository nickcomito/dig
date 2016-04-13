<!doctype html>
<html class="no-js" lang="en">
  <head>
    <title>Atoms</title>
    <link rel="stylesheet" href="stylesheets/screen.css">
    <script data-main="js/ui.js" src="js/require.js"></script>
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
        <h1 class="margbot-5">Atoms</h1>
      </div>
      <div class="sm-4 md-8 lg-8 lg-centered">
        <div class="atom">
          <span class="title">Basic Link (a)</span>
          <a href="">Please, click me</a>
        </div>

        <div class="atom">
          <span class="title">Abbreviation (abbr)</span>
          <abbr>HTML</abbr>
        </div>

        <div class="atom">
          <span class="title">Blockquote (blockquote)</span>
          <blockquote>The quick brown fox jumped over the lazy dog</blockquote>
        </div>

        <div class="atom">
          <span class="title">Caption (caption)</span>
          <caption>This is a caption</caption>
        </div>

        <div class="atom">
          <span class="title">Cite (cite)</span>
          <cite>This is a citation</cite>
        </div>

        <div class="atom">
          <span class="title">Code (code)</span>
          <code>code { font-family: monospace; }</code>
        </div>

        <div class="atom">
          <span class="title">Emphasis (em)</span>
          <em>Text that is emphasized with italics</em>
        </div>

        <div class="atom">
          <span class="title">Definition List (dl)</span>
          <dl>
            <dt>Dictonary</dt>
            <dd>a book giving information on particular subjects or on a particular class of words, names, or facts, usually arranged alphabetically</dd>

            <dt>Command</dt>
            <dd>To direct with specific authority or prerogative; order</dd>

            <dt>Software</dt>
            <dd>The programs used to direct the operation of a computer, as well as documentation giving instructions on how to use them</dd>
          </dl>
        </div>

        <div class="atom">
          <span class="title">Figure Caption (figcaption)</span>
          <figcaption>A caption on, near, or around a figure (image)</figcaption>
        </div>

        <div class="atom">
          <span class="title">Heading One (h1)</span>
          <h1>Less is more</h1>
        </div>

        <div class="atom">
          <span class="title">Heading Two (h2)</span>
          <h2>A big heading for a big idea</h2>
        </div>

        <div class="atom">
          <span class="title">Heading Three (h3)</span>
          <h3>Heading number three</h3>
        </div>

        <div class="atom">
          <span class="title">Heading Four (h4)</span>
          <h4>A fourth heading for your reading pleasure</h4>
        </div>

        <div class="atom">
          <span class="title">Heading Five (h5)</span>
          <h5>Almost to the end of headings</h5>
        </div>

        <div class="atom">
          <span class="title">Heading Six (h6)</span>
          <h6>Do people use the H6?</h6>
        </div>

        <div class="atom">
          <span class="title">Keyboard Text (kbd)</span>
          <p>Please use the <kbd>command</kbd> key.</p>
        </div>

        <div class="atom">
          <span class="title">Ordered List (ol)</span>
          <ol>
            <li>Sem Tellus Etiam Fringilla Euismod</li>
            <li>Ligula Dapibus Egestas Ipsum Quam</li>
            <li>Etiam Fringilla:
              <ol>
                <li>Pellentesque Pharetra Consectetur Malesuada Porta</li>
                <li>Maecenas faucibus mollis interdum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</li>
                <li>Egestas Ipsum Quam:
                  <ol>
                    <li>Nulla vitae elit libero, a pharetra augue.</li>
                    <li>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</li>
                  </ol>
                </li>
              </ol>
            </li>
          </ol>
        </div>

        <div class="atom">
          <span class="title">Label (label)</span>
          <label>First Name</label>
        </div>

        <div class="atom">
          <span class="title">Highlight (mark)</span>
          <p>It is not in the stars to hold our destiny <mark>but in ourselves</mark>.</p>
        </div>

        <div class="atom">
          <span class="title">Paragraph (p)</span>
          <p>Software can be split into two main types - system software and application software or application programs. System software is any software required to support the production or execution of application programs but which is not specific to any particular application. Examples of system software would include the operating system, compilers, editors and sorting programs.</p>
        </div>

        <div class="atom">
          <span class="title">Preformatted Text (pre)</span>
          <pre>
pre {
  display: block;
  font-family: monospace;
  white-space: pre;
}
          </pre>
        </div>

        <div class="atom">
          <span class="title">Inline Quote (q)</span>
          <p>This is an example of a quote that is inline: <q>And you can quote me on that</q>.</p>
        </div>

        <div class="atom">
          <span class="title">Sample (samp)</span>
          <samp>// This is so meta</samp>
        </div>

        <div class="atom">
          <span class="title">Small Text (small)</span>
          <small>Some small text for all small tasks</small>
        </div>

        <div class="atom">
          <span class="title">Strikethrough (strike)</span>
          <p>This is <strike>not</strike> what I meant to say</p>
        </div>

        <div class="atom">
          <span class="title">Strong (strong)</span>
          <p>Just say what you <strong>need</strong> to say</p>
        </div>

        <div class="atom">
          <span class="title">Subscript (sub)</span>
          <p>The chemical composition of water is: H<sub>2</sub>0</p>
        </div>

        <div class="atom">
          <span class="title">Superscript (sup)</span>
          <p>That's hot <sup>&trade;</sup></p>
        </div>

        <div class="atom">
          <span class="title">Underline (u)</span>
          <p>For all your <u>underlining</u> needs</p>
        </div>

        <div class="atom">
          <span class="title">Unordered List (ul)</span>
          <ul>
            <li>Sem Tellus Etiam Fringilla Euismod</li>
            <li>Ligula Dapibus Egestas Ipsum Quam</li>
            <li>Etiam Fringilla:
              <ul>
                <li>Pellentesque Pharetra Consectetur Malesuada Porta</li>
                <li>Maecenas faucibus mollis interdum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</li>
                <li>Egestas Ipsum Quam:
                  <ul>
                    <li>Nulla vitae elit libero, a pharetra augue.</li>
                    <li>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </div>

        <div class="atom">
          <span class="title">Variable (var)</span>
          <p><var>E</var> energy is equal to <var>m</var> mass multiplied by the <var>c</var> speed of light, squared.</p>
        </div>

        

        <div class="atom">
          <span class="title">Input Field (input)</span>
          <input type="text">
        </div>

        <div class="atom">
          <span class="title">Select Menu (select)</span>
          <select class="styled">
            <option>Select</option>
            <option>Option 2</option>
          </select>
        </div>

        <div class="atom">
          <span class="title">Text Area (textarea)</span>
          <textarea></textarea>
        </div>

        <div class="atom">
          <span class="title">Button</span>
          <p><button>Simple</button></p>
          <p><button class="shadowed">Shadowed</button></p>
          <p><button class="rounded">Rounded</button></p>
          <p><button class="secondary">Secondary</button></p>
          
          <p><button class="small">Small</button></p>
          <p><button class="subtle">Subtle</button></p>
          <p><button class="outline">Outline</button></p>

          <p><button class="cancel">Cancel</button></p>
          <p><button class="error">Error</button></p>
          <p><button disabled="disabled">Disabled</button></p>

          <p><button><img src="images/icon_star.svg" class="svg icon icon-star color-light"/> Plus Icon</button></p>

          <p><button class="expand">Expand</button></p>
          <p><button class="sm-expand">Small Expand</button></p>
        </div>

        <div class="atom">
          <span class="title">Horizontal Rule (hr)</span>
          <hr></hr>
        </div>
      </div>
    </div>
    <div id="tutorial-overlay">
      <div class="island"><iframe src="https://player.vimeo.com/video/14396098" width="800" height="500" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
    </div>
    <?php include('includes/scripts.inc'); ?>
  </body>
</html>