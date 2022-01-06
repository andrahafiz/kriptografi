(function($) {
	"use strict";
	var clipboard = new ClipboardJS('.btn-clipboard');
	clipboard.on('success', function(e) {
	    alert("Text berhasil di copy");
	    e.clearSelection();
	});
	clipboard.on('error', function(e) {
	
	});

	var clipboard = new ClipboardJS('.btn-clipboard-cut');
	clipboard.on('success', function(e) {
		alert("Text berhasil di cut");
		e.clearSelection();
	});
	clipboard.on('error', function(e) {

	});
})(jQuery);
