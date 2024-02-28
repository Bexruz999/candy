<!-- HEADER, на главной header-main -->

<header class="header header-main">
    <div class="container">
        <div class="header-content">
            <a href="{{ route('home') }}" class="header__logo">
                <svg width="29" height="25" viewBox="0 0 29 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.6995 2.95858C13.9948 3.38272 14.6101 3.38272 14.9056 2.95858C15.7353 1.76722 17.4993 0 20.659 0C25.4264 0 28.6051 4.04947 28.6051 8.09817C28.6051 17.6909 16.7279 23.8999 14.6205 24.9259C14.4181 25.0244 14.1867 25.0244 13.9846 24.9259C11.8767 23.8999 0 17.6909 0 8.09817C0 4.04921 3.17826 0 7.94615 0C11.1058 0 12.8699 1.76748 13.6997 2.95858H13.6995Z" fill="currentColor"/>
                </svg>
                <img src="{{ asset('/img/header_logo.svg') }}" alt="Candy Gold">
            </a>
            <div class="header-wrap">
                <ul class="header-menu">
                    <li>
                        <a href="{{ route('home') }}" {{ request()->is(request()->segment(1)) ? 'class=active' : '' }}>
                             {{ __('settings.Главная') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" {{ request()->is(request()->segment(1).'/about') ? 'class=active' : '' }}>
                            {{ __('settings.О компании') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('products') }}" {{ request()->is(request()->segment(1).'/products') ? 'class=active' : '' }}>
                             {{ __('settings.Продукция') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('partners') }}" {{ request()->is(request()->segment(1).'/partners') ? 'class=active' : '' }}>
                             {{ __('settings.Стать партнёром') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('vacancy') }}" {{ request()->is(request()->segment(1).'/vacancy') ? 'class=active' : '' }}>
                            {{ __('settings.Вакансии') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" {{ request()->is(request()->segment(1).'/contact') ? 'class=active' : '' }}>
                           {{ __('settings.Контакты') }}
                        </a>
                    </li>
                </ul>
                <div class="header-lang">
                    <div class="header-lang__btn">
                        <img src="/img/icons/lang.svg" alt="ico">
                        <div>
                            {{ __('settings.' . app()->getLocale()) }}
                        </div>
                        <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 8L14 1.5239L12.3528 0L7 4.95221L1.64718 0L0 1.5239L7 8Z" fill="white"/>
                        </svg>
                    </div>
                    <div class="header-lang__list">
                        <a href="{{ route('lang', 'ru') }}">Ру</a>
                        <a href="{{ route('lang', 'uz') }}">O’z</a>
                        <a href="{{ route('lang', 'en') }}">En</a>
                    </div>
                </div>
                <div class="header-mobile">
                    <img src="/img/icons/menu.svg" alt="ico">
                </div>
            </div>
        </div>
    </div>
</header>
