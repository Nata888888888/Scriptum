$(function(){
    function move(id,percent) {
    var elem = document.getElementById(id); 
    var width = 2;
    var id = setInterval(frame, 5);
    function frame() {
        if (width >= percent) {
            clearInterval(id);
        } else {
            width++; 
            elem.style.width = width + '%'; 
            elem.innerHTML = width * 1 + '%';
        }
    }     
}
$(window).scroll(scroll_wind);
    function scroll_wind() {
   var hT = $('#skills').offset().top,
       hH = $('#skills').outerHeight(),
       wH = $(window).height(),
       wS = $(this).scrollTop();
   if (wS > (hT+hH-wH)){
       move('design_bar', 95);
       move('css_bar', 85);
       move('js_bar', 80);
       $(window).unbind('scroll',scroll_wind);
   }
};
});
