// EXAMPLE INCLUDER
// function includeSegment(segment) {
// 	document.write('<script type="text/javascript" src="/js/lib/seg_'+segment+'_include.js"></script>');
// 	document.write('<link type="text/css" rel="stylesheet" media="all" href="/css/lib/seg_'+segment+'_include.css" />');
// }


// DETECTOR FUNCTION
(function() {
	var ua = navigator.userAgent;


	// match tablets first
	if(ua.match(/iPad|tablet|GT-P51[\d]{2}|GT-P52[\d]{2}|GT-N51[\d]{2}|GT-N80[\d]{2}|GT-P31[\d]{2}|GT-P62[\d]{2}|GT-P68[\d]{2}|GT-N6800|GT-P75[\d]{2}|GT-P71[\d]{2}|GT-P10[\d]{2}|GT-P73[\d]{2}|SCH-I800|SCH-I815|SCH-I705|SCH-I915|SM-T1[\d]{2}|SM-T2[\d]{2}|SM-T3[\d]{2}|SM-T5[\d]{2}|SM-T7[\d]{2}|SM-T8[\d]{2}|SM-T9[\d]{2}|SM-P6[\d]{2}|Flyer[ _]{1}P51[02]{1}|Jetstream|Sony Tablet S|XperiaTablet|LG-V(9|7|5|4)[\d]{2}|Transformer[^$]+(TF10|TF20|TF30|TF70)|Kindle Fire|KF[^$]+AppleWebKit\/53[3-7]{1}[^$]+Silk|Nexus (7|9|10)/i)) {
		segment = "tablet";
	}


	// then mobile
	else if(ua.match(/iPhone|iPod|Android [2345]{1}/i)) {
		segment = "mobile_touch";
	}


	// then IE
	else if(ua.match(/MSIE|Trident/i) && !ua.match(/chromeframe/i)) {
		segment = "desktop_ie";
	}


	// else desktop
	else {
		segment = "desktop";
	}


	// custom includer declared
	if(typeof(window.includeSegment) == "function") {

		window.includeSegment(segment);

	}

	// default include pattern (Janitor style)
	else {

//		document.write('<script type="text/javascript" src="/js/seg_'+segment+'.js"></script>');
//		document.write('<link type="text/css" rel="stylesheet" media="all" href="/css/seg_'+segment+'.css" />');

	}

})();
