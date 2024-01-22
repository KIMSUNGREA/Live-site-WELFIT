$(document).ready(function() {
    $("label").click(function() {
        $(".mob_menu_list").toggleClass("on");
    });
      $(".fm_site").click(function() {
	$(this).toggleClass("on");
        $(".fm_site_list").toggleClass("on");
	$(".arrow").toggleClass("on");
    });
});
