<?php
require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php';
$APPLICATION->SetTitle("Наша супер страница");
var_dump(\Bitrix\Main\Config\Configuration::getValue('exception_handling'));
?>
Hello World 2
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php';
