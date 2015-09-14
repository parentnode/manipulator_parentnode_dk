<style type="text/css">
	.scene div {margin: 0 0 5px;}
	.correct {background: green; color: white;}
	.error {background: red;}
</style>

<script type="text/javascript">
	Util.Objects["test"] = new function() {
		this.init = function(scene) {

			var array = new Array("a", "b", "c", "d");

			// PUSH
			if(array.push("e") == 5 && array == "a,b,c,d,e") {
				u.ae(scene, "div", ({"class":"correct"})).innerHTML = "push: correct";
			}
			else {
				u.ae(scene, "div", ({"class":"error"})).innerHTML = "push: error";
			}

			// POP
			if(array.pop() == "e") {
				u.ae(scene, "div", ({"class":"correct"})).innerHTML = "pop: correct";
			}
			else {
				u.ae(scene, "div", ({"class":"error"})).innerHTML = "pop: error";

			}

			// REVERSE
			if(array.reverse() == "d,c,b,a") {
				u.ae(scene, "div", ({"class":"correct"})).innerHTML = "reverse: correct";
			}
			else {
				u.ae(scene, "div", ({"class":"error"})).innerHTML = "reverse: error";

			}

			// UNSHIFT
			if(array.unshift("z") == 5 && array == "z,d,c,b,a") {
				u.ae(scene, "div", ({"class":"correct"})).innerHTML = "unshift: correct";
			}
			else {
				u.ae(scene, "div", ({"class":"error"})).innerHTML = "unshift: error";
			}

			// SHIFT
			if(array.shift() == "z") {
				u.ae(scene, "div", ({"class":"correct"})).innerHTML = "shift: correct";
			}
			else {
				u.ae(scene, "div", ({"class":"error"})).innerHTML = "shift: error";
			}

			// INDEXOF
			if(array.indexOf("c") == 1 && array.indexOf("g") == -1) {
				u.ae(scene, "div", ({"class":"correct"})).innerHTML = "indexOf: correct";
			}
			else {
				u.ae(scene, "div", ({"class":"error"})).innerHTML = "indexOf: error";
			}


			// Object.keys
			var object = {"a":1, "b":2, "c":3};
			if(Object.keys(object).length == 3 && Object.keys(object)[1] == "b") {
				u.ae(scene, "div", ({"class":"correct"})).innerHTML = "Object.keys: correct";
			}
			else {
				u.ae(scene, "div", ({"class":"error"})).innerHTML = "Object.keys: error";
			}

		}

	}
</script>

<div class="scene i:test">

	<h1>Array</h1>

</div>
<div class="comments"></div>
