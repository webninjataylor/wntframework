/******** FEATURE LIST ********/
    /*
        Automatic functionality:
            Menu highlighting
        Manual functionality:
            wnt.lockdown(new Date(2013,4,22))) = Site lockdown ... Subtract one from the zero-based month
            wnt.tooltip(ELEMENTs) = Tooltip popups
            wnt.imageCycler(ELEMENT) = Image fade cycler
            wnt.fillTable(ELEMENT,JSON) = Populate table with JSON data
            wnt.defaultContentLayer() = Show default content layer
            wnt.easyphone('#phone') = Make phone form field easy to populate
    */

// Create accessible namespace
var wnt = {};

(function(){

    /******** HIGHLIGHT CURRENT MENU ITEM ********/
    /* USAGE: AUTOMATIC */
    wnt.currentPage = document.location.pathname;
    wnt.defaultTab = 'yes';
    for(wnt.i=0; wnt.i < $('menu').children('li').length; wnt.i++){
        var currentMenuItem = $('menu').children('li').eq(wnt.i);
        // Is it a top-level menu item?...
        if(wnt.currentPage.indexOf(currentMenuItem.children('a').attr('href')) !== -1){
            currentMenuItem.addClass('active');
            wnt.defaultTab = 'no';
        // ...or a second-level menu item?
        } else {
            for(wnt.j=0; wnt.j < currentMenuItem.find('li').length; wnt.j++){
                if(wnt.currentPage.indexOf(currentMenuItem.find('li').eq(wnt.j).find('a').attr('href')) !== -1){
                    currentMenuItem.addClass('active');
                    currentMenuItem.find('li').eq(wnt.j).addClass('active');
                    wnt.defaultTab = 'no';
                }
            }
        }
    }
    if(wnt.defaultTab === 'yes') {
        for(wnt.i=0; wnt.i < $('menu').children('li').length; wnt.i++){
            currentMenuItem = $('menu').children('li').eq(wnt.i);
            if(currentMenuItem.children('a').attr('href').indexOf('index') !== -1){
                currentMenuItem.addClass('active');
            }
        }
    }

    /******** SITE LOCKDOWN ********/
    /* USAGE EXAMPLE:
        ...
        wnt.lockdown(new Date(2013,4,22));   // Make sure to subtract one from the zero-based month
    */
    wnt.currentDate = new Date();
    wnt.currentDate.setHours(0,0,0,0);
    wnt.lockdown = function(dueBy){
        if((wnt.currentDate > dueBy) && (wnt.currentPage.indexOf('404') === -1)){
            document.location = "404.shtml";
        }
    };

    /******** TOOL-TIP POP-UPS ********/
    /* USAGE EXAMPLE (classes are whatever you want, but data-id must match id of tip):
        ...
        <span class="tooltiptest" data-id="tip1">Tool-tip Test</span>
        <div id="tip1" class="tooltip" style="display:none;">I am the hidden tip</div>
        ...
        // Pass in element(s) which have tips (data-id needs to match id of hidden tip)
        wnt.tooltip('.tooltiptest');
    */
    wnt.tooltip = function(elements){
        $(elements).hover(function(){
                wnt.tip = $(this).attr('data-id');
                $('#'+wnt.tip).toggle();
            }
        );
    };

    /******** IMAGE FADE-SWAP ********/
    /* USAGE EXAMPLE (cycler ID is whatever you want):
        <div id="cycler">
            <img src="images/header1.jpg">
            <img src="images/header2.jpg">     
        </div>
        ...
        #cycler {
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
        ...
        wnt.imageCycler('#cycler')   // Pass ID of image cycler
        */
    wnt.imageCycler = function(cycler){
        if($(cycler).length !== 0){
            $(cycler).find('img:first').addClass('active');
            setInterval('wnt.cycleImages(cycler)', 3000);
        };
    };
    wnt.cycleImages = function(cycler){
        var $active = $(cycler).find('.active');
        var $next = ($active.next().length > 0) ? $active.next() : $(cycler).find('img:first');
        $next.css('z-index',2);//move the next image up the pile
        $active.fadeOut(1500,function(){//fade out the top image
            $active.css('z-index',1).show().removeClass('active');//reset the z-index and unhide the image
            $next.css('z-index',3).addClass('active');//make the next image the top one
        });
    };

    /******** POPULATE TABLE WITH JSON DATA ********/
    /* USAGE EXAMPLE (table ID is whatever you want):
        <table id="prices">
            <thead>
                <tr>
                    <th>Lot Number</th>
                    <th>Price</th>
                    <th>Smith Avenue</th>
                    <th>MLS</th>
                    <th>Acreage</th>
                    <th>Lot Type</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
        ...
        wnt.fillTable('#prices','sample.json')
        ...
        BONUS:
            load jquery.dataTables.min.js for sortable columns...
            $('#prices').dataTable({
                "bPaginate": false,
                "bLengthChange": false,
                "bFilter": false,
                "bInfo": false,
                "bAutoWidth": false,
                "aoColumnDefs": [{
                    "sType": "html",
                    "aTargets": [0]
                }]
            });
    */
    wnt.fillTable = function(dataTable, dataPath){
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
        $.getJSON(dataPath, function(data) {   //Load JSON, which is an array of arrays.
            $.each(data, function(row){   //Treat each array in the data as a row in the table.
                $(dataTable).find('tbody').append('<tr>'+wnt.generateRows(data[row])+'</tr>');
            });
        });

    };
    wnt.generateRows = function(data){
        var row = '';
        $.each(data, function(cell){
            row += '<td>'+data[cell]+'</td>';
        });
        return row;
    };

    /******** SHOW DEFAULT CONTENT LAYER w/URL PARAM SUPPORT ********/
    /* USAGE EXAMPLE (each layer of content must have "layered-content" class, and data-id must match id of tip):
        ...
        .layered-content {
            display: none;
        }
        ...
        <a href="?dcl=water">Show Water via URL</a>
        
        <ul>
            <li><a href="#" data-id="water" class="display-layered-content">Show Water</a></li>
            <li><a href="#" data-id="sand" class="display-layered-content">Show Sand</a></li>
            <li><a href="#" data-id="tree" class="display-layered-content">Show Tree</a></li>
        </ul>

        <img id="water" class="layered-content" src="images/water.jpg" alt="Water">
        <img id="sand" class="layered-content" src="images/sand.jpg" alt="Sand">
        <img id="tree" class="layered-content" src="images/tree.jpg" alt="Tree">
        ...
        wnt.defaultContentLayer();
    */
    wnt.defaultContentLayer = function(){
        // IF URL has parameters, use them to find the content layer to display
        if(window.location.search.indexOf('dcl') !== -1){
            // Get all parameters from the end of the URL
            $.urlParam = function(name){
                var results = new RegExp('[\\?&]' + name + '=([^&#]*)').exec(window.location.href);
                return results[1] || 0;
            };
            $('.layered-content').hide();
            $('#'+$.urlParam('dcl')).show();
        }
        $('.display-layered-content').click(function(){
            $('.layered-content').hide();
            $('#'+$(this).attr('data-id')).show();
            return false;
        });
    };

    /******** EASY PHONE FORM FIELD ********/
    /* USAGE EXAMPLE (phoneField is any DOM identifier for the phone's input field):
        ...
        wnt.easyphone('#phone');
    */
    wnt.easyphone = function(phoneField){
        var defaultValue = '(   )    -    ';
        var maxLength = 14;
        $(phoneField).attr('maxlength',maxLength);
        $(phoneField).focus(function(){
            var currentValue = $(this).val();
            if((currentValue === defaultValue) || (currentValue === '')){
                $(this).val('(');
            }
        });
        $(phoneField).keyup(function(){
            var currentValue = $(this).val();
            if(currentValue.length === 4){
                $(this).val(currentValue+') ');
            }
            if(currentValue.length === 9){
                $(this).val(currentValue+'-');
            }
        });
    };

}());

/******** TO DO ********/
/*
Currently works if elements don't exist, but...
Build a routing mecahnism to only run functions on certain pages like...
if(wnt.currentPage.indexOf('index.php') !== -1) {
    wnt.defaultContentLayer();
}
*/