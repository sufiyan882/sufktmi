
// validation rule for lead and contact form
  $("#lead_form").validate({
    rules: {
      "name": {
        required: true,
        maxlength:30
      },
      "phone": {
        required: true
      },
      "email": {
        required: true,
        maxlength:60,
        email:true
      },
      "response": {
        required: true
      },
      "service": {
        required: true
      },
      "details": {
        required: true
      } 
    },
    messages: {
      "name": {
        required: "Enter your name"
      },
      "phone": {
        required: "Enter your contact no."
      },
      "email": {
        required: "Enter your email",
        email: "Enter a valid email"
      },
      "response": {
        required: "Select preferred response."
      },
      "service": {
        required: "Select a service."
      },
      "details": {
        required: "Enter descripton of your project."
      }
    },    
    errorPlacement: function (error, element) {
      error.insertAfter(element);
    },
    highlight: function(element, errorClass, validClass) {
     $(element).addClass("input-error").removeClass("valid");
    },
    unhighlight: function(element, errorClass, validClass) {
     $(element).addClass("valid").removeClass("input-error");
    }
  });

// submit function for lead and contact form
  $(document).on('click','#submit_lead',function(){
    var loader = $(this).find('.loader');
    var isValid = $('#lead_form').valid();
    if(isValid){
      loader.show();
      $.ajax({
        url: "https://www.trimurtyinfotech.com/process_form.php",
        type: 'POST',
        data: $('#lead_form').serialize(),
        dataType: "JSON",
        success: function (data) {
          loader.hide();
          console.log(data);
          if(data.status === 1){
            window.location.href = 'https://www.trimurtyinfotech.com/thank-you';
          }
          $('#Response').hide().html(data.message).fadeIn();
        },error:function(e){
          loader.hide();
          console.log(e);
          alert('Oops! an unexpected error occured. Please try again later')
        }
      });
    }

  })