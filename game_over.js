
$(document).ready(function(e){

    //Audio tags
	var audio = {
		sfx:{
			select:	document.getElementById("sfx-select"),
			background: document.getElementById("sfx-background"),
			move:document.getElementById("sfx-move")
		}
	};


    //On load
	$(window).on("load", function(e){
		audio.sfx.background.play();
	});

	//Hover on main manu
	$(this).on("mouseenter",".sub-menu",function(){
	  var mainMenuLst = $(".sub-menu");
	  mainMenuLst.removeClass("selected-opt");
	  $(this).addClass("selected-opt");
	  audio.sfx.select.load();
	  audio.sfx.select.play();
	});

});
