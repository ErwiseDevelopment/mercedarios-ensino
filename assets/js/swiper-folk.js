/* news */
const swiperBanner = new Swiper( '.js-swiper-banner', {
  loop: true,

  autoplay: {
    delay: 6000,
    disableOnInteraction: false
  }
})

/* news */
const swiperNews = new Swiper( '.js-swiper-news', {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: false,
  slidesPerView: 3,
  initialSlide: 4,

  coverflowEffect: {
    rotate: 0,
    stretch: -50,
    depth: 300,
    modifier: 1,
    slideShadows: true
  },

  breakpoints: {
    320: {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: false,
      slidesPerView: 1.2,
      initialSlide: 0,

      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 0,
        modifier: 1,
        slideShadows: false
      },
    },

    992: {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: false,
      slidesPerView: 3,
      initialSlide: 4,

      coverflowEffect: {
        rotate: 0,
        stretch: -50,
        depth: 300,
        modifier: 1,
        slideShadows: true
      },
    }
  }
})

const swiperStructureUnits = new Swiper( '.js-structure-units', {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: 2.3,
  initialSlide: 1,

  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 300,
    modifier: 1,
    slideShadows: true
  },

  breakpoints: {
    320: {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: false,
      slidesPerView: 1,
      initialSlide: 0,

      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 0,
        modifier: 1,
        slideShadows: false
      },
    },

    992: {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 2,
      initialSlide: 1,

      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 300,
        modifier: 1,
        slideShadows: true
      },
    }
  },

  navigation: {
    prevEl: '.js-swiper-button-prev-structure-units',
    nextEl: '.js-swiper-button-next-structure-units'
  }
})

const swiperPhotos = new Swiper( '.js-swiper-photos', {
  loop: true,

  autoplay: {
    delay: 6000,
    disableOnInteraction: false
  }
})