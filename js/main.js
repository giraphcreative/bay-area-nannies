function isInt(a){return a%1===0}!function(a){"use strict";a.fn.fitVids=function(b){var c={customSelector:null,ignore:null};if(!document.getElementById("fit-vids-style")){var d=document.head||document.getElementsByTagName("head")[0],e=".fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}",f=document.createElement("div");f.innerHTML='<p>x</p><style id="fit-vids-style">'+e+"</style>",d.appendChild(f.childNodes[1])}return b&&a.extend(c,b),this.each(function(){var b=['iframe[src*="player.vimeo.com"]','iframe[src*="youtube.com"]','iframe[src*="youtube-nocookie.com"]','iframe[src*="kickstarter.com"][src*="video.html"]',"object","embed"];c.customSelector&&b.push(c.customSelector);var d=".fitvidsignore";c.ignore&&(d=d+", "+c.ignore);var e=a(this).find(b.join(","));e=e.not("object object"),e=e.not(d),e.each(function(b){var c=a(this);if(!(c.parents(d).length>0||"embed"===this.tagName.toLowerCase()&&c.parent("object").length||c.parent(".fluid-width-video-wrapper").length)){c.css("height")||c.css("width")||!isNaN(c.attr("height"))&&!isNaN(c.attr("width"))||(c.attr("height",9),c.attr("width",16));var e="object"===this.tagName.toLowerCase()||c.attr("height")&&!isNaN(parseInt(c.attr("height"),10))?parseInt(c.attr("height"),10):c.height(),f=isNaN(parseInt(c.attr("width"),10))?c.width():parseInt(c.attr("width"),10),g=e/f;if(!c.attr("id")){var h="fitvid"+b;c.attr("id",h)}c.wrap('<div class="fluid-width-video-wrapper"></div>').parent(".fluid-width-video-wrapper").css("padding-top",100*g+"%"),c.removeAttr("height").removeAttr("width")}})})}}(window.jQuery||window.Zepto),function(a,b,c,d,e,f,g){a.GoogleAnalyticsObject=e,a[e]=a[e]||function(){(a[e].q=a[e].q||[]).push(arguments)},a[e].l=1*new Date,f=b.createElement(c),g=b.getElementsByTagName(c)[0],f.async=1,f.src=d,g.parentNode.insertBefore(f,g)}(window,document,"script","https://www.google-analytics.com/analytics.js","ga"),ga("create","UA-38315794-38","auto"),ga("send","pageview"),jQuery(document).ready(function(a){var b=a("header nav"),c=(b.find("button.menu-toggle"),b.find("nav"),a(".main-content img, .content-style img"));a(".sidebar"),a(".large-title"),a(".sidebar .menu"),a(".widget_multi_twitter");if(d=a(".testimonials"),c.removeAttr("width").removeAttr("height"),a(".main-content, .content-style").fitVids(),d.length){var d=d.find(".testimonial"),e=d.length,f=1;matchMedia("only screen and (min-width: 768px)").matches?f=3:matchMedia("only screen and (min-width: 500px)").matches&&(f=2);var g=Math.ceil(e/f);console.log(g);var h=1;d.each(function(){h>g&&h<2*g&&(console.log(a(this)),a(this).detach().appendTo(".testimonials-column:nth-child(2)")),h>g&&a(this).detach().appendTo(".testimonials-column:nth-child(2)"),h>2*g&&a(this).detach().appendTo(".testimonials-column:nth-child(3)"),h++})}}),window.matchMedia||(window.matchMedia=function(){"use strict";var a=window.styleMedia||window.media;if(!a){var b=document.createElement("style"),c=document.getElementsByTagName("script")[0],d=null;b.type="text/css",b.id="matchmediajs-test",c.parentNode.insertBefore(b,c),d="getComputedStyle"in window&&window.getComputedStyle(b,null)||b.currentStyle,a={matchMedium:function(a){var c="@media "+a+"{ #matchmediajs-test { width: 1px; } }";return b.styleSheet?b.styleSheet.cssText=c:b.textContent=c,"1px"===d.width}}}return function(b){return{matches:a.matchMedium(b||"all"),media:b||"all"}}}()),jQuery(document).ready(function(a){a(".showcase.footer").each(function(){var b=a(this),c=0,d=b.find(".slide").size();if("undefined"!=typeof b){var e=b.find(".slide.visible"),f=b.find(".slide").last(),g=function(){var a=i(),b=a.prev(".slide");b.length||(b=f),a.attr("class","slide"),b.attr("class","slide visible"),setTimeout(function(){a.attr("class","slide hide-left")},400),j()},h=function(){var a=i(),b=a.next(".slide");b.length||(b=e),a.attr("class","slide hide-left"),b.attr("class","slide visible"),setTimeout(function(){a.attr("class","slide")},400),j()},i=function(){return b.find(".slide.visible")},j=function(){var c=i(),d=c.find("img");if(b.find(".slide-wrapper").length)var e=2*b.find(".slide-wrapper").css("margin-top").replace("px","");else var e=0;a(window).width()>=768?b.height(d.height()+e):b.height(c.height())};setTimeout(function(){j(),d>1&&(c=setInterval(h,1e4))},500),a(window).resize(function(){i();j()}),a(".showcase.footer .showcase-nav a").click(function(){a(this).hasClass("previous")?g():h(),d>1&&clearInterval(c)}),a(".showcase.footer .showcase-nav a.previous").hover(function(){a(".showcase.footer .slide:not(.visible)").attr("class","slide hide-left")}),a(".showcase.footer .showcase-nav a.next").hover(function(){a(".showcase.footer .slide:not(.visible)").attr("class","slide")})}})}),jQuery(document).ready(function(a){a(".showcase:not(.footer)").each(function(){var b=a(this),c=0,d=b.find(".slide").size();if("undefined"!=typeof b){var e=b.find(".slide.visible"),f=b.find(".slide").last(),g=function(){var a=i(),b=a.prev(".slide");b.length||(b=f),a.attr("class","slide"),b.attr("class","slide visible"),setTimeout(function(){a.attr("class","slide hide-left")},400),j()},h=function(){var a=i(),b=a.next(".slide");b.length||(b=e),a.attr("class","slide hide-left"),b.attr("class","slide visible"),setTimeout(function(){a.attr("class","slide")},400),j()},i=function(){return b.find(".slide.visible")},j=function(){var c=i(),d=c.find("img");if(b.find(".slide-wrapper").length)var e=2*b.find(".slide-wrapper").css("margin-top").replace("px","");else var e=0;a(window).width()>=768?b.height(d.height()+e):b.height(c.height())};setTimeout(function(){j(),d>1&&(c=setInterval(h,1e4))},500),a(window).resize(function(){i();j()}),b.find(".showcase-nav a").click(function(){a(this).hasClass("previous")?g():h(),d>1&&clearInterval(c)}),b.find(".showcase-nav a.previous").hover(function(){b.find(".slide:not(.visible)").attr("class","slide hide-left")}),b.find(".showcase-nav a.next").hover(function(){b.find(".showcase .slide:not(.visible)").attr("class","slide")})}})});