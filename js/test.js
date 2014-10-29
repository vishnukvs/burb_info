$(document).ready(function() {
  var form = $('#contact_form'); // contact form
  var submit = $('#submit');  // submit button
  var alert = $('.alert'); // alert div for show alert message

  // form submit event
  form.on('submit', function(e) {
    e.preventDefault(); // prevent default form submit

    $.ajax({
      url: '', // form action url
      type: 'POST', // form submit method get/post
      dataType: 'html', // request type html/json/xml
      data: form.serialize(), // serialize form data 
      beforeSend: function() {
        alert.fadeOut();
        submit.html('Sending....'); // change submit button text
      },
      success: function(data) {
        alert.html(data).fadeIn(); // fade in response data
        form.trigger('reset'); // reset form
        submit.html('Send Email'); // reset submit button text
      },
      error: function(e) {
        console.log(e)
      }
    });
  });
});