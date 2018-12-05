
$(document).ready(function(){

$("#Menu .list-group-submenu").on('shown.bs.collapse', function ()
{
    var active = $(this).attr('id');
    var panels= localStorage.panels === undefined ? new Array() : JSON.parse(localStorage.panels);
    if ($.inArray(active,panels)==-1) //check that the element is not in the array
        panels.push(active);
    localStorage.panels=JSON.stringify(panels);
});

$("#Menu .list-group-submenu").on('hidden.bs.collapse', function ()
{
    var active = $(this).attr('id');
    var panels= localStorage.panels === undefined ? new Array() : JSON.parse(localStorage.panels);
    var elementIndex=$.inArray(active,panels);
    if (elementIndex!==-1) //check the array
    {        
        panels.splice(elementIndex,1); //remove item from array
    }
    localStorage.panels=JSON.stringify(panels); //save array on localStorage
});




$("#Menu #MenuLvl1").on('shown.bs.collapse', function ()
{
    var active = $(this).attr('id');
    var panels= localStorage.panels === undefined ? new Array() : JSON.parse(localStorage.panels);
    if ($.inArray(active,panels)==-1) //check that the element is not in the array
        panels.push(active);
    localStorage.panels=JSON.stringify(panels);
});

$("#Menu #MenuLvl1").on('hidden.bs.collapse', function ()
{
    var active = $(this).attr('id');
    var panels= localStorage.panels === undefined ? new Array() : JSON.parse(localStorage.panels);
    var elementIndex=$.inArray(active,panels);
    if (elementIndex!==-1) //check the array
    {        
        panels.splice(elementIndex,1); //remove item from array
    }
    localStorage.panels=JSON.stringify(panels); //save array on localStorage
});



$("#Menu #SubSubMenu1").on('shown.bs.collapse', function ()
{
    var active = $(this).attr('id');
    var panels= localStorage.panels === undefined ? new Array() : JSON.parse(localStorage.panels);
    if ($.inArray(active,panels)==-1) //check that the element is not in the array
        panels.push(active);
    localStorage.panels=JSON.stringify(panels);
});

$("#Menu #SubSubMenu1").on('hidden.bs.collapse', function ()
{
    var active = $(this).attr('id');
    var panels= localStorage.panels === undefined ? new Array() : JSON.parse(localStorage.panels);
    var elementIndex=$.inArray(active,panels);
    if (elementIndex!==-1) //check the array
    {        
        panels.splice(elementIndex,1); //remove item from array
    }
    localStorage.panels=JSON.stringify(panels); //save array on localStorage
});

var panels=localStorage.panels === undefined ? new Array() : JSON.parse(localStorage.panels); //get all panels
    for (var i in panels){ //<-- panel is the name of the cookie
        if ($("#"+panels[i]).hasClass('list-group-submenu')) // check if this is a panel
        {
            $("#"+panels[i]).collapse("show");
        }
    }
  });



