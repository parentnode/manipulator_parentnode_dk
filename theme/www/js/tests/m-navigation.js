Util.Modules["dummy"] = new function() {
	this.init = function(div) {
		u.bug("init dummy");
		u.qs("span", div).innerHTML = "initialized";
	}
}
Util.Modules["navigation"] = new function() {
	this.init = function(div) {

		page._location_1 = u.qs(".l1.location", div);
		page._location_2 = u.qs(".l2.location", div);
		page._location_3 = u.qs(".l3.location", div);
		page._location_4 = u.qs(".l4.location", div);


		// inject initializers for testing init flow
		
		u.ae(div, "h2", {"html":"Initializers"});
		page._scene_initializer = u.ae(page.cN.scene, "div", {"class":"i:dummy dummyinitializer", "html":"page.cN.scene: <span>waiting</span>"})
		page._content_initializer = u.ae(page.cN, "div", {"class":"i:dummy dummyinitializer", "html":"page.cN: <span>waiting</span>"})

		page.resetInitializers = function() {
			u.ac(page._content_initializer, "i:dummy");
			u.qs("span", page._content_initializer).innerHTML = "waiting";

			u.ac(page._scene_initializer, "i:dummy");
			u.qs("span", page._scene_initializer).innerHTML = "waiting";
		}




		page.cN.navigate = function(url) {
			u.bug("page.cN.navigate:" + url)

			// pretend to load new HTML
			page.resetInitializers();

			u.init(page.cN);
			page._location_1.innerHTML = url;
		}

		page.cN.scene.navigate = function(url) {
			u.bug("page.cN.scene.navigate:" + url)

			// pretend to load new HTML
			page.resetInitializers();

			u.init(page.cN.scene);
			page._location_2.innerHTML = url;
			
		}

		// Overruling default url/destination flow
		div.navigate = function(url) {
			u.bug("div.navigate:" + url)

			page._location_3.innerHTML = url;
		}

		// u.h.addEvent
		div.updated = function(url) {
			u.bug("div.updated:" + url)

			// fake url contains ( "/content" ) or ( "hash" but no "#" )
			if(url.match(/\/content/) || (!url.match(/#/) && url.match(/hash/))) {
				page._location_4.innerHTML = url;
			}
			// force reload on real urls
			else {
				location.href = url;
				location.reload();
			}

		}


		// standard invokation
		// should callback to page.cN.navigate (level 1 change) and page.cN.scene.navigate (level 2+ change)
		u.navigation();

		// overruling default flow (like manual event catcher, but with initial state detection)
		// should call back to div.navigate on every url change
		u.navigation({"node":div, "callback":"navigate"});

		// manual event catcher
		// should call back to div.updated on every url change
		u.h.addEvent(div, {"callback":"updated"});




		// activate links
		var links = u.qsa("ul.links li", div);
		for(i = 0; link = links[i]; i++) {
			u.ce(link);
			link.clicked = function() {
				u.h.navigate(this.url, this, u.cv(this, "silent"));
			}
		}

	}

}