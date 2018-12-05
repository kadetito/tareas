<!DOCTYPE html>
<html lang="{$language}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{$titol}</title>
<meta name="description" content="{$metas}">
<meta name="author" content="Webentorn.com">
<meta http-equiv="Cache-control" content="public">
<META HTTP-EQUIV="EXPIRES" CONTENT="Mon, 22 Jul 2017 11:12:01 GMT">
<link rel="icon" type="image/x-icon" href="/favicon.ico" />
<link rel="canonical" href="{$canonical}" />
<link href="{$rutad}/css/bootstrap.min.css" rel="stylesheet">
<link href="{$rutad}/css/estil.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" >
<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="/manifest.json">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">
<script src="{$rutad}/js/jquery.min.js"></script>
<script src="{$rutad}/js/sweetalert.min.js"></script>                      
<link rel="stylesheet" type="text/css" href="{$rutad}/css/sweetalert.css"> 
</head>
<body>








<H1>LOGOUT</H1>










<a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
<script src="{$rutad}/js/bootstrap.min.js"></script>
<script src="{$rutad}/js/scripts.js"></script>
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
</html>