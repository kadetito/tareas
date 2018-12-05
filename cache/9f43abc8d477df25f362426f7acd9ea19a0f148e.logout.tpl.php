<?php
/* Smarty version 3.1.33, created on 2018-11-16 23:34:15
  from '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/logout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bef45e77ca721_47380214',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'de158fc448524bd91b4eb2c635c42eff77e8d44e' => 
    array (
      0 => '/var/www/vhosts/webentorn.com/httpdocs/tareas/templates/logout.tpl',
      1 => 1542399603,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_5bef45e77ca721_47380214 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<meta name="description" content="">
<meta name="author" content="Webentorn.com">
<meta http-equiv="Cache-control" content="public">
<META HTTP-EQUIV="EXPIRES" CONTENT="Mon, 22 Jul 2017 11:12:01 GMT">
<link rel="icon" type="image/x-icon" href="/favicon.ico" />
<link rel="canonical" href="" />
<link href="/css/bootstrap.min.css" rel="stylesheet">
<link href="/css/estil.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" >
<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="/manifest.json">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">
<script src="/js/jquery.min.js"></script>
<script src="/js/sweetalert.min.js"></script>                      
<link rel="stylesheet" type="text/css" href="/css/sweetalert.css"> 
</head>
<body>








<H1>LOGOUT</H1>










<a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/scripts.js"></script>
<script>
// ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        
        $('#return-to-top').fadeIn(200);    
    } else {
        $('#return-to-top').fadeOut(200);  
    }
});
$('#return-to-top').click(function() {     
    $('body,html').animate({
        scrollTop : 0                     
    }, 500);
});
</script>
</body>
</html><?php }
}
