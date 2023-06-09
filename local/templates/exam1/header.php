<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$GLOBALS['APPLICATION']->RestartBuffer();
IncludeTemplateLangFile(__FILE__);?>
<?use Bitrix\Main\Page\Asset;?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->ShowHead();?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/reset.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/owl.carousel.css");

    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/owl.carousel.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/scripts.js");

    Asset::getInstance()->addString('<link rel="icon" type="image/vnd.microsoft.icon" href="'.SITE_TEMPLATE_PATH.'favicon.ico">'); // верстке не было иконки
    Asset::getInstance()->addString('<link rel="shortcut icon" href="'.SITE_TEMPLATE_PATH.'favicon.ico">'); // верстке не было иконки
    ?>

    <?$isMainPage = $APPLICATION->GetCurPage(false) == SITE_DIR;?>
    <?
    $Now = date(H);
    $WorkDayStart = 9;
    $WorkDayEnd = 18;
    ?>
</head>
<?$APPLICATION->ShowPanel();?>
<body>
    <!-- wrap -->
    <div class="wrap">
        <!-- header -->
        <header class="header">
            <div class="inner-wrap">
                <div class="logo-block"><a href="" class="logo">Мебельный магазин</a>
                </div>
                <div class="main-phone-block">
                    <a href="tel:84952128506" class="phone">
                    <?if($WorkDayStart < $Now && $Now < $WorkDayEnd):?>
                        <?$APPLICATION->IncludeFile(
                            SITE_DIR."/include/telephone.php",
                            array(),
                            array(
                                "MODE" => "text"
                            )
                        );?>
                    <?else:?>
                        <?$APPLICATION->IncludeFile(
                            SITE_DIR."/include/email.php",
                            array(),
                            array(
                                "MODE" => "text"
                            )
                        );?>
                    <?endif;?>
                    </a>
                    <div class="shedule">время работы с 9-00 до 18-00</div>

                </div>
                <div class="actions-block">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:search.form",
                        "template1",
                        Array()
                    );?>
					<?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form", 
	"new", 
	array(
		"FORGOT_PASSWORD_URL" => "/user/",
		"PROFILE_URL" => "/user/profile.php",
		"REGISTER_URL" => "/user/register.php",
		"SHOW_ERRORS" => "N",
		"COMPONENT_TEMPLATE" => "new"
	),
	false
);?>
                </div>
            </div>
        </header>
        <!-- /header -->
        <!-- nav -->
        <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"horizontal", 
	array(
		"COMPONENT_TEMPLATE" => "horizontal",
		"ROOT_MENU_TYPE" => "top",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "3",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>
        <!-- /nav -->
        <?if(!($isMainPage)):?>
        <!-- breadcrumbs -->
            <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "template1", Array(

            ),
                false
            );?>
        <?endif;?>
        <!-- /breadcrumbs -->
        <div class="page">
            <!-- content box -->
            <div class="content-box">
                <?if($isMainPage):?>
                    <div class="content">
                        <div class="cnt">

                            <p>«Мебельная компания» осуществляет производство мебели на высококлассном оборудовании с применением минимальной доли ручного труда, что позволяет обеспечить высокое качество нашей продукции. Налажен производственный процесс как массового и индивидуального характера, что с одной стороны позволяет обеспечить постоянную номенклатуру изделий и индивидуальный подход – с другой.
                            </p>


                            <!-- index column -->
                            <div class="cnt-section index-column">
                                <div class="col-wrap">

                                    <!-- main actions box -->
                                    <div class="column main-actions-box">
                                        <div class="title-block">
                                            <h2>Новинки</h2>
                                            <hr>
                                        </div>
                                        <div class="items-wrap">
                                            <div class="item-wrap">
                                                <div class="item">
                                                    <div class="title-block att">
                                                        Угловой диван!
                                                    </div>
                                                    <br>
                                                    <div class="inner-block">
                                                        <a href="" class="photo-block">
                                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/new01.jpg" alt="">
                                                        </a>
                                                        <div class="text"><a href="">Угловой диван "Титаник",  с большим выбором расцветок и фактур.</a>
                                                            <a href="" class="btn-arr"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-wrap">
                                                <div class="item">
                                                    <div class="title-block att">
                                                        Угловой диван!
                                                    </div>
                                                    <br>
                                                    <div class="inner-block">
                                                        <a href="" class="photo-block">
                                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/new02.jpg" alt="">
                                                        </a>
                                                        <div class="text"><a href="">Угловой диван "Титаник",  с большим выбором расцветок и фактур.</a>
                                                            <a href="" class="btn-arr"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-wrap">
                                                <div class="item">
                                                    <div class="title-block att">
                                                        Угловой диван!
                                                    </div>
                                                    <br>
                                                    <div class="inner-block">
                                                        <a href="" class="photo-block">
                                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/new03.jpg" alt="">
                                                        </a>
                                                        <div class="text"><a href="">Угловой диван "Титаник",  с большим выбором расцветок и фактур.</a>
                                                            <a href="" class="btn-arr"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="" class="btn-next">Все новинки</a>
                                    </div>
                                    <!-- /main actions box -->
                                    <!-- main news box -->
                                    <div class="column main-news-box">
                                        <div class="title-block">
                                            <h2>Новости</h2>
                                        </div>
                                        <hr>
                                        <div class="items-wrap">
                                            <div class="item-wrap">
                                                <div class="item">
                                                    <div class="title"><a href="">29 августа 2012</a>
                                                    </div>
                                                    <div class="text"><a href="">Поступление лучших офисных кресел из Германии </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-wrap">
                                                <div class="item">
                                                    <div class="title"><a href="">29 августа 2012</a>
                                                    </div>
                                                    <div class="text"><a href="">Мастер-класс дизайнеров  из Италии для производителей мебели </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-wrap">
                                                <div class="item">
                                                    <div class="title"><a href="">29 августа 2012</a>
                                                    </div>
                                                    <div class="text"><a href="">Поступление лучших офисных кресел из Германии </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-wrap">
                                                <div class="item">
                                                    <div class="title"><a href="">29 августа 2012</a>
                                                    </div>
                                                    <div class="text"><a href="">Наша дилерская сеть расширилась теперь ассортимент наших товаров доступен в Казани </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="" class="btn-next">Все новости</a>
                                    </div>
                                    <!-- /main news box -->

                                </div>
                            </div>
                            <!-- /index column -->

                            <!-- afisha box -->
                            <div class="cnt-section afisha-box">
                                <div class="section-title-block">
                                    <h2 class="second-ttile">Ближайшие мероприятия</h2>
                                    <a href="" class="btn-next">все мероприятия</a>
                                </div>
                                <hr>
                                <div class="items-wrap">
                                    <div class="item-wrap">
                                        <div class="item">
                                            <div class="title"><a href="">29 августа 2012, Москва</a>
                                            </div>
                                            <div class="text"><a href="">Семинар производителей мебели России и СНГ, Обсуждение тенденций.</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-wrap">
                                        <div class="item">
                                            <div class="title"><a href="">29 августа 2012, Москва</a>
                                            </div>
                                            <div class="text"><a href="">Открытие шоу-рума на Невском проспекте. Последние модели в большом ассортименте.</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-wrap">
                                        <div class="item">
                                            <div class="title"><a href="">29 августа 2012, Москва</a>
                                            </div>
                                            <div class="text"><a href="">Открытие нового магазина в нашей  дилерской сети.</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /afisha box -->


                        </div>
                    </div>
                <?endif;?>


