<!-- ADVANTAGES -->

<section class="advantages">
    <div class="advantages__bg">
        <img src="/img/advantages/bg.png" alt="product">
    </div>
    <div class="container">
        <div class="advantages-wrap">
            <div class="advantages-info">
                <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">
                     {{ __('settings.Преимущества компании') }}
                </h2>
                <div class="advantages-list">

                    @foreach($advantages as $advantage)
                        <div class="advantages-list__item">
                            <div class="advantages-list__title">
                                {{ $advantage->title }}
                            </div>
                            <div class="advantages-list__subtitle">
                                {{ $advantage->subtitle }}
                            </div>
                            <div class="advantages-list__text">
                                {{ $advantage->description }}
                            </div>
                            <div class="advantages-list__close">
                                <img src="/img/icons/arrow-down.svg" alt="ico">
                            </div>
                        </div>
                    @endforeach
                    {{--<div class="advantages-list__item">
                        <div class="advantages-list__title">
                             {{ __('settings.Халяль') }}
                        </div>
                        <div class="advantages-list__subtitle">
                            {{ __('settings.Качественные ингредиенты') }}
                        </div>
                        <div class="advantages-list__text">
                            Компания использует качественные ингредиенты и первоклассное какао от мировых поставщиков, чтобы каждый кусочек Candy Gold привносил незабываемое наслаждение нашим потребителям. На фабрике действует лаборатория оснащённым с современной аппаратурой и вся продукция производится на европейских автоматизированных оборудованиях при соблюдении всех норм гигиены и производства.
                        </div>
                        <div class="advantages-list__close">
                            <img src="img/icons/arrow-down.svg" alt="ico">
                        </div>
                    </div>
                    <div class="advantages-list__item">
                        <div class="advantages-list__title">
                            {{ __('settings.Автоматизация') }}
                        </div>
                        <div class="advantages-list__subtitle">
                          {{ __('settings. Европейское оборудование') }}
                        </div>
                        <div class="advantages-list__text">
                            Компания использует качественные ингредиенты и первоклассное какао от мировых поставщиков, чтобы каждый кусочек Candy Gold привносил незабываемое наслаждение нашим потребителям. На фабрике действует лаборатория оснащённым с современной аппаратурой и вся продукция производится на европейских автоматизированных оборудованиях при соблюдении всех норм гигиены и производства.
                        </div>
                        <div class="advantages-list__close">
                            <img src="img/icons/arrow-down.svg" alt="ico">
                        </div>
                    </div>
                    <div class="advantages-list__item">
                        <div class="advantages-list__title">
                            {{ __('settings.Халяль') }}
                        </div>
                        <div class="advantages-list__subtitle">
                            {{ __('settings.Качественные ингредиенты') }}
                        </div>
                        <div class="advantages-list__text">
                            Компания использует качественные ингредиенты и первоклассное какао от мировых поставщиков, чтобы каждый кусочек Candy Gold привносил незабываемое наслаждение нашим потребителям. На фабрике действует лаборатория оснащённым с современной аппаратурой и вся продукция производится на европейских автоматизированных оборудованиях при соблюдении всех норм гигиены и производства.
                        </div>
                        <div class="advantages-list__close">
                            <img src="img/icons/arrow-down.svg" alt="ico">
                        </div>
                    </div>
                    <div class="advantages-list__item">
                        <div class="advantages-list__title">
                           {{ __('settings.Автоматизация') }}
                        </div>
                        <div class="advantages-list__subtitle">
                        {{ __('settings.Европейское оборудование') }}
                        </div>
                        <div class="advantages-list__text">
                            Компания использует качественные ингредиенты и первоклассное какао от мировых поставщиков, чтобы каждый кусочек Candy Gold привносил незабываемое наслаждение нашим потребителям. На фабрике действует лаборатория оснащённым с современной аппаратурой и вся продукция производится на европейских автоматизированных оборудованиях при соблюдении всех норм гигиены и производства.
                        </div>
                        <div class="advantages-list__close">
                            <img src="img/icons/arrow-down.svg" alt="ico">
                        </div>
                    </div>
                    <div class="advantages-list__item">
                        <div class="advantages-list__title">
                            {{ __('settings.Халяль ') }}
                        </div>
                        <div class="advantages-list__subtitle">
                           {{ __('settings.Качественные ингредиенты') }}
                        </div>
                        <div class="advantages-list__text">
                            Компания использует качественные ингредиенты и первоклассное какао от мировых поставщиков, чтобы каждый кусочек Candy Gold привносил незабываемое наслаждение нашим потребителям. На фабрике действует лаборатория оснащённым с современной аппаратурой и вся продукция производится на европейских автоматизированных оборудованиях при соблюдении всех норм гигиены и производства.
                        </div>
                        <div class="advantages-list__close">
                            <img src="img/icons/arrow-down.svg" alt="ico">
                        </div>
                    </div>
                    <div class="advantages-list__item">
                        <div class="advantages-list__title">
                           {{ __('settings.Автоматизация') }}
                        </div>
                        <div class="advantages-list__subtitle">
                            {{ __('settings.Европейское оборудование') }}
                        </div>
                        <div class="advantages-list__text">
                            Компания использует качественные ингредиенты и первоклассное какао от мировых поставщиков, чтобы каждый кусочек Candy Gold привносил незабываемое наслаждение нашим потребителям. На фабрике действует лаборатория оснащённым с современной аппаратурой и вся продукция производится на европейских автоматизированных оборудованиях при соблюдении всех норм гигиены и производства.
                        </div>
                        <div class="advantages-list__close">
                            <img src="img/icons/arrow-down.svg" alt="ico">
                        </div>
                    </div>--}}
                </div>
            </div>

            <div class="advantages-main">
                <div class="advantages__img">

                    @foreach($advantages as $img)
                        <img src="{{ asset('/storage/'.$img->img) }}" alt="advantages">
                    @endforeach

                    {{--<img src="img/advantages/1.png" alt="advantages">
                    <img src="img/advantages/2.png" alt="advantages">
                    <img src="img/advantages/3.png" alt="advantages">
                    <img src="img/advantages/1.png" alt="advantages">
                    <img src="img/advantages/2.png" alt="advantages">
                    <img src="img/advantages/3.png" alt="advantages">--}}
                </div>
            </div>
        </div>
    </div>
</section>
