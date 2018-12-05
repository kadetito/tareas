                                                           //SI ELIMINO MASIVOS DESDE CHECKBOX
                                                           if($_POST['eliminacionmasiva']){
                                                               if($_POST['eliminacion']==''){} else {
                                                                 $checkbox=$_POST['eliminacion'];
                                                                 foreach ($checkbox as $value) {
                                                                 $eliminar=mysql_query("delete from ".$Tablapaginas." where id=".$value."",$conn);
                                                                  if($eliminar){      
                                                               echo '<script type="text/javascript">';
                                                               echo 'setTimeout(function () { swal({   title: "BORRADO",   text: "El borrado se ha llevado a cabo",   timer: 3000,   showConfirmButton: false });  ';   
                                                               echo '}, 100);</script>';
                                                               echo '<meta http-equiv="Refresh" content="2;url='.$rutad.'/'.$lengua.'/63/25/14/paginas">';             
                                                                 }
                                                               }   
                                                             }
                                                           }