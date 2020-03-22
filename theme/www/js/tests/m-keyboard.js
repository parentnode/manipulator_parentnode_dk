Util.Modules["keyboard"] = new function() {
	this.init = function(div) {

		var node;

		node = u.ae(div, "div", {"class":"error a1", "html":"u.k.addKey(cmd/ctrl + a): waiting"});
		u.k.addKey(node, "a");
		node.clicked = function(event){

			u.ac(this, "testpassed");
			u.rc(this, "error");
			this.innerHTML = this.innerHTML.replace("waiting", "correct")

			// alert("A1 clicked:" + event.type);
			// u.bug("A1 clicked:" + event.type);
			//
			// u.xInObject(u.k.shortcuts);
		}



		node = u.ae(div, "div", {"class":"error a2", "html":"u.k.addKey(cmd/ctrl + b): waiting"});
//		node = u.qs("div.a2", div);
//		u.ce(a2);
		u.k.addKey(node, "b");
		node.clicked = function(event){

			u.ac(this, "testpassed");
			u.rc(this, "testfailed");
			this.innerHTML = this.innerHTML.replace("waiting", "correct")

			// u.bug("A2 clicked:" + event.type);
			// u.as(u.qs("div.a1"), "display", "none");
			//
			// u.xInObject(u.k.shortcuts);
		}


		node = u.ae(div, "div", {"class":"error a3", "html":"u.k.addKey(cmd/ctrl + c): waiting"});
//		node = u.qs("div.node", div);
//		u.ce(node);
		u.k.addKey(node, "c");
		node.clicked = function(event) {

			u.ac(this, "testpassed");
			u.rc(this, "testfailed");
			this.innerHTML = this.innerHTML.replace("waiting", "correct")

			// u.bug("A3 clicked:" + event.type);
			// this.parentNode.parentNode.removeChild(this.parentNode);
			//
			// u.xInObject(u.k.shortcuts);
		}


		node = u.ae(div, "div", {"class":"error b1", "html":"u.k.addKey(ESC): waiting"});
//		node = u.qs("div.node", div);
//		u.ce(node);
		u.k.addKey(node, "ESC", {"callback":"keyboard"});
		// node.clicked = function(event) {
		//
		// 	u.bug("A4 clicked - SHOULD NOT HAPPEN UNLESS YOU CLICKED ON A5:" + event.type);
		//
		// 	u.xInObject(u.k.shortcuts);
		// }
		node.keyboard = function(event) {

			u.ac(this, "testpassed");
			u.rc(this, "testfailed");
			this.innerHTML = this.innerHTML.replace("waiting", "correct")

			// u.bug("A4 keyboard:" + event.type);
			//
			// u.xInObject(u.k.shortcuts);
		}


		node = u.ae(div, "div", {"class":"error b2", "html":"u.k.addKey(e): waiting"});
//		node = u.qs("div.node", div);
//		u.ce(node);
		u.k.addKey(node, "e", {"metakey":false});
		node.clicked = function(event) {

			u.ac(this, "testpassed");
			u.rc(this, "testfailed");
			this.innerHTML = this.innerHTML.replace("waiting", "correct")

			// u.bug("A5 clicked:" + event.type);
			// u.as(u.qs("div.a1"), "display", "block");
			//
			// u.xInObject(u.k.shortcuts);
		}

	}
}