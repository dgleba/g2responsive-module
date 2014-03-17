//show message on clicking send email button

jQuery(document).ready(function($){
  $('#email_new_record_form_confirm').click(function(){

  var url = document.getElementById("email_new_record_form-link").getAttribute("href");
  var target = url.replace(/^.*\/\/[^\/]+/, '').replace('/address2/','');

  if (confirm("\nYou must save the record first before emailing.\n\n\nIf you have saved, press OK to continue and send. Otherwise press cancel and save first.\n\n\nPlease wait for up to a minute after pressing the OK button in this box to see the 'Success' message.\n")){
    window.location.assign(target);
    }
  else{}
  return false;
  });
});


