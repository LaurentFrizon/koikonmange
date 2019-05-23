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
		<div style=" margin-bottom: 20px; margin-top: 100px;">
			<img id="image-du-plat" alt="" style="width: 100%; height: 100%">
		</div>
		<div id="nom-du-plat" class="text-center" style="margin-bottom: 20px; font-size: 20pt;"> Pâtes carbo ? </div>
		<div class="row">
			<button id="btn-non" onclick="clickBtnNon()" class="col-xs-6 btn btn-primary btn-lg">Non</button>
			<button id="btn-oui" type="button" class="col-xs-6 btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Oui</button>
		</div>
	</div>
	<div class="col-xs-4"></div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button id="btn-save" type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>



