function loadContent(sourceUrl, targetElement, historyObject) {
    $(targetElement).fadeOut("slow", function() {
		$("#loading").fadeIn("slow", function() {
			$(targetElement).load(sourceUrl, function(response, status, xhr) {
				if (status === "error") {
                    $("#loading").fadeOut("slow", function () {
                        $(targetElement).text("Error!");
                        $(targetElement).fadeIn("slow");
                    });
				}
				else {
					$("#loading").fadeOut("slow", function () {
                        historyObject.pushState(null, '', sourceUrl);
                        $(targetElement).fadeIn("slow");
                    });
				}				
			});
		});	
	});
}
