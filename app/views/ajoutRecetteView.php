<?php
	extract($data);
?>

<div id="app">
	<add-ingredients v-model="ingredient" :placeholders="grille.placeholdersIng" @save-ingredient="saveIng"></add-ingredients>
	<add-receipes></add-receipes>
</div>