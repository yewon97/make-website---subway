$(window).scroll(function() {
  if ( $( this ).scrollTop() > 700 ) {
    $( '.remote--top' ).fadeIn();
  } else {
    $( '.remote--top' ).fadeOut();
  }
} );
$( '.remote--top' ).click( function() {
  $( 'html, body' ).animate( { scrollTop : 0 }, 400 );
  return false;
} );

// go -top 플로팅 배너 형식으로 만들기
var $w = $(window),
footerHei = $('.footer').outerHeight(),
$banner = $('.remote__container');

$w.on('scroll', function() {

var sT = $w.scrollTop();
var val = $(document).height() - $w.height() - footerHei;

if (sT >= val)
  $banner.addClass('on');
else
  $banner.removeClass('on');

});
