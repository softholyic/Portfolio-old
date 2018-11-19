console.log("JavaScript is amazing!");


$(document).ready(function(){
    cardtoggle();

   });



function cardtoggle(){
        
    if($(window).width()<418){

            console.log("This is the small screen");
            $(".ratio").addClass("mob-display");
            $("#about-me").addClass("about-me-mob");
            $(".intro").addClass("mob-p");
            $("#scroll").css({ top: "122px" });
            $(".intro").removeClass("bg-p");
            $(".ratio").removeClass("bg-display");
            $("#about-me").removeClass("about-me");
            
        
    }else{
        console.log('this are the big boys');
        $("#scroll").css({ top: "200px" });
        if($(".ratio").hasClass("mob-display")){
            $(".ratio").removeClass("mob-display");
            $(".ratio").addClass("bg-display");
            $("#about-me").removeClass("about-me-mob");
            $("#about-me").addClass("about-me");
            $(".intro").addClass("bg-p");
            $(".intro").removeClass("mob-p");
           

        }
    }
}


$(window).resize(function() {
    console.log('window is resized');
    cardtoggle();
   });




   // Bootstrap Fixed Header
  $(function() {
    // Check to see if there is a bakcground class on loading
    if ($('.navbar-scroll').offset().top > 150) {
      $('.navbar-scroll').addClass('navbar-bg-onscroll');
    }

    // Check to add a background class on scrolling
    $(window).on('scroll', function() {
      var navbarOffset = $('.navbar-scroll').offset().top > 150;
      if(navbarOffset) {
        $('.navbar-scroll').addClass('navbar-bg-onscroll');
      }
      else {
        $('.navbar-scroll').removeClass('navbar-bg-onscroll');
        $('.navbar-scroll').addClass('navbar-bg-onscroll--fade');
      }
    });
  });

//progress bar animation

//$(window).scroll(function () {

  //console.log($(window).scrollTop());

  //if ($(window).scrollTop() > 270) {

       // $(window).one('scroll',function() {
          
      
            $("#css").animate({
              width: "93%"
            }, 2500);
            
            $("#javascript").animate({
              width: "80%"
            }, 2500);
            
            $("#jquery").animate({
              width: "85%"
            }, 2500);
            
            $("#mysql").animate({
              width: "88%"
            }, 2500);
            
            $("#wordpress").animate({
              width: "90%"
            }, 2500);
            
            
            
          //});
    
    //}

 // });









//Modal
$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus');
  });


//Form validation
 


  function copyEmail() {
    /* Get the text field */
    var copyText = document.getElementById("cpymail");
  
    /* Select the text field */
    copyText.select();
  
    /* Copy the text inside the text field */
    document.execCommand("copy");
  
    /* Alert the copied text */
    alert("Copied the text: " + copyText.value);
  }


/*Modal feedback*/
  // Success function
 function done_func(response) {
  
  $(".contact__msg").fadeIn().removeClass('alert-danger').addClass('alert-success');
  //$(".contact__msg").text(response);
  
  setTimeout(function () {
      $(".contact__msg").fadeOut();
  }, 2000);

  setTimeout(function () {
    $('#modal').modal('hide');
}, 2000);
  document.getElementById("contactform").reset();
  
 
  
}

// fail function
function fail_func(data) {

  message.fadeIn().removeClass('alert-success').addClass('alert-success');
  message.text(data.responseText);
  setTimeout(function () {
      message.fadeOut();
  }, 2000);
  
}
  
  $("#contactform").submit(function(e){



    var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission


      var validation = Array.prototype.filter.call(forms, function(form) {
      
          if (form.checkValidity() === false) {
            e.preventDefault();
            e.stopPropagation();
            
          }
          form.classList.add('was-validated');
        
      });


    if(e.isDefaultPrevented()){
    console.log("something went wrong here");
  }else{
    console.log("here now");
    e.preventDefault();
    $form=$(this);
    var $formData=$form.serialize();
    console.log($formData);
    console.log("here this shit now");
 

    $.ajax({
			type: 'POST',
			url: $form.attr('action'),
      data: $formData,
      
    })
    .done(done_func)
    .fail(fail_func);


  } 
    
  });



  //Smooth scrolling

  $('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });