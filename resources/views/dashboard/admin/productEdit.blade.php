@extends("dashboard.admin.layouts.app")
@section("content")<div class="card mb-3">

<div class="card-body">
    <form action="{{route("admin.product.update")}}" method="POST">
        @csrf
        @method('PUT')

      <div class="row">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <div class="product-slider" id="galleryTop">
            <div class="swiper-container theme-slider position-lg-absolute all-0 swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events swiper-container-autoheight" data-swiper="{&quot;autoHeight&quot;:true,&quot;spaceBetween&quot;:5,&quot;loop&quot;:true,&quot;loopedSlides&quot;:5,&quot;thumb&quot;:{&quot;spaceBetween&quot;:5,&quot;slidesPerView&quot;:5,&quot;loop&quot;:true,&quot;freeMode&quot;:true,&quot;grabCursor&quot;:true,&quot;loopedSlides&quot;:5,&quot;centeredSlides&quot;:true,&quot;slideToClickedSlide&quot;:true,&quot;watchSlidesVisibility&quot;:true,&quot;watchSlidesProgress&quot;:true,&quot;parent&quot;:&quot;#galleryTop&quot;},&quot;slideToClickedSlide&quot;:true}">
              <div class="swiper-wrapper h-100" id="swiper-wrapper-e4c0fbc6ad88108a4" aria-live="polite" style="height: 406px; transform: translate3d(-3582px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide h-100 swiper-slide-duplicate" data-swiper-slide-index="1" role="group" aria-label="2 / 6" style="width: 393px; margin-right: 5px;"><img class="rounded-1 fit-cover h-100 w-100" src="../../../assets/img/products/1-2.jpg" alt=""></div><div class="swiper-slide h-100 swiper-slide-duplicate" data-swiper-slide-index="2" role="group" aria-label="3 / 6" style="width: 393px; margin-right: 5px;"> <img class="rounded-1 fit-cover h-100 w-100" src="../../../assets/img/products/1-3.jpg" alt=""></div><div class="swiper-slide h-100 swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="3" role="group" aria-label="4 / 6" style="width: 393px; margin-right: 5px;"> <img class="rounded-1 fit-cover h-100 w-100" src="../../../assets/img/products/1-4.jpg" alt=""></div><div class="swiper-slide h-100 swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="4" role="group" aria-label="5 / 6" style="width: 393px; margin-right: 5px;"> <img class="rounded-1 fit-cover h-100 w-100" src="../../../assets/img/products/1-5.jpg" alt=""></div><div class="swiper-slide h-100 swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="5" role="group" aria-label="6 / 6" style="width: 393px; margin-right: 5px;"> <img class="rounded-1 fit-cover h-100 w-100" src="../../../assets/img/products/1-6.jpg" alt=""></div>
                <div class="swiper-slide h-100" data-swiper-slide-index="0" role="group" aria-label="1 / 6" style="width: 393px; margin-right: 5px;"><img class="rounded-1 fit-cover h-100 w-100" src="../../../assets/img/products/1.jpg" alt=""></div>
                <div class="swiper-slide h-100" data-swiper-slide-index="1" role="group" aria-label="2 / 6" style="width: 393px; margin-right: 5px;"><img class="rounded-1 fit-cover h-100 w-100" src="../../../assets/img/products/1-2.jpg" alt=""></div>
                <div class="swiper-slide h-100" data-swiper-slide-index="2" role="group" aria-label="3 / 6" style="width: 393px; margin-right: 5px;"> <img class="rounded-1 fit-cover h-100 w-100" src="../../../assets/img/products/1-3.jpg" alt=""></div>
                <div class="swiper-slide h-100 swiper-slide-prev" data-swiper-slide-index="3" role="group" aria-label="4 / 6" style="width: 393px; margin-right: 5px;"> <img class="rounded-1 fit-cover h-100 w-100" src="../../../assets/img/products/1-4.jpg" alt=""></div>
                <div class="swiper-slide h-100 swiper-slide-active" data-swiper-slide-index="4" role="group" aria-label="5 / 6" style="width: 393px; margin-right: 5px;"> <img class="rounded-1 fit-cover h-100 w-100" src="../../../assets/img/products/1-5.jpg" alt=""></div>
                <div class="swiper-slide h-100 swiper-slide-next" data-swiper-slide-index="5" role="group" aria-label="6 / 6" style="width: 393px; margin-right: 5px;"> <img class="rounded-1 fit-cover h-100 w-100" src="../../../assets/img/products/1-6.jpg" alt=""></div>
              <div class="swiper-slide h-100 swiper-slide-duplicate" data-swiper-slide-index="0" role="group" aria-label="1 / 6" style="width: 393px; margin-right: 5px;"><img class="rounded-1 fit-cover h-100 w-100" src="../../../assets/img/products/1.jpg" alt=""></div><div class="swiper-slide h-100 swiper-slide-duplicate" data-swiper-slide-index="1" role="group" aria-label="2 / 6" style="width: 393px; margin-right: 5px;"><img class="rounded-1 fit-cover h-100 w-100" src="../../../assets/img/products/1-2.jpg" alt=""></div><div class="swiper-slide h-100 swiper-slide-duplicate" data-swiper-slide-index="2" role="group" aria-label="3 / 6" style="width: 393px; margin-right: 5px;"> <img class="rounded-1 fit-cover h-100 w-100" src="../../../assets/img/products/1-3.jpg" alt=""></div><div class="swiper-slide h-100 swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="3" role="group" aria-label="4 / 6" style="width: 393px; margin-right: 5px;"> <img class="rounded-1 fit-cover h-100 w-100" src="../../../assets/img/products/1-4.jpg" alt=""></div><div class="swiper-slide h-100 swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="4" role="group" aria-label="5 / 6" style="width: 393px; margin-right: 5px;"> <img class="rounded-1 fit-cover h-100 w-100" src="../../../assets/img/products/1-5.jpg" alt=""></div></div>
              <div class="swiper-nav">
                <div class="swiper-button-next swiper-button-white" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-e4c0fbc6ad88108a4"></div>
                <div class="swiper-button-prev swiper-button-white" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-e4c0fbc6ad88108a4"></div>
              </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
          </div>
        <div class="swiper-container thumb swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events swiper-container-free-mode swiper-container-thumbs" style="cursor: grab;"><div class="swiper-wrapper" id="swiper-wrapper-b2e78128691e5491" aria-live="polite" style="transform: translate3d(-238.8px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="1" role="group" aria-label="2 / 6" style="width: 74.6px; margin-right: 5px;">
    <img class="img-fluid rounded mt-1" src="file:///C:/Users/Mohammadreza/Desktop/falcon-3.4.0/falcon-3.4.0/public/assets/img/products/1-2.jpg" alt="">
  </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group" aria-label="3 / 6" style="width: 74.6px; margin-right: 5px;">
    <img class="img-fluid rounded mt-1" src="file:///C:/Users/Mohammadreza/Desktop/falcon-3.4.0/falcon-3.4.0/public/assets/img/products/1-3.jpg" alt="">
  </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" role="group" aria-label="4 / 6" style="width: 74.6px; margin-right: 5px;">
    <img class="img-fluid rounded mt-1" src="file:///C:/Users/Mohammadreza/Desktop/falcon-3.4.0/falcon-3.4.0/public/assets/img/products/1-4.jpg" alt="">
  </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-visible swiper-slide-thumb-active" data-swiper-slide-index="4" role="group" aria-label="5 / 6" style="width: 74.6px; margin-right: 5px;">
    <img class="img-fluid rounded mt-1" src="file:///C:/Users/Mohammadreza/Desktop/falcon-3.4.0/falcon-3.4.0/public/assets/img/products/1-5.jpg" alt="">
  </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-visible swiper-slide-prev" data-swiper-slide-index="5" role="group" aria-label="6 / 6" style="width: 74.6px; margin-right: 5px;">
    <img class="img-fluid rounded mt-1" src="file:///C:/Users/Mohammadreza/Desktop/falcon-3.4.0/falcon-3.4.0/public/assets/img/products/1-6.jpg" alt="">
  </div>
  <div class="swiper-slide swiper-slide-visible swiper-slide-active" data-swiper-slide-index="0" role="group" aria-label="1 / 6" style="width: 74.6px; margin-right: 5px;">
    <img class="img-fluid rounded mt-1" src="file:///C:/Users/Mohammadreza/Desktop/falcon-3.4.0/falcon-3.4.0/public/assets/img/products/1.jpg" alt="">
  </div>

  <div class="swiper-slide swiper-slide-visible swiper-slide-next" data-swiper-slide-index="1" role="group" aria-label="2 / 6" style="width: 74.6px; margin-right: 5px;">
    <img class="img-fluid rounded mt-1" src="file:///C:/Users/Mohammadreza/Desktop/falcon-3.4.0/falcon-3.4.0/public/assets/img/products/1-2.jpg" alt="">
  </div>

  <div class="swiper-slide swiper-slide-visible" data-swiper-slide-index="2" role="group" aria-label="3 / 6" style="width: 74.6px; margin-right: 5px;">
    <img class="img-fluid rounded mt-1" src="file:///C:/Users/Mohammadreza/Desktop/falcon-3.4.0/falcon-3.4.0/public/assets/img/products/1-3.jpg" alt="">
  </div>

  <div class="swiper-slide" data-swiper-slide-index="3" role="group" aria-label="4 / 6" style="width: 74.6px; margin-right: 5px;">
    <img class="img-fluid rounded mt-1" src="file:///C:/Users/Mohammadreza/Desktop/falcon-3.4.0/falcon-3.4.0/public/assets/img/products/1-4.jpg" alt="">
  </div>

  <div class="swiper-slide swiper-slide-thumb-active" data-swiper-slide-index="4" role="group" aria-label="5 / 6" style="width: 74.6px; margin-right: 5px;">
    <img class="img-fluid rounded mt-1" src="file:///C:/Users/Mohammadreza/Desktop/falcon-3.4.0/falcon-3.4.0/public/assets/img/products/1-5.jpg" alt="">
  </div>

  <div class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="5" role="group" aria-label="6 / 6" style="width: 74.6px; margin-right: 5px;">
    <img class="img-fluid rounded mt-1" src="file:///C:/Users/Mohammadreza/Desktop/falcon-3.4.0/falcon-3.4.0/public/assets/img/products/1-6.jpg" alt="">
  </div>
<div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" role="group" aria-label="1 / 6" style="width: 74.6px; margin-right: 5px;">
    <img class="img-fluid rounded mt-1" src="file:///C:/Users/Mohammadreza/Desktop/falcon-3.4.0/falcon-3.4.0/public/assets/img/products/1.jpg" alt="">
  </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="1" role="group" aria-label="2 / 6" style="width: 74.6px; margin-right: 5px;">
    <img class="img-fluid rounded mt-1" src="file:///C:/Users/Mohammadreza/Desktop/falcon-3.4.0/falcon-3.4.0/public/assets/img/products/1-2.jpg" alt="">
  </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group" aria-label="3 / 6" style="width: 74.6px; margin-right: 5px;">
    <img class="img-fluid rounded mt-1" src="file:///C:/Users/Mohammadreza/Desktop/falcon-3.4.0/falcon-3.4.0/public/assets/img/products/1-3.jpg" alt="">
  </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" role="group" aria-label="4 / 6" style="width: 74.6px; margin-right: 5px;">
    <img class="img-fluid rounded mt-1" src="file:///C:/Users/Mohammadreza/Desktop/falcon-3.4.0/falcon-3.4.0/public/assets/img/products/1-4.jpg" alt="">
  </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-thumb-active" data-swiper-slide-index="4" role="group" aria-label="5 / 6" style="width: 74.6px; margin-right: 5px;">
    <img class="img-fluid rounded mt-1" src="file:///C:/Users/Mohammadreza/Desktop/falcon-3.4.0/falcon-3.4.0/public/assets/img/products/1-5.jpg" alt="">
  </div></div><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div></div>
        <div class="col-lg-6">
          
          <h5>
            <div class="mb-3">
              <label class="form-label" for="product-name">Name Product</label>
              <input class="form-control" type="text" id="product-name" aria-label="default input example" value="{{$product->name}}"/>
            </div>
         </h5>

          <a class="fs--1 mb-2 d-block" href="#!">Computer &amp; Accessories</a>

          <div class="fs--2 mb-3 d-inline-block text-decoration-none">
            <svg class="svg-inline--fa fa-star fa-w-18 text-warning" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fa fa-star text-warning"></span> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-warning" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fa fa-star text-warning"></span> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-warning" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fa fa-star text-warning"></span> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-warning" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fa fa-star text-warning"></span> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star-half-alt fa-w-17 text-warning star-icon" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star-half-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 536 512" data-fa-i2svg=""><path fill="currentColor" d="M508.55 171.51L362.18 150.2 296.77 17.81C290.89 5.98 279.42 0 267.95 0c-11.4 0-22.79 5.9-28.69 17.81l-65.43 132.38-146.38 21.29c-26.25 3.8-36.77 36.09-17.74 54.59l105.89 103-25.06 145.48C86.98 495.33 103.57 512 122.15 512c4.93 0 10-1.17 14.87-3.75l130.95-68.68 130.94 68.7c4.86 2.55 9.92 3.71 14.83 3.71 18.6 0 35.22-16.61 31.66-37.4l-25.03-145.49 105.91-102.98c19.04-18.5 8.52-50.8-17.73-54.6zm-121.74 123.2l-18.12 17.62 4.28 24.88 19.52 113.45-102.13-53.59-22.38-11.74.03-317.19 51.03 103.29 11.18 22.63 25.01 3.64 114.23 16.63-82.65 80.38z"></path></svg><!-- <span class="fa fa-star-half-alt text-warning star-icon"></span> Font Awesome fontawesome.com --><span class="ms-1 text-600">(8)</span>
          </div>
          <p class="fs--1">
            <div class="mb-3">
              <label class="form-label" for="explane-product">explane Product</label>
              <textarea class="form-control" id="intro" name="explane-product" cols="30" rows="4"></textarea>
            </div>
          </p>

          <h4 class="d-flex align-items-center">

            <span class="text-warning me-2">
              <div class="mb-3">
                <label class="form-label" for="product-name">price</label>
                <input class="form-control" type="text" id="product-name" aria-label="default input example" />
              </div>
            </span>

            <span class="me-1 fs--1 text-500"><del class="me-1">$2400</del><strong>-50%</strong></span>
          </h4>

          <p class="fs--1 mb-1"> <span>Shipping Cost: </span><strong>$50</strong></p>

          <p class="fs--1">
            <div class="mb-3">
              <label class="form-label" for="product-name">availiblity quantity</label>      
               <input class="form-control text-success" type="text" id="product-name" aria-label="default input example" />             
            </div>
          </p>

          <p class="fs--1 mb-3">Tags: <a class="ms-2" href="#!">Computer,</a><a class="ms-1" href="#!">Mac Book,</a><a class="ms-1" href="#!">Mac Book Pro,</a><a class="ms-1" href="#!">Laptop </a></p>

          <div class="row">
            {{-- <div class="col-auto pe-0">
              <div class="input-group input-group-sm" data-quantity="data-quantity">
                <button class="btn btn-sm btn-outline-secondary border-300" data-field="input-quantity" data-type="minus">-</button>
                <input class="form-control text-center input-quantity input-spin-none" type="number" min="0" value="0" aria-label="Amount (to the nearest dollar)" style="max-width: 50px">
                <button class="btn btn-sm btn-outline-secondary border-300" data-field="input-quantity" data-type="plus">+</button>
              </div>
            </div> --}}
            {{-- <div class="col-auto px-2 px-md-3"><a class="btn btn-sm btn-primary" href="#!"><svg class="svg-inline--fa fa-cart-plus fa-w-18 me-sm-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="cart-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM408 168h-48v-40c0-8.837-7.163-16-16-16h-16c-8.837 0-16 7.163-16 16v40h-48c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h48v40c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-40h48c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16z"></path></svg><!-- <span class="fas fa-cart-plus me-sm-2"></span> Font Awesome fontawesome.com --><span class="d-none d-sm-inline-block">Add To Cart</span></a></div> --}}
            {{-- <div class="col-auto px-0"><a class="btn btn-sm btn-outline-danger border-300" href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add to Wish List"><svg class="svg-inline--fa fa-heart fa-w-16 me-1" aria-hidden="true" focusable="false" data-prefix="far" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z"></path></svg><!-- <span class="far fa-heart me-1"></span> Font Awesome fontawesome.com -->282</a></div> --}}
          </div>

        </div>
    </div>


      <div class="row">

        <div class="col-12">
          <div class="overflow-hidden mt-4">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item"><a class="nav-link active ps-0" id="description-tab" data-bs-toggle="tab" href="#tab-description" role="tab" aria-controls="tab-description" aria-selected="true">Description</a></li>
              <li class="nav-item"><a class="nav-link px-2 px-md-3" id="specifications-tab" data-bs-toggle="tab" href="#tab-specifications" role="tab" aria-controls="tab-specifications" aria-selected="false">Specifications</a></li>
              <li class="nav-item"><a class="nav-link px-2 px-md-3" id="reviews-tab" data-bs-toggle="tab" href="#tab-reviews" role="tab" aria-controls="tab-reviews" aria-selected="false">Reviews</a></li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="tab-description" role="tabpanel" aria-labelledby="description-tab">
                <div class="mt-3">
                  <p>Over the years, Apple has built a reputation for releasing its products with a lot of fanfare – but that didn’t exactly happen for the MacBook Pro 2018. Rather, Apple’s latest pro laptop experienced a subdued launch, in spite of it offering a notable spec upgrade over the 2017 model – along with an improved keyboard. And, as with previous generations the 15-inch MacBook Pro arrives alongside a 13-inch model.</p>
                  <p>Apple still loves the MacBook Pro though, despite the quiet release. This is because, while the iPhone XS and iPad, along with the 12-inch MacBook, are aimed at everyday consumers, the MacBook Pro has always aimed at the creative and professional audience. This new MacBook Pro brings a level of performance (and price) unlike its more consumer-oriented devices. </p>
                  <p>Still, Apple wants mainstream users to buy the MacBook Pro, too. So, if you’re just looking for the most powerful MacBook on the market, you’ll love this new MacBook Pro. Just keep in mind that, while the keyboard has been updated, there are still some issues with it.</p>
                  <p>There’s enough of a difference between the two sizes when it comes to performance to warrant two separate reviews, and here we’ll be looking at how the flagship 15-inch MacBook Pro performs in 2019.</p>
                  <p>It's build quality and design is batter than elit. Numquam excepturi a debitis, sint voluptates, nam odit vel delectus id repellendus vero reprehenderit quidem totam praesentium vitae nesciunt deserunt. Sint, veniam?</p>
                </div>
              </div>
              <div class="tab-pane fade" id="tab-specifications" role="tabpanel" aria-labelledby="specifications-tab">
                <table class="table fs--1 mt-3">
                  <tbody>
                    <tr>
                      <td class="bg-100" style="width: 30%;">Processor</td>
                      <td>2.3GHz quad-core Intel Core i5,</td>
                    </tr>
                    <tr>
                      <td class="bg-100" style="width: 30%;">Memory</td>
                      <td>8GB of 2133MHz LPDDR3 onboard memory</td>
                    </tr>
                    <tr>
                      <td class="bg-100" style="width: 30%;">Brand Name</td>
                      <td>Apple</td>
                    </tr>
                    <tr>
                      <td class="bg-100" style="width: 30%;">Model</td>
                      <td>Mac Book Pro</td>
                    </tr>
                    <tr>
                      <td class="bg-100" style="width: 30%;">Display</td>
                      <td>13.3-inch (diagonal) LED-backlit display with IPS technology</td>
                    </tr>
                    <tr>
                      <td class="bg-100" style="width: 30%;">Storage</td>
                      <td>512GB SSD</td>
                    </tr>
                    <tr>
                      <td class="bg-100" style="width: 30%;">Graphics</td>
                      <td>Intel Iris Plus Graphics 655</td>
                    </tr>
                    <tr>
                      <td class="bg-100" style="width: 30%;">Weight</td>
                      <td>7.15 pounds</td>
                    </tr>
                    <tr>
                      <td class="bg-100" style="width: 30%;">Finish</td>
                      <td>Silver, Space Gray</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade" id="tab-reviews" role="tabpanel" aria-labelledby="reviews-tab">
                <div class="row mt-3">
                  <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="mb-1"><svg class="svg-inline--fa fa-star fa-w-18 text-warning fs--1" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fa fa-star text-warning fs--1"></span> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-warning fs--1" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fa fa-star text-warning fs--1"></span> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-warning fs--1" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fa fa-star text-warning fs--1"></span> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-warning fs--1" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fa fa-star text-warning fs--1"></span> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-warning fs--1" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fa fa-star text-warning fs--1"></span> Font Awesome fontawesome.com --><span class="ms-3 text-dark fw-semi-bold">Awesome support, great code 😍</span>
                    </div>
                    <p class="fs--1 mb-2 text-600">By Drik Smith • October 14, 2019</p>
                    <p class="mb-0">You shouldn't need to read a review to see how nice and polished this theme is. So I'll tell you something you won't find in the demo. After the download I had a technical question, emailed the team and got a response right from the team CEO with helpful advice.</p>
                    <hr class="my-4">
                    <div class="mb-1"><svg class="svg-inline--fa fa-star fa-w-18 text-warning fs--1" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fa fa-star text-warning fs--1"></span> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-warning fs--1" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fa fa-star text-warning fs--1"></span> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-warning fs--1" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fa fa-star text-warning fs--1"></span> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-warning fs--1" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fa fa-star text-warning fs--1"></span> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star-half-alt fa-w-17 text-warning star-icon fs--1" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star-half-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 536 512" data-fa-i2svg=""><path fill="currentColor" d="M508.55 171.51L362.18 150.2 296.77 17.81C290.89 5.98 279.42 0 267.95 0c-11.4 0-22.79 5.9-28.69 17.81l-65.43 132.38-146.38 21.29c-26.25 3.8-36.77 36.09-17.74 54.59l105.89 103-25.06 145.48C86.98 495.33 103.57 512 122.15 512c4.93 0 10-1.17 14.87-3.75l130.95-68.68 130.94 68.7c4.86 2.55 9.92 3.71 14.83 3.71 18.6 0 35.22-16.61 31.66-37.4l-25.03-145.49 105.91-102.98c19.04-18.5 8.52-50.8-17.73-54.6zm-121.74 123.2l-18.12 17.62 4.28 24.88 19.52 113.45-102.13-53.59-22.38-11.74.03-317.19 51.03 103.29 11.18 22.63 25.01 3.64 114.23 16.63-82.65 80.38z"></path></svg><!-- <span class="fa fa-star-half-alt text-warning star-icon fs--1"></span> Font Awesome fontawesome.com --><span class="ms-3 text-dark fw-semi-bold">Outstanding Design, Awesome Support</span>
                    </div>
                    <p class="fs--1 mb-2 text-600">By Liane • December 14, 2019</p>
                    <p class="mb-0">This really is an amazing template - from the style to the font - clean layout. SO worth the money! The demo pages show off what Bootstrap 4 can impressively do. Great template!! Support response is FAST and the team is amazing - communication is important.</p>
                  </div>
                  <div class="col-lg-6 ps-lg-5">

                    {{-- <form>
                      <h5 class="mb-3">Write your Review</h5>
                      <div class="mb-3">
                        <label class="form-label">Ratting: </label>
                        <div class="d-block star-rating" data-rater="{&quot;starSize&quot;:32,&quot;step&quot;:0.5}" style="width: 160px; height: 32px; background-size: 32px;"><div class="star-value" style="background-size: 32px; width: 0px;"></div></div>
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="formGroupNameInput">Name:</label>
                        <input class="form-control" id="formGroupNameInput" type="text">
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="formGroupEmailInput">Email:</label>
                        <input class="form-control" id="formGroupEmailInput" type="email">
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="formGrouptextareaInput">Review:</label>
                        <textarea class="form-control" id="formGrouptextareaInput" rows="3"></textarea>
                      </div>
                      <button class="btn btn-primary" type="submit">Submit</button>
                    </form> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <input type="submit">
  
</form>
@endsection