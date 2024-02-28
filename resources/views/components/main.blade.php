<!-- MAIN -->

<section class="main">
    <div class="main__video">
        <video src="{{ asset('/storage/' . $settings->file) }}" pip="false" autoplay="autoplay" loop="loop" muted="muted" playsinline="" webkit-playsinline=""></video>
    </div>
    <div class="main-info">
        <div class="container">
            <h1 class="main__title">
                {{ $settings->title }}
            </h1>
            <div class="main__text">
                {{ $settings->subtitle }}
            </div>
        </div>
    </div>
</section>
