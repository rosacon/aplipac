$(document).ready(function(){
$("#ingresar").validate({

   rules:{
        usu_login:"required",
        usu_clave:"required"
     },
    messages:{
        usu_login:"requerido",
        usu_clave:"requerida"
           }
});

$
$("#cuestionario").validate({

   rules:{
        rta1:"required",
        rta2:"required",
        rta3:"required",
 	rta4:"required",
        rta5:"required",
        rta6:"required",
        rta7:"required",
        rta8:"required",
        intensidadc:"required",
        intensidadh:"required",
        intensidadco:"required",
        intensidadm:"required",
        intensidadd:"required",
        pie:"required",
        medio:"required",
        cucli:"required",
        flexionandot:"required",
        girandot:"required",
        inclinandoadelante:"required",
        sentado:"required",
        caminando:"required",
        rta40:"required",
        rta41:"required",
        rta42:"required",
        rta43:"required"
       
     },

    messages:{
         rta1:"debe escojer una opcion para cuello",
         rta2:"debe escojer una opcion para cuello",
         rta3:"debe escojer una opcion para hombro",
         rta4:"debe escojer una opcion para hombro",
         rta5:"debe escojer una opcion para codo",
         rta6:"debe escojer una opcion para codo",
         rta7:"debe escojer una opcion para muñecas",
         rta8:"debe escojer una opcion para muñecas",
         intensidadc:"requerido",
        intensidadh:"requerido",
        intensidadco:"requerido",
        intensidadm:"requerido",
        intensidadd:"requerido",
        pie:"requerido",
        medio:"requerido",
        cucli:"requerido",
        flexionandot:"requerido",
        girandot:"requerido",
        inclinandoadelante:"requerido",
        sentado:"requerido",
        caminando:"requerido",
        rta40:"requerido",
        rta41:"requerido",
        rta42:"requerido",
        rta43:"requerido"                 
       }

});

$("#chequeo").validate({
   rules:{
     rta1:"required",
     rta2:"required",
     rta3:"required",
     rta4:"required",
     rta5:"required",
     rta6:"required"
       },
    messages:{
      rta1:"requerido",
      rta2:"requerido",
      rta3:"requerido",
      rta4:"requerido",
      rta5:"requerido",
      rta6:"requerido"
         }
});
});
