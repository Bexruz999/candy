
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
