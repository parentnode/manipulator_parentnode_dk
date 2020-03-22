Util.Modules["textscaler"] = new function() {
	this.init = function(div) {

		u.textscaler(div,{
			"unit":"rem",
			"min_width":200,
			"max_width":1600,
			"min_height":100,
			"max_height":800,
			"h2":{
				"min_size":1,
				"max_size":3
			},
			"h3":{
				"min_size":1,
				"max_size":6
			},
			"p":{
				"unit":"px",
				"min_size":11,
				"max_size":20,
				"min_width":800,
				"max_width":1200,
				"min_height":300,
				"max_height":800
			},
		})
	}
}