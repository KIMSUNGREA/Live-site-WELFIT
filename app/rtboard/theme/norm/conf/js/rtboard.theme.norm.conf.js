
;(function($) {
	$(function() {

		$("#btn-form-submit").click(function (){
			var form = document.dataform;
			if(rt_chk_form('required')){
				form.submit();
			}
		});

		$("input[name=category_is]").click(function (){
			if ($(this).val()=="y") {
				$("#tr-category-data").show();
			} else {
				$("#tr-category-data").hide();
			}
		});

		$("input[name=assent_term_is]").click(function (){
			if ($(this).val()=="y") {
				$("#tr-term-data").show();
			} else {
				$("#tr-term-data").hide();
			}
		});
	});
})(jQuery);