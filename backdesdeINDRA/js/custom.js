$(document).on("click","ul.nav li.parent > a ", function(){          
    $(this).find('i').toggleClass("fa-minus");      
}); 
$(".sidebar span.icon").find('em:first').addClass("fa-plus");

$('#calendar').datepicker({
		});

$("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    
    
    
    

$(document).ready(function(){
 
	//Checkbox
	$("input[name=checktodos]").change(function(){
		$('input[type=checkbox]').each( function() {			
			if($("input[name=checktodos]:checked").length == 1){
				this.checked = true;
			} else {
				this.checked = false;
			}
		});
	});
}); 


		

$(document).ready(function(){
				$(".iframe").colorbox({iframe:true, width:"80%", height:"80%",overlayClose:false,onClosed:reloadPage});
				$(".iframeb").colorbox({iframe:true, width:"30%", height:"20%",overlayClose:false,onClosed:reloadPage});
			});
										
$(document).ready(function(){
    $(".chpic").colorbox({width:"80%", height:"80%", iframe:true, 
        onClosed:function(){ location.reload(true); } });
});
			function reloadPage() {
    location.reload(true); 
}



$(document).ready(function () {

    $('#formualta').validate({ // initialize the plugin
        rules: {
            nombre_proyecto: {
                required: true
               
            },
            descripcion_proyecto: {
                required: true,
                minlength: 5
            }
        }
    });

});

$(document).ready(function () {

    $('#formuperiodo').validate({ // initialize the plugin
        rules: {
            primerdiames: {
                required: true
               
            },
            ultimodiames: {
                required: true,
                minlength: 10
            }
        }
    });

});
$(document).ready(function () {

    $('#formuperiodonuevo').validate({ // initialize the plugin
        rules: {
            fecha_actualizacion: {
                required: true
               
            },
            horas: {
                required: true
            }
        },
        
        messages: {},
        highlight: function (element) {
            $(element).parent().addClass('error')
        },
        unhighlight: function (element) {
            $(element).parent().removeClass('error')
        }
        
        
    });

});



$(function() { 
    // for bootstrap 3 use 'shown.bs.tab', for bootstrap 2 use 'shown' in the next line
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        // save the latest tab; use cookies if you like 'em better:
        localStorage.setItem('lastTab', $(this).attr('href'));
    });

    // go to the latest tab, if it exists:
    var lastTab = localStorage.getItem('lastTab');
    if (lastTab) {
        $('[href="' + lastTab + '"]').tab('show');
    }
});




//$("td,th")
$("th:first-child,th:nth-child(2),th:nth-child(3),th:nth-child(4),th:nth-child(5)")
  .css({
    /* required to allow resizer embedding */
    position: "relative"
  })
  /* check .resizer CSS */
  .prepend("<div class='resizer'></div>")
  .resizable({
    resizeHeight: false,
    // we use the column as handle and filter
    // by the contained .resizer element
    handleSelector: "",
    onDragStart: function(e, $el, opt) {
      // only drag resizer
      if (!$(e.target).hasClass("resizer"))
        return false;
      return true;
    }
  }); 