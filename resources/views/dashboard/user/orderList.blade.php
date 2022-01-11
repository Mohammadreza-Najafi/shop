@extends("dashboard.user.layouts.app")
@section("content")
    <div class="card mb-3" id="ordersTable" data-list='{"valueNames":["order","date","address","status","amount"],"page":10,"pagination":true}'>
            <div class="card-header">
              <div class="row flex-between-center">
                <div class="col-4 col-sm-auto d-flex align-items-center pe-0">
                  <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">Orders</h5>
                </div>
              </div>
            </div>

            <div class="card-body p-0">
              <div class="table-responsive scrollbar">

                <table class="table table-sm table-striped fs--1 mb-0 overflow-hidden">

                  <thead class="bg-200 text-900">
                    <tr>
                      <th>
                        <div class="form-check fs-0 mb-0 d-flex align-items-center">
{{--                          <input class="form-check-input" id="checkbox-bulk-customers-select" type="checkbox" data-bulk-select='{"body":"table-orders-body","actions":"orders-bulk-actions","replacedElement":"orders-actions"}' />--}}
                        </div>
                      </th>
                      <th class="sort pe-1 align-middle white-space-nowrap" data-sort="order">Order</th>
                      <th class="sort pe-1 align-middle white-space-nowrap pe-7" data-sort="date">Date</th>
                      <th class="sort pe-1 align-middle white-space-nowrap" data-sort="address" style="min-width: 12.5rem;">Ship To</th>
                      <th class="sort pe-1 align-middle white-space-nowrap text-center" data-sort="status">Status</th>
                      <th class="sort pe-1 align-middle white-space-nowrap text-end" data-sort="amount">Amount</th>
                      <th class="no-sort"></th>
                    </tr>
                  </thead>

                  <tbody class="list" id="table-orders-body">

                  @foreach($tracks as $track)
                      <tr class="btn-reveal-trigger">

                          <td class="align-middle" style="width: 28px;"></td>

                          <td class="order py-2 align-middle white-space-nowrap">
                              <a href="{{url("/profile/order/".$track->id)}}"> <strong>#{{$track->id}}</strong></a> by <strong>Kin Rossow</strong><br />
                          </td>

                          <td class="date py-2 align-middle">{{$track->created_at}}</td>

                          <td class="address py-2 align-middle white-space-nowrap">Kin Rossow, 1 Hollywood Blvd,Beverly Hills, California 90210
                              <p class="mb-0 text-500">Via Free Shipping</p>
                          </td>

                          @switch($track->status)
                              @case("success")
                              <td class="status py-2 align-middle text-center fs-0 white-space-nowrap">
                                  <span class="badge badge rounded-pill d-block badge-soft-success">Completed
                                      <svg class="svg-inline--fa fa-check fa-w-16 ms-1" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.5em;"><g transform="translate(256 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span> Font Awesome fontawesome.com --></span>
                              </td>
                              @break
                          @endswitch

                          <td class="amount py-2 align-middle text-end fs-0 fw-medium">$120</td>

                          <td class="py-2 align-middle white-space-nowrap text-end"></td>

                      </tr>
                  @endforeach


                  </tbody>

                </table>


              </div>
            </div>

            <div class="card-footer">
              <div class="d-flex align-items-center justify-content-center">
                <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                <ul class="pagination mb-0"></ul>
                <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next"><span class="fas fa-chevron-right">             </span></button>
              </div>
            </div>
          </div>

@endsection



