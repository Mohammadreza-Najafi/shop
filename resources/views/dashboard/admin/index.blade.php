@extends("dashboard.admin.layouts.app")
@section("content")

    <div class="content">
        <div class="row g-3 mb-3">
            <div class="col-xxl-6 col-xl-12">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="card bg-transparent-50 overflow-hidden">
                            <div class="card-header position-relative">
                                <div class="bg-holder d-none d-md-block bg-card z-index-1" style="background-image:url(../assets/img/illustrations/ecommerce-bg.png);background-size:230px;background-position:right bottom;z-index:-1;">
                                </div>
                                <!--/.bg-holder-->

                                <div class="position-relative z-index-2">
                                    <div>
                                        <h3 class="text-primary mb-1">Good Afternoon, Jonathan!</h3>
                                        <p>Here’s what happening with your store today </p>
                                    </div>
                                    <div class="d-flex py-3">
                                        <div class="pe-3">
                                            <p class="text-600 fs--1 fw-medium">Today's visit </p>
                                            <h4 class="text-800 mb-0">14,209</h4>
                                        </div>
                                        <div class="ps-3">
                                            <p class="text-600 fs--1">Today’s total sales </p>
                                            <h4 class="text-800 mb-0">$21,349.29 </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <ul class="mb-0 list-unstyled">
                                    <li class="alert mb-0 rounded-0 py-3 px-card alert-warning border-x-0 border-top-0">
                                        <div class="row flex-between-center">
                                            <div class="col">
                                                <div class="d-flex">
                                                    <svg class="svg-inline--fa fa-circle fa-w-16 mt-1 fs--2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg><!-- <div class="fas fa-circle mt-1 fs--2"></div> Font Awesome fontawesome.com -->
                                                    <p class="fs--1 ps-2 mb-0"><strong>5 products</strong> didn’t publish to your Facebook page</p>
                                                </div>
                                            </div>
                                            <div class="col-auto d-flex align-items-center"><a class="alert-link fs--1 fw-medium" href="#!">View products<svg class="svg-inline--fa fa-chevron-right fa-w-10 ms-1 fs--2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg><!-- <i class="fas fa-chevron-right ms-1 fs--2"></i> Font Awesome fontawesome.com --></a></div>
                                        </div>
                                    </li>
                                    <li class="alert mb-0 rounded-0 py-3 px-card greetings-item border-top border-x-0 border-top-0">
                                        <div class="row flex-between-center">
                                            <div class="col">
                                                <div class="d-flex">
                                                    <svg class="svg-inline--fa fa-circle fa-w-16 mt-1 fs--2 text-primary" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg><!-- <div class="fas fa-circle mt-1 fs--2 text-primary"></div> Font Awesome fontawesome.com -->
                                                    <p class="fs--1 ps-2 mb-0"><strong>7 orders</strong> have payments that need to be captured</p>
                                                </div>
                                            </div>
                                            <div class="col-auto d-flex align-items-center"><a class="alert-link fs--1 fw-medium" href="#!">View payments<svg class="svg-inline--fa fa-chevron-right fa-w-10 ms-1 fs--2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg><!-- <i class="fas fa-chevron-right ms-1 fs--2"></i> Font Awesome fontawesome.com --></a></div>
                                        </div>
                                    </li>
                                    <li class="alert mb-0 rounded-0 py-3 px-card greetings-item border-top  border-0">
                                        <div class="row flex-between-center">
                                            <div class="col">
                                                <div class="d-flex">
                                                    <svg class="svg-inline--fa fa-circle fa-w-16 mt-1 fs--2 text-primary" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg><!-- <div class="fas fa-circle mt-1 fs--2 text-primary"></div> Font Awesome fontawesome.com -->
                                                    <p class="fs--1 ps-2 mb-0"><strong>50+ orders</strong> need to be fulfilled</p>
                                                </div>
                                            </div>
                                            <div class="col-auto d-flex align-items-center"><a class="alert-link fs--1 fw-medium" href="#!">View orders<svg class="svg-inline--fa fa-chevron-right fa-w-10 ms-1 fs--2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg><!-- <i class="fas fa-chevron-right ms-1 fs--2"></i> Font Awesome fontawesome.com --></a></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="card h-md-100 ecommerce-card-min-width">
                                    <div class="card-header pb-0">
                                        <h6 class="mb-0 mt-2 d-flex align-items-center">Weekly Sales<span class="ms-1 text-400" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Calculated according to last week's sales" aria-label="Calculated according to last week's sales"><svg class="svg-inline--fa fa-question-circle fa-w-16" data-fa-transform="shrink-1" aria-hidden="true" focusable="false" data-prefix="far" data-icon="question-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.5em;"><g transform="translate(256 256)"><g transform="translate(0, 0)  scale(0.9375, 0.9375)  rotate(0 0 0)"><path fill="currentColor" d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 448c-110.532 0-200-89.431-200-200 0-110.495 89.472-200 200-200 110.491 0 200 89.471 200 200 0 110.53-89.431 200-200 200zm107.244-255.2c0 67.052-72.421 68.084-72.421 92.863V300c0 6.627-5.373 12-12 12h-45.647c-6.627 0-12-5.373-12-12v-8.659c0-35.745 27.1-50.034 47.579-61.516 17.561-9.845 28.324-16.541 28.324-29.579 0-17.246-21.999-28.693-39.784-28.693-23.189 0-33.894 10.977-48.942 29.969-4.057 5.12-11.46 6.071-16.666 2.124l-27.824-21.098c-5.107-3.872-6.251-11.066-2.644-16.363C184.846 131.491 214.94 112 261.794 112c49.071 0 101.45 38.304 101.45 88.8zM298 368c0 23.159-18.841 42-42 42s-42-18.841-42-42 18.841-42 42-42 42 18.841 42 42z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="far fa-question-circle" data-fa-transform="shrink-1"></span> Font Awesome fontawesome.com --></span></h6>
                                    </div>
                                    <div class="card-body d-flex flex-column justify-content-end">
                                        <div class="row">
                                            <div class="col">
                                                <p class="font-sans-serif lh-1 mb-1 fs-2">$47K</p><span class="badge badge-soft-success rounded-pill fs--2">+3.5%</span>
                                            </div>
                                            <div class="col-auto ps-0">
                                                <div class="echart-bar-weekly-sales h-100 echart-bar-weekly-sales-smaller-width" style="-webkit-tap-highlight-color: transparent; user-select: none; position: relative;" _echarts_instance_="ec_1640511776037"><div style="position: relative; width: 104px; height: 51px; padding: 0px; margin: 0px; border-width: 0px;"><canvas data-zr-dom-id="zr_0" width="104" height="51" style="position: absolute; left: 0px; top: 0px; width: 104px; height: 51px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div class=""></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card product-share-doughnut-width">
                                    <div class="card-header pb-0">
                                        <h6 class="mb-0 mt-2 d-flex align-items-center">Product Share</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex flex-column justify-content-between">
                                                <p class="font-sans-serif lh-1 mb-1 fs-2">34.6%</p><span class="badge badge-soft-warning rounded-pill fs--2"><svg class="svg-inline--fa fa-caret-up fa-w-10 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M288.662 352H31.338c-17.818 0-26.741-21.543-14.142-34.142l128.662-128.662c7.81-7.81 20.474-7.81 28.284 0l128.662 128.662c12.6 12.599 3.676 34.142-14.142 34.142z"></path></svg><!-- <span class="fas fa-caret-up me-1"></span> Font Awesome fontawesome.com -->3.5%</span>
                                            </div>
                                            <div>
                                                <canvas class="my-n5" id="marketShareDoughnut" width="112" height="112" style="display: block; box-sizing: border-box; height: 112px; width: 112px;"></canvas>
                                                <p class="mb-0 text-center fs--2 mt-4 text-500">Target: <span class="text-800">55% </span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card h-md-100 h-100">
                                    <div class="card-body">
                                        <div class="row h-100 justify-content-between g-0">
                                            <div class="col-5 col-sm-6 col-xxl pe-2">
                                                <h6 class="mt-1">Market Share</h6>
                                                <div class="fs--2 mt-3">
                                                    <div class="d-flex flex-between-center mb-1">
                                                        <div class="d-flex align-items-center"><span class="dot bg-primary"></span><span class="fw-semi-bold">Falcon</span></div>
                                                        <div class="d-xxl-none">57%</div>
                                                    </div>
                                                    <div class="d-flex flex-between-center mb-1">
                                                        <div class="d-flex align-items-center"><span class="dot bg-info"></span><span class="fw-semi-bold">Sparrow</span></div>
                                                        <div class="d-xxl-none">20%</div>
                                                    </div>
                                                    <div class="d-flex flex-between-center mb-1">
                                                        <div class="d-flex align-items-center"><span class="dot bg-warning"></span><span class="fw-semi-bold">Phoenix</span></div>
                                                        <div class="d-xxl-none">22%</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto position-relative">
                                                <div class="echart-product-share" _echarts_instance_="ec_1640511776039" style="-webkit-tap-highlight-color: transparent; user-select: none; position: relative;"><div style="position: relative; width: 106px; height: 106px; padding: 0px; margin: 0px; border-width: 0px;"><canvas data-zr-dom-id="zr_0" width="106" height="106" style="position: absolute; left: 0px; top: 0px; width: 106px; height: 106px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div class=""></div></div>
                                                <div class="position-absolute top-50 start-50 translate-middle text-dark fs-2">26M</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card h-100">
                                    <div class="card-header pb-0">
                                        <h6 class="mb-0 mt-2 d-flex align-items-center">Total Order</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row align-items-end">
                                            <div class="col">
                                                <p class="font-sans-serif lh-1 mb-1 fs-2">58.4K</p>
                                                <div class="badge badge-soft-primary rounded-pill fs--2"><svg class="svg-inline--fa fa-caret-up fa-w-10 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M288.662 352H31.338c-17.818 0-26.741-21.543-14.142-34.142l128.662-128.662c7.81-7.81 20.474-7.81 28.284 0l128.662 128.662c12.6 12.599 3.676 34.142-14.142 34.142z"></path></svg><!-- <span class="fas fa-caret-up me-1"></span> Font Awesome fontawesome.com -->13.6%</div>
                                            </div>
                                            <div class="col-auto ps-0">
                                                <div class="total-order-ecommerce" data-echarts="{&quot;series&quot;:[{&quot;type&quot;:&quot;line&quot;,&quot;data&quot;:[110,100,250,210,530,480,320,325]}],&quot;grid&quot;:{&quot;bottom&quot;:&quot;-10px&quot;}}" _echarts_instance_="ec_1640511776043" style="-webkit-tap-highlight-color: transparent; user-select: none; position: relative;"><div style="position: relative; width: 144px; height: 64px; padding: 0px; margin: 0px; border-width: 0px;"><canvas data-zr-dom-id="zr_0" width="144" height="64" style="position: absolute; left: 0px; top: 0px; width: 144px; height: 64px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div class=""></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-12">
                <div class="card py-3 mb-3">
                    <div class="card-body py-3">
                        <div class="row g-0">
                            <div class="col-6 col-md-4 border-200 border-bottom border-end pb-4">
                                <h6 class="pb-1 text-700">Orders </h6>
                                <p class="font-sans-serif lh-1 mb-1 fs-2">15,450 </p>
                                <div class="d-flex align-items-center">
                                    <h6 class="fs--1 text-500 mb-0">13,675 </h6>
                                    <h6 class="fs--2 ps-3 mb-0 text-primary"><svg class="svg-inline--fa fa-caret-up fa-w-10 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M288.662 352H31.338c-17.818 0-26.741-21.543-14.142-34.142l128.662-128.662c7.81-7.81 20.474-7.81 28.284 0l128.662 128.662c12.6 12.599 3.676 34.142-14.142 34.142z"></path></svg><!-- <span class="me-1 fas fa-caret-up"></span> Font Awesome fontawesome.com -->21.8%</h6>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 border-200 border-md-200 border-bottom border-md-end pb-4 ps-3">
                                <h6 class="pb-1 text-700">Items sold </h6>
                                <p class="font-sans-serif lh-1 mb-1 fs-2">1,054 </p>
                                <div class="d-flex align-items-center">
                                    <h6 class="fs--1 text-500 mb-0">13,675 </h6>
                                    <h6 class="fs--2 ps-3 mb-0 text-warning"><svg class="svg-inline--fa fa-caret-up fa-w-10 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M288.662 352H31.338c-17.818 0-26.741-21.543-14.142-34.142l128.662-128.662c7.81-7.81 20.474-7.81 28.284 0l128.662 128.662c12.6 12.599 3.676 34.142-14.142 34.142z"></path></svg><!-- <span class="me-1 fas fa-caret-up"></span> Font Awesome fontawesome.com -->21.8%</h6>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 border-200 border-bottom border-end border-md-end-0 pb-4 pt-4 pt-md-0 ps-md-3">
                                <h6 class="pb-1 text-700">Refunds </h6>
                                <p class="font-sans-serif lh-1 mb-1 fs-2">$145.65 </p>
                                <div class="d-flex align-items-center">
                                    <h6 class="fs--1 text-500 mb-0">13,675 </h6>
                                    <h6 class="fs--2 ps-3 mb-0 text-success"><svg class="svg-inline--fa fa-caret-up fa-w-10 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M288.662 352H31.338c-17.818 0-26.741-21.543-14.142-34.142l128.662-128.662c7.81-7.81 20.474-7.81 28.284 0l128.662 128.662c12.6 12.599 3.676 34.142-14.142 34.142z"></path></svg><!-- <span class="me-1 fas fa-caret-up"></span> Font Awesome fontawesome.com -->21.8%</h6>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 border-200 border-md-200 border-bottom border-md-bottom-0 border-md-end pt-4 pb-md-0 ps-3 ps-md-0">
                                <h6 class="pb-1 text-700">Gross sale </h6>
                                <p class="font-sans-serif lh-1 mb-1 fs-2">$100.26 </p>
                                <div class="d-flex align-items-center">
                                    <h6 class="fs--1 text-500 mb-0">$109.65 </h6>
                                    <h6 class="fs--2 ps-3 mb-0 text-danger"><svg class="svg-inline--fa fa-caret-up fa-w-10 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M288.662 352H31.338c-17.818 0-26.741-21.543-14.142-34.142l128.662-128.662c7.81-7.81 20.474-7.81 28.284 0l128.662 128.662c12.6 12.599 3.676 34.142-14.142 34.142z"></path></svg><!-- <span class="me-1 fas fa-caret-up"></span> Font Awesome fontawesome.com -->21.8%</h6>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 border-200 border-md-bottom-0 border-end pt-4 pb-md-0 ps-md-3">
                                <h6 class="pb-1 text-700">Shipping </h6>
                                <p class="font-sans-serif lh-1 mb-1 fs-2">$365.53 </p>
                                <div class="d-flex align-items-center">
                                    <h6 class="fs--1 text-500 mb-0">13,675 </h6>
                                    <h6 class="fs--2 ps-3 mb-0 text-success"><svg class="svg-inline--fa fa-caret-up fa-w-10 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M288.662 352H31.338c-17.818 0-26.741-21.543-14.142-34.142l128.662-128.662c7.81-7.81 20.474-7.81 28.284 0l128.662 128.662c12.6 12.599 3.676 34.142-14.142 34.142z"></path></svg><!-- <span class="me-1 fas fa-caret-up"></span> Font Awesome fontawesome.com -->21.8%</h6>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 pb-0 pt-4 ps-3">
                                <h6 class="pb-1 text-700">Processing </h6>
                                <p class="font-sans-serif lh-1 mb-1 fs-2">861 </p>
                                <div class="d-flex align-items-center">
                                    <h6 class="fs--1 text-500 mb-0">13,675 </h6>
                                    <h6 class="fs--2 ps-3 mb-0 text-info"><svg class="svg-inline--fa fa-caret-up fa-w-10 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M288.662 352H31.338c-17.818 0-26.741-21.543-14.142-34.142l128.662-128.662c7.81-7.81 20.474-7.81 28.284 0l128.662 128.662c12.6 12.599 3.676 34.142-14.142 34.142z"></path></svg><!-- <span class="me-1 fas fa-caret-up"></span> Font Awesome fontawesome.com -->21.8%</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="row flex-between-center g-0">
                            <div class="col-auto">
                                <h6 class="mb-0">Total Sales</h6>
                            </div>
                            <div class="col-auto d-flex">
                                <div class="form-check mb-0 d-flex">
                                    <input class="form-check-input form-check-input-primary" id="ecommerceLastMonth" type="checkbox" checked="checked">
                                    <label class="form-check-label ps-2 fs--2 text-600 mb-0" for="ecommerceLastMonth">Last Month<span class="text-dark d-none d-md-inline">: $32,502.00</span></label>
                                </div>
                                <div class="form-check mb-0 d-flex ps-0 ps-md-3">
                                    <input class="form-check-input ms-2 form-check-input-warning opacity-75" id="ecommercePrevYear" type="checkbox" checked="checked">
                                    <label class="form-check-label ps-2 fs--2 text-600 mb-0" for="ecommercePrevYear">Prev Year<span class="text-dark d-none d-md-inline">: $46,018.00</span></label>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="dropdown font-sans-serif btn-reveal-trigger">
                                    <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-total-sales-ecomm" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><svg class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--2"></span> Font Awesome fontawesome.com --></button>
                                    <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-total-sales-ecomm"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pe-xxl-0">
                        <!-- Find the JS file for the following chart at: src/js/charts/echarts/total-sales-ecommerce.js-->
                        <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
                        <div class="echart-line-total-sales-ecommerce" data-echart-responsive="true" data-options="{&quot;optionOne&quot;:&quot;ecommerceLastMonth&quot;,&quot;optionTwo&quot;:&quot;ecommercePrevYear&quot;}" _echarts_instance_="ec_1640511776040" style="-webkit-tap-highlight-color: transparent; user-select: none; position: relative;"><div style="position: relative; width: 571px; height: 298px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;"><canvas data-zr-dom-id="zr_0" width="571" height="298" style="position: absolute; left: 0px; top: 0px; width: 571px; height: 298px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div class="" style="position: absolute; display: block; border-style: solid; white-space: nowrap; z-index: 9999999; box-shadow: rgba(0, 0, 0, 0.2) 1px 2px 10px; background-color: rgb(249, 250, 253); border-width: 1px; border-radius: 4px; color: rgb(11, 23, 39); font: 14px / 21px &quot;Microsoft YaHei&quot;; padding: 7px 10px; top: 0px; left: 0px; transform: translate3d(265px, 178px, 0px); border-color: rgb(216, 226, 239); pointer-events: none; visibility: hidden; opacity: 0;"><svg class="svg-inline--fa fa-circle fa-w-16" style="color: #2c7be5;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg><!-- <span class="fas fa-circle" style="color: #2c7be5"></span> Font Awesome fontawesome.com -->
                                <span class="text-600">Last Month: 130</span><br><svg class="svg-inline--fa fa-circle fa-w-16" style="color: rgba(245,128,62, 0.6);" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg><!-- <span class="fas fa-circle" style="color: rgba(245,128,62, 0.6)"></span> Font Awesome fontawesome.com -->
                                <span class="text-600">Previous Year: 50</span></div></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-3 mb-3">
            <div class="col-xxl-3 col-md-6 col-lg-5">
                <div class="card shopping-cart-bar-min-height h-100">
                    <div class="card-header d-flex flex-between-center">
                        <h6 class="mb-0">Shopping Cart</h6>
                        <div class="dropdown font-sans-serif btn-reveal-trigger">
                            <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-shopping-cart-bar" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><svg class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--2"></span> Font Awesome fontawesome.com --></button>
                            <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-shopping-cart-bar"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body py-0 d-flex align-items-center h-100">
                        <div class="flex-1">
                            <div class="row g-0 align-items-center pb-3">
                                <div class="col pe-4">
                                    <h6 class="fs--2 text-600">Initiated</h6>
                                    <div class="progress" style="height:5px">
                                        <div class="progress-bar rounded-3 bg-primary" role="progressbar" style="width: 50% " aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-auto text-end">
                                    <p class="mb-0 text-900 font-sans-serif"><svg class="svg-inline--fa fa-caret-up fa-w-10 me-1 text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M288.662 352H31.338c-17.818 0-26.741-21.543-14.142-34.142l128.662-128.662c7.81-7.81 20.474-7.81 28.284 0l128.662 128.662c12.6 12.599 3.676 34.142-14.142 34.142z"></path></svg><!-- <span class="me-1 fas fa-caret-up text-success"></span> Font Awesome fontawesome.com -->43.6%</p>
                                    <p class="mb-0 fs--2 text-500 fw-semi-bold"> Session: <span class="text-600">6817</span> </p>
                                </div>
                            </div>
                            <div class="row g-0 align-items-center pb-3 border-top pt-3">
                                <div class="col pe-4">
                                    <h6 class="fs--2 text-600">Abandonment rate</h6>
                                    <div class="progress" style="height:5px">
                                        <div class="progress-bar rounded-3 bg-danger" role="progressbar" style="width: 25% " aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-auto text-end">
                                    <p class="mb-0 text-900 font-sans-serif"><svg class="svg-inline--fa fa-caret-up fa-w-10 me-1 text-danger" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M288.662 352H31.338c-17.818 0-26.741-21.543-14.142-34.142l128.662-128.662c7.81-7.81 20.474-7.81 28.284 0l128.662 128.662c12.6 12.599 3.676 34.142-14.142 34.142z"></path></svg><!-- <span class="me-1 fas fa-caret-up text-danger"></span> Font Awesome fontawesome.com -->13.11%</p>
                                    <p class="mb-0 fs--2 text-500 fw-semi-bold"><span class="text-600">44</span> of 61</p>
                                </div>
                            </div>
                            <div class="row g-0 align-items-center pb-3 border-top pt-3">
                                <div class="col pe-4">
                                    <h6 class="fs--2 text-600">Bounce rate</h6>
                                    <div class="progress" style="height:5px">
                                        <div class="progress-bar rounded-3 bg-primary" role="progressbar" style="width: 35% " aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-auto text-end">
                                    <p class="mb-0 text-900 font-sans-serif"><svg class="svg-inline--fa fa-caret-up fa-w-10 me-1 text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M288.662 352H31.338c-17.818 0-26.741-21.543-14.142-34.142l128.662-128.662c7.81-7.81 20.474-7.81 28.284 0l128.662 128.662c12.6 12.599 3.676 34.142-14.142 34.142z"></path></svg><!-- <span class="me-1 fas fa-caret-up text-success"></span> Font Awesome fontawesome.com -->12.11%</p>
                                    <p class="mb-0 fs--2 text-500 fw-semi-bold"><span class="text-600">8</span> of 61</p>
                                </div>
                            </div>
                            <div class="row g-0 align-items-center pb-3 border-top pt-3">
                                <div class="col pe-4">
                                    <h6 class="fs--2 text-600">Completion rate</h6>
                                    <div class="progress" style="height:5px">
                                        <div class="progress-bar rounded-3 bg-primary" role="progressbar" style="width: 43% " aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-auto text-end">
                                    <p class="mb-0 text-900 font-sans-serif"><svg class="svg-inline--fa fa-caret-down fa-w-10 me-1 text-danger" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"></path></svg><!-- <span class="me-1 fas fa-caret-down text-danger"></span> Font Awesome fontawesome.com -->43.6%</p>
                                    <p class="mb-0 fs--2 text-500 fw-semi-bold"><span class="text-600">18</span> of 179</p>
                                </div>
                            </div>
                            <div class="row g-0 align-items-center pb-3 border-top pt-3">
                                <div class="col pe-4">
                                    <h6 class="fs--2 text-600">Revenue Rate</h6>
                                    <div class="progress" style="height:5px">
                                        <div class="progress-bar rounded-3 bg-primary" role="progressbar" style="width: 60% " aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-auto text-end">
                                    <p class="mb-0 text-900 font-sans-serif"><svg class="svg-inline--fa fa-caret-up fa-w-10 me-1 text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M288.662 352H31.338c-17.818 0-26.741-21.543-14.142-34.142l128.662-128.662c7.81-7.81 20.474-7.81 28.284 0l128.662 128.662c12.6 12.599 3.676 34.142-14.142 34.142z"></path></svg><!-- <span class="me-1 fas fa-caret-up text-success"></span> Font Awesome fontawesome.com -->60.5%</p>
                                    <p class="mb-0 fs--2 text-500 fw-semi-bold"><span class="text-600">18</span> of 179</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6 col-lg-7 order-xxl-1">
                <div class="card h-100">
                    <div class="card-header bg-light py-2 d-flex flex-between-center">
                        <h6 class="mb-0">Top Products</h6>
                        <div class="d-flex"><a class="btn btn-link btn-sm me-2" href="#!">View Details</a>
                            <div class="dropdown font-sans-serif btn-reveal-trigger">
                                <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-top-products" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><svg class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--2"></span> Font Awesome fontawesome.com --></button>
                                <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-top-products"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body d-flex h-100 flex-column justify-content-end">
                        <!-- Find the JS file for the following chart at: src/js/charts/echarts/top-products.js-->
                        <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
                        <div class="echart-bar-top-products echart-bar-top-products-ecommerce" data-echart-responsive="true" _echarts_instance_="ec_1640511776038" style="-webkit-tap-highlight-color: transparent; user-select: none; position: relative;"><div style="position: relative; width: 349px; height: 378px; padding: 0px; margin: 0px; border-width: 0px;"><canvas data-zr-dom-id="zr_0" width="349" height="378" style="position: absolute; left: 0px; top: 0px; width: 349px; height: 378px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div class=""></div></div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-9 col-md-12">
                <div class="card z-index-1" id="recentPurchaseTable" data-list="{&quot;valueNames&quot;:[&quot;name&quot;,&quot;email&quot;,&quot;product&quot;,&quot;payment&quot;,&quot;amount&quot;],&quot;page&quot;:7,&quot;pagination&quot;:true}">
                    <div class="card-header">
                        <div class="row flex-between-center">
                            <div class="col-6 col-sm-auto d-flex align-items-center pe-0">
                                <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">Recent Purchases </h5>
                            </div>
                            <div class="col-6 col-sm-auto ms-auto text-end ps-0">
                                <div class="d-none" id="table-purchases-actions">
                                    <div class="d-flex">
                                        <select class="form-select form-select-sm" aria-label="Bulk actions">
                                            <option selected="">Bulk actions</option>
                                            <option value="Refund">Refund</option>
                                            <option value="Delete">Delete</option>
                                            <option value="Archive">Archive</option>
                                        </select>
                                        <button class="btn btn-falcon-default btn-sm ms-2" type="button">Apply</button>
                                    </div>
                                </div>
                                <div id="table-purchases-replace-element">
                                    <button class="btn btn-falcon-default btn-sm" type="button"><svg class="svg-inline--fa fa-plus fa-w-14" data-fa-transform="shrink-3 down-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" style="transform-origin: 0.4375em 0.625em;"><g transform="translate(224 256)"><g transform="translate(0, 64)  scale(0.8125, 0.8125)  rotate(0 0 0)"><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" transform="translate(-224 -256)"></path></g></g></svg><!-- <span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span> Font Awesome fontawesome.com --><span class="d-none d-sm-inline-block ms-1">New</span></button>
                                    <button class="btn btn-falcon-default btn-sm mx-2" type="button"><svg class="svg-inline--fa fa-filter fa-w-16" data-fa-transform="shrink-3 down-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="filter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.625em;"><g transform="translate(256 256)"><g transform="translate(0, 64)  scale(0.8125, 0.8125)  rotate(0 0 0)"><path fill="currentColor" d="M487.976 0H24.028C2.71 0-8.047 25.866 7.058 40.971L192 225.941V432c0 7.831 3.821 15.17 10.237 19.662l80 55.98C298.02 518.69 320 507.493 320 487.98V225.941l184.947-184.97C520.021 25.896 509.338 0 487.976 0z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="fas fa-filter" data-fa-transform="shrink-3 down-2"></span> Font Awesome fontawesome.com --><span class="d-none d-sm-inline-block ms-1">Filter</span></button>
                                    <button class="btn btn-falcon-default btn-sm" type="button"><svg class="svg-inline--fa fa-external-link-alt fa-w-16" data-fa-transform="shrink-3 down-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="external-link-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.625em;"><g transform="translate(256 256)"><g transform="translate(0, 64)  scale(0.8125, 0.8125)  rotate(0 0 0)"><path fill="currentColor" d="M432,320H400a16,16,0,0,0-16,16V448H64V128H208a16,16,0,0,0,16-16V80a16,16,0,0,0-16-16H48A48,48,0,0,0,0,112V464a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V336A16,16,0,0,0,432,320ZM488,0h-128c-21.37,0-32.05,25.91-17,41l35.73,35.73L135,320.37a24,24,0,0,0,0,34L157.67,377a24,24,0,0,0,34,0L435.28,133.32,471,169c15,15,41,4.5,41-17V24A24,24,0,0,0,488,0Z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="fas fa-external-link-alt" data-fa-transform="shrink-3 down-2"></span> Font Awesome fontawesome.com --><span class="d-none d-sm-inline-block ms-1">Export</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 py-0">
                        <div class="table-responsive scrollbar">
                            <table class="table table-sm fs--1 mb-0 overflow-hidden">
                                <thead class="bg-200 text-900">
                                <tr>
                                    <th class="white-space-nowrap">
                                        <div class="form-check mb-0 d-flex align-items-center">
                                            <input class="form-check-input" id="checkbox-bulk-purchases-select" type="checkbox" data-bulk-select="{&quot;body&quot;:&quot;table-purchase-body&quot;,&quot;actions&quot;:&quot;table-purchases-actions&quot;,&quot;replacedElement&quot;:&quot;table-purchases-replace-element&quot;}">
                                        </div>
                                    </th>
                                    <th class="sort pe-1 align-middle white-space-nowrap" data-sort="name">Customer</th>
                                    <th class="sort pe-1 align-middle white-space-nowrap" data-sort="email">Email</th>
                                    <th class="sort pe-1 align-middle white-space-nowrap" data-sort="product">Product</th>
                                    <th class="sort pe-1 align-middle white-space-nowrap text-center" data-sort="payment">Payment</th>
                                    <th class="sort pe-1 align-middle white-space-nowrap text-end" data-sort="amount">Amount</th>
                                    <th class="no-sort pe-1 align-middle data-table-row-action"></th>
                                </tr>
                                </thead>
                                <tbody class="list" id="table-purchase-body"><tr class="btn-reveal-trigger">
                                    <td class="align-middle" style="width: 28px;">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" id="recent-purchase-0" data-bulk-select-row="data-bulk-select-row">
                                        </div>
                                    </td>
                                    <th class="align-middle white-space-nowrap name"><a href="../app/e-commerce/customer-details.html">Sylvia Plath</a></th>
                                    <td class="align-middle white-space-nowrap email">john@gmail.com</td>
                                    <td class="align-middle white-space-nowrap product">Slick - Drag &amp; Drop Bootstrap Generator</td>
                                    <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-success">Success<svg class="svg-inline--fa fa-check fa-w-16 ms-1" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.5em;"><g transform="translate(256 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span> Font Awesome fontawesome.com --></span>
                                    </td>
                                    <td class="align-middle text-end amount">$99</td>
                                    <td class="align-middle white-space-nowrap text-end">
                                        <div class="dropstart font-sans-serif position-static d-inline-block">
                                            <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown0" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--1"></span> Font Awesome fontawesome.com --></button>
                                            <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown0"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr><tr class="btn-reveal-trigger">
                                    <td class="align-middle" style="width: 28px;">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" id="recent-purchase-1" data-bulk-select-row="data-bulk-select-row">
                                        </div>
                                    </td>
                                    <th class="align-middle white-space-nowrap name"><a href="../app/e-commerce/customer-details.html">Homer</a></th>
                                    <td class="align-middle white-space-nowrap email">sylvia@mail.ru</td>
                                    <td class="align-middle white-space-nowrap product">Bose SoundSport Wireless Headphones</td>
                                    <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-success">Success<svg class="svg-inline--fa fa-check fa-w-16 ms-1" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.5em;"><g transform="translate(256 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span> Font Awesome fontawesome.com --></span>
                                    </td>
                                    <td class="align-middle text-end amount">$634</td>
                                    <td class="align-middle white-space-nowrap text-end">
                                        <div class="dropstart font-sans-serif position-static d-inline-block">
                                            <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown1" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--1"></span> Font Awesome fontawesome.com --></button>
                                            <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown1"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr><tr class="btn-reveal-trigger">
                                    <td class="align-middle" style="width: 28px;">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" id="recent-purchase-2" data-bulk-select-row="data-bulk-select-row">
                                        </div>
                                    </td>
                                    <th class="align-middle white-space-nowrap name"><a href="../app/e-commerce/customer-details.html">Edgar Allan Poe</a></th>
                                    <td class="align-middle white-space-nowrap email">edgar@yahoo.com</td>
                                    <td class="align-middle white-space-nowrap product">All-New Fire HD 8 Kids Edition Tablet</td>
                                    <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-secondary">Blocked<svg class="svg-inline--fa fa-ban fa-w-16 ms-1" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ban" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.5em;"><g transform="translate(256 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M256 8C119.034 8 8 119.033 8 256s111.034 248 248 248 248-111.034 248-248S392.967 8 256 8zm130.108 117.892c65.448 65.448 70 165.481 20.677 235.637L150.47 105.216c70.204-49.356 170.226-44.735 235.638 20.676zM125.892 386.108c-65.448-65.448-70-165.481-20.677-235.637L361.53 406.784c-70.203 49.356-170.226 44.736-235.638-20.676z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="ms-1 fas fa-ban" data-fa-transform="shrink-2"></span> Font Awesome fontawesome.com --></span>
                                    </td>
                                    <td class="align-middle text-end amount">$199</td>
                                    <td class="align-middle white-space-nowrap text-end">
                                        <div class="dropstart font-sans-serif position-static d-inline-block">
                                            <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown2" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--1"></span> Font Awesome fontawesome.com --></button>
                                            <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr><tr class="btn-reveal-trigger">
                                    <td class="align-middle" style="width: 28px;">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" id="recent-purchase-3" data-bulk-select-row="data-bulk-select-row">
                                        </div>
                                    </td>
                                    <th class="align-middle white-space-nowrap name"><a href="../app/e-commerce/customer-details.html">William Butler Yeats</a></th>
                                    <td class="align-middle white-space-nowrap email">william@gmail.com</td>
                                    <td class="align-middle white-space-nowrap product">Apple iPhone XR (64GB)</td>
                                    <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-success">Success<svg class="svg-inline--fa fa-check fa-w-16 ms-1" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.5em;"><g transform="translate(256 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span> Font Awesome fontawesome.com --></span>
                                    </td>
                                    <td class="align-middle text-end amount">$798</td>
                                    <td class="align-middle white-space-nowrap text-end">
                                        <div class="dropstart font-sans-serif position-static d-inline-block">
                                            <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown3" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--1"></span> Font Awesome fontawesome.com --></button>
                                            <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown3"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr><tr class="btn-reveal-trigger">
                                    <td class="align-middle" style="width: 28px;">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" id="recent-purchase-4" data-bulk-select-row="data-bulk-select-row">
                                        </div>
                                    </td>
                                    <th class="align-middle white-space-nowrap name"><a href="../app/e-commerce/customer-details.html">Rabindranath Tagore</a></th>
                                    <td class="align-middle white-space-nowrap email">tagore@twitter.com</td>
                                    <td class="align-middle white-space-nowrap product">ASUS Chromebook C202SA-YS02 11.6"</td>
                                    <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-secondary">Blocked<svg class="svg-inline--fa fa-ban fa-w-16 ms-1" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ban" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.5em;"><g transform="translate(256 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M256 8C119.034 8 8 119.033 8 256s111.034 248 248 248 248-111.034 248-248S392.967 8 256 8zm130.108 117.892c65.448 65.448 70 165.481 20.677 235.637L150.47 105.216c70.204-49.356 170.226-44.735 235.638 20.676zM125.892 386.108c-65.448-65.448-70-165.481-20.677-235.637L361.53 406.784c-70.203 49.356-170.226 44.736-235.638-20.676z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="ms-1 fas fa-ban" data-fa-transform="shrink-2"></span> Font Awesome fontawesome.com --></span>
                                    </td>
                                    <td class="align-middle text-end amount">$318</td>
                                    <td class="align-middle white-space-nowrap text-end">
                                        <div class="dropstart font-sans-serif position-static d-inline-block">
                                            <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown4" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--1"></span> Font Awesome fontawesome.com --></button>
                                            <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown4"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr><tr class="btn-reveal-trigger">
                                    <td class="align-middle" style="width: 28px;">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" id="recent-purchase-5" data-bulk-select-row="data-bulk-select-row">
                                        </div>
                                    </td>
                                    <th class="align-middle white-space-nowrap name"><a href="../app/e-commerce/customer-details.html">Emily Dickinson</a></th>
                                    <td class="align-middle white-space-nowrap email">emily@gmail.com</td>
                                    <td class="align-middle white-space-nowrap product">Mirari OK to Wake! Alarm Clock &amp; Night-Light</td>
                                    <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-warning">Pending<svg class="svg-inline--fa fa-stream fa-w-16 ms-1" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="stream" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.5em;"><g transform="translate(256 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M16 128h416c8.84 0 16-7.16 16-16V48c0-8.84-7.16-16-16-16H16C7.16 32 0 39.16 0 48v64c0 8.84 7.16 16 16 16zm480 80H80c-8.84 0-16 7.16-16 16v64c0 8.84 7.16 16 16 16h416c8.84 0 16-7.16 16-16v-64c0-8.84-7.16-16-16-16zm-64 176H16c-8.84 0-16 7.16-16 16v64c0 8.84 7.16 16 16 16h416c8.84 0 16-7.16 16-16v-64c0-8.84-7.16-16-16-16z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="ms-1 fas fa-stream" data-fa-transform="shrink-2"></span> Font Awesome fontawesome.com --></span>
                                    </td>
                                    <td class="align-middle text-end amount">$11</td>
                                    <td class="align-middle white-space-nowrap text-end">
                                        <div class="dropstart font-sans-serif position-static d-inline-block">
                                            <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown5" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--1"></span> Font Awesome fontawesome.com --></button>
                                            <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown5"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr><tr class="btn-reveal-trigger">
                                    <td class="align-middle" style="width: 28px;">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" id="recent-purchase-6" data-bulk-select-row="data-bulk-select-row">
                                        </div>
                                    </td>
                                    <th class="align-middle white-space-nowrap name"><a href="../app/e-commerce/customer-details.html">Giovanni Boccaccio</a></th>
                                    <td class="align-middle white-space-nowrap email">giovanni@outlook.com</td>
                                    <td class="align-middle white-space-nowrap product">Summer Infant Contoured Changing Pad</td>
                                    <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-success">Success<svg class="svg-inline--fa fa-check fa-w-16 ms-1" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.5em;"><g transform="translate(256 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span> Font Awesome fontawesome.com --></span>
                                    </td>
                                    <td class="align-middle text-end amount">$31</td>
                                    <td class="align-middle white-space-nowrap text-end">
                                        <div class="dropstart font-sans-serif position-static d-inline-block">
                                            <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-end" type="button" id="dropdown6" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--1"></span> Font Awesome fontawesome.com --></button>
                                            <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown6"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr></tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row align-items-center">
                            <div class="pagination d-none"><li class="active"><button class="page" type="button" data-i="1" data-page="7">1</button></li><li><button class="page" type="button" data-i="2" data-page="7">2</button></li></div>
                            <div class="col">
                                <p class="mb-0 fs--1"><span class="d-none d-sm-inline-block me-2" data-list-info="data-list-info">1 to 7 of 14</span>
                                </p>
                            </div>
                            <div class="col-auto d-flex">
                                <button class="btn btn-sm btn-primary disabled" type="button" data-list-pagination="prev" disabled=""><span>Previous</span></button>
                                <button class="btn btn-sm btn-primary px-4 ms-2" type="button" data-list-pagination="next"><span>Next</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6">
                <div class="card h-100">
                    <div class="card-header bg-light">
                        <div class="row justify-content-between">
                            <div class="col-auto">
                                <h6>Returning Customer Rate</h6>
                                <div class="d-flex align-items-center">
                                    <h4 class="text-primary mb-0">$59.09%</h4><span class="badge rounded-pill ms-3 badge-soft-primary"><svg class="svg-inline--fa fa-caret-up fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M288.662 352H31.338c-17.818 0-26.741-21.543-14.142-34.142l128.662-128.662c7.81-7.81 20.474-7.81 28.284 0l128.662 128.662c12.6 12.599 3.676 34.142-14.142 34.142z"></path></svg><!-- <span class="fas fa-caret-up"></span> Font Awesome fontawesome.com --> 3.5%</span>
                                </div>
                            </div>
                            <div class="col-auto">
                                <select class="form-select form-select-sm pe-4" id="select-returning-customer-month">
                                    <option value="0">Jan</option>
                                    <option value="1">Feb</option>
                                    <option value="2">Mar</option>
                                    <option value="3">Apr</option>
                                    <option value="4">May</option>
                                    <option value="5">Jun</option>
                                    <option value="6">Jul</option>
                                    <option value="7">Aug</option>
                                    <option value="8">Sep</option>
                                    <option value="9">Oct</option>
                                    <option value="10">Nov</option>
                                    <option value="11">Dec</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Find the JS file for the following chart at: src/js/charts/echarts/returning-customer-rate.js-->
                        <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
                        <div class="echart-line-returning-customer-rate h-100" data-echart-responsive="true" data-options="{&quot;target&quot;:&quot;returning-customer-rate-footer&quot;,&quot;monthSelect&quot;:&quot;select-returning-customer-month&quot;,&quot;optionOne&quot;:&quot;newMonth&quot;,&quot;optionTwo&quot;:&quot;returningMonth&quot;}" _echarts_instance_="ec_1640511776042" style="-webkit-tap-highlight-color: transparent; user-select: none; position: relative;"><div style="position: relative; width: 349px; height: 360px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;"><canvas data-zr-dom-id="zr_0" width="349" height="360" style="position: absolute; left: 0px; top: 0px; width: 349px; height: 360px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div class="" style="position: absolute; display: block; border-style: solid; white-space: nowrap; z-index: 9999999; box-shadow: rgba(0, 0, 0, 0.2) 1px 2px 10px; background-color: rgb(249, 250, 253); border-width: 1px; border-radius: 4px; color: rgb(11, 23, 39); font: 14px / 21px &quot;Microsoft YaHei&quot;; padding: 7px 10px; top: 0px; left: 0px; transform: translate3d(-24px, 59px, 0px); border-color: rgb(216, 226, 239); pointer-events: none; visibility: hidden; opacity: 0;"><div>
                                    <p class="mb-2 text-600">
                                        January 01
                                    </p>
                                    <div class="ms-1">
                                        <h6 class="text-700"><svg class="svg-inline--fa fa-circle fa-w-16 me-1 fs--2" style="color: #2c7be5;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg><!-- <span class="fas fa-circle me-1 fs--2" style="color:#2c7be5"></span> Font Awesome fontawesome.com -->
                                            New : 60
                                        </h6>
                                    </div><div class="ms-1">
                                        <h6 class="text-700"><svg class="svg-inline--fa fa-circle fa-w-16 me-1 fs--2" style="color: #f5803e;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg><!-- <span class="fas fa-circle me-1 fs--2" style="color:#f5803e"></span> Font Awesome fontawesome.com -->
                                            Returning : 20
                                        </h6>
                                    </div>
                                </div></div></div>
                    </div>
                    <div class="card-footer border-top py-2">
                        <div class="row align-items-center gx-0" id="returning-customer-rate-footer">
                            <div class="col-auto me-2">
                                <div class="btn btn-sm btn-text d-flex align-items-center p-0 shadow-none" id="newMonth"><svg class="svg-inline--fa fa-circle fa-w-16 text-primary fs--2 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg><!-- <span class="fas fa-circle text-primary fs--2 me-1"></span> Font Awesome fontawesome.com -->New </div>
                            </div>
                            <div class="col-auto">
                                <div class="btn btn-sm btn-text d-flex align-items-center p-0 shadow-none" id="returningMonth"><svg class="svg-inline--fa fa-circle fa-w-16 text-warning fs--2 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg><!-- <span class="fas fa-circle text-warning fs--2 me-1"></span> Font Awesome fontawesome.com -->Returning </div>
                            </div>
                            <div class="col text-end"><a class="btn btn-link btn-sm px-0 fw-medium" href="#!">View report <svg class="svg-inline--fa fa-chevron-right fa-w-10 ms-1 fs--2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg><!-- <span class="fas fa-chevron-right ms-1 fs--2"></span> Font Awesome fontawesome.com --></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6">
                <div class="card h-100">
                    <div class="card-header bg-light py-2">
                        <div class="d-flex flex-between-center">
                            <h6 class="mb-0">Sales by POS location </h6><a class="btn btn-link btn-sm px-0" href="#!">View Details<svg class="svg-inline--fa fa-chevron-right fa-w-10 ms-1 fs--2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg><!-- <span class="fas fa-chevron-right ms-1 fs--2"></span> Font Awesome fontawesome.com --></a>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-4 pb-0">
                        <table class="table table-borderless font-sans-serif fw-medium fs--1">
                            <tbody>
                            <tr>
                                <td class="pb-2 pt-0"> <svg class="svg-inline--fa fa-circle fa-w-16 fs--2 me-1 text-primary" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg><!-- <span class="fas fa-circle fs--2 me-1 text-primary"></span> Font Awesome fontawesome.com -->Allocated Budget</td>
                                <td class="pb-2 pt-0 text-end">$13,325.98</td>
                                <td class="pb-2 pt-0 text-end"><svg class="svg-inline--fa fa-caret-up fa-w-10 me-1 text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M288.662 352H31.338c-17.818 0-26.741-21.543-14.142-34.142l128.662-128.662c7.81-7.81 20.474-7.81 28.284 0l128.662 128.662c12.6 12.599 3.676 34.142-14.142 34.142z"></path></svg><!-- <span class="me-1 fas fa-caret-up text-success"></span> Font Awesome fontawesome.com -->10%</td>
                            </tr>
                            <tr>
                                <td class="pb-2 pt-0"> <svg class="svg-inline--fa fa-circle fa-w-16 fs--2 me-1 text-warning" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg><!-- <span class="fas fa-circle fs--2 me-1 text-warning"></span> Font Awesome fontawesome.com -->Actual Spending</td>
                                <td class="pb-2 pt-0 text-end">$12,348.46</td>
                                <td class="pb-2 pt-0 text-end"><svg class="svg-inline--fa fa-caret-down fa-w-10 me-1 text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"></path></svg><!-- <span class="me-1 fas fa-caret-down text-success"></span> Font Awesome fontawesome.com -->13%</td>
                            </tr>
                            </tbody>
                        </table>
                        <!-- Find the JS file for the following chart at: src/js/charts/echarts/sales-by-pos-location.js-->
                        <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
                        <div class="echart-radar-sales-by-pos-location h-100 px-md-2 mt-md-5" data-echart-responsive="true" _echarts_instance_="ec_1640511776041" style="-webkit-tap-highlight-color: transparent; user-select: none; position: relative;"><div style="position: relative; width: 373px; height: 352px; padding: 0px; margin: 0px; border-width: 0px;"><canvas data-zr-dom-id="zr_0" width="373" height="352" style="position: absolute; left: 0px; top: 0px; width: 373px; height: 352px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div class=""></div></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card h-lg-100 overflow-hidden">
                    <div class="card-body p-0">
                        <div class="table-responsive scrollbar">
                            <table class="table table-dashboard mb-0 table-borderless fs--1 border-200">
                                <thead class="bg-light">
                                <tr class="text-900">
                                    <th>Best Selling Products</th>
                                    <th class="text-center">Orders(269)</th>
                                    <th class="text-center">Order(%)</th>
                                    <th class="text-end">Revenue</th>
                                    <th class="pe-card text-end" style="width: 8rem">Revenue (%)</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="border-bottom border-200">
                                    <td>
                                        <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="../assets/img/ecommerce/1.jpg" width="60" alt="">
                                            <div class="flex-1 ms-3">
                                                <h6 class="mb-1 fw-semi-bold text-nowrap"><a class="text-900 stretched-link" href="#!">iPad Pro 2020 11</a></h6>
                                                <p class="fw-semi-bold mb-0 text-500">Tablet</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center fw-semi-bold">26</td>
                                    <td class="align-middle text-center fw-semi-bold">$31%</td>
                                    <td class="align-middle text-end fw-semi-bold">$1311</td>
                                    <td class="align-middle pe-card">
                                        <div class="d-flex align-items-center">
                                            <div class="progress me-3 rounded-3 bg-200" style="height: 5px;width:80px">
                                                <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 41%;" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="fw-semi-bold ms-2">41%</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-bottom border-200">
                                    <td>
                                        <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="../assets/img/ecommerce/2.jpg" width="60" alt="">
                                            <div class="flex-1 ms-3">
                                                <h6 class="mb-1 fw-semi-bold text-nowrap"><a class="text-900 stretched-link" href="#!">iPhone XS</a></h6>
                                                <p class="fw-semi-bold mb-0 text-500">Smartphone</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center fw-semi-bold">18</td>
                                    <td class="align-middle text-center fw-semi-bold">$29%</td>
                                    <td class="align-middle text-end fw-semi-bold">$1311</td>
                                    <td class="align-middle pe-card">
                                        <div class="d-flex align-items-center">
                                            <div class="progress me-3 rounded-3 bg-200" style="height: 5px;width:80px">
                                                <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 41%;" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="fw-semi-bold ms-2">41%</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-bottom border-200">
                                    <td>
                                        <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="../assets/img/ecommerce/3.jpg" width="60" alt="">
                                            <div class="flex-1 ms-3">
                                                <h6 class="mb-1 fw-semi-bold text-nowrap"><a class="text-900 stretched-link" href="#!">Amazfit Pace (Global)</a></h6>
                                                <p class="fw-semi-bold mb-0 text-500">Smartwatch</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center fw-semi-bold">16</td>
                                    <td class="align-middle text-center fw-semi-bold">$27%</td>
                                    <td class="align-middle text-end fw-semi-bold">$539</td>
                                    <td class="align-middle pe-card">
                                        <div class="d-flex align-items-center">
                                            <div class="progress me-3 rounded-3 bg-200" style="height: 5px;width:80px">
                                                <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 27%;" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="fw-semi-bold ms-2">27%</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-bottom border-200">
                                    <td>
                                        <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="../assets/img/ecommerce/4.jpg" width="60" alt="">
                                            <div class="flex-1 ms-3">
                                                <h6 class="mb-1 fw-semi-bold text-nowrap"><a class="text-900 stretched-link" href="#!">Lotto AMF Posh Sports Plus</a></h6>
                                                <p class="fw-semi-bold mb-0 text-500">Shoes</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center fw-semi-bold">11</td>
                                    <td class="align-middle text-center fw-semi-bold">$21%</td>
                                    <td class="align-middle text-end fw-semi-bold">$245</td>
                                    <td class="align-middle pe-card">
                                        <div class="d-flex align-items-center">
                                            <div class="progress me-3 rounded-3 bg-200" style="height: 5px;width:80px">
                                                <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 17%;" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="fw-semi-bold ms-2">17%</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-bottom border-200">
                                    <td>
                                        <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="../assets/img/ecommerce/5.jpg" width="60" alt="">
                                            <div class="flex-1 ms-3">
                                                <h6 class="mb-1 fw-semi-bold text-nowrap"><a class="text-900 stretched-link" href="#!">Casual Long Sleeve Hoodie</a></h6>
                                                <p class="fw-semi-bold mb-0 text-500">Jacket</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center fw-semi-bold">10</td>
                                    <td class="align-middle text-center fw-semi-bold">$19%</td>
                                    <td class="align-middle text-end fw-semi-bold">$234</td>
                                    <td class="align-middle pe-card">
                                        <div class="d-flex align-items-center">
                                            <div class="progress me-3 rounded-3 bg-200" style="height: 5px;width:80px">
                                                <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 7%;" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="fw-semi-bold ms-2">7%</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-bottom border-200">
                                    <td>
                                        <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="../assets/img/ecommerce/6.jpg" width="60" alt="">
                                            <div class="flex-1 ms-3">
                                                <h6 class="mb-1 fw-semi-bold text-nowrap"><a class="text-900 stretched-link" href="#!">Playstation 4 1TB Slim</a></h6>
                                                <p class="fw-semi-bold mb-0 text-500">Console</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center fw-semi-bold">10</td>
                                    <td class="align-middle text-center fw-semi-bold">$19%</td>
                                    <td class="align-middle text-end fw-semi-bold">$234</td>
                                    <td class="align-middle pe-card">
                                        <div class="d-flex align-items-center">
                                            <div class="progress me-3 rounded-3 bg-200" style="height: 5px;width:80px">
                                                <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 7%;" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="fw-semi-bold ms-2">7%</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="../assets/img/ecommerce/7.jpg" width="60" alt="">
                                            <div class="flex-1 ms-3">
                                                <h6 class="mb-1 fw-semi-bold text-nowrap"><a class="text-900 stretched-link" href="#!">SUNGAIT Lightweight Sunglass</a></h6>
                                                <p class="fw-semi-bold mb-0 text-500">Jacket</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center fw-semi-bold">10</td>
                                    <td class="align-middle text-center fw-semi-bold">$19%</td>
                                    <td class="align-middle text-end fw-semi-bold">$234</td>
                                    <td class="align-middle pe-card">
                                        <div class="d-flex align-items-center">
                                            <div class="progress me-3 rounded-3 bg-200" style="height: 5px;width:80px">
                                                <div class="progress-bar bg-primary rounded-pill" role="progressbar" style="width: 7%;" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="fw-semi-bold ms-2">7%</div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer bg-light py-2">
                        <div class="row flex-between-center">
                            <div class="col-auto">
                                <select class="form-select form-select-sm">
                                    <option>Last 7 days</option>
                                    <option>Last Month</option>
                                    <option>Last Year</option>
                                </select>
                            </div>
                            <div class="col-auto"><a class="btn btn-sm btn-falcon-default" href="#!">View All</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
