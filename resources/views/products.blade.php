@extends('layouts.index')

@section('seo')
    <title>{{ $settings->title }}</title>
    <meta name="description" content="{{ $settings->description }}">
@endsection

@section('content')

    <x-header page="products"/>

    <!-- PAGE-HEAD -->

    <section class="page-head">
        <div class="container">
            @if($img)
                <div class="news-single__head">
                    <img src="{{ asset('/storage/' . $settings->file) }}" alt="news">
                </div>

                <a href="#" class="page-head__down" download="">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.90454 9.94022C6.8407 9.87639 6.79005 9.8006 6.75549 9.7172C6.72094 9.63379 6.70315 9.54439 6.70314 9.45411C6.70313 9.36383 6.72091 9.27443 6.75545 9.19102C6.78999 9.1076 6.84062 9.03181 6.90446 8.96797C7.03337 8.83903 7.20823 8.76658 7.39057 8.76657C7.48085 8.76656 7.57025 8.78433 7.65366 8.81887C7.73707 8.85342 7.81286 8.90405 7.87671 8.96788L10.3125 11.403V3.4375C10.3125 3.25516 10.3849 3.0803 10.5139 2.95136C10.6428 2.82243 10.8177 2.75 11 2.75C11.1823 2.75 11.3572 2.82243 11.4861 2.95136C11.6151 3.0803 11.6875 3.25516 11.6875 3.4375V11.403L14.1233 8.96788C14.1871 8.90405 14.2629 8.85341 14.3463 8.81887C14.4298 8.78433 14.5192 8.76655 14.6094 8.76656C14.6997 8.76657 14.7891 8.78436 14.8725 8.81892C14.9559 8.85347 15.0317 8.90412 15.0955 8.96796C15.1594 9.03181 15.21 9.1076 15.2446 9.19101C15.2791 9.27443 15.2969 9.36383 15.2969 9.45411C15.2969 9.54439 15.2791 9.63379 15.2445 9.71719C15.21 9.8006 15.1593 9.87638 15.0955 9.94022L11.4861 13.5487C11.3572 13.6776 11.1823 13.75 11 13.75C10.8177 13.75 10.6428 13.6776 10.5139 13.5487L6.90454 9.94022ZM18.5625 12.375C18.3802 12.375 18.2053 12.4474 18.0764 12.5764C17.9474 12.7053 17.875 12.8802 17.875 13.0625V17.875H4.125V13.0625C4.125 12.8802 4.05257 12.7053 3.92364 12.5764C3.7947 12.4474 3.61984 12.375 3.4375 12.375C3.25516 12.375 3.0803 12.4474 2.95136 12.5764C2.82243 12.7053 2.75 12.8802 2.75 13.0625V17.875C2.75042 18.2395 2.89542 18.589 3.15319 18.8468C3.41096 19.1046 3.76046 19.2496 4.125 19.25H17.875C18.2395 19.2496 18.589 19.1046 18.8468 18.8468C19.1046 18.589 19.2496 18.2395 19.25 17.875V13.0625C19.25 12.8802 19.1776 12.7053 19.0486 12.5764C18.9197 12.4474 18.7448 12.375 18.5625 12.375Z" fill="currentColor"/>
                    </svg>
                    <div>
                        <p>Каталог</p>
                        <span>Скачать 8.2мб</span>
                    </div>
                </a>
            @endif

            @if(!$img)
                <div class="page-head__video">
                    <video src="{{ asset('/storage/' . $settings->file) }}" pip="false" autoplay="autoplay" loop="loop" muted="muted" playsinline="" webkit-playsinline=""></video>

                    <a href="{{ asset('/storage/'. $file) }}" class="page-head__down" download="">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.90454 9.94022C6.8407 9.87639 6.79005 9.8006 6.75549 9.7172C6.72094 9.63379 6.70315 9.54439 6.70314 9.45411C6.70313 9.36383 6.72091 9.27443 6.75545 9.19102C6.78999 9.1076 6.84062 9.03181 6.90446 8.96797C7.03337 8.83903 7.20823 8.76658 7.39057 8.76657C7.48085 8.76656 7.57025 8.78433 7.65366 8.81887C7.73707 8.85342 7.81286 8.90405 7.87671 8.96788L10.3125 11.403V3.4375C10.3125 3.25516 10.3849 3.0803 10.5139 2.95136C10.6428 2.82243 10.8177 2.75 11 2.75C11.1823 2.75 11.3572 2.82243 11.4861 2.95136C11.6151 3.0803 11.6875 3.25516 11.6875 3.4375V11.403L14.1233 8.96788C14.1871 8.90405 14.2629 8.85341 14.3463 8.81887C14.4298 8.78433 14.5192 8.76655 14.6094 8.76656C14.6997 8.76657 14.7891 8.78436 14.8725 8.81892C14.9559 8.85347 15.0317 8.90412 15.0955 8.96796C15.1594 9.03181 15.21 9.1076 15.2446 9.19101C15.2791 9.27443 15.2969 9.36383 15.2969 9.45411C15.2969 9.54439 15.2791 9.63379 15.2445 9.71719C15.21 9.8006 15.1593 9.87638 15.0955 9.94022L11.4861 13.5487C11.3572 13.6776 11.1823 13.75 11 13.75C10.8177 13.75 10.6428 13.6776 10.5139 13.5487L6.90454 9.94022ZM18.5625 12.375C18.3802 12.375 18.2053 12.4474 18.0764 12.5764C17.9474 12.7053 17.875 12.8802 17.875 13.0625V17.875H4.125V13.0625C4.125 12.8802 4.05257 12.7053 3.92364 12.5764C3.7947 12.4474 3.61984 12.375 3.4375 12.375C3.25516 12.375 3.0803 12.4474 2.95136 12.5764C2.82243 12.7053 2.75 12.8802 2.75 13.0625V17.875C2.75042 18.2395 2.89542 18.589 3.15319 18.8468C3.41096 19.1046 3.76046 19.2496 4.125 19.25H17.875C18.2395 19.2496 18.589 19.1046 18.8468 18.8468C19.1046 18.589 19.2496 18.2395 19.25 17.875V13.0625C19.25 12.8802 19.1776 12.7053 19.0486 12.5764C18.9197 12.4474 18.7448 12.375 18.5625 12.375Z" fill="currentColor"/>
                        </svg>
                        <div>
                            <p>Каталог</p>
                            <span>Скачать {{ $settings->text }}</span>
                        </div>
                    </a>
                </div>
            @endif

            <div class="page-head__content">
                <h1 class="page-head__title">
                    ПРОДУКЦИЯ
                </h1>
                <div class="page-head__logo">
                    <img src="/img/logo.svg" alt="Candy Land">
                </div>
            </div>
        </div>
    </section>

    <!-- PRODUCTS -->

    <section class="products products-main products-page">
        <div class="container">
            <div class="products-pattern">
                <img src="/img/products/pattern1.png" alt="img">
                <img src="/img/products/pattern2.png" alt="img">
            </div>
            <ul class="products-page__head">

                @foreach($category as $cat)
                    <li>
                        <a href="#">
                            <img src=" {{asset("/storage/$cat->icon")}}" alt="ico">
                            <img src="/storage/{{ $cat->icon_white }}" alt="ico">
                            <span>{{ $cat->name }}</span>
                        </a>
                    </li>
                @endforeach
                <!-- 2 ИКОНКИ, 1 ДЛЯ hover -->
                {{--<li>
                    <a href="#">
                        <img src="/img/catalog/1.svg" alt="ico">
                        <img src="/img/catalog/1-hover.svg" alt="ico">
                        <span>Шоколадные конфеты</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="/img/catalog/2.svg" alt="ico">
                        <img src="/img/catalog/2-hover.svg" alt="ico">
                        <span>Вафельная продукция</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="/img/catalog/3.svg" alt="ico">
                        <img src="/img/catalog/3-hover.svg" alt="ico">
                        <span>Печенье</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="/img/catalog/4.svg" alt="ico">
                        <img src="/img/catalog/4-hover.svg" alt="ico">
                        <span>Хрустящая продукция</span>
                    </a>
                </li>--}}
            </ul>

            @foreach($category as $cat)
                <div class="products-item">
                    <!-- фоновый рисунок-->

                    <div class="products-item__bg">
                        <img src="{{ asset('/storage/' . $cat->fon) }}" alt="bg">
                    </div>

                    <div class="products-item__main">
                        <div class="products-item__info">
                            <ul class="products-item__list">
                                @foreach($cat->products as $prod)
                                    <li class="current" data-href="/product/{{ $prod->slug }}">
                                        {{ $prod->title }}
                                    </li>
                                @endforeach
                                {{--<li class="current" data-href="/product-single1">
                                    Шоколадные конфеты "Зима"
                                </li>
                                <li data-href="/product-single2">
                                    Шоколадные конфеты "Весна"
                                </li>
                                <li data-href="/product-single3">
                                    Шоколадные конфеты "Ягода"
                                </li>
                                <li data-href="product-single.html">
                                    Шоколадные конфеты "Тропик"
                                </li>
                                <li data-href="product-single.html">
                                    Шоколадные конфеты "Арбуз"
                                </li>--}}
                            </ul>
                            <a href="/products" class="products-item__more btn">
                                {{ __('settings.Подробнее') }}
                            </a>
                        </div>

                        <div class="products-item__slider">
                            <div class="products-item__slider-wrap owl-carousel">
                                <!-- data-count обязательно -->

                                @foreach($cat->products as $prod)
                                    <div class="products-item__img" data-count="{{ $loop->index }}">
                                        <img src="/storage/{{ $prod->img }}" alt="product">
                                    </div>
                                @endforeach

                                {{--<div class="products-item__img" data-count="1">
                                    <img src="/img/products/2.png" alt="product">
                                </div>
                                <div class="products-item__img" data-count="2">
                                    <img src="/img/products/3.png" alt="product">
                                </div>
                                <div class="products-item__img" data-count="3">
                                    <img src="/img/products/4.png" alt="product">
                                </div>
                                <div class="products-item__img" data-count="4">
                                    <img src="/img/products/1.png" alt="product">
                                </div>--}}
                            </div>
                        </div>
                    </div>

                    <div class="products-item__video">
                        <video src="/storage/{{ $cat->video }}" pip="false" autoplay="autoplay" loop="loop" muted="muted" playsinline="" webkit-playsinline=""></video>
                    </div>
                </div>
            @endforeach
            {{--<div class="products-item">
                <!-- фоновый рисунок-->
                <div class="products-item__bg">
                    <img src="/img/products/bg1.png" alt="bg">
                </div>
                <div class="products-item__main">
                    <div class="products-item__info">
                        <ul class="products-item__list">
                            <li class="current">
                                Шоколадные конфеты "Зима"
                            </li>
                            <li>
                                Шоколадные конфеты "Весна"
                            </li>
                            <li>
                                Шоколадные конфеты "Ягода"
                            </li>
                            <li>
                                Шоколадные конфеты "Тропик"
                            </li>
                            <li>
                                Шоколадные конфеты "Арбуз"
                            </li>
                        </ul>
                        <a href="/products-single" class="products-item__more btn">
                            Подробнее
                        </a>
                    </div>
                    <div class="products-item__slider">
                        <div class="products-item__slider-wrap owl-carousel">
                            <!-- data-count обязательно -->
                            <div class="products-item__img" data-count="0">
                                <img src="/img/products/1.png" alt="product">
                            </div>
                            <div class="products-item__img" data-count="1">
                                <img src="/img/products/2.png" alt="product">
                            </div>
                            <div class="products-item__img" data-count="2">
                                <img src="/img/products/3.png" alt="product">
                            </div>
                            <div class="products-item__img" data-count="3">
                                <img src="/img/products/4.png" alt="product">
                            </div>
                            <div class="products-item__img" data-count="4">
                                <img src="/img/products/1.png" alt="product">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products-item__video">
                    <video src="/video/product.mp4" pip="false" autoplay="autoplay" loop="loop" muted="muted" playsinline="" webkit-playsinline=""></video>
                </div>
            </div>
            <div class="products-item">
                <!-- фоновый рисунок-->
                <div class="products-item__bg">
                    <img src="/img/products/bg2.png" alt="bg">
                </div>
                <div class="products-item__main">
                    <div class="products-item__info">
                        <ul class="products-item__list">
                            <li class="current">
                                Mis Nat Max
                            </li>
                            <li>
                                Mis Nat Max Жаренный арахис
                            </li>
                        </ul>
                        <a href="/products-single" class="products-item__more btn">
                            Подробнее
                        </a>
                    </div>
                    <div class="products-item__slider">
                        <div class="products-item__slider-wrap owl-carousel">
                            <!-- data-count обязательно -->
                            <div class="products-item__img" data-count="0">
                                <img src="/img/products/2.png" alt="product">
                            </div>
                            <div class="products-item__img" data-count="1">
                                <img src="/img/products/3.png" alt="product">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products-item__video">
                    <video src="/video/product.mp4" pip="false" autoplay="autoplay" loop="loop" muted="muted" playsinline="" webkit-playsinline=""></video>
                </div>
            </div>
            <div class="products-item">
                <!-- фоновый рисунок-->
                <div class="products-item__bg">
                    <img src="/img/products/bg3.png" alt="bg">
                </div>
                <div class="products-item__main">
                    <div class="products-item__info">
                        <ul class="products-item__list">
                            <li class="current">
                                Сахарное печенье JONDI
                            </li>
                            <li>
                                Сахарное печенье JOHORI
                            </li>
                            <li>
                                Сахарное печенье CHESS
                            </li>
                            <li>
                                Сахарное печенье BANAN
                            </li>
                        </ul>
                        <a href="/products-single" class="products-item__more btn">
                            Подробнее
                        </a>
                    </div>
                    <div class="products-item__slider">
                        <div class="products-item__slider-wrap owl-carousel">
                            <!-- data-count обязательно -->
                            <div class="products-item__img" data-count="0">
                                <img src="/img/products/3.png" alt="product">
                            </div>
                            <div class="products-item__img" data-count="1">
                                <img src="/img/products/1.png" alt="product">
                            </div>
                            <div class="products-item__img" data-count="2">
                                <img src="/img/products/2.png" alt="product">
                            </div>
                            <div class="products-item__img" data-count="3">
                                <img src="/img/products/4.png" alt="product">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products-item__video">
                    <video src="/video/product.mp4" pip="false" autoplay="autoplay" loop="loop" muted="muted" playsinline="" webkit-playsinline=""></video>
                </div>
            </div>
            <div class="products-item">
                <!-- фоновый рисунок-->
                <div class="products-item__bg">
                    <img src="/img/products/bg4.png" alt="bg">
                </div>
                <div class="products-item__main">
                    <div class="products-item__info">
                        <ul class="products-item__list">
                            <li class="current">
                                Manzur Waffle Sticks
                            </li>
                        </ul>
                        <a href="/products-single" class="products-item__more btn">
                            Подробнее
                        </a>
                    </div>
                    <div class="products-item__slider">
                        <div class="products-item__slider-wrap owl-carousel">
                            <!-- data-count обязательно -->
                            <div class="products-item__img" data-count="0">
                                <img src="/img/products/4.png" alt="product">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products-item__video">
                    <video src="/video/product.mp4" pip="false" autoplay="autoplay" loop="loop" muted="muted" playsinline="" webkit-playsinline=""></video>
                </div>
            </div>--}}

        </div>
    </section>

    <x-consult/>

    <x-footer/>
@endsection
