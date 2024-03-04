@extends('layouts.index')

@section('content')

    <x-header page="null"/>

    <!-- PRODUCT -->

    <section class="product">
        <div class="product-main">

            <!-- color для цвета фигуры -->

            <div class="product-main__pattern" style="color: #95549B">
                <svg preserveAspectRatio="xMaxYMid slice" width="1042" height="829" viewBox="0 0 1042 829" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1042 829L1021.26 794.458C1000.52 759.917 959.037 690.833 934.148 621.75C909.259 552.667 900.963 483.583 925.852 414.5C950.741 345.417 1008.81 276.333 1021.26 207.25C1033.7 138.167 1000.52 69.0834 983.926 34.5417L967.333 3.26378e-06L-56 -1.30401e-05L-56 34.5417C-56 69.0834 -56 138.167 -56 207.25C-56 276.333 -56 345.417 -56 414.5C-56 483.583 -56 552.667 -56 621.75C-56 690.833 -56 759.917 -56 794.458L-56 829L1042 829Z" fill="currentColor"/>
                </svg>
            </div>

            <div class="product-main__info">

                <div class="container">
                    <h1 class="product__title">
                        {{ $product->title }}
                    </h1>
                    <div class="product__text">
                        {{ $product->description }}
                    </div>
                    <div class="product-main__certs">

                        @foreach($category as $cat)
                            @if($product->category_id === $cat->id)

                                @foreach($cat->certificates as $sertificate)
                                    <img src="{{ asset('/storage/' . $sertificate->icon) }}" alt="cert">
                                @endforeach
                            @endif
                        @endforeach

                        {{--<img src="/img/certs/product1.png" alt="cert">
                        <img src="/img/certs/product2.png" alt="cert">
                        <img src="/img/certs/product3.png" alt="cert">
                        <img src="/img/certs/product4.png" alt="cert">--}}
                    </div>
                    <a href="/storage/{{ $product->file }}" class="product-main__btn btn btn-trans" download="/storage/{{ $product->file }}">
                        Скачать каталог
                    </a>
                </div>
            </div>

            <!-- разные картинки, смена при ховере -->

            <div class="product-main__img">
                <div
                    class="cloudimage-360"
                    data-folder="{{ "/storage/img360/$product->slug/" }}"
                    data-filename-x="{index}.png"
                    data-amount-x="20"
                ></div>
                <!-- ЕСЛИ 1 КАРТИНКА ТО ПРОСТО img тег-->
            </div>
        </div>
        <div class="container">
            <div class="product-info">
                <div class="product-info__left">
                    <div class="product-info__title">
                        Внешний вид упаковки
                    </div>
                    <div class="product-info__img">
                        <div
                            class="cloudimage-360"
                            data-folder="{{ "/storage/outer_img360/$product->slug/" }}"
                            data-filename-x="{index}.png"
                            data-amount-x="{{ is_array($product->img360) ? count($product->img360) : '20' }}"
                        ></div>
                        <!-- ЕСЛИ 1 КАРТИНКА ТО ПРОСТО img тег-->
                    </div>
                </div>
                <div class="product-info__right">
                    <div class="product-info__title">
                        Подробности поставки:
                    </div>
                    <ul class="product-info__package">

                        @if(is_array($customAttr))
                            @foreach($customAttr as $attr)
                                <li class="wow fadeInUp" data-wow-delay=".3s">
                                    <img src="/storage/{{ Arr::get($attr, 'icon') }}" alt="package">
                                    <span>{{ Arr::get($attr, 'text') }}</span>
                                </li>
                            @endforeach
                        @endif

                        {{--<li class="wow fadeInUp" data-wow-delay=".3s">
                            <img src="/img/package/1.svg" alt="package">
                            <span>Package pad</span>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay=".4s">
                            <img src="/img/package/2.svg" alt="package">
                            <span>8 pcs by 0,5 кг</span>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay=".5s">
                            <img src="/img/package/3.svg" alt="package">
                            <span>4 кг</span>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay=".6s">
                            <img src="/img/package/4.svg" alt="package">
                            <span>0,5 kg ≈ 50 ± 2 pcs, 1 pcs ≈ 9,8 ± 0,3g </span>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay=".7s">
                            <img src="/img/package/5.svg" alt="package">
                            <span>Артикул: 105 </span>
                        </li>--}}
                    </ul>


                    @if(is_array($product->options))
                        <ul class="product-info__list">

                            @foreach($product->options as $key => $value)
                                <li class="wow fadeInLeft" data-wow-delay=".3s">
                                    <div>{{ $key }}</div>
                                    <p>{{ $value }}</p>
                                </li>
                            @endforeach
                            {{--<li class="wow fadeInLeft" data-wow-delay=".3s">
                                <div>Белки:</div>
                                <p>5 г</p>
                            </li>
                            <li class="wow fadeInLeft" data-wow-delay=".4s">
                                <div>Жиры:</div>
                                <p>6,5 г</p>
                            </li>
                            <li class="wow fadeInLeft" data-wow-delay=".5s">
                                <div>Углеводы:</div>
                                <p>74 г</p>
                            </li>
                            <li class="wow fadeInLeft" data-wow-delay=".6s">
                                <div>Калорий на 100г:</div>
                                <p>370 ккал</p>
                            </li>
                            <li class="wow fadeInLeft" data-wow-delay=".7s">
                                <div>Срок годности:</div>
                                <p>9 месяцев</p>
                            </li>--}}


                        </ul>
                    @endif

                    <a href="/partners" class="product-info__btn btn">
                        Стать партнёром
                    </a>
                </div>
            </div>
        </div>
        <div class="product-pattern">
            <img src="/img/products/pattern3.png" alt="product">
        </div>
    </section>

    <div class="product-certs">
        <div class="product-certs__wrap">
            <div class="product-certs__carousel owl-carousel">

                @foreach($category as $cat)
                    @if($product->category_id === $cat->id)

                        @foreach($cat->certificates as $sertificate)
                            <div class="product-certs__item">
                                <div class="product-certs__img">
                                    <img src="{{ asset('/storage/' . $sertificate->img) }}" alt="certs">
                                </div>
                                <div class="product-certs__text">
                                    {{ $sertificate->description }}
                                </div>
                            </div>
                        @endforeach
                    @endif
                @endforeach

                {{--<div class="product-certs__item">
                    <div class="product-certs__img">
                        <img src="/img/certs/slider1.png" alt="certs">
                    </div>
                    <div class="product-certs__text">
                        1 Компания использует качественные ингредиенты и первоклассное какао от мировых поставщиков, чтобы каждый кусочек Candy Gold привносил незабываемое наслаждение нашим потребителям.
                    </div>
                </div>
                <div class="product-certs__item">
                    <div class="product-certs__img">
                        <img src="/img/certs/slider2.png" alt="certs">
                    </div>
                    <div class="product-certs__text">
                        2 Компания использует качественные ингредиенты и первоклассное какао от мировых поставщиков, чтобы каждый кусочек Candy Gold привносил незабываемое наслаждение нашим потребителям.
                    </div>
                </div>
                <div class="product-certs__item">
                    <div class="product-certs__img">
                        <img src="/img/certs/slider3.png" alt="certs">
                    </div>
                    <div class="product-certs__text">
                        3 Компания использует качественные ингредиенты и первоклассное какао от мировых поставщиков, чтобы каждый кусочек Candy Gold привносил незабываемое наслаждение нашим потребителям.
                    </div>
                </div>
                <div class="product-certs__item">
                    <div class="product-certs__img">
                        <img src="/img/certs/slider1.png" alt="certs">
                    </div>
                    <div class="product-certs__text">
                        4 Компания использует качественные ингредиенты и первоклассное какао от мировых поставщиков, чтобы каждый кусочек Candy Gold привносил незабываемое наслаждение нашим потребителям.
                    </div>
                </div>--}}
            </div>
            <div class="product-certs__arrows">
				<span class="arrow-left">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M9.57 5.92969L3.5 11.9997L9.57 18.0697M20.5 11.9997H3.67" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</span>
                <span class="arrow-right">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M14.43 5.92969L20.5 11.9997L14.43 18.0697M3.5 11.9997H20.33" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</span>
            </div>
        </div>
    </div>


    <!-- PRODUCTS -->

    <section class="products products-single">
        <div class="container">
            <div class="products-pattern">
                <img src="/img/products/pattern1.png" alt="img">
                <img src="/img/products/pattern2.png" alt="img">
            </div>
            <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">
                Наша продукция
            </h2>
            <ul class="products-page__head">

                <!-- 2 ИКОНКИ, 1 ДЛЯ hover -->

                @foreach($category as $cat)
                    <li>
                        <a href="#" class="{{ $product->category_id === $cat->id ? 'current' : ''  }}">
                            <img src=" {{asset("/storage/$cat->icon")}}" alt="ico">
                            <img src="/storage/{{ $cat->icon_white }}" alt="ico">
                            <span>{{ $cat->name }}</span>
                        </a>
                    </li>
                @endforeach
                {{--<li>
                    <a href="#" class="current">
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

            {{--<div class="products-item current">
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
                        <a href="/products" class="products-item__more btn">
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
                        <a href="/products" class="products-item__more btn">
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
                        <a href="/products" class="products-item__more btn">
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
                        <a href="/products" class="products-item__more btn">
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

            @foreach($category as $cat)
                <div class="products-item {{ $product->category_id === $cat->id ? 'current' : ''  }}">
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

        </div>
    </section>

    <x-consult/>

    <x-footer/>
@endsection
