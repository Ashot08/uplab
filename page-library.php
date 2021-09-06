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
                            'theme_location' => 'course-digital',
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
                            'theme_location' => 'course-digital',
            'menu_id' => 'primary-menu',
            'menu_class' => 'header__top-menu',
            )
            );
            ?>
        </nav>
        <div class="common_top-logo"><img alt="logo" src="/wp-content/themes/uplab/img/logo2.png"/></div>
    </div>
    <section class="pt70">
        <img class="full-width-image" src="/wp-content/uploads/2021/08/exapmle1440x280.png">
    </section>
    <section class="sec">
        <div class="box">
            <div class="info-block">
                <div class="info-block__big-title">
                    БЕСПЛАТНЫЕ <br>
                    <div class="pl40">
                        материалы для
                    </div>
                    <div class="pl70">
                        DIGITAL-
                    </div>
                    <div class="pl40">
                        МАРКЕТОЛОГОВ
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
        <div class="box catalog">
            <div class="info-block gap40">
                <div>
                    <div class="info-block__title info-block__title_black">БИБЛИОТЕКА МАРКЕТОЛОГА ДЛЯ ПРОРЫВНОГО ЭФФЕКТА</div>
                    <div class="info-block__outlined-title">БЕСПЛАТНЫЙ, БЕЗЛИМИТНЫЙ ДОСТУП К ЧЕК-ЛИСТАМ, ИНСТРУКЦИЯМ,
                        ПОЛЕЗНЫМ МАТЕРИАЛАМ ПО DIGITAL-МАРКЕТИНГУ
                    </div>
                </div>
                <div class="pt70">
                    <ul class="catalog__menu">
                        <li class="active" data-index="0">Инструкции</li>
                        <li data-index="1">/ Чек-листы</li>
                        <li data-index="2">/ Брифы</li>
                        <li data-index="3">/ SMM</li>
                    </ul>
                    <button class="common__button catalog__download-all-button active">Скачать все материалы</button>
                    <button class="common__button catalog__download-all-button">Скачать все материалы</button>
                    <button class="common__button catalog__download-all-button">Скачать все материалы</button>
                    <button class="common__button catalog__download-all-button">Скачать все материалы</button>
                </div>
            </div>
            <div class="catalog__wrapper">
                <div class="catalog__category active">
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Инструкция по подключению Yandex Метрики
                        </div>
                        <button class="common__button common__button_dark">Скачать</button>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Инструкция по созданию креатива
                        </div>
                        <button class="common__button common__button_dark">Скачать</button>
                    </div>
                </div>
                <div class="catalog__category">
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Инструкция по подключению Yandex Метрики
                        </div>
                        <button class="common__button common__button_dark">Скачать</button>
                    </div>
                </div>
                <div class="catalog__category">
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Инструкция по подключению Yandex Метрики 3
                        </div>
                        <button class="common__button common__button_dark">Скачать</button>
                    </div>
                </div>
                <div class="catalog__category">
                    <div class="catalog__item">
                        <div class="catalog__item-header">
                            <img src="" alt="catalog-item-image">
                        </div>
                        <div class="catalog__item-title">
                            Инструкция по подключению Yandex Метрики 4
                        </div>
                        <button class="common__button common__button_dark">Скачать</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec sec_dark">
        <div class="box">
            <div class="info-block gap40">
                <div class="pt70 mob-order-2">
                    <div class="iphone-video">
                        <div class="iphone-video__iphone-image">
                            <img src="/wp-content/uploads/2021/08/Iphone-1-2-1.png" alt="iphone">
                        </div>
                        <div class="iphone-video__back-image">
                            <img src="/wp-content/uploads/2021/08/Group-2-2-1.png" alt="iphone">
                        </div>
                        <div class="iphone-video__video-wrapper">
                            <video class="iphone-video__video-video"
                                   src="/wp-content/uploads/2021/08/pexels-alena-darmel-7659845.mp4">
                                Sorry, your browser doesn't support embedded videos,
                                but don't worry, you can <a
                                    href="/wp-content/uploads/2021/08/pexels-alena-darmel-7659845.mp4">download it</a>
                                and watch it with your favorite video player!
                            </video>
                        </div>
                        <button class="iphone-video__play" aria-label="play pause toggle"></button>
                        <button class="iphone-video__full-screen" aria-label="play pause toggle"></button>
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


    <footer>
        <section class="sec">
            <div class="common-footer box">
                <div>
                    <img alt="logo" src="/wp-content/themes/uplab/img/logo2.png">
                </div>
                <div>КОНТАКТЫ:
                    <p>
                        Email: up_lab@mail.ru    кликабельный
                        Phone: +7 911 129 96 94 кликабельный
                        Иконки Мессенджеры как на главной кликабельные
                    </p>
                </div>
                <div>
                    РЕКВИЗИТЫ:
                    <p>
                        ИП Караказова Анастасия Павловна
                        Юридический и почтовый адрес:
                        192076, Санкт-Петербург,
                        пр. Рыбацкий, д. 15, корп. 1, кв. 319
                        ИНН/КПП: 222509007480
                    </p>
                </div>
                <div><a href="/">ПОЛИТИКА КОНФИДЕНЦИАЛЬНОСТИ</a></div>
            </div>
        </section>
    </footer>

</main><!-- #main -->
<script>
    jQuery('.catalog__menu').click((e)=>{
        if(e.target.tagName === 'LI'){
            e.target.closest('ul').querySelector('.active').classList.remove('active');
            e.target.classList.add('active');
        }else{
            return;
        }

        e.target.closest('.catalog').querySelector('.catalog__category.active').classList.remove('active');
        e.target.closest('.catalog').querySelectorAll('.catalog__category')[e.target.dataset.index].classList.add('active');

        e.target.closest('.catalog').querySelector('.catalog__download-all-button.active').classList.remove('active');
        e.target.closest('.catalog').querySelectorAll('.catalog__download-all-button')[e.target.dataset.index].classList.add('active');

    })
</script>
<?php

get_footer();
