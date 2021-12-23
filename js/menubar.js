$("nav > ul > li").mouseenter(function () {
  $("nav ul ul, .nav_bg").stop().slideDown("fast");
});
$("nav > ul > li").mouseleave(function () {
  $("nav ul ul, .nav_bg").stop().slideUp("fast");
});