(function($) {
	$("script[type='text/katex']").each(function(i) {
		var $this = $(this);
		var options = {
			displayMode: $this.attr("data-display") === "true",
			throwOnError: false
		};
		katex.render(this.text, $("<span></span>").insertAfter(this).get(0), options);
	});
})(jQuery);