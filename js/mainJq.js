$(document).ready(function(){
    $(".post-wrap").each(function(){

      $(this).removeClass("no-js");
      var classes = ["sm","md"];
      $(this).addClass(classes[~~(Math.random()*classes.length)]);
      //var classes = ["pull-sm","push-sm","pull-md","push-md","pull-lg","push-lg"];
      //$(this).addClass(classes[~~(Math.random()*classes.length)]);
      //var classes = ["nomargin","nomargin","nomargin","nomargin","margin-left","margin-right","margin-lg-left"];
      //$(this).addClass(classes[~~(Math.random()*classes.length)]);
      //$(this).addClass(classes[~~(Math.random()*classes.length)]);
      //var thisLeft = $(this).position().left;
      //var thisWidth = ($(this) / $(".posts").width()) * 100;
      //console.log(thisLeft);
      //console.log(thisWidth);
      //if($(".md").next().is('.md')) {
      //  if($(".md").next().next().is('.md')) {
      //    $(this).removeClass('md');
      //    $(this).addClass('sm');
      //  }
      //};
    });
});

$('.posts').isotope({
  // options
  itemSelector: '.post-wrap',
  layoutMode: 'fitRows'
});


$('.post').tilt({
  perspective: 1500,
  scale: 1.05,
});

$(document).ready(function() {
  setTimeout(function(){
    $(".wrap-loader").removeClass( "unloaded" );
  }, 500);
});

$(".core .team-member").click(function(){
  if (!$(this).hasClass("active")){
    $(".team-member").removeClass("active");
    $(this).addClass("active");
  }
});

$("a").click(function(){
  $("html, body").animate({ scrollTop: 0 }, ".25s");
  $(".team-member").removeClass("active");
  $('.js-player').each(function() {
    $(this).get(0).pause();
  });
  checkVisible();
  $('.menu-overlay').css('opacity', '.9');
  setTimeout(

      function()
      {
    $('.menu-overlay').css('opacity', '');
  }, 200);
});


$('.menu-hover-trigger').hover(
       function(){ $('.menu-overlay').addClass('menu-hover') },
       function(){ $('.menu-overlay').removeClass('menu-hover') }
);


$.fn.visible = function(partial) {

  var $t = $(this),
    $w = $(window),
    viewTop = $w.scrollTop(),
    viewBottom = viewTop + $w.height(),
    _top = $t.offset().top,
    _bottom = _top + $t.height(),
    compareTop = partial === true ? _bottom : _top,
    compareBottom = partial === true ? _top : _bottom;

  return ((compareBottom <= viewBottom) && (compareTop >= viewTop));
}

$(document).ready(function(e) {
  checkVisible();
});
$(window).scroll(function(e) {
  checkVisible();
});
$(window).resize(function(e) {
  checkVisible();
});


function checkVisible() {
  $('.featured-media').each(function(i, k) {
    if ($(this).visible()) {
      $(k).addClass('visible');
    } else {
      $(k).removeClass('visible');
    }
  });
  $('h1').each(function(i, k) {
    if ($(this).visible()) {
      $(k).addClass('visible');
    } else {
      //$(k).removeClass('visible');
    }
  });
  $('h2').each(function(i, k) {
    if ($(this).visible()) {
      $(k).addClass('visible');
    } else {
      //$(k).removeClass('visible');
    }
  });
}



var words = $(".line01").text().split(" ");
$(".line01").empty();
$.each(words, function(i, v) {
    $(".line01").append($("<span class='word'>").text(v));
});
var words = $(".line02").text().split(" ");
$(".line02").empty();
$.each(words, function(i, v) {
    $(".line02").append($("<span class='word'>").text(v));
});
var words = $(".line03").text().split(" ");
$(".line03").empty();
$.each(words, function(i, v) {
    $(".line03").append($("<span class='word'>").text(v));
});
var words = $(".line04").text().split(" ");
$(".line04").empty();
$.each(words, function(i, v) {
    $(".line04").append($("<span class='word'>").text(v));
});
var words = $(".line05").text().split(" ");
$(".line05").empty();
$.each(words, function(i, v) {
    $(".line05").append($("<span class='word'>").text(v));
});

$('.word').each(function (index) {
    var characters = $(this).text().split("");

    $this = $(this);
    $this.empty();
    $.each(characters, function (i, el) {
      $this.append("<span id='" + el + "'>" + el + "</span>");
    });

});
