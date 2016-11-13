		jQuery('#btn-search').on('click', function(e) {
		    e.preventDefault();
		    jQuery('#search').animate({ width: 'toggle' }).focus();
		});