<html>
<head>
<title>Chart</title>
<script type="text/javascript" src="fusioncharts/fusioncharts.js"></script>
<script type="text/javascript" src="fusioncharts/themes/fusioncharts.theme.zune.js"></script>
<script type="text/javascript">
FusionCharts.ready(function(){
    var revenueChart = new FusionCharts({
      type: "column2d",
      renderAt: "chartContainer",
      width: "1000",
      height: "600",
      dataFormat: "json",
      dataSource: {
	   
	   "chart": {
          "caption": "M/F Ratio",
          //"subCaption": "Harry's SuperMart",
          "xAxisName": "Month",
          "yAxisName": "Ratio",
          "theme": "zune"
       },	
	
       "data": [
          {
             "label": "Jan",
             "value": "420000"
          },
          {
             "label": "Feb",
             "value": "810000"
          },
          {
             "label": "Mar",
             "value": "720000"
          },
          {
             "label": "Apr",
             "value": "550000"
          },
          {
             "label": "May",
             "value": "910000"
          },
          {
             "label": "Jun",
             "value": "510000"
          },
          {
             "label": "Jul",
             "value": "680000"
          },
          {
             "label": "Aug",
             "value": "620000"
          },
          {
             "label": "Sep",
             "value": "610000"
          },
          {
             "label": "Oct",
             "value": "490000"
          },
          {
             "label": "Nov",
             "value": "900000"
          },
          {
             "label": "Dec",
             "value": "730000"
          }
        ]
      }
 
  });
  
  revenueChart.render("chartContainer");
}); 
 
</script>
</head>
<body>
<div id="chartContainer">Chart will load here!</div>




</body>
</html>
