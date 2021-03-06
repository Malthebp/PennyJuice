      $(document).ready(function () {
        $(document).on("scroll", onScroll);

        $('nav li a[href^="#"]').on('click', function (e) {
          e.preventDefault();
          $(document).off("scroll");

          $('nav li a').each(function () {
            $(this).removeClass('active');
          })
          $(this).addClass('active');

          var target = this.hash;
          $target = $(target);
          $('html, body').stop().animate({
            'scrollTop': $target.offset().top
          }, 500, 'swing', function () {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
          });
        });
      });

      function onScroll(event){
        var scrollPosition = $(document).scrollTop();
        $('nav li a').each(function () {
          var currentLink = $(this);
          var refElement = $(currentLink.attr("href"));
          if (refElement.position().top -200 <= scrollPosition && refElement.position().top + refElement.height() > scrollPosition) {
            $('nav ul li a').removeClass("active");
            currentLink.addClass("active");
          }
          else{
            currentLink.removeClass("active");
          }
        });
      }

      $(document).ready(function(){
        $('#toggle').click(function(){
          $('nav ul').slideToggle('down');
        })
      });