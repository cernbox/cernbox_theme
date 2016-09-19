<?php /** @var $l OC_L10N */ ?>
<?php
vendor_script('jsTimezoneDetect/jstz');
script('core', [
	'visitortimezone',
	'lostpassword',
	'login'
]);
?>

<!--[if IE 8]><style>input[type="checkbox"]{padding:0;}</style><![endif]-->
<form method="post" name="login" action="/index2.php?redirect_url=<?php p($_['redirect_url']) ?>">
	<fieldset>
	<div id="message" class="hidden">
		<img class="float-spinner" alt=""
			src="<?php p(\OCP\Util::imagePath('core', 'loading-dark.gif'));?>">
		<span id="messageText"></span>
		<!-- the following div ensures that the spinner is always inside the #message div -->
		<div style="clear: both;"></div>
	</div>
	<p class="grouptop">
		<input type="submit" id="submit" title="<?php p($l->t('Proceed to CERNBox')); ?>" value="Proceed to CERNBox" disabled="disabled"/>
	</p>

	<input type="hidden" name="timezone-offset" id="timezone-offset"/>
	<input type="hidden" name="timezone" id="timezone"/>
	<input type="hidden" name="requesttoken" value="<?php /*p($_['requesttoken']) */?>">
	</fieldset>
</form>
