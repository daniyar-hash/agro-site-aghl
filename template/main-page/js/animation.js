

    // --- Аккордеон ---
    // $(".accordion__header").click(function() {
    //   const content = $(this).next(".description__detail");
    //  $(".description__detail").not(content).slideUp();
    //   content.slideToggle("slow");

    // });

    // --- Модалка ---
    $("#openModal").click(() => $(".overlay").fadeIn());
    $(".close-modal, .overlay").click(function(e) {
      if (e.target === this) $(".overlay").fadeOut();
    });

    // --- Кнопка наверх ---
    $(window).scroll(function() {
      if ($(this).scrollTop() > 200) {
        $("#toTop").fadeIn();
      } else {
        $("#toTop").fadeOut();
      }

      // --- Scroll reveal ---

          let bottom_of_screen = $(window).scrollTop() + $(window).height(); 


      $(".products-season__item").each(function() {
        let top_of_element = $(this).offset().top;
 
           if (bottom_of_screen > top_of_element + 100) {
          $(this).addClass("visible");
        }

      });

     $(".category__item").each(function() {
        let top_of_element = $(this).offset().top;
 
           if (bottom_of_screen > top_of_element + 100) {
          $(this).addClass("visible");
        }

      });


    const $bgGreen = $('.products-season__bg-green');

    console.log($bgGreen.offset())

    let topEl = $bgGreen.offset().top();


    if(bottom_of_screen > topEl + 100){
        $bgGreen.addClass('visible');
    }



    });

    $('.products-season__item').each(function (index) {
   
    $(this).css('transition-delay', `${index * 0.1}s`);
    });

    $('.category__item').each(function (index) {
   
    $(this).css('transition-delay', `${index * 0.1}s`);
    });

   //-----endscroll reveal--------//



// --------------button up-----------//

    $("#toTop").click(function() {
      $("html, body").animate({ scrollTop: 0 }, 600);
    });
// --------------button up--end---------//