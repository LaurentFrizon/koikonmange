<?php
/**
 * Sample layout.
 */
use Core\Language;
use Helpers\Assets;
use Helpers\Url;

extract($data);
?>
<script>
	var ajaxAccueilUrl = "<?= DIR . Url::URI_AJAX_ACCUEIL ?>";

	var srcPlat = "<?= DIR . Url::relativeTemplatePath() . "/img/" ?>";
</script>

<div class="row">
	<div class="col-xs-4"></div>
	<div class="col-xs-4">
		<div style="max-width: 350px; height: 350px; margin-bottom: 20px; margin-top: 100px;">
			<img id="image-du-plat" alt="">
		</div>
		<div id="nom-du-plat" class="text-center" style="margin-bottom: 20px; font-size: 20pt;"> Pâtes carbo ? </div>
		<div class="row">
			<button id="btn-non" onclick="clickBtnNon()" class="col-xs-6">Non</button>
			<button id="btn-oui" onclick="clickBtnOui()" class="col-xs-6">Oui</button>
		</div>
	</div>
	<div class="col-xs-4"></div>
</div>



