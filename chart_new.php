<html>
<head>
	<title></title>
	<style  link="bootcards-desktop.css"></style>
	<link href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<script type="text/javascript" src="js/bootcards-demo-app.js"></script>
	<style type="text/css" link="css/bootcards-demo-app.css"></style>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script>var isDesktop = true;</script>
</head>
<body>

  <!-- fixed top navbar -->
  <div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand no-break-out" title="Customers" href="/">Customers</a>  
      </div>
      <button type="button" class="btn btn-default btn-back pull-left hidden" onclick="history.back()">
        <i class="fa fa-lg fa-chevron-left"></i><span>Back</span>
      </button>
      <!-- menu button to show/ hide the off canvas slider -->
      <button type="button" class="btn btn-default btn-menu pull-left offCanvasToggle" data-toggle="offcanvas">
        <i class="fa fa-lg fa-bars"></i><span>Menu</span>
      </button>    
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li>
            <a href="/dashboard" data-pjax="#main" data-title="Customers" <i="" class="fa fa-dashboard">
         //     Dashboard
            </a>          
          </li>
          <li>
            <a href="/companies" data-pjax="#main" data-title="Companies" <i="" class="fa fa-building-o">
          //    Companies
            </a>          
          </li>
          <li>
            <a href="/contacts" data-pjax="#main" data-title="Contacts" <i="" class="fa fa-users">
          //    Contacts
            </a>          
          </li>
          <li>
            <a href="/notes" data-pjax="#main" data-title="Notes" <i="" class="fa fa-clipboard">
           //   Notes
            </a>          
          </li>
          <li class="active">
            <a href="/charts" data-pjax="#main" data-title="Charts" <i="" class="fa fa-bar-chart-o">
           //   Charts
            </a>          
          </li>
          <li>
            <a href="/settings" data-pjax="#main" data-title="Settings" <i="" class="fa fa-gears">
           //   Settings
            </a>          
          </li>
        </ul>
      </div>          
    </div>
  </div>   

  <!-- slide in menu (mobile only) -->
  <nav id="offCanvasMenu" class="navmenu offcanvas offcanvas-left">
    <ul class="nav">
      <li>
        <a href="/dashboard" data-pjax="#main" data-title="Customers">
          <i class="fa fa-lg fa-dashboard"></i>
        //  Dashboard 
        </a>          
      </li>
      <li>
        <a href="/companies" data-pjax="#main" data-title="Companies">
          <i class="fa fa-lg fa-building-o"></i>
        //  Companies
        </a>          
      </li>
      <li>
        <a href="/contacts" data-pjax="#main" data-title="Contacts">
          <i class="fa fa-lg fa-users"></i>
        //  Contacts
        </a>          
      </li>
      <li>
        <a href="/notes" data-pjax="#main" data-title="Notes">
          <i class="fa fa-lg fa-clipboard"></i>
       //   Notes
        </a>          
      </li>
      <li class="active">
        <a href="/charts" data-pjax="#main" data-title="Charts">
          <i class="fa fa-lg fa-bar-chart-o"></i>
        //  Charts
        </a>          
      </li>
      <li>
        <a href="/settings" data-pjax="#main" data-title="Settings">
          <i class="fa fa-lg fa-gears"></i>
        //  Settings
        </a>          
      </li>
    </ul>

    <div style="margin-top:20px; padding-left: 20px; font-size: 12px; color: #777">v1.1.0</div>
  </nav>

  <div class="container bootcards-container" id="main">
    
<div class="row">

	<div class="bootcards-cards">	
	
		<div class="col-sm-6">

			<div>
			
				<div class="panel panel-default bootcards-chart">
					
					<div class="panel-heading">
						<h3 class="panel-title">Closed sales by team member - $000s (December)</h3>					
					</div>
			
					<div>
			
						<!--bar chart-->
						<div class="bootcards-chart-canvas" id="chartClosedSales"><svg height="200" version="1.1" width="553" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="none" stroke="#0b62a4" d="M333.5,160A60,60,0,0,0,350.3484760088812,157.5858390246956" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#0b62a4" stroke="#ffffff" d="M333.5,163A63,63,0,0,0,351.1908998093253,160.46513097593038L357.3686743459151,181.57993861831875A85,85,0,0,1,333.5,185Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#3980b5" d="M350.3484760088812,157.5858390246956A60,60,0,0,0,381.1259553708887,136.49340180101217" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path><path fill="#3980b5" stroke="#ffffff" d="M351.1908998093253,160.46513097593038A63,63,0,0,0,383.50725313943315,138.31807189106277L404.93893305633304,154.74010270151825A90,90,0,0,1,358.7727140133219,186.37875853704338Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#679dc6" d="M381.1259553708887,136.49340180101217A60,60,0,0,0,375.2149515394885,56.873873138686236" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#679dc6" stroke="#ffffff" d="M383.50725313943315,138.31807189106277A63,63,0,0,0,377.3006991164629,54.71756679562054L392.59618134760865,38.90465361313883A85,85,0,0,1,400.9701034420923,151.69898588476724Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#95bbd7" d="M375.2149515394885,56.873873138686236A60,60,0,0,0,299.8405337690525,50.33069022980381" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#95bbd7" stroke="#ffffff" d="M377.3006991164629,54.71756679562054A63,63,0,0,0,298.15756045750516,47.847224741294L285.8157561728244,29.635144492222054A85,85,0,0,1,392.59618134760865,38.90465361313883Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#b0cce1" d="M299.8405337690525,50.33069022980381A60,60,0,0,0,279.0720003200809,74.74939900036583" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#b0cce1" stroke="#ffffff" d="M298.15756045750516,47.847224741294A63,63,0,0,0,276.35060033608494,73.48686895038412L256.3936671201146,64.22831525051825A85,85,0,0,1,285.8157561728244,29.635144492222054Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#095791" d="M279.0720003200809,74.74939900036583A60,60,0,0,0,333.4811504443885,159.9999970391187" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#095791" stroke="#ffffff" d="M276.35060033608494,73.48686895038412A63,63,0,0,0,333.4802079666079,162.99999689107466L333.4732964628837,184.99999580541817A85,85,0,0,1,256.3936671201146,64.22831525051825Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="333.5" y="90" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: 800; font-stretch: normal; font-size: 15px; line-height: normal; font-family: Arial;" font-size="15px" font-weight="800" transform="matrix(0.9965,0,0,0.9965,1.154,0.34)" stroke-width="1.0034722222222223"><tspan dy="5.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Adam Callahan</tspan></text><text x="333.5" y="110" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 14px; line-height: normal; font-family: Arial;" font-size="14px" transform="matrix(1.2903,0,0,1.2903,-96.8226,-29.6855)" stroke-width="0.775"><tspan dy="4.75" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">$ 1,500</tspan></text></svg></div>
			
						<div class="panel-footer">
							<button class="btn btn-default btn-block" onclick="toggleChartData(event)">
								<i class="fa fa-table"></i>
								Show Data
							</button>				
						</div>
					</div>
					
					<div class="panel-footer">
						<small class="pull-left">Built with Bootcards - Chart Card</small>
						<a class="btn btn-link btn-xs pull-right" href="/snippets/chart" data-toggle="modal" data-target="#docsModal">
										View Source</a>
					</div>					
			
				</div>		
			
				<!-- Table Card data -->
				<div class="panel panel-default bootcards-table" style="display:none">
					<div class="panel-heading">
						<h3 class="panel-title">Closed sales by team member - $000s (December)</h3>							
					</div>	
					<table class="table table-hover">
						<thead>				
							<tr class="active"><th>Name</th><th class="text-right">Sales value</th></tr>
						</thead>
						<tbody>
							<tr><td>Number of boys</td><td class="text-right">$ 15</td></tr>
							<tr><td>Number of girls</td><td class="text-right">$ 20</td></tr>
					<!--	    <tr><td>Arlo Geist</td><td class="text-right">$ 3,750</td></tr>
							<tr><td>Sheila Hutchins</td><td class="text-right">$ 3,500</td></tr>
							<tr><td>Jeanette Quijano</td><td class="text-right">$ 1,250</td></tr>
							<tr><td>Simon Sweet</td><td class="text-right">$ 5,250</td></tr>
					-->		<tr><td><strong>Total</strong></td><td class="text-right"><strong>$ 35</strong></td></tr>
						</tbody>
					</table>
					<div class="panel-footer">
						<button class="btn btn-default btn-block" onclick="toggleChartData(event, closedSalesChart)">
							<i class="fa fa-bar-chart-o"></i>
							Show Chart
						</button>				
					</div>
					<div class="panel-footer">
						<small class="pull-left">Built with Bootcards - Table Card</small>
						<a class="btn btn-link btn-xs pull-right" href="/snippets/table" data-toggle="modal" data-target="#docsModal">
										View Source</a>
					</div>													
				</div>
			
			</div>
			
			<script type="text/javascript">
			
			/*
			 * Clear the target DOM element and draw the sample charts
			 * Samples come from the morris.js site at http://www.oesmith.co.uk/morris.js/
			 */
			var closedSalesChart = null;
			
			var drawChartClosedSales = function() {
			
				$("#chartClosedSales").empty();
			
				//create custom Donut function with click event on the segments
				var myDonut = Morris.Donut;
			
				myDonut.prototype.redraw = function() {
			
					var C, cx, cy, i, idx, last, max_value, min, next, seg, total, value, w, _i, _j, _k, _len, _len1, _len2, _ref, _ref1, _ref2, _results;
			      this.raphael.clear();
			      cx = this.el.width() / 2;
			      cy = this.el.height() / 2;
			      w = (Math.min(cx, cy) - 10) / 3;
			      total = 0;
			      _ref = this.values;
			      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
			        value = _ref[_i];
			        total += value;
			      }
			      min = 5 / (2 * w);
			      C = 1.9999 * Math.PI - min * this.data.length;
			      last = 0;
			      idx = 0;
			      this.segments = [];
			      _ref1 = this.values;
			      for (i = _j = 0, _len1 = _ref1.length; _j < _len1; i = ++_j) {
			        value = _ref1[i];
			        next = last + min + C * (value / total);
			        seg = new Morris.DonutSegment(cx, cy, w * 2, w, last, next, this.data[i].color || this.options.colors[idx % this.options.colors.length], this.options.backgroundColor, idx, this.raphael);
			        seg.render();
			        this.segments.push(seg);
			        seg.on('hover', this.select);
			        seg.on('click', this.select);
			        last = next;
			        idx += 1;
			      }
			      this.text1 = this.drawEmptyDonutLabel(cx, cy - 10, this.options.labelColor, 15, 800);
			      this.text2 = this.drawEmptyDonutLabel(cx, cy + 10, this.options.labelColor, 14);
			      max_value = Math.max.apply(Math, this.values);
			      idx = 0;
			      _ref2 = this.values;
			      _results = [];
			      for (_k = 0, _len2 = _ref2.length; _k < _len2; _k++) {
			        value = _ref2[_k];
			        if (value === max_value) {
			          this.select(idx);
			          break;
			        }
			        _results.push(idx += 1);
			      }
			      return _results;
				};
			
				closedSalesChart = myDonut({
				    element: 'chartClosedSales',
				    data: [
				      {label: 'Guy Bardsley', value: 550 },
				      {label: 'Adam Callahan', value: 1500 },
				      {label: 'Arlo Geist', value: 3750 },
				      {label: 'Sheila Hutchins', value: 3500 },
				      {label: 'Jeanette Quijano', value: 1250 },
				      {label: 'Simon Sweet', value: 5250 }
				    ],
				    formatter: function (y, data) { 
				    	//prefixes the values by an $ sign, adds thousands seperators
			
						nStr = y + '';
						x = nStr.split('.');
						x1 = x[0];
						x2 = x.length > 1 ? '.' + x[1] : '';
						var rgx = /(\d+)(\d{3})/;
						while (rgx.test(x1)) {
							x1 = x1.replace(rgx, '$1' + ',' + '$2');
						}
						return '$ ' + x1 + x2;
				    }
				  });
			
			};
			
			//draw the charts when the DOM is ready
			$(document).ready( function() {
				drawChartClosedSales();
			});
			
			//on resize of the page: redraw the charts
			$(window)
				.on('resize', function() {
					window.setTimeout( function() {
						if (closedSalesChart !== null) { closedSalesChart.redraw(); }
					}, 250);
				});
			
			</script>
			<div>
			
				<div class="panel panel-default bootcards-chart">
					
					<div class="panel-heading">
						<h3 class="panel-title">Sales by product type - $m</h3>					
					</div>
			
					<div>
			
						<!--bar chart-->
						<div class="bootcards-chart-canvas" id="chartSalesProductType" style="position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="200" version="1.1" width="553" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="25.875" y="161" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M38.375,161H642" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="25.875" y="127" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">10</tspan></text><path fill="none" stroke="#aaaaaa" d="M38.375,127H642" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="25.875" y="93" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">20</tspan></text><path fill="none" stroke="#aaaaaa" d="M38.375,93H642" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="25.875" y="59" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">30</tspan></text><path fill="none" stroke="#aaaaaa" d="M38.375,59H642" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="25.875" y="25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">40</tspan></text><path fill="none" stroke="#aaaaaa" d="M38.375,25H642" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="642" y="173.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2014-12</tspan></text><text x="508.105" y="173.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2014-10</tspan></text><text x="374.21" y="173.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2014-08</tspan></text><text x="306.165" y="173.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2014-07</tspan></text><text x="172.27" y="173.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2014-05</tspan></text><text x="38.375" y="173.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2014-03</tspan></text><path fill="none" stroke="#afd8f8" d="M38.375,153.86C88.86,151.395,189.82999999999998,147.1875,240.315,144C290.8,140.8125,391.77,132.3768306010929,442.255,128.36C492.19124999999997,124.38683060109291,592.06375,116.12,642,112.03999999999999" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#4da74d" d="M38.375,140.94C88.86,134.31,189.82999999999998,120.6675,240.315,114.42C290.8,108.1725,391.77,89.59256830601092,442.255,90.96C492.19124999999997,92.31256830601092,592.06375,116.715,642,125.30000000000001" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#7a92a3" d="M38.375,109.66C88.86,100.82,189.82999999999998,83.05499999999999,240.315,74.3C290.8,65.545,391.77,37.39792349726775,442.255,39.61999999999999C492.19124999999997,41.81792349726775,592.06375,78.89,642,91.98" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#0b62a4" d="M38.375,146.38C88.86,144.51,189.82999999999998,141.4075,240.315,138.9C290.8,136.3925,391.77,126.06360655737704,442.255,126.32C492.19124999999997,126.57360655737705,592.06375,137.285,642,140.94" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="38.375" cy="153.86" r="4" fill="#afd8f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="240.315" cy="144" r="4" fill="#afd8f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="442.255" cy="128.36" r="4" fill="#afd8f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="642" cy="112.03999999999999" r="4" fill="#afd8f8" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="38.375" cy="140.94" r="4" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="240.315" cy="114.42" r="4" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="442.255" cy="90.96" r="4" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="642" cy="125.30000000000001" r="4" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="38.375" cy="109.66" r="4" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="240.315" cy="74.3" r="4" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="442.255" cy="39.61999999999999" r="4" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="642" cy="91.98" r="4" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="38.375" cy="146.38" r="4" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="240.315" cy="138.9" r="4" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="442.255" cy="126.32" r="4" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="642" cy="140.94" r="4" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="left: 566px; top: 44px;"><div class="morris-hover-row-label">2014 Q4</div><div class="morris-hover-point" style="color: #0b62a4">
  Stingray:
  5.9
</div><div class="morris-hover-point" style="color: #7A92A3">
  Barracuda:
  20.3
</div><div class="morris-hover-point" style="color: #4da74d">
  Mako:
  10.5
</div><div class="morris-hover-point" style="color: #afd8f8">
  Sailfish:
  14.4
</div></div></div>
			
						<div class="panel-footer">
							<button class="btn btn-default btn-block" onclick="toggleChartData(event)">
								<i class="fa fa-table"></i>
								Show Data
							</button>				
						</div>
					</div>
					
					<div class="panel-footer">
						<small class="pull-left">Built with Bootcards - Chart Card</small>
						<a class="btn btn-link btn-xs pull-right" href="/snippets/chart" data-toggle="modal" data-target="#docsModal">
										View Source</a>
					</div>					
			
				</div>		
			
				<!-- Table Card data -->
				<div class="panel panel-default bootcards-table" style="display:none">
					<div class="panel-heading">
						<h3 class="panel-title">Sales by product type - $m</h3>							
					</div>	
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>				
								<tr class="active"><th></th><th>Q1</th><th>Q2</th><th>Q3</th><th>Q4</th><th>Total</th></tr>
							</thead>
							<tbody>
								<tr><td>Stingray</td><td>4.3</td><td>6.5</td><td>10.2</td><td>5.9</td><td>26.9</td></tr>
								<tr><td>Barracuda</td><td>15.1</td><td>25.5</td><td>35.7</td><td>20.3</td><td>96.6</td></tr>
								<tr><td>Mako</td><td>5.9</td><td>13.7</td><td>20.6</td><td>10.5</td><td>50.7</td></tr>
								<tr><td>Sailfish</td><td>2.1</td><td>5</td><td>9.6</td><td>14.4</td><td>31.1</td></tr>
								<tr><td><strong>Total</strong></td><td><strong>27.4</strong></td><td><strong>50.7</strong></td><td><strong>76.1</strong></td><td><strong>51.1</strong></td><td><strong>205.3</strong></td></tr>
							</tbody>
						</table>
					</div>
					<div class="panel-footer">
						<button class="btn btn-default btn-block" onclick="toggleChartData(event, chartSalesProductType)">
							<i class="fa fa-bar-chart-o"></i>
							Show Chart
						</button>				
					</div>	
					<div class="panel-footer">
						<small class="pull-left">Built with Bootcards - Table Card</small>
						<a class="btn btn-link btn-xs pull-right" href="/snippets/table" data-toggle="modal" data-target="#docsModal">
										View Source</a>
					</div>												
				</div>	
			
			</div>
			
			<script type="text/javascript">
			
			/*
			 * Clear the target DOM element and draw the sample charts
			 * Samples come from the morris.js site at http://www.oesmith.co.uk/morris.js/
			 */
			var chartSalesProductType = null;
			
			var drawChartSalesProductType = function() {
			
				$("#chartSalesProductType").empty();
			
				var sales = [
			       {"period": "2014 Q1", "stingray": 4.3, "barracuda": 15.1, "mako" : 5.9, "sailfish": 2.1 },
			       {"period": "2014 Q2", "stingray": 6.5, "barracuda": 25.5, "mako" : 13.7, "sailfish": 5 },
			       {"period": "2014 Q3", "stingray": 10.2, "barracuda": 35.7, "mako" : 20.6, "sailfish": 9.6 },
			       {"period": "2014 Q4", "stingray": 5.9, "barracuda": 20.3, "mako" : 10.5, "sailfish": 14.4 }
			  ];
			  chartSalesProductType = Morris.Line({
			    element: 'chartSalesProductType',
			    data: sales,
			    xkey: 'period',
			    ykeys: ['stingray', 'barracuda', 'mako', 'sailfish'],
			    labels: ['Stingray', 'Barracuda', 'Mako', 'Sailfish']
			  });
			
			};
			
			//draw the charts when the DOM is ready
			$(document).ready( function() {
				drawChartSalesProductType();
			});
			
			//on resize of the page: redraw the charts
			$(window)
				.on('resize', function() {
					window.setTimeout( function() {
						if (chartSalesProductType !== null) { chartSalesProductType.redraw(); }
					}, 250);
				});
			
			</script>		
		</div>
		<div class="col-sm-6">
	
			<div>
			
				<div class="panel panel-default bootcards-chart">
					
					<div class="panel-heading">
						<h3 class="panel-title">Database size - no of records</h3>					
					</div>
			
					<div>
			
						<!--bar chart-->
						<div class="bootcards-chart-canvas" id="chartDbSize" style="position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="200" version="1.1" width="553" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="42.53125" y="161" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M55.03125,161H642" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="42.53125" y="127" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">1,750</tspan></text><path fill="none" stroke="#aaaaaa" d="M55.03125,127H642" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="42.53125" y="93" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">3,500</tspan></text><path fill="none" stroke="#aaaaaa" d="M55.03125,93H642" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="42.53125" y="59.000000000000014" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.250000000000014" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">5,250</tspan></text><path fill="none" stroke="#aaaaaa" d="M55.03125,59.000000000000014H642" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="42.53125" y="25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">7,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M55.03125,25H642" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="642" y="173.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2014-12</tspan></text><text x="511.7996590909091" y="173.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2014-10</tspan></text><text x="381.5993181818182" y="173.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2014-08</tspan></text><text x="251.39897727272728" y="173.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2014-06</tspan></text><text x="121.19863636363637" y="173.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2014-04</tspan></text><path fill="#a7b3bc" stroke="none" d="M55.03125,63.00228571428572C104.12318181818182,59.466285714285725,202.30704545454546,51.10714285714287,251.39897727272728,48.85828571428573C300.4909090909091,46.60942857142859,398.67477272727274,45.883166276346614,447.76670454545456,45.01142857142858C496.3250284090909,44.14916627634661,593.4416761363636,42.694571428571436,642,41.92228571428572L642,161L55.03125,161Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path><path fill="none" stroke="#7a92a3" d="M55.03125,63.00228571428572C104.12318181818182,59.466285714285725,202.30704545454546,51.10714285714287,251.39897727272728,48.85828571428573C300.4909090909091,46.60942857142859,398.67477272727274,45.883166276346614,447.76670454545456,45.01142857142858C496.3250284090909,44.14916627634661,593.4416761363636,42.694571428571436,642,41.92228571428572" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="55.03125" cy="63.00228571428572" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="251.39897727272728" cy="48.85828571428573" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="447.76670454545456" cy="45.01142857142858" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="642" cy="41.92228571428572" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><path fill="#2577b5" stroke="none" d="M55.03125,136.5977142857143C104.12318181818182,135.79142857142858,202.30704545454546,133.90442857142858,251.39897727272728,133.37257142857143C300.4909090909091,132.84071428571428,398.67477272727274,132.6016924277908,447.76670454545456,132.34285714285716C496.3250284090909,132.08683528493367,593.4416761363636,131.57057142857144,642,131.31314285714285L642,161L55.03125,161Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path><path fill="none" stroke="#0b62a4" d="M55.03125,136.5977142857143C104.12318181818182,135.79142857142858,202.30704545454546,133.90442857142858,251.39897727272728,133.37257142857143C300.4909090909091,132.84071428571428,398.67477272727274,132.6016924277908,447.76670454545456,132.34285714285716C496.3250284090909,132.08683528493367,593.4416761363636,131.57057142857144,642,131.31314285714285" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="55.03125" cy="136.5977142857143" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="251.39897727272728" cy="133.37257142857143" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="447.76670454545456" cy="132.34285714285716" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="642" cy="131.31314285714285" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="display: none;"></div></div>
			
						<div class="panel-footer">
							<button class="btn btn-default btn-block" onclick="toggleChartData(event)">
								<i class="fa fa-table"></i>
								Show Data
							</button>				
						</div>
					</div>
					
					<div class="panel-footer">
						<small class="pull-left">Built with Bootcards - Chart Card</small>
						<a class="btn btn-link btn-xs pull-right" href="/snippets/chart" data-toggle="modal" data-target="#docsModal">
										View Source</a>
					</div>					
			
				</div>		
			
				<!-- Table Card data -->
				<div class="panel panel-default bootcards-table" style="display:none">
					<div class="panel-heading">
						<h3 class="panel-title">Database size - no of records</h3>							
					</div>	
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>				
								<tr class="active"><th></th><th>Q1</th><th>Q2</th><th>Q3</th><th>Q4</th></tr>
							</thead>
							<tbody>
								<tr><td>Companies</td><td>1256</td><td>1422</td><td>1475</td><td>1528</td></tr>
								<tr><td>Contacts</td><td>3788</td><td>4350</td><td>4495</td><td>4601</td></tr>
							</tbody>
						</table>
					</div>
					<div class="panel-footer">
						<button class="btn btn-default btn-block" onclick="toggleChartData(event, dbSizeChart)">
							<i class="fa fa-bar-chart-o"></i>
							Show Chart
						</button>				
					</div>		
					<div class="panel-footer">
						<small class="pull-left">Built with Bootcards - Table Card</small>
						<a class="btn btn-link btn-xs pull-right" href="/snippets/table" data-toggle="modal" data-target="#docsModal">
										View Source</a>
					</div>											
				</div>
			
			</div>
			
			<script type="text/javascript">
			
			/*
			 * Clear the target DOM element and draw the sample charts
			 * Samples come from the morris.js site at http://www.oesmith.co.uk/morris.js/
			 */
			
			var dbSizeChart = null;
			
			var drawDbSizeChart = function() {
			
				$("#chartDbSize").empty();
			
				dbSizeChart = Morris.Area({
				    element: 'chartDbSize',
				    data: [
				      {period: '2014 Q1', companies: 1256, contacts : 3788},
				      {period: '2014 Q2', companies: 1422, contacts : 4350},
				      {period: '2014 Q3', companies: 1475, contacts : 4495},
				      {period: '2014 Q4', companies: 1528, contacts : 4601}
				    ],
				    xkey: 'period',
				    ykeys: ['companies', 'contacts'],
				    labels: ['Companies', 'Contacts'],
				    pointSize: 2,
				    hideHover: 'auto'
				  });
			
			};
			
			//draw the charts when the DOM is ready
			$(document).ready( function() {
				drawDbSizeChart();
			});
			
			//on resize of the page: redraw the charts
			$(window)
				.on('resize', function() {
					window.setTimeout( function() {
						if (dbSizeChart !== null) { dbSizeChart.redraw(); }
					}, 250);
				});
			
			</script>	
			<div>
			
				<div class="panel panel-default bootcards-chart">
					
					<div class="panel-heading">
						<h3 class="panel-title">Current month forecast vs quota - $000s</h3>					
					</div>
			
					<div id="bar1">
			
						<!--bar chart-->
						<div class="bootcards-chart-canvas" id="chartForecastVsQuota" style="position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="200" version="1.1" width="553" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="42.53125" y="143.81342889221875" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.243116392218752" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M55.03125,143.81342889221875H642" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="42.53125" y="114.11007166916407" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.242884169164071" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">1,750</tspan></text><path fill="none" stroke="#aaaaaa" d="M55.03125,114.11007166916407H642" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="42.53125" y="84.40671444610939" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.24265194610939" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">3,500</tspan></text><path fill="none" stroke="#aaaaaa" d="M55.03125,84.40671444610939H642" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="42.53125" y="54.703357223054695" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.242419723054695" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">5,250</tspan></text><path fill="none" stroke="#aaaaaa" d="M55.03125,54.703357223054695H642" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="42.53125" y="25.000000000000014" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.250000000000014" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">7,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M55.03125,25.000000000000014H642" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="593.0859375" y="156.31342889221875" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(0.9397,-0.342,0.342,0.9397,-50.997,230.9649)"><tspan dy="4.243116392218752" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Simon Sweet</tspan></text><text x="495.2578125" y="156.31342889221875" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(0.9397,-0.342,0.342,0.9397,-66.3084,200.9312)"><tspan dy="4.243116392218752" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Jeanette Quijano</tspan></text><text x="397.4296875" y="156.31342889221875" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(0.9397,-0.342,0.342,0.9397,-68.7577,166.2162)"><tspan dy="4.243116392218752" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Sheila Hutchins</tspan></text><text x="299.6015625" y="156.31342889221875" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(0.9397,-0.342,0.342,0.9397,-60.239,127.5091)"><tspan dy="4.243116392218752" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Arlo Geist</tspan></text><text x="201.7734375" y="156.31342889221875" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(0.9397,-0.342,0.342,0.9397,-79.9405,99.0734)"><tspan dy="4.243116392218752" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Adam Callahan</tspan></text><text x="103.9453125" y="156.31342889221875" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(0.9397,-0.342,0.342,0.9397,-81.1271,63.8987)"><tspan dy="4.243116392218752" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Guy Bardsley</tspan></text><rect x="67.259765625" y="97.13672468456139" width="35.185546875" height="46.676704207657366" r="0" rx="0" ry="0" fill="#0b62a4" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="105.4453125" y="75.92004095380804" width="35.185546875" height="67.89338793841071" r="0" rx="0" ry="0" fill="#7a92a3" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="165.087890625" y="87.80138384302992" width="35.185546875" height="56.01204504918883" r="0" rx="0" ry="0" fill="#0b62a4" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="203.2734375" y="75.92004095380804" width="35.185546875" height="67.89338793841071" r="0" rx="0" ry="0" fill="#7a92a3" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="262.916015625" y="67.4333674615067" width="35.185546875" height="76.38006143071205" r="0" rx="0" ry="0" fill="#0b62a4" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="301.1015625" y="75.92004095380804" width="35.185546875" height="67.89338793841071" r="0" rx="0" ry="0" fill="#7a92a3" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="360.744140625" y="74.22270625534777" width="35.185546875" height="69.59072263687098" r="0" rx="0" ry="0" fill="#0b62a4" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="398.9296875" y="75.92004095380804" width="35.185546875" height="67.89338793841071" r="0" rx="0" ry="0" fill="#7a92a3" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="458.572265625" y="113.26140431993393" width="35.185546875" height="30.55202457228482" r="0" rx="0" ry="0" fill="#0b62a4" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="496.7578125" y="109.8667349230134" width="35.185546875" height="33.946693969205356" r="0" rx="0" ry="0" fill="#7a92a3" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="556.400390625" y="38.57867758768215" width="35.185546875" height="105.2347513045366" r="0" rx="0" ry="0" fill="#0b62a4" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="594.5859375" y="75.92004095380804" width="35.185546875" height="67.89338793841071" r="0" rx="0" ry="0" fill="#7a92a3" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect></svg><div class="morris-hover morris-default-style" style="display: none;"></div></div>
			
						<div class="panel-footer">
							<button class="btn btn-default btn-block" onclick="toggleChartData(event)">
								<i class="fa fa-table"></i>
								Show Data
							</button>				
						</div>
					</div>
					
					<div class="panel-footer">
						<small class="pull-left">Built with Bootcards - Chart Card</small>
						<a class="btn btn-link btn-xs pull-right" href="/snippets/chart" data-toggle="modal" data-target="#docsModal">
										View Source</a>
					</div>					
			
				</div>		
			
				<!-- Table Card data -->
				<div class="panel panel-default bootcards-table" style="display:none">
					<div class="panel-heading">
						<h3 class="panel-title">Current month forecast vs quota - $000s</h3>							
					</div>	
					<table class="table table-hover">
						<thead>				
							<tr class="active"><th>Name</th><th>Forecast</th><th>Quota</th></tr>
						</thead>
						<tbody>
							<tr><td>Guy Bardsley</td><td>2750</td><td>4000</td></tr>
							<tr><td>Adam Callahan</td><td>3300</td><td>4000</td></tr>
							<tr><td>Arlo Geist</td><td>4500</td><td>4000</td></tr>
							<tr><td>Sheila Hutchins</td><td>4100</td><td>4000</td></tr>
							<tr><td>Jeanette Quijano</td><td>1800</td><td>2000</td></tr>
							<tr><td>Simon Sweet</td><td>6200</td><td>4000</td></tr>
							<tr><td><strong>Total</strong></td><td><strong>22650</strong></td><td><strong>22000</strong></td></tr>
						</tbody>
					</table>
					<div class="panel-footer">
						<button class="btn btn-default btn-block" onclick="toggleChartData(event, barChartClosedSales)">
							<i class="fa fa-bar-chart-o"></i>
							Show Chart
						</button>				
					</div>		
					<div class="panel-footer">
						<small class="pull-left">Built with Bootcards - Table Card</small>
						<a class="btn btn-link btn-xs pull-right" href="/snippets/table" data-toggle="modal" data-target="#docsModal">
										View Source</a>
					</div>											
				</div>
			
			</div>
			
			<script type="text/javascript">
			
			/*
			 * Clear the target DOM element and draw the sample charts
			 * Samples come from the morris.js site at http://www.oesmith.co.uk/morris.js/
			 */
			var barChartClosedSales = null;
			
			var drawBarChartClosedSales = function() {
			
				$("#chartForecastVsQuota").empty();
			
				barChartClosedSales = Morris.Bar({
					element: 'chartForecastVsQuota',
					data: [
						{name: 'Guy Bardsley', forecast: 2750, quota: 4000},
						{name: 'Adam Callahan', forecast: 3300, quota: 4000},
						{name: 'Arlo Geist', forecast: 4500, quota: 4000},
						{name: 'Sheila Hutchins', forecast: 4100, quota: 4000},
						{name: 'Jeanette Quijano', forecast: 1800, quota: 2000},
						{name: 'Simon Sweet', forecast: 6200, quota: 4000}
					],
					xkey: 'name',
					ykeys: ['forecast', 'quota'],
					labels: ['Forecast', 'Quota'],
					xLabelAngle: 20,
					hideHover: 'auto'
				});
			
			};
			
			//draw the charts when the DOM is ready
			$(document).ready( function() {
				drawBarChartClosedSales();
			});
			
			//on resize of the page: redraw the charts
			$(window)
				.on('resize', function() {
					window.setTimeout( function() {
						if (barChartClosedSales !== null) { barChartClosedSales.redraw(); }
					}, 250);
				});
			
			</script>		
		</div>
	</div>
</div>

  </div>

	<!-- fixed tabbed footer -->
	<div class="navbar navbar-default navbar-fixed-bottom">
		<div class="container">
			<div class="bootcards-desktop-footer clearfix">
				<p class="pull-left">Bootcards v1.1.0</p>
			</div>
			<div class="btn-group">
				<a href="/dashboard" class="btn btn-default" data-pjax="#main" data-title="Customers">
					<i class="fa fa-2x fa-dashboard"></i>
					Dashboard
				</a>          
				<a href="/companies" class="btn btn-default" data-pjax="#main" data-title="Companies">
					<i class="fa fa-2x fa-building-o"></i>
					Companies
				</a>          
				<a href="/contacts" class="btn btn-default" data-pjax="#main" data-title="Contacts">
					<i class="fa fa-2x fa-users"></i>
					Contacts
				</a>          
				<a href="/notes" class="btn btn-default" data-pjax="#main" data-title="Notes">
					<i class="fa fa-2x fa-clipboard"></i>
					Notes
				</a>          
				<a href="/charts" class="btn btn-default active" data-pjax="#main" data-title="Charts">
					<i class="fa fa-2x fa-bar-chart-o"></i>
					Charts
				</a>          
				<a href="/settings" class="btn btn-default" data-pjax="#main" data-title="Settings">
					<i class="fa fa-2x fa-gears"></i>
					Settings
				</a>          
			</div>
		</div>
	</div> 

  <!-- Load the required JavaScript libraries -->
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.pjax/1.9.2/jquery.pjax.min.js"></script>

  <script src="//cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.3/fastclick.min.js"></script>

  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

  <!-- Bootcards JS file -->
  <script src="/bower_components/bootcards/dist/js/bootcards.js"></script> 
  
  <script src="/bootcards-demo-app/js/bootcards-demo-app.js"></script> 

	<!--modals-->
	<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content"></div>
		</div>
	</div>
  <div class="modal fade" id="docsModal" tabindex="-1" role="dialog" aria-labelledby="docsModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content"></div>
    </div>
  </div>
  
  <script type="text/javascript">
    //highlight first list group option (if non active yet)
    if ( $('.list-group a.active').length === 0 ) {
      $('.list-group a').first().addClass('active');
    }

    bootcards.init( {
        offCanvasHideOnMainClick : true,
        offCanvasBackdrop : true,
        enableTabletPortraitMode : true,
        disableRubberBanding : true,
        disableBreakoutSelector : 'a.no-break-out'
      });

  </script>


</body>
</html>