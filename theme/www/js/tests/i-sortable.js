	Util.Objects["sortable"] = new function() {
		this.init = function(scene) {

			var scope = u.qs(".simple .sortable", scene);
			u.sortable(scope);

			scope.picked = function(event) {
				u.bug("picked")
			}
			scope.moved = function(event) {
//				u.bug("moved")
			}
			scope.dropped = function(event) {
				u.bug("dropped")
			}


			var scope = u.qs(".complex", scene);
			u.sortable(scope, {"targets":"target", "draggables":"draggable"});

			scope.picked = function(event) {
				u.bug("picked")
			}
			scope.moved = function(event) {
//				u.bug("moved")
			}
			scope.dropped = function(event) {
				u.bug("dropped")
			}


			var scope = u.qs(".nested", scene);
			u.sortable(scope, {"targets":"target", "draggables":"draggable", "allow_nesting":true});

			scope.picked = function(event) {
				u.bug("picked")
			}
			scope.moved = function(event) {
//				u.bug("moved")
			}
			scope.dropped = function(event) {
				u.bug("dropped")
			}

		}

	}