<?php get_header(); ?>
<div class="about">
            <div class="info">
                <h1>GameFi Dealers Guild</h1>
                <p>
                    Это первое международное русскоязычное сообщество, объединяющее в себе игроков, криптоэнтузиастов и инвесторов. Наша страсть - это блокчейн-игры с «play and earn» экономикой.
                </p>
                <p>
                    Основные направления Гильдии - это программа NFT-стипендий, венчурное инвестирование, обучение и совместный заработок в блокчейн-играх.
                </p>
                <p>
                    Мы предоставляем членам Гильдии игровые NFT в аренду, чтобы они могли начать зарабатывать без стартовых вложений. Также мы инвестируем в перспективные GameFi-стартапы, собираем полезную информацию о топовых проектах, вырабатываем совместные экономические стратегии, играем и зарабатываем.
                </p>
            </div>
            <div class="imgGradient">
                <img src="<?php $link = get_template_directory_uri(); echo($link."/assets/images/cyber_gamer.png")?>"/>
                <div class="glow"></div>
            </div>
        </div>
        <div class="gildya">
            <img src="<?php $link = get_template_directory_uri(); echo($link."/assets/images/gildya.png")?>">
            <img src="<?php $link = get_template_directory_uri(); echo($link."/assets/images/gildyaBG.png")?>">
            <div class="ticket">
                ПОДАТЬ ЗАЯВКУ
            </div>
            <p>ЭКОСИСТЕМА GAMEFI DEALERS GUILD</p>
            <div class="cards">
                <img class="img" src="<?php $link = get_template_directory_uri(); echo($link."/assets/images/cardsBG.png")?>">
                <div class="card">
                    <img src="<?php $link = get_template_directory_uri(); echo($link."/assets/images/icons/money.png")?>">
                    <p class="between">ПРОГРАММА<br/>СТИПЕНДИЙ</p>
                    <p>АРЕНДУЙ ИЛИ СДАВАЙ<br/>В АРЕНДУ NFT</p>
                </div>
                <div class="card">
                    <img src="<?php $link = get_template_directory_uri(); echo($link."/assets/images/icons/money.png")?>">
                    <p class="between">ПРОГРАММА<br/>СТИПЕНДИЙ</p>
                    <p>АРЕНДУЙ ИЛИ СДАВАЙ<br/>В АРЕНДУ NFT</p>
                </div>
                <div class="card">
                    <img src="<?php $link = get_template_directory_uri(); echo($link."/assets/images/icons/money.png")?>">
                    <p class="between">ПРОГРАММА<br/>СТИПЕНДИЙ</p>
                    <p>АРЕНДУЙ ИЛИ СДАВАЙ<br/>В АРЕНДУ NFT</p>
                </div>
                <div class="card">
                    <img src="<?php $link = get_template_directory_uri(); echo($link."/assets/images/icons/money.png")?>">
                    <p class="between">ПРОГРАММА<br/>СТИПЕНДИЙ</p>
                    <p>АРЕНДУЙ ИЛИ СДАВАЙ<br/>В АРЕНДУ NFT</p>
                </div>
                <div class="card">
                    <img src="<?php $link = get_template_directory_uri(); echo($link."/assets/images/icons/money.png")?>">
                    <p class="between">ПРОГРАММА<br/>СТИПЕНДИЙ</p>
                    <p>АРЕНДУЙ ИЛИ СДАВАЙ<br/>В АРЕНДУ NFT</p>
                </div>
                <div class="card">
                    <img src="<?php $link = get_template_directory_uri(); echo($link."/assets/images/icons/money.png")?>">
                    <p class="between">ПРОГРАММА<br/>СТИПЕНДИЙ</p>
                    <p>АРЕНДУЙ ИЛИ СДАВАЙ<br/>В АРЕНДУ NFT</p>
                </div>
                <div class="card">
                    <img src="<?php $link = get_template_directory_uri(); echo($link."/assets/images/icons/money.png")?>">
                    <p class="between">ПРОГРАММА<br/>СТИПЕНДИЙ</p>
                    <p>АРЕНДУЙ ИЛИ СДАВАЙ<br/>В АРЕНДУ NFT</p>
                </div>
            </div>
        </div>
        <div id="materials">
            <div class="materialsButton">
                МАТЕРИАЛЫ
                <div class="glow"></div>
                <span></span>
            </div>
            <div class="materialCards">
                <div class="materialsCard">
                    <img src="<?php $link = get_template_directory_uri(); echo($link."/assets/images/cardLogo.png")?>">
                    <p>WHITEPAPER</p>
                    <span></span>
                    <div class="glowCards"></div>
                </div>
                <div class="materialsCard">
                    <img src="<?php $link = get_template_directory_uri(); echo($link."/assets/images/cardLogo.png")?>">
                    <p>ПИТЧ-ДЕК</p>
                    <span></span>
                    <div class="glowCards + glowRight"></div>
                </div>
            </div>
            <div id="ecosystem"></div>
            <img id="PConly" class="marginTop160" src="<?php $link = get_template_directory_uri(); echo($link."/assets/images/games.png")?>">
            <img id="PConly" class="roadmap" src="<?php $link = get_template_directory_uri(); echo($link."/assets/images/roadmap.png")?>">
            <img id="mobileOnly" src="<?php $link = get_template_directory_uri(); echo($link."/assets/images/gamesMobile.png")?>">
            <img id="mobileOnly" class="marginLeft22" src="<?php $link = get_template_directory_uri(); echo($link."/assets/images/spheresBG.png")?>">
        </div>
        <div id="money">
            <div class="popup">
                <?php echo do_shortcode('[contact-form-7 id="25" title="Контактная форма 1"]'); ?>
                <!-- <form action="#">
                    <h1>ФИО</h1>
                    <input type="text" placeholder="Пупкин Василий Кожуетович">
                    <h1>Дата рождения</h1>
                    <input type="text" placeholder="02.03.1981">
                    <h1>Кошелек</h1>
                    <input type="text" placeholder="Open Sea">
                    <h1>Ваш опыт с криптовалютами</h1>
                    <input type="text" placeholder="Не было">
                    <h1>Есть ли у Вас активы в GameFi?</h1>
                    <input type="text" placeholder="Если есть, в каких играх">
                    <h1>Укажите Ваш аккаунт в Telegram</h1>
                    <input type="text" placeholder="@ViktorDudka">
                    <button type="submit">ОТПРАВИТЬ</button>
                </form> -->
                <div onclick="closePopup()" class="close"><img src="<?php $link = get_template_directory_uri(); echo($link."/assets/images/icons/x.png")?>"></div>
            </div>
            <div class="moneyBG"></div>
            <div class="moneyBG2"></div>
            <h1>NFT И ПРОГРАММА СТИПЕНДИЙ</h1>
            <div class="moneyContent">
                <p>Игровые NFT - это объекты цифрового имущества в игре. Они могут представлять собой земли в игре, недвижимость, героев или игровые предметы. Заработок в play-and-earn играх осуществляется в основном именно за счет использования NFT.<br/><br/>

                    Приобрести игровые NFT популярных игр сегодня можно на многочисленных маркетплейсах. Если же у вас нет стартового капитала, не отчаивайтесь: NFT база Гильдии регулярно пополняется дорогостоящими NFT лучших GameFi проектов на рынке, которые мы будем предоставлять самым целеустремленным гильдийцам в пользование.
                </p>
                <div onclick="openPopup()" class="moneyButton">
                    ПОДАТЬ ЗАЯВКУ НА СТИПЕНДИЮ
                </div>
            </div>
        </div>
        <div id="education">
            <h1>ОБУЧЕНИЕ</h1>
            <div class="educationText">
                <p>Обучение наших игроков и стипендиатов является одним из приоритетных направлений в Гильдии, ведь игры, в которых есть возможность зарабатывать тысячи долларов, безусловно требуют развитых навыков и игровых знаний. Новичкам в GameFi мы помогаем сделать первые шаги, обучая основам и давая возможность заработать свои первые деньги. Более опытных игроков мы глубоко погружаем в профессиональные инструменты, чтобы сформировать умение получать максимальный профит с рынка.</p>
                <p>Мы используем для обучения сообщества все современные инструменты в Telegram, YouTube, Medium, и делимся наработками на нашем уникальном Discord сервере. На этих ресурсах мы собираем всю свежую и полезную информацию, общаемся и помогаем в обучении членам нашего комьюнити. Самые способные в дальнейшем получают возможность стать игровым наставником в нашей Гильдии.</p>
                <div class="educationButton">
                    ПРОЙТИ ОБУЧЕНИЕ
                    <div class="glowLong"></div>
                </div>
            </div>
        </div>
        <div id="marketplace">
            <h1>МАРКЕТПЛЕЙС</h1>
            <p>В скором времени здесь появится Маркетплейс</p>
            <img src="<?php $link = get_template_directory_uri(); echo($link."/assets/images/marketplaceBG.png")?>">
        </div>
        <div id="fund">
            <h1>ВЕНЧУРНЫЙ ФОНД</h1>
            <div class="fundContainer">
                <img src="<?php $link = get_template_directory_uri(); echo($link."/assets/images/tokenomicsBG2.png")?>">
                <div class="fundLeftContainer">
                    <p>Наш инвестиционный клуб - это закрытое сообщество инвесторов, которые специализируется на поиске, анализе и инвестировании в перспективные GameFi-проекты на ранних стадиях, а также использует другие современные инструменты для заработка на рынке криптовалют.</p>
                    <div class="fundButton">
                        ПОДАТЬ ЗАЯВКУ
                        <div class="glowShort"></div>
                    </div>
                </div>
                <div class="fundImg">
                    <div class="glowNft"></div>
                </div>
            </div>
        </div>
        <div class="tokenomics">
            <h1>ТОКЕНОМИКА</h1>
            <p>Всего будет выпущено 100 миллионов GDG токенов:</p>
            <div class="tokenomicsContainer">
                <div class="tLeft">
                    <div class="tCard">
                        <h1>10%</h1>
                        <p>уйдет в казну</p>
                    </div>
                    <div class="tCard">
                        <h1>10%</h1>
                        <p>уйдет в казну</p>
                    </div>
                    <div class="tCard">
                        <h1>10%</h1>
                        <p>уйдет в казну</p>
                    </div>
                </div>
                <div class="tCenter">
                    <img src="<?php $link = get_template_directory_uri(); echo($link."/assets/images/tokenomicsBG.png")?>">
                </div>
                <div class="tRight">
                    <div class="tCard">
                        <h1>10%</h1>
                        <p>уйдет в казну</p>
                    </div>
                    <div class="tCard">
                        <h1>10%</h1>
                        <p>уйдет в казну</p>
                    </div>
                    <div class="tCard">
                        <h1>10%</h1>
                        <p>уйдет в казну</p>
                    </div>
                    <div class="tCard">
                        <h1>10%</h1>
                        <p>уйдет в казну</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="social">
            <h1>СОЦИАЛЬНАЯ СЕТЬ ДЛЯ ИГРОКОВ</h1>
            <p>Coming soon...</p>
            <img src="<?php $link = get_template_directory_uri(); echo($link."/assets/images/marketplaceBG.png")?>">
        </div>
        <div class="partners">
            <h1>ПАРТНЕРЫ</h1>
            <div class="partnerCards">
                <img src="<?php $link = get_template_directory_uri(); echo($link."/assets/images/partnersBG.png")?>">
                <div class="partnerCard">
                    <img src="<?php echo fw_get_db_settings_option('partner1-image')['url']; ?>">
                </div>
                <div class="partnerCard">
                    <img src="<?php echo fw_get_db_settings_option('partner2-image')['url']; ?>">
                </div>
                <div class="partnerCard">
                    <img src="<?php echo fw_get_db_settings_option('partner3-image')['url']; ?>">
                </div>
                <div class="partnerCard">
                    <img src="<?php echo fw_get_db_settings_option('partner4-image')['url']; ?>">
                </div>
                <div class="partnerCard">
                    <img src="<?php echo fw_get_db_settings_option('partner5-image')['url']; ?>">
                </div>
                <div class="partnerCard">
                    <img src="<?php echo fw_get_db_settings_option('partner6-image')['url']; ?>">
                </div>
            </div>
        </div>
        <div id="team">
            <h1>КОМАНДА</h1>
            <div class="teamCards">
                <div class="teamCard">
                    <div>
                        <img src="<?php echo fw_get_db_settings_option('teammate1-image')['url']; ?>" alt="">
                    </div>
                    <h1><?php echo fw_get_db_settings_option('teammate1-name'); ?></h1>
                    <p><?php echo fw_get_db_settings_option('teammate1-post'); ?></p>
                </div>
                <div class="teamCard">
                    <div>
                        <img src="<?php echo fw_get_db_settings_option('teammate2-image')['url']; ?>" alt="">
                    </div>
                    <h1><?php echo fw_get_db_settings_option('teammate2-name'); ?></h1>
                    <p><?php echo fw_get_db_settings_option('teammate2-post'); ?></p>
                </div>
                <div class="teamCard">
                    <div>
                        <img src="<?php echo fw_get_db_settings_option('teammate3-image')['url']; ?>" alt="">
                    </div>
                    <h1><?php echo fw_get_db_settings_option('teammate3-name'); ?></h1>
                    <p><?php echo fw_get_db_settings_option('teammate3-post'); ?></p>
                </div>
                <div class="teamCard">
                    <div>
                        <img src="<?php echo fw_get_db_settings_option('teammate4-image')['url']; ?>" alt="">
                    </div>
                    <h1><?php echo fw_get_db_settings_option('teammate4-name'); ?></h1>
                    <p><?php echo fw_get_db_settings_option('teammate4-post'); ?></p>
                </div>
                <div class="teamCard">
                    <div>
                        <img src="<?php echo fw_get_db_settings_option('teammate5-image')['url']; ?>" alt="">
                    </div>
                    <h1><?php echo fw_get_db_settings_option('teammate5-name'); ?></h1>
                    <p><?php echo fw_get_db_settings_option('teammate5-post'); ?></p>
                </div>
                <div class="teamCard">
                    <div>
                        <img src="<?php echo fw_get_db_settings_option('teammate6-image')['url']; ?>" alt="">
                    </div>
                    <h1><?php echo fw_get_db_settings_option('teammate6-name'); ?></h1>
                    <p><?php echo fw_get_db_settings_option('teammate6-post'); ?></p>
                </div>
                <div class="teamCard">
                    <div>
                        <img src="<?php echo fw_get_db_settings_option('teammate7-image')['url']; ?>" alt="">
                    </div>
                    <h1><?php echo fw_get_db_settings_option('teammate7-name'); ?></h1>
                    <p><?php echo fw_get_db_settings_option('teammate7-post'); ?></p>
                </div>
                <div class="teamCard">
                    <div>
                        <img src="<?php echo fw_get_db_settings_option('teammate8-image')['url']; ?>" alt="">
                    </div>
                    <h1><?php echo fw_get_db_settings_option('teammate8-name'); ?></h1>
                    <p><?php echo fw_get_db_settings_option('teammate8-post'); ?></p>
                </div>
                <div class="teamCard">
                    <div>
                        <img src="<?php echo fw_get_db_settings_option('teammate9-image')['url']; ?>" alt="">
                    </div>
                    <h1><?php echo fw_get_db_settings_option('teammate9-name'); ?></h1>
                    <p><?php echo fw_get_db_settings_option('teammate9-post'); ?></p>
                </div>
                <div class="teamCard">
                    <div>
                        <img src="<?php echo fw_get_db_settings_option('teammate10-image')['url']; ?>" alt="">
                    </div>
                    <h1><?php echo fw_get_db_settings_option('teammate10-name'); ?></h1>
                    <p><?php echo fw_get_db_settings_option('teammate10-post'); ?></p>
                </div>
                <div class="teamCard">
                    <div>
                        <img src="<?php echo fw_get_db_settings_option('teammate11-image')['url']; ?>" alt="">
                    </div>
                    <h1><?php echo fw_get_db_settings_option('teammate11-name'); ?></h1>
                    <p><?php echo fw_get_db_settings_option('teammate11-post'); ?></p>
                </div>
                <div class="teamCard">
                    <div>
                        <img src="<?php echo fw_get_db_settings_option('teammate12-image')['url']; ?>" alt="">
                    </div>
                    <h1><?php echo fw_get_db_settings_option('teammate12-name'); ?></h1>
                    <p><?php echo fw_get_db_settings_option('teammate12-post'); ?></p>
                </div>
                <div class="teamCard">
                    <div>
                        <img src="<?php echo fw_get_db_settings_option('teammate13-image')['url']; ?>" alt="">
                    </div>
                    <h1><?php echo fw_get_db_settings_option('teammate13-name'); ?></h1>
                    <p><?php echo fw_get_db_settings_option('teammate13-post'); ?></p>
                </div>
                <div class="teamCard">
                    <div>
                        <img src="<?php echo fw_get_db_settings_option('teammate14-image')['url']; ?>" alt="">
                    </div>
                    <h1><?php echo fw_get_db_settings_option('teammate14-name'); ?></h1>
                    <p><?php echo fw_get_db_settings_option('teammate14-post'); ?></p>
                </div>
                <div class="teamCard">
                    <div>
                        <img src="<?php echo fw_get_db_settings_option('teammate15-image')['url']; ?>" alt="">
                    </div>
                    <h1><?php echo fw_get_db_settings_option('teammate15-name'); ?></h1>
                    <p><?php echo fw_get_db_settings_option('teammate15-post'); ?></p>
                </div>
            </div>
        </div>
        <div id="news">
            <h1>БЛОГ И НОВОСТИ</h1>
            <div class="newsContainer">
                <div class="breakingNews">
                    <div class="newsPhoto">
                        <img src="<?php echo fw_get_db_settings_option('news1-image')['url']; ?>" alt="">
                    </div>
                    <div class="newsText">
                        <p><?php echo fw_get_db_settings_option('news1-date'); ?></p>
                        <h1><?php echo fw_get_db_settings_option('news1-header'); ?></h1>
                        <p><?php echo fw_get_db_settings_option('news1-text'); ?></p>
                    </div>
                </div>
                <div class="breakingNews">
                    <div class="newsPhoto">
                        <img src="<?php echo fw_get_db_settings_option('news2-image')['url']; ?>" alt="">
                    </div>
                    <div class="newsText">
                        <p><?php echo fw_get_db_settings_option('news2-date'); ?></p>
                        <h1><?php echo fw_get_db_settings_option('news2-header'); ?></h1>
                        <p><?php echo fw_get_db_settings_option('news2-text'); ?></p>
                    </div>
                </div>
                <div class="breakingNews">
                    <div class="newsPhoto">
                        <img src="<?php echo fw_get_db_settings_option('news3-image')['url']; ?>" alt="">
                    </div>
                    <div class="newsText">
                        <p><?php echo fw_get_db_settings_option('news3-date'); ?></p>
                        <h1><?php echo fw_get_db_settings_option('news3-header'); ?></h1>
                        <p><?php echo fw_get_db_settings_option('news3-text'); ?></p>
                    </div>
                </div>
                <div class="breakingNews">
                    <div class="newsPhoto">
                        <img src="<?php echo fw_get_db_settings_option('news4-image')['url']; ?>" alt="">
                    </div>
                    <div class="newsText">
                        <p><?php echo fw_get_db_settings_option('news4-date'); ?></p>
                        <h1><?php echo fw_get_db_settings_option('news4-header'); ?></h1>
                        <p><?php echo fw_get_db_settings_option('news4-text'); ?></p>
                    </div>
                </div>
                <div class="breakingNews">
                    <div class="newsPhoto">
                        <img src="<?php echo fw_get_db_settings_option('news5-image')['url']; ?>" alt="">
                    </div>
                    <div class="newsText">
                        <p><?php echo fw_get_db_settings_option('news5-date'); ?></p>
                        <h1><?php echo fw_get_db_settings_option('news5-header'); ?></h1>
                        <p><?php echo fw_get_db_settings_option('news5-text'); ?></p>
                    </div>
                </div>
                <div class="breakingNews">
                    <div class="newsPhoto">
                        <img src="<?php echo fw_get_db_settings_option('news6-image')['url']; ?>" alt="">
                    </div>
                    <div class="newsText">
                        <p><?php echo fw_get_db_settings_option('news6-date'); ?></p>
                        <h1><?php echo fw_get_db_settings_option('news6-header'); ?></h1>
                        <p><?php echo fw_get_db_settings_option('news6-text'); ?></p>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer(); ?>