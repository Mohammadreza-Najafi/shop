@extends("dashboard.admin.layouts.app")
@section("content")
<div class="card">
<div class="table-responsive scrollbar">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">discount code</th>
          <th scope="col">amunt</th>
          <th scope="col">limit usage</th>
          <th scope="col">limit price</th>
          <th class="text-end" scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        
        @foreach ($discountCodes as $discountCode)
        <tr>
            <td>{{$discountCode->discount_code}}</td>
            <td>{{$discountCode->amount}}</td>
            <td>{{$discountCode->discountCode}}</td>
            <td>{{$discountCode->discountCode}}</td>
            <td class="text-end">
              <div>
                <button class="btn p-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></button>
                <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
              </div>
            </td>
          </tr>
        @endforeach
        

        <tr>
          <td>Emma Watson</td>
          <td>emma@example.com</td>
          <td class="text-end">
            <div>
              <button class="btn p-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></button>
              <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
            </div>
          </td>
        </tr>

        <tr>
          <td>Rowen Atkinson</td>
          <td>rown@example.com</td>
          <td class="text-end">
            <div>
              <button class="btn p-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></button>
              <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
            </div>
          </td>
        </tr>

        <tr>
          <td>Antony Hopkins</td>
          <td>antony@example.com</td>
          <td class="text-end">
            <div>
              <button class="btn p-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></button>
              <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
            </div>
          </td>
        </tr>

        <tr>
          <td>Jennifer Schramm</td>
          <td>jennifer@example.com</td>
          <td class="text-end">
            <div>
              <button class="btn p-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="text-500 fas fa-edit"></span></button>
              <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
            </div>
          </td>
        </tr>

      </tbody>

    </table>
  </div>
</div>
@endsection