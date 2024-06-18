@extends('layouts.app')

@section('css/')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection


@section('header')
<input class="header-button" type="submit" value="register">
@endsection

@section('content')
<section class="page-title">Login</section>
<wrapping class="content-wrapping">
    <main>
        <form class="form" action="/login" method="post">
            @csrf
            <div class="content">
                <div class="content__item">
                    <p class="content__item-email">メールアドレス</p>
                    <input class="form-custom" type="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}">
                </div>
                <div class="content__item--error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
                <div class="content__item">
                    <p class="content__item-pass">パスワード</p>
                    <input class="form-custom" type="text" name="pass" placeholder="例: coachtech1106" value="{{ old('password') }}" >
                </div>
                <div class="content__item--error">
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </form>
    </main>
</wrapping>
@endsection