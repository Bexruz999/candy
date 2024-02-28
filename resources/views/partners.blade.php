@extends('layouts.index')

@section('content')

    <x-header page="partners"/>

    <!-- PAGE-HEAD -->

    <section class="page-head">
        <div class="container">
            {{--<div class="page-head__video">
                <video src="/video/1.mp4" pip="false" autoplay="autoplay" loop="loop" muted="muted" playsinline="" webkit-playsinline=""></video>
            </div>--}}
            @if($img)
                <div class="news-single__head">
                    <img src="{{ asset('/storage/' . $settings->file) }}" alt="news">
                </div>
            @endif

            @if(!$img)
                <div class="page-head__video">
                    <video src="{{ asset('/storage/' . $settings->file) }}" pip="false" autoplay="autoplay" loop="loop" muted="muted" playsinline="" webkit-playsinline=""></video>
                </div>
            @endif
            <div class="page-head__content">
                <h1 class="page-head__title">
                    {{ $settings->title }}
                </h1>
                <div class="page-head__logo">
                    <img src="/img/logo.svg" alt="Candy Land">
                </div>
            </div>
        </div>
    </section>


    <!-- PARTNERS -->

    <section class="partners">
        <div class="container">
            <div class="partners-wrap">
                <div class="partners-info">
                    <div class="partners-info__title">
                        {{ $settings->text }}
                    </div>
                </div>
                <form action="{{ route('form') }}" method="post" class="partners-form form">
                        @csrf
                        <input type="hidden" name="department" value="partner">
                        <div class="partners-form__input">
                            <p>{{__('settings.Ваше имя')}}</p>
                            <input type="text" class="form_name" name="name" placeholder="{{__('settings.Введите имя')}} . . .">
                        </div>
                        <div class="partners-form__input">
                            <p>{{__('settings.Ваш номер телефона')}}</p>
                            <input type="tel" class="form_tel" name="phone" placeholder="{{__('settings.+998')}}">
                        </div>
                        <div class="partners-form__input partners-form__full">
                            <p>{{__('settings.Ваш адрес')}}</p>
                            <input type="text" name="address" placeholder="{{__('settings.Введите адрес')}} . . .">
                        </div>
                        <div class="partners-form__input partners-form__text">
                            <p>{{__('settings.Ваше сообщение')}}</p>
                            <textarea name="comment" placeholder="{{__('settings.Введите сообщение')}} . . ."></textarea>
                        </div>
                        <button class="btn partners-form__btn btn-red">
                            {{__('settings.Отправить')}}
                        </button>
                </form>
            </div>
        </div>
    </section>


    <x-map :maps="$maps"/>

    <x-consult/>

    <x-footer/>
@endsection
