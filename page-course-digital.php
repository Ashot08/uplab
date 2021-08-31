<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package uplab
 */

get_header();
?>
<main id="primary" class="site-main">
    <div class="nav-toggle">
        <div class="nav-toggle-bar"></div>
    </div>
    <div class="common_header-wrapper box">
        <header id="masthead" class="site-header">
            <div class="common_header">
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                'menu_id' => 'primary-menu',
                'menu_class' => 'common_top-menu',
                )
                );
                ?>
            </div>
        </header><!-- #masthead -->
        <nav class="nav">
            <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
            'menu_id' => 'primary-menu',
            'menu_class' => 'header__top-menu',
            )
            );
            ?>
        </nav>
        <div class="common_top-logo"><img alt="logo" src="/wp-content/themes/uplab/img/logo2.png"/></div>
    </div>
    <section class="sec">
        <img class="full-width-image" src="/wp-content/uploads/2021/08/exapmle1440x280.png">
    </section>
    <section class="sec">
        <div class="box">
            <div class="info-block">
                <div class="info-block__big-title">
                    ХОТИТЕ СТАТЬ<br>
                    <div class="pl40">
                        высокооплачиваемым
                    </div>
                    ЭКСПЕРТОМ в
                    <div class="pl40">
                        комплексном<br>
                        ПРОДВИЖЕНИИ?
                    </div>
                </div>
                <div>
                    <div class="info-block__outlined-title info-block__outlined-title__main">БУДУЩЕЕ ЗА КОМПЛЕКСНЫМ
                        DIGITAL-МАРКЕТИНГОМ
                    </div>
                    <ul class="list">
                        <li>
                            ✓ Бизнес ищет стратегов, аналитиков, рекламистов, копирайтеров, SMMщиков в одном лице.
                            Комплексная экспертность актуальна, как никогда.
                        </li>
                        <li>
                            ✓ Только комплексные знания всех инструментов digital-маркетинга позволят выбрать и
                            настроить лучшие каналы продаж, а, значит, принести реальные ДЕНЬГИ бизнесу, а не охваты.
                        </li>
                        <li>
                            ✓ Специалисты, разбирающиеся в стратегии продвижения и аналитике, а также одновременно
                            владеющие практическими навыками внедрения трендовых инструментов продвижения, на вес золота
                            на современном рынке услуг!
                        </li>
                    </ul>
                    <div class="info-block__outlined-title info-block__outlined-title__main">БЕСПЛАТНЫЙ ЭКСПРЕСС-КУРС
                        «DIGITAL-МАРКЕТИНГ: ПАКЕТ ЗНАНИЙ ДЛЯ ВЗРЫВНОГО ЭФФЕКТА»
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec sec_light">
        <div class="box">
            <div class="info-block gap40">
                <div>
                    <div class="info-block__title info-block__title_black">ДЛЯ КОГО КУРС</div>
                    <div class="info-block__outlined-title">НАЧИНАЮЩИМ СПЕЦИАЛИСТАМ DIGITAL: SMM-СПЕЦИАЛИСТАМ,
                        SEO-СПЕЦИАЛИСТАМ, ДИРЕКТОЛОГАМ, ТАРГЕТОЛОГАМ
                    </div>
                    <div class="info-block__text info-block__text_black">
                        ВЫ ПОЛУЧИТЕ КОМПЛЕКСНЫЕ ЗНАНИЯ О ВСЕХ ИНСТРУМЕНТАХ DIGITAL-МАРКТЕТИНГА, НАУЧИТЕСЬ ИМИ
                        ПОЛЬЗОВАТЬСЯ, ПОЛУЧИТЕ ПРЕДСТАВЛЕНИЕ О ПРОФЕССИИ DIGITAL-МАРКЕТОЛОГА
                    </div>
                    <div class="common__buttons-wrapper">
                        <button class="common__button common__button_dark">Записаться на курс</button>
                        <button class="common__button common__button_dark">В лист ожидания</button>
                    </div>
                </div>
                <div class="pt70">
                    <div class="iphone-video">
                        <div class="iphone-video__iphone-image">
                            <img src="/wp-content/uploads/2021/08/Iphone-1-2-1.png" alt="iphone">
                        </div>
                        <div class="iphone-video__back-image">
                            <img src="/wp-content/uploads/2021/08/Group-2-2-1.png" alt="iphone">
                        </div>
                        <div class="iphone-video__video-wrapper">
                            <video class="iphone-video__video-video"
                                   src="/wp-content/uploads/2021/08/pexels-alena-darmel-7659845.mp4" controls>
                                Sorry, your browser doesn't support embedded videos,
                                but don't worry, you can <a
                                    href="/wp-content/uploads/2021/08/pexels-alena-darmel-7659845.mp4">download it</a>
                                and watch it with your favorite video player!
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec sec_dark">
        <div class="box">
            <div class="info-block gap40">
                <div class="pt70">
                    <div class="iphone-video">
                        <div class="iphone-video__iphone-image">
                            <img src="/wp-content/uploads/2021/08/Iphone-1-2-1.png" alt="iphone">
                        </div>
                        <div class="iphone-video__back-image">
                            <img src="/wp-content/uploads/2021/08/Group-2-2-1.png" alt="iphone">
                        </div>
                        <div class="iphone-video__video-wrapper">
                            <video class="iphone-video__video-video"
                                   src="/wp-content/uploads/2021/08/pexels-alena-darmel-7659845.mp4" controls>
                                Sorry, your browser doesn't support embedded videos,
                                but don't worry, you can <a
                                    href="/wp-content/uploads/2021/08/pexels-alena-darmel-7659845.mp4">download it</a>
                                and watch it with your favorite video player!
                            </video>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="info-block__title">ДЛЯ КОГО КУРС</div>
                    <div class="info-block__outlined-title info-block__outlined-title_black-back">ПРОДОЛЖАЮЩИМ
                        СПЕЦИАЛИСТАМ DIGITAL-ПРОДВИЖЕНИЯ С ОПЫТОМ РАБОТЫ 2-3 ГОДА: SMM-СПЕЦИАЛИСТАМ, SEO-СПЕЦИАЛИСТАМ,
                        ДИРЕКТОЛОГАМ, ТАРГЕТОЛОГАМ
                    </div>
                    <div class="info-block__text">
                        ВЫ СИСТЕМАТИЗИРУЕТЕ И АКТУАЛИЗИРУЕТЕ СВОИ ЗНАНИЯ, ПОЛУЧИТЕ САМЫЕ ЭФФЕКТИВНЫЕ ФИШКИ ДЛЯ
                        КОМПЛЕКСНОЙ РАБОТЫ НА НОВОМ УРОВНЕ
                    </div>
                    <div class="common__buttons-wrapper">
                        <button class="common__button">Записаться на курс</button>
                        <button class="common__button">В лист ожидания</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec sec_light">
        <div class="box">
            <div class="info-block gap40">
                <div>
                    <div class="info-block__title info-block__title_black">ДЛЯ КОГО КУРС</div>
                    <div class="info-block__outlined-title">ВЛАДЕЛЬЦАМ БИЗНЕСА, ДИРЕКТОРАМ ПО МАРКЕТИНГУ/PR/РЕКЛАМЕ
                    </div>
                    <div class="info-block__text info-block__text_black">
                        ВЫ ПОЙМЕТЕ, КАК РАЗВИВАТЬ КОМПАНИЮ/СВОЙ БИЗНЕС В ИНТЕРНЕТЕ С СОВРЕМЕННЫХ РЕАЛИЯХ, СМОЖЕТЕ
                        САМОСТОЯТЕЛЬНО ЗАПУСКАТЬ РЕКЛАМУ, ПРАВИЛЬНО ПОДБИРАТЬ ИСПОЛНИТЕЛЕЙ, СМОЖЕТЕ ГОВОРИТЬ С ЛЮБЫМ
                        ПРЕДСТАВИТЕЛЕМ DIGITAL-СФЕРЫ НА ОДНОМ ЯЗЫКЕ
                    </div>
                    <div class="common__buttons-wrapper">
                        <button class="common__button common__button_dark">Записаться на курс</button>
                        <button class="common__button common__button_dark">В лист ожидания</button>
                    </div>
                </div>
                <div class="pt70">
                    <div class="iphone-video">
                        <div class="iphone-video__iphone-image">
                            <img src="/wp-content/uploads/2021/08/Iphone-1-2-1.png" alt="iphone">
                        </div>
                        <div class="iphone-video__back-image">
                            <img src="/wp-content/uploads/2021/08/Group-2-2-1.png" alt="iphone">
                        </div>
                        <div class="iphone-video__video-wrapper">
                            <video class="iphone-video__video-video"
                                   src="/wp-content/uploads/2021/08/pexels-alena-darmel-7659845.mp4" controls>
                                Sorry, your browser doesn't support embedded videos,
                                but don't worry, you can <a
                                    href="/wp-content/uploads/2021/08/pexels-alena-darmel-7659845.mp4">download it</a>
                                and watch it with your favorite video player!
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec">
        <div class="box">
            <div class="info-block">
                <div>
                    <div class="info-block__big-title">
                        ЧЕМУ<br>
                        <div class="pl40">
                            НАУЧИТЕСЬ
                        </div>
                    </div>
                </div>
                <div>
                    <ul class="list list_no-padding-items">
                        <li>✓ РАЗБИРАТЬСЯ В ОСНОВНЫХ ПОНЯТИЯХ, КАСАЮЩИХСЯ DIGITAL-МАРКЕТИНГА;</li>
                        <li>✓ РАЗБИРАТЬСЯ В АКТУАЛЬНЫХ ИНСТРУМЕНТАХ DIGITAL-МАРКЕТИНГА;</li>
                        <li>✓ СОСТАВЛЯТЬ ПОРТРЕТ ЦЕЛЕВОЙ АУДИТОРИИ;</li>
                        <li>✓ РАЗБИРАТЬСЯ В ПОЗИЦИОНИРОВАНИИ И УНИКАЛЬНОМ ТОРГОВОМ ПРЕДЛОЖЕНИИ;</li>
                        <li>✓ РАЗБИРАТЬСЯ В БРЕНДИНГЕ;</li>
                        <li>✓ СОЗДАВАТЬ ПРОДУКТОВУЮ МАТРИЦУ;</li>
                        <li>✓ РАЗБИРАТЬСЯ В ВИДАХ САЙТОВ, ОСНОВАХ НАПИСАНИЯ КОДА, ОСНОВАХ ЮЗАБИЛИТИ;</li>
                        <li>✓ АНАЛИЗИРОВАТЬ И ПОВЫШАТЬ КОНВЕРСИЮ САЙТА;</li>
                        <li>✓ НАСТРАИВАТЬ И АНАЛИЗИРОВАТЬ ЛЮБУЮ РЕКЛАМУ В ИНТЕРНЕТЕ;</li>
                        <li>✓ СОЗДАВАТЬ ВОРОНКИ ПРОДАЖ И МЕДИАПЛАН;</li>
                        <li>✓ АНАЛИЗИРОВАТЬ СВОИ И ЧУЖИЕ ТОЧКИ КОНТАКТА В ИНТЕРНЕТЕ;</li>
                        <li>✓ ПИСАТЬ ПРОДАЮЩИЕ ТЕКСТЫ;</li>
                        <li>✓ ПРОДВИГАТЬ ЛИЧНЫЕ БРЕНДЫ, ТОВАРЫ, УСЛУГИ В СОЦИАЛЬНЫХ СЕТЯХ;</li>
                        <li>✓ ИСПОЛЬЗОВАТЬ СОЦИАЛЬНЫЕ СЕТИ ДЛЯ ПОВЫШЕНИЯ ЛОЯЛЬНОСТИ КЛИЕНТОВ И ПРОДАЖ;</li>
                        <li>✓ ВЫСТАВЛЯТЬ И КОНТРОЛИРОВАТЬ KPI ПО DIGITAL-МАРКЕТИНГУ;</li>
                        <li>✓ РАЗБИРАТЬСЯ В АНАЛИТИКЕ И МНОГОЕ ДРУГОЕ!</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main><!-- #main -->

<?php

get_footer();
