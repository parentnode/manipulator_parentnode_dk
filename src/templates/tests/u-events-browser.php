<style type="text/css">
	.scene div {margin: 0 0 5px;}
	.correct {background: green;}
	.error {background: red;}
</style>

<script type="text/javascript">


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


	// TODO: to be used for new test
	div.testme1 = function(event) {
		u.bug("testme1:" + event.target)
	}
	div.testme2 = function(event) {
		u.bug("testme2:" + event.target)
	}

	var test1 = u.e.addWindowStartEvent(div, "testme1");
	var test2 = u.e.addWindowStartEvent(div, div.testme2);

	u.e.removeWindowStartEvent(div, test1);
	u.e.removeWindowStartEvent(div, test2);


	var test1 = u.e.addWindowMoveEvent(div, "testme1");
	var test2 = u.e.addWindowMoveEvent(div, div.testme2);

	u.e.removeWindowMoveEvent(div, test1);
	u.e.removeWindowMoveEvent(div, test2);

	var test1 = u.e.addWindowEndEvent(div, "testme1");
	var test2 = u.e.addWindowEndEvent(div, div.testme2);

	u.e.removeWindowEndEvent(div, test1);
	u.e.removeWindowEndEvent(div, test2);

	var test1 = u.e.addWindowResizeEvent(div, "testme1");
	var test2 = u.e.addWindowResizeEvent(div, div.testme2);

	u.e.removeWindowResizeEvent(div, test1);
	u.e.removeWindowResizeEvent(div, test2);

	var test1 = u.e.addWindowScrollEvent(div, "testme1");
	var test2 = u.e.addWindowScrollEvent(div, div.testme2);

	u.e.removeWindowScrollEvent(div, test1);
	u.e.removeWindowScrollEvent(div, test2);




	Util.Objects["test"] = new function() {
		this.init = function(scene) {
//			load_time = new Date().getTime();
//			text += "#onload ("+(load_time - dom_time)+")<br>" + document.body + "<br>" + document.readyState + "<br>";
//			u.bug(text);

			if(!scene.initialized) {
				scene.initialized = true;
				var init_div = u.qs(".init", scene)
				init_div.parentNode.removeChild(init_div);

				u.ae(scene, "div", ({"class":"correct"})).innerHTML = "Initialized";
			}
			else {
				u.ae(scene, "div", ({"class":"error"})).innerHTML = "Multiple initializations";
			}

		}

	}

</script>

<div class="scene i:test">
	<h1>Events, Browser</h1>

	<div class="init">Waiting for initialization</div>

</div>
<div class="comments"></div>
