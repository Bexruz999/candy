<!-- NEWS -->

<section class="news" id="news">
    <div class="container">
        <div class="section-head">
            <h2 class="news__title wow fadeInUp" data-wow-delay=".3s">
                {{ __('settings.Мероприятия') }}
            </h2>
            <a href="{{ route('news') }}" class="section-link btn btn-trans wow fadeInUp" data-wow-delay=".4s">
              {{ __('settings.Все новости') }}
            </a>
        </div>
        <ul class="news-list">

            @foreach($events as $event)
                <li class="news-item wow fadeInUp" data-wow-delay=".3s">
                    <div class="news-item__wrap">
                        <div class="news-item__img">
                            <img src="{{ asset('/storage/' . $event->img) }}" alt="news">
                        </div>
                        <a href="{{ route('news-single', ['slug' => $event->slug]) }}" class="news-item__arrow">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.43 5.93018L20.5 12.0002L14.43 18.0702M3.5 12.0002H20.33" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
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

            {{--<li class="news-item wow fadeInUp" data-wow-delay=".3s">
                <div class="news-item__wrap">
                    <div class="news-item__img">
                        <img src="/img/news/1.jpg" alt="news">
                    </div>
                    <a href="/news-single" class="news-item__arrow">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.43 5.93018L20.5 12.0002L14.43 18.0702M3.5 12.0002H20.33" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
                <div class="news-item__title">
                   {{ __('settings.Участие в международной конференции') }}
                </div>
                <div class="news-item__text">
                    Как уже неоднократно упомянуто, явные признаки победы институционализации призывают нас к новым свершениям
                </div>
                <div class="news-item__date">
                    10/07/2023
                </div>
            </li>
            <li class="news-item wow fadeInUp" data-wow-delay=".4s">
                <div class="news-item__wrap">
                    <div class="news-item__img">
                        <img src="/img/news/2.jpg" alt="news">
                    </div>
                    <a href="/news-single" class="news-item__arrow">
                        <svg width=Бренд года 2023=24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.43 5.93018L20.5 12.0002L14.43 18.0702M3.5 12.0002H20.33" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
                <div class="news-item__title">

                </div>
                <div class="news-item__text">
                    Задача организации, в особенности же новая модель организационной деятельности играет важную роль в формировании кластеризации усилий.
                </div>
                <div class="news-item__date">
                    07/06/2023
                </div>
            </li>
            <li class="news-item wow fadeInUp" data-wow-delay=".5s">
                <div class="news-item__wrap">
                    <div class="news-item__img">
                        <img src="/img/news/3.jpg" alt="news">
                    </div>
                    <a href="/news-single" class="news-item__arrow">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.43 5.93018L20.5 12.0002L14.43 18.0702M3.5 12.0002H20.33" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
                <div class="news-item__title">
                    {{ __('settings.Участие в выставке WorldFood 2023') }}
                </div>
                <div class="news-item__text">
                    Как уже неоднократно упомянуто, явные признаки победы институционализации призывают нас к новым свершениям
                </div>
                <div class="news-item__date">
                    10/07/2023
                </div>
            </li>
            <li class="news-item wow fadeInUp" data-wow-delay=".6s">
                <div class="news-item__wrap">
                    <div class="news-item__img">
                        <img src="/img/news/4.jpg" alt="news">
                    </div>
                    <a href="/news-single" class="news-item__arrow">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.43 5.93018L20.5 12.0002L14.43 18.0702M3.5 12.0002H20.33" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
                <div class="news-item__title">
                    {{ __('settings.Бренд года 2022') }}
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
