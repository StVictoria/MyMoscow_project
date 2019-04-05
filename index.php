<?php
    $title = "Агенство путешествий по Москве MyMoscow";
    include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');

    $template['cards'] = [];
    $sql = "SELECT * FROM cards ORDER BY priority DESC";
    $result = mysqli_query($db, $sql);

    while ($row = mysqli_fetch_assoc($result)){
        $template['cards'][] = $row;
    }
?>
<body>
    <div class="header window">
        <div class="window_tape">
            <div class="top3"></div>
            <div class="top1"></div>
            <div class="top2"></div>
            <div class="top3"></div>
            <div class="top1"></div>
        </div>
        <div class="header_box">
            <div class="wrapper">
                <a href="#" class="header_box_previous"></a>
                <a href="#" class="header_box_next"></a>
                <div class="header_box_main_line">
                    <div class="header_logo_line">
                        <div class="logo"></div>
                        <div class="logo_text">MyMoscow</div>
                    </div>
                    <div class="header_info_line">
                        <a href="#">Главная</a>
                        <a href="#" class="services">Наши услуги</a>
                        <a href="#" class="about">О компании</a>
                        <a href="#" class="contacts">Контакты</a>
                        <a href="#" class="comments">Отзывы</a>
                    </div>
                    <div class="burger"><div></div></div>
                </div>
                <div class="header_block_for_main_content">
                    <div class="main_content">
                        <div class="main_content_text">
                            <h1 style="font-size: 50px;">Необычная Москва</h1>
                            <h2 style="font-size: 22px; font-weight: 300;">MyMoscow - агенство интересных маршрутов.</h2>
                        </div>
                        <div class="header_block_for_button">
                            <div class="button">Подробнее о нас</div>
                        </div>
                        <div class="header_jumps">
                            <a href="#"></a>
                            <a href="#" class="active"></a>
                            <a href="#"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="wrapper">
        <div class="pre_block_title">
            <div class="pre_block_title_content">
                <h2>Что мы предлагаем?</h2>
                <p>Наша главная цель - рассказать о Москве так, чтобы это было интересно всем!</p>
            </div>
        </div>
        <div class="suggestion_blocks">
            <?php foreach ($template['cards'] as $item): ?>
                <div class="suggestion_blocks_content">
                    <div class="pic_routes" style="background: url(<?=$item['pic']?>) top center / contain no-repeat;  width: 15%;"></div>
                    <div class="block_content_info">
                        <h3><?=$item['h3']?></h3>
                        <p><?=$item['description']?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="info_about_us">
        <div class="info_about_us_photo"></div>
        <div class="info_about_us_text">
            <h3>Кто мы такие</h3>
            <p>Мы - команда тех, кто любит историю и любит Москву.</p>
            <p>Москва - это не только место по &laquo;заколачиванию денег&raquo; и &laquo;взращиванию карьеры&raquo;, а ещё и бесконечно красивые памятники природы, заказники, парки, заповедники. <br> Активный отдых в Москве и Подмосковье - это отличная возможность вырваться из душного мегаполиса куда-нибудь в &laquo;дебри&raquo;, навстречу приключениям. К счастью, не всё Подмосковье ещё &laquo;облагорожено&raquo; асфальтными дорожками и высоченными коттеджными заборами. Ещё встречаются места, настолько глухие и далёкие, чтоочутившись там, кажется, что ты - первый человек, ступивший на эту землю.</p>
            <p>Там, где не проедет автомобилист и даже велосепидист, найдёт лазейку и откроет для себя все красоты 100% бездорожья турист, проводящий свой активный отдых в Подмосковье.</p>
            <div class="info_about_us_button">Подробнее о нас</div>
        </div>
    </div>
    <div class="wrapper">
        <div class="moscow_in_photos">
            <div class="moscow_in_photos_content">
                <h3>Москва в фотографиях</h3>
                <p>Проще всего рассказать обо всём в фотографиях. Смотрите наши фотоотчёты и присылайте нам свои фотографии.</p>
            </div>
        </div>
    </div>
    <div class="photos_of_moscow">
        <div class="photos_of_moscow_pic" style="background-image: url(/photos/1.jpg);"></div>
        <div class="photos_of_moscow_pic" style="background-image: url(/photos/7.jpg);"></div>
        <div class="photos_of_moscow_pic" style="background-image: url(/photos/5.jpg);"></div>
        <div class="photos_of_moscow_pic" style="background-image: url(/photos/3.jpg);"></div>
        <div class="photos_of_moscow_pic" style="background-image: url(/photos/8.jpg);"></div>
        <div class="photos_of_moscow_pic" style="background-image: url(/photos/6.jpg);"></div>
        <div class="photos_of_moscow_pic" style="background-image: url(/photos/4.jpg);"></div>
        <div class="photos_of_moscow_pic" style="background-image: url(/photos/2.jpg);"></div>
    </div>
    <div class="wrapper">
        <div class="reviews">
            <h3>Отзывы</h3>
        </div>
        <div class="testimonials">
            <div class="testimonials_block">
                <div class="testimonials_block_feedback">
                    <p><i>Были с дочкой и подругой на ночной экскурсии. Всё таки как много зависит от экскурсовода! Мы все четыре часа ходили за Станиславом Симоновым, как кролики. Боялись пропустить хоть одно слово. При этом, моей дочке, которая побывала во многих местах и с детства искушённая на интересные события - была сильно увлечена.</i></p>
                </div>
                <div class="testimonials_block_foot">
                    <div class="testimonials_block_left"></div>
                    <p>Екатерина Васильева</p>
                </div>
            </div>
            <div class="testimonials_block">
                <div class="testimonials_block_feedback">
                    <p><i>Ездили на экскурсию с семиклассниками и родителями. Всем очень понравилось! Экскурсовод Михаил Борисович очень интересно, необычно и с юмором рассказывал о Москве 16 века. Гибко подстраивал экскурсию под интересы и потребности слушателей, ловко &laquo;управлял&raquo; подачей автобуса, не давая нам замёрзнуть.)</i></p>
                </div>
                <div class="testimonials_block_foot">
                    <div class="testimonials_block_right"></div>
                    <p>Анна Крушевская</p>
                </div>
            </div>
        </div>
        <div class="testimonials_jumps">
            <a class="active" href="#"></a>
            <a href="#"></a>
            <a href="#"></a>
            <a href="#"></a>
        </div>
    </div>
    <div class="write_us">
        <div class="wrapper">
            <div class="write_us_block">
                <h3>Напишите нам</h3>
                <form method="POST" action="form.php">
                    <div class="main_info">
                        <input type="text" name="fio" placeholder="ФИО">
                        <input type="email" name="email" placeholder="Email">
                        <input type="tel" name="phone" placeholder="Телефон">
                        <button type="submit">Отправить вопрос</button>
                    </div>
                    <textarea name="c " placeholder="Ваше сообщение"></textarea>
                    <div class="error_message"></div>
                </form>
            </div>
        </div>
    </div>
<?php
    include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php');
?>