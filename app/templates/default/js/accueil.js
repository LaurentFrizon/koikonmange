$(document).ready(function() {
	
	var btnSave = document.getElementById("btn-save");
	
	clickBtnOui = () => {
		console.log("oui");
	}
	clickBtnNon = () => {
		var nomPlat = document.getElementById("nom-du-plat");
		console.log("non");
		
		var form = {
				action: "load-recette-random",
		}
		
		$.post(ajaxAccueilUrl, form, function(data){
			if(data.status != 1){
				console.log("zdzdzd", data.error)
				return;
			}
			nomPlat.innerHTML = data.recette[0].nom_recette;
			document.getElementById("image-du-plat").src = srcPlat + data.recette[0].img_recette;
		}, "json");
		
	}
});