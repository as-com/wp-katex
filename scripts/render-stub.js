(function() {
	var katexes = document.querySelectorAll("script[type='text/katex']");
	Array.prototype.forEach.call(katexes, function(el, i){
		var options = {
			displayMode: el.getAttribute("data-display") === "true",
			throwOnError: false
		};
		var eq = document.createElement("span");
		katex.render(this.text, eq, options);
		el.parentNode.replaceChild(eq, el);
	});
})();