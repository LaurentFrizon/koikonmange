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
    $(jQuery).ready(function($){
    	
    });
</script>

<div class="row">
	<div class="col-xs-4"></div>
	<div class="col-xs-4">
		<div id="image-du-plat" style="width: 100%; height: 350px; background-color: red; margin-bottom: 20px; margin-top: 100px;"></div>
		<div id="nom-du-plat" class="text-center" style="margin-bottom: 20px; font-size: 20pt;"> Pâtes carbo ? </div>
		<div class="row">
			<button id="btn-non" class="col-xs-6">Non</button>
			<button id="btn-oui" class="col-xs-6">Oui</button>
		</div>
	</div>
	<div class="col-xs-4"></div>
</div>



