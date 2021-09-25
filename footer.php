<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package uplab
 */

?>

<footer id="colophon" class="site-footer">

</footer><!-- #colophon -->
</div><!-- #page -->

<div class="overlay" id="overlay" data-close=""></div>
<div class="modal-outer">
    <span class="closer" data-close=""></span>
    <div id="modal_1" class="dlg-modal">
        <?php echo do_shortcode('[contact-form-7 id="26" title="Контактная форма 1"]');?>
    </div>
    <div id="modal_2" class="dlg-modal">
        <?php echo do_shortcode('[contact-form-7 id="128" title="Записаться на курс (страница курс DIGITAL)"]');?>
    </div>
    <div id="modal_3" class="dlg-modal">
        <?php echo do_shortcode('[contact-form-7 id="129" title="В лист ожидания (страница курс DIGITAL)"]');?>
    </div>
    <div id="modal_4" class="dlg-modal">
        <?php echo do_shortcode('[contact-form-7 id="130" title="Скачать Инструкции (страница Библиотека)"]');?>
    </div>
    <div id="modal_5" class="dlg-modal">
        <?php echo do_shortcode('[contact-form-7 id="132" title="Скачать Чек-листы (страница Библиотека)"]');?>
    </div>
    <div id="modal_6" class="dlg-modal">
        <?php echo do_shortcode('[contact-form-7 id="134" title="Скачать Брифы (страница Библиотека)"]');?>
    </div>
    <div id="modal_7" class="dlg-modal">
        <?php echo do_shortcode('[contact-form-7 id="137" title="Скачать SMM (страница Библиотека)"]');?>
    </div>
    <div id="modal_8" class="dlg-modal">
        <?php $isUserLogin = is_user_logged_in(); ?>
        <?php if($isUserLogin): ?>
            Вы уже зарегистрированы<br>
            <div><a style="text-transform: uppercase; text-decoration: underline;" href="/free-course/">Перейти к курсу</a></div>
        <?php else: ?>
            <h2>Пройти курс бесплатно</h2>
            <?php get_template_part('registration-form'); ?>
        <?php endif;?>
    </div>
	<div id="modal_9" class="dlg-modal">
		<?php echo do_shortcode('[contact-form-7 id="148" title="Подробнее о курсе (страница Посадочная Бесплатный Курс)"]');?>
	</div>
    <div id="modal_10" class="dlg-modal">
        <?php echo do_shortcode('[contact-form-7 id="174" title="Скачать все материалы для маркетолога (страница Библиотека)"]');?>
    </div>
</div>


<?php wp_footer(); ?>

<script>
    (function () {

        var hamburger = {
            navToggle: document.querySelector('.nav-toggle'),
            nav: document.querySelector('nav'),

            doToggle: function (e) {
                //e.preventDefault();
                this.navToggle.classList.toggle('expanded');
                this.nav.classList.toggle('expanded');
            }
        };

        hamburger.navToggle.addEventListener('click', function (e) {
            hamburger.doToggle(e);
        });
        hamburger.nav.addEventListener('click', function (e) {
            hamburger.doToggle(e);
        });

    }());
</script>

<script>
    /*popup*/

    (function () {
        var overlay = document.getElementById('overlay'),
            mOpen = document.querySelectorAll('[data-modal]'),
            mClose = document.querySelectorAll('[data-close]'),
            outer = document.querySelector('.modal-outer'),
            modals = document.querySelectorAll('.modal-outer > div'),
            duration = 400,
            mStatus = false,
            h = null;

        if (mOpen.length == 0) return;

        setTopOuter();

        function setTopOuter() {
            outer.style.top = -outer.offsetHeight + 'px';
        }

        [].forEach.call(mOpen, function (el) {
            el.addEventListener('click', function (e) {
                var modalId = el.getAttribute('data-modal'),
                    modal = document.getElementById(modalId);
                modalShow(modal);
            });
        });

        [].forEach.call(mClose, function (el) {
            el.addEventListener('click', modalClose);
        });

        document.addEventListener('keydown', modalClose);

        function modalShow(modal) {
            mStatus = true;
            overlay.classList.remove('fadeOut');
            overlay.classList.add('fadeIn');
            modal.style.display = 'block';

            var start = new Date().getTime(),
                startTop = outer.getBoundingClientRect().top,
                finalTop = (window.innerHeight - outer.offsetHeight) / 2,
                offset = outer.offsetHeight + finalTop;

            var fn = function () {
                var now = new Date().getTime() - start,
                    currTop = Math.round(startTop + offset * now / duration);

                currTop = (currTop > finalTop) ? finalTop : currTop;
                outer.style.top = currTop + 'px';

                if (currTop < finalTop) {
                    requestAnimationFrame(fn);
                }
            }
            requestAnimationFrame(fn);
            window.addEventListener('resize', setTopOpenOuter);
        }

        function modalClose(event) {
            if (mStatus && (!event.keyCode || event.keyCode === 27)) {
                mStatus = false;

                var start = new Date().getTime(),
                    startTop = outer.getBoundingClientRect().top,
                    finalTop = -outer.offsetHeight,
                    offset = outer.offsetHeight + (window.innerHeight - outer.offsetHeight) / 2;

                var fn = function () {
                    var now = new Date().getTime() - start,
                        currTop = Math.round(startTop - offset * now / duration);

                    currTop = (currTop < finalTop) ? finalTop : currTop;
                    outer.style.top = currTop + 'px';

                    if (currTop > finalTop) {
                        requestAnimationFrame(fn);
                    } else {
                        overlay.classList.remove('fadeIn');
                        overlay.classList.add('fadeOut');
                        [].forEach.call(modals, function (modal) {
                            modal.removeAttribute('style');
                        });
                    }
                }
                requestAnimationFrame(fn);
                window.removeEventListener('resize', setTopOpenOuter);
            }
        }

        function setTopOpenOuter() {
            outer.style.top = (window.innerHeight - outer.offsetHeight) / 2 + 'px';
        }
    })();
    /*popup*/


</script>
<?php if(is_front_page()):?>

<script>
    let contentTopBlocks = document.querySelectorAll('.content__top-block');
    if (contentTopBlocks[0]) {
        let menuItems = document.querySelectorAll('.header__top-menu .menu-item');

        for (let item of menuItems) {
            item.addEventListener('click', function () {
                let number = 0;
                changeMenuItems(0, document.querySelectorAll('.content-menu__item'));
                for (let item of menuItems) {
                    item.setAttribute('data-active', number++);
                    item.classList.remove('active');
                }

                for (let block of contentTopBlocks) {
                    block.classList.remove('active');
                }
                item.classList.add('active');
                document.querySelector('.content__wrapper').classList.add('content__wrapper-not-active');
                document.querySelector('.content__top-blocks').classList.remove('content__wrapper-not-active');
                contentTopBlocks[item.dataset.active].classList.add('active');
            });
        }
    }

    //simple
    let contentMenuItems = document.querySelectorAll('.content-menu__item');
    if (contentMenuItems[0]) {
        for (let item of contentMenuItems) {
            item.addEventListener('mouseenter', function (e) {
                document.querySelector('.content__wrapper').classList.remove('content__wrapper-not-active');
                document.querySelector('.content__top-blocks').classList.add('content__wrapper-not-active');

                for (let item of document.querySelectorAll('.header__top-menu .menu-item')) {
                    item.classList.remove('active');
                }

                changeMenuItems(item, contentMenuItems);
                setSlide(item, -1);
            });
        }
    }

    function setSlide(item, direction) {
        let slides = document.querySelectorAll('.content__slide');
        let slideActive = document.querySelector('.content__slide.active');

        slideActive.classList.remove('active');
        slides[item.dataset.active].classList.add('active');
        slideActive = document.querySelector('.content__slide.active');
        let sliderPosition = calcSlidePosition(slides, slideActive.dataset.active);
        reloadHeight(slideActive, sliderWindow);
        moveSlide(direction, sliderPosition, slideTrack);
    }

    function calcSlidePosition(items, number) {
        let num = 0;
        let result = 0;
        for (let item of items) {
            if (num >= number) {
                break;
            }
            result += item.getBoundingClientRect().bottom - item.getBoundingClientRect().top;
            num++;
        }
        return result;
    }

    function changeMenuItems(item, contentMenuItems) {
        for (let item of contentMenuItems) {
            item.style.fontSize = '100%';
            item.style.transition = '0.7s';
            item.style.fontWeight = '400';
        }
        if (item) {
            item.style.fontSize = '180%';
            item.style.transition = '0.4s';
            item.style.fontWeight = '600';
            if (item.nextElementSibling) {
                item.nextElementSibling.style.fontSize = '150%';
            }
            if (item.previousElementSibling) {
                item.previousElementSibling.style.fontSize = '150%';
            }
        }
    }


    /*slider*/
    function reloadHeight(item, trackWindow) {
        trackWindow.style.height = item.getBoundingClientRect().bottom - item.getBoundingClientRect().top + 'px';
    }

    function moveSlide(direction, distance, track) {
        track.style.transform = 'translateY(' + (direction * distance) + 'px)';
    }

    let slideTrack = document.querySelector('.content__track');
    let sliderWindow = document.querySelector('.track__window');
    let slide = document.querySelector('.content__slide.active');
    let upButton = document.querySelector('.arrow.top');
    let downButton = document.querySelector('.arrow.bottom');
    //let sliderPosition = 0;
    sliderPosition = calcSlidePosition(document.querySelectorAll('.content__slide'), slide.dataset.active);
    if (slide) {
        reloadHeight(slide, sliderWindow);

        /*if(downButton){
            downButton.addEventListener('click', function(){
    
                let slideActive = document.querySelector('.content__slide.active');
                if(slideActive.nextElementSibling){
                    setSlide(contentMenuItems[slideActive.nextElementSibling.dataset.active], -1);
                }else{
                    setSlide(contentMenuItems[0], 1);
                }
    
                
                slideActive = document.querySelector('.content__slide.active');
                changeMenuItems(contentMenuItems[slideActive.dataset.active], contentMenuItems);
            });
            upButton.addEventListener('click', function(){
                let slideActive = document.querySelector('.content__slide.active');
                if(slideActive.previousElementSibling){
                    setSlide(contentMenuItems[slideActive.previousElementSibling.dataset.active], -1);
                }else{
                    setSlide(contentMenuItems[slideTrack.lastElementChild.dataset.active], -1);
                }
                slideActive = document.querySelector('.content__slide.active');
                changeMenuItems(contentMenuItems[slideActive.dataset.active], contentMenuItems);            
            });             
        }*/

    }

    /**/


    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent)) {

    } else {
        //alert("Вы используете ПК.");
        window.onresize = function (event) {
            location.reload();
        }
    }


</script>
<?php endif; ?>


</body>
</html>
