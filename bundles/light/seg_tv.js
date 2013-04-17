/*
JES v0.5-light Copyright 2013 http://whattheframework.org/jes/license
wtf-js-merged @ 2013-04-17 10:24:02
*/

/*u.js*/
var u, Util = u = new function() {}
u.version = 0.5;
u.bug = function() {}
u.stats = new function() {this.pageView = function(){};this.event = function(){};this.customVar = function(){}}

/*u-dom.js*/
Util.getElement = u.ge = function(identifier, target) {
	var e, i, regexp, t;
	t = target ? target : document;
	if(document.getElementById(identifier)) {
		return document.getElementById(identifier);
	}
	regexp = new RegExp("(^|\\s)" + identifier + "(\\s|$|\:)");
	for(i = 0; e = t.getElementsByTagName("*")[i]; i++) {
		if(regexp.test(e.className)) {
			return e;
		}
	}
	return t.getElementsByTagName(identifier).length ? t.getElementsByTagName(identifier)[0] : false;
}
Util.getElements = u.ges = function(identifier, target) {
	var e, i, regexp, t;
	var elements = new Array();
	t = target ? target : document;
	regexp = new RegExp("(^|\\s)" + identifier + "(\\s|$|\:)");
	for(i = 0; e = t.getElementsByTagName("*")[i]; i++) {
		if(regexp.test(e.className)) {
			elements.push(e);
		}
	}
	return elements.length ? elements : t.getElementsByTagName(identifier);
}
Util.querySelector = u.qs = function(query, target) {
	t = target ? target : document;
	return t.querySelector(query);
}
Util.querySelectorAll = u.qsa = function(query, target) {
	t = target ? target : document;
	return t.querySelectorAll(query);
}
Util.getSibling = u.gs = function(e, direction) {
	try {
		var node_type = e.nodeType;
		var ready = false;
		var prev_node = false;
		for(var i = 0; node = e.parentNode.childNodes[i]; i++) {
			if(node.nodeType == node_type) {
				if(ready) {
					return node;
				}
				if(node == e) {
					if(direction == "next") {
						ready = true;
					}
					else {
						return prev_node;
					}
				}
				else {
					prev_node = node;
				}
			}
		}
		return false;
	}
	catch(exception) {
		u.bug("Exception ("+exception+") in u.gs, called from: "+arguments.callee.caller);
	}
}
Util.previousSibling = u.ps = function(e, exclude) {
	var node = e.previousSibling;
	if(exclude) {
		while(node && (node.nodeType == 3 || node.nodeType == 8 || node.className.match("(^|\\s)" + exclude + "(\\s|$)") || node.nodeName.match(exclude.toUpperCase()))) {
			node = node.previousSibling;
		}
	}
	else {
		while(node && (node.nodeType == 3 || node.nodeType == 8)) {
			node = node.previousSibling;
		}
	}
	return node;
}
Util.nextSibling = u.ns = function(e, exclude) {
	var node = e.nextSibling;
	if(exclude) {
		while(node && (node.nodeType == 3 || node.nodeType == 8 || node.className.match("(^|\\s)" + exclude + "(\\s|$)") || node.nodeName.match(exclude.toUpperCase()))) {
			node = node.nextSibling;
		}
	}
	else {
		while(node && (node.nodeType == 3 || node.nodeType == 8)) {
			node = node.nextSibling;
		}
	}
	return node;
}
Util.appendElement = u.ae = function(e, node_type, attributes) {
	try {
		var node = e.appendChild(document.createElement(node_type));
		if(attributes) {
			if(typeof(attributes) == "object") {
				for(attribute in attributes) {
					node.setAttribute(attribute, attributes[attribute]);
				}
			}
			else {
				u.addClass(node, attributes)
			}
		}
		return node;
	}
	catch(exception) {
		u.bug("Exception ("+exception+") in u.ae, called from: "+arguments.callee.caller.name);
		u.bug("e="+e + ":nodename="+e.nodeName + ":id="+e.id + ":classname="+e.classname + ":attributes=" + attribute);
	}
}
Util.insertElement = u.ie = function(e, node_type, attributes) {
	try {
		var node = e.insertBefore(document.createElement(node_type), e.firstChild);
		if(attributes) {
			if(typeof(attributes) == "object") {
				for(attribute in attributes) {
					node.setAttribute(attribute, attributes[attribute]);
				}
			}
			else {
				u.addClass(node, attributes)
			}
		}
		return node;
	}
	catch(exception) {
		u.bug("Exception ("+exception+") in u.getIJ, called from: "+arguments.callee.caller);
	}
}
Util.getIJ = function(e, id) {
	try {
		var regexp = new RegExp(id + ":[?=\\w/\\#~:.?+=?&%@!\\-]*");
		if(e.className.match(regexp)) {
			return e.className.match(regexp)[0].replace(id + ":", "");
		}
		return false;
	}
	catch(exception) {
		u.bug("Exception ("+exception+") in u.getIJ, called from: "+arguments.callee.caller);
	}
}
Util.setClass = u.sc = function(e, classname) {
	try {
		e.className = classname;
		e.offsetTop;
	}
	catch(exception) {
		u.bug("Exception ("+exception+") in u.setClass, called from: "+arguments.callee.caller);
	}
}
Util.addClass = u.ac = function(e, classname) {
	try {
		if(classname) {
			var regexp = new RegExp("(^|\\s)" + classname + "(\\s|$|\:)");
			if(!regexp.test(e.className)) {
				e.className += e.className ? " " + classname : classname;
				e.offsetTop;
			}
		}
	}
	catch(exception) {
		u.bug("Exception ("+exception+") in u.addClass, called from: "+arguments.callee.caller);
	}
}
Util.removeClass = u.rc = function(e, classname) {
	try {
		if(classname) {
			var regexp = new RegExp(classname + " | " + classname + "|" + classname);
			e.className = e.className.replace(regexp, "");
			e.offsetTop;
		}
	}
	catch(exception) {
		u.bug("Exception ("+exception+") in u.removeClass, called from: "+arguments.callee.caller);
	}
}
Util.toggleClass = u.tc = function(e, classname, second_classname) {
	try {
		var regexp = new RegExp("(^|\\s)" + classname + "(\\s|$|\:)");
		if(regexp.test(e.className)) {
			Util.removeClass(e, classname);
			if(second_classname) {
				Util.addClass(e, second_classname);
			}
			return second_classname;
		}
		else {
			Util.addClass(e, classname);
			if(second_classname) {
				Util.removeClass(e, second_classname);
			}
			return classname;
		}
		e.offsetTop;
	}
	catch(exception) {
		u.bug("Exception ("+exception+") in u.toggleClass, called from: "+arguments.callee.caller);
	}
}
Util.hasClass = u.hc = function(e, classname) {
	try {
		if(classname) {
			var regexp = new RegExp("(^|\\s)" + classname + "(\\s|$|\:)");
			if(regexp.test(e.className)) {
				return true;
			}
			else {
				return false;
			}
		}
	}
	catch(exception) {
		u.bug("Exception ("+exception+") in u.hasClass, called from: "+arguments.callee.caller);
	}
	return false;
}
Util.applyStyle = u.as = function(e, style, value) {
	try {
		e.style[style] = value;
		e.offsetHeight;
	}
	catch(exception) {
		u.bug("Exception ("+exception+") in u.applyStyle("+u.nodeId(e)+", "+style+", "+value+") called from: "+arguments.callee.caller);
	}
}
Util.getComputedStyle = u.gcs = function(e, attribute) {
	e.offsetHeight;
	if(document.defaultView && document.defaultView.getComputedStyle) {
		return document.defaultView.getComputedStyle(e, null).getPropertyValue(attribute);
	}
	return false;
}
Util.wrapElement = u.we = function(e, wrap, attributes) {
	wrap = e.parentNode.insertBefore(document.createElement(wrap), e);
	if(attributes) {
		for(attribute in attributes) {
			wrap.setAttribute(attribute, attributes[attribute]);
		}
	}
	wrap.appendChild(e);
	return wrap;
}

/*u-events.js*/
Util.Events = u.e = new function() {
	this.event_pref = typeof(document.ontouchmove) == "undefined" ? "mouse" : "touch";
	this.kill = function(event) {
		if(event) {
			event.preventDefault();
			event.stopPropagation()
		}
	}
	this.addEvent = function(e, type, action) {
		try {
			e.addEventListener(type, action, false);
		}
		catch(exception) {
			alert("exception in addEvent:" + e + "," + type + ":" + exception);
		}
	}
	this.removeEvent = function(e, type, action) {
		try {
			e.removeEventListener(type, action, false);
		}
		catch(exception) {
			u.bug("exception in removeEvent:" + e + "," + type + ":" + exception);
		}
	}
	this.addStartEvent = this.addDownEvent = function(e, action) {
		u.e.addEvent(e, (this.event_pref == "touch" ? "touchstart" : "mousedown"), action);
	}
	this.removeStartEvent = this.removeDownEvent = function(e, action) {
		u.e.removeEvent(e, (this.event_pref == "touch" ? "touchstart" : "mousedown"), action);
	}
	this.addMoveEvent = function(e, action) {
		u.e.addEvent(e, (this.event_pref == "touch" ? "touchmove" : "mousemove"), action);
	}
	this.removeMoveEvent = function(e, action) {
		u.e.removeEvent(e, (this.event_pref == "touch" ? "touchmove" : "mousemove"), action);
	}
	this.addEndEvent = this.addUpEvent = function(e, action) {
		u.e.addEvent(e, (this.event_pref == "touch" ? "touchend" : "mouseup"), action);
		if(e.snapback && u.e.event_pref == "mouse") {
			u.e.addEvent(e, "mouseout", this._snapback);
		}
	}
	this.removeEndEvent = this.removeUpEvent = function(e, action) {
		u.e.removeEvent(e, (this.event_pref == "touch" ? "touchend" : "mouseup"), action);
		if(e.snapback && u.e.event_pref == "mouse") {
			u.e.removeEvent(e, "mouseout", this._snapback);
		}
	}
	this.overlap = function(element, target, strict) {
		if(target.constructor.toString().match("Array")) {
			var target_start_x = Number(target[0]);
			var target_start_y = Number(target[1]);
			var target_end_x = Number(target[2]);
			var target_end_y = Number(target[3]);
		}
		else {
			var target_start_x = target.element_x ? target.element_x : 0;
			var target_start_y = target.element_y ? target.element_y : 0;
			var target_end_x = Number(target_start_x + target.offsetWidth);
			var target_end_y = Number(target_start_y + target.offsetHeight);
		}
		var element_start_x = Number(element.element_x);
		var element_start_y = Number(element.element_y);
		var element_end_x = Number(element_start_x + element.offsetWidth);
		var element_end_y = Number(element_start_y + element.offsetHeight);
		if(strict && element_start_x >= target_start_x && element_start_y >= target_start_y && element_end_x <= target_end_x && element_end_y <= target_end_y) {
			return true;
		}
		else if(strict) {
			return false;
		}
		else if(element_end_x < target_start_x || element_start_x > target_end_x || element_end_y < target_start_y || element_start_y > target_end_y) {
			return false;
		}
		return true;
	}
	this.resetClickEvents = function(e) {
		u.t.resetTimer(e.t_held);
		u.t.resetTimer(e.t_clicked);
		this.removeEvent(e, "mouseup", this._dblclicked);
		this.removeEvent(e, "touchend", this._dblclicked);
		this.removeEvent(e, "mousemove", this._clickCancel);
		this.removeEvent(e, "touchmove", this._clickCancel);
		this.removeEvent(e, "mousemove", this._move);
		this.removeEvent(e, "touchmove", this._move);
	}
	this.resetDragEvents = function(e) {
		this.removeEvent(e, "mousemove", this._pick);
		this.removeEvent(e, "touchmove", this._pick);
		this.removeEvent(e, "mousemove", this._drag);
		this.removeEvent(e, "touchmove", this._drag);
		this.removeEvent(e, "mouseup", this._drop);
		this.removeEvent(e, "touchend", this._drop);
		this.removeEvent(e, "mouseout", this._snapback);
		this.removeEvent(e, "mouseout", this._drop);
		this.removeEvent(e, "mousemove", this._scrollStart);
		this.removeEvent(e, "touchmove", this._scrollStart);
		this.removeEvent(e, "mousemove", this._scrolling);
		this.removeEvent(e, "touchmove", this._scrolling);
		this.removeEvent(e, "mouseup", this._scrollEnd);
		this.removeEvent(e, "touchend", this._scrollEnd);
	}
	this.resetEvents = function(e) {
		this.resetClickEvents(e);
		this.resetDragEvents(e);
	}
	this.resetNestedEvents = function(e) {
		while(e && e.nodeName != "HTML") {
			this.resetEvents(e);
			e = e.parentNode;
		}
	}
	this._inputStart = function(event) {
		this.event_var = event;
		this.input_timestamp = new Date().getTime();
		this.start_event_x = u.eventX(event);
		this.start_event_y = u.eventY(event);
		this.current_xps = 0;
		this.current_yps = 0;
		this.swiped = false;
		if(this.e_click || this.e_dblclick || this.e_hold) {
			var node = this;
			while(node) {
				if(node.e_drag || node.e_swipe) {
					u.e.addMoveEvent(this, u.e._clickCancel);
					break;
				}
				else {
					node = node.parentNode;
				}
			}
			u.e.addMoveEvent(this, u.e._move);
			u.e.addEndEvent(this, u.e._dblclicked);
		}
		if(this.e_hold) {
			this.t_held = u.t.setTimer(this, u.e._held, 750);
		}
		if(this.e_drag || this.e_swipe) {
			u.e.addMoveEvent(this, u.e._pick);
			u.e.addEndEvent(this, u.e._drop);
		}
		if(this.e_scroll) {
			u.e.addMoveEvent(this, u.e._scrollStart);
			u.e.addEndEvent(this, u.e._scrollEnd);
		}
		if(typeof(this.inputStarted) == "function") {
			this.inputStarted(event);
		}
	}
	this._cancelClick = function(event) {
		u.e.resetClickEvents(this);
		if(typeof(this.clickCancelled) == "function") {
			this.clickCancelled(event);
		}
	}
	this._move = function(event) {
		if(typeof(this.moved) == "function") {
			this.moved(event);
		}
	}
	this.hold = function(e) {
		e.e_hold = true;
		u.e.addStartEvent(e, this._inputStart);
	}
	this._held = function(event) {
		u.e.resetEvents(this);
		if(typeof(this.held) == "function") {
			this.held(event);
		}
	}
	this.click = this.tap = function(e) {
		e.e_click = true;
		u.e.addStartEvent(e, this._inputStart);
	}
	this._clicked = function(event) {
		u.stats.event(this, "clicked");
		u.e.resetNestedEvents(this);
		if(typeof(this.clicked) == "function") {
			this.clicked(event);
		}
	}
	this.dblclick = this.doubletap = function(e) {
		e.e_dblclick = true;
		u.e.addStartEvent(e, this._inputStart);
	}
	this._dblclicked = function(event) {
		if(u.t.valid(this.t_clicked) && event) {
			u.e.resetNestedEvents(this);
			if(typeof(this.dblclicked) == "function") {
				this.dblclicked(event);
			}
			return;
		}
		else if(!this.e_dblclick) {
			this._clicked = u.e._clicked;
			this._clicked(event);
		}
		else if(!event) {
			this._clicked = u.e._clicked;
			this._clicked(this.event_var);
		}
		else {
			u.e.resetNestedEvents(this);
			this.t_clicked = u.t.setTimer(this, u.e._dblclicked, 400);
		}
	}
	this.drag = function(e, target, strict, snapback) {
		e.e_drag = true;
		e.strict = strict ? true : false;
		e.allowed_offset = e.strict ? 0 : 250;
		e.elastica = 2;
		e.snapback = snapback ? true : false;
		if(target.constructor.toString().match("Array")) {
			e.start_drag_x = Number(target[0]);
			e.start_drag_y = Number(target[1]);
			e.end_drag_x = Number(target[2]);
			e.end_drag_y = Number(target[3]);
		}
		else {
			e.start_drag_x = target.element_x ? target.element_x : 0;
			e.start_drag_y = target.element_y ? target.element_y : 0;
			e.end_drag_x = Number(e.start_drag_x + target.offsetWidth);
			e.end_drag_y = Number(e.start_drag_y + target.offsetHeight);
		}
		e.element_x = e.element_x ? e.element_x : 0;
		e.element_y = e.element_y ? e.element_y : 0;
		e.locked = ((e.end_drag_x - e.start_drag_x == e.offsetWidth) && (e.end_drag_y - e.start_drag_y == e.offsetHeight));
		e.vertical = (!e.locked && e.end_drag_x - e.start_drag_x == e.offsetWidth);
		e.horisontal = (!e.locked && e.end_drag_y - e.start_drag_y == e.offsetHeight);
		u.e.addStartEvent(e, this._inputStart);
	}
	this._pick = function(event) {
		var init_speed_x = Math.abs(this.start_event_x - u.eventX(event));
		var init_speed_y = Math.abs(this.start_event_y - u.eventY(event));
		u.e.resetNestedEvents(this);
		if(init_speed_x > init_speed_y && this.horisontal || init_speed_x < init_speed_y && this.vertical || !this.vertical && !this.horisontal) {
		    u.e.kill(event);
			this.move_timestamp = new Date().getTime();
			this.current_xps = 0;
			this.current_yps = 0;
			this.start_input_x = u.eventX(event) - this.element_x; // - u.absLeft(this);//(event.targetTouches ? event.targetTouches[0].pageX : event.pageX);
			this.start_input_y = u.eventY(event) - this.element_y; // - u.absTop(this);//.targetTouches ? event.targetTouches[0].pageY : event.pageY);
			u.a.transition(this, "none");
			if(typeof(this.picked) == "function") {
				this.picked(event);
			}
			u.e.addMoveEvent(this, u.e._drag);
			u.e.addEndEvent(this, u.e._drop);
		}
	}
	this._drag = function(event) {
			this.new_move_timestamp = new Date().getTime();
				var offset = false;
				this.current_x = u.eventX(event) - this.start_input_x;
				this.current_y = u.eventY(event) - this.start_input_y;
					this.current_xps = Math.round(((this.current_x - this.element_x) / (this.new_move_timestamp - this.move_timestamp)) * 1000);
					this.current_yps = Math.round(((this.current_y - this.element_y) / (this.new_move_timestamp - this.move_timestamp)) * 1000);
				this.move_timestamp = this.new_move_timestamp;
				if(this.vertical) {
					this.element_y = this.current_y;
				}
				else if(this.horisontal) {
					this.element_x = this.current_x;
				}
				else if(!this.locked) {
					this.element_x = this.current_x;
					this.element_y = this.current_y;
				}
				if(!this.locked) {
					if(u.e.overlap(this, new Array(this.start_drag_x, this.start_drag_y, this.end_drag_x, this.end_drag_y), true)) {
						if(this.current_xps && (Math.abs(this.current_xps) > Math.abs(this.current_yps) || this.horisontal)) {
							if(this.current_xps < 0) {
								this.swiped = "left";
							}
							else {
								this.swiped = "right";
							}
						}
						else if(this.current_yps && (Math.abs(this.current_xps) < Math.abs(this.current_yps) || this.vertical)) {
							if(this.current_yps < 0) {
								this.swiped = "up";
							}
							else {
								this.swiped = "down";
							}
						}
						u.a.translate(this, this.element_x, this.element_y);
					}
					else {
						this.swiped = false;
						this.current_xps = 0;
						this.current_yps = 0;
						if(this.element_x < this.start_drag_x && !this.vertical) {
							offset = this.element_x < this.start_drag_x - this.allowed_offset ? - this.allowed_offset : this.element_x - this.start_drag_x;
							this.element_x = this.start_drag_x;
							this.current_x = this.element_x + offset + (Math.round(Math.pow(offset, 2)/this.allowed_offset)/this.elastica);
						}
						else if(this.element_x + this.offsetWidth > this.end_drag_x && !this.vertical) {
							offset = this.element_x + this.offsetWidth > this.end_drag_x + this.allowed_offset ? this.allowed_offset : this.element_x + this.offsetWidth - this.end_drag_x;
							this.element_x = this.end_drag_x - this.offsetWidth;
							this.current_x = this.element_x + offset - (Math.round(Math.pow(offset, 2)/this.allowed_offset)/this.elastica);
						}
						else {
							this.current_x = this.element_x;
						}
						if(this.element_y < this.start_drag_y && !this.horisontal) {
							offset = this.element_y < this.start_drag_y - this.allowed_offset ? - this.allowed_offset : this.element_y - this.start_drag_y;
							this.element_y = this.start_drag_y;
							this.current_y = this.element_y + offset + (Math.round(Math.pow(offset, 2)/this.allowed_offset)/this.elastica);
						}
						else if(this.element_y + this.offsetHeight > this.end_drag_y && !this.horisontal) {
							offset = (this.element_y + this.offsetHeight > this.end_drag_y + this.allowed_offset) ? this.allowed_offset : (this.element_y + this.offsetHeight - this.end_drag_y);
							this.element_y = this.end_drag_y - this.offsetHeight;
							this.current_y = this.element_y + offset - (Math.round(Math.pow(offset, 2)/this.allowed_offset)/this.elastica);
						}
						else {
							this.current_y = this.element_y;
						}
						if(offset) {
							u.a.translate(this, this.current_x, this.current_y);
						}
					}
				}
			if(typeof(this.moved) == "function") {
				this.moved(event);
			}
	}
	this._drop = function(event) {
		u.e.resetEvents(this);
		if(this.e_swipe && this.swiped) {
			if(this.swiped == "left") {
				if(typeof(this.swipedLeft) == "function") {
					this.swipedLeft(event);
				}
			}
			else if(this.swiped == "right") {
				if(typeof(this.swipedRight) == "function") {
					this.swipedRight(event);
				}
			}
			else if(this.swiped == "down") {
				if(typeof(this.swipedDown) == "function") {
					this.swipedDown(event);
				}
			}
			else if(this.swiped == "up") {
				if(typeof(this.swipedUp) == "function") {
					this.swipedUp(event);
				}
			}
		}
		else if(!this.locked && this.start_input_x && this.start_input_y) {
			this.start_input_x = false;
			this.start_input_y = false;
			this.current_x = this.element_x + (this.current_xps/2);
			this.current_y = this.element_y + (this.current_yps/2);
			if(this.current_x < this.start_drag_x) {
				this.current_x = this.start_drag_x;
			}
			else if(this.current_x + this.offsetWidth > this.end_drag_x) {
				this.current_x = this.end_drag_x - this.offsetWidth;
			}
			if(this.current_y < this.start_drag_y) {
				this.current_y = this.start_drag_y;
			}
			else if(this.current_y + this.offsetHeight > this.end_drag_y) {
				this.current_y = this.end_drag_y - this.offsetHeight;
			}
			if(!this.strict && (this.current_xps || this.current_yps)) {
				u.a.transition(this, "all 1s cubic-bezier(0,0,0.25,1)");
			}
			else {
				u.a.transition(this, "all 0.1s cubic-bezier(0,0,0.25,1)");
			}
			u.a.translate(this, this.current_x, this.current_y);
		}
		if(typeof(this.dropped) == "function") {
			this.dropped(event);
		}
	}
	this.swipe = function(e, target, strict) {
		e.e_swipe = true;
		u.e.drag(e, target, strict);
	}
	this._swipe = function(event) {
	}
	this.scroll = function(e) {
		e.e_scroll = true;
		e.element_x = e.element_x ? e.element_x : 0;
		e.element_y = e.element_y ? e.element_y : 0;
		u.e.addStartEvent(e, this._inputStart);
	}
	this._scrollStart = function(event) {
		u.e.resetNestedEvents(this);
		this.move_timestamp = new Date().getTime();
		this.current_xps = 0;
		this.current_yps = 0;
		this.start_input_x = u.eventX(event) - this.element_x;
		this.start_input_y = u.eventY(event) - this.element_y;
		u.a.transition(this, "none");
		if(typeof(this.picked) == "function") {
			this.picked(event);
		}
		u.e.addMoveEvent(this, u.e._scrolling);
		u.e.addEndEvent(this, u.e._scrollEnd);
	}
	this._scrolling = function(event) {
		this.new_move_timestamp = new Date().getTime();
		this.current_x = u.eventX(event) - this.start_input_x;
		this.current_y = u.eventY(event) - this.start_input_y;
		this.current_xps = Math.round(((this.current_x - this.element_x) / (this.new_move_timestamp - this.move_timestamp)) * 1000);
		this.current_yps = Math.round(((this.current_y - this.element_y) / (this.new_move_timestamp - this.move_timestamp)) * 1000);
		this.move_timestamp = this.new_move_timestamp;
		if(u.scrollY() > 0 && -(this.current_y) + u.scrollY() > 0) {
			u.e.kill(event);
			window.scrollTo(0, -(this.current_y) + u.scrollY());
		}
		if(typeof(this.moved) == "function") {
			this.moved(event);
		}
	}
	this._scrollEnd = function(event) {
		u.e.resetEvents(this);
		if(typeof(this.dropped) == "function") {
			this.dropped(event);
		}
	}
	this._snapback = function(event) {
	    u.e.kill(event);
		u.bug(2, "snap")
		if(this.start_input_x && this.start_input_y) {
			input_x = event.targetTouches ? event.targetTouches[0].pageX : event.pageX;
			input_y = event.targetTouches ? event.targetTouches[0].pageY : event.pageY;
			offset_x = 0;
			offset_y = 0;
			if(this.vertical) {
				offset_y = input_y - this.current_y;
			}
			else if(this.horisontal) {
				offset_x = input_x - this.current_x;
			}
			else {
				offset_x = input_x - this.current_x;
				offset_y = input_y - this.current_y;
			}
			u.a.translate(this, (this.element_x+offset_x), (this.element_y+offset_y));
		}
	}
}

/*u-position.js*/
Util.absoluteX = u.absX = function(e) {
	if(e.offsetParent) {
		return e.offsetLeft + u.absX(e.offsetParent);
	}
	return e.offsetLeft;
}
Util.absoluteY = u.absY = function(e) {
	if(e.offsetParent) {
		return e.offsetTop + u.absY(e.offsetParent);
	}
	return e.offsetTop;
}
Util.relativeX = u.relX = function(e) {
	if(u.gcs(e, "position").match(/absolute/) == null && e.offsetParent && u.gcs(e.offsetParent, "position").match(/relative|absolute/) == null) {
		return e.offsetLeft + u.relX(e.offsetParent);
	}
	return e.offsetLeft;
}
Util.relativeY = u.relY = function(e) {
	if(u.gcs(e, "position").match(/relative|absolute/) == null && e.offsetParent && u.gcs(e.offsetParent, "position").match(/relative|absolute/) == null) {
		return e.offsetTop + u.relY(e.offsetParent);
	}
	return e.offsetTop;
}
Util.relativeOffsetX = u.relOffsetX = function(e) {
	if(e.offsetParent && u.gcs(e.offsetParent, "position").match(/relative|absoute/) != null) {
		return u.absX(e.offsetParent); // - e.offsetLeft u.relOffsetX(e.offsetParent);
	}
	return 0; //u.absX(e) - e.offsetLeft;
}
Util.relativeOffsetY = u.relOffsetY = function(e) {
	if(e.offsetParent && u.gcs(e.offsetParent, "position").match(/relative|absoute/) != null) {
		return u.absY(e.offsetParent);
	}
	return 0; // u.absY(e) - e.offsetTop;
}
Util.actualWidth = function(e) {
	return parseInt(u.gcs(e, "width"));
}
Util.actualHeight = function(e) {
	return parseInt(u.gcs(e, "height"));
}
Util.eventX = function(event){
	return (event.targetTouches ? event.targetTouches[0].pageX : event.pageX);
}
Util.eventY = function(event){
	return (event.targetTouches ? event.targetTouches[0].pageY : event.pageY);
}
Util.browserWidth = u.browserW = function() {
	return document.documentElement.clientWidth;
}
Util.browserHeight = u.browserH = function() {
	return document.documentElement.clientHeight;
}
Util.htmlWidth = u.htmlW = function() {
	return document.documentElement.offsetWidth;
}
Util.htmlHeight = u.htmlH = function() {
	return document.documentElement.offsetHeight;
}
Util.pageScrollX = u.scrollX = function() {
	return window.pageXOffset;
}
Util.pageScrollY = u.scrollY = function() {
	return window.pageYOffset;
}

/*u-init.js*/
Util.Objects = u.o = new Object();
Util.init = function() {
	var i, e, elements, ij_value;
	elements = u.ges("i\:([_a-zA-Z0-9])+");
	for(i = 0; e = elements[i]; i++) {
		while((ij_value = u.getIJ(e, "i"))) {
			u.removeClass(e, "i:"+ij_value);
			if(ij_value && typeof(u.o[ij_value]) == "object") {
				u.o[ij_value].init(e);
			}
		}
	}
}
u.e.addEvent(window, "load", u.init);

/*u-request.js*/
Util.createRequestObject = function(type) {
	var request_object = false;
		try {
			request_object = new XMLHttpRequest();
		}
		catch(e){
			request_object = new ActiveXObject("Microsoft.XMLHTTP");
		}
	if(request_object) {
		return request_object;
	}
	u.bug("Could not create HTTP Object");
	return false;
}
Util.Request = function(node, url, parameters, method, async) {
	if(typeof(node) != "object") {
		var node = new Object();
	}
	node.url = url;
	node.parameters = parameters ? parameters : "";
	node.method = method ? method : "GET";
	node.async = async ? async : false;
	if(node.method.match(/GET|POST|PUT|PATCH/i)) {
		node.HTTPRequest = this.createRequestObject();
		node.HTTPRequest.node = node;
		if(node.async) {
			node.HTTPRequest.onreadystatechange = function() {
				if(node.HTTPRequest.readyState == 4) {
					u.validateResponse(this);
				}
			}
		}
		try {
			if(node.method.match(/GET/i)) {
				node.url += node.parameters ? ((!node.url.match(/\?/g) ? "?" : "&") + node.parameters) : "";
				node.HTTPRequest.open(node.method, node.url, node.async);
				node.HTTPRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
				var csfr_field = u.qs('meta[name="csrf-token"]');
				if(csfr_field && csfr_field.content) {
					node.HTTPRequest.setRequestHeader("X-CSRF-Token", csfr_field.content);
				}
				node.HTTPRequest.send();
			}
			else if(node.method.match(/POST|PUT|PATCH/i)) {
				node.HTTPRequest.open(node.method, node.url, node.async);
				node.HTTPRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
				var csfr_field = u.qs('meta[name="csrf-token"]');
				if(csfr_field && csfr_field.content) {
					node.HTTPRequest.setRequestHeader("X-CSRF-Token", csfr_field.content);
				}
				node.HTTPRequest.send(node.parameters);
			}
		}
		catch(e) {
			u.bug("request exception:" + e);
			u.validateResponse(node.HTTPRequest);
			return;
		}
		if(!async) {
			u.validateResponse(node.HTTPRequest);
		}
	}
	else if(node.method.match(/SCRIPT/i)) {
		node.url = url;
		var key = u.randomString();
		document[key] = new Object();
		document[key].node = node;
		document[key].responder = function(response) {
			var response_object = new Object();
			response_object.node = this.node;
			response_object.responseText = response;
			u.validateResponse(response_object);
		}
		u.ae(u.qs("head"), "script", ({"type":"text/javascript", "src":node.url + "?" + parameters + "&callback=document."+key+".responder"}));
	}
}
Util.requestParameters = function() {
	u.bug("params:" + arguments.length)
}
Util.testResponseForJSON = function(responseText) {
	if(responseText.trim().substr(0, 1).match(/[\{\[]/i) && responseText.trim().substr(-1, 1).match(/[\}\]]/i)) {
		try {
			var test = eval("("+responseText+")");
			if(typeof(test) == "object") {
				test.isJSON = true;
				return test;
			}
		}
		catch(exception) {}
	}
	return false;
}
Util.testResponseForHTML = function(responseText) {
	if(responseText.trim().substr(0, 1).match(/[\<]/i) && responseText.trim().substr(-1, 1).match(/[\>]/i)) {
		try {
			var test = document.createElement("div");
			test.innerHTML = responseText;
			if(test.childNodes.length) {
				var body_class = responseText.match(/<body class="([a-z0-9A-Z_ ]+)"/);
				test.body_class = body_class ? body_class[1] : "";
				var head_title = responseText.match(/<title>([^$]+)<\/title>/);
				test.head_title = head_title ? head_title[1] : "";
				test.isHTML = true;
				return test;
			}
		}
		catch(exception) {}
	}
	return false;
}
Util.evaluateResponse = function(responseText) {
	var object;
	if(typeof(responseText) == "object") {
		responseText.isJSON = true;
		return responseText;
	}
	else {
		if(responseText.trim().substr(0, 1).match(/[\"\']/i) && responseText.trim().substr(-1, 1).match(/[\"\']/i)) {
				response_string = responseText.trim();
				var json = u.testResponseForJSON(response_string.substr(1, response_string.length-2));
				if(json) {
					return json;
				}
				var html = u.testResponseForHTML(response_string.substr(1, response_string.length-2));
				if(html) {
					return html;
				}
				return responseText;
		}
		var json = u.testResponseForJSON(responseText);
		if(json) {
			return json;
		}
		var html = u.testResponseForHTML(responseText);
		if(html) {
			return html;
		}
		return responseText;
	}
}
Util.validateResponse = function(response){
	var object;
	if(response) {
		try {
			if(response.status) {
				if(!response.status.toString().match(/403|404|500/)) {
					object = u.evaluateResponse(response.responseText);
				}
			}
			else {
				if(response.responseText) {
					object = u.evaluateResponse(response.responseText);
				}
			}
		}
		catch(exception) {
			u.bug("HTTPRequest exection:" + e);
		}
	}
	if(typeof(response.node.Response) == "function") {
		response.node.Response(object);
	}
}

/*u-string.js*/
Util.cutString = function(string, length) {
	var matches, i;
	if(string.length <= length) {
		return string;
	}
	else {
	length = length-3;
	}
	matches = string.match(/\&[\w\d]+\;/g);
	if(matches) {
		for(i = 0; match = matches[i]; i++){
			if(string.indexOf(match) < length){
				length += match.length-1;
			}
		}
	}
	return string.substring(0, length) + (string.length > length ? "..." : "");
}
Util.random = function(min, max) {
	return Math.round((Math.random() * (max - min)) + min);
}
Util.randomKey = function(length) {
	var key = "", i;
	length = length ? length : 8;
	var pattern = "1234567890abcdefghijklmnopqrstuvwxyz".split('');
	for(i = 0; i < length; i++) {
		key += pattern[u.random(0,35)];
	}
	return key;
}
Util.randomString = function(length) {
	var key = "", i;
	length = length ? length : 8;
	var pattern = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ".split('');
	for(i = 0; i < length; i++) {
		key += pattern[u.random(0,35)];
	}
	return key;
}
Util.uuid = function() {
	var chars = '0123456789abcdef'.split('');
	var uuid = [], rnd = Math.random, r, i;
	uuid[8] = uuid[13] = uuid[18] = uuid[23] = '-';
	uuid[14] = '4';
	for(i = 0; i < 36; i++) {
		if(!uuid[i]) {
			r = 0 | rnd()*16;
			uuid[i] = chars[(i == 19) ? (r & 0x3) | 0x8 : r & 0xf];
		}
 	}
	return uuid.join('');
}
Util.stringOr = function(value, replacement) {
	if(value !== undefined && value !== null) {
		return value;
	}
	else {
		return replacement ? replacement : "";
	}	
}
/*u-timer.js*/
Util.Timer = u.t = new function() {
	this.actions = new Array();
	this.objects = new Array();
	this.timers = new Array();
	this.setTimer = function(object, action, timeout) {
		var id = this.actions.length;
		this.actions[id] = action;
		this.objects[id] = object;
		this.timers[id] = setTimeout("u.t.executeTimer("+id+")", timeout);
		return id;
	}
	this.resetTimer = function(id) {
		clearTimeout(this.timers[id]);
		this.objects[id] = false;
	}
	this.executeTimer = function(id) {
		this.objects[id].exe = this.actions[id];
		this.objects[id].exe();
		this.objects[id].exe = null;
		this.actions[id] = null;
		this.objects[id] = false;
		this.timers[id] = null;
	}
	this.setInterval = function(object, action, timeout) {
		var id = this.actions.length;
		this.actions[id] = action;
		this.objects[id] = object;
		this.timers[id] = setInterval("u.t.executeInterval("+id+")", timeout);
		return id;
	}
	this.resetInterval = function(id) {
		clearInterval(this.timers[id]);
		this.objects[id] = false;
	}
	this.executeInterval = function(id) {
		this.objects[id].exe = this.actions[id];
		this.objects[id].exe();
	}
	this.valid = function(id) {
		return this.objects[id] ? true : false;
	}
}

/*u-array-desktop_light.js*/
if(!Array.prototype.unshift || new Array(1,2).unshift(0) != 3) {
	Array.prototype.unshift = function(a) {
		var b;
		this.reverse();
		b = this.push(a);
		this.reverse();
		return b
	};
}
if(!Array.prototype.shift) {
	Array.prototype.shift = function() {
		for(var i = 0, b = this[0], l = this.length-1; i < l; i++ ) {
			this[i] = this[i+1];
		}
		this.length--;
		return b;
	};
}
if(!Array.prototype.indexOf) {
	Array.prototype.indexOf = function (obj, start) {
		for(var i = (start || 0); i < this.length; i++) {
			if(this[i] == obj) {
				return i;
			}
		}
		return -1;
	}
}

/*u-dom-desktop_light.js*/
Util.getComputedStyle = u.gcs = function(e, attribute) {
	e.offsetHeight;
	if(document.defaultView && document.defaultView.getComputedStyle) {
		return document.defaultView.getComputedStyle(e, null).getPropertyValue(attribute);
	}
	else if(document.body.currentStyle && attribute != "opacity") {
		attribute = attribute.replace(/(-\w)/g, function(word){return word.replace(/-/, "").toUpperCase()});
		return e.currentStyle[attribute].replace("px", "");
	}
	else if(document.body.currentStyle && attribute == "opacity" && e.currentStyle["filter"]) {
		var match = e.currentStyle["filter"].match(/Opacity=([0-9]+)/);
		if(match) {
			return match[1]/100;
		}
	}
	return false;
}
Util.appendElement = u.ae = function(e, node_type, attributes) {
	try {
		var node = e.appendChild(document.createElement(node_type));
		if(attributes) {
			if(typeof(attributes) == "object") {
				for(attribute in attributes) {
					if(!document.all || (attribute != "class" && attribute != "type")) {
						node.setAttribute(attribute, attributes[attribute]);
					}
				}
				if(document.all && attributes["class"]) {
					u.addClass(node, attributes["class"]);
				}
				if(document.all && attributes["type"]) {
					node.type = attributes["type"];
				}
			}
			else {
				u.addClass(node, attributes)
			}
		}
		return node;
	}
	catch(exception) {
		u.bug("Exception ("+exception+") in u.ae, called from: "+arguments.callee.caller.name);
		u.bug("e="+e + ":nodename="+e.nodeName + ":"+(e.id ? ("id="+e.id) : ("classname="+e.className)) + ":node_type="+node_type+":attributes=" + attributes);
	}
}
Util.insertElement = u.ie = function(e, node_type, attributes) {
	var node = e.insertBefore(document.createElement(node_type), e.firstChild);
	if(attributes) {
		if(typeof(attributes) == "object") {
			for(attribute in attributes) {
				node.setAttribute(attribute, attributes[attribute]);
			}
			if(document.all && attributes["class"]) {
				u.addClass(node, attributes["class"]);
			}
		}
		else {
			u.addClass(node, attributes)
		}
	}
	return node;
}
if(document.querySelector == undefined) {
	(function(){
	var chunker = /((?:\((?:\([^()]+\)|[^()]+)+\)|\[(?:\[[^\[\]]*\]|['"][^'"]*['"]|[^\[\]'"]+)+\]|\\.|[^ >+~,(\[\\]+)+|[>+~])(\s*,\s*)?((?:.|\r|\n)*)/g,
		expando = "sizcache" + (Math.random() + '').replace('.', ''),
		done = 0,
		toString = Object.prototype.toString,
		hasDuplicate = false,
		baseHasDuplicate = true,
		rBackslash = /\\/g,
		rReturn = /\r\n/g,
		rNonWord = /\W/;
	[0, 0].sort(function() {
		baseHasDuplicate = false;
		return 0;
	});
	var Sizzle = function( selector, context, results, seed ) {
		results = results || [];
		context = context || document;
		var origContext = context;
		if ( context.nodeType !== 1 && context.nodeType !== 9 ) {
			return [];
		}
		if ( !selector || typeof selector !== "string" ) {
			return results;
		}
		var m, set, checkSet, extra, ret, cur, pop, i,
			prune = true,
			contextXML = Sizzle.isXML( context ),
			parts = [],
			soFar = selector;
		do {
			chunker.exec( "" );
			m = chunker.exec( soFar );
			if ( m ) {
				soFar = m[3];
				parts.push( m[1] );
				if ( m[2] ) {
					extra = m[3];
					break;
				}
			}
		} while ( m );
		if ( parts.length > 1 && origPOS.exec( selector ) ) {
			if ( parts.length === 2 && Expr.relative[ parts[0] ] ) {
				set = posProcess( parts[0] + parts[1], context, seed );
			} else {
				set = Expr.relative[ parts[0] ] ?
					[ context ] :
					Sizzle( parts.shift(), context );
				while ( parts.length ) {
					selector = parts.shift();
					if ( Expr.relative[ selector ] ) {
						selector += parts.shift();
					}
					set = posProcess( selector, set, seed );
				}
			}
		} else {
			if ( !seed && parts.length > 1 && context.nodeType === 9 && !contextXML &&
					Expr.match.ID.test(parts[0]) && !Expr.match.ID.test(parts[parts.length - 1]) ) {
				ret = Sizzle.find( parts.shift(), context, contextXML );
				context = ret.expr ?
					Sizzle.filter( ret.expr, ret.set )[0] :
					ret.set[0];
			}
			if ( context ) {
				ret = seed ?
					{ expr: parts.pop(), set: makeArray(seed) } :
					Sizzle.find( parts.pop(), parts.length === 1 && (parts[0] === "~" || parts[0] === "+") && context.parentNode ? context.parentNode : context, contextXML );
				set = ret.expr ?
					Sizzle.filter( ret.expr, ret.set ) :
					ret.set;
				if ( parts.length > 0 ) {
					checkSet = makeArray( set );
				} else {
					prune = false;
				}
				while ( parts.length ) {
					cur = parts.pop();
					pop = cur;
					if ( !Expr.relative[ cur ] ) {
						cur = "";
					} else {
						pop = parts.pop();
					}
					if ( pop == null ) {
						pop = context;
					}
					Expr.relative[ cur ]( checkSet, pop, contextXML );
				}
			} else {
				checkSet = parts = [];
			}
		}
		if ( !checkSet ) {
			checkSet = set;
		}
		if ( !checkSet ) {
			Sizzle.error( cur || selector );
		}
		if ( toString.call(checkSet) === "[object Array]" ) {
			if ( !prune ) {
				results.push.apply( results, checkSet );
			} else if ( context && context.nodeType === 1 ) {
				for ( i = 0; checkSet[i] != null; i++ ) {
					if ( checkSet[i] && (checkSet[i] === true || checkSet[i].nodeType === 1 && Sizzle.contains(context, checkSet[i])) ) {
						results.push( set[i] );
					}
				}
			} else {
				for ( i = 0; checkSet[i] != null; i++ ) {
					if ( checkSet[i] && checkSet[i].nodeType === 1 ) {
						results.push( set[i] );
					}
				}
			}
		} else {
			makeArray( checkSet, results );
		}
		if ( extra ) {
			Sizzle( extra, origContext, results, seed );
			Sizzle.uniqueSort( results );
		}
		return results;
	};
	Sizzle.uniqueSort = function( results ) {
		if ( sortOrder ) {
			hasDuplicate = baseHasDuplicate;
			results.sort( sortOrder );
			if ( hasDuplicate ) {
				for ( var i = 1; i < results.length; i++ ) {
					if ( results[i] === results[ i - 1 ] ) {
						results.splice( i--, 1 );
					}
				}
			}
		}
		return results;
	};
	Sizzle.matches = function( expr, set ) {
		return Sizzle( expr, null, null, set );
	};
	Sizzle.matchesSelector = function( node, expr ) {
		return Sizzle( expr, null, null, [node] ).length > 0;
	};
	Sizzle.find = function( expr, context, isXML ) {
		var set, i, len, match, type, left;
		if ( !expr ) {
			return [];
		}
		for ( i = 0, len = Expr.order.length; i < len; i++ ) {
			type = Expr.order[i];
			if ( (match = Expr.leftMatch[ type ].exec( expr )) ) {
				left = match[1];
				match.splice( 1, 1 );
				if ( left.substr( left.length - 1 ) !== "\\" ) {
					match[1] = (match[1] || "").replace( rBackslash, "" );
					set = Expr.find[ type ]( match, context, isXML );
					if ( set != null ) {
						expr = expr.replace( Expr.match[ type ], "" );
						break;
					}
				}
			}
		}
		if ( !set ) {
			set = typeof context.getElementsByTagName !== "undefined" ?
				context.getElementsByTagName( "*" ) :
				[];
		}
		return { set: set, expr: expr };
	};
	Sizzle.filter = function( expr, set, inplace, not ) {
		var match, anyFound,
			type, found, item, filter, left,
			i, pass,
			old = expr,
			result = [],
			curLoop = set,
			isXMLFilter = set && set[0] && Sizzle.isXML( set[0] );
		while ( expr && set.length ) {
			for ( type in Expr.filter ) {
				if ( (match = Expr.leftMatch[ type ].exec( expr )) != null && match[2] ) {
					filter = Expr.filter[ type ];
					left = match[1];
					anyFound = false;
					match.splice(1,1);
					if ( left.substr( left.length - 1 ) === "\\" ) {
						continue;
					}
					if ( curLoop === result ) {
						result = [];
					}
					if ( Expr.preFilter[ type ] ) {
						match = Expr.preFilter[ type ]( match, curLoop, inplace, result, not, isXMLFilter );
						if ( !match ) {
							anyFound = found = true;
						} else if ( match === true ) {
							continue;
						}
					}
					if ( match ) {
						for ( i = 0; (item = curLoop[i]) != null; i++ ) {
							if ( item ) {
								found = filter( item, match, i, curLoop );
								pass = not ^ found;
								if ( inplace && found != null ) {
									if ( pass ) {
										anyFound = true;
									} else {
										curLoop[i] = false;
									}
								} else if ( pass ) {
									result.push( item );
									anyFound = true;
								}
							}
						}
					}
					if ( found !== undefined ) {
						if ( !inplace ) {
							curLoop = result;
						}
						expr = expr.replace( Expr.match[ type ], "" );
						if ( !anyFound ) {
							return [];
						}
						break;
					}
				}
			}
			if ( expr === old ) {
				if ( anyFound == null ) {
					Sizzle.error( expr );
				} else {
					break;
				}
			}
			old = expr;
		}
		return curLoop;
	};
	Sizzle.error = function( msg ) {
		throw new Error( "Syntax error, unrecognized expression: " + msg );
	};
	var getText = Sizzle.getText = function( elem ) {
	    var i, node,
			nodeType = elem.nodeType,
			ret = "";
		if ( nodeType ) {
			if ( nodeType === 1 || nodeType === 9 ) {
				if ( typeof elem.textContent === 'string' ) {
					return elem.textContent;
				} else if ( typeof elem.innerText === 'string' ) {
					return elem.innerText.replace( rReturn, '' );
				} else {
					for ( elem = elem.firstChild; elem; elem = elem.nextSibling) {
						ret += getText( elem );
					}
				}
			} else if ( nodeType === 3 || nodeType === 4 ) {
				return elem.nodeValue;
			}
		} else {
			for ( i = 0; (node = elem[i]); i++ ) {
				if ( node.nodeType !== 8 ) {
					ret += getText( node );
				}
			}
		}
		return ret;
	};
	var Expr = Sizzle.selectors = {
		order: [ "ID", "NAME", "TAG" ],
		match: {
			ID: /#((?:[\w\u00c0-\uFFFF\-]|\\.)+)/,
			CLASS: /\.((?:[\w\u00c0-\uFFFF\-]|\\.)+)/,
			NAME: /\[name=['"]*((?:[\w\u00c0-\uFFFF\-]|\\.)+)['"]*\]/,
			ATTR: /\[\s*((?:[\w\u00c0-\uFFFF\-]|\\.)+)\s*(?:(\S?=)\s*(?:(['"])(.*?)\3|(#?(?:[\w\u00c0-\uFFFF\-]|\\.)*)|)|)\s*\]/,
			TAG: /^((?:[\w\u00c0-\uFFFF\*\-]|\\.)+)/,
			CHILD: /:(only|nth|last|first)-child(?:\(\s*(even|odd|(?:[+\-]?\d+|(?:[+\-]?\d*)?n\s*(?:[+\-]\s*\d+)?))\s*\))?/,
			POS: /:(nth|eq|gt|lt|first|last|even|odd)(?:\((\d*)\))?(?=[^\-]|$)/,
			PSEUDO: /:((?:[\w\u00c0-\uFFFF\-]|\\.)+)(?:\((['"]?)((?:\([^\)]+\)|[^\(\)]*)+)\2\))?/
		},
		leftMatch: {},
		attrMap: {
			"class": "className",
			"for": "htmlFor"
		},
		attrHandle: {
			href: function( elem ) {
				return elem.getAttribute( "href" );
			},
			type: function( elem ) {
				return elem.getAttribute( "type" );
			}
		},
		relative: {
			"+": function(checkSet, part){
				var isPartStr = typeof part === "string",
					isTag = isPartStr && !rNonWord.test( part ),
					isPartStrNotTag = isPartStr && !isTag;
				if ( isTag ) {
					part = part.toLowerCase();
				}
				for ( var i = 0, l = checkSet.length, elem; i < l; i++ ) {
					if ( (elem = checkSet[i]) ) {
						while ( (elem = elem.previousSibling) && elem.nodeType !== 1 ) {}
						checkSet[i] = isPartStrNotTag || elem && elem.nodeName.toLowerCase() === part ?
							elem || false :
							elem === part;
					}
				}
				if ( isPartStrNotTag ) {
					Sizzle.filter( part, checkSet, true );
				}
			},
			">": function( checkSet, part ) {
				var elem,
					isPartStr = typeof part === "string",
					i = 0,
					l = checkSet.length;
				if ( isPartStr && !rNonWord.test( part ) ) {
					part = part.toLowerCase();
					for ( ; i < l; i++ ) {
						elem = checkSet[i];
						if ( elem ) {
							var parent = elem.parentNode;
							checkSet[i] = parent.nodeName.toLowerCase() === part ? parent : false;
						}
					}
				} else {
					for ( ; i < l; i++ ) {
						elem = checkSet[i];
						if ( elem ) {
							checkSet[i] = isPartStr ?
								elem.parentNode :
								elem.parentNode === part;
						}
					}
					if ( isPartStr ) {
						Sizzle.filter( part, checkSet, true );
					}
				}
			},
			"": function(checkSet, part, isXML){
				var nodeCheck,
					doneName = done++,
					checkFn = dirCheck;
				if ( typeof part === "string" && !rNonWord.test( part ) ) {
					part = part.toLowerCase();
					nodeCheck = part;
					checkFn = dirNodeCheck;
				}
				checkFn( "parentNode", part, doneName, checkSet, nodeCheck, isXML );
			},
			"~": function( checkSet, part, isXML ) {
				var nodeCheck,
					doneName = done++,
					checkFn = dirCheck;
				if ( typeof part === "string" && !rNonWord.test( part ) ) {
					part = part.toLowerCase();
					nodeCheck = part;
					checkFn = dirNodeCheck;
				}
				checkFn( "previousSibling", part, doneName, checkSet, nodeCheck, isXML );
			}
		},
		find: {
			ID: function( match, context, isXML ) {
				if ( typeof context.getElementById !== "undefined" && !isXML ) {
					var m = context.getElementById(match[1]);
					return m && m.parentNode ? [m] : [];
				}
			},
			NAME: function( match, context ) {
				if ( typeof context.getElementsByName !== "undefined" ) {
					var ret = [],
						results = context.getElementsByName( match[1] );
					for ( var i = 0, l = results.length; i < l; i++ ) {
						if ( results[i].getAttribute("name") === match[1] ) {
							ret.push( results[i] );
						}
					}
					return ret.length === 0 ? null : ret;
				}
			},
			TAG: function( match, context ) {
				if ( typeof context.getElementsByTagName !== "undefined" ) {
					return context.getElementsByTagName( match[1] );
				}
			}
		},
		preFilter: {
			CLASS: function( match, curLoop, inplace, result, not, isXML ) {
				match = " " + match[1].replace( rBackslash, "" ) + " ";
				if ( isXML ) {
					return match;
				}
				for ( var i = 0, elem; (elem = curLoop[i]) != null; i++ ) {
					if ( elem ) {
						if ( not ^ (elem.className && (" " + elem.className + " ").replace(/[\t\n\r]/g, " ").indexOf(match) >= 0) ) {
							if ( !inplace ) {
								result.push( elem );
							}
						} else if ( inplace ) {
							curLoop[i] = false;
						}
					}
				}
				return false;
			},
			ID: function( match ) {
				return match[1].replace( rBackslash, "" );
			},
			TAG: function( match, curLoop ) {
				return match[1].replace( rBackslash, "" ).toLowerCase();
			},
			CHILD: function( match ) {
				if ( match[1] === "nth" ) {
					if ( !match[2] ) {
						Sizzle.error( match[0] );
					}
					match[2] = match[2].replace(/^\+|\s*/g, '');
					var test = /(-?)(\d*)(?:n([+\-]?\d*))?/.exec(
						match[2] === "even" && "2n" || match[2] === "odd" && "2n+1" ||
						!/\D/.test( match[2] ) && "0n+" + match[2] || match[2]);
					match[2] = (test[1] + (test[2] || 1)) - 0;
					match[3] = test[3] - 0;
				}
				else if ( match[2] ) {
					Sizzle.error( match[0] );
				}
				match[0] = done++;
				return match;
			},
			ATTR: function( match, curLoop, inplace, result, not, isXML ) {
				var name = match[1] = match[1].replace( rBackslash, "" );
				if ( !isXML && Expr.attrMap[name] ) {
					match[1] = Expr.attrMap[name];
				}
				match[4] = ( match[4] || match[5] || "" ).replace( rBackslash, "" );
				if ( match[2] === "~=" ) {
					match[4] = " " + match[4] + " ";
				}
				return match;
			},
			PSEUDO: function( match, curLoop, inplace, result, not ) {
				if ( match[1] === "not" ) {
					if ( ( chunker.exec(match[3]) || "" ).length > 1 || /^\w/.test(match[3]) ) {
						match[3] = Sizzle(match[3], null, null, curLoop);
					} else {
						var ret = Sizzle.filter(match[3], curLoop, inplace, true ^ not);
						if ( !inplace ) {
							result.push.apply( result, ret );
						}
						return false;
					}
				} else if ( Expr.match.POS.test( match[0] ) || Expr.match.CHILD.test( match[0] ) ) {
					return true;
				}
				return match;
			},
			POS: function( match ) {
				match.unshift( true );
				return match;
			}
		},
		filters: {
			enabled: function( elem ) {
				return elem.disabled === false && elem.type !== "hidden";
			},
			disabled: function( elem ) {
				return elem.disabled === true;
			},
			checked: function( elem ) {
				return elem.checked === true;
			},
			selected: function( elem ) {
				if ( elem.parentNode ) {
					elem.parentNode.selectedIndex;
				}
				return elem.selected === true;
			},
			parent: function( elem ) {
				return !!elem.firstChild;
			},
			empty: function( elem ) {
				return !elem.firstChild;
			},
			has: function( elem, i, match ) {
				return !!Sizzle( match[3], elem ).length;
			},
			header: function( elem ) {
				return (/h\d/i).test( elem.nodeName );
			},
			text: function( elem ) {
				var attr = elem.getAttribute( "type" ), type = elem.type;
				return elem.nodeName.toLowerCase() === "input" && "text" === type && ( attr === type || attr === null );
			},
			radio: function( elem ) {
				return elem.nodeName.toLowerCase() === "input" && "radio" === elem.type;
			},
			checkbox: function( elem ) {
				return elem.nodeName.toLowerCase() === "input" && "checkbox" === elem.type;
			},
			file: function( elem ) {
				return elem.nodeName.toLowerCase() === "input" && "file" === elem.type;
			},
			password: function( elem ) {
				return elem.nodeName.toLowerCase() === "input" && "password" === elem.type;
			},
			submit: function( elem ) {
				var name = elem.nodeName.toLowerCase();
				return (name === "input" || name === "button") && "submit" === elem.type;
			},
			image: function( elem ) {
				return elem.nodeName.toLowerCase() === "input" && "image" === elem.type;
			},
			reset: function( elem ) {
				var name = elem.nodeName.toLowerCase();
				return (name === "input" || name === "button") && "reset" === elem.type;
			},
			button: function( elem ) {
				var name = elem.nodeName.toLowerCase();
				return name === "input" && "button" === elem.type || name === "button";
			},
			input: function( elem ) {
				return (/input|select|textarea|button/i).test( elem.nodeName );
			},
			focus: function( elem ) {
				return elem === elem.ownerDocument.activeElement;
			}
		},
		setFilters: {
			first: function( elem, i ) {
				return i === 0;
			},
			last: function( elem, i, match, array ) {
				return i === array.length - 1;
			},
			even: function( elem, i ) {
				return i % 2 === 0;
			},
			odd: function( elem, i ) {
				return i % 2 === 1;
			},
			lt: function( elem, i, match ) {
				return i < match[3] - 0;
			},
			gt: function( elem, i, match ) {
				return i > match[3] - 0;
			},
			nth: function( elem, i, match ) {
				return match[3] - 0 === i;
			},
			eq: function( elem, i, match ) {
				return match[3] - 0 === i;
			}
		},
		filter: {
			PSEUDO: function( elem, match, i, array ) {
				var name = match[1],
					filter = Expr.filters[ name ];
				if ( filter ) {
					return filter( elem, i, match, array );
				} else if ( name === "contains" ) {
					return (elem.textContent || elem.innerText || getText([ elem ]) || "").indexOf(match[3]) >= 0;
				} else if ( name === "not" ) {
					var not = match[3];
					for ( var j = 0, l = not.length; j < l; j++ ) {
						if ( not[j] === elem ) {
							return false;
						}
					}
					return true;
				} else {
					Sizzle.error( name );
				}
			},
			CHILD: function( elem, match ) {
				var first, last,
					doneName, parent, cache,
					count, diff,
					type = match[1],
					node = elem;
				switch ( type ) {
					case "only":
					case "first":
						while ( (node = node.previousSibling) ) {
							if ( node.nodeType === 1 ) {
								return false;
							}
						}
						if ( type === "first" ) {
							return true;
						}
						node = elem;
					case "last":
						while ( (node = node.nextSibling) ) {
							if ( node.nodeType === 1 ) {
								return false;
							}
						}
						return true;
					case "nth":
						first = match[2];
						last = match[3];
						if ( first === 1 && last === 0 ) {
							return true;
						}
						doneName = match[0];
						parent = elem.parentNode;
						if ( parent && (parent[ expando ] !== doneName || !elem.nodeIndex) ) {
							count = 0;
							for ( node = parent.firstChild; node; node = node.nextSibling ) {
								if ( node.nodeType === 1 ) {
									node.nodeIndex = ++count;
								}
							}
							parent[ expando ] = doneName;
						}
						diff = elem.nodeIndex - last;
						if ( first === 0 ) {
							return diff === 0;
						} else {
							return ( diff % first === 0 && diff / first >= 0 );
						}
				}
			},
			ID: function( elem, match ) {
				return elem.nodeType === 1 && elem.getAttribute("id") === match;
			},
			TAG: function( elem, match ) {
				return (match === "*" && elem.nodeType === 1) || !!elem.nodeName && elem.nodeName.toLowerCase() === match;
			},
			CLASS: function( elem, match ) {
				return (" " + (elem.className || elem.getAttribute("class")) + " ")
					.indexOf( match ) > -1;
			},
			ATTR: function( elem, match ) {
				var name = match[1],
					result = Sizzle.attr ?
						Sizzle.attr( elem, name ) :
						Expr.attrHandle[ name ] ?
						Expr.attrHandle[ name ]( elem ) :
						elem[ name ] != null ?
							elem[ name ] :
							elem.getAttribute( name ),
					value = result + "",
					type = match[2],
					check = match[4];
				return result == null ?
					type === "!=" :
					!type && Sizzle.attr ?
					result != null :
					type === "=" ?
					value === check :
					type === "*=" ?
					value.indexOf(check) >= 0 :
					type === "~=" ?
					(" " + value + " ").indexOf(check) >= 0 :
					!check ?
					value && result !== false :
					type === "!=" ?
					value !== check :
					type === "^=" ?
					value.indexOf(check) === 0 :
					type === "$=" ?
					value.substr(value.length - check.length) === check :
					type === "|=" ?
					value === check || value.substr(0, check.length + 1) === check + "-" :
					false;
			},
			POS: function( elem, match, i, array ) {
				var name = match[2],
					filter = Expr.setFilters[ name ];
				if ( filter ) {
					return filter( elem, i, match, array );
				}
			}
		}
	};
	var origPOS = Expr.match.POS,
		fescape = function(all, num){
			return "\\" + (num - 0 + 1);
		};
	for ( var type in Expr.match ) {
		Expr.match[ type ] = new RegExp( Expr.match[ type ].source + (/(?![^\[]*\])(?![^\(]*\))/.source) );
		Expr.leftMatch[ type ] = new RegExp( /(^(?:.|\r|\n)*?)/.source + Expr.match[ type ].source.replace(/\\(\d+)/g, fescape) );
	}
	Expr.match.globalPOS = origPOS;
	var makeArray = function( array, results ) {
		array = Array.prototype.slice.call( array, 0 );
		if ( results ) {
			results.push.apply( results, array );
			return results;
		}
		return array;
	};
	try {
		Array.prototype.slice.call( document.documentElement.childNodes, 0 )[0].nodeType;
	} catch( e ) {
		makeArray = function( array, results ) {
			var i = 0,
				ret = results || [];
			if ( toString.call(array) === "[object Array]" ) {
				Array.prototype.push.apply( ret, array );
			} else {
				if ( typeof array.length === "number" ) {
					for ( var l = array.length; i < l; i++ ) {
						ret.push( array[i] );
					}
				} else {
					for ( ; array[i]; i++ ) {
						ret.push( array[i] );
					}
				}
			}
			return ret;
		};
	}
	var sortOrder, siblingCheck;
	if ( document.documentElement.compareDocumentPosition ) {
		sortOrder = function( a, b ) {
			if ( a === b ) {
				hasDuplicate = true;
				return 0;
			}
			if ( !a.compareDocumentPosition || !b.compareDocumentPosition ) {
				return a.compareDocumentPosition ? -1 : 1;
			}
			return a.compareDocumentPosition(b) & 4 ? -1 : 1;
		};
	} else {
		sortOrder = function( a, b ) {
			if ( a === b ) {
				hasDuplicate = true;
				return 0;
			} else if ( a.sourceIndex && b.sourceIndex ) {
				return a.sourceIndex - b.sourceIndex;
			}
			var al, bl,
				ap = [],
				bp = [],
				aup = a.parentNode,
				bup = b.parentNode,
				cur = aup;
			if ( aup === bup ) {
				return siblingCheck( a, b );
			} else if ( !aup ) {
				return -1;
			} else if ( !bup ) {
				return 1;
			}
			while ( cur ) {
				ap.unshift( cur );
				cur = cur.parentNode;
			}
			cur = bup;
			while ( cur ) {
				bp.unshift( cur );
				cur = cur.parentNode;
			}
			al = ap.length;
			bl = bp.length;
			for ( var i = 0; i < al && i < bl; i++ ) {
				if ( ap[i] !== bp[i] ) {
					return siblingCheck( ap[i], bp[i] );
				}
			}
			return i === al ?
				siblingCheck( a, bp[i], -1 ) :
				siblingCheck( ap[i], b, 1 );
		};
		siblingCheck = function( a, b, ret ) {
			if ( a === b ) {
				return ret;
			}
			var cur = a.nextSibling;
			while ( cur ) {
				if ( cur === b ) {
					return -1;
				}
				cur = cur.nextSibling;
			}
			return 1;
		};
	}
	(function(){
		var form = document.createElement("div"),
			id = "script" + (new Date()).getTime(),
			root = document.documentElement;
		form.innerHTML = "<a name='" + id + "'/>";
		root.insertBefore( form, root.firstChild );
		if ( document.getElementById( id ) ) {
			Expr.find.ID = function( match, context, isXML ) {
				if ( typeof context.getElementById !== "undefined" && !isXML ) {
					var m = context.getElementById(match[1]);
					return m ?
						m.id === match[1] || typeof m.getAttributeNode !== "undefined" && m.getAttributeNode("id").nodeValue === match[1] ?
							[m] :
							undefined :
						[];
				}
			};
			Expr.filter.ID = function( elem, match ) {
				var node = typeof elem.getAttributeNode !== "undefined" && elem.getAttributeNode("id");
				return elem.nodeType === 1 && node && node.nodeValue === match;
			};
		}
		root.removeChild( form );
		root = form = null;
	})();
	(function(){
		var div = document.createElement("div");
		div.appendChild( document.createComment("") );
		if ( div.getElementsByTagName("*").length > 0 ) {
			Expr.find.TAG = function( match, context ) {
				var results = context.getElementsByTagName( match[1] );
				if ( match[1] === "*" ) {
					var tmp = [];
					for ( var i = 0; results[i]; i++ ) {
						if ( results[i].nodeType === 1 ) {
							tmp.push( results[i] );
						}
					}
					results = tmp;
				}
				return results;
			};
		}
		div.innerHTML = "<a href='#'></a>";
		if ( div.firstChild && typeof div.firstChild.getAttribute !== "undefined" &&
				div.firstChild.getAttribute("href") !== "#" ) {
			Expr.attrHandle.href = function( elem ) {
				return elem.getAttribute( "href", 2 );
			};
		}
		div = null;
	})();
	if ( document.querySelectorAll ) {
		(function(){
			var oldSizzle = Sizzle,
				div = document.createElement("div"),
				id = "__sizzle__";
			div.innerHTML = "<p class='TEST'></p>";
			if ( div.querySelectorAll && div.querySelectorAll(".TEST").length === 0 ) {
				return;
			}
			Sizzle = function( query, context, extra, seed ) {
				context = context || document;
				if ( !seed && !Sizzle.isXML(context) ) {
					var match = /^(\w+$)|^\.([\w\-]+$)|^#([\w\-]+$)/.exec( query );
					if ( match && (context.nodeType === 1 || context.nodeType === 9) ) {
						if ( match[1] ) {
							return makeArray( context.getElementsByTagName( query ), extra );
						} else if ( match[2] && Expr.find.CLASS && context.getElementsByClassName ) {
							return makeArray( context.getElementsByClassName( match[2] ), extra );
						}
					}
					if ( context.nodeType === 9 ) {
						if ( query === "body" && context.body ) {
							return makeArray( [ context.body ], extra );
						} else if ( match && match[3] ) {
							var elem = context.getElementById( match[3] );
							if ( elem && elem.parentNode ) {
								if ( elem.id === match[3] ) {
									return makeArray( [ elem ], extra );
								}
							} else {
								return makeArray( [], extra );
							}
						}
						try {
							return makeArray( context.querySelectorAll(query), extra );
						} catch(qsaError) {}
					} else if ( context.nodeType === 1 && context.nodeName.toLowerCase() !== "object" ) {
						var oldContext = context,
							old = context.getAttribute( "id" ),
							nid = old || id,
							hasParent = context.parentNode,
							relativeHierarchySelector = /^\s*[+~]/.test( query );
						if ( !old ) {
							context.setAttribute( "id", nid );
						} else {
							nid = nid.replace( /'/g, "\\$&" );
						}
						if ( relativeHierarchySelector && hasParent ) {
							context = context.parentNode;
						}
						try {
							if ( !relativeHierarchySelector || hasParent ) {
								return makeArray( context.querySelectorAll( "[id='" + nid + "'] " + query ), extra );
							}
						} catch(pseudoError) {
						} finally {
							if ( !old ) {
								oldContext.removeAttribute( "id" );
							}
						}
					}
				}
				return oldSizzle(query, context, extra, seed);
			};
			for ( var prop in oldSizzle ) {
				Sizzle[ prop ] = oldSizzle[ prop ];
			}
			div = null;
		})();
	}
	(function(){
		var html = document.documentElement,
			matches = html.matchesSelector || html.mozMatchesSelector || html.webkitMatchesSelector || html.msMatchesSelector;
		if ( matches ) {
			var disconnectedMatch = !matches.call( document.createElement( "div" ), "div" ),
				pseudoWorks = false;
			try {
				matches.call( document.documentElement, "[test!='']:sizzle" );
			} catch( pseudoError ) {
				pseudoWorks = true;
			}
			Sizzle.matchesSelector = function( node, expr ) {
				expr = expr.replace(/\=\s*([^'"\]]*)\s*\]/g, "='$1']");
				if ( !Sizzle.isXML( node ) ) {
					try {
						if ( pseudoWorks || !Expr.match.PSEUDO.test( expr ) && !/!=/.test( expr ) ) {
							var ret = matches.call( node, expr );
							if ( ret || !disconnectedMatch ||
									node.document && node.document.nodeType !== 11 ) {
								return ret;
							}
						}
					} catch(e) {}
				}
				return Sizzle(expr, null, null, [node]).length > 0;
			};
		}
	})();
	(function(){
		var div = document.createElement("div");
		div.innerHTML = "<div class='test e'></div><div class='test'></div>";
		if ( !div.getElementsByClassName || div.getElementsByClassName("e").length === 0 ) {
			return;
		}
		div.lastChild.className = "e";
		if ( div.getElementsByClassName("e").length === 1 ) {
			return;
		}
		Expr.order.splice(1, 0, "CLASS");
		Expr.find.CLASS = function( match, context, isXML ) {
			if ( typeof context.getElementsByClassName !== "undefined" && !isXML ) {
				return context.getElementsByClassName(match[1]);
			}
		};
		div = null;
	})();
	function dirNodeCheck( dir, cur, doneName, checkSet, nodeCheck, isXML ) {
		for ( var i = 0, l = checkSet.length; i < l; i++ ) {
			var elem = checkSet[i];
			if ( elem ) {
				var match = false;
				elem = elem[dir];
				while ( elem ) {
					if ( elem[ expando ] === doneName ) {
						match = checkSet[elem.sizset];
						break;
					}
					if ( elem.nodeType === 1 && !isXML ){
						elem[ expando ] = doneName;
						elem.sizset = i;
					}
					if ( elem.nodeName.toLowerCase() === cur ) {
						match = elem;
						break;
					}
					elem = elem[dir];
				}
				checkSet[i] = match;
			}
		}
	}
	function dirCheck( dir, cur, doneName, checkSet, nodeCheck, isXML ) {
		for ( var i = 0, l = checkSet.length; i < l; i++ ) {
			var elem = checkSet[i];
			if ( elem ) {
				var match = false;
				elem = elem[dir];
				while ( elem ) {
					if ( elem[ expando ] === doneName ) {
						match = checkSet[elem.sizset];
						break;
					}
					if ( elem.nodeType === 1 ) {
						if ( !isXML ) {
							elem[ expando ] = doneName;
							elem.sizset = i;
						}
						if ( typeof cur !== "string" ) {
							if ( elem === cur ) {
								match = true;
								break;
							}
						} else if ( Sizzle.filter( cur, [elem] ).length > 0 ) {
							match = elem;
							break;
						}
					}
					elem = elem[dir];
				}
				checkSet[i] = match;
			}
		}
	}
	if ( document.documentElement.contains ) {
		Sizzle.contains = function( a, b ) {
			return a !== b && (a.contains ? a.contains(b) : true);
		};
	} else if ( document.documentElement.compareDocumentPosition ) {
		Sizzle.contains = function( a, b ) {
			return !!(a.compareDocumentPosition(b) & 16);
		};
	} else {
		Sizzle.contains = function() {
			return false;
		};
	}
	Sizzle.isXML = function( elem ) {
		var documentElement = (elem ? elem.ownerDocument || elem : 0).documentElement;
		return documentElement ? documentElement.nodeName !== "HTML" : false;
	};
	var posProcess = function( selector, context, seed ) {
		var match,
			tmpSet = [],
			later = "",
			root = context.nodeType ? [context] : context;
		while ( (match = Expr.match.PSEUDO.exec( selector )) ) {
			later += match[0];
			selector = selector.replace( Expr.match.PSEUDO, "" );
		}
		selector = Expr.relative[selector] ? selector + "*" : selector;
		for ( var i = 0, l = root.length; i < l; i++ ) {
			Sizzle( selector, root[i], tmpSet, seed );
		}
		return Sizzle.filter( later, tmpSet );
	};
	window.Sizzle = Sizzle;
	})();
	Util.querySelector = u.qs = function(query, target) {
		var res = Sizzle(query, target);
		return res[0];
	}
	Util.querySelectorAll = u.qsa = function(query, target) {
		var res = Sizzle(query, target);
		return res;
	}
}

/*u-events-desktop_ie.js*/
if(document.all) {
	window.attachedEvents = new Array();
	window.eventHandler = function() {
		var element, eid, i;
		element = window.event.srcElement;
		while(element && element.nodeName != "HTML") {
			eid = u.getIJ(element, "eid");
			if(eid && window.attachedEvents[eid] && window.attachedEvents[eid][window.event.type]) {
				var i, attachedAction;
				for(i = 0; attachedAction = window.attachedEvents[eid][window.event.type][i]; i++) {
					window.event.target = element;
					element.ie_event_action = attachedAction;
					element.ie_event_action(window.event);
				}
				return;
			}
			element = element.parentNode;
		}
		if(window.attachedEvents["window"] && window.attachedEvents["window"][window.event.type]) {
			var i, attachedAction;
			for(i = 0; attachedAction = window.attachedEvents["window"][window.event.type][i]; i++) {
				window.event.target = window;
				window.ie_event_action = attachedAction;
				window.ie_event_action(window.event);
			}
			return;
		}
	}
	u.e.event_pref = "mouse";
	u.e.kill = function(event) {
		if(event) {
			event.cancelBubble = true;
			event.returnValue = false;
		}
	}
	u.e.addEvent = function(e, type, action) {
		if(e != window) {
			var eid = u.getIJ(e, "eid");
			if(!eid) {
				var eid = u.randomKey();
				u.ac(e, "eid:"+eid)
			}
		}
		else {
			eid = "window";
		}
		if(!window.attachedEvents[eid]) {
			window.attachedEvents[eid] = new Array();
		}
		if(!window.attachedEvents[eid][type]) {
			window.attachedEvents[eid][type] = new Array();
		}
		if(window.attachedEvents[eid][type].indexOf(action) == -1) {
			window.attachedEvents[eid][type][window.attachedEvents[eid][type].length] = action;
		}
		e.attachEvent("on"+type, window.eventHandler);
	}
	u.e.removeEvent = function(e, type, action) {
		if(e != window) {
			var eid = u.getIJ(e, "eid");
		}
		else {
			eid = "window";
		}
		if(eid) {
			if(window.attachedEvents[eid] && window.attachedEvents[eid][type]) {
				for(i in window.attachedEvents[eid][type]) {
					if(window.attachedEvents[eid][type][i] == action) {
						window.attachedEvents[eid][type].splice(i,1);
					}
				}
			}
		}
		e.detachEvent("on"+type, window.eventHandler);
	}
}

/*u-position-desktop_ie.js*/
if(window.pageXOffset == undefined && Object.defineProperty) {
	Object.defineProperty(window, "pageXOffset",
		{get: function() {
			return document.documentElement.scrollLeft;
			}
		}
	);
}
if(window.pageYOffset == undefined && Object.defineProperty) {
	Object.defineProperty(window, "pageYOffset",
		{get: function() {
			return document.documentElement.scrollTop;
			}
		}
	);
}

/*u-string-desktop_ie.js*/
if(String.prototype.trim == undefined) {
	String.prototype.trim = function() {
		return this.replace(/^\s+|\s+$/g, "");
	};
}
if(Object.prototype.textContent == undefined && Object.defineProperty) {
	Object.defineProperty(Element.prototype, "textContent",
		{get: function() {
			return this.innerText;
			}
		}
	);
}
else if(Object.prototype.textContent == undefined) {
}
if(String.prototype.substr == undefined || "ABC".substr(-1,1) == "A") {
	String.prototype.substr = function(start_index, length) {
		start_index = start_index < 0 ? this.length + start_index : start_index;
		start_index = start_index < 0 ? 0 : start_index;
		length = length ? start_index + length : this.length;
		return this.substring(start_index, length);
	};
}
