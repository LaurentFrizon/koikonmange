"use strict";

var addIngredients = {

    props: ["value", "placeholders"],

    template: `
    <div class="col-xs-6">
            <h2>Add tes ingrédients: </h2>
            <div class="row">
                <div class="col-xs-12 text-center form-group">
                    <label class="col-xs-12">Nom de l'ingrédient: </label>
                    <input class="input-style form-control" type="text" :placeholder="placeholders.nomIng" v-model="value.nomIng">
                </div>
                <div class="col-xs-12 text-center form-group">
                    <label class="col-xs-12">Type de l'ingrédient: </label>
                    <input class="input-style form-control" type="text" :placeholder="placeholders.typeIng" v-model="value.typeIng">
                </div>
                <div class="col-xs-12 text-center form-group">
                    <label class="col-xs-12">Calories de l'ingrédient /100g: </label>
                    <input class="input-style form-control" type="text" :placeholder="placeholders.calIng" v-model="value.calIng">
                </div>
                <div class="col-xs-12 text-center form-group">
                    <label class="col-xs-12">Prix de l'ingrédient /kg: </label>
                    <input class="input-style form-control" type="text" :placeholder="placeholders.prixIng" v-model="value.prixIng">
                </div>
                <div class="col-xs-12 text-center form-group">
                    <button class="btn btn-success" style="width:50%;" @click="clickBtn">Ajouter l'ingrédient</button>
                </div>
            </div>
        </div>`,

    methods: {
        clickBtn: function() {
            /* if(!(this.value.nomIng && this.value.typeIng && this.value.calIng && this.value.prixIng)) {
                return alert(Error.ErrSaisie);
            } */
            this.$emit("save-ingredient");

        },
    },
        
}
