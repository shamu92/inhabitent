jQuery('.search-icon').on('click', function() {
    jQuery('#search').animate({ width: 'toggle' }).focus();
})

jQuery('#search').focusout(function() {
    jQuery('#search').animate({ width: 'toggle' });
});