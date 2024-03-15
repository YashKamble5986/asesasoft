$(document).ready(function(){
    if( window.matchMedia('(max-width: 768px)').matches ){
        $('#workTabination').addClass('collapse');
        $('#workTabination > ul').addClass('border');
    }
    $('#h_bottomSlider').owlCarousel({
            items: 1,
            margin: 10,
            dots: true,
            loop: false,
            responsiveClass: true,
            responsive:{
                0 : {
                    items : 1,
                },
                480 : {
                    items : 1,
                },
                768 : {
                    items : 1,
                },
                1024 : {
                    items : 2,
                }
            }
        })
    $('.gallery_view_icon').magnificPopup({
        type: 'image'
    })
    // social share for knowledge Hub
    $(".share").jsSocials({
    	showLabel: false,
    	showCount: false,
        shares: [ "facebook","twitter", "linkedin", "pinterest"]
    });

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        var target = $(e.target).attr("data-title") // activated tab
        $('#selectItem').html(target);
        });
        $('ul.nav-tabs > li').click(function(){
            $('#workTabination').removeClass('show');
        })
    $('.shareIcon').click(function(){
        $(this).toggleClass('active')
    })
    $('.twenticySlider').owlCarousel({
        items: 2,  
        margin: 15,
        dots: true,
        responsiveClass: true,
        responsive: {
            0:{
                items: 1
            },
            560:{
                items: 1
            },
            768:{
                items: 2
            }
        }
    })
    $('#siddhagiri_work_slider,#tta_slider').owlCarousel({
        items: 2,  
        margin: 30,
        dots: true,
        responsiveClass: true,
        responsive: {
            0:{
                items: 1
            },
            560:{
                items: 1
            },
            768:{
                items: 2
            }
        }
    })
    $('#mmAdvisory_slider').owlCarousel({
        items: 3,  
        margin: 0,
        dots: true,
        responsiveClass: true,
        responsive: {
            0:{
                items: 1
            },
            560:{
                items: 1,
            },
            768:{
                items: 2,
                margin: 30,
            },
            1024:{
                items: 3,
                margin: 0,
            }
        }
    })
    $('#designSlider').owlCarousel({
        items: 3,
        margin: 30,
        responsiveClass: true,
        responsive: {
            0:{
                items: 1
            },
            768:{
                items: 2
            },
            1024:{
                items: 3
            },
        }
    })
    $(document).click(function(){
        $('#service').removeClass('show');
        $('#about').removeClass('show');
    })
    
    // portfolio filter
    $('ul#filter a').click(function () {
        $(this).css('outline', 'none');
        $('ul#filter .current').removeClass('current');
        $(this).parent().addClass('current');

        var filterVal = $(this).text().toLowerCase().replace(' ', '-');

        if (filterVal == 'all-works') {
            $('#portfolio .col-lg-6.hidden').fadeIn('slow').removeClass('hidden');
        } else {
            $('#portfolio .col-lg-6').each(function () {
                if (!$(this).hasClass(filterVal)) {
                    $(this).fadeOut('normal').addClass('hidden');
                } else {
                    $(this).fadeIn('slow').removeClass('hidden');
                }
            });
        }

        return false;
    });
    $(window).scroll(function(){
        if(window.scrollY >= 200){
            $('.goTopButton').fadeIn();
        }else{
            $('.goTopButton').fadeOut();
        }
    })




    // ********************* script for 2023 ****************************

    $('#newCaroselmain').owlCarousel({
        margin: 0,
        dots: true,
        loop: true,
        nav:true,
        navText: ["<i class='bi bi-arrow-left'></i>","<i class='bi bi-arrow-right'></i>"],
        autoplay:true,
        autoplaySpeed:500,
        responsive:{
            0 : {
                items : 1,
            },
            480 : {
                items : 1,
            },
            768 : {
                items : 1,
            },
            1024 : {
                items : 1,
            }
        }
    })
    $('#abtCarusel').owlCarousel({
        margin: 0,
        dots: true,
        loop: true,
        nav:true,
        navText: ["<i class='bi bi-arrow-left'></i>","<i class='bi bi-arrow-right'></i>"],
        autoplay:true,
        autoplaySpeed:500,
        responsive:{
            0 : {
                items : 1,
            },
            480 : {
                items : 1,
            },
            768 : {
                items : 1,
            },
            1024 : {
                items : 1,
            }
        }
    })

    $(".WCcustomApp").owlCarousel({
        loop: true,
        margin: 10,
        dots: true,
        nav: false,
        autoplay: true,
        autoplaySpeed: 2500,
        responsive: {
          0: {
            items: 1,
          },
          600: {
            items: 1,
          },
          1000: {
            items: 1,
          },
        },
      });



})
