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
        <img class="full-width-image" src="/wp-content/uploads/2021/09/main_free_first-1.png">
    </section>
    <section class="sec">
        <div class="box">
            <div class="info-block">
                <div class="info-block__big-title">
                    БЕСПЛАТНЫЙ<br>
                    <div class="pl40">
                        ЭКСПРЕСС-КУРС
                    </div>
                    <div>«DIGITAL-МАРКЕТИНГ:</div>
                    ПАКЕТ ЗНАНИЙ
                    <div class="pl40">
                        ДЛЯ ВЗРЫВНОГО <br>
                        ЭФФЕКТА»
                    </div>
                </div>
                <div>
                    <div class="info-block__outlined-title info-block__outlined-title__main">
                        СОЗДАЙТЕ ЦЕЛОСТНУЮ СИСТЕМУ ПО ПРОДАЖЕ ВАШЕТО ТОВАРА ИЛИ УСЛУГИ В ИНТЕРНЕТЕ  ВСЕГО ЗА ТРИ ДНЯ
                    </div>
                    <ul class="list">
                        <li>
                            ✓ На экспресс-курсе вы создадите лендинг, который будет приносить заявки 24/7, 365 дней в году
                        </li>
                        <li>
                            ✓ Настроите и запустите воронку с 5 ключевыми каналами онлайн-продаж (email, социальные сети, контекст, площадки Яндекс, YouTube)
                        </li>
                        <li>
                            ✓ Подключите Яндекс Метрику и Google Analytics
                        </li>
                        <li>
                            ✓ Разберётесь в основах аналитики, оптимизируете настроенные каналы онлайн-продаж
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="sec sec_light">
        <div class="box">
            <div class="info-block gap40">
                <div>
                    <div class="info-block__title info-block__title_black">ДЛЯ КОГО ЭКСПРЕСС-КУРС</div>
                    <div class="info-block__outlined-title">
                        НАЧИНАЮЩИМ СПЕЦИАЛИСТАМ DIGITAL (SMM-СПЕЦИАЛИСТАМ, SEO-СПЕЦИАЛИСТАМ, ДИРЕКТОЛОГАМ, ТАРГЕТОЛОГАМ, КОПИРАЙТЕРАМ), А ТАКЖЕ СОБСТВЕННИКАМ БИЗНЕСА
                    </div>
                    <div class="info-block__text info-block__text_black">
                        ВЫ ПОЛУЧИТЕ КОМПЛЕКСНЫЕ ЗНАНИЯ ОБ ОСНОВНЫХ ИНСТРУМЕНТАХ DIGITAL-МАРКТЕТИНГА, НАУЧИТЕСЬ ИХ ПРИМЕНЯТЬ НА ПРАКТИКЕ, ВЫБЕРИТЕ НАИБОЛЕЕ ЭФФЕКТИВНЫЕ КОНКРЕТНО ДЛЯ ВАС, РАЗБЕРЕТЕСЬ В ОСНОВАХ АНАЛИТИКИ
                    </div>
                    <div class="common__buttons-wrapper">
                        <button class="common__button common__button_dark">Пройти курс бесплатно</button>
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
            </div>
        </div>
    </section>
    <section class="sec">
        <div class="box">
            <div class="info-block gap40">
                <div>
                    <div class="info-block__big-title">
                        КТО<br>
                        <div class="pl40">
                            СПИКЕР
                        </div>
                    </div>
                    <img src="/wp-content/themes/uplab/img/bg-min.png" alt="image">
                </div>
                <div>
                    <div class="info-block__title">АНАСТАСИЯ КАРАКАЗОВА</div>
                    <div class="info-block__outlined-title">DIGITAL МАРКЕТОЛОГ С 2016 ГОДА, СПЕЦИАЛИСТ ПО КОМПЛЕКСНОМУ ПРОДВИЖЕНИЮ
                    </div>
                    <div class="info-block__text">
                        <ul class="list">
                            <li>ЭКСПЕРТНОСТЬ ТРЕНЕРА:</li>
                            <li>
                                ✓ КОММУНИКАЦИОННЫЕ СТРАТЕГИИ ПРОДВИЖЕНИЯ ТОВАРОВ/УСЛУГ/ЛИЧНОГО БРЕНДА:
                                ФОРМИРОВАНИЕ И РЕАЛИЗАЦИЯ КОММУНИКАЦИОННОЙ СТРАТЕГИИ (ОТСТРАИВАНИЕ БРЕНДА, АНАЛИЗ КОНКУРЕНТОВ, РАБОТА СО СТИЛЕМ, СЕГМЕНТИРОВАНИЕ ЦЕЛЕВОЙ АУДИТОРИИ,  ФОРМИРОВАНИЕ MESSAGE, ПОСТАНОВКА ЦЕЛЕЙ И ЗАДАЧ, ОПРЕДЕЛЕНИЕ ИНСТРУМЕНТОВ);
                            </li>
                            <li>
                                ✓ ИНСТРУМЕНТЫ DIGITAL - МАРКЕТИНГА:<br>
                                1. САЙТ (ЭФФЕКТИВНАЯ ПЛОЩАДКА ДЛЯ КОММУНИКАЦИИ: SEO: ОПТИМИЗАЦИЯ САЙТОВ, СЕМАНТИКА, КЛАСТЕРИЗАЦИЯ, USER EXPERIENCE DESIGN, USER INTERFACE DESIGN);<br>
                                2. СОЦИАЛЬНЫЙ МАРКЕТИНГ - SMM (ТРАФИК, ВИЗУАЛИЗАЦИЯ, РЕКЛАМНЫЕ КАМПАНИИ: РЕМАРКЕТИНГ, РЕТАРГЕТИНГ, НАРАЩИВАНИЕ АУДИТОРИЙ, ПОВЫШЕНИЕ ВОВЛЕЧЕННОСТИ,  АНАЛИТИКА);<br>
                                3. КОНТЕКСТНАЯ РЕКЛАМА (YANDEX, GOOGLE: ВСЕ ФОРМАТЫ РАЗМЕЩЕНИЯ, ОПТИМИЗАЦИЯ КАМПАНИЙ, АНАЛИТИКА);<br>
                                4. EMAIL-МАРКЕТИНГ (ВОРОНКИ ПРОДАЖ, СЕГМЕНТАЦИЯ АУДИТОРИЙ, ОСОБЕННОСТИ ИНСТРУМЕНТОВ);<br>
                                5. КОНТЕНТ-МАРКЕТИНГ (ПРОФЕССИОНАЛЬНЫЙ КОПИРАЙТИНГ, ПРОДАЮЩИЕ ТЕКСТЫ);<br>
                                6. ТРАФИКООБРАЗУЮЩИЕ ИНСТРУМЕНТЫ (ИНЫЕ ТРЕНДОВЫЕ ИНСТРУМЕНТЫ DIGITAL-МАРКЕТИНГА).
                            </li>
                            <li>
                                ✓ ОБУЧАЮЩАЯ ДЕЯТЕЛЬНОСТЬ:<br>
                                ОБУЧЕНИЕ СОБСТВЕННИКОВ МАЛОГО И СРЕДНЕГО БИЗНЕСА, DIGITAL-МАРКЕТИНГУ; ПОВЫШЕНИЕ КВАЛИФИКАЦИИ СПЕЦИАЛИСТОВ-МАРКЕТОЛОГОВ (ИНСТРУМЕНТЫ, ТЕХНИКИ,  ТРЕНДЫ).
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="common__buttons-wrapper text-center">
                <button class="common__button">Пройти курс бесплатно</button>
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
                    <div class="info-block__title">УНИКАЛЬНОСТЬ ЭКСПРЕСС-КУРСА</div>
                    <div class="info-block__outlined-title info-block__outlined-title_black-back">
                        ДЛИТЕЛЬНОСТЬ: 3 ДНЯ
                    </div>
                    <div class="info-block__text">
                        СТАРТ: СРАЗУ ПОСЛЕ ЗАПОЛНЕНИЯ ФОРМЫ ВЫ ПОЛУЧИТЕ ССЫЛКУ ДЛЯ ДОСТУПА
                    </div>
                    <div class="info-block__text">
                        ТОЛЬКО ПРАКТИКА! ЗА ТРИ ДНЯ ВЫ ВЫСТРОИТЕ ЦЕЛОСТНУЮ СИСТЕМУ ПО ПРОДАЖЕ ВАШИХ ТОВАРОВ ИЛИ УСЛУГ В ИНТЕРНЕТЕ, ПРОТЕСТИРУЕТЕ КАНАЛЫ ПРОДАЖ И ОПРЕДЕЛИТЕ НАИБОЛЕЕ ЭФФЕКТИВНЫЕ, ОСВОИТЕ ОСНОВЫ WEB-АНАЛИТИКИ
                    </div>
                    <div class="info-block__text">
                        <strong>СТОИМОСТЬ УЧАСТИЯ: БЕСПЛАТНО</strong>
                    </div>
                    <div class="common__buttons-wrapper">
                        <button class="common__button">Пройти курс бесплатно </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec">
        <div class="box">
            <div class="info-block gap40">
                <div>
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
                </div>
                <div>
                    <div class="info-block__outlined-title">ПРАКТИЧЕСКИЙ ОФЛАЙН-КУРС ПО DIGITAL-МАРКЕТИНГУ
                    </div>
                    <div class="info-block__text">
                        <ul class="list">
                            <li><strong>НА КУРСЕ ВЫ НАУЧИТЕСЬ:</strong></li>
                            <li>
                                ✓ РАЗБИРАТЬСЯ В ОСНОВНЫХ ПОНЯТИЯХ, КАСАЮЩИХСЯ DIGITAL-МАРКЕТИНГА;<br>
                                ✓ РАЗБИРАТЬСЯ В АКТУАЛЬНЫХ ИНСТРУМЕНТАХ DIGITAL-МАРКЕТИНГА;<br>
                                ✓ СОСТАВЛЯТЬ ПОРТРЕТ ЦЕЛЕВОЙ АУДИТОРИИ;<br>
                                ✓ РАЗБИРАТЬСЯ В ПОЗИЦИОНИРОВАНИИ И УНИКАЛЬНОМ ТОРГОВОМ ПРЕДЛОЖЕНИИ;<br>
                                ✓ РАЗБИРАТЬСЯ В БРЕНДИНГЕ;<br>
                                ✓ СОЗДАВАТЬ ПРОДУКТОВУЮ МАТРИЦУ;<br>
                                ✓ РАЗБИРАТЬСЯ В ВИДАХ САЙТОВ, ОСНОВАХ НАПИСАНИЯ КОДА, ОСНОВАХ ЮЗАБИЛИТИ;<br>
                                ✓ АНАЛИЗИРОВАТЬ И ПОВЫШАТЬ КОНВЕРСИЮ САЙТА;<br>
                                ✓ НАСТРАИВАТЬ И АНАЛИЗИРОВАТЬ ЛЮБУЮ РЕКЛАМУ В ИНТЕРНЕТЕ;<br>
                                ✓ СОЗДАВАТЬ ВОРОНКИ ПРОДАЖ И МЕДИАПЛАН;<br>
                                ✓ АНАЛИЗИРОВАТЬ СВОИ И ЧУЖИЕ ТОЧКИ КОНТАКТА В ИНТЕРНЕТЕ;<br>
                                ✓ ПИСАТЬ ПРОДАЮЩИЕ ТЕКСТЫ;<br>
                                ✓ ПРОДВИГАТЬ ЛИЧНЫЕ БРЕНДЫ, ТОВАРЫ, УСЛУГИ В СОЦИАЛЬНЫХ СЕТЯХ;<br>
                                ✓ ИСПОЛЬЗОВАТЬ СОЦИАЛЬНЫЕ СЕТИ ДЛЯ ПОВЫШЕНИЯ ЛОЯЛЬНОСТИ КЛИЕНТОВ И ПРОДАЖ;<br>
                                ✓ ВЫСТАВЛЯТЬ И КОНТРОЛИРОВАТЬ KPI ПО DIGITAL-МАРКЕТИНГУ;<br>
                                ✓ РАЗБИРАТЬСЯ В АНАЛИТИКЕ И МНОГОЕ ДРУГОЕ!<br>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="common__buttons-wrapper text-center">
                <button class="common__button">Программа курса</button>
                <button class="common__button">Записаться на курс</button>
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
    jQuery('.iphone-video__play').click((e)=>{
        const videoWrapper = e.target.closest('.iphone-video');
        const video = videoWrapper.querySelector('video');
        if(video.paused) {
            video.play();
            videoWrapper.classList.add('playing');
        } else {
            video.pause();
            videoWrapper.classList.remove('playing');
        }
        video.addEventListener('ended', stopMedia);
        function stopMedia() {
            video.pause();
            video.currentTime = 0;
            videoWrapper.classList.remove('playing');
        }
    });

    jQuery('.iphone-video__full-screen').click((e)=>{
        const videoWrapper = e.target.closest('.iphone-video');
        const video = videoWrapper.querySelector('video');
        function openFullscreen() {
            if (video.requestFullscreen) {
                video.requestFullscreen();
            } else if (video.webkitRequestFullscreen) { /* Safari */
                video.webkitRequestFullscreen();
            } else if (video.msRequestFullscreen) { /* IE11 */
                video.msRequestFullscreen();
            }
        }
        openFullscreen();
    });
</script>
<?php

get_footer();
