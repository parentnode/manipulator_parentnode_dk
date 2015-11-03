// older browsers have some problems with the request object
// The ActiveX object for IE6 and IE5 cannot be extended
// The onreadystatechange is not acting on Request object in Firefox 2
// The solution is to wrap the Request object in a plain object, and transfer all required variables

if(typeof(window.XMLHttpRequest) == "undefined" || function(){try {new XMLHttpRequest().channel; return false;} catch(exception) {return true;}}()) {

	// Create xmlhttprequest object 
	Util.createRequestObject = function() {
		u.bug("create request object")
		var xmlhttp;

		if(window.XMLHttpRequest) {
			xmlhttp = new XMLHttpRequest();

		}
		else if(window.ActiveXObject) {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

		}
		else {
			return {
				"open":function() {}, 
				"setRequestHeader":function() {}, 
				"send":function(){
					this.response({"status":"404", "responseText":"No Ajax support"});
				}
			};

		}
			
		
//		u.xInObject(xmlhttp);

		if(xmlhttp) {

			var wrapper = u.ae(document.body, "div", {"style":"display: none;"});

//			var wrapper = new Object();
			wrapper.xmlhttp = xmlhttp;

			// perform 
			wrapper.xmlhttp.onreadystatechange = function() {
				u.bug("response received")
				// wrapper.xmlhttp should be this, but does not work in IE or Firefox 2
				// wait for correct readyState, map variables and call back to main loop
				if(wrapper.xmlhttp.readyState == 4) {
					u.bug("ready")
					wrapper.responseText = wrapper.xmlhttp.responseText;
					u.bug("ready")
					wrapper.status = wrapper.xmlhttp.status;
					u.bug("ready")
					wrapper.readyState = 4;
					u.bug("ready")
					if(typeof(wrapper.statechanged) == "function") {
						wrapper.statechanged();
						wrapper.parentNode.removeChild(wrapper);
					}
					// else if(typeof(wrapper.onreadystatechange) == "function") {
					// 	wrapper.onreadystatechange();
					// }
				}
			}

			wrapper.setRequestHeader = function(type, value) {
				this.xmlhttp.setRequestHeader(type, value);
			}

			wrapper.open = function(method, url, async) {
				this.async = async;

				// avoid heavy caching by activex component
				url += (url.match(/\?/) ? "&" : "?") + "refresh_activex=" + u.randomString();
				this.xmlhttp.open(method, url, async);
			}

			wrapper.send = function(params) {
				this.xmlhttp.send(params);

				// make variables available on wrapper
				if(!this.async) {
					this.responseText = this.xmlhttp.responseText;
					this.status = this.xmlhttp.status;
				}

			}

			return wrapper;

		}
		else {
			u.bug("NO XMLHTTP");
			return false;
		}

	}

}

