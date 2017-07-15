!(function($){
	"use strict";
	jQuery(document).ready(function($) {
		function DoyleAjaxPagination() {
			var page_item = $('.bt-pagination a.page-numbers');
			page_item.click(function(e){
				e.preventDefault();
				if($(this).hasClass('prev')){
					alert('prev');
				}else if($(this).hasClass('next')){
					alert('next');
				}else{
					var page_active = $(this).text();
					$.ajax({
						type: 'POST',
						url: option_ob.ajaxurl,
						data: {
							action: 'doyle_ajax_pagination',
							PageActive: page_active,
						},
						success: function(data, textStatus, XMLHttpRequest){
							$(".bt-team-grid-element .row").html('');
							$(".bt-team-grid-element .row").append(data);
						},
						error: function(MLHttpRequest, textStatus, errorThrown){
							alert(errorThrown);
						}
					});
				}
			});
		}
		//DoyleAjaxPagination();
	});
})(jQuery);
