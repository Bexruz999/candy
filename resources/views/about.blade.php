@extends('layouts.index')

@section('seo')
    <title>{{ $settings->title }}</title>
    <meta name="description" content="{{ $settings->description }}">
@endsection

@section('content')

    <x-header page="about"/>

    <!-- PAGE-HEAD -->

    <section class="page-head">
        <div class="container">


            @if($img)
                <div class="news-single__head">
                    <img src="{{ asset('/storage/' . $settings->file) }}" alt="news">
                </div>
            @endif

            @if(!$img)
                <div class="page-head__video">
                    <video src="{{ asset('/storage/' . $settings->file) }}" pip="false" autoplay="autoplay" loop="loop"
                           muted="muted" playsinline="" webkit-playsinline=""></video>
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


    <!-- ABOUT -->

    <section class="about">
        <div class="about__bg">
            <img src="/img/about/product1.png" alt="product">
            <img src="/img/about/product2.png" alt="product">
        </div>
        <div class="about__text wow fadeInUp" data-wow-delay=".4s">
            Одна из самых известных кондитерских фабрик Узбекистана. История компании ООО "Кэнди Голд" началась в 2006
            году. Производство было начато с линейкипомадных конфет из одной мастерской.Сегодня в компании работает
            более 200 человек, 9 цехов, расширен бизнес и запущено производство различных сортов конфет и других
            кондитерских изделий.
        </div>
        <div class="container">
            <div class="about-images">
                <img src="/img/about/1.jpg" alt="about" class="wow fadeInUp" data-wow-delay=".3s">
                <img src="/img/about/1.png" alt="about">
            </div>
            <div class="about-mission">
                <div class="about-mission__card wow fadeInUp" data-wow-delay=".4s">
                    <h4 class="about-mission__title">
                        Наша миссия
                    </h4>
                    <div class="about-mission__text">
                        Стать одним из крупных производителей кондитерских изделий в Средней Азии. Поэтому мы создаём
                        успешные бренды и предлагаем их для различных сегментов клиентов. Каждый год компания
                        производить новые и инновационные творения из высококачественных продуктов чтобы делиться
                        радостью с нашими покупателями.
                    </div>
                </div>
                <div class="about-mission__img wow fadeInUp" data-wow-delay=".5s">
                    <img src="/img/about/package.png" alt="package">
                </div>
            </div>
        </div>
    </section>


    <!-- HISTORY -->

    <section class="history">
        <div class="container">
            <h2 class="history__title">
                {{ __('settings.История компании') }}
            </h2>
            <div class="history-main">

                @foreach($about->history as $item)
                    <div class="history-item">
                        <div class="history-item__img">
                            <img src="{{ asset('/storage/'.Arr::get($item, 'img')) }}" alt="history">
                        </div>
                        <div class="history-item__content">
                            <div class="history-item__count">
                                {{ $loop->iteration < 10 ? '0'.$loop->iteration : $loop->iteration }}
                            </div>
                            <div class="history-item__year">
                                {{ Arr::get($item, 'year') }}
                            </div>
                            <div class="history-item__wrap">
                                <div class="history-item__ico">
                                    <img src="{{ asset('/storage/'.Arr::get($item, 'icon')) }}" alt="history">
                                </div>
                                <div class="history-item__info">
                                    <div class="history-item__title">
                                        {{ Arr::get($item, 'title') }}
                                    </div>
                                    <div class="history-item__text">
                                        {{ Arr::get($item, 'text') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{--<div class="history-item">
                    <div class="history-item__img">
                        <img src="/img/history/1.png" alt="history">
                    </div>
                    <div class="history-item__content">
                        <div class="history-item__count">
                            01
                        </div>
                        <div class="history-item__year">
                            2006
                        </div>
                        <div class="history-item__wrap">
                            <div class="history-item__ico">
                                <img src="/img/history/1.svg" alt="history">
                            </div>
                            <div class="history-item__info">
                                <div class="history-item__title">
                                    Основание
                                </div>
                                <div class="history-item__text">
                                    Запуск первой линии производства в г.Ташкент
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="history-item">
                    <div class="history-item__img">
                        <img src="/img/history/2.png" alt="history">
                    </div>
                    <div class="history-item__content">
                        <div class="history-item__count">
                            02
                        </div>
                        <div class="history-item__year">
                            2007
                        </div>
                        <div class="history-item__wrap">
                            <div class="history-item__ico">
                                <img src="/img/history/2.svg" alt="history">
                            </div>
                            <div class="history-item__info">
                                <div class="history-item__title">
                                    Расширение
                                </div>
                                <div class="history-item__text">
                                    Запуск второй линии производства печенья “Tornado”, “Joxori”, “Banan”
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="history-item">
                    <div class="history-item__img">
                        <img src="/img/history/3.png" alt="history">
                    </div>
                    <div class="history-item__content">
                        <div class="history-item__count">
                            03
                        </div>
                        <div class="history-item__year">
                            2008
                        </div>
                        <div class="history-item__wrap">
                            <div class="history-item__ico">
                                <img src="/img/history/3.svg" alt="history">
                            </div>
                            <div class="history-item__info">
                                <div class="history-item__title">
                                    3-я линия
                                </div>
                                <div class="history-item__text">
                                    Запуск третьей линии производства печенья “Roller”
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="history-item">
                    <div class="history-item__img">
                        <img src="/img/history/4.png" alt="history">
                    </div>
                    <div class="history-item__content">
                        <div class="history-item__count">
                            04
                        </div>
                        <div class="history-item__year">
                            2009
                        </div>
                        <div class="history-item__wrap">
                            <div class="history-item__ico">
                                <img src="/img/history/4.svg" alt="history">
                            </div>
                            <div class="history-item__info">
                                <div class="history-item__title">
                                    Расширение
                                </div>
                                <div class="history-item__text">
                                    Старт модернизации первой производственной линии
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="history-item">
                    <div class="history-item__img">
                        <img src="/img/history/5.png" alt="history">
                    </div>
                    <div class="history-item__content">
                        <div class="history-item__count">
                            05
                        </div>
                        <div class="history-item__year">
                            2010
                        </div>
                        <div class="history-item__wrap">
                            <div class="history-item__ico">
                                <img src="/img/history/5.svg" alt="history">
                            </div>
                            <div class="history-item__info">
                                <div class="history-item__title">
                                    Ребрендинг
                                </div>
                                <div class="history-item__text">
                                    Ребрендинг всего ассортимента выпускаемого печенья
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="history-item">
                    <div class="history-item__img">
                        <img src="/img/history/1.png" alt="history">
                    </div>
                    <div class="history-item__content">
                        <div class="history-item__count">
                            06
                        </div>
                        <div class="history-item__year">
                            2011
                        </div>
                        <div class="history-item__wrap">
                            <div class="history-item__ico">
                                <img src="/img/history/1.svg" alt="history">
                            </div>
                            <div class="history-item__info">
                                <div class="history-item__title">
                                    Основание
                                </div>
                                <div class="history-item__text">
                                    Запуск первой линии производства в г.Ташкент
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="history-item">
                    <div class="history-item__img">
                        <img src="/img/history/2.png" alt="history">
                    </div>
                    <div class="history-item__content">
                        <div class="history-item__count">
                            07
                        </div>
                        <div class="history-item__year">
                            2012
                        </div>
                        <div class="history-item__wrap">
                            <div class="history-item__ico">
                                <img src="/img/history/2.svg" alt="history">
                            </div>
                            <div class="history-item__info">
                                <div class="history-item__title">
                                    Расширение
                                </div>
                                <div class="history-item__text">
                                    Запуск второй линии производства печенья “Tornado”, “Joxori”, “Banan”
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="history-item">
                    <div class="history-item__img">
                        <img src="/img/history/3.png" alt="history">
                    </div>
                    <div class="history-item__content">
                        <div class="history-item__count">
                            08
                        </div>
                        <div class="history-item__year">
                            2013
                        </div>
                        <div class="history-item__wrap">
                            <div class="history-item__ico">
                                <img src="/img/history/3.svg" alt="history">
                            </div>
                            <div class="history-item__info">
                                <div class="history-item__title">
                                    3-я линия
                                </div>
                                <div class="history-item__text">
                                    Запуск третьей линии производства печенья “Roller”
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="history-item">
                    <div class="history-item__img">
                        <img src="/img/history/4.png" alt="history">
                    </div>
                    <div class="history-item__content">
                        <div class="history-item__count">
                            09
                        </div>
                        <div class="history-item__year">
                            2014
                        </div>
                        <div class="history-item__wrap">
                            <div class="history-item__ico">
                                <img src="/img/history/4.svg" alt="history">
                            </div>
                            <div class="history-item__info">
                                <div class="history-item__title">
                                    Расширение
                                </div>
                                <div class="history-item__text">
                                    Старт модернизации первой производственной линии
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="history-item">
                    <div class="history-item__img">
                        <img src="/img/history/5.png" alt="history">
                    </div>
                    <div class="history-item__content">
                        <div class="history-item__count">
                            10
                        </div>
                        <div class="history-item__year">
                            2015
                        </div>
                        <div class="history-item__wrap">
                            <div class="history-item__ico">
                                <img src="/img/history/5.svg" alt="history">
                            </div>
                            <div class="history-item__info">
                                <div class="history-item__title">
                                    Ребрендинг
                                </div>
                                <div class="history-item__text">
                                    Ребрендинг всего ассортимента выпускаемого печенья
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="history-item">
                    <div class="history-item__img">
                        <img src="/img/history/1.png" alt="history">
                    </div>
                    <div class="history-item__content">
                        <div class="history-item__count">
                            11
                        </div>
                        <div class="history-item__year">
                            2016
                        </div>
                        <div class="history-item__wrap">
                            <div class="history-item__ico">
                                <img src="/img/history/1.svg" alt="history">
                            </div>
                            <div class="history-item__info">
                                <div class="history-item__title">
                                    Основание
                                </div>
                                <div class="history-item__text">
                                    Запуск первой линии производства в г.Ташкент
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="history-item">
                    <div class="history-item__img">
                        <img src="/img/history/2.png" alt="history">
                    </div>
                    <div class="history-item__content">
                        <div class="history-item__count">
                            12
                        </div>
                        <div class="history-item__year">
                            2017
                        </div>
                        <div class="history-item__wrap">
                            <div class="history-item__ico">
                                <img src="/img/history/2.svg" alt="history">
                            </div>
                            <div class="history-item__info">
                                <div class="history-item__title">
                                    Расширение
                                </div>
                                <div class="history-item__text">
                                    Запуск второй линии производства печенья “Tornado”, “Joxori”, “Banan”
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="history-item">
                    <div class="history-item__img">
                        <img src="/img/history/3.png" alt="history">
                    </div>
                    <div class="history-item__content">
                        <div class="history-item__count">
                            13
                        </div>
                        <div class="history-item__year">
                            2018
                        </div>
                        <div class="history-item__wrap">
                            <div class="history-item__ico">
                                <img src="/img/history/3.svg" alt="history">
                            </div>
                            <div class="history-item__info">
                                <div class="history-item__title">
                                    3-я линия
                                </div>
                                <div class="history-item__text">
                                    Запуск третьей линии производства печенья “Roller”
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="history-item">
                    <div class="history-item__img">
                        <img src="/img/history/4.png" alt="history">
                    </div>
                    <div class="history-item__content">
                        <div class="history-item__count">
                            14
                        </div>
                        <div class="history-item__year">
                            2019
                        </div>
                        <div class="history-item__wrap">
                            <div class="history-item__ico">
                                <img src="/img/history/4.svg" alt="history">
                            </div>
                            <div class="history-item__info">
                                <div class="history-item__title">
                                    Расширение
                                </div>
                                <div class="history-item__text">
                                    Старт модернизации первой производственной линии
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="history-item">
                    <div class="history-item__img">
                        <img src="/img/history/5.png" alt="history">
                    </div>
                    <div class="history-item__content">
                        <div class="history-item__count">
                            15
                        </div>
                        <div class="history-item__year">
                            2020
                        </div>
                        <div class="history-item__wrap">
                            <div class="history-item__ico">
                                <img src="/img/history/5.svg" alt="history">
                            </div>
                            <div class="history-item__info">
                                <div class="history-item__title">
                                    Ребрендинг
                                </div>
                                <div class="history-item__text">
                                    Ребрендинг всего ассортимента выпускаемого печенья
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="history-item">
                    <div class="history-item__img">
                        <img src="/img/history/3.png" alt="history">
                    </div>
                    <div class="history-item__content">
                        <div class="history-item__count">
                            16
                        </div>
                        <div class="history-item__year">
                            2021
                        </div>
                        <div class="history-item__wrap">
                            <div class="history-item__ico">
                                <img src="/img/history/3.svg" alt="history">
                            </div>
                            <div class="history-item__info">
                                <div class="history-item__title">
                                    3-я линия
                                </div>
                                <div class="history-item__text">
                                    Запуск третьей линии производства печенья “Roller”
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="history-item">
                    <div class="history-item__img">
                        <img src="/img/history/4.png" alt="history">
                    </div>
                    <div class="history-item__content">
                        <div class="history-item__count">
                            17
                        </div>
                        <div class="history-item__year">
                            2022
                        </div>
                        <div class="history-item__wrap">
                            <div class="history-item__ico">
                                <img src="/img/history/4.svg" alt="history">
                            </div>
                            <div class="history-item__info">
                                <div class="history-item__title">
                                    Расширение
                                </div>
                                <div class="history-item__text">
                                    Старт модернизации первой производственной линии
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="history-item">
                    <div class="history-item__img">
                        <img src="/img/history/5.png" alt="history">
                    </div>
                    <div class="history-item__content">
                        <div class="history-item__count">
                            18
                        </div>
                        <div class="history-item__year">
                            2023
                        </div>
                        <div class="history-item__wrap">
                            <div class="history-item__ico">
                                <img src="/img/history/5.svg" alt="history">
                            </div>
                            <div class="history-item__info">
                                <div class="history-item__title">
                                    Ребрендинг
                                </div>
                                <div class="history-item__text">
                                    Ребрендинг всего ассортимента выпускаемого печенья
                                </div>
                            </div>
                        </div>
                    </div>
                </div>--}}
            </div>
            <div class="history-line">
                <div class="history-line__text">
                    <span>2006</span>
                    <span>2023</span>
                </div>
            </div>
        </div>
    </section>



    <!-- CERTS -->

    <section class="certs">
        <div class="container">
            <div class="certs-images">
                @foreach($certs as $cert)
                    <img src="{{ asset('/storage/'. $cert->img) }}" alt="cert" class="wow fadeInLeft" data-wow-delay=".3s">
                @endforeach
                {{--<img src="/img/certs/about1.png" alt="cert" class="wow fadeInLeft" data-wow-delay=".3s">
                <img src="/img/certs/about2.png" alt="cert" class="wow fadeInLeft" data-wow-delay=".5s">
                <img src="/img/certs/about3.png" alt="cert" class="wow fadeInLeft" data-wow-delay=".7s">
                <img src="/img/certs/about4.png" alt="cert" class="wow fadeInLeft" data-wow-delay=".9s">
                <img src="/img/certs/about5.png" alt="cert" class="wow fadeInLeft" data-wow-delay="1.1s">--}}
            </div>
        </div>
    </section>


    <!-- IMPORT -->

    <section class="import">
        <div class="container">
            <div class="import-content">
                <h2 class="import__title wow fadeInUp" data-wow-delay=".3s">
                    {{ __('settings.Производственные линии') }}
                </h2>
                <div class="import__text wow fadeInUp" data-wow-delay=".4s">
                    {!! __('settings.Чтобы обеспечить') !!}
                </div>
            </div>
            <div class="import-logos">

                @foreach($about->partners as $partner)

                    @if($loop->iteration === 1)
                        <div class="import-logos__col">
                            <div class="import-logos__item wow fadeIn" data-wow-delay=".6s">
                                <div class="import-logos__inner">
                                    <div class="import-logos__front">
                                        <img src="{{ asset('/storage/' . Arr::get($partner, 'img')) }}" alt="logo">
                                    </div>
                                    <div class="import-logos__back">
                                        <img src="{{ asset('/storage/' . Arr::get($partner, 'img_back')) }}" alt="logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                @endforeach

                <div class="import-logos__col">
                    @foreach($about->partners as $partner)

                        @if($loop->iteration > 1 && $loop->iteration < 4)
                            <div class="import-logos__item wow fadeIn"
                                 data-wow-delay=".{{ $loop->iteration === 2 ? '5' : '9' }}s">
                                <div class="import-logos__inner">
                                    <div class="import-logos__front">
                                        <img src="{{ asset('/storage/' . Arr::get($partner, 'img')) }}" alt="logo">
                                    </div>
                                    <div class="import-logos__back">
                                        <img src="{{ asset('/storage/' . Arr::get($partner, 'img_back')) }}" alt="logo">
                                    </div>
                                </div>
                            </div>
                        @endif

                    @endforeach
                </div>

                <div class="import-logos__col">
                    @foreach($about->partners as $partner)

                        @if($loop->iteration > 3 && $loop->iteration < 7)
                            <div class="import-logos__item wow fadeIn"
                                 data-wow-delay=".{{ $loop->iteration === 5 ? '9' : '4' }}s">
                                <div class="import-logos__inner">
                                    <div class="import-logos__front">
                                        <img src="{{ asset('/storage/' . Arr::get($partner, 'img')) }}" alt="logo">
                                    </div>
                                    <div class="import-logos__back">
                                        <img src="{{ asset('/storage/' . Arr::get($partner, 'img_back')) }}" alt="logo">
                                    </div>
                                </div>
                            </div>
                        @endif

                    @endforeach
                </div>

                <div class="import-logos__col">
                    @foreach($about->partners as $partner)

                        @if($loop->iteration > 6 && $loop->iteration < 9)
                            <div class="import-logos__item wow fadeIn"
                                 data-wow-delay=".{{ $loop->iteration === 7 ? '7' : '8' }}s">
                                <div class="import-logos__inner">
                                    <div class="import-logos__front">
                                        <img src="{{ asset('/storage/' . Arr::get($partner, 'img')) }}" alt="logo">
                                    </div>
                                    <div class="import-logos__back">
                                        <img src="{{ asset('/storage/' . Arr::get($partner, 'img_back')) }}" alt="logo">
                                    </div>
                                </div>
                            </div>
                        @endif

                    @endforeach
                </div>

                @foreach($about->partners as $partner)

                    @if($loop->iteration === 9)
                        <div class="import-logos__col">
                            <div class="import-logos__item wow fadeIn" data-wow-delay=".3s">
                                <div class="import-logos__inner">
                                    <div class="import-logos__front">
                                        <img src="{{ asset('/storage/' . Arr::get($partner, 'img')) }}" alt="logo">
                                    </div>
                                    <div class="import-logos__back">
                                        <img src="{{ asset('/storage/' . Arr::get($partner, 'img_back')) }}" alt="logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                @endforeach

                {{--<div class="import-logos__col">
                    <div class="import-logos__item wow fadeIn" data-wow-delay=".6s">
                        <div class="import-logos__inner">
                            <div class="import-logos__front">
                                <img src="/img/logos/1-1.png" alt="logo">
                            </div>
                            <div class="import-logos__back">
                                <img src="/img/logos/1-9.png" alt="logo">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="import-logos__col">
                    <div class="import-logos__item wow fadeIn" data-wow-delay=".5s">
                        <div class="import-logos__inner">
                            <div class="import-logos__front">
                                <img src="/img/logos/1-2.png" alt="logo">
                            </div>
                            <div class="import-logos__back">
                                <img src="/img/logos/1-8.png" alt="logo">
                            </div>
                        </div>
                    </div>
                    <div class="import-logos__item wow fadeIn" data-wow-delay=".9s">
                        <div class="import-logos__inner">
                            <div class="import-logos__front">
                                <img src="/img/logos/1-3.png" alt="logo">
                            </div>
                            <div class="import-logos__back">
                                <img src="/img/logos/1-7.png" alt="logo">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="import-logos__col">
                    <div class="import-logos__item wow fadeIn" data-wow-delay=".3s">
                        <div class="import-logos__inner">
                            <div class="import-logos__front">
                                <img src="/img/logos/1-4.png" alt="logo">
                            </div>
                            <div class="import-logos__back">
                                <img src="/img/logos/1-6.png" alt="logo">
                            </div>
                        </div>
                    </div>
                    <div class="import-logos__item wow fadeIn" data-wow-delay="1s">
                        <div class="import-logos__inner">
                            <div class="import-logos__front">
                                <img src="/img/logos/1-5.png" alt="logo">
                            </div>
                            <div class="import-logos__back">
                                <img src="/img/logos/1-5.png" alt="logo">
                            </div>
                        </div>
                    </div>
                    <div class="import-logos__item wow fadeIn" data-wow-delay=".4s">
                        <div class="import-logos__inner">
                            <div class="import-logos__front">
                                <img src="/img/logos/1-6.png" alt="logo">
                            </div>
                            <div class="import-logos__back">
                                <img src="/img/logos/1-4.png" alt="logo">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="import-logos__col">
                    <div class="import-logos__item wow fadeIn" data-wow-delay=".7s">
                        <div class="import-logos__inner">
                            <div class="import-logos__front">
                                <img src="/img/logos/1-7.png" alt="logo">
                            </div>
                            <div class="import-logos__back">
                                <img src="/img/logos/1-3.png" alt="logo">
                            </div>
                        </div>
                    </div>
                    <div class="import-logos__item wow fadeIn" data-wow-delay=".8s">
                        <div class="import-logos__inner">
                            <div class="import-logos__front">
                                <img src="/img/logos/1-8.png" alt="logo">
                            </div>
                            <div class="import-logos__back">
                                <img src="/img/logos/1-2.png" alt="logo">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="import-logos__col">
                    <div class="import-logos__item wow fadeIn" data-wow-delay=".3s">
                        <div class="import-logos__inner">
                            <div class="import-logos__front">
                                <img src="/img/logos/1-9.png" alt="logo">
                            </div>
                            <div class="import-logos__back">
                                <img src="/img/logos/1-1.png" alt="logo">
                            </div>
                        </div>
                    </div>
                </div>--}}

            </div>
            <div class="import-wrap">
                <div class="import__text import__text-abs wow fadeInUp" data-wow-delay=".4s">
                    {!! __('settings.Наша продукция производится') !!}
                </div>
            </div>
        </div>
    </section>


    <!-- PRODUCTION -->

    <section class="production">
        <div class="container">
            <h2 class="production__title">
                {{ __('settings.Производство') }}
            </h2>
        </div>
        <div class="production-carousel owl-carousel">

            @foreach($settings->galery as $val)
                <div class="production-item">
                    <img src="{{ asset('/storage/' . $val) }}" alt="production">
                </div>
            @endforeach

        </div>
        <div class="production-arrows">
			<span class="arrow-left">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M9.57 5.92969L3.5 11.9997L9.57 18.0697M20.5 11.9997H3.67" stroke="currentColor"
                          stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</span>
            <span class="arrow-right">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M14.43 5.92969L20.5 11.9997L14.43 18.0697M3.5 11.9997H20.33" stroke="currentColor"
                          stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</span>
        </div>
        <div class="production-zoom">
            <img src="/img/production/3.jpg" alt="production">
        </div>
    </section>


    <x-consult/>

    <x-footer/>

@endsection
