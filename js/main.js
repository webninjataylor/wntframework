/******** GOOGLE ANALYTICS ********/
/*** INSERT HERE ***/
/******** REQUIRES: a unique ID on line 2 ********/
/*
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-31306164-2']);
_gaq.push(['_trackPageview']);

(function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' === document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
*/



/******** SITE LOCKDOWN ********/
//wnt.lockdown(new Date(2013,4,22));   // Make sure to subtract one from the zero-based month



/******** IMAGE FADE-SWAP ********/
wnt.imageCycler('#cycler');   // Pass ID of image cycler



/******** POPULATE TABLE WITH JSON DATA ********/
// Add conditional to keep JSON data from loading on every page request
wnt.fillTable('#prices','/wntframework/json/sample.json');   // Pass ID of table and path to JSON



/******** SHOW DEFAULT CONTENT LAYER w/URL PARAM SUPPORT ********/
wnt.defaultContentLayer();



/******** EASY PHONE FORM FIELD ********/
wnt.easyphone('#phone');   // Pass ID of phone field



/******** BOOTSTRAP ********/
$('#myCarousel').carousel();
$('#example').popover();