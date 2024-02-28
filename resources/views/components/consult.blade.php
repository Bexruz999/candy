<!-- CONSULT -->

<section class="consult">
    <div class="consult__products">
        <img src="/img/consult/1.png" alt="product">
        <img src="/img/consult/2.png" alt="product">
    </div>
    <div class="container">
        <div class="consult-wrap">
            <div class="consult__img wow fadeInUp" data-wow-delay=".3s">
                <img src="/img/consult/card.jpg" alt="consult">
            </div>
            <div class="consult-info wow fadeInUp" data-wow-delay=".4s">
                <div class="consult-info__title">
                    {{ __('settings.У вас появились вопросы? Оставьте ваши координаты и мы свяжемся с вами в ближайшее время') }}
                </div>
                <form action="{{ route('form') }}" method="post" class="consult-form form">
                    @csrf
                    <input type="hidden" name="address" value=".">
                    <input type="hidden" name="department" value="contact">
                    <input type="hidden" name="comment" value=".">
                    <input type="text" class="form_name" name="name" placeholder="{{ __('settings.Ваше имя') }}">
                    <input type="tel" class="form_tel" name="phone" placeholder="{{ __('settings.Номер телефона') }}">
                    <button class="btn btn-white">
                        {{ __('settings.Отправить заявку') }}
                    </button>
                </form>
                {{--<div class="consult-form form">
                    <input type="text" class="form_name" name="name" placeholder="{{ __('settings.Ваше имя') }}">
                    <input type="tel" class="form_tel" name="phone" placeholder="{{ __('settings.Номер телефона') }}">
                    <button class="btn btn-white">
                        {{ __('settings.Отправить заявку') }}
                    </button>
                </div>--}}
            </div>
        </div>
    </div>
</section>
