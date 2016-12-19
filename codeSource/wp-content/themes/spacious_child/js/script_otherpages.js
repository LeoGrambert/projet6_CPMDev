var j = jQuery.noConflict();

j(function($) {

//hide header img
j('.header-image').css('display', 'none');

//Header - navbar - fixed
j(window).scroll(function(){
    var scrollTop = 1;
    if(j(window).scrollTop() >= scrollTop){
        j('#masthead').css({
            position : 'fixed',
            top : '0',
            left:'0',
            backgroundColor:'white',
            zIndex:'1',
            width:'100%',
            opacity:'1'
        });
    }
    if(j(window).scrollTop() < scrollTop){
        j('#masthead').removeAttr('style');
    }
  })

//Form register in place of login form
j('.lwa-links-register-inline').click(function(){
  j('.lwa-form').css('display', 'none');
})

j('.lwa-links-register-inline-cancel').click(function(){
  j('.registerform').css('display', 'none');
  j('.lwa-form').css('display', 'block');
})


})
