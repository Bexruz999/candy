if(sessionStorage.getItem('loader')) {
    $('.preloader').hide()
}
sessionStorage.setItem('loader', true)

$(window).on('load', () => {

    let windowHeight = $(window).height()
    let rootFont = parseInt($(':root').css('font-size'))

    $('.preloader').delay(1300).fadeOut(800)


    $('.fixed-open').click(function(e) {
        e.preventDefault()
        $(this).toggleClass('active')

        $('.fixed-btns__buttons').slideToggle(500)
    })




    //_____________FEEDBACK_________________


    $('.feedback-open').click(e => {
        e.preventDefault()
        $('.feedback').fadeIn(600)
        $('body').addClass('overflowH')
    })

    $('.feedback__close').click(e => {
        e.preventDefault()
        $('.feedback').fadeOut(600)
        $('body').removeClass('overflowH')
    })


    $('.feedback').click(e => {
        let div = $('.feedback-content')
        if (!div.is(e.target)
            && div.has(e.target).length === 0) {
            $('.feedback').fadeOut(600)
            $('body').removeClass('overflowH')
        }
    })


    //_________HEADER_________

    let scroll = $(window).scrollTop()
    scroll > rootFont*2 ? $('.header').addClass('header-scrolled') : $('.header').removeClass('header-scrolled')

    $('.header-mobile').click(function() {
        $('.mobile-menu').slideDown(700)
        $('body').addClass('overflowH')
    })

    $('.mobile-menu__close').click(function() {
        $('.mobile-menu').slideUp(700)
        $('body').removeClass('overflowH')
    })


    $('.mobile-menu__list a').click(function() {
        setTimeout(() => {
            $('.mobile-menu').slideUp(700)
            $('body').removeClass('overflowH')
        }, 300)
    })

    //________MAIN________


    $('.main-slider').owlCarousel({
        items: 1,
        nav: false,
        dots: true,
        smartSpeed: 700,
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000,
    })


    //________PRODUCTS________

    let productsCarouselChange = event => {
        if (!event.namespace) {
            return
        }
        let slide = event.relatedTarget.current()
        let $parent = $(event.target).parents('.products-item')

        let count = +$parent.find('.owl-item').eq(slide).find('.products-item__img').data('count')

        $parent.find('.products-item__list li').removeClass('current')
        $parent.find('.products-item__list li').eq(count).addClass('current')

        let link = $parent.find('.products-item__list li').eq(count).data('href')
        $parent.find('.products-item__more').attr('href', link)
    }


    $('.products-item__slider-wrap').owlCarousel({
        dots: true,
        nav: false,
        smartSpeed: 700,
        margin: rootFont,
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000,
        onInitialized: productsCarouselChange,
        onChanged: productsCarouselChange,
    })


    $('.products-item__list li').click(function() {
        let index = $(this).index()
        $(this).parents('.products-item').find('.products-item__slider-wrap').trigger('to.owl.carousel', [index, 700])
    })


    $('.products-main products-page__head li a').click(function(e) {
        e.preventDefault()
        let index = $(this).closest('li').index()
        $(window).scrollTop($('.products-item').eq(index).offset().top - rootFont*5)
    })

    $('.products-single .products-page__head li a').click(function(e) {
        e.preventDefault()
        let index = $(this).closest('li').index()
        $('.products-single .products-page__head li a').removeClass('current')
        $(this).addClass('current')
        $('.products-item').removeClass('current')
        $('.products-item').eq(index).addClass('current')
    })


    let productCertsInit = () => {
        $('.product-certs__carousel').owlCarousel({
            dots: false,
            nav: false,
            smartSpeed: 1000,
            loop: true,
            center: true,
            autoWidth: true,
            mouseDrag: false,
        })
    }

    $('.product-certs__arrows .arrow-left').click(() => {
        $('.product-certs__carousel').trigger('prev.owl.carousel', [1000]);
    })

    $('.product-certs__arrows .arrow-right').click(() => {
        $('.product-certs__carousel').trigger('next.owl.carousel', [1000]);
    })



    $('.product-main__certs img').click(function() {
        let index = $(this).index()
        $('.product-certs').fadeIn(600)
        $('body').addClass('overflowH')
        productCertsInit()
        $('.product-certs__carousel').trigger('to.owl.carousel', [index,0,true])
    })



    $('.product-certs').click(e => {
        let div = $('.product-certs__wrap')
        if (!div.is(e.target)
            && div.has(e.target).length === 0) {
            $('.product-certs').fadeOut(600)
            $('body').removeClass('overflowH')
            setTimeout(() => {
                $('.product-certs__carousel').owlCarousel('destroy')
            }, 600)
        }
    })



    //________ADVANTAGES________


    $('.advantages-list__item').click(function() {
        if($(this).hasClass('active')) {
            $('.advantages-list__item').removeClass('active')
            $('.advantages-list__text').slideUp(400)
        } else {
            $('.advantages-list__item').removeClass('active')
            $('.advantages-list__text').slideUp(400)
            $(this).addClass('active')
            $(this).find('.advantages-list__text').slideDown(400)
        }
    })



    //________INFO________

    $('.info-popup__carousel').owlCarousel({
        items: 1,
        nav: false,
        dots: false,
        smartSpeed: 1000,
        autoWidth: true,
        margin: rootFont*2,
    })


    $('.info-popup .arrow-left').click(() => {
        $('.info-popup__carousel').trigger('prev.owl.carousel')
    })

    $('.info-popup .arrow-right').click(() => {
        $('.info-popup__carousel').trigger('next.owl.carousel')
    })


    $('.info__arrow').click(function(e) {
        let index = $(this).parents('.info-banner').index('.info-banner')
        console.log(index)
        $('.info-popup__carousel').trigger('to.owl.carousel', [index,0,true])
        e.preventDefault()
        $('.info-popup').fadeIn(600)
        $('body').addClass('overflowH')
    })


    $('.info-popup').click(e => {
        let div = $('.info-popup__content')
        if (!div.is(e.target)
            && div.has(e.target).length === 0) {
            $('.info-popup').fadeOut(600)
            $('body').removeClass('overflowH')
        }
    })



    //_______MAP________

    let activateMap = true

    let  activaMapCallback = () => {

        $('.map-main').scrollLeft(windowHeight/2)
        let mapIndex = 0
        let countriesLength = $('.map-info__item').length

        let showCountry = (index) => {
            $('.map__countries svg path').each(function() {
                +$(this).data('count') == index ? $(this).addClass('active') : $(this).removeClass('active')
            })


            $('.map-info__item').hide()
            $('.map-info__item').eq(index).css('display', 'flex')
        }


        $('.map__pins img').each(function(index) {

            setTimeout(() => {
                $(this).addClass('active')
            }, 500*index)
        })

        let countiresInterval

        $('.map__countries svg path').click(function() {
            let index = +$(this).data('count')
            showCountry(index)
            clearInterval(countiresInterval)
        })

        setTimeout(() => {
            showCountry(mapIndex)
            $('.map-info').addClass('show')
            $('.map-main').addClass('active')

            countiresInterval = setInterval(() => {
                if(mapIndex == countriesLength - 1) {
                    mapIndex = 0
                } else {
                    mapIndex ++
                }
                showCountry(mapIndex)
            }, 4000)
        }, 6000)
    }


    //________VACANCY________


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

    $('.vacancy-popup__close').click(e => {
        e.preventDefault()
        $('.vacancy-popup__content').removeClass('show')
        setTimeout(() => {
            $('.vacancy-popup').fadeOut(600)
            $('body').removeClass('overflowH')
        }, 400)
    })


    $('.vacancy-popup').click(e => {
        let div = $('.vacancy-popup__content')
        if (!div.is(e.target)
            && div.has(e.target).length === 0) {
            $('.vacancy-popup__content').removeClass('show')
            setTimeout(() => {
                $('.vacancy-popup').fadeOut(600)
                $('body').removeClass('overflowH')
            }, 400)
        }
    })


    $('.vacancy-popup__form input[type="file"]').on('change', function() {
        let fileName = $(this).val().split('\\').pop()
        $('.file-name').text(fileName)
        $('.file-name').show()
    })






    //________PRODUCTION________


    let containerPad = parseFloat($('.container').css('padding-left'))


    $('.production-carousel').owlCarousel({
        dots: false,
        nav: false,
        smartSpeed: 700,
        responsive: {
            0: {
                items: 1,
                margin: 1*rootFont,
                stagePadding: 2.5*rootFont
            },

            500: {
                items: 1,
                margin: 1.5*rootFont,
                stagePadding: containerPad
            },

            900: {
                items: 2,
                margin: 2*rootFont,
                stagePadding: containerPad
            },


        }

    })

    $('.production-arrows .arrow-left').click(() => {
        $('.production-carousel').trigger('prev.owl.carousel', [700]);
    })

    $('.production-arrows .arrow-right').click(() => {
        $('.production-carousel').trigger('next.owl.carousel', [700]);
    })


    $('.production-item').click(function() {
        let img = $(this).find('img').attr('src')
        $('.production-zoom img').attr('src', img)
        $('.production-zoom').fadeIn(600)
        $('body').addClass('overflowH')
    })


    $('.production-zoom').click(e => {
        let div = $('.production-zoom img')
        if (!div.is(e.target)
            && div.has(e.target).length === 0) {
            $('.production-zoom').fadeOut(600)
            $('body').removeClass('overflowH')
        }
    })


    //___________MAPS_________

    ymaps.ready(mapStart);
    function mapStart() {
        var footerMap = new ymaps.Map("footerMap", {
            center: [41.27916390422778, 69.26492074602051],
            zoom: 14,
            controls: []
        }, {
            searchControlProvider: 'yandex#search'
        });

        footerMap.geoObjects
            .add(new ymaps.Placemark([41.27916390422778, 69.26492074602051], {
            }, {
                iconLayout: 'default#image',
                iconImageHref: '/img/icons/marker.svg',
                iconImageSize: [2.3*rootFont, 2.3*rootFont],
            }))

        footerMap.panes.get('ground').getElement().style.filter = 'grayscale(100%)';
    }


    //_____________FORMS__________

    $('.customSelect').customSelect()


    $('.form_tel').intlTelInput({
        autoPlaceholder:"polite",
        initialCountry: 'uz',
        nationalMode: false,
    })

    $('.form_name').on('keydown', function(e) {
        const key = e.key;
        if (!/^[a-zA-Zа-яА-Я\s]*$/.test(key)) {
            e.preventDefault();
        }
    })


    //__________WOW____________

    new WOW({
        offset: 50,
        mobile: false,
    }).init();


    //________SCROLL________

    let flip = true

    //________HISTORY__________

    let screenKoef

    if($(window).width() > 2600) {
        screenKoef = (54.7 - $(window).width()/130)
    } else if($(window).width() > 2000) {
        screenKoef = (54.7 - rootFont*1.1)
    } else {
        screenKoef = 34.7
    }


    if(!($(window).width() < 768 )) {
        let historyLength = $('.history-item').length
        let historyItemWidth = parseFloat($('.history-item').css('width'))
        $('.history').height(40*rootFont + historyLength*historyItemWidth)
        let historyOffset = $('.history').offset()?.top
        let historyHeight = $('.history').height()
        $('.history-main').css('width', `${(historyLength-1)*historyItemWidth}px`)
        let historyWidth = $('.history-main').width()

        $(window).on('scroll', function() {
            let scrollTop = $(window).scrollTop()
            let gap = (scrollTop - historyOffset) / historyHeight * 100
            $('.history-main').css('margin-left', `-${historyWidth / 100 * gap}px`)
        })

    }

    $(window).scroll(() => {
        scroll = $(window).scrollTop()
        scroll > rootFont*2 ? $('.header').addClass('header-scrolled') : $('.header').removeClass('header-scrolled')

        if(!($(window).width() < 768 || ('ontouchstart' in window))) {
            let currentTop = $(window).scrollTop()
            let elems = $('.advantages-list__item')

            elems.each(function(){
                let elemTop 	= $(this).offset().top-(rootFont*22);
                let elemBottom 	= elemTop + $(this).height()
                if(currentTop >= elemTop && currentTop <= elemBottom){
                    let index = $(this).index()
                    $('.advantages__img img').css('opacity', '0')
                    $('.advantages__img img').eq(index).css('opacity', '1')
                }
            })
        }


        if(($(window).scrollTop() >= ($('.import').offset()?.top - $(window).height())) && flip) {
            flip = false
            setInterval(() => {
                $('.import-logos__item').map((index, item) => {
                    setTimeout(() => {
                        $(item).addClass('rotated')
                    }, index*100)
                    setTimeout(() => {
                        $(item).removeClass('rotated')
                    }, index*100+$('.import-logos__item').length*100+2000)
                })
            }, 7000)
        }

        if($(window).scrollTop() > $('.map').offset()?.top && activateMap) {
            activateMap = false
            activaMapCallback()
        }

    })



    // __________HOVER CHANGE___________

    $('.hover-change').each(function() {
        $(this).append('<ul></ul>')
        $(this).find('img').each(function() {
            $(this).parent().find('ul').append('<li></li>')
        })
        $(this).find('li').mouseenter(function() {
            let index = $(this).index()
            $(this).parents('.hover-change').find('img').css('opacity', '0')
            $(this).parents('.hover-change').find('img').eq(index).css('opacity', '1')
        })
    })


    // __________HASH___________

    let hash = window.location.hash
    if (hash) {

        setTimeout(() => {
            $(window).scrollTop($(`${hash}`).offset()?.top)
        }, 150)
    }
})
