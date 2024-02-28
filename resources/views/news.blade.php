@extends('layouts.index')

@section('seo')
    <title>{{ $settings->title }}</title>
    <meta name="description" content="{{ $settings->description }}">
@endsection

@section('content')

    <x-header page="null"/>

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


    <section class="news">
        <div class="container">
            <ul class="news-list">

                @foreach($events as $event)
                    <li class="news-item">
                        <div class="news-item__wrap">
                            <div class="news-item__img">
                                <img src="{{ asset('/storage/' . $event->img) }}" alt="news">
                            </div>
                            <div class="news-item__arrow arrow">
                                <a href="{{ route('news-single', ['slug' => $event->slug]) }}">
                                    <img src="/img/icons/arrow-right.svg" alt="ico">
                                </a>
                            </div>
                        </div>
                        <div class="news-item__title">
                            {{ $event->title }}
                        </div>
                        <div class="news-item__text">
                            {{ $event->short_desc }}
                        </div>
                        <div class="news-item__date">
                            {{ $event->date }}
                        </div>
                    </li>
                @endforeach
                {{--<li class="news-item">
                    <div class="news-item__wrap">
                        <div class="news-item__img">
                            <img src="/img/news/1.jpg" alt="news">
                        </div>
                        <div class="news-item__arrow arrow">
                            <a href="/news-single">
                                <img src="/img/icons/arrow-right.svg" alt="ico">
                            </a>
                        </div>
                    </div>
                    <div class="news-item__title">
                        Участие в международной конференции
                    </div>
                    <div class="news-item__text">
                        Как уже неоднократно упомянуто, явные признаки победы институционализации призывают нас к новым свершениям
                    </div>
                    <div class="news-item__date">
                        10/07/2023
                    </div>
                </li>
                <li class="news-item">
                    <div class="news-item__wrap">
                        <div class="news-item__img">
                            <img src="/img/news/2.jpg" alt="news">
                        </div>
                        <div class="news-item__arrow arrow">
                            <a href="/news-single">
                                <img src="/img/icons/arrow-right.svg" alt="ico">
                            </a>
                        </div>
                    </div>
                    <div class="news-item__title">
                        Бренд года 2023
                    </div>
                    <div class="news-item__text">
                        Задача организации, в особенности же новая модель организационной деятельности играет важную роль в формировании кластеризации усилий.
                    </div>
                    <div class="news-item__date">
                        07/06/2023
                    </div>
                </li>
                <li class="news-item">
                    <div class="news-item__wrap">
                        <div class="news-item__img">
                            <img src="/img/news/3.jpg" alt="news">
                        </div>
                        <div class="news-item__arrow arrow">
                            <a href="/news-single">
                                <img src="/img/icons/arrow-right.svg" alt="ico">
                            </a>
                        </div>
                    </div>
                    <div class="news-item__title">
                        Участие в выставке WorldFood 2023
                    </div>
                    <div class="news-item__text">
                        Как уже неоднократно упомянуто, явные признаки победы институционализации призывают нас к новым свершениям
                    </div>
                    <div class="news-item__date">
                        10/07/2023
                    </div>
                </li>
                <li class="news-item">
                    <div class="news-item__wrap">
                        <div class="news-item__img">
                            <img src="/img/news/4.jpg" alt="news">
                        </div>
                        <div class="news-item__arrow arrow">
                            <a href="/news-single">
                                <img src="/img/icons/arrow-right.svg" alt="ico">
                            </a>
                        </div>
                    </div>
                    <div class="news-item__title">
                        Бренд года 2022
                    </div>
                    <div class="news-item__text">
                        Задача организации, в особенности же новая модель организационной деятельности играет важную роль в формировании кластеризации усилий.
                    </div>
                    <div class="news-item__date">
                        12/12/2022
                    </div>
                </li>
                <li class="news-item">
                    <div class="news-item__wrap">
                        <div class="news-item__img">
                            <img src="/img/news/1.jpg" alt="news">
                        </div>
                        <div class="news-item__arrow arrow">
                            <a href="/news-single">
                                <img src="/img/icons/arrow-right.svg" alt="ico">
                            </a>
                        </div>
                    </div>
                    <div class="news-item__title">
                        Участие в международной конференции
                    </div>
                    <div class="news-item__text">
                        Как уже неоднократно упомянуто, явные признаки победы институционализации призывают нас к новым свершениям
                    </div>
                    <div class="news-item__date">
                        10/07/2023
                    </div>
                </li>
                <li class="news-item">
                    <div class="news-item__wrap">
                        <div class="news-item__img">
                            <img src="/img/news/2.jpg" alt="news">
                        </div>
                        <div class="news-item__arrow arrow">
                            <a href="/news-single">
                                <img src="/img/icons/arrow-right.svg" alt="ico">
                            </a>
                        </div>
                    </div>
                    <div class="news-item__title">
                        Бренд года 2023
                    </div>
                    <div class="news-item__text">
                        Задача организации, в особенности же новая модель организационной деятельности играет важную роль в формировании кластеризации усилий.
                    </div>
                    <div class="news-item__date">
                        07/06/2023
                    </div>
                </li>
                <li class="news-item">
                    <div class="news-item__wrap">
                        <div class="news-item__img">
                            <img src="/img/news/3.jpg" alt="news">
                        </div>
                        <div class="news-item__arrow arrow">
                            <a href="/news-single">
                                <img src="/img/icons/arrow-right.svg" alt="ico">
                            </a>
                        </div>
                    </div>
                    <div class="news-item__title">
                        Участие в выставке WorldFood 2023
                    </div>
                    <div class="news-item__text">
                        Как уже неоднократно упомянуто, явные признаки победы институционализации призывают нас к новым свершениям
                    </div>
                    <div class="news-item__date">
                        10/07/2023
                    </div>
                </li>
                <li class="news-item">
                    <div class="news-item__wrap">
                        <div class="news-item__img">
                            <img src="/img/news/4.jpg" alt="news">
                        </div>
                        <div class="news-item__arrow arrow">
                            <a href="/news-single">
                                <img src="/img/icons/arrow-right.svg" alt="ico">
                            </a>
                        </div>
                    </div>
                    <div class="news-item__title">
                        Бренд года 2022
                    </div>
                    <div class="news-item__text">
                        Задача организации, в особенности же новая модель организационной деятельности играет важную роль в формировании кластеризации усилий.
                    </div>
                    <div class="news-item__date">
                        12/12/2022
                    </div>
                </li>
                <li class="news-item">
                    <div class="news-item__wrap">
                        <div class="news-item__img">
                            <img src="/img/news/1.jpg" alt="news">
                        </div>
                        <div class="news-item__arrow arrow">
                            <a href="/news-single">
                                <img src="/img/icons/arrow-right.svg" alt="ico">
                            </a>
                        </div>
                    </div>
                    <div class="news-item__title">
                        Участие в международной конференции
                    </div>
                    <div class="news-item__text">
                        Как уже неоднократно упомянуто, явные признаки победы институционализации призывают нас к новым свершениям
                    </div>
                    <div class="news-item__date">
                        10/07/2023
                    </div>
                </li>
                <li class="news-item">
                    <div class="news-item__wrap">
                        <div class="news-item__img">
                            <img src="/img/news/2.jpg" alt="news">
                        </div>
                        <div class="news-item__arrow arrow">
                            <a href="/news-single">
                                <img src="/img/icons/arrow-right.svg" alt="ico">
                            </a>
                        </div>
                    </div>
                    <div class="news-item__title">
                        Бренд года 2023
                    </div>
                    <div class="news-item__text">
                        Задача организации, в особенности же новая модель организационной деятельности играет важную роль в формировании кластеризации усилий.
                    </div>
                    <div class="news-item__date">
                        07/06/2023
                    </div>
                </li>
                <li class="news-item">
                    <div class="news-item__wrap">
                        <div class="news-item__img">
                            <img src="/img/news/3.jpg" alt="news">
                        </div>
                        <div class="news-item__arrow arrow">
                            <a href="/news-single">
                                <img src="/img/icons/arrow-right.svg" alt="ico">
                            </a>
                        </div>
                    </div>
                    <div class="news-item__title">
                        Участие в выставке WorldFood 2023
                    </div>
                    <div class="news-item__text">
                        Как уже неоднократно упомянуто, явные признаки победы институционализации призывают нас к новым свершениям
                    </div>
                    <div class="news-item__date">
                        10/07/2023
                    </div>
                </li>
                <li class="news-item">
                    <div class="news-item__wrap">
                        <div class="news-item__img">
                            <img src="/img/news/4.jpg" alt="news">
                        </div>
                        <div class="news-item__arrow arrow">
                            <a href="/news-single">
                                <img src="/img/icons/arrow-right.svg" alt="ico">
                            </a>
                        </div>
                    </div>
                    <div class="news-item__title">
                        Бренд года 2022
                    </div>
                    <div class="news-item__text">
                        Задача организации, в особенности же новая модель организационной деятельности играет важную роль в формировании кластеризации усилий.
                    </div>
                    <div class="news-item__date">
                        12/12/2022
                    </div>
                </li>--}}
            </ul>
        </div>
    </section>

    <x-consult/>

    <x-footer/>

@endsection
