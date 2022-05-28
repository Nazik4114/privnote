<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= BASE_URL."/css/style.css"?>">

  </head>
  <body >
     
  <div id="header_bg">
            <div id="header">
                <h1>
                    <a href="/" title="Натисніть сюди, щоб створити нову записку">                        
                        <img src="/image/privnote-logo.svg"
                             onerror="this.onerror=null; this.src='/static-58c8928/style/legacy/privnote-logo.png'">
                        <span>Privnote</span>
                    </a>
                </h1>
                <h2>Відсилайте записки, котрі будуть самознищені після прочитування</h2>
            </div>
            
        </div>


  
    <?php require_once VIEWS_PATH."/pages/{$page}.php"; ?>




            
    <div id="footer">
            <div id="nav" class="section group">
                <div class="col span_2_of_6">
                    <a href="/"><strong>Написати нову записку</strong></a><br>
                    <a href="/info/contact">Коментарі</a>
                </div>

                <div class="col span_1_of_6">
                    <a href="/info/support">Підтримка</a><br>
                    <a href="/info/privacy">Конфіденційність</a><br>
                    <a href="/info/about">Про нас</a>
                                        
                </div>

                <div class="col span_1_of_6">
                    <a href="/blog" rel="noreferrer">Blog</a><br>
                    <a href="/twitter" rel="noreferrer">Twitter</a><br>
                    <a href="/facebook" rel="noreferrer">Facebook</a>
                </div>

                <div class="col span_2_of_6">
                    <form method="get">
                        <select name="manual_locale" onchange="javascript:this.form.submit()">
                            <option
                                 value="uk"
                                 selected=selected
                                 >українська мова</option>
                            <option value="default">(За замовчуванням в браузері)</option>
                        </select>
                    </form>
                    <a href="http://blog.privnote.com/post/125553077722/helps-us-translate-privnote">Перекладіть на вашу мову!</a><br><br>
                </div>
            </div>
            <div id="footnote">
                Privnote <span class="version">Ver. 1.1-44-g58c8928 / 2018-05-25</span> |
                © <a href="http://www.ikatu.us/privnote.html">Ikatu</a>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?=JS_PATH."Js1.js"?>"></script>  
</body>
</html>