$(function() {
  $('.panelist').click(function(e) {
    
    $('#'+$(this).data('overlay-target')).lightbox_me({
      centered: true,
      modalCSS: {top: 0},
      overlayCSS: {background: 'white', opacity: .9}
    });
    
    e.preventDefault();
  });
});