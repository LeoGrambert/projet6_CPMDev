var j = jQuery.noConflict();

j(function($) {

  //hide read more blog
j('.read-more-link').css('display', 'none');
j('.entry-meta').css('width', '85%');

  //Header - navbar - fixed
j(window).scroll(function(){
    var scrollTop = 1;
    if(j(window).scrollTop() >= scrollTop){
        j('#header-text-nav-container').css({
            position : 'fixed',
            top : '0',
            left:'0',
            backgroundColor:'white',
            zIndex:'1',
            width:'100%',
            opacity:'inherit'
        });
    }
    if(j(window).scrollTop() < scrollTop){
        j('#header-text-nav-container').removeAttr('style');
    }
    scrollTop = scrollTop + 600;
    if(j(window).scrollTop() <= scrollTop){
      j('#header-text-nav-container').css({
          transition:'.4s opacity',
          opacity:'0.9'
      })
    }
})

  //Modal - form contact
function showModal(){
   var id = '#modal';
   resizeModal();
   j('#background').show(300);
   j(id).show(600);
   j('.hideModal').click(function (e) {
      e.preventDefault();
      hideModal();
    });
}

function hideModal(){
   j('#background').hide(400);
   j('.popup').hide(200);
}

function resizeModal(){
   var modal = j('#modal');
   var winH = j(document).height();
   var winW = j(window).width();
   j('#background').css({'width':winW,'height':winH});
   var winH = j(window).height();
   modal.css('top', winH/2.1 - modal.height()/2);
   modal.css('left', winW/2.1 - modal.width()/2);
   modal.css('marginBottom', '15%');
}

   j('#showButton').click(function (e) {
        e.preventDefault();
      showModal();
   });

   j('input[type="submit"]').click(function(){
     j('#modal').css('height', '85%').css('top', '10px');
   })

   j('#background').click(function () {
      hideModal();
    });

    j('.hideModal').hover(function(){
      j('.hideModal').css('cursor', 'pointer');
    }).mouseout(function(){
      j('.hideModal').css('cursor', 'auto');
    })

    j('.hideModal').click(function () {
       hideModal();
     });

   j(window).resize(function () {
      resizeModal()
   });

   //Form register in place of login form
   j('.lwa-links-register-inline').click(function(){
     j('.lwa-form').css('display', 'none');
   })

   j('.lwa-links-register-inline-cancel').click(function(){
     j('.registerform').css('display', 'none');
     j('.lwa-form').css('display', 'block');
   })

});
