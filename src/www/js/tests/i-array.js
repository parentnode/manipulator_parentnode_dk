Util.Objects["array"] = new function() {
	this.init = function(div) {
		u.bug("array init")

		div.test_results = {};

		var array = new Array("a", "b", "c", "d");

		// PUSH
		if(array.push("e") == 5 && array == "a,b,c,d,e") {
			u.ae(div, "div", {"class":"correct", "html":"Array.push: correct"});
			div.test_results["Array.push"] = true;
		}
		else {
			u.ae(div, "div", {"class":"error", "html":"Array.push: error"});
			div.test_results["Array.push"] = false;
		}


		// POP
		if(array.pop() == "e") {
			u.ae(div, "div", {"class":"correct", "html":"Array.pop: correct"});
			div.test_results["Array.pop"] = true;
		}
		else {
			u.ae(div, "div", {"class":"error", "html":"Array.pop: error"});
			div.test_results["Array.pop"] = false;
		}


		// REVERSE
		if(array.reverse() == "d,c,b,a") {
			u.ae(div, "div", {"class":"correct", "html":"Array.reverse: correct"});
			div.test_results["Array.reverse"] = true;
		}
		else {
			u.ae(div, "div", {"class":"error", "html":"Array.reverse: error"});
			div.test_results["Array.reverse"] = false;
		}


		// UNSHIFT
		if(array.unshift("z") == 5 && array == "z,d,c,b,a") {
			u.ae(div, "div", {"class":"correct", "html":"Array.unshift: correct"});
			div.test_results["Array.unshift"] = true;
		}
		else {
			u.ae(div, "div", {"class":"error", "html":"Array.unshift: error"});
			div.test_results["Array.unshift"] = false;
		}


		// SHIFT
		if(array.shift() == "z") {
			u.ae(div, "div", {"class":"correct", "html":"Array.shift: correct"});
			div.test_results["Array.shift"] = true;
		}
		else {
			u.ae(div, "div", {"class":"error", "html":"Array.shift: error"});
			div.test_results["Array.shift"] = false;
		}


		// INDEXOF
		if(array.indexOf("c") == 1 && array.indexOf("g") == -1) {
			u.ae(div, "div", {"class":"correct", "html":"Array.indexOf: correct"});
			div.test_results["Array.indexOf"] = true;
		}
		else {
			u.ae(div, "div", {"class":"error", "html":"Array.indexOf: error"});
			div.test_results["Array.indexOf"] = false;
		}


		// Object.keys
		var object = {"a":1, "b":2, "c":3};
		if(Object.keys(object).length == 3 && Object.keys(object)[1] == "b") {
			u.ae(div, "div", {"class":"correct", "html":"Object.keys: correct"});
			div.test_results["Object.keys"] = true;
		}
		else {
			u.ae(div, "div", {"class":"error", "html":"Object.keys: error"});
			div.test_results["Object.keys"] = false;
		}

	}

}