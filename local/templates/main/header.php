<?php
/**
 * Created by PhpStorm.
 * User: Таня
 * Date: 28.10.2016
 * Time: 1:27
 */
?>
<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die(); ?>
<?use Bitrix\Main\Localization\Loc; use Bitrix\Main\Page\Asset;Loc::loadMessages(__FILE__);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?=LANGUAGE_ID?>">
<head>
    <title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->ShowHead();?>
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."templates_styles.css");?>
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/jquery-1.4.2.min.js", true);?>
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/slideBlock.js", true);?>
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/latte.js", true);?>
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/loopedslider.js", true);?>
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/looped-options.js", true);?>
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/jquery.roundabout.min.js", true);?>
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/loader.js", true);?>
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/ddsmoothmenu.js", true);?>
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/cufon.js", true);?>
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/cufon-fonts.js", true);?>
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/cufon-settings.js", true);?>
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/input.js", true);?>
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/main.js", true);?>
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/_include/css/ie.css");?>
    <!--[if lt IE 8]><![endif]-->
</head>
<body>
<?$APPLICATION->ShowPanel();?>
<!-- start header -->
<div class="header-wrap">
    <div id="header">
        <div class="header-holder">
            <div class="wrap">
                <h1 class="logo"><a href="index.html">Synoptic</a></h1>
                <?$APPLICATION->IncludeComponent( "bitrix:main.include", "", Array(
                    "COMPONENT_TEMPLATE" => ".default",
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => SITE_TEMPLATE_PATH."/include_areas/logo.php"
                ) );?>
                <ul id="nav" class="ddsmoothmenu">
                    <li class="active"><a href="index.html" class="home">Home</a></li>
                    <li><a href="about.html"><span><em>About</em></span></a></li>
                    <li><a href="blog.html"><span><em>Blog</em></span></a></li>
                    <li><a href="portfolio.html"><span><em>Portfolio</em></span></a></li>
                    <li><a href="market.html"><span><em>Market</em></span></a></li>
                    <li><a href="contacts.html"><span><em>Contacts</em></span></a></li>
                </ul>
            </div>
            <div class="form-wrap">
                <form action="#" class="search-form">
                    <fieldset>
                        <span class="text-wrap"><input type="text" class="text" value="Start searching..." /></span>
                        <input type="submit" class="submit" value="Start searching..." />
                    </fieldset>
                </form>
                <form action="#" class="login-form">
                    <fieldset>
                        <input type="button" class="button sign-up" value="Sign up" />
                        <input type="button" class="button sign-in" value="Sign in" />
                        <span class="text-wrap"><input type="text" class="text" value="Password..." /></span>
                        <span class="text-wrap"><input type="text" class="text" value="Login..." /></span>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end header -->
<!-- start intro-holder -->
<div id="intro-holder">
    <div class="intro-box">
        <div class="roundabout-holder large">
            <ul id="myRoundabout">
                <li>
                    <img src="<?=SITE_TEMPLATE_PATH;?>/images/1.gif" alt="image description" width="100%" />
                    <div class="image">

                    </div>
                </li>
                <li>
                    <img src="<?=SITE_TEMPLATE_PATH;?>/images/2.gif" alt="image description" width="100%" />
                    <div class="image">

                    </div>
                </li>
                <li>
                    <img src="<?=SITE_TEMPLATE_PATH;?>/images/3.gif" alt="image description" width="100%" />
                    <div class="image">

                    </div>
                </li>
            </ul>
            <div class="controls">
                <a href="#" id="next">Next!</a>
                <a href="#" id="previous">Previous!</a>
            </div>
        </div>
    </div>
</div>
<!-- end intro-holder -->
<!-- start promo-box -->
<div class="promo-wrap">
    <div class="promo-box">
        <div class="promo-holder">
            <strong class="promo-text">Konnichiwa &amp; Welcome! You don't know how it work?</strong>
            <a href="#steps-slider" class="btn-take ancLinks">Take a tour right now!</a>
        </div>
    </div>
</div>
<!-- end promo-box -->
<div id="steps-slider">
    <div class="steps-holder">
        <ul class="pagination">
            <li class="active">
                <a href="#">
                    <strong class="title title01">Start</strong>
                    <span>Pellentesque fermentum neque vel nisl auctor eget tincidunt mi.</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <strong class="title title02">Step 2</strong>
                    <span>Cum sociis natoque penatibus et magnis dis parturient montes.</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <strong class="title title03">Step 3</strong>
                    <span>Fusce porttitor, diam id accumsan porta, enim sem varius.</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <strong class="title title04">Finish!</strong>
                    <span>Pellentesque fermentum neque vel nisl auctor eget tincidunt.</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="controls">
        <a href="#" class="previous">previous</a>
        <a href="#" class="next">next</a>
    </div>
    <div class="slide-holder">
        <div class="container">
            <ul class="slides">
                <li>
                    <div class="image">
                        <img class="large" src="<?=SITE_TEMPLATE_PATH;?>/images/bg-image02.gif" alt="image description" width="275" height="307" />
                    </div>
                    <div class="text-box">
                        <h2>Synoptic is premium PSD template!</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed condimentum turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices condimentum vestibulum. Phasellus dictum, dolor et gravida tempor, ante enim eleifend erat, id ullamcorper eros augue in metus. </p>
                        <p>Sed fringilla dui id ante volutpat ut pellentesque lacus semper. Duis laoreet congue consectetur. Aliquam volutpat scelerisque dui ac fringilla. Praesent et volutpat urna. Sed ipsum dolor, dapibus a ultrices a, pellentesque eget metus. Vestibulum eu nisl sed massa sodales mollis. </p>
                        <p>Morbi posuere, mauris at tempor semper, ligula sem scelerisque turpis, ac interdum orci urna sit amet enim. Morbi posuere ultricies dapibus. Nam eget turpis in mi consequat aliquet. Phasellus a felis libero, non aliquet lorem. Praesent accumsan magna nec ipsum euismod et tempus neque auctor.</p>
                        <a href="#" class="more">Read more…</a>
                    </div>
                </li>
                <li>
                    <div class="text-box">
                        <h2>Synoptic is premium PSD template!</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed condimentum turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices condimentum vestibulum. Phasellus dictum, dolor et gravida tempor, ante enim eleifend erat, id ullamcorper eros augue in metus. </p>
                        <p>Sed fringilla dui id ante volutpat ut pellentesque lacus semper. Duis laoreet congue consectetur. Aliquam volutpat scelerisque dui ac fringilla. Praesent et volutpat urna. Sed ipsum dolor, dapibus a ultrices a, pellentesque eget metus. Vestibulum eu nisl sed massa sodales mollis. </p>
                        <p>Morbi posuere, mauris at tempor semper, ligula sem scelerisque turpis, ac interdum orci urna sit amet enim. Morbi posuere ultricies dapibus. Nam eget turpis in mi consequat aliquet. Phasellus a felis libero, non aliquet lorem. Praesent accumsan magna nec ipsum euismod et tempus neque auctor.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed condimentum turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices condimentum vestibulum. Phasellus dictum, dolor et gravida tempor, ante enim eleifend erat, id ullamcorper eros augue in metus. </p>
                        <p>Sed fringilla dui id ante volutpat ut pellentesque lacus semper. Duis laoreet congue consectetur. Aliquam volutpat scelerisque dui ac fringilla. Praesent et volutpat urna. Sed ipsum dolor, dapibus a ultrices a, pellentesque eget metus. Vestibulum eu nisl sed massa sodales mollis. </p>
                        <p>Morbi posuere, mauris at tempor semper, ligula sem scelerisque turpis, ac interdum orci urna sit amet enim. Morbi posuere ultricies dapibus. Nam eget turpis in mi consequat aliquet. Phasellus a felis libero, non aliquet lorem. Praesent accumsan magna nec ipsum euismod et tempus neque auctor.</p>
                        <a href="#" class="more">Read more…</a>
                    </div>
                </li>
                <li>
                    <div class="image-left">
                        <img class="large" src="<?=SITE_TEMPLATE_PATH;?>/images/bg-image02.gif" alt="image description" width="275" height="307" />
                    </div>
                    <div class="text-box">
                        <h2>Synoptic is premium PSD template!</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed condimentum turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices condimentum vestibulum. Phasellus dictum, dolor et gravida tempor, ante enim eleifend erat, id ullamcorper eros augue in metus. </p>
                        <p>Sed fringilla dui id ante volutpat ut pellentesque lacus semper. Duis laoreet congue consectetur. Aliquam volutpat scelerisque dui ac fringilla. Praesent et volutpat urna. Sed ipsum dolor, dapibus a ultrices a, pellentesque eget metus. Vestibulum eu nisl sed massa sodales mollis. </p>
                        <p>Morbi posuere, mauris at tempor semper, ligula sem scelerisque turpis, ac interdum orci urna sit amet enim. Morbi posuere ultricies dapibus. Nam eget turpis in mi consequat aliquet. Phasellus a felis libero, non aliquet lorem. Praesent accumsan magna nec ipsum euismod et tempus neque auctor.</p>
                        <a href="#" class="more">Read more…</a>
                    </div>
                </li>
                <li>
                    <div class="image">
                        <img class="large" src="<?=SITE_TEMPLATE_PATH;?>/images/bg-image02.gif" alt="image description" width="275" height="307" />
                    </div>
                    <div class="text-box">
                        <h2>Synoptic is premium PSD template!</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed condimentum turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices condimentum vestibulum. Phasellus dictum, dolor et gravida tempor, ante enim eleifend erat, id ullamcorper eros augue in metus. </p>
                        <p>Sed fringilla dui id ante volutpat ut pellentesque lacus semper. Duis laoreet congue consectetur. Aliquam volutpat scelerisque dui ac fringilla. Praesent et volutpat urna. Sed ipsum dolor, dapibus a ultrices a, pellentesque eget metus. Vestibulum eu nisl sed massa sodales mollis. </p>
                        <p>Morbi posuere, mauris at tempor semper, ligula sem scelerisque turpis, ac interdum orci urna sit amet enim. Morbi posuere ultricies dapibus. Nam eget turpis in mi consequat aliquet. Phasellus a felis libero, non aliquet lorem. Praesent accumsan magna nec ipsum euismod et tempus neque auctor.</p>
                        <a href="#" class="more">Read more…</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- start main -->
<div id="main">
    <div class="popular-holder">