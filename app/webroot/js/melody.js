function loadContent(sourceUrl, targetElement, callback) {
    $(targetElement).fadeOut("slow", function() {
		$("#loading").fadeIn("slow", function() {
			$(targetElement).load(sourceUrl, function(response, status, xhr) {
				if (status === "error") {
                    $("#loading").fadeOut("slow", function () {
                        $(targetElement).text("Error!");
                        $(targetElement).fadeIn("slow");
                    });
				}
				else if (status === "success") {
					$("#loading").fadeOut("slow", function () {
                        $(targetElement).fadeIn("slow");
                        
                        typeof callback === 'function' && callback;
                    });
				}				
                else {
                    // TODO: Handle unknown result.
                }
			});
		});	
	});
}
