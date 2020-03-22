	Util.Modules["sortable"] = new function() {

		// Global debug helper
		this._addDebug = function(message) {
			if(!this.debug) {
				this.debug = u.ae((u.hc(this, "test") ? this : u.pn(this, {include:"div.test"})), "div", {"class":"debug"});
			}
			this.debug.innerHTML += message + "<br>";
			this.debug.scrollTop = this.debug.scrollTop + 25;
		}

		// Run tests
		this.init = function(scene) {

			// If statements provide collapsing and disabling

			// SIMPLE_VERTICAL
			if(1 && "simple_vertical") {

				var simple_vertical = u.qs(".simple_vertical ul.sortable", scene);
				simple_vertical.addDebug = this._addDebug;

				u.sortable(simple_vertical);

				simple_vertical.picked = function(node) {
					this.addDebug("picked" + u.text(node));
				}
				simple_vertical.moved = function(node) {
					// this.addDebug("moved " + u.text(node));
				}
				simple_vertical.dropped = function(node) {
					this.addDebug("dropped " + u.text(node));
				}

			}



			// SIMPLE_HORIZONTAL
			if(1 && "simple_horizontal") {

				var simple_horizontal = u.qs(".simple_horizontal ul.sortable", scene);
				simple_horizontal.addDebug = this._addDebug;

				u.sortable(simple_horizontal);

				simple_horizontal.picked = function(node) {
					this.addDebug("picked " + u.text(node));
				}
				simple_horizontal.moved = function(node) {
					// this.addDebug("moved " + u.text(node));
				}
				simple_horizontal.dropped = function(node) {
					this.addDebug("dropped " + u.text(node));
				}

			}



			// SIMPLE_MULTILINE
			if(1 && "simple_multiline") {

				var simple_multiline = u.qs(".simple_multiline ul.sortable", scene);
				simple_multiline.addDebug = this._addDebug;

				u.sortable(simple_multiline);

				simple_multiline.picked = function(node) {
					this.addDebug("picked " + u.text(node));
				}
				simple_multiline.moved = function(node) {
					// this.addDebug("moved " + u.text(node));
				}
				simple_multiline.dropped = function(node) {
					this.addDebug("dropped " + u.text(node));
					this.addDebug(this.getNodeOrder().join(","));
				}

			}



			// OUTER_HORIZONTAL
			if(1 && "outer_horizontal") {

				var outer_horizontal = u.qs(".outer_horizontal", scene);
				outer_horizontal.addDebug = this._addDebug;

				u.sortable(outer_horizontal);

				outer_horizontal.picked = function(node) {
					this.addDebug("picked " + u.text(node));
				}
				outer_horizontal.moved = function(node) {
					// this.addDebug("moved " + u.text(node));
				}
				outer_horizontal.dropped = function(node) {
					this.addDebug("dropped " + u.text(node));
				}

			}



			// SIMPLE_ADD_REMOVE
			if(1 && "simple_add_remove") {

				var simple_add_remove = u.qs(".simple_add_remove ul.sortable", scene);
				simple_add_remove.addDebug = this._addDebug;

				u.sortable(simple_add_remove);

				simple_add_remove.picked = function(node) {
					this.addDebug("picked " + u.text(node));
				}
				simple_add_remove.moved = function(node) {
					// this.addDebug("moved " + u.text(node));
				}
				simple_add_remove.dropped = function(node) {
					this.addDebug("dropped " + u.text(node));
				}

				var passive_list = u.qs("ul.passive", simple_add_remove.parentNode);

				var bn_add = u.qs("li.add", simple_add_remove.parentNode);
				bn_add.active_list = simple_add_remove;
				bn_add.passive_list = passive_list;
				u.ce(bn_add);
				bn_add.clicked = function() {
					var passive_lis = u.qsa("li", this.passive_list);
					if(passive_lis) {
						u.ae(this.active_list, passive_lis[u.random(0, passive_lis.length-1)]);
						u.sortable(this.active_list);
					}
				}
				var bn_remove = u.qs("li.remove", simple_add_remove.parentNode);
				bn_remove.active_list = simple_add_remove;
				bn_remove.passive_list = passive_list;
				bn_remove.simple_add_remove = simple_add_remove;
				u.ce(bn_remove);
				bn_remove.clicked = function() {
					if(this.active_list.draggable_nodes.length) {
						u.ae(this.passive_list, this.active_list.draggable_nodes[u.random(0, this.active_list.draggable_nodes.length-1)]);

						// u.sortable(this.active_list);
						this.active_list.updateDraggables();
					}
				}

			}



			// COMPLEX_MULTI_TARGET
			if(1 && "complex_multi_target") {

				var complex_multi_target = u.qs(".complex_multi_target", scene);
				complex_multi_target.addDebug = this._addDebug;

				u.sortable(complex_multi_target, {"targets":".target", "draggables":".draggable"});

				complex_multi_target.picked = function(node) {
					this.addDebug("picked " + u.text(node));
				}
				complex_multi_target.moved = function(node) {
					// this.addDebug("moved " + u.text(node));
				}
				complex_multi_target.dropped = function(node) {
					this.addDebug("dropped " + u.text(node));
				}

			}



			// COMPLEX_NESTED - CSS VERSION 1
			if(1 && "complex_nested_css1") {

				var complex_nested = u.qs(".complex_nested_css1", scene);
				complex_nested.addDebug = this._addDebug;

				u.sortable(complex_nested, {"targets":".target", "draggables":".draggable", "allow_nesting":true});

				complex_nested.picked = function(node) {
					this.addDebug("picked " + u.text(node));
				}
				complex_nested.moved = function(node) {
					// this.addDebug("moved " + u.text(node));
				}
				complex_nested.dropped = function(node) {
					this.addDebug("dropped " + u.text(node));
				}

			}



			// COMPLEX_NESTED - CSS VERSION 2
			if(1 && "complex_nested_css2") {

				var complex_nested = u.qs(".complex_nested_css2", scene);
				complex_nested.addDebug = this._addDebug;

				u.sortable(complex_nested, {"targets":".target", "draggables":".draggable", "allow_nesting":true, allow_clickpick: true});

				complex_nested.picked = function(node) {
					this.addDebug("picked " + u.text(node));
				}
				complex_nested.moved = function(node) {
					// this.addDebug("moved " + u.text(node));
				}
				complex_nested.dropped = function(node) {
					this.addDebug("dropped " + u.text(node));
					var node_relations = this.getNodeRelations();
					for(i = 0; i < node_relations.length; i++) {
						this.addDebug(node_relations[i].id + " ("+node_relations[i].relation+")");
					}
				}

			}



			// NODE-ORDER
			if(1 && "node-order") {

				var node_order = u.qs("div.node-order");
				u.sortable(node_order);

				var structure = node_order.getNodeOrder();
				if(structure && 
					structure[0] == 1 && 
					structure[1] == 2 && 
					structure[2] == 3
				) {
					u.ae(node_order, "div", {"class":"testpassed", "html":"scope.getNodeOrder: correct"});
				}
				else {
					u.ae(node_order, "div", {"class":"testfailed", "html":"scope.getNodeOrder: error"});
				}
			}


			// NODE-RELATIONS
			if(1 && "node-relations") {

				var node_relations = u.qs("div.node-relations");
				u.sortable(node_relations, {allow_nesting: true});

				var structure = node_relations.getNodeRelations();
				if(structure && 
					structure[0].id == 1 && 
					structure[0].position == 1 && 
					structure[0].relation == 0 &&

					structure[1].id == 2 && 
					structure[1].position == 2 && 
					structure[1].relation == 0 &&

					structure[3].id == 4 && 
					structure[3].position == 1 && 
					structure[3].relation == 3
				) {
					u.ae(node_relations, "div", {"class":"testpassed", "html":"scope.getNodeRelations: correct"});
				}
				else {
					u.ae(node_relations, "div", {"class":"testfailed", "html":"scope.getNodeRelations: error"});
				}
			}


			// NODE-POSITION
			if(1 && "node-position") {

				var node_position = u.qs("div.node-position");
				u.sortable(node_position);

				var item_2 = u.qs(".item_2", node_position)
				var position = node_position.getNodePositionInList(item_2);
				if(position === 2) {
					u.ae(node_position, "div", {"class":"testpassed", "html":"scope.getNodePosition: correct"});
				}
				else {
					u.ae(node_position, "div", {"class":"testfailed", "html":"scope.getNodePosition: error"});
				}
			}


			// NODE-RELATION
			if(1 && "node-relation") {

				var node_relation = u.qs("div.node-relation");
				u.sortable(node_relation);

				var item_4 = u.qs(".item_4", node_relation)
				var relation = node_relation.getNodeRelation(item_4);
				if(relation == 3) {
					u.ae(node_relation, "div", {"class":"testpassed", "html":"scope.getNodeRelation: correct"});
				}
				else {
					u.ae(node_relation, "div", {"class":"testfailed", "html":"scope.getNodeRelation: error"});
				}
			}



		}

	}