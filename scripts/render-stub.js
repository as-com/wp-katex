(function () {
    "use strict";
    var katexes = document.querySelectorAll(".wp-katex-eq");
    for (var i = 0; i < katexes.length; i++) {
        var el = katexes[i];

        var eq = document.createElement("span");
        try {
            katex.render(el.textContent, eq, {
                displayMode: el.getAttribute("data-display") === "true",
                throwOnError: false
            });
        } catch (e) {
            eq.style.color = "red";
            eq.textContent = e.message;
        }
        el.parentNode.replaceChild(eq, el);
    }
})();