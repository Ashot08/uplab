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
                            'menu_id'        => 'primary-menu',
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
                            'menu_id'        => 'primary-menu',
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
                         ПРОДВИЖЕНИИ?</div>
                     </div>
                     <div>
                        <div class="info-block__outlined-title info-block__outlined-title__main">БУДУЩЕЕ ЗА КОМПЛЕКСНЫМ DIGITAL-МАРКЕТИНГОМ</div>
                        <ul class="list">
                            <li>
                                ✓ Бизнес ищет стратегов, аналитиков, рекламистов, копирайтеров, SMMщиков в одном лице. Комплексная экспертность актуальна, как никогда.
                            </li>
                            <li>
                                ✓ Только комплексные знания всех инструментов digital-маркетинга позволят выбрать и настроить лучшие каналы продаж, а, значит, принести реальные ДЕНЬГИ бизнесу, а не охваты.
                            </li>
                            <li>
                                ✓ Специалисты, разбирающиеся в стратегии продвижения и аналитике, а также одновременно владеющие практическими навыками внедрения трендовых инструментов продвижения, на вес золота на современном рынке услуг!
                            </li>
                        </ul>
                         <div class="info-block__outlined-title info-block__outlined-title__main">БЕСПЛАТНЫЙ ЭКСПРЕСС-КУРС «DIGITAL-МАРКЕТИНГ: ПАКЕТ ЗНАНИЙ ДЛЯ ВЗРЫВНОГО ЭФФЕКТА»</div>
                     </div>
                </div>
            </div>
        </section>
	</main><!-- #main -->

<?php

get_footer();
