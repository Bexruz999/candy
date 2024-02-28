@extends('layouts.index')

@section('seo')
    <title>{{ $settings->title }}</title>
    <meta name="description" content="{{ $settings->description }}">
@endsection

@section('content')

    <x-header page="vacancy"/>

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


    <!-- VACANCY -->

    <section class="vacancy">
        <div class="container">
            <div class="vacancy-head">
                <h2 class="vacancy__title">
                    {{ $settings->subtitle }}
                </h2>
                <div class="vacancy__text">
                    {{ $settings->text }}
                </div>
            </div>
            <div class="vacancy-choose">
                <label class="vacancy-label" for="all">
                    <input type="checkbox" name="category" id="all" value="all" checked>
                    <span>Все</span>
                </label>
                @foreach($specializations as $specialization)
                    <label class="vacancy-label" for="category{{ $loop->index }}">
                        <input type="checkbox" name="category" id="category{{ $loop->index }}" value="{{ $specialization->id }}">
                        <span>{{ $specialization->title }}</span>
                    </label>
                @endforeach

                {{--<label class="vacancy-label" for="category1">
                    <input type="checkbox" name="category" id="category1" value="2">
                    <span>HR</span>
                </label>
                <label class="vacancy-label" for="category2">
                    <input type="checkbox" name="category" id="category2" value="1">
                    <span>IT</span>
                </label>
                <label class="vacancy-label" for="category3">
                    <input type="checkbox" name="category" id="category3" value="3">
                    <span>Маркетинг</span>
                </label>
                <label class="vacancy-label" for="category4">
                    <input type="checkbox" name="category" id="category4" value="4">
                    <span>Административная работа</span>
                </label>
                <label class="vacancy-label" for="category6">
                    <input type="checkbox" name="category" id="category6" value="5">
                    <span>Медицина</span>
                </label>
                <label class="vacancy-label" for="category7">
                    <input type="checkbox" name="category" id="category7" value="6">
                    <span>Продажи</span>
                </label>
                <label class="vacancy-label" for="category8">
                    <input type="checkbox" name="category" id="category8" value="7">
                    <span>Производство</span>
                </label >
                <label class="vacancy-label" for="category9">
                    <input type="checkbox" name="category" id="category9" value="fin">
                    <span>Финансы</span>
                </label>
                <label class="vacancy-label" for="category10">
                    <input type="checkbox" name="category" id="category10" value="dr">
                    <span>Другое</span>
                </label>--}}

            </div>
            <div class="vacancy-list">

                <!-- ИНФА ДЛЯ ПОПАПА СКРЫТА В VACANCY-ITEM -->

                @foreach($vacancies as $vacancy)
                    <div class="vacancy-item">
                        <!-- Должность -->
                        <div class="vacancy-item__name">
                            {{ $vacancy->title }}
                        </div>
                        <!-- Обязанности -->
                        <div class="vacancy-item__respons">
                            {{ $vacancy->responsibility }}
                        </div>
                        <!-- Требования -->
                        <div class="vacancy-item__require">
                            {{ $vacancy->requirement }}
                        </div>
                        <!-- Условия -->
                        <div class="vacancy-item__cond">
                            {{ $vacancy->conditions }}
                        </div>
                    </div>
                @endforeach

                {{--<div class="vacancy-item">
                    <!-- Должность -->
                    <div class="vacancy-item__name">
                        Начальник отдела снабжения и логистики
                    </div>
                    <!-- Обязанности -->
                    <div class="vacancy-item__respons">
                        Разработка технологических документов: ПР, СОП, МК, Спецификации оборудования;
                    </div>
                    <!-- Требования -->
                    <div class="vacancy-item__require">
                        <p>Опыт работы от 3х лет в области производства кондитерских изделий</p>
                        <p>Опыт работы на действующем производстве;</p>
                    </div>
                    <!-- Условия -->
                    <div class="vacancy-item__cond">
                        Полностью официальная з/п (уровень обсуждается с успешным кандидатом);<br>
                        Гибкий подход к выбору режима работы;<br>
                        Возможность карьерного роста;<br>
                        Шаговая доступность (5 минут) от м. Текстильщики.
                    </div>
                </div>
                <div class="vacancy-item">
                    <div class="vacancy-item__name">
                        Системный программист (низкоуровневое ПО)
                    </div>
                    <div class="vacancy-item__respons">
                        Разработка технологических документов: ПР, СОП, МК, Спецификации оборудования;
                    </div>
                    <div class="vacancy-item__require">
                        <p>Опыт работы от 3х лет в области производства кондитерских изделий</p>
                        <p>Опыт работы на действующем производстве;</p>
                    </div>
                    <div class="vacancy-item__cond">
                        Полностью официальная з/п (уровень обсуждается с успешным кандидатом);<br>
                        Гибкий подход к выбору режима работы;<br>
                        Возможность карьерного роста;<br>
                        Шаговая доступность (5 минут) от м. Текстильщики.
                    </div>
                </div>
                <div class="vacancy-item">
                    <div class="vacancy-item__name">
                        Инженер по строительной документации
                    </div>
                    <div class="vacancy-item__respons">
                        Разработка технологических документов: ПР, СОП, МК, Спецификации оборудования;
                    </div>
                    <div class="vacancy-item__require">
                        <p>Опыт работы от 3х лет в области производства кондитерских изделий</p>
                        <p>Опыт работы на действующем производстве;</p>
                    </div>
                    <div class="vacancy-item__cond">
                        Полностью официальная з/п (уровень обсуждается с успешным кандидатом);<br>
                        Гибкий подход к выбору режима работы;<br>
                        Возможность карьерного роста;<br>
                        Шаговая доступность (5 минут) от м. Текстильщики.
                    </div>
                </div>
                <div class="vacancy-item">
                    <div class="vacancy-item__name">
                        Инженер по валидации / Руководитель группы валидации
                    </div>
                    <div class="vacancy-item__respons">
                        Разработка технологических документов: ПР, СОП, МК, Спецификации оборудования;
                    </div>
                    <div class="vacancy-item__require">
                        <p>Опыт работы от 3х лет в области производства кондитерских изделий</p>
                        <p>Опыт работы на действующем производстве;</p>
                    </div>
                    <div class="vacancy-item__cond">
                        Полностью официальная з/п (уровень обсуждается с успешным кандидатом);<br>
                        Гибкий подход к выбору режима работы;<br>
                        Возможность карьерного роста;<br>
                        Шаговая доступность (5 минут) от м. Текстильщики.
                    </div>
                </div>
                <div class="vacancy-item">
                    <div class="vacancy-item__name">
                        Руководитель физико-химической лаборатории
                    </div>
                    <div class="vacancy-item__respons">
                        Разработка технологических документов: ПР, СОП, МК, Спецификации оборудования;
                    </div>
                    <div class="vacancy-item__require">
                        <p>Опыт работы от 3х лет в области производства кондитерских изделий</p>
                        <p>Опыт работы на действующем производстве;</p>
                    </div>
                    <div class="vacancy-item__cond">
                        Полностью официальная з/п (уровень обсуждается с успешным кандидатом);<br>
                        Гибкий подход к выбору режима работы;<br>
                        Возможность карьерного роста;<br>
                        Шаговая доступность (5 минут) от м. Текстильщики.
                    </div>
                </div>
                <div class="vacancy-item">
                    <div class="vacancy-item__name">
                        Менеджер по продажам B2B
                    </div>
                    <div class="vacancy-item__respons">
                        Разработка технологических документов: ПР, СОП, МК, Спецификации оборудования;
                    </div>
                    <div class="vacancy-item__require">
                        <p>Опыт работы от 3х лет в области производства кондитерских изделий</p>
                        <p>Опыт работы на действующем производстве;</p>
                    </div>
                    <div class="vacancy-item__cond">
                        Полностью официальная з/п (уровень обсуждается с успешным кандидатом);<br>
                        Гибкий подход к выбору режима работы;<br>
                        Возможность карьерного роста;<br>
                        Шаговая доступность (5 минут) от м. Текстильщики.
                    </div>
                </div>
                <div class="vacancy-item">
                    <div class="vacancy-item__name">
                        Инженер по валидации / Руководитель группы валидации
                    </div>
                    <div class="vacancy-item__respons">
                        Разработка технологических документов: ПР, СОП, МК, Спецификации оборудования;
                    </div>
                    <div class="vacancy-item__require">
                        <p>Опыт работы от 3х лет в области производства кондитерских изделий</p>
                        <p>Опыт работы на действующем производстве;</p>
                    </div>
                    <div class="vacancy-item__cond">
                        Полностью официальная з/п (уровень обсуждается с успешным кандидатом);<br>
                        Гибкий подход к выбору режима работы;<br>
                        Возможность карьерного роста;<br>
                        Шаговая доступность (5 минут) от м. Текстильщики.
                    </div>
                </div>
                <div class="vacancy-item">
                    <div class="vacancy-item__name">
                        Руководитель физико-химической лаборатории
                    </div>
                    <div class="vacancy-item__respons">
                        Разработка технологических документов: ПР, СОП, МК, Спецификации оборудования;
                    </div>
                    <div class="vacancy-item__require">
                        <p>Опыт работы от 3х лет в области производства кондитерских изделий</p>
                        <p>Опыт работы на действующем производстве;</p>
                    </div>
                    <div class="vacancy-item__cond">
                        Полностью официальная з/п (уровень обсуждается с успешным кандидатом);<br>
                        Гибкий подход к выбору режима работы;<br>
                        Возможность карьерного роста;<br>
                        Шаговая доступность (5 минут) от м. Текстильщики.
                    </div>
                </div>--}}
            </div>
        </div>
    </section>

    <div class="vacancy-popup">
        <div class="vacancy-popup__content">
            <div class="vacancy-popup__close">
                <img src="/img/icons/close-red.svg" alt="ico">
            </div>
            <div class="vacancy-popup__wrap">
                <div class="vacancy-popup__logo">
                    <img src="/img/logo.svg" alt="Candy Gold">
                </div>
                <div class="vacancy-popup__name">
                </div>
                <div class="vacancy-popup__item">
                    <div class="vacancy-popup__title">
                        Обязанности
                    </div>
                    <div class="vacancy-popup__text vacancy-popup__respons">
                    </div>
                </div>
                <div class="vacancy-popup__item">
                    <div class="vacancy-popup__title">
                        Требования
                    </div>
                    <div class="vacancy-popup__text vacancy-popup__require">
                    </div>
                </div>
                <div class="vacancy-popup__item">
                    <div class="vacancy-popup__title">
                        Условия
                    </div>
                    <div class="vacancy-popup__text vacancy-popup__cond">
                    </div>
                </div>
                <div class="vacancy-popup__item">
                    <div class="vacancy-popup__title">
                        Анкета соискателя
                    </div>
                    <div class="vacancy-popup__form form">
                        <input type="text" required placeholder="Ваше имя" class="form_name">
                        <input type="tel" required placeholder="Номер телефона" class="form_tel">
                        <label for="file" class="form_file">
                            <input type="file"  id="file">
                            <div>
                                <span>Прикрепить файл</span>
                                <img src="/img/icons/file.svg" alt="ico">
                            </div>
                        </label>
                        <input type="tel" required placeholder="Сообщение">
                        <button class="btn btn-red">
                            Отправить
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-footer/>

@endsection

@section('scripts')
    <script>
        $('.vacancy-label input').click(

            function (event) {

                var checkedValue = [];
                var inputElements = $('.vacancy-label input');
                for(var i=0; inputElements[i]; i++){
                    if(inputElements[i].checked){
                        checkedValue.push(inputElements[i].value);
                    }
                }

                console.log(event.target.value);
                $.get(
                    '{{ route('vacancies') }}', {vacancy: checkedValue},
                    function (data, textStatus, jqXHR) {
                        $('.vacancy-item').remove();
                        $('.vacancy-list').prepend(data);
                        console.log(data);
                        $('.vacancy-item').click(function(e) {
                            e.preventDefault()

                            let name = $(this).find('.vacancy-item__name').html()
                            let respons = $(this).find('.vacancy-item__respons').html()
                            let require = $(this).find('.vacancy-item__require').html()
                            let cond = $(this).find('.vacancy-item__cond').html()

                            $('.vacancy-popup__name').html(name)
                            $('.vacancy-popup__respons').html(respons)
                            $('.vacancy-popup__require').html(require)
                            $('.vacancy-popup__cond').html(cond)

                            $('.vacancy-popup').fadeIn(600)
                            $('body').addClass('overflowH')
                            setTimeout(() => {
                                $('.vacancy-popup__content').addClass('show')
                            }, 400)
                        })
                    }
                );
            }
        )
    </script>
@endsection
