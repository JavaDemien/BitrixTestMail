<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Тестоое задание Bitrix");
?>

<h1 class="container mt-2">Тестовое задание Bitrix</h1>

<?$APPLICATION->IncludeComponent(
	"javademien:main.feedback",
	"bootstrap_v4",
	Array(
		"EMAIL_TO" => "javademien@gmail.com",
		"EVENT_MESSAGE_ID" => array(),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array("EMAIL", "GOODS", "GOOD1", "GOOD2", "GOOD3"),
		"USE_CAPTCHA" => "N"
	)
);?><?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>