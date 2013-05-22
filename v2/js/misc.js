function check_val(input) {
	$(input).val() != "" ? $(input).addClass("has_value") : $(input).removeClass("has_value");
}

var mobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent);

$(document).ready(function(){
	$(".menu").click(function(){
		$(this).find("ul").toggleClass("show");
	});

	$(".menu ul").click(function(e){
		e.stopPropagation();
	});
	

	$("select").each(function(){
		check_val(this);
	});
	
	$("select").on("keyup click blur focus change paste", function(){
		check_val(this);
	});
});