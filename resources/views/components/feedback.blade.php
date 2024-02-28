<!-- FEEDBACK -->

<div class="feedback">
    <div class="feedback-content">
        <div class="feedback__close">
            <img src="/img/icons/close-red.svg" alt="ico">
        </div>

        <!-- feedback-wrap СКРЫТЬ feedback-done показать при отправке-->

        <div class="feedback__title">
           {{ __('settings.ФОРМА ОБРАТНОЙ СВЯЗИ') }}
        </div>

        <div class="feedback-wrap">
            <div class="feedback__text">
                {{ __('settings.Оставьте ваши координаты и мы свяжемся с вами в ближайшее время') }}
            </div>
            <form action="{{ route('form') }}" method="post" class="feedback-form form">
                @csrf
                <input type="hidden" name="address" value=".">
                <input type="text" name="name" required placeholder="{{ __('settings.Ваше имя') }}" class="form_name">
                <input type="tel" name="phone" required placeholder="{{ __('settings.Номер телефона') }}" class="form_tel">
                <select name="department" class="customSelect">
                    <option selected disabled>{{ __('settings.Выберите отдел') }}</option>
                    <option value="import"> {{ __('settings.Импорт') }}</option>
                    <option value="export"> {{ __('settings.Эскпорт') }}</option>
                    <option value="accounting"> {{ __('settings.Бухгалтерия') }}</option>
                </select>
                <textarea name="comment" placeholder="{{ __('settings.Введите комментарий') }}"></textarea>
                <button class="btn btn-white">
                    {{ __('settings.Отправить') }}
                </button>
            </form>
            {{--<div class="feedback-form form">
                <input type="text" name="name" required placeholder="{{ __('settings.Ваше имя') }}" class="form_name">
                <input type="tel" name="phone" required placeholder="{{ __('settings.Номер телефона') }}" class="form_tel">
                <select name="department" class="customSelect">
                    <option selected disabled>{{ __('settings.Выберите отдел') }}</option>
                    <option value="import"> {{ __('settings.Импорт') }}</option>
                    <option value="export"> {{ __('settings.Эскпорт') }}</option>
                    <option value="accounting"> {{ __('settings.Бухгалтерия') }}</option>
                </select>
                <textarea name="comment" placeholder="{{ __('settings.Введите комментарий') }}"></textarea>
                <button class="btn btn-white">
                   {{ __('settings.Отправить') }}
                </button>
            </div>--}}
        </div>
        <div class="feedback-done">
            <div class="feedback__img">
                <img src="/img/icons/done.svg" alt="ico">
            </div>
            <div class="feedback__text">
                {{ __('settings.Ваш запрос получен. мы свяжемся с вами в ближайшее время') }}
            </div>
        </div>
    </div>
</div>
