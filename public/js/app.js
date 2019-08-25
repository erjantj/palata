$(function() {
    $("#phone").inputmask({"mask": "+7(999)999-9999"});

	setTimeout(function(){
		$(".alert").fadeOut(); 
	}, 2500);
});
