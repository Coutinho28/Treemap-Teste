@extends('admin.layout.painel')
@section('content')

<div class="up">&larr; Voltar</div>
<div class="feature" id="chart"></div>




<script>
    
    var width = height = 100, // % of the parent element
	
	x = d3.scaleLinear().domain([0, width]).range([0, width]),
    y = d3.scaleLinear().domain([0, height]).range([0, height]),
	
	color = d3.scaleOrdinal()
		.range(d3.schemeDark2
			.map(function(c) { 
				c = d3.rgb(c); 
				//c.opacity = 0.5; 
				return c; 
			})
		),
	
	treemap = d3.treemap()
    	.size([width, height])
		//.tile(d3.treemapResquarify) // doesn't work - height & width is 100%
    	.paddingInner(0)
    	.round(false), //true

	data = {
	"name": "Portfolio",
	"children": [
		{
			"name": "Microsoft",
			"children": [
				
				{
					"name": "Windows 11",
					"children": [
						{ "name": "2024 --- R$ 1188.000.000", "value": "stitched-1.jpg" },
						
					]
				},
				{
					"name": "Windows Serve",
					"children": [
						{ "name": "2024 --- R$ 8.000.000", "value": "stitched-1.jpg" },
						{ "name": "2023 --- R$ 5.000.000", "value": "stitched-2.jpg" },
						{ "name": "2022 --- R$ 5.000.000", "value": "stitched-3.jpg" },
					]
				},
				{
					"name": "windows 10",
					"children": [
						{ "name": "2024 --- R$ 1188.000.000", "value": "stitched-1.jpg" },
						{ "name": "2023 --- R$ 25.000.000", "value": "stitched-2.jpg" },
						{ "name": "2022 --- R$ 40.000.000", "value": "stitched-3.jpg" },
					]
				}
			]
		},
    {
      "name" : "Amazom",
      "children" : [
        {
          "name": "AWS",
         "children": [
			            { "name": "2024 --- R$ 11188.000.000", "value": "stitched-1.jpg" },
						{ "name": "2023 --- R$ 895225.000.000", "value": "stitched-2.jpg" },
						{ "name": "2022 --- R$ 9240.000.000", "value": "stitched-3.jpg" },
						{ "name": "2021 --- R$ 12270.000.000", "value": "stitched-4.jpg" },
						{ "name": "2020 --- R$ 25290.000.000", "value": "stitched-5.jpg" },
						{ "name": "2019 --- R$ 9290.000.000", "value": "litho-6.jpg" }
					]
        }
      ]
    },
	
	
		{
			"name": "Apple",
			"children": [
				{
					"name": "MacBook",
					"children": [
						{ "name": "2024 --- R$ 288.000.000", "value": "stitched-1.jpg" },
						{ "name": "2023 --- R$ 225.000.000", "value": "stitched-2.jpg" },
						{ "name": "2022 --- R$ 240.000.000", "value": "stitched-3.jpg" },
						{ "name": "2021 --- R$ 270.000.000", "value": "stitched-4.jpg" },
						{ "name": "2020 --- R$ 290.000.000", "value": "stitched-5.jpg" },
						{ "name": "2019 --- R$ 290.000.000", "value": "litho-6.jpg" }
					]
				},
				{
					"name": "MiniMackbook",
					"children": [
						{ "name": "2022 --- R$ 840.000.000", "value": "stitched-3.jpg" },
						{ "name": "2021 --- R$ 570.000.000", "value": "stitched-4.jpg" },
						{ "name": "2020 --- R$ 7790.000.000", "value": "stitched-5.jpg" },
						{ "name": "2019 --- R$ 96390.000.000", "value": "litho-6.jpg" }
					]
				}
			]
		},
		{
			"name": "Nvidia",
			"children": [
				{
					"name": "GeForce RTX Série 30",
					"children": [
						{ "name": "2024   --- R$ 280.000.000", "value": "x" },
						{ "name": "2023    --- R$ 260.000.000", "value": "folding-2.jpg" },
						{ "name": "2022    --- R$ 240.000.000", "value": "folding-3.jpg" }
					]
				},
				{
					"name": "RTX On",
					"children": [
						{ "name": "2024 --- R$ 288.000.000", "value": "stitched-1.jpg" },
						{ "name": "2023 --- R$ 225.000.000", "value": "stitched-2.jpg" },
						{ "name": "2022 --- R$ 240.000.000", "value": "stitched-3.jpg" },
						{ "name": "2021 --- R$ 270.000.000", "value": "stitched-4.jpg" },
						{ "name": "2020 --- R$ 290.000.000", "value": "stitched-5.jpg" }
					]
				},		
				{
					"name": "GeForce RTX 4060 Family 4060",
					"children": [
						{ "name": "2024 --- R$ 180.000.000", "value": "stitched-1.jpg" },
						{ "name": "2023 --- R$ 987.000.000", "value": "stitched-2.jpg" },
						{ "name": "2022 --- R$ 200.000.000", "value": "stitched-3.jpg" },
						{ "name": "2021 --- R$ 270.000.000", "value": "stitched-4.jpg" },
					]
				}
			]
		}
	]
},
	
	nodes = d3.hierarchy(data)
		.sum(function(d) { return d.value ? 1 : 0; }),
		//.sort(function(a, b) { return b.height - a.height || b.value - a.value });
	
	currentDepth;

treemap(nodes);

var chart = d3.select("#chart");
var cells = chart
	.selectAll(".node")
	.data(nodes.descendants())
	.enter()
	.append("div")
	.attr("class", function(d) { return "node level-" + d.depth; })
	.attr("title", function(d) { return d.data.name ? d.data.name : "null"; });

cells
	.style("left", function(d) { return x(d.x0) + "%"; })
	.style("top", function(d) { return y(d.y0) + "%"; })
	.style("width", function(d) { return x(d.x1) - x(d.x0) + "%"; })
	.style("height", function(d) { return y(d.y1) - y(d.y0) + "%"; })
	//.style("background-image", function(d) { return d.value ? imgUrl + d.value : ""; })
	//.style("background-image", function(d) { return d.value ? "url(http://placekitten.com/g/300/300)" : "none"; }) 
	.style("background-color", function(d) { while (d.depth > 2) d = d.parent; return color(d.data.name); })
	.on("click", zoom)
	.append("p")
	.attr("class", "label")
	.text(function(d) { return d.data.name ? d.data.name : "---"; });
	//.style("font-size", "")
	//.style("opacity", function(d) { return isOverflowed( d.parent ) ? 1 : 0; });

var parent = d3.select(".up")
	.datum(nodes)
	.on("click", zoom);

function zoom(d) { // http://jsfiddle.net/ramnathv/amszcymq/
	
	console.log('clicked: ' + d.data.name + ', depth: ' + d.depth);
	
	currentDepth = d.depth;
	parent.datum(d.parent || nodes);
	
	x.domain([d.x0, d.x1]);
	y.domain([d.y0, d.y1]);
	
	var t = d3.transition()
    	.duration(800)
    	.ease(d3.easeCubicOut);
	
	cells
		.transition(t)
		.style("left", function(d) { return x(d.x0) + "%"; })
		.style("top", function(d) { return y(d.y0) + "%"; })
		.style("width", function(d) { return x(d.x1) - x(d.x0) + "%"; })
		.style("height", function(d) { return y(d.y1) - y(d.y0) + "%"; });
	
	cells // hide this depth and above
		.filter(function(d) { return d.ancestors(); })
		.classed("hide", function(d) { return d.children ? true : false });
	
	cells // show this depth + 1 and below
		.filter(function(d) { return d.depth > currentDepth; })
		.classed("hide", false);
	
}
  </script>
@endsection