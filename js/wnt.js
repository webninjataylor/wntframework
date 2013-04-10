/******** GOOGLE ANALYTICS ********/
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



/******** UNPAID ACCOUNT ********/
/*
var currentDate = new Date();
currentDate.setHours(0,0,0,0);
var dueBy = new Date(2013,2,22);   // Make sure to subtract one from the zero-based month
if((currentDate > dueBy) && (currentPage.indexOf('404') === -1)){
    document.location = "404.shtml";
}
*/


/******** LOCK WINDOW ********/
var wnt = {};
function BlockMove(event) {
    /* Prevents elasticity for window as a whole unit when viewed on mobile */
    if(wnt.mobile === true){
        event.preventDefault();
    }
}


/******** HIGHLIGHT CURRENT MENU ITEM ********/
var currentPage = document.location.pathname;
var defaultTab = 'yes';
for(wnt.i=0; wnt.i < $('menu').children('li').length; wnt.i++){
    var currentMenuItem = $('menu').children('li').eq(wnt.i);
    // Is it a top-level menu item?...
    if(currentPage.indexOf(currentMenuItem.children('a').attr('href')) !== -1){
        currentMenuItem.addClass('active');
        defaultTab = 'no';
    // ...or a second-level menu item?
    } else {
        for(wnt.j=0; wnt.j < currentMenuItem.find('li').length; wnt.j++){
            if(currentPage.indexOf(currentMenuItem.find('li').eq(wnt.j).find('a').attr('href')) !== -1){
                currentMenuItem.addClass('active');
                currentMenuItem.find('li').eq(wnt.j).addClass('active');
                defaultTab = 'no';
            }
        }
    }
}
if(defaultTab === 'yes') {
    for(wnt.i=0; wnt.i < $('menu').children('li').length; wnt.i++){
        currentMenuItem = $('menu').children('li').eq(wnt.i);
        if(currentMenuItem.children('a').attr('href').indexOf('index') !== -1){
            currentMenuItem.addClass('active');
        }
    }
}


/******** POPULATE TABLE WITH JSON DATA ********/
/******** REQUIRES: a table with id="prices" and prices.json ********/
/* INDEXOF SHIV FOR IE8 */
if(!Array.prototype.indexOf){
    Array.prototype.indexOf = function(elt /*, from*/){
        var len = this.length >>> 0;
        var from = Number(arguments[1]) || 0;
        from = (from < 0) ? Math.ceil(from) : Math.floor(from);
        if(from < 0){
            from += len;
        }
        for(; from < len; from++){
            if(from in this && this[from] === elt){
                return from;
            }
        }
        return -1;
    };
}
function generateRows(data){
    var row = '';
    var sold = data.indexOf('Sold!');
    $.each(data, function(cell){
        if(sold !== -1){
            row += '<td class="sold">'+data[cell]+'</td>';
        } else {
            row += '<td>'+data[cell]+'</td>';
        }
    });
    return row;
}
if($('#prices').length !== 0){   //If the pricing table exists...
    $.getJSON('prices.json', function(data) {   //Load JSON, which is an array of arrays.
        $.each(data, function(row){   //Treat each array in the data as a row in the table.
            $('#prices tbody').append('<tr>'+generateRows(data[row])+'</tr>');
        });
        /*$('#prices').dataTable({
            "bPaginate": false,
            "bLengthChange": false,
            "bFilter": false,
            "bInfo": false,
            "bAutoWidth": false,
            "aoColumnDefs": [{
                "sType": "html",
                "aTargets": [0]
            }]
        });*/
    });
}


/******** TOOL-TIP POP-UPS ********/
$('.showtip').hover(
    function(){
        var tip = $(this).attr('data-id');
        $('#'+tip).toggle();
    }
);


/******** CONTENT PEEK-A-BOO W/URL PARAMETER SUPPORT ********/
/******** REQUIRES: link and div with matching data-id/id and peekaboo class ********/
/*** NOTE:
xyz.com?pab=TOOLTIP
<a href="#" data-id="TOOLTIP" class="peekaboo">[LINK]</a>
<div id="TOOLTIP" class="peekaboo">[CONTENT]</div>
***/
// IF URL has parameters, use them to find the peek-a-boo target
if(window.location.search !== ""){
    // Get all parameters from the end of the URL
    $.urlParam = function(name){
        var results = new RegExp('[\\?&]' + name + '=([^&#]*)').exec(window.location.href);
        return results[1] || 0;
    };
    $('div.peekaboo').hide();
    $('div#'+$.urlParam('pab')).show();
}
$('a.peekaboo').click(function(){
    $('div.peekaboo').hide();
    $('div#'+$(this).attr('data-id')).show();
});



/******** IMAGE FADE-SWAP ********/
/******** REQUIRES: div#cycler with images and following css rules ********/
/*
<div id="cycler">
    <img class="active" src="images/header1.jpg">
    <img src="images/header2.jpg">     
</div>
#cycler {
    float: right;
    height: 110px;
    width: 535px;
}
#cycler img {
    position: absolute;
    z-index: 1;
}
#cycler img.active {
    z-index: 3;
}
*/
/*
function cycleImages(){
    var $active = $('#cycler .active');
    var $next = ($active.next().length > 0) ? $active.next() : $('#cycler img:first');
    $next.css('z-index',2);//move the next image up the pile
    $active.fadeOut(1500,function(){//fade out the top image
        $active.css('z-index',1).show().removeClass('active');//reset the z-index and unhide the image
        $next.css('z-index',3).addClass('active');//make the next image the top one
    });
}

$(document).ready(function(){
    // run every 3s
    setInterval('cycleImages()', 3000);
});
*/