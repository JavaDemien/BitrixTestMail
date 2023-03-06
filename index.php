<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Тестовое задание Bitrix");
?>

<h1 class="container mt-2">Тестовое задание Bitrix</h1>

<?$APPLICATION->IncludeComponent(
	"javademien:main.feedback",
	"bootstrap_v4",
	Array(
		"EMAIL_TO" => "javademien@gmail.com",
		"EVENT_MESSAGE_ID" => array(),
		"OK_TEXT" => "Спасибо, ваш заказ принят в обработку.",
		"REQUIRED_FIELDS" => array("EMAIL", "GOODS", "GOOD1", "GOOD2", "GOOD3"),
		"USE_CAPTCHA" => "N",
		"AJAX_MODE" => "Y"
	)
);?><?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>