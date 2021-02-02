// $('.menu-top').click(function(){
// 	$('.mobile-menu-inner').addClass('selected')
// 	$(this).removeClass('selected');
// });

// $(document).ready(function(){
// 	$(".top_close").on("click", function(){
// 	  $(".mobile-menu-inner").css("opacity", "0");
// 	});
//   $(".menu-top").on("click", function(){
//    $(".mobile-menu-inner").css("opacity", "1");
//   });
// });

// $(document).on('click', '.menu-toggle', function() {
//   $('.menu-main-inner, header, .menu-toggle, body').toggleClass('selected')
// })

// $(document).on("click", ".btn-select", function(){
//   $(this).parent().find(".b").toggleClass("show");
// });


// if(page == '' || page == 'contact'){
//   setTimeout(function(){
//     var script = document.createElement('script');
//     script.src = "https://www.google.com/recaptcha/api.js?render=6LfEGMQUAAAAAHOKc-TeCVxAoWs8y3OZE_N7hKui";
//     document.body.appendChild(script);
//   },1000)

//   setTimeout(function(){
//     grecaptcha.ready(function() {
//       grecaptcha.execute('6LfEGMQUAAAAAHOKc-TeCVxAoWs8y3OZE_N7hKui', {action:'validate_captcha'})
//                 .then(function(token) {
//           // add token value to form
//           $('#g-recaptcha-response').attr('value',token);
//       });
//     });
//   },1500)
// }

//   // setTimeout(function(){
  //   var analytics = document.createElement('script');
  //   analytics.src = "https://www.googletagmanager.com/gtag/js?id=UA-153107144-1";
  //   document.head.appendChild(analytics);
  // },1000)

  // setTimeout(function(){
  //   window.dataLayer = window.dataLayer || [];
  //   function gtag(){dataLayer.push(arguments);}
  //   gtag('js', new Date());
  //   gtag('config', 'UA-153107144-1');
  // },1500)

// $(document).ready(function(){

//   $('.sub-menu-toggle').click(function(){
//     $(this).next('.dropdown-menu').toggleClass('show');
//   });

// });