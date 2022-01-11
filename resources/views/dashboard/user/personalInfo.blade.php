@extends("dashboard.user.layouts.app")
@section("content")
<div class="card">
    <div class="table-responsive scrollbar">
        <table class="table table-bordered overflow-hidden">
            <colgroup>
                <col class="bg-soft-primary" />
                <col />
                <col />
            </colgroup>

            <tbody>

            <tr class="btn-reveal-trigger">
                <td>Name</td>

                <td>{{$info->name}}</td>

                <td class="text-end">
                    <div class="dropdown font-sans-serif position-static">
                        <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                        <div class="dropdown-menu dropdown-menu-end border py-0">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Edit</a></div>
                        </div>
                    </div>
                </td>

            </tr>

            <tr class="btn-reveal-trigger">
                <td>Email</td>
                <td>{{$info->email}}</td>
                <td class="text-end">
                    <div class="dropdown font-sans-serif position-static">
                        <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                        <div class="dropdown-menu dropdown-menu-end border py-0">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Edit</a></div>
                        </div>
                    </div>
                </td>
            </tr>

            <tr class="btn-reveal-trigger">
                <td>Phone</td>
                <td>{{$info->phone_number}}</td>
                <td class="text-end">
                    <div class="dropdown font-sans-serif position-static">
                        <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
                        <div class="dropdown-menu dropdown-menu-end border py-0">
                            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Edit</a></div>
                        </div>
                    </div>
                </td>
            </tr>

            </tbody>
        </table>
    </div>
</div>
@endsection
