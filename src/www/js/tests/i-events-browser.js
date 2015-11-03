Util.Objects["eventsBrowser"] = new function() {
	this.init = function(div) {


		var node;

		// u.e.addDOMReadyEvent / u.e.addOnloadEvent
		node = u.qs("div.init.error", div)
		if(!div.initialized) {
			div.initialized = true;
			node.parentNode.removeChild(node);

			u.ae(div, "div", {"class":"correct", "html":"u.e.addDOMReadyEvent: correct"});
		}
		else {
			u.ae(div, "div", {"class":"error", "html":"u.e.addDOMReadyEvent: error (Multiple initializations)"});
		}



		// u.e.addWindowMoveEvent
		u.ae(div, "h2", {"html":"Window.move"});
		u.ae(div, "p", {"html":"Move mouse / swipe screen to perform test"});
		div.node = u.ae(div, "div", {"class":"error", "html":"u.e.addWindowMoveEvent: waiting"});
		div.node.callback = 0;
		div.node.function_string = function(event) {
			this.string_callback = true;
		}
		div.node.funtion_reference = function(event) {

			if(this.string_callback) {
				u.rc(this, "error");
				u.ac(this, "correct");
				this.innerHTML = this.innerHTML.replace("waiting", "correct");
			}
			else {
				this.innerHTML = this.innerHTML.replace("waiting", "error");
			}
		}
		var test1 = u.e.addWindowMoveEvent(div.node, "function_string");
		var test2 = u.e.addWindowMoveEvent(div.node, div.node.funtion_reference);

		// u.e.removeWindowStartEvent
		div.node = u.ae(div, "div", {"class":"error", "html":"u.e.removeWindowMoveEvent: waiting"});
		div.node.callback = 0;
		div.node.function_string = function(event) {
			this.string_callback = true;
		}
		div.node.funtion_reference = function(event) {

			if(!this.string_callback) {
				u.rc(this, "error");
				u.ac(this, "correct");
				this.innerHTML = this.innerHTML.replace("waiting", "correct");
			}
			else {
				this.innerHTML = this.innerHTML.replace("waiting", "error");
			}
		}
		var test1 = u.e.addWindowMoveEvent(div.node, "function_string");
		var test2 = u.e.addWindowMoveEvent(div.node, div.node.funtion_reference);
		u.e.removeWindowMoveEvent(div.node, test1);



		// u.e.addWindowEvent (scroll)
		u.ae(div, "h2", {"html":"Window.scroll"});
		u.ae(div, "p", {"html":"Scroll content to perform test"});
		div.node = u.ae(div, "div", {"class":"error", "html":"u.e.addWindowEvent (scroll): waiting"});
		div.node.callback = 0;
		div.node.function_string = function(event) {
			this.string_callback = true;
		}
		div.node.funtion_reference = function(event) {

			if(this.string_callback) {
				u.rc(this, "error");
				u.ac(this, "correct");
				this.innerHTML = this.innerHTML.replace("waiting", "correct");
			}
			else {
				this.innerHTML = this.innerHTML.replace("waiting", "error");
			}
		}
		var test1 = u.e.addWindowEvent(div.node, "scroll", "function_string");
		var test2 = u.e.addWindowEvent(div.node, "scroll", div.node.funtion_reference);

		// u.e.removeWindowEvent (scroll)
		div.node = u.ae(div, "div", {"class":"error", "html":"u.e.removeWindowEvent (scroll): waiting"});
		div.node.callback = 0;
		div.node.function_string = function(event) {
			this.string_callback = true;
		}
		div.node.funtion_reference = function(event) {

			if(!this.string_callback) {
				u.rc(this, "error");
				u.ac(this, "correct");
				this.innerHTML = this.innerHTML.replace("waiting", "correct");
			}
			else {
				this.innerHTML = this.innerHTML.replace("waiting", "error");
			}
		}
		var test1 = u.e.addWindowEvent(div.node, "scroll", "function_string");
		var test2 = u.e.addWindowEvent(div.node, "scroll", div.node.funtion_reference);
		u.e.removeWindowEvent(div.node, "scroll", test1);



		// u.e.addWindowStartEvent
		u.ae(div, "h2", {"html":"Window.start + Window.end"});
		u.ae(div, "p", {"html":"Click/tap screen to perform test"});
		div.node = u.ae(div, "div", {"class":"error", "html":"u.e.addWindowStartEvent: waiting"});
		div.node.callback = 0;
		div.node.function_string = function(event) {
			this.string_callback = true;
		}
		div.node.funtion_reference = function(event) {

			if(this.string_callback) {
				u.rc(this, "error");
				u.ac(this, "correct");
				this.innerHTML = this.innerHTML.replace("waiting", "correct");
			}
			else {
				this.innerHTML = this.innerHTML.replace("waiting", "error");
			}
		}
		var test1 = u.e.addWindowStartEvent(div.node, "function_string");
		var test2 = u.e.addWindowStartEvent(div.node, div.node.funtion_reference);

		// u.e.removeWindowStartEvent
		div.node = u.ae(div, "div", {"class":"error", "html":"u.e.removeWindowStartEvent: waiting"});
		div.node.callback = 0;
		div.node.function_string = function(event) {
			this.string_callback = true;
		}
		div.node.funtion_reference = function(event) {

			if(!this.string_callback) {
				u.rc(this, "error");
				u.ac(this, "correct");
				this.innerHTML = this.innerHTML.replace("waiting", "correct");
			}
			else {
				this.innerHTML = this.innerHTML.replace("waiting", "error");
			}
		}
		var test1 = u.e.addWindowStartEvent(div.node, "function_string");
		var test2 = u.e.addWindowStartEvent(div.node, div.node.funtion_reference);
		u.e.removeWindowStartEvent(div.node, test1);



		// u.e.addWindowEndEvent
		div.node = u.ae(div, "div", {"class":"error", "html":"u.e.addWindowEndEvent: waiting"});
		div.node.callback = 0;
		div.node.function_string = function(event) {
			this.string_callback = true;
		}
		div.node.funtion_reference = function(event) {

			if(this.string_callback) {
				u.rc(this, "error");
				u.ac(this, "correct");
				this.innerHTML = this.innerHTML.replace("waiting", "correct");
			}
			else {
				this.innerHTML = this.innerHTML.replace("waiting", "error");
			}
		}
		var test1 = u.e.addWindowEndEvent(div.node, "function_string");
		var test2 = u.e.addWindowEndEvent(div.node, div.node.funtion_reference);

		// u.e.removeWindowEndEvent
		div.node = u.ae(div, "div", {"class":"error", "html":"u.e.removeWindowEndEvent: waiting"});
		div.node.callback = 0;
		div.node.function_string = function(event) {
			this.string_callback = true;
		}
		div.node.funtion_reference = function(event) {

			if(!this.string_callback) {
				u.rc(this, "error");
				u.ac(this, "correct");
				this.innerHTML = this.innerHTML.replace("waiting", "correct");
			}
			else {
				this.innerHTML = this.innerHTML.replace("waiting", "error");
			}
		}
		var test1 = u.e.addWindowEndEvent(div.node, "function_string");
		var test2 = u.e.addWindowEndEvent(div.node, div.node.funtion_reference);
		u.e.removeWindowEndEvent(div.node, test1);



		// u.e.addWindowEvent (resize)
		u.ae(div, "h2", {"html":"Window.resize"});
		u.ae(div, "p", {"html":"Resize browser window to perform test"});
		div.node = u.ae(div, "div", {"class":"error", "html":"u.e.addWindowEvent (resize): waiting"});
		div.node.callback = 0;
		div.node.function_string = function(event) {
			this.string_callback = true;
		}
		div.node.funtion_reference = function(event) {

			if(this.string_callback) {
				u.rc(this, "error");
				u.ac(this, "correct");
				this.innerHTML = this.innerHTML.replace("waiting", "correct");
			}
			else {
				this.innerHTML = this.innerHTML.replace("waiting", "error");
			}
		}
		var test1 = u.e.addWindowEvent(div.node, "resize", "function_string");
		var test2 = u.e.addWindowEvent(div.node, "resize", div.node.funtion_reference);

		// u.e.removeWindowEvent (resize)
		div.node = u.ae(div, "div", {"class":"error", "html":"u.e.removeWindowEvent (resize): waiting"});
		div.node.callback = 0;
		div.node.function_string = function(event) {
			this.string_callback = true;
		}
		div.node.funtion_reference = function(event) {

			if(!this.string_callback) {
				u.rc(this, "error");
				u.ac(this, "correct");
				this.innerHTML = this.innerHTML.replace("waiting", "correct");
			}
			else {
				this.innerHTML = this.innerHTML.replace("waiting", "error");
			}
		}
		var test1 = u.e.addWindowEvent(div.node, "resize", "function_string");
		var test2 = u.e.addWindowEvent(div.node, "resize", div.node.funtion_reference);
		u.e.removeWindowEvent(div.node, "resize", test1);



		// u.e.addWindowEvent (keydown)
		u.ae(div, "h2", {"html":"Window.keydown"});
		u.ae(div, "p", {"html":"Press any key to perform test"});
		div.node = u.ae(div, "div", {"class":"error", "html":"u.e.addWindowEvent (keydown): waiting"});
		div.node.callback = 0;
		div.node.function_string = function(event) {
			this.string_callback = true;
		}
		div.node.funtion_reference = function(event) {

			if(this.string_callback) {
				u.rc(this, "error");
				u.ac(this, "correct");
				this.innerHTML = this.innerHTML.replace("waiting", "correct");
			}
			else {
				this.innerHTML = this.innerHTML.replace("waiting", "error");
			}
		}
		var test1 = u.e.addWindowEvent(div.node, "keydown", "function_string");
		var test2 = u.e.addWindowEvent(div.node, "keydown", div.node.funtion_reference);

		// u.e.removeWindowEvent (scroll)
		div.node = u.ae(div, "div", {"class":"error", "html":"u.e.removeWindowEvent (keydown): waiting"});
		div.node.callback = 0;
		div.node.function_string = function(event) {
			this.string_callback = true;
		}
		div.node.funtion_reference = function(event) {

			if(!this.string_callback) {
				u.rc(this, "error");
				u.ac(this, "correct");
				this.innerHTML = this.innerHTML.replace("waiting", "correct");
			}
			else {
				this.innerHTML = this.innerHTML.replace("waiting", "error");
			}
		}
		var test1 = u.e.addWindowEvent(div.node, "keydown", "function_string");
		var test2 = u.e.addWindowEvent(div.node, "keydown", div.node.funtion_reference);
		u.e.removeWindowEvent(div.node, "keydown", test1);



	}


	// OLD domready test
	// function e_onload () {
	// 	var onloadevent = document.createEvent("UIEvents");
	// 	onloadevent.initEvent("load", true, true);
	// 	document.dispatchEvent(onloadevent);
	// }
	// function e_readystate () {
	// 	var onloadevent = document.createEvent("UIEvents");
	// 	onloadevent.initEvent("readystatechange", true, true);
	// 	document.dispatchEvent(onloadevent);
	// }
	// 
	// 
	// 
	// // Mozilla, Opera and webkit nightlies currently support this event
	//     if(document.addEventListener ) {
	//         // Use the handy event callback
	//         document.addEventListener( "DOMContentLoaded", function(){
	//                 document.removeEventListener( "DOMContentLoaded", arguments.callee, false );
	// 
	// 			dom_time = new Date().getTime();
	// 			text += "#DOMContentLoaded ("+(dom_time - time)+")<br>"+ document.body + "<br>" + document.readyState + "<br>";
	//         }, false );
	// 
	//     }
	// // If IE event model is used
	// else if ( document.attachEvent ) {
	//         // ensure firing before onload,
	//         // maybe late but safe also for iframes
	//         document.attachEvent("onreadystatechange", function(){
	//                 if(document.readyState === "complete" ) {
	//                         document.detachEvent( "onreadystatechange", arguments.callee );
	// 					dom_time = new Date().getTime();
	// 					text += "#complete ("+(dom_time - time)+")<br>"+ document.body + "<br>" + document.readyState + "<br>";
	//                 }
	//         });
	// }
}