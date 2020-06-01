<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "Example, Один, Страница");
$APPLICATION->SetPageProperty("description", "Это точно страница Example 1");
$APPLICATION->SetTitle("Example 1");
?>
Hello World
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>