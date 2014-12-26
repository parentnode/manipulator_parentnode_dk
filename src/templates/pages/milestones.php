<?php
$page->bodyClass("changelog");
$page->pageTitle("It's just improvements");
?>
<div class="scene changelog i:scene">

	<h1>Milestones</h1>


	<h2>Version 0.9.5</h2>
	<p></p>
	<ul class="changes">
		<li></li>
	</ul>


	<h2>Version 1.0</h2>
	<ul class="changes">
		<li></li>
	</ul>

Implement TODOs and go through the mess below:


JES todos:
kør JS med strict js warnings i Firefox og ret uhensigtsmæssigheder 
double check JSON parameter implementation and align it throughout library 
u-form, add custom inits and validators (75% done) 
u-events-dekstop_light - dblclick for IE8 (it does not allow for two mousedown events, probably reserved for built-in dblclick) 
Change u-fullscreen to be independent of #page 
Util.Notification - global notification handler 
Add u-fullscreen-overlay (as alternative to u-fullscreen (modal) 

WTF-EVENTS - make initial speed calculation better - IE use two moveevents before calculation start speed


u.e.scroll - finalize, document and test 
u-form - add JSON parameters to init, to make initialization more flexible 
build a linking handler that detects cmd/ctrl keypress and opens link in a new window 
Modals 
Dropdown (autocomplete input)
Scrollspy 

Tooltips 
Alerts (actions) 
Checkbox 
Radio 
File upload (regular with styling) 
File upload (drag'n'drop) 
Carousels 
Custom scrollbar 
Twitter feed 
Video - flash 
Video - html5 fallback 
Video - YouTube option 

Docs todo:
Audio 
Video 

Tests:
Debug - all segments 
Form - all segments 
Google analytics - all segments 
Hash - all segments 
Image/Preloader - all segments 
Init - all segments 
Video - all segments 


TODO - v0.9:

u.request - new parameter jsonp_callback


Document and test
u.e.addWindowResizeEvent
u.e.removeWindowResizeEvent
u.e.addWindowScrollEvent
u.e.removeWindowScrollEvent

u.k

Must look at:
dom update on u.a.transition?


text editor
video+audio player
scrollTo
template

Preloader:
max-processes parameter




Maybe:
sequence player
textscaler
sortable


Update callback documentation

// request - function name string
// slideshow - function name string
// sortable - function name string
// movements - function name string
// gridmaster - function name string
// history - function name string

// navigation - hardcoded function
// scrollTo - hardcoded function
// events - hardcoded function
// form - hardcoded function
// video - hardcoded function
// audio - hardcoded function

// timer - function reference
// sequence - function reference
// preloader - function reference




Objects

Util = u (utilities)

Util.Animation = u.a (animations)

Util.Dom = u.d (dom query and manipulation functions)

Util.Events = u.e (events base)
- basics (just event handlers)
- clicks (click, dbl-click, hold)
- drags (drag, swipe, overlap)
- multitouch (pinch, zoom, rotate)

Util.Events.Key = u.e.key (onkeydown)

Util.Form = u.f (form)

Util.History = u.h (ajax navigation history)

Util.Image = u.i (image preloading)

Util.Timer = u.t (timeouts and interval)



- Util.Sort? - sortable? Requires drag and thus has multiple functions required to work


Sortable (rearrange/sort by/search)

Support - (support test functions)




Layover - simple function
Should remove scrollbar and inject layover
Layover remembers scroll-position

Layover contains self-close function

Returns layover 

Sortby - simple function
Get settings from classnames


Autocomplete - simple function



U.EVENTS
- load, over, out, progress, ?


Reset
Make smarter reset function

Maybe put clicks and drags and multitouch in separate files with independent resets?

KEY

.addAction(key, action)

</div>
