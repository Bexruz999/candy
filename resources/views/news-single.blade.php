@extends('layouts.index')

@section('content')

    <x-header page="null"/>

    <!-- NEWS-SINGLE -->

    <section class="news-single">
        <div class="container">


            <div class="news-single__head">
                <img src="{{ asset('/storage/' . $event->img) }}" alt="news">
                <h1>{{ $event->title }}</h1>
            </div>


            <div class="news-single__wrap">
                <div class="news-single__main">
                    <div class="news-single__date">
                        {{ $event->date }}
                    </div>
                    <div class="news-single__content">
                        {!! $event->description !!}
                    </div>
                    <div class="news-single__img">
                        <img src="{{ asset('/storage/' . $event->foto) }}" alt="news">
                    </div>
                </div>
                <div class="news-single__side">
                    <div class="news-single__subtitle">
                        {{ __('settings.Другие мероприятия') }}
                    </div>
                    <ul class="news-single__list">

                        <!-- ДВЕ НОВОСТИ ТОЛЬКО, НЕ НАДО ВСЕ-->

                        @foreach($events as $ev)
                            <li class="news-item">
                                <div class="news-item__wrap">
                                    <div class="news-item__img">
                                        <img src="{{ asset('/storage/' . $ev->img) }}" alt="news">
                                    </div>
                                    <a class="news-item__arrow" href="{{ route('news-single', ['slug' => $ev->slug]) }}">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.43 5.93018L20.5 12.0002L14.43 18.0702M3.5 12.0002H20.33" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                                <div class="news-item__title">
                                    {{ $ev->title }}
                                </div>
                                <div class="news-item__text">
                                    {{ $ev->short_desc }}
                                </div>
                                <div class="news-item__date">
                                    {{ $ev->date }}
                                </div>
                            </li>
                        @endforeach

                        {{--<li class="news-item">
                            <div class="news-item__wrap">
                                <div class="news-item__img">
                                    <img src="/img/news/2.jpg" alt="news">
                                </div>
                                <a class="news-item__arrow" href="news-single.html">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.43 5.93018L20.5 12.0002L14.43 18.0702M3.5 12.0002H20.33" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
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
                                <a class="news-item__arrow" href="news-single.html">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.43 5.93018L20.5 12.0002L14.43 18.0702M3.5 12.0002H20.33" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
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
                        </li>--}}
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <x-consult/>

    <x-footer/>

@endsection
