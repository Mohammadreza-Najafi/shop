@extends("dashboard.user.layouts.app")
@section("content")

        <div class="content">

          <div class="card mb-3">

            <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(../../../assets/img/icons/spot-illustrations/corner-4.png);opacity: 0.7;">
            </div>
            <!--/.bg-holder-->

            <div class="card-body position-relative">

              <h5>Order Details: #{{$track->id}}</h5>
              <p class="fs--1">April 21, 2019, 5:33 PM</p>
              <div>
                  <strong class="me-2">Status: </strong>
                <div class="badge rounded-pill badge-soft-success fs--2">Completed<span class="fas fa-check ms-1" data-fa-transform="shrink-2"></span></div>
              </div>

            </div>

          </div>

          <div class="card mb-3">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                  <h5 class="mb-3 fs-0">Billing Address</h5>
                  <h6 class="mb-2">Antony Hopkins</h6>
                  <p class="mb-1 fs--1">2393 Main Avenue<br />Penasauka, New Jersey 87896</p>
                  <p class="mb-0 fs--1"> <strong>Email: </strong><a href="mailto:ricky@gmail.com">antony@example.com</a></p>
                  <p class="mb-0 fs--1"> <strong>Phone: </strong><a href="tel:7897987987">7897987987</a></p>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                  <h5 class="mb-3 fs-0">Shipping Address</h5>
                  <h6 class="mb-2">Antony Hopkins</h6>
                  <p class="mb-0 fs--1">2393 Main Avenue<br />Penasauka, New Jersey 87896</p>
                  <div class="text-500 fs--1">(Free Shipping)</div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <h5 class="mb-3 fs-0">Payment Method</h5>
                  <div class="d-flex"><img class="me-3" src="../../../assets/img/icons/visa.png" width="40" height="30" alt="" />
                    <div class="flex-1">
                      <h6 class="mb-0">Antony Hopkins</h6>
                      <p class="mb-0 fs--1">**** **** **** 9809</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3">

            <div class="card-body">
              <div class="table-responsive fs--1">
                <table class="table table-striped border-bottom">
                  <thead class="bg-200 text-900">
                    <tr>
                      <th class="border-0">Products</th>
                      <th class="border-0 text-center">Quantity</th>
                      <th class="border-0 text-end">Rate</th>
                      <th class="border-0 text-end">Amount</th>
                    </tr>
                  </thead>
                  <tbody>

                  @php
                    $items=json_decode($track->item);
                  @endphp

                  @foreach($items as $item)
                      @php
                        $product=\App\Models\Product::query()->find($item->id);
                      @endphp
                      <tr class="border-200">
                          <td class="align-middle">
                              <h6 class="mb-0 text-nowrap">{{$product->name}}</h6>
                              <p class="mb-0">Down 35mb, Up 100mb</p>
                          </td>
                          <td class="align-middle text-center">{{$item->count}}</td>
                          <td class="align-middle text-end">${{$product->price}}</td>
                          <td class="align-middle text-end">${{$product->price*$item->count}}</td>
                      </tr>
                  @endforeach

                  </tbody>
                </table>
              </div>

              <div class="row g-0 justify-content-end">
                <div class="col-auto">
                  <table class="table table-sm table-borderless fs--1 text-end">
                    <tr>
                      <th class="text-900">Subtotal:</th>
                      <td class="fw-semi-bold">$6,230.00 </td>
                    </tr>
                    <tr>
                      <th class="text-900">Tax 5%:</th>
                      <td class="fw-semi-bold">$311.50</td>
                    </tr>
                    <tr class="border-top">
                      <th class="text-900">Total:</th>
                      <td class="fw-semi-bold">$6541.50</td>
                    </tr>
                  </table>
                </div>
              </div>

            </div>

          </div>


        </div>

@endsection
