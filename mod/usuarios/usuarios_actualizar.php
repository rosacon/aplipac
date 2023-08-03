 <?php 

 require_once('lib/config.php');
 require_once('lib/funciones.php');

 $usu_cc       = $_POST['usu_cc']         ;
 $usu_ccold    = get_param('usu_ccold')   ;
 $usu_nom      = get_param('usu_nom')     ;
 $usu_ape      = get_param('usu_ape')     ;
 $usu_gen      = get_param('usu_gen')     ; 
 $usu_fechan   = get_param('usu_fechan')  ;
 $usu_mano_d   = get_param('usu_mano_d')  ;
 $usu_estatura = get_param('usu_estatura');
 $usu_peso     = get_param('usu_peso')    ;
 $tus_id       = get_param('tus_id')      ;

 $sql  = "UPDATE Pac_usuarios SET "             ;
 $sql .= "usu_cc=         ".$usu_cc." ,"        ;
 $sql .= "usu_nom=       '".$usu_nom."' ,"      ;
 $sql .= "usu_ape=       '".$usu_ape."', "      ;
 $sql .= "usu_gen=       '".$usu_gen."', "      ;
 $sql .= "usu_fechan=    '".$usu_fechan."', "   ;
 $sql .= "usu_mano_d=    '".$usu_mano_d."', "   ;
 $sql .= "usu_estatura=  '".$usu_estatura."',"  ;
 $sql .= "usu_peso=      '".$usu_peso."',     " ;
 $sql .= "tus_id=         ".$tus_id."          ";
 $sql .= "where usu_cc=   ".$usu_ccold."   "    ;

          header('location:page.php?op=2');
 
                   $rs = execute_sql($sql);
 ?>





