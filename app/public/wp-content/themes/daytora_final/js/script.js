$(function() {
    //wow
    new WOW().init();

let $form = $('#js-form')
$form.submit(function(e) { 
  $.ajax({ 
   url: $form.attr('action'), 
   data: $form.serialize(), 
   type: "POST", 
   dataType: "xml", 
   statusCode: { 
      0: function() { 
        $form.hide();
        $('#js-success').show();

      }, 
      200: function() { 
        $form.hide();
        $('#js-error').show();
      }
    } 
  });
  return false; 
}); 

$(window).on('load',function() {
  var url = location.href;

  if(url == "http://daytorafinal.local/contact/"){
    if($('.mw_wp_form_complete').length()) {
        $('#js_before_complete').css('display', 'none');
        $('.news').show();
    }
  }
});

//drawer
$('.drawer').drawer();

$(".navbar_toggle, .drawer-overlay").on('click', function () {
  $('.navbar_toggle').toggleClass('open');
  $('.drawer-overlay').toggleClass('open');
  
});



});
