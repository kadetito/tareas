<?php

$smarty->assign("language", $lengua, true);
$smarty->assign("pathRecursos", $pathRecursos, true);
$smarty->assign("path", $path, true);

$smarty->assign("urlpagina1", $urlpagina1, true);
$smarty->assign("urlpagina2", $urlpagina2, true);
$smarty->assign("urlpagina3", $urlpagina3, true);
$smarty->assign("urlpagina4", $urlpagina4, true);
$smarty->assign("urlpagina5", $urlpagina5, true);
$smarty->assign("urlpagina6", $urlpagina6, true);
$smarty->assign("urlpagina7", $urlpagina7, true);

$smarty->assign("dateTimedeHoy", $dateTimedeHoy, true);
$smarty->assign("idCliente", $idCliente, true);


$smarty->assign("idIssue", $idIssue, true);
$smarty->assign("idProyecto", $idProyecto, true);
$smarty->assign("ordena", $ordena, true);
$smarty->assign("ordene", $ordene, true);
$smarty->assign("webdeveloper",$webdeveloper,true);
$smarty->assign("developer",$developer,true);
$smarty->assign("llamadaBorradoMasivo",$llamadaBorradoMasivo,true);
$smarty->assign("llamadaEditarMasivo",$llamadaEditarMasivo,true);
$smarty->assign("perfil_id_usuario",$perfil_id_usuario,true);
$smarty->assign("perfil_nombre_usuario_enc",$perfil_nombre_usuario_enc,true);

$smarty->assign("perfil_nombre_usuario",$perfil_nombre_usuario,true);

$smarty->assign("tipos_de_proyecto",$tipos_de_proyecto,true);
$smarty->assign("tipos_de_prioridad",$tipos_de_prioridad,true);
$smarty->assign("lista_usuarios",$lista_usuarios,true);
$smarty->assign("tipos_de_Status",$tipos_de_Status,true);
$smarty->assign("tipos_de_estatus",$tipos_de_estatus,true);

$smarty->assign("componentes",$componentes,true);
$smarty->assign("listado_proyectos",$listado_proyectos,true);

$smarty->assign("WelcomenombreCompletoUsuario",$WelcomenombreCompletoUsuario,true);
$smarty->assign("nivelPrivilegiosUsuario",$nivelPrivilegiosUsuario,true);
$smarty->assign("optionSeleccionada",$optionSeleccionada,true);
$smarty->assign("paginationCtrlsProyectos",$paginationCtrlsProyectos,true);

$smarty->assign("paginationCtrlsIssues",$paginationCtrlsIssues,true);
$smarty->assign("listado_listaIssues",$listado_listaIssues,true);
$smarty->assign("crear_issue_para_proyecto",$crear_issue_para_proyecto,true);
$smarty->assign("mostrar_selector_proyecto",$mostrar_selector_proyecto,true);
$smarty->assign("selector_del_validador",$selector_del_validador,true);
$smarty->assign("lista_usuarios_asignados",$lista_usuarios_asignados,true);
$smarty->assign("token_issue",$token_issue,true);

?>