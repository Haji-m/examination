<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashonablyLate</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <header>
        <h1 class="title">FashonablyLate</h1>
    </header>
    <section class="page-title">content</section>
    <wrapper>
        <main class="contact">
            <div class="contact-nav">
                <input class="contact-item" type="text" name="email" id="email" placeholder="名前やメールアドレスを入力してください">
                <select class="contact-item" name="gender" id="gender">
                    <option class="contact-item--custom" value="gender">性別</option>
                    <option class="contact-item--custom" value="male">男性</option>
                    <option class="contact-item--custom" value="female">女性</option>
                    <option class="contact-item--custom" value="another">その他</option>
                </select>
                <select class="contact-item" name="type" id="type">
                    <option class="contact-item--custom" value="type-select">お問い合わせの種類</option>
                    <option class="contact-item--custom" value="change-goods">商品の交換について</option>
                </select>
                <div class="contact-item" id="date">
                    <input class="contact-item--custom" type="date" value="年/月/日">
                </div>
                <div class="contact-item" id="search">
                    <input class="contact-item--custom" type="submit" value="検索">
                </div>
                <div class="contact-item" id="reset">
                    <input class="contact-item--custom" type="submit" value="リセット">
                </div>
            </div>
            <div class="action">
                <div class="action-export">
                    <input class="action-export__button" value="エクスポート">
                </div>
                <div class="action-pagenate">
                    <ul class="action-pagenate--pagenation">
                        <li><a href="/page/2/" rel="previous"></a>前へ</li>
                        <li><a href="/">1</a></li>
                        <li><a href="/page/2/">2</a></li>
                        <li><a href="/page/3/">3</a></li>
                        <li><a href="/page/4/">4</a></li>
                        <li><a href="/page/5/">5</a></li>
                        <li><a href="/page/2/" rel="next"></a>次へ</li>
                    </ul>
                </div>
            </div>
        </main>
    </wrapper>
</body>