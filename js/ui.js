/* Reponsive tables
 * This function parses table header cells and "moves" them into spans to be displayed inline
 */
$(document).ready(function() {




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

    if ( label.length > 40 ) {
      $(this).addClass("no-border");
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