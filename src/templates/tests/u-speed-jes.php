<!DOCTYPE html>
<html lang="en">
<head>
	<!-- (c) & (p) think.dk 2011 //-->
	<!-- All material protected by copyrightlaws, as if you didnt know //-->
	<title>JES - speed test, JES</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width; initial-scale=1.0; minimum-scale=1.0; maximum-scale=1.0;" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	<script type="text/javascript" src="/bundles/full/seg_desktop.js"></script>
	<script type="text/javascript">
	
		// if(document.addEventListener) {
		// 	document.addEventListener("DOMContentLoaded", 
		// 		function(event) {
		// 			document.removeEventListener("DOMContentLoaded", arguments.callee, false);
		// 			test();
		//     	}
		// 	, false);
		// }

		window.onload = test;

		// inject 1000 divs in .n4 .m, add class, attach click event and trigger event, remove class and add other class

		function test() {
			var test_count = 1050;
			var start_time = new Date().getTime();

			var i, node;

			for(i = 0; i < test_count; i++) {
				node = u.ae(u.qs(".n1 .m"), "div", {"class":"start box"+i});
				u.e.click(node);

				node.clicked = function() {
					u.tc(this, "start", "done", false);
//					u.rc(this, "start", false);
//					u.ac(this, "done", false);
				}
				node.clicked();
			}


			var mid1_time = new Date().getTime();
			node = u.ae(u.qs(".n1 .m"), "div", {"class":"status", "html":mid1_time-start_time});


// 			var parent = u.qs(".n2 .m");
// 			for(i = 0; i < test_count; i++) {
// 				node = u.ae(parent, "div", {"class":"start box"+i});
// 			}
// 
// 			for(i = 0; i < test_count; i++) {
// 				node = u.qs(".box"+i, parent);
// 
// 				u.e.click(node);
// 				node.clicked = function() {
// 					u.rc(this, "start");
// 					u.ac(this, "done");
// 				}
// 			}
// 
// 			for(i = 0; i < test_count; i++) {
// 				node = u.qs(".box"+i, parent);
// 				node.clicked();
// 			}
// 
// 
// 			var mid2_time = new Date().getTime();
// 			node = u.ae(u.qs(".n2 .m"), "div", {"class":"status", "html":mid2_time-mid1_time});
// 
// 
// 			for(i = 0; i < test_count; i++) {
// 				node = u.ae(u.qs(".n3 .m"), "div", {"class":"start box"+i});
// 			}
// 
// 			for(i = 0; i < test_count; i++) {
// 				node = u.qs(".n3 .m .box"+i);
// 
// 				u.e.click(node);
// 				node.clicked = function() {
// 					u.rc(this, "start");
// 					u.ac(this, "done");
// 				}
// 			}
// 
// 			for(i = 0; i < test_count; i++) {
// 				node = u.qs(".n3 .m .box"+i);
// 				node.clicked();
// 			}
// 
// //			alert("test")
// 			var end_time = new Date().getTime();
// 
// 			node = u.ae(u.qs(".n3 .m"), "div", {"class":"status", "html":end_time-mid2_time});

//			alert(end_time-start_time);
		}

	
	</script>
	<style type="text/css">
		.m {overflow: hidden;}
		.m .start {width: 10px; height: 10px; margin: 1px; float: left; background: red;}
		.m .done {width: 10px; height: 10px; margin: 1px; float: left; background: green;}
		.m .status {height: 10px; margin: 1px; float: left; background: blue; color: #ffffff; font-size: 10px; padding: 0 5px;}
	</style>

</head>

<body>

<div id="page">
	<h1>JES speed test</h1>
	<div class="n1"><div class="m"></div></div>
	<div class="n2"><div class="m"></div></div>
	<div class="n3"><div class="m"></div></div>
	<div class="n4"><div class="m"></div></div>
	<div class="n5"><div class="m"></div></div>
</div>

</body>
</html>