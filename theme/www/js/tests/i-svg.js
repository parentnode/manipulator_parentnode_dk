Util.Objects["svg"] = new function() {
	this.init = function(div) {

		// STATIC SVG

		var svg = u.svg({
			"node":div,
			"width":260,
			"height":260,
			"shapes":[
				{
					"type": "circle",
					"class": "blob_white",
					"cx": 110,
					"cy": 110,
					"r": 100,
					"fill": "#00ff00"
				},
				{
					"type": "ellipse",
					"class": "shadow",
					"cx": 110,
					"cy": 110,
					"rx": 55,
					"ry": 100,
					"fill": "#000000"
				},
				{
					"type": "circle",
					"class": "blob_red",
					"cx": 50,
					"cy": 50,
					"r": 25,
					"fill": "#d20014"
				},
				{
					"type": "path",
					"class": "path_1",
					"d": "M50,60 180,60 50,180",
					"stroke": "#ffff00",
					"stroke-width":2,
					"fill":"none"
				},
				{
					"type": "line",
					"class": "line_1",
					"x1": "50",
					"y1": "50",
					"x2": "180",
					"y2": "50",
					"stroke": "#00ffff"
				}

			]

		});

		u.svgShape(svg, {
			"type": "circle",
			"class": "blob_blue",
			"cx": 210,
			"cy": 210,
			"r": 50,
			"fill": "#0000ff"
		});

		u.as(svg, "display", "inline-block");


		var comparison = u.ae(div, "div", {"class":"comparison"});
		u.as(comparison, "width", 260+"px");
		u.as(comparison, "height", 260+"px");
		u.as(comparison, "display", "inline-block");
		u.as(comparison, "background", "transparent url(/img/test-svg.png) no-repeat top center");

	}
}