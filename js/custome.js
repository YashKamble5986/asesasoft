$(window).scroll(function () { 
    if ($(document).scrollTop() > 50) {
       $('.stickyH').addClass('shadowClassHere');
       $('.scrollMarg').addClass('shadowClassHere');
    } else {
        $('.stickyH').removeClass('shadowClassHere');
        $('.scrollMarg').removeClass('shadowClassHere');
    }   
 });


function navMClose(){
   document.body.classList.add('closeN');
   document.getElementById("mySidebar").style.width = "0";
}


function openNav() {
   document.getElementById("mySidebar").style.width = "100%";
   document.getElementById("mySidebar").style.visibility = "visible";
   document.body.classList.remove('closeN');
}
  
// function closeNav() {
//   document.getElementById("mySidebar").style.width = "0";

// }


   $('.openbtn').click(function(){
      $('body').css('overflow', 'hidden');
   })
   $('.closebtn').click(function(){   
      $('body').css('overflow', 'auto');
   })


