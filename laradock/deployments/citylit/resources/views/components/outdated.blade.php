<div id="outdated">
	 <h6>Your browser is out-of-date!</h6>
	 <p>Update your browser to view this website correctly. <a id="btnUpdateBrowser" href="http://outdatedbrowser.com/">Update my browser now </a></p>
	 <p class="last"><a href="#" id="btnCloseUpdateBrowser" title="Close">&times;</a></p>
</div>

<script type="text/javascript">
	//event listener: DOM ready
	function addLoadEvent(func) {
		var oldonload = window.onload;
		if (typeof window.onload != 'function') {
			window.onload = func;
		} else {
			window.onload = function() {
				if (oldonload) {
					oldonload();
				}
				func();
			}
		}
	}
	//call plugin function after DOM ready
	addLoadEvent(function(){
		outdatedBrowser({
			bgColor: '#f25648',
			color: '#ffffff',
			lowerThan: 'transform',
			languagePath: 'your_path/outdatedbrowser/lang/en.html'
		})
	});
</script>
