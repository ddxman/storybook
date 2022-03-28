<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/media/css/reset.css" media ="screen"/>
    <link rel="stylesheet" href="/media/css/styles.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Blog</title>
</head>
<body>
    <div class="conteiner">

        <header>
            <div class = "title"><p id="phpblog">PHP_BLOG</p></div>
            <nav>
            <?php



            // $connection = new PDO("mysql:host:localhost;dbname:test_database","username","password");

            ?> 
                <ul type="none" class="hr">
                    <li>Безопасность</li>
                    <li>Программирование</li>
                    <li>Lifestyle</li>
                    <li>Музыка</li>
                    <li>Саморазвитие</li>
                    <li>Гайды</li>
                    <li>Обзоры</li>
                </ul>
            </nav>
        </header>

        <main>
        
            <div class="newest">
                <div class="newest_article">
                    <p id="right">Новейшее_в_блоге</p>
                    <p id="left">Все записи</p>
                </div>
                <div class="body_article">
                    <ul class="list_count">

                        <li>
                            <div class="lit_art">
                                <img id="art_img" src="https://media-exp1.licdn.com/dms/image/C560BAQHMnA03XDdf3w/company-logo_200_200/0/1519855918965?e=2159024400&v=beta&t=CrP5Le1mWICRcaxIGNBuajHcHGFPuyNA5C8DI339lSk" alt="">
                                <h5 id="lit_article_name"> Название статьи </h5>
                                <h6 id="categorie"> Категория: Программирование</h6>
                                <p id="text_article">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam quis eaque explicabo temporibus p</p>
                            </div>
                        </li>

                        <li>
                            <div class="lit_art">
                                <img  id="art_img" src="https://media-exp1.licdn.com/dms/image/C560BAQHMnA03XDdf3w/company-logo_200_200/0/1519855918965?e=2159024400&v=beta&t=CrP5Le1mWICRcaxIGNBuajHcHGFPuyNA5C8DI339lSk" alt="">
                                <h5 id="lit_article_name"> Название статьи </h5>
                                <h6 id="categorie"> Категория: Программирование</h6>
                                <p id="text_article">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam quis eaque explicabo temporibus p</p>
                            </div>
                        </li>

                        <li>
                            <div class="lit_art">
                                <img  id="art_img" src="https://media-exp1.licdn.com/dms/image/C560BAQHMnA03XDdf3w/company-logo_200_200/0/1519855918965?e=2159024400&v=beta&t=CrP5Le1mWICRcaxIGNBuajHcHGFPuyNA5C8DI339lSk" alt="">
                                <h5 id="lit_article_name"> Название статьи </h5>
                                <h6 id="categorie"> Категория: Программирование</h6>
                                <p id="text_article">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam quis eaque explicabo temporibus p</p>
                            </div>
                        </li>

                         <li>
                            <div class="lit_art">
                                <img  id="art_img" src="https://media-exp1.licdn.com/dms/image/C560BAQHMnA03XDdf3w/company-logo_200_200/0/1519855918965?e=2159024400&v=beta&t=CrP5Le1mWICRcaxIGNBuajHcHGFPuyNA5C8DI339lSk" alt="">
                                <h5 id="lit_article_name"> Название статьи </h5>
                                <h6 id="categorie"> Категория: Программирование</h6>
                                <p id="text_article">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam quis eaque explicabo temporibus p</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="categories_articles_1">
                <div class="newest_article">
                    <p id="right">Безопасность[Новейшее]</p>
                    <p id="left">Все записи</p>
                </div>
                <div class="body_article">
                    <ul class="list_count">
                        <li>
                            <div class="lit_art">
                                <img id="art_img" src="https://media-exp1.licdn.com/dms/image/C560BAQHMnA03XDdf3w/company-logo_200_200/0/1519855918965?e=2159024400&v=beta&t=CrP5Le1mWICRcaxIGNBuajHcHGFPuyNA5C8DI339lSk" alt="">
                                <h5 id="lit_article_name"> Название статьи </h5>
                                <h6 id="categorie"> Категория: Программирование</h6>
                                <p id="text_article">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam quis eaque explicabo temporibus p</p>
                            </div>
                        </li>

                        <li>
                            <div class="lit_art">
                                <img  id="art_img" src="https://media-exp1.licdn.com/dms/image/C560BAQHMnA03XDdf3w/company-logo_200_200/0/1519855918965?e=2159024400&v=beta&t=CrP5Le1mWICRcaxIGNBuajHcHGFPuyNA5C8DI339lSk" alt="">
                                <h5 id="lit_article_name"> Название статьи </h5>
                                <h6 id="categorie"> Категория: Программирование</h6>
                                <p id="text_article">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam quis eaque explicabo temporibus p</p>
                            </div>
                        </li>
                       
                        <li>
                            <div class="lit_art">
                                <img  id="art_img" src="https://media-exp1.licdn.com/dms/image/C560BAQHMnA03XDdf3w/company-logo_200_200/0/1519855918965?e=2159024400&v=beta&t=CrP5Le1mWICRcaxIGNBuajHcHGFPuyNA5C8DI339lSk" alt="">
                                <h5 id="lit_article_name"> Название статьи </h5>
                                <h6 id="categorie"> Категория: Программирование</h6>
                                <p id="text_article">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam quis eaque explicabo temporibus p</p>
                            </div>
                        </li>
                    
                        <li>
                            <div class="lit_art">
                                <img  id="art_img" src="https://media-exp1.licdn.com/dms/image/C560BAQHMnA03XDdf3w/company-logo_200_200/0/1519855918965?e=2159024400&v=beta&t=CrP5Le1mWICRcaxIGNBuajHcHGFPuyNA5C8DI339lSk" alt="">
                                <h5 id="lit_article_name"> Название статьи </h5>
                                <h6 id="categorie"> Категория: Программирование</h6>
                                <p id="text_article">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam quis eaque explicabo temporibus p</p>
                            </div>
                        </li>
                    </ul>
                </div>
            
            </div>

            <div class="categories_articles_2">
                <div class="newest_article">
                    <p id="right">Программирование[Новейшее]</p>
                    <p id="left">Все записи</p>
                </div>
                <div class="body_article">
                    <ul class="list_count">
                        <li>
                            <div class="lit_art">
                                <img id="art_img" src="https://media-exp1.licdn.com/dms/image/C560BAQHMnA03XDdf3w/company-logo_200_200/0/1519855918965?e=2159024400&v=beta&t=CrP5Le1mWICRcaxIGNBuajHcHGFPuyNA5C8DI339lSk" alt="">
                                <h5 id="lit_article_name"> Название статьи </h5>
                                <h6 id="categorie"> Категория: Программирование</h6>
                                <p id="text_article">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam quis eaque explicabo temporibus p</p>
                            </div>
                        </li>

                        <li>
                            <div class="lit_art">
                                <img  id="art_img" src="https://media-exp1.licdn.com/dms/image/C560BAQHMnA03XDdf3w/company-logo_200_200/0/1519855918965?e=2159024400&v=beta&t=CrP5Le1mWICRcaxIGNBuajHcHGFPuyNA5C8DI339lSk" alt="">
                                <h5 id="lit_article_name"> Название статьи </h5>
                                <h6 id="categorie"> Категория: Программирование</h6>
                                <p id="text_article">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam quis eaque explicabo temporibus p</p>
                            </div>
                        </li>

                        <li>
                            <div class="lit_art">
                                <img  id="art_img" src="https://media-exp1.licdn.com/dms/image/C560BAQHMnA03XDdf3w/company-logo_200_200/0/1519855918965?e=2159024400&v=beta&t=CrP5Le1mWICRcaxIGNBuajHcHGFPuyNA5C8DI339lSk" alt="">
                                <h5 id="lit_article_name"> Название статьи </h5>
                                <h6 id="categorie"> Категория: Программирование</h6>
                                <p id="text_article">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam quis eaque explicabo temporibus p</p>
                            </div>
                        </li>

                        <li>
                            <div class="lit_art">
                                <img  id="art_img" src="https://media-exp1.licdn.com/dms/image/C560BAQHMnA03XDdf3w/company-logo_200_200/0/1519855918965?e=2159024400&v=beta&t=CrP5Le1mWICRcaxIGNBuajHcHGFPuyNA5C8DI339lSk" alt="">
                                <h5 id="lit_article_name"> Название статьи </h5>
                                <h6 id="categorie"> Категория: Программирование</h6>
                                <p id="text_article">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam quis eaque explicabo temporibus p</p>
                            
                            </div>
                        </li>
                    </ul>
                </div>
           
            </div>
        
            <div class="we_know">
                <p>Мы знаем</p>
            </div>

            <div class="top_articles">
                <p>Топ читаемых статей</p>
            </div>

            <div class="comments">
                <p>Комментарии</p>
            </div>

        </main>

        <footer>
            <div class="left_footer">
                <p class="PHPBLOG">PHP_BLOG</p>
            </div>
            <div class="right_footer">
                <ul class="footer_list">
                    <li>Главная</li>
                    <li>Обо мне</li>
                    <li>Я Вконтакте</li>
                    <li>Правообладателям</li>
                </ul>
            </div>
        </footer>
    </div>
</body>
</html>