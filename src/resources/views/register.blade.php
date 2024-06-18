@extends('layouts.app')

@section('css/')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection


@section('header')
<input class="header-button" type="submit" value="login">
@endsection

@section('content')
<section class="page-title">Register</section>
<wrapping class="content-wrapping">
    <main>
        <div class="content">
            <div class="content__item">
                <p class="content__item-pass">お名前</p>
                <input class="form-custom" type="text" name="pass" placeholder="例: 山田　太郎">
            </div>
            <div class="content__item">
                <p class="content__item-email">メールアドレス</p>
                <input class="form-custom" type="email" name="email" placeholder="例: test@example.com">
            </div>
            <div class="content__item">
                <p class="content__item-pass">パスワード</p>
                <input class="form-custom" type="text" name="pass" placeholder="例: coachtech1106">
            </div>
        </div>
    </main>
</wrapping>
@endsection