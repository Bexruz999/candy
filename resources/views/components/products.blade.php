<!-- PRODUCTS -->

<section class="products products-main">
    <div class="container">
        <div class="products-pattern">
            <img src="/img/products/pattern1.png" alt="img">
            <img src="/img/products/pattern2.png" alt="img">
        </div>
        <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">
           {{ __('settings.Наша продукция') }}
        </h2>
        <ul class="products-page__head">

            @foreach($category as $cat)
                <li>
                    <a href="#category{{ $cat->id }}">
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
                    <span>{{ __('settings.Шоколадные конфеты') }}</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="/img/catalog/2.svg" alt="ico">
                    <img src="/img/catalog/2-hover.svg" alt="ico">
                    <span>{{ __('settings.Вафельная продукция') }}</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="/img/catalog/3.svg" alt="ico">
                    <img src="/img/catalog/3-hover.svg" alt="ico">
                    <span>{{ __('settings.Печенье') }}</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="/img/catalog/4.svg" alt="ico">
                    <img src="/img/catalog/4-hover.svg" alt="ico">
                    <span>{{ __('settings.Хрустящая продукция') }}</span>
                </a>
            </li>--}}
        </ul>

        @foreach($category as $cat)
            <div id="#category{{ $cat->id }}" class="products-item">
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
                            {{ __('settings.Шоколадные конфеты "Зима"') }}
                        </li>
                        <li>
                           {{ __('settings.Шоколадные конфеты "Весна"') }}
                        </li>
                        <li>
                            {{ __('settingsШоколадные конфеты "Ягода".') }}
                        </li>
                        <li>
                            {{ __('settings.Шоколадные конфеты "Тропик"') }}
                        </li>
                        <li>
                            {{ __('settings.Шоколадные конфеты "Арбуз"') }}
                        </li>
                    </ul>
                    <a href="products.html" class="products-item__more btn">
                        {{ __('settings.Подробнее ') }}

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
                <video src="video/product.mp4" pip="false" autoplay="autoplay" loop="loop" muted="muted" playsinline="" webkit-playsinline=""></video>
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
                            {{ __('settings.Mis Nat Max Жаренный арахис') }}
                        </li>
                    </ul>
                    <a href="products.html" class="products-item__more btn">
                        {{ __('settings.Подробнее') }}
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
                <video src="video/product.mp4" pip="false" autoplay="autoplay" loop="loop" muted="muted" playsinline="" webkit-playsinline=""></video>
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
                            {{ __('settings.Сахарное печенье JONDI') }}
                        </li>
                        <li>
                            {{ __('settings.Сахарное печенье JOHORI') }}
                        </li>
                        <li>
                            {{ __('settings.Сахарное печенье CHESS') }}
                        </li>
                        <li>
                            {{ __('settings.Сахарное печенье BANAN') }}
                        </li>
                    </ul>
                    <a href="products.html" class="products-item__more btn">
                        {{ __('settings.Подробнее') }}
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
                <video src="video/product.mp4" pip="false" autoplay="autoplay" loop="loop" muted="muted" playsinline="" webkit-playsinline=""></video>
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
                    <a href="products.html" class="products-item__more btn">
                        {{ __('settings.Подробнее') }}
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
                <video src="video/product.mp4" pip="false" autoplay="autoplay" loop="loop" muted="muted" playsinline="" webkit-playsinline=""></video>
            </div>
        </div>--}}

    </div>
</section>
