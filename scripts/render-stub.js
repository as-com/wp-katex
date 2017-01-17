(function() {
	"use strict";
	var katexes = document.querySelectorAll(".wp-katex-eq");
	Array.prototype.forEach.call(katexes, function(el, i){
		var options = {
			displayMode: el.getAttribute("data-display") === "true",
			throwOnError: false
		};
		var eq = document.createElement("span");
		try {
			katex.render(el.textContent, eq, options);
		} catch (e) {
			eq.style.color = "red";
			eq.textContent = e.message;
		}
		el.parentNode.replaceChild(eq, el);
	});
})();