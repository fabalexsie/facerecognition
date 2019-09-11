<?php
	script('facerecognition', 'admin');
	style('facerecognition', 'facerecognition');
?>

<form id="facerecognition">
	<div class="section">
		<h2>
			<?php p($l->t('Face Recognition'));?>
			<a target="_blank" rel="noreferrer noopener" class="icon-info" title="<?php p($l->t('Open Documentation'));?>" href="https://github.com/matiasdelellis/facerecognition/wiki"></a>
		</h2>
		<h3>
			<?php p($l->t('Sensitivity'));?>
		</h3>
		<p class="settings-hint"><?php p($l->t('The sensitivity determines how different the faces can be to continue to be considered as the same person.'));?>
			<a target="_blank" rel="noreferrer noopener" class="icon-info" title="<?php p($l->t('Open Documentation'));?>" href="https://github.com/matiasdelellis/facerecognition/wiki/Sensitivity"></a>
		</p>
		<p>
			<span><?php p($l->t('More sensitivity, more groups'));?></span>
			<span><input type="range" id="sensitivity-range" min="0.4" max="0.6" value="0.5" step="0.01" class="ui-slider"></span>
			<span><?php p($l->t('Less sensitivity, less groups'));?></span>
			<span id="sensitivity-value"class="span-highlighted">...</span>
			<a id="restore-sensitivity" class="icon-align icon-history" style="display: none;" title="<?php p($l->t('Restore'));?>" href="#"></a>
			<a id="save-sensitivity" class="icon-align icon-edit" style="display: none;" title="<?php p($l->t('Save'));?>" href="#"></a>
		</p>
		<br>
		<h3>
			<?php p($l->t('Memory limits'));?>
		</h3>
		<p class="settings-hint"><?php p($l->t('Assigning more RAM can improve the results, but the analysis will be slower. Limiting its use you will get results faster, but for example you can lose the discovery of smaller faces in your images.'));?>
			<a target="_blank" rel="noreferrer noopener" class="icon-info" title="<?php p($l->t('Open Documentation'));?>" href="https://github.com/matiasdelellis/facerecognition/wiki/Performance-analysis-of-DLib%E2%80%99s-CNN-face-detection"></a>
		</p>
		<p>
			<span><input type="memory" id="memory-limits-text" name="memory-limits-text" placeholder="<?php p($l->t('Use subfix as 2048 MB or 2G'));?>"></span>
			<span id="memory-limits-value"class="span-highlighted">...</span>
			<a id="restore-memory-limits" class="icon-align icon-history" style="display: none;" title="<?php p($l->t('Restore'));?>" href="#"></a>
			<a id="save-memory-limits" class="icon-align icon-edit" style="display: none;" title="<?php p($l->t('Save'));?>" href="#"></a>
		</p>
		<br>
		<h3>
			<?php p($l->t('Additional settings'));?>
		</h3>
		<p>
			<input id="showNotGrouped" name="showNotGrouped" type="checkbox" class="checkbox">
			<label for="showNotGrouped"><?php p($l->t('Show persons with a only 1 face found'));?></label><br>
		</p>
		<br>
		<h3>
			<?php p($l->t('Configuration information'));?>
			<span class="status success<?php if(!($_['pdlib-loaded'] && $_['model-present'])):?> error<?php endif;?>"></span>
		</h3>
		<p><label>Pdlib Version: </label><?php p($_['pdlib-version']);?></p>
		<p><label>Models Version: </label><?php p($_['model-version']);?></p>
		<p><span><?php p($_['resume']); ?></span></p>
		<br>
		<h3>
			<?php p($l->t('Current status'));?>
		</h3>
		<div>
			<p id="progress-text"><?php p($l->t('Stopped'));?></p>
			<progress id="progress-bar" value="0" max="100"></progress>
		</div>
	</div>
</form>