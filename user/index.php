<?
define("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

if(isset($_REQUEST['backurl']) && strlen($_REQUEST['backurl']))
    LocalRedirect('backurl');
?>
    <p>Вы успешно зарегестрировались</p>
    <p><a href="<?=SITE_DIR?>">Вернуться на главную</a></p>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>