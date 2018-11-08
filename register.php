<?
include($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");


global $USER;
$arResult = $USER->Register($_REQUEST['mail'], $_REQUEST['name'], $_REQUEST['last_name'], $_REQUEST['pass'], $_REQUEST['pass'], $_REQUEST['mail']);

exit(json_encode($arResult));
