<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();

\Bitrix\Main\UI\Extension::load("ui.bootstrap4");
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<div class="container my-4">
	<?if(!empty($arResult["ERROR_MESSAGE"]))
	{
		foreach($arResult["ERROR_MESSAGE"] as $v)
			ShowError($v);
	}
	if($arResult["OK_MESSAGE"] <> '')
	{
		?><div class="alert alert-success"><?=$arResult["OK_MESSAGE"]?></div><?
	}
	?>
	<form action="<?=POST_FORM_ACTION_URI?>" method="POST">
		<?=bitrix_sessid_post()?>

		<div class="form-group d-flex flex-column mb-2">
			<h4 class=""><?=GetMessage("MFT_GOODS")?><? if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?><span class="mf-control-required">*</span><?endif?></h4>
			<label for="mainFeedback_goods" class="form-check-label">
			<input
				type="checkbox"
				name="user_goods[]"
				id="mainFeedback_goods1"
				class="form-check-input mr-1"
				value="<?=$arResult["AUTHOR_GOODS"][0] ?? 'Товар 1' ?>"
				<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("GOODS", $arParams["REQUIRED_FIELDS"])):?><?endif?>
			/><?=GetMessage("MFT_GOOD1")?></label>
			<label for="mainFeedback_goods" class="form-check-label">
			<input
				type="checkbox"
				name="user_goods[]"
				id="mainFeedback_goods2"
				class="form-check-input mr-1"
				value="<?=$arResult["AUTHOR_GOODS"][1] ?? 'Товар 2' ?>"
				<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("GOODS", $arParams["REQUIRED_FIELDS"])):?><?endif?>
			/><?=GetMessage("MFT_GOOD2")?></label>
			<label for="mainFeedback_goods" class="form-check-label">
			<input
				type="checkbox"
				name="user_goods[]"
				id="mainFeedback_goods3"
				class="form-check-input mr-1"
				value="<?=$arResult["AUTHOR_GOODS"][2] ?? 'Товар 3'?>"
				<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("GOODS", $arParams["REQUIRED_FIELDS"])):?><?endif?>
			/><?=GetMessage("MFT_GOOD3")?></label>
		</div>

		<div class="form-group">
			<label for="mainFeedback_email"><?=GetMessage("MFT_EMAIL")?><?
				if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?><span class="mf-control-required">*</span><?endif?></label>
			<input
				type="text"
				name="user_email"
				id="mainFeedback_email"
				class="form-control"
				value="<?=$arResult["AUTHOR_EMAIL"]?>"
				<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?><?endif?>
			/>
		</div>

		<?if($arParams["USE_CAPTCHA"] == "Y"):?>
		<div class="form-row">
			<div class="form-group col-auto">
				<label><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-control-required">*</span></label><br/>
				<input type="text" if="mainFeedback_captcha" class="form-control" name="captcha_word" size="30" maxlength="50" value=""/><br/>
			</div>
			<div class="form-group col">
				<label for="mainFeedback_captcha"><?=GetMessage("MFT_CAPTCHA")?></label> <div style="clear:both"></div>
				<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
				<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="38" alt="CAPTCHA">
			</div>
		</div>
		<?endif;?>

		<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
		<input type="submit" name="submit"  value="<?=GetMessage("MFT_SUBMIT")?>" class="mt-2 btn btn-primary">
	</form>
</div>