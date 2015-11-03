Util.Objects["flash"] = new function() {
	this.init = function(div) {

		if(u.flashDetection()) {
			var flash = u.ae(div, "div", {"class":"flash correct"});

			u.flash(flash, "/media/flash/heartstar.swf");
		}
		else {
			var flash = u.ae(div, "div", {"class":"correct", "html":"NO FLASH PLUGIN"});
		}


		u.ae(div, "h2", {"html":"Specific version detection"});

		if(u.flashDetection(8)) {
			u.ae(div, "div", {"class":"correct", "html":"u.flashDetection(8) = " + u.flashDetection(8)});
		}
		else {
			u.ae(div, "div", {"class":"error", "html":"u.flashDetection(8) = " + u.flashDetection(8)});
		}

		if(u.flashDetection(12)) {
			u.ae(div, "div", {"class":"correct", "html":"u.flashDetection(12) = " + u.flashDetection(12)});
		}
		else {
			u.ae(div, "div", {"class":"error", "html":"u.flashDetection(12) = " + u.flashDetection(12)});
		}

		if(u.flashDetection(16)) {
			u.ae(div, "div", {"class":"correct", "html":"u.flashDetection(16) = " + u.flashDetection(16)});
		}
		else {
			u.ae(div, "div", {"class":"error", "html":"u.flashDetection(16) = " + u.flashDetection(16)});
		}

		if(u.flashDetection(19)) {
			u.ae(div, "div", {"class":"correct", "html":"u.flashDetection(19) = " + u.flashDetection(19)});
		}
		else {
			u.ae(div, "div", {"class":"error", "html":"u.flashDetection(19) = " + u.flashDetection(19)});
		}

		if(u.flashDetection(20)) {
			u.ae(div, "div", {"class":"correct", "html":"u.flashDetection(20) = " + u.flashDetection(20)});
		}
		else {
			u.ae(div, "div", {"class":"error", "html":"u.flashDetection(20) = " + u.flashDetection(20)});
		}

		u.ae(div, "h2", {"html":"Range version detection"});

		if(u.flashDetection("<19")) {
			u.ae(div, "div", {"class":"correct", "html":'u.flashDetection("<19") = ' + u.flashDetection("<19")});
		}
		else {
			u.ae(div, "div", {"class":"error", "html":'u.flashDetection("<19") = ' + u.flashDetection("<19")});
		}

		if(u.flashDetection(">19")) {
			u.ae(div, "div", {"class":"correct", "html":'u.flashDetection(">19") = ' + u.flashDetection(">19")});
		}
		else {
			u.ae(div, "div", {"class":"error", "html":'u.flashDetection(">19") = ' + u.flashDetection(">19")});
		}

		if(u.flashDetection(">=19")) {
			u.ae(div, "div", {"class":"correct", "html":'u.flashDetection(">=19") = ' + u.flashDetection(">=19")});
		}
		else {
			u.ae(div, "div", {"class":"error", "html":'u.flashDetection(">=19") = ' + u.flashDetection(">=19")});
		}

		if(u.flashDetection("<=19")) {
			u.ae(div, "div", {"class":"correct", "html":'u.flashDetection("<=19") = ' + u.flashDetection("<=19")});
		}
		else {
			u.ae(div, "div", {"class":"error", "html":'u.flashDetection("<=19") = ' + u.flashDetection("<=19")});
		}

	}
}