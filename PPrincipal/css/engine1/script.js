// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Last updated: 2012-03-29
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
function ws_basic(b,a,d){var c=d.find("ul");c.children().css({position:"relative","float":"left"});d.css({position:"relative",overflow:"hidden"});c.css({position:"relative",width:a.length+"99%",height:"100%",top:0});c.css({left:-b.startSlide+"00%"});a.css({position:"static"});this.go=function(e){c.stop(true).animate({left:-e+"00%"},b.duration,"easeInOutExpo");return e}};// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Last updated: 2012-03-29
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
jQuery("#wowslider-container1").wowSlider({effect:"basic",prev:"",next:"",duration:17*100,delay:37*100,outWidth:730,outHeight:450,width:730,height:450,autoPlay:true,stopOnHover:false,loop:false,bullets:true,caption:true,controls:false,logo:"engine1/loading.gif",images:0});