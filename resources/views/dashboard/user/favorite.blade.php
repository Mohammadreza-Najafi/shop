@extends("dashboard.user.layouts.app")
@section("content")

    <div class="card">
    <div class="table-responsive scrollbar">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Name</th>

                <th class="text-end" scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="text-nowrap">

                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-2xl">
                            <img class="rounded-circle" src="../../assets/img/team/4.jpg" alt="">
                        </div>
                        <div class="ms-2">Ricky Antony</div>
                    </div>

                </td>
                <td class="text-end">
                    <div>
                        <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Emma Watson</td>
                <td class="text-end">
                    <div>
                        <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Rowen Atkinson</td>
                <td class="text-end">
                    <div>
                        <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Antony Hopkins</td>
                <td class="text-end">
                    <div>
                        <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Jennifer Schramm</td>
                <td class="text-end">
                    <div>
                        <button class="btn p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="text-500 fas fa-trash-alt"></span></button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    </div>
@endsection

