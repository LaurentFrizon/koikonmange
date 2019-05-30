jQuery(document).ready(function($) {

    var _appTemplate = `
    <div class="row">
    
       
        <div class="col-xs-12">
            <div class="col-xs-12">
                <label>Nom de la recette: </label>
                <select></select>
            </div>
            <div class="col-xs-12">
                <label>Nom ingrédient: </label>
                <select></select>
            </div>
        </div>
    </div>`

    var app = new Vue ({
        el: "#app",

        //template: _appTemplate,

        components: {
            "add-ingredients": addIngredients,
            "add-receipes": addReceipes,
        },

        data: function() {
            return {
                grille: {
                    placeholdersIng: {
                        "nomIng": "Pâtes",
                        "typeIng": "Féculent",
                        "calIng": "100",
                        "prixIng": "1.26",
                    }
                },
                ingredient: {
                    "nomIng": "",
                    "typeIng": "",
                    "calIng": "",
                    "prixIng": "",
                },
            }
        },

        created: function(){
            
        },

        methods: {
            saveIng: function() {
                var form = {
                    action: "save-ingredient",
                    nom: this.ingredient.nomIng,
                    type: this.ingredient.typeIng,
                    cal: this.ingredient.calIng,
                    prix: this.ingredient.prixIng,
                }
                $.post(ajaxUrladdIng, form, function(data){
                    // Ne rien faire
                },"json");
            },
        }

    });

});
