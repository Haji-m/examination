<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashonablyLate</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="contact.css">
</head>

<body>
    <header>
        <h1 class="title">FashonablyLate</h1>
    </header>
    <section class="page-title">content</section>
    <form action="/contacts/confirm" method="post">
        <main class="contact">
            <ul class="contact__item">
                <li class="contact__item-name">
                    <label for="name">お名前<span class="warning">※</span></label>
                    <input class="flame-custom--row2" type="text" name="last-name" placeholder="例: 田中" value="{{ old('name') }}" />
                    <input class="flame-custom--row2" type="text" name="first-name" placeholder="例: 太郎" value="{{ old('name') }}" />
                    <div class="form__error">
                        @error('name')
                        {{ $message }}
                        @enderror
                    </div>
                </li>
                <li class="contact__item-gender">
                    <label for="gender">性別<span class="warning">※</span></label>
                    <input class="contact__item-gender--check" type="radio" name="gender" id="male" placeholder="male" checked="checked" /> 男性
                    <input class="contact__item-gender--check" type="radio" name="gender" id="female" placeholder="female" /> 女性
                    <input class="contact__item-gender--check" type="radio" name="gender" id="another" placeholder="another" /> その他
                </li>
                <li class="contact__item-email">
                    <label for="email">メールアドレス<span class="warning">※</span></label>
                    <input class="flame-custom--row1" type="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}" />
                    <div class="form__error">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>
                </li>
                <li class="contact__item-tel">
                    <label for="tel">電話番号<span class="warning">※</span></label>
                    <input class="flame-custom--low3" id="tel-number1" type="tel" name="tel-1st" placeholder="080" value="{{ old('tel') }}" />-
                    <input class="flame-custom--low3" id="tel-number2" type="tel" name="tel-2nd" placeholder="1234" value="{{ old('tel') }}" />-
                    <input class="flame-custom--low3" id="tel-number3" type="tel" name="tel-3rd" placeholder="5678" value="{{ old('tel') }}" />
                    <div class="form__error">
                        @error('tel')
                        {{ $message }}
                        @enderror
                    </div>
                </li>
                <li class="contact__item-address">
                    <label for="address">住所<span class="warning">※</span></label>
                    <input class="flame-custom--row1" type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
                    <div class="form__error">
                        @error('address')
                        {{ $message }}
                        @enderror
                    </div>
                </li>
                <li class="contact__item-building">
                    <label for="building">建物名<span class="warning">※</span></label>
                    <input class="flame-custom--row1" type="text" name="building" placeholder="例: 千駄ヶ谷マンション101" value="{{ old('building') }}" />
                    <div class="form__error">
                        @error('building')
                        {{ $message }}
                        @enderror
                    </div>
                </li>
                <li class="contact__item-type">
                    <label for="type">お問い合わせ種類<span class="warning">※</span></label>
                    <select class="type" name="type">
                        <option class="flame-custom--row1" id="type-default">選択してください</option>
                        <option class="flame-custom--row1" id="type-select">商品の交換について</option>
                    </select>
                </li>
                <li class="contact__item-content">
                    <label for="name">お問い合わせ内容<span class="warning">※</span></label>
                    <textarea class="flame-custom--row1" name="content" placeholder="お問合せ内容をご記載ください。" value="{{ old('content') }}"></textarea>
                    <div class="form__error">
                        @error('content')
                        {{ $message }}
                        @enderror
                    </div>
                </li>
                <input class="submit-button" type="submit" value="確認画面" />
            </ul>
        </main>
    </form>
</body>

</html>