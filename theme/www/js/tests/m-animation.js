
function checkTransition(node) {
//	u.bug("checkTransition: " + u.gcs(node, "transition"));
	return (u.gcs(node, "transition") == "" || u.gcs(node, "transition") == "none 0s ease 0s") ? true : false;
}

function checkValues(node, property, values) {
	var value;
	while(values.length) {
		value = values.pop();
		// if(property == "height") {
//		 	u.bug("checkValues(node, "+u.vendorProperty(property)+"): u.gcs: '" + u.gcs(node, property) + "' #value: '" + value + "' :: " + u.nodeId(node));
		// }
		if(u.gcs(node, property) == value) {
//			u.bug("found correct")
			return true;
		}
		
	}
	return false;
}



Util.Modules["callbacks"] = new function() {
	this.init = function(div) {
		u.bug("init callbacks");

		var node;


		// SIMPLE CALLBACK
		node = u.ae(div, "div", {"class":"testfailed", "html":"node.transitioned: waiting"});
		node.transitioned = function(event) {
			if(
				(checkValues(this, "transform", ["matrix(1, 0, 0, 1, 0, 0)", "matrix(1, 0, 0, 1, 0px, 0px)"]) || checkValues(this, "left", ["auto"]))
				 && checkTransition(this)
			) {
				u.tc(this, "testfailed", "testpassed");
				this.innerHTML = this.innerHTML.replace("waiting", "correct");
			}
		}
		u.as(node, "transformOrigin", "0 50%");
		u.a.scale(node, 0.5);

		u.a.transition(node, "all 0.5s ease-in");
		u.a.scale(node, 1);



		// CHAINED CALLBACK
		div.e1 = u.ae(div, "div", {"class":"e1 testfailed", "html":"node.transitioned (chained using callback): waiting"});
		div.e1.called_back = 0;
		div.e1.step1 = function(event) {
			this.called_back++;

			u.a.transition(this, "all 0.2s ease-out", "step2");
			u.a.translate(this, 180, 0);
		}
		div.e1.step2 = function(event) {
			this.called_back++;

			u.a.transition(this, "all 0.2s ease-in", this.step3);
			u.a.translate(this, 200, 0);
		}
		div.e1.step3 = function(event) {
			this.called_back++;

			u.a.transition(this, "all 0.2s ease-out", "step4");
			u.a.translate(this, 190, 0);
		}
		div.e1.step4 = function(event) {
			this.called_back++;

			u.a.transition(this, "all 0.2s ease-in", "step5");
			u.a.translate(this, 200, 0);
		}
		div.e1.step5 = function(event) {
			this.called_back++;
			this.transitioned = function() {
				if(
					this.called_back == 5 &&
					checkValues(this, "transform", ["matrix(1, 0, 0, 1, 0, 0)","matrix(1, 0, 0, 1, 0px, 0px)","matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1)"]) &&
					checkTransition(this)
				) {
					u.tc(this, "testfailed", "testpassed");
					this.innerHTML = this.innerHTML.replace("waiting", "correct");
				}
			}
			u.a.transition(this, "all 0.2s ease-in-out 0.5s");
			u.a.translate(this, 0, 0);
		}

		// start chain
		u.a.translate(div.e1, 0, 0);
		u.a.transition(div.e1, "all 0.5s ease-in", "step1");
		u.a.translate(div.e1, 200, 0);



		// CHAINED TRANSITIONED
		div.e2 = u.ae(div, "div", {"class":"e2 testfailed", "html":"node.transitioned (chained using transitioned): waiting"});
		div.e2.called_back = 0;
		div.e2.transitioned = function(event) {
			this.called_back++;


			this.transitioned = function(event) {
				this.called_back++;

				this.transitioned = function(event) {
					this.called_back++;

					this.transitioned = function(event) {
						this.called_back++;

						this.transitioned = function(event) {
							this.called_back++;
							this.transitioned = function() {
								if(
									this.called_back == 5 &&
									checkValues(this, "transform", ["matrix(1, 0, 0, 1, 0, 0)","matrix(1, 0, 0, 1, 0px, 0px)","matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1)"]) &&
									checkTransition(this)
								) {
									u.tc(this, "testfailed", "testpassed");
									this.innerHTML = this.innerHTML.replace("waiting", "correct");
								}
							}
							u.a.transition(this, "all 0.2s ease-in-out 0.5s");
							u.a.translate(this, 0, 0);
						}
						u.a.transition(this, "all 0.2s ease-in");
						u.a.translate(this, 200, 0);
					}
					u.a.transition(this, "all 0.2s ease-out");
					u.a.translate(this, 190, 0);
				}
				u.a.transition(this, "all 0.2s ease-in");
				u.a.translate(this, 200, 0);
			}

			u.a.transition(this, "all 0.2s ease-out");
			u.a.translate(this, 180, 0);

		}

		// start chain
		u.a.translate(div.e2, 0, 0);
		u.a.transition(div.e2, "all 0.5s ease-in");
		u.a.translate(div.e2, 200, 0);
		

		// CHAINED CALLBACK WITH MULTIPLE TRANSITIONS
		// div.e2 = u.ae(div, "div", {"class":"e2", "html":"chained callback with multiple transitions (not finished)"});

		//
		// div.e2.step_s1 = function(event) {
		// 	u.bug("e2 transition s1 complete:" + event.type + ", " + u.nodeId(this));
		// 	u.xInObject(event);
		//
		// 	u.a.transition(this, "scale 0.2s ease-out", "step_s2");
		// 	u.a.scale(div.e2, 1.8);
		// }
		// div.e2.step_o1 = function(event) {
		// 	u.bug("e2 transition o2 complete:" + event.type);
		// 	u.xInObject(event);
		//
		// }
		//
		// div.e2.step_s2 = function(event) {
		// 	u.bug("e2 transition s2 complete:" + event.type);
		//
		// 	u.a.transition(this, "scale 0.2s ease-in", "step_s3");
		// 	u.a.scale(div.e2, 2);
		// }
		// div.e2.step_s3 = function(event) {
		// 	u.bug("e2 transition s3 complete:" + event.type);
		//
		// 	u.a.transition(this, "scale 0.2s ease-out", "step_s4");
		// 	u.a.scale(div.e2, 1.9);
		// }
		// div.e2.step_s4 = function(event) {
		// 	u.bug("e2 transition s4 complete:" + event.type);
		//
		// 	u.a.transition(this, "scale 0.2s ease-in", "step_s5");
		// 	u.a.scale(div.e2, 2);
		// }
		// div.e2.step_s5 = function(event) {
		// 	u.bug("e2 transition s5 complete:" + event.type);
		//
		// 	u.a.transition(this, "scale 0.2s ease-in-out 0.5s");
		// 	u.a.scale(div.e2, 1);
		// }
		//
		// u.as(div.e2, "transformOrigin", "0 50%");
		// u.a.scale(div.e2, 1);
		// u.a.setOpacity(div.e2, 0);
		//
		// u.a.transition(div.e2, ["scale 0.2s ease-out", "opacity 0.3s ease-in 2s"], ["step_s2", "step_o2"]);
		// u.a.scale(div.e2, 1.2);
		// u.a.setOpacity(div.e2, 1);


		// U.ASS with transition
		div.e4 = u.ae(div, "div", {"class":"e4 testfailed", "html":"node.transitioned (u.ass): waiting"});
		div.e4.transitioned = function(event) {
			if(
				checkValues(this, "opacity", [1]) &&
				checkTransition(this)
			) {
				u.tc(this, "testfailed", "testpassed");
				this.innerHTML = this.innerHTML.replace("waiting", "correct");
			}
		}

		// start chain
		u.ass(div.e4, {
			opacity: 0,
		});
		u.ass(div.e4, {
			transition: "all 1s ease-in",
			opacity: 1,
		});
	}
}



Util.Modules["basics"] = new function() {
	this.init = function(div) {
		u.bug("init basics");

		// u.bug_force = true;
		// u.bug_console_only = false;

		// translate
		node = u.ae(div, "div", {"class":"block translate", "html":"translate"});
		node.div = div;
		node.offsetHeight;
		node.transitioned = function(event) {

			// u.bug("style:" + this.style.toString());
			// u.xInObject(this.style);

			this.innerHTML += ": DONE";

			if(
				checkValues(this, "transform", ["matrix(1, 0, 0, 1, 6px, -20px)", "matrix(1, 0, 0, 1, 6, -20)", "matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 6, -20, 0, 1)"]) &&
				checkTransition(this)
			) {
				u.ac(this, "done");
				u.ae(this.div, "div", {"class":"testpassed", "html":"u.a.translate: correct"});
			}
			else {
				u.ae(this.div, "div", {"class":"testfailed", "html":"u.a.translate: error"});
			}
			
		}
		u.a.transition(node, "all 1s ease-in");
		u.a.translate(node, 6, -20);


		// rotate
		node = u.ae(div, "div", {"class":"block rotate", "html":"rotate"});
		node.div = div;
		node.offsetHeight;
		node.transitioned = function(event) {

			this.innerHTML += ": DONE";

			if(
				checkValues(this, "transform",
				[
					"matrix(0.707107, 0.707107, -0.707107, 0.707107, 0px, 0px)",
					"matrix(0.707107, 0.707107, -0.707107, 0.707107, 0, 0)",
					"matrix(0.707106781186548, 0.707106781186548, -0.707106781186548, 0.707106781186548, 0, 0)",
					"matrix(0.7071067811865476, 0.7071067811865475, -0.7071067811865475, 0.7071067811865476, 0, 0)",
					"matrix(0.7071067811865475, 0.7071067811865476, -0.7071067811865476, 0.7071067811865475, 0, 0)"
				]) &&
				checkTransition(this)
			) {
				u.ac(this, "done");
				u.ae(this.div, "div", {"class":"testpassed", "html":"u.a.rotate correct"});
			}
			else {
				u.ae(this.div, "div", {"class":"testfailed", "html":"u.a.rotate error"});
			}
		}
		u.a.transition(node, "all 1s ease-in");
		u.a.rotate(node, 45);


		// scale
		node = u.ae(div, "div", {"class":"block scale", "html":"scale"});
		node.div = div;
		node.offsetHeight;
		node.transitioned = function(event) {

			this.innerHTML += ": DONE";

			if(
				checkValues(this, "transform", ["matrix(1.5, 0, 0, 1.5, 0px, 0px)", "matrix(1.5, 0, 0, 1.5, 0, 0)"]) &&
				checkTransition(this)
			) {
				u.ac(this, "done");
				u.ae(this.div, "div", {"class":"testpassed", "html":"u.a.scale: correct"});
			}
			else {
				u.ae(this.div, "div", {"class":"testfailed", "html":"u.a.scale: error"});
			}
		}
		u.a.transition(node, "all 1s ease-in");
		u.a.scale(node, 1.5);


		// height
		node = u.ae(div, "div", {"class":"block opacity", "html":"opacity"});
		node.div = div;
		node.offsetHeight;
		node.transitioned = function(event) {

			this.innerHTML += ": DONE";

			if(
				checkValues(this, "opacity", ["0.5"]) &&
				checkTransition(this)
			) {
				u.ac(this, "done");
				u.ae(this.div, "div", {"class":"testpassed", "html":"u.a.opacity: correct"});
			}
			else {
				u.ae(this, "div", {"class":"testfailed", "html":"u.a.opacity: error"});
			}
		}
		u.a.transition(node, "all 1s ease-in");
		u.a.setOpacity(node, .5);


		// width
		node = u.ae(div, "div", {"class":"block width", "html":"width"});
		node.div = div;
		node.offsetHeight;
		node.transitioned = function(event) {

			this.innerHTML += ": DONE";

			if(
				checkValues(this, "width", ["100px"]) &&
				checkTransition(this)
			) {
				u.ac(this, "done");
				u.ae(this.div, "div", {"class":"testpassed", "html":"u.a.width: correct"});
			}
			else {
				u.ae(this.div, "div", {"class":"testfailed", "html":"u.a.width: error"});
			}

		}
		u.a.transition(node, "all 1s ease-in");
		u.a.setWidth(node, 100);


		// height
		node = u.ae(div, "div", {"class":"block height", "html":"height"});
		node.div = div;
		node.offsetHeight;
		node.transitioned = function(event) {

			this.innerHTML += ": DONE";

			if(
				checkValues(this, "height", ["25px"]) &&
				checkTransition(this)
			) {
				u.ac(this, "done");
				u.ae(this.div, "div", {"class":"testpassed", "html":"u.a.height: correct"});
			}
			else {
				u.ae(this.div, "div", {"class":"testfailed", "html":"u.a.height: error"});
			}
		}
		u.a.transition(node, "all 1s ease-in");
		u.a.setHeight(node, 25);


		// bgpos
		node = u.ae(div, "div", {"class":"block bgpos", "html":"bgpos"});
		node.div = div;
		node.offsetHeight;
		node.transitioned = function(event) {

			this.innerHTML += ": DONE";

			if(
				checkValues(this, "background-position", ["-200px -100px"]) &&
				checkTransition(this)
			) {
				u.ac(this, "done");
				u.ae(this.div, "div", {"class":"testpassed", "html":"u.a.bgpos: correct"});
			}
			else {
				u.ae(this.div, "div", {"class":"testfailed", "html":"u.a.bgpos: error"});
			}
		}
		u.a.transition(node, "all 1s ease-in");
		u.a.setBgPos(node, -200, -100);


		// bgcolor
		node = u.ae(div, "div", {"class":"block bgcolor", "html":"bgcolor"});
		node.div = div;
		node.offsetHeight;
		node.transitioned = function(event) {

			this.innerHTML += ": DONE";

			if(
				checkValues(this, "background-color", ["rgb(0, 128, 0)"]) &&
				checkTransition(this)
			) {
				u.ac(this, "done");
				u.ae(this.div, "div", {"class":"testpassed", "html":"u.a.bgcolor: correct"});
			}
			else {
				u.ae(this.div, "div", {"class":"testfailed", "html":"u.a.bgcolor: error"});
			}
		}
		u.a.transition(node, "all 1s ease-in");
		u.a.setBgColor(node, "#008000");


	}
}
	

