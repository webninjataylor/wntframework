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



/******** TOOL-TIP POP-UPS ********/
/*
    <span class="tooltiptest" data-id="tip1">Tool-tip Test</span>
    <div id="tip1" class="tooltip" style="display:none;">I am the hidden tip</div>
*/
wnt.tooltip('.tooltiptest');   // Pass in element(s) which have tips (data-id needs to match id of hidden tip)