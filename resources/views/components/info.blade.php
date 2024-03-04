<!-- INFO -->

<section class="info">
    <div class="container">
        <div class="info-content">

            @foreach((array)$settings->galery as $img)
                @if($loop->iteration === 1)
                    <div class="info-main info-banner wow fadeInUp" data-wow-delay=".3s">
                        <div class="info-main__img">
                            <img src="{{ asset('/storage/' . $img) }}" alt="info">
                        </div>
                    </div>
                @endif
            @endforeach

            <div class="info-wrap">
                @foreach((array)$settings->galery as $img)
                    @if($loop->iteration > 1 && $loop->iteration < 4)
                        <div class="info-item info-banner wow fadeInUp" data-wow-delay=".{{ $loop->iteration + 3 }}s">
                            <div class="info__img">
                                <img src="{{ asset('/storage/' . $img) }}" alt="info">
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            {{--<div class="info-main info-banner wow fadeInUp" data-wow-delay=".3s">
                <div class="info-main__img">
                    <img src="/img/info/1.jpg" alt="info">
                </div>
            </div>
            <div class="info-wrap">
                <div class="info-item info-banner wow fadeInUp" data-wow-delay=".4s">
                    <div class="info__img">
                        <img src="/img/info/2.jpg" alt="info">
                    </div>
                </div>
                <div class="info-item info-banner wow fadeInUp" data-wow-delay=".5s">
                    <div class="info__img">
                        <img src="/img/info/3.jpg" alt="info">
                    </div>
                </div>
            </div>--}}
        </div>
    </div>
    <div class="info-popup">
        <div class="info-popup__close">
            <img src="/img/icons/close-red.svg" alt="ico">
        </div>
        <div class="info-popup__content">
            <div class="info-popup__carousel owl-carousel">
                {{--{{ dd($settings->galery)  }}--}}
                @foreach( (array)$settings->galery as $img)
                    <div class="info-popup__item">
                        <img src="{{ asset('/storage/' . $img) }}" alt="info">
                    </div>
                @endforeach
                {{--<div class="info-popup__item">
                    <img src="/img/info/1.jpg" alt="info">
                </div>
                <div class="info-popup__item">
                    <img src="/img/info/2.jpg" alt="info">
                </div>
                <div class="info-popup__item">
                    <img src="/img/info/3.jpg" alt="info">
                </div>--}}
            </div>
            <div class="info-popup__arrows">
					<span class="arrow-left">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M9.57 5.92969L3.5 11.9997L9.57 18.0697M20.5 11.9997H3.67" stroke="currentColor"
                                  stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
						</svg>
					</span>
                <span class="arrow-right">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M14.43 5.92969L20.5 11.9997L14.43 18.0697M3.5 11.9997H20.33" stroke="currentColor"
                                  stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
						</svg>
					</span>
            </div>
        </div>
    </div>
</section>
