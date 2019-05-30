<?php
	extract($data);
	use Helpers\Url;
?>

<script>
	var ajaxUrladdIng = "<?= Url::URI_AJAX_ADD; ?>";
	console.log(ajaxUrladdIng)
</script>

<div id="app">
	<add-ingredients v-model="ingredient" :placeholders="grille.placeholdersIng" @save-ingredient="saveIng"></add-ingredients>
	<add-receipes></add-receipes>
</div>