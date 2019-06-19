$(document).ready(function(){ // Se ejecuta cuando los elementos del (dom) este listo
  $('.bloque01').click(function(event){
    event.preventDefault();
    if($(this).hasClass('bloque01')){
      alert("Estoy en hover");
      $(this).removeClass('bloque01');
      $('bloque01')CSS('display','none')
    } else {
      $(this).addClass('bloque01-open');
    //  $(this).children('submenu-open');
      $(this).children('bloque01-open')CSS('display','block')

    }
});

  // jquery children es un selector que puede elejir dentro de una class
  // A los hijos de esta

    //$(this).addClass('submenu-open');    // This = El elemento del selector principal
    //alert("Click");
    //$('sub-menu')CSS('display','block')


    /* El primer elemento es el selector, lo que queremos hacer
        es desplegar un sub menu, entonces la idea es desplegar
        la ruta
    */


  //$('.bloque01').hover(function(){
  //  alert("Estoy en hover");
  //  $('sub-menu')CSS('display','block')

  //});
  });
