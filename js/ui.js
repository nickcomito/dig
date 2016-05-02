/* Reponsive tables
 * This function parses table header cells and "moves" them into spans to be displayed inline
 */
$(document).ready(function() {

  // MOBILE MENU
  // -----------

  $("#menu-toggle").click(function() {
    $(".global-header nav").toggleClass("expanded");
    $(this).toggleClass("expanded");
  });

  // MODALS
  // ------

  $("#tutorial-trigger").click(function() {
    $("#tutorial-overlay").addClass("visible");
  });

  $("#tutorial-overlay").click(function(){
    if( $(this).hasClass("visible") ) {
      $(this).removeClass("visible");
    }
  });

  $("#open-trigger").click(function() {
    open($(".open"));
    $(".open").toggleClass("opened");
  });


  $("#slide-l-trigger").click(function() {
    slide_l();
    $(this).hide();
  });

  $("#slide-r-trigger").click(function() {
    slide_r();
    $(this).hide();
  });




  // TABS
  // ----

  $('ul.tab-titles li').click(function(){
    var tab_id = $(this).attr('data-tab');
    $('ul.tab-titles li').removeClass('active');
    $('.tab-content').removeClass('active');
    $(this).addClass('active');
    $("#"+tab_id).addClass('active');
  });




  // EDE
  // ---
  ede_setup();


});




// RESPONSIVE TABLE
// ----------------

responsiveTables = function(element) {
  element = element || document;
  var tables = element.querySelectorAll('table.responsive');
  for (var ti = 0; ti < tables.length; ++ti) {
    var cells = tables[ti].querySelectorAll('tbody td'),
        headers = tables[ti].querySelectorAll('thead th');
    if (headers.length < 1) continue;
    for (var ci = 0; ci < cells.length; ++ci) {
      var headerCell = headers[cells[ci].cellIndex];
      var inlineHeader = (headerCell) ? ("<span class='inline-header'>" + headerCell.innerHTML + "</span>") : "";
      cells[ci].innerHTML = inlineHeader + cells[ci].innerHTML;
    }
  }
};




// SVG INJECTION
// -------------

svg_replace = function(element) {
  $('img.svg').each(function(){
    var $img = $(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');

    $.get(imgURL, function(data) {
        // Get the SVG tag, ignore the rest
        var $svg = $(data).find('svg');

        // Add replaced image's ID to the new SVG
        if(typeof imgID !== 'undefined') {
            $svg = $svg.attr('id', imgID);
        }
        // Add replaced image's classes to the new SVG
        if(typeof imgClass !== 'undefined') {
            $svg = $svg.attr('class', imgClass+' replaced-svg');
        }

        // Remove any invalid XML tags as per http://validator.w3.org
        $svg = $svg.removeAttr('xmlns:a');

        // Replace image with new SVG
        $img.replaceWith($svg);

    }, 'xml');
  })
};




// EDE
// ---

ede_setup = function() {
  

  $('form.ede div').each(function(){
    var label = $(this).attr('data-label');
    var id = $(this).attr('id');
    var label_for = $(this).attr('name');

    if ( label && label.length > 40 ) {
      $(this).addClass("no-border");
    }

    if ( label && label.length > 0 ) {
      $(this).addClass("label-inject");
    }
  });

  $('form.ede :input').each(function(){
    var label = $(this).attr('data-label');
    var id = $(this).attr('id');
    var label_for = $(this).attr('name');

    if ( label ) {
      $(this).after("<label for='" + id +"'>" + label + "</label>");  
    }
  });

  // checkboxes.after()
}




// COLOR FUNCTIONS
// ---------------

function swatch_output() {
  // Get all the example colors that are displayed as swatches
  var colors = document.getElementsByClassName('example');

  // Loop through colors and output the RGB and HEX values
  for (var i = 0; i < colors.length; i++) {
    color = colors[i];
    // console.log(convertColor(getBgColor(color)));
  }
}

function getBgColor(element) 
{
  if (element.currentStyle)
    return element.currentStyle.backgroundColor;
  if (window.getComputedStyle)
  {
    var elementStyle=window.getComputedStyle(element,"");
    if (elementStyle)
      return elementStyle.getPropertyValue("background-color");
  }
  // Return 0 if both methods failed.  
  return 0;
}

function convertColor(color)
{  
  var rgbColors=new Object();

  // RGB Format

  if (color[0]=='r')
  {
    // Find the index of the redValue. Remove "rgb" and parenthesis
    // The indexOf function returns the index of the "(" and ")" which we then use to get inner content.  
    color=color.substring(color.indexOf('(')+1, color.indexOf(')'));
  
    // Split values using comma separator
    // The split function returns an object.
    rgbColors=color.split(',', 3);

    // Convert redValue to integer
    rgbColors[0]=parseInt(rgbColors[0]);
    // Convert greenValue to integer
    rgbColors[1]=parseInt(rgbColors[1]);
    // Convert blueValue to integer
    rgbColors[2]=parseInt(rgbColors[2]);    
  }

  
  // HEX Format

  else if (color.substring(0,1)=="#")
  {
    // This is simple because we know that every values is two hexadecimal digits.
    rgbColors[0]=color.substring(1, 3);  // redValue
    rgbColors[1]=color.substring(3, 5);  // greenValue
    rgbColors[2]=color.substring(5, 7);  // blueValue

    // We need to convert the value into integers, but the value is in hex (base 16)!
    // Fortunately, the parseInt function takes a second parameter signifying the base we're converting from.  
    rgbColors[0]=parseInt(rgbColors[0], 16);
    rgbColors[1]=parseInt(rgbColors[1], 16);
    rgbColors[2]=parseInt(rgbColors[2], 16);
  }
  return rgbColors;
}

function componentToHex(c) {
 var hex = c.toString(16);
 return hex.length == 1 ? "0" + hex : hex;
}

function rgbToHex(r, g, b) {
 return "#" + componentToHex(r) + componentToHex(g) + componentToHex(b);
}




// ANIMATION
// ---------

function slide_r () {
  $(".slide-r").velocity({ 
    right: "-100%",
  },
  {
    duration: 1000,
  });
}

function slide_l () {
  $(".slide-l").velocity({ 
    left: "-100%",
  },
  {
    duration: 1000,
  });
}

function open(e) {
  if ($(e).hasClass("opened")) {
    $(e).velocity("reverse", {duration: 500});
  }
  else {
    $(e).velocity({
      scaleX: 20,
      scaleY: 20,
      translateX: 20,
      translateY: 5,
    }, {duration: 500});
  }
}