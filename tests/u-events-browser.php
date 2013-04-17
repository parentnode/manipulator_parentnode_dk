<? $page_title = "Events, browser tests" ?>
<? $body_class = "tests" ?>
<? include_once($_SERVER["LOCAL_PATH"]."/templates/header.php") ?>

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
	<h2>Events, Browser</h2>

	<div class="init">Waiting for initialization</div>

</div>
<div class="comments"></div>

<? include_once($_SERVER["LOCAL_PATH"]."/templates/footer.php") ?>