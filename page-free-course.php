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

<?php
$isUserLogin = is_user_logged_in();

$userID = get_current_user_id();
$userData = get_userdata( $userID );
$registrationDate = $userData->user_registered;

//Сколько часов прошло с момента регистрации (hoursLeft)
$hoursLeft =  (time() - strtotime($registrationDate))/3600;


$isSecondLessonOpen = $hoursLeft > 12;
$isThirdLessonOpen = $hoursLeft > 24;
$isFourthLessonOpen = $hoursLeft > 36;

$secondAvailableDate = date ( "d.m.Y", strtotime($registrationDate) + 12*3600 );
$thirdAvailableDate = date ( "d.m.Y", strtotime($registrationDate) + 24*3600 );
$fourthAvailableDate = date ( "d.m.Y", strtotime($registrationDate) + 36*3600 );

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
                            'theme_location' => 'free-course',
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
                            'theme_location' => 'free-course',
            'menu_id' => 'primary-menu',
            'menu_class' => 'header__top-menu',
            )
            );
            ?>
        </nav>
        <div class="common_top-logo"><img alt="logo" src="/wp-content/themes/uplab/img/logo2.png"/></div>
    </div>

    <section class="pt70">
        <img class="full-width-image" src="/wp-content/uploads/2021/09/main_free_course-1.png">
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
                        ПРОГРАММА ТРЕХДНЕВНОГО ЭКСПРЕСС-КУРСА
                    </div>
                    <ul class="list">
                        <li>
                            Первый день: вы создадите идеальную площадку для трафика – лендинг,
                            который будет приносить заявки 24/7
                        </li>
                        <li>
                            Второй день: вы создадите и запустите воронку продаж, изучите и
                            настроите 5 основных онлайн-каналов по генерации лидов
                        </li>
                        <li>
                            Третий день: вы научитесь пользоваться инструментами web-аналитики,
                            оптимизируете каналы продаж, разберетесь в показателях эффективности
                            рекламных кампаний
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <?php if(!$isUserLogin): ?>

        <section class="sec free-course__login-form">
            <div class="box">
                <h2 class="text-center">ДЛЯ ПРОХОЖДЕНИЯ БЕСПЛАТНОГО КУРСА НУЖНО АВТОРИЗОВАТЬСЯ:</h2>
                <?php
                do_action( 'woocommerce_before_customer_login_form' ); ?>

                <?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>

                <div class="u-columns col2-set info-block gap40" id="customer_login">

                    <div class="u-column1 col-1 login-column">

                        <?php endif; ?>

                        <h3>Войти</h3>

                        <form class="woocommerce-form woocommerce-form-login login" method="post">

                            <?php do_action( 'woocommerce_login_form_start' ); ?>

                            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                <label for="username"><?php esc_html_e( 'Username or email address', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
                                <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
                            </p>
                            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                <label for="password"><?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
                                <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" />
                            </p>

                            <?php do_action( 'woocommerce_login_form' ); ?>

                            <p class="form-row">
                                <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                    <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php esc_html_e( 'Remember me', 'woocommerce' ); ?></span>
                                </label>
                                <?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
                                <button type="submit" class="woocommerce-button button woocommerce-form-login__submit shadow-point-button" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>"><?php esc_html_e( 'Log in', 'woocommerce' ); ?></button>
                            </p>
                            <p class="woocommerce-LostPassword lost_password">
                                <a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php esc_html_e( 'Lost your password?', 'woocommerce' ); ?></a>
                            </p>

                            <?php do_action( 'woocommerce_login_form_end' ); ?>

                        </form>

                        <?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>

                    </div>

                    <div class="u-column2 col-2 login-column">

                        <h3>Зарегистрироваться</h3>

                        <form method="post" class="woocommerce-form woocommerce-form-register register" <?php do_action( 'woocommerce_register_form_tag' ); ?> >

                        <?php do_action( 'woocommerce_register_form_start' ); ?>

                        <?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label for="reg_username"><?php esc_html_e( 'Username', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
                            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="reg_username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
                        </p>

                        <?php endif; ?>

                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label for="reg_email"><?php esc_html_e( 'Email address', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
                            <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
                        </p>

                        <?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label for="reg_password"><?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
                            <input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" autocomplete="new-password" />
                        </p>

                        <?php else : ?>

                        <p><?php esc_html_e( 'A password will be sent to your email address.', 'woocommerce' ); ?></p>

                        <?php endif; ?>

                        <?php do_action( 'woocommerce_register_form' ); ?>

                        <p class="woocommerce-form-row form-row">
                            <?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
                            <button type="submit" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit shadow-point-button" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>
                        </p>

                        <?php do_action( 'woocommerce_register_form_end' ); ?>

                        </form>

                    </div>

                </div>
                <?php endif; ?>

                <?php do_action( 'woocommerce_after_customer_login_form' ); ?>
            </div>
        </section>

    <?php else: ?>

        <section id="first-day" class="sec sec_light">
            <div class="box">
                <div class="info-block gap40 uppercase mb40">
                    <div>
                        <div class="info-block__title info-block__title_black">Первый день: готовим идеальную площадку для трафика</div>
                        <div class="info-block__outlined-title">
                            СОЗДАЕМ ВЫСОКОКОНВЕРСИОННЫЙ лендинг,
                            который будет приносить ЛИДЫ 24/7
                        </div>
                        <div class="info-block__text info-block__text_black">
                            Виды высококонверсионных лендингов:
                            квиз, микролендинг, лендинг-сообщество
                        </div>
                        <div class="info-block__text info-block__text_black">
                            Создаем продающий лендинг за 1 день:
                            макеты, структура, топовые инструменты
                        </div>
                        <div class="info-block__text info-block__text_black">
                            Продающий контент для лендинга: позиционирование,
                            УТП, акция, message, call to action
                        </div>
                        <div class="info-block__text info-block__text_black">
                            Визуал для лендинга: топовые инструменты для
                            создания изображений, инфоргафики, баннеров
                        </div>
                    </div>
                </div>
                <div>
                    <video class="lesson__video" src="/wp-content/uploads/2021/09/novyj-proekt.mp4" controls></video>
                </div>
            </div>
        </section>
        <section id="second-day" class="sec sec_dark">
            <div class="box">
                <div class="info-block gap40 uppercase mb40">
                    <div class="info-block__title p20 text-center">
                        <?php if(!$isSecondLessonOpen): ?>
                        Урок будет доступен
                        <?php $inHours = 12 - $hoursLeft;?>
                        через<br> <?php echo floor($inHours) . '<span class="lowercase">ч</span> ' . floor( fmod($inHours, 1)*60 ); ?><span class="lowercase">мин</span>
                        <?php endif; ?>
                    </div>
                    <div>
                        <div class="info-block__title">Второй день: настраиваем воронку продаж через
                            пять основных онлайн-каналов
                        </div>
                        <div class="info-block__outlined-title info-block__outlined-title_black-back">
                            НАСТРАИВАЕМ ВЫСОКОКОНВЕРСИОННУЮ ВОРОНКУ ПРОДАЖ
                            И ПЯТЬ КЛЮЧЕВЫХ КАНАЛОВ ОНЛАЙН-ПРОДАЖ
                        </div>
                        <div class="info-block__text">
                            Воронка продаж и ее особенности
                        </div>
                        <div class="info-block__text">
                            Гайд по ключевым настройкам социальных сетей
                        </div>
                        <div class="info-block__text">
                            Запуск email-маркетинга
                        </div>
                        <div class="info-block__text">
                            Запуск контекстной рекламы Yandex Direct, Google Adwords
                        </div>
                        <div class="info-block__text">
                            Яндекс Кью, Яндекс Дзен как каналы
                            генерации целевого трафика
                        </div>
                        <div class="info-block__text">
                            Запуск личного YouTube канала
                        </div>
                    </div>
                </div>
                <div>
                    <?php
							$video_url = $isSecondLessonOpen ? '/wp-content/uploads/2021/08/pexels-alena-darmel-7659845.mp4' : '';
							$poster_url = $isSecondLessonOpen ? '' : '/wp-content/uploads/2021/09/cover-1.png';
					?>
                    <video class="lesson__video" poster="<?php echo $poster_url; ?>" src="<?php echo $video_url; ?>" controls></video>
                </div>
            </div>
        </section>
        <section id="third-day" class="sec sec_light">
            <div class="box">
                <div class="info-block gap40 uppercase mb40">
                    <div>
                        <div class="info-block__title info-block__title_black">Третий день: подключаем инструменты аналитики,
                            оптимизируем каналы продаж
                        </div>
                        <div class="info-block__outlined-title">
                            ПОДКЛЮЧАЕМ ИНСТРУМЕНТЫ АНАЛИТИКИ,
                            АНАЛИЗИРУЕМ ТРАФИК, ОПТИМИЗИРУЕМ РЕКЛАМНЫЕ КАМПАНИИ
                        </div>
                        <div class="info-block__text info-block__text_black">
                            Подключаем, настраиваем Яндекс Метрику
                        </div>
                        <div class="info-block__text info-block__text_black">
                            Подключаем, настраиваем Google Analytics
                        </div>
                        <div class="info-block__text info-block__text_black">
                            Новинки в инструментах, секретные настройки
                        </div>
                        <div class="info-block__text info-block__text_black">
                            Анализируем трафик, оптимизируем каналы, выбираем эффективные
                        </div>
                    </div>
                    <div class="info-block__title info-block__title_black p20 text-center">
                        <?php if(!$isSecondLessonOpen): ?>
                        Урок будет доступен
                        <?php $inHours = 24 - $hoursLeft;?>
                        через<br> <?php echo floor($inHours) . '<span class="lowercase">ч</span> ' . floor( fmod($inHours, 1)*60 ); ?><span class="lowercase">мин</span>
                        <?php endif; ?>
                    </div>
                </div>
                <div>
                    <?php
							$video_url = $isThirdLessonOpen ? '/wp-content/uploads/2021/08/pexels-alena-darmel-7659845.mp4' : '';
							$poster_url = $isThirdLessonOpen ? '' : '/wp-content/uploads/2021/09/cover-1.png';
					?>
                    <video class="lesson__video" poster="<?php echo $poster_url; ?>" src="<?php echo $video_url; ?>" controls></video>
                </div>
            </div>
        </section>
    <?php endif; ?>

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
                    <div class="info-block__outlined-title">ПОНРАВИЛСЯ БЕСПЛАТНЫЙ ЭКСПРЕСС-КУРС? <br>
						ПРОЙДИТЕ ПРАКТИЧЕСКИЙ ОФЛАЙН-КУРС «DIGITAL-МАРКЕТИНГ: ПРОДВИНУТЫЙ УРОВЕНЬ»
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
                <button data-modal="modal_9" class="common__button">Подробнее о курсе</button>
                <a href="/course-digital/"><button class="common__button">Записаться на курс</button></a>
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
            <div class="common__buttons-wrapper text-center mb40">
                <button data-modal="modal_9" class="common__button">Подробнее о курсе</button>
                <a href="/course-digital/"><button class="common__button">Записаться на курс</button></a>
            </div>
        </div>
    </section>
    <?php get_template_part('common-footer'); ?>

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
