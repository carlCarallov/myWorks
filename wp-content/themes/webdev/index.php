<?php 
get_header();
?>
   <div id="pagePreloader" class="preloader">
       <div class="loader"></div>
       <div class="circleOut"></div>
   </div>
    <div class="menu" id="w_menu">
        <ul>
            <li>
                <button id="page_prew" onclick="scrollToElem('#prew')">Главная</button>

            </li>
            <li>
                <button id="page_myStory" onclick="scrollToElem('#myStory')">О себе</button>

            </li>
            <li>
                <button id="page_portfolio" onclick="scrollToElem('#portfolio')">Портфолио</button>

            </li>
            <li>
                <button id="page_resume" onclick="scrollToElem('#resume')">Резюме</button>

            </li>
            <li>
                <button id="page_contacts" onclick="scrollToElem('#contacts')">Контакты</button>
            </li>
        </ul>
    </div>
    <button id="navMenu"><div><p id="a1">&mdash;</p><p id="a2">&mdash;</p><p id="a3">&mdash;</p></div></button>
    <div class="container" id="prew">

        <div class="preview ">

            <p class="prew1 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="2s">Сайт-портфолио веб-разработчика</p>


            <p class="prew2 wow fadeInRight" data-wow-duration="1s" data-wow-delay="2s">ПАВЛОВ ВЛАДИМИР</p>
            <div class="txt wow fadeInLeft" data-wow-duration="1s" data-wow-delay="2s">
                <p class="p1">web - разработчик</p>
                <p class="p2">специалист cms joomla / wordpress</p>
                <p class="p3">ПРОГРАММИСТ PHP / JAVASCRIPT</p>
            </div>
        </div>


    </div>
    <div id="myStory" class="container">

        <div class="myStory">
            <div class="title0">
                <p>О себе</p>
            </div>
            <div class="persInformation">
                <div class="storyBlock wow fadeInLeft" data-wow-duration="1s" data-wow-offset="70">
                    <p>Немного о себе</p>
                    <p>Доброго времени суток. Меня зовут Владимир, я занимаюсь разработкой сайтов, веб-приложений с нуля, "под ключ". Специалист по CMS Joomla, Joomshopping. Выполняю верстку и программирование сайтов при этом используя только современные технологии и стандарты разработки HTML5, CSS3, чистый JS и Jquery. Так же делаю полностью адаптивную верстку для различных устройств. Все начатые ранее проекты довожу до конца.</p>
                </div>
                <div class="photo">
                    <p>Фото</p>
                    <img class="wow flipInY" data-wow-duration="1s" data-wow-offset="70" src="<?php echo get_template_directory_uri()?>/img/my_photo.png" alt="">
                </div>
                <div class="inf wow fadeInRight" data-wow-duration="1s" data-wow-offset="70">
                    <p class="title1">Персональная информация</p>
                    <p class="inf1">Профессиональное создание сайтов: разработка дизайна, HTML верстка, посадка на CMS Joomla, программирование на PHP, JavaScript</p>
                    <p class="inf2">День рождения: 21 апреля 1996 года</p>
                    <div class="contacts">
                        <p>Skype: krombopulosmichael1</p>
                        <p>E-mail: chet.solomon.key@yandex.ru</p>
                        <p>Веб-сайт: pavlovlad.ru </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="portfolio" class="container">
        <p class="p4">Портфолио</p>
        <p class="p5">Мои последние работы (с 2016 г. по 2017 г.) </p>
        <div class="navWorks">
            <ul id="nav">
                <li><button  class="all">Все работы</button></li>
                <li><button  class="page-proofs">Верстка</button></li>
                <li><button class="fullStack">"Под ключ"</button></li>
                <li><button class="design">Дизайн</button></li>
                <li><button class="other">Разное</button></li>
            </ul>
        </div>
<div id="fullShow"></div>
        <div id="portfolioTabl" class="wow fadeInUp" data-wow-duration="1s" data-wow-offset="100">
<div id="loadTabl" class="loadTabl">
    <div class="loaderTabl"></div>
</div>
        </div>
    </div>
    <div id="resume" class="container">
         <p class="r1">Резюме</p>
        <div class="wow fadeInDown resumeContent" data-wow-duration="1s" data-wow-offset="100">
          <div class="skills">
              <p class="r2">Навыки и умения</p>
              <p class="r3">Создание адаптивной верстки, полностью интерактивных страниц(не требующих перезагрузки), написание плагинов и расширений для CMS Joomla/Wordpress. </p>
          </div>
          <div class="wow fadeInLeft myself" data-wow-duration="1s" data-wow-offset="100">
              <p class="r2">Личные качества</p>
              <p class="r3">Честность к заказчику, исполнительность, если беру заказ, то обязательно довожу его до конца. </p>
          </div>
         
           <div class="wow fadeInRight coding" data-wow-duration="1s" data-wow-offset="100">
               <p class="r2">Языки программирования</p>
               <p class="r3">Владею технологиями HTML, CSS, языками программирования - javascript, PHP, а так же библиотеками jQuery,Vue.js.</p>
           </div>
<!--
            <div class="wow fadeInUp progs" data-wow-duration="1s" data-wow-offset="100">
              <p class="r2">Программы</p>
              <p class="r3">hutonroiew, ewiorjweo jewoeiuoew iweomncowcnewioncxkj cjwc cwnuinciweuhc wc chweilchncsjliehwcnjnsn uchwielcbcnjweuh</p>
          </div>
-->
        </div>

    </div>
    <div id="contacts" class="container">
        <p class="p6">Связь со мной</p>


        <div class="social">
            <table>
                <tr class="wow bounceInDown" data-wow-duration="2s" data-wow-offset="60">
                    <td class="vk" >
                        <p>
                            <span class="icon-vk"></span> <br>
                            <br>Вконтакте: <br> vk.com/hrielnrm
                        </p>
                    </td>
                    <td class="telegram">
                        <p>
                            <span class="icon-telegram"></span><br>
                            <br>Telegram: <br> niunuowueweqwqwdwqs
                        </p>
                    </td>

                    <td class="eMail ">
                        <p>
                            <span class="icon-envelop"></span> <br>
                            <br>E-mail: <br> chet.solomon,key@yandex.ru
                        </p>
                    </td>
                </tr>
                <tr class="wow bounceInUp" data-wow-offset="60" data-wow-duration="2s">
                    <td class="facebook">
                        <p>
                            <span class="icon-facebook"></span> <br>
                            <br>Facebook: <br> facebook.com/njo
                        </p>
                    </td>

                    <td class="skype">
                        <p>
                            <span class="icon-skype"></span> <br>
                            <br>Skype: <br> krombopulos-michael1

                        </p>
                    </td>
                    <td class="phone">
                        <p>
                            <span class="icon-phone"></span> <br>
                            <br>Тел: <br> 89992234323
                        </p>
                    </td>
                </tr>
            </table>
        </div>
       


    </div>





<?php get_footer(); ?>