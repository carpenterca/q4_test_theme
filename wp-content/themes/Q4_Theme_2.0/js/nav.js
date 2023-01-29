$(document).ready(function(){
  //close menu when you click outside
  $(".mobile-toggle").on("click", function(){
    $('.search-and-menu-wrapper').toggleClass('show');
  });

  //Change nav link color when on page
  $('[href]').each(function(){
    if(this.href != "Contact Us"){
      if (this.href == window.location.href){
        $(this).addClass('active');
      }
    }
  });

  // Search Icon //
  $('.desktop-search-img').on('click',function(){
    $('.desktop-search input').toggleClass('show');
  })

  //Sticky Nav
  window.onscroll = () => {stickyFunction()};
  var navbar = document.getElementById("main-nav-desktop");
  var navbarMobile = document.getElementById("main-nav-mobile");
  var sticky = navbar.offsetTop + (200);

  function stickyFunction(){
    if (window.pageYOffset >= sticky) {
      navbar.classList.add("sticky");
      navbarMobile.classList.add("sticky");
    } else {
      navbar.classList.remove("sticky");
      navbarMobile.classList.remove("sticky");
    }
  }

  // Desktop Specific //
  if (window.matchMedia('(min-width: 1000px)').matches) {
    // Show sub-menu on hover
    $('.menu-item-has-children').on('mouseover',function(){
      $(this).find('.sub-menu').addClass('show');
      $(this).addClass('active');
    })
    $('.menu-item-has-children').on('mouseleave',function(){
      $(this).find('.sub-menu').removeClass('show');
      $(this).removeClass('active');
    });
  }

  // Mobile Specific //
  if (window.matchMedia('(max-width: 1000px)').matches) {
    $('.menu-item-has-children').click(function(){
      $(this).find('.sub-menu').toggleClass('show');
      $(this).toggleClass('active');
    });
  }
});
