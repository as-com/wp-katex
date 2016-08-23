(function() {
	"use strict";
	var katexes = document.querySelectorAll("script[type='text/katex']");
	Array.prototype.forEach.call(katexes, function(el, i){
		var options = {
			displayMode: el.getAttribute("data-display") === "true",
			throwOnError: false
		};
		var eq = document.createElement("span");
		try {
			katex.render(el.textContent, eq, options);
		} catch (e) {
			el.style.color = "red";
			el.textContent = e.message;
		}
		el.parentNode.replaceChild(eq, el);
	});
})();