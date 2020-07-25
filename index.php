<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</head>
<body>
    <header>
        <nav class="container">
            <a class="logo" href="">
                <!-- Пишем кликабельный логотип буквами с свистелками через css и js-->
                <span>l</span>
                <span>o</span>
                <span>g</span>
                <span>o</span>
            </a>
            <!-- Реализация кнопки для показа/скрытия меню -->
            <div class="nav-toggle"><span></span></div>
            <!-- Поиск -->
            <form action="" method="get" id="searchform">
                <input type="text" placeholder="SEARCH ON SITE...">
                <!-- наклонный шрифт в кнопке поиска -->
                <button type="submit"><i class="fa fa-search">поиск</i></button>
            </form>
            <!-- Реализуем меню списком -->
            <ul id="menu">
                <li><a href="">Блог</a></li>
                <li><a href="">Портфолио</a></li>
                <li><a href="">О авторе</a></li>
            </ul>
        </nav>
    </header>

    <!-- Статьи в post-list  -->
    <!-- div class="container" содержит статьи и боковую колонку, реализованную через aside -->
    <div class="container">
        <div class="post-list">
            <!-- в articlre обернуты анонсы статей -->
            <arcticle id="post-1" class="post">
                <div class="post-image"><a href=""><img src="https://html5book.ru/wp-content/uploads/2016/05/rasskaz_slovar_rodnoy_prirodi.jpg" ></a></div>
                <div class="post-content">
                    <div class="category"><a href="">Дизайн</a></div>
                    <h2 class="post-title">Весна</h2>
                    <p>Очень богат русский язык словами, относящимися к временам года и к природным явлениям, с ними связанным.</p>
                    <div class="post-footer">
                        <a class="more-link" href="">Продолжить чтение</a>
                        <!-- Реализуем возможность поделиться статьей в скотсетях -->
                        <div class="post-social">
                            <a href="" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="" target="_blank"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </arcticle>
            <!-- Поскольку использовалось id , то через цикл мы можем реализовать по шаблону остальные статьи блога -->
            <!-- id="post-НОМЕР_СТАТЬИ"  ↓↓↓  -->
            <!--
              <article id="post-2" class="post">
                     ...
              </article>

             -->

        </div> <!-- Закончили с div class="posts-list" -->
        <!-- Теперь боковая колонка -->
        <aside>
            <div class="widget">
                <!-- Содержимое скобок- количество, реализуется через отдельно - выводом переменной -->
                <!-- class="widget-title" используется для заголовков в виджете/боковой колонкой-->
                <h3 class="widget-title">Категории</h3>
                <ul class="widget-category-list">
                    <li><a href="">Дизайн</a> (2)</li>
                    <li><a href="">Верстка</a> (5)</li>
                    <li><a href="">Видео</a> (1)</li>
                </ul>
            </div>
            <div class="widget">
                <h3 class="widhget-title">Последние записи</h3>
                <!-- Реализуем список последних публикаций с фото -->
                <ul class="widget-post-list">
                    <li>
                        <div class="post-image-small">
                            <a href=""><img src="https://html5book.ru/wp-content/uploads/2016/05/rasskaz_slovar_rodnoy_prirodi.jpg" alt=""></a>
                        </div>
                        <h4 class="widget-post-title">Весна</h4>
                    </li>
                    <li>
                        <div class="post-image-small">
                            <a href=""><img src="https://html5book.ru/wp-content/uploads/2016/05/rasskaz_Russia.jpg"></a>
                        </div>
                        <h4 class="widget-post-title">Лето</h4>
                    </li>
                    <li>
                        <div class="post-image-small">
                            <a href=""><img src="https://html5book.ru/wp-content/uploads/2016/05/rasskaz_rodnaya_priroda_osen.jpg"></a>
                        </div>
                        <h4 class="widget-post-title">Осень</h4>
                    </li>
                </ul>
            </div>
            <div class="widget">
                <h3 class="widget-title">Подписка на рассылку</h3>
                <form action="" method="post" id="subscribe">
                    <input type="email" name="email" placeholder="Ваш email" required>
                    <button type="submit"><i class="fa fa-paper-plane-o">Подписаться</i></button>
                </form>
            </div>
        </aside>
    </div> <!-- конец div class="container"-->
    <!-- С контентом на сайте покончено  -->
        
    </div>
</body>
</html>