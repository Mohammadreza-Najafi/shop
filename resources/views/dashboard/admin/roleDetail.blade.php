@extends("dashboard.admin.layouts.app")
@section("content")
    <div class="card mb-3" id="customersTable" data-list="{&quot;valueNames&quot;:[&quot;name&quot;,&quot;email&quot;,&quot;phone&quot;,&quot;address&quot;,&quot;joined&quot;],&quot;page&quot;:10,&quot;pagination&quot;:true}">
        <div class="card-header">
            <div class="row flex-between-center">
                <div class="col-4 col-sm-auto d-flex align-items-center pe-0">
                    <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">Roles</h5>
                </div>
                <div class="col-8 col-sm-auto text-end ps-2">

                    <div class="d-none" id="table-customers-actions">
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

                    <div id="table-customers-replace-element">

                        <button class="btn btn-falcon-default btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#createUserModal">
                            <svg class="svg-inline--fa fa-plus fa-w-14" data-fa-transform="shrink-3 down-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" style="transform-origin: 0.4375em 0.625em;">
                                <g transform="translate(224 256)">
                                    <g transform="translate(0, 64)  scale(0.8125, 0.8125)  rotate(0 0 0)">
                                        <path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" transform="translate(-224 -256)"></path>
                                    </g>
                                </g>
                            </svg><!-- <span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span> Font Awesome fontawesome.com --><span class="d-none d-sm-inline-block ms-1">New</span>
                        </button>

                        <div class="modal fade" id="createUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content border-0">

                                    <div class="modal-header bg-card-gradient light">
                                        <h5 class="modal-title text-white" id="exampleModalLabel">Create new User</h5>
                                        <button class="btn-close btn-close-white text-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">
                                        <form action="{{route('user.create')}}" method="post">
                                            @csrf                                                             
                                           
                                            <div class="mb-3">
                                                <label for="name">Name</label>
                                                <input class="form-control" id="name" name="name" type="text">
                                            </div>

                                            <div class="mb-3">
                                                <label for="emailModal">Email</label>
                                                <input class="form-control" id="emailModal" name="email" type="email">
                                            </div>

                                            <div class="mb-3">
                                                <label for="emailModal">phone</label>
                                                <input class="form-control" id="emailModal" name="phone"  type="text">
                                            </div>

                                            <div class="mb-3">
                                                <label for="emailModal">password</label>
                                                <input class="form-control" id="emailModal" name="password" type="password">
                                            </div>

                                            <div class="mb-3">
                                                <label for="emailModal">password confirm</label>
                                                <input class="form-control" id="emailModal"  name="password_confirmation" type="password">
                                            </div>


                                             {{-- <button class="btn btn-primary btn-sm px-4" type="submit">
                                            <!-- <span class="fas fa-paper-plane me-2" aria-hidden="true"> </span> Font Awesome fontawesome.com -->Create User
                                        </button> --}}
                                        <input type="submit">
                                        </form>

                                       
                                    </div>

                                </div>

                            </div>
                        </div>

                   
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body p-0">

            <div class="table-responsive">

                <table class="table table-sm table-striped fs--1 mb-0 overflow-hidden">


                    <thead class="bg-200 text-900">
                    <tr>

                        <th>
                            <div class="form-check fs-0 mb-0 d-flex align-items-center">
                                <input class="form-check-input" id="checkbox-bulk-customers-select" type="checkbox" data-bulk-select="{&quot;body&quot;:&quot;table-customers-body&quot;,&quot;actions&quot;:&quot;table-customers-actions&quot;,&quot;replacedElement&quot;:&quot;table-customers-replace-element&quot;}">
                            </div>
                        </th>

                        <th class="sort pe-1 align-middle white-space-nowrap" data-sort="name">Role</th>
                        <th class=" pe-1 align-middle white-space-nowrap" data-sort="email"></th>
                        <th class=" pe-1 align-middle white-space-nowrap" data-sort="email"></th>
                        <th class=" pe-1 align-middle white-space-nowrap" data-sort="phone"></th>
                        <th class=" pe-1 align-middle white-space-nowrap ps-5" data-sort="address" style="min-width: 200px;"></th>

                        <th class="align-middle no-sort"></th>
                    </tr>
                    </thead>


                    
                    <tbody class="list" id="table-customers-body">

                    @foreach($roles as $key =>$role)

                        <tr class="btn-reveal-trigger">

                            <td class="align-middle py-2" style="width: 28px;">
                                <div class="form-check fs-0 mb-0 d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" id="customer-0" data-bulk-select-row="data-bulk-select-row">
                                </div>
                            </td>
                            
                            <td class="name align-middle white-space-nowrap py-2">{{$role->name}}</td>
                            <td class="name align-middle py-2"></td>
                            <td class="email align-middle py-2"></td>
                            <td class="phone align-middle white-space-nowrap py-2"></td>
                            <td class="address align-middle white-space-nowrap ps-5 py-2"></td>
                            <td class="align-middle white-space-nowrap py-2 text-end">

                                <div class="dropdown font-sans-serif position-static">

                                    <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" id="customer-dropdown-0" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"><svg class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--1"></span> Font Awesome fontawesome.com --></button>


                                    <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="customer-dropdown-0">
                                        
                                        <div class="bg-white py-2">
                                          
                                            <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editUserModal_{{$key+1}}" type="button">Edit</button>

                                                  
                                                    <form  method="post"  action="{{route("user.delete")}}">
                                                        @method("DELETE")
                                                        @csrf
                                                        <button class="dropdown-item text-danger" type="submit">Delete</button>
                                                    </form>
                                         </div> 

                                        </div>

                                        <div class="modal" id="editUserModal_{{$key+1}}" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content border-0">
                
                                                    <div class="modal-header bg-card-gradient light">
                                                        <h5 class="modal-title text-white" id="exampleModalLabel">Edit User</h5>
                                                        <button class="btn-close btn-close-white text-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                
                                                    <div class="modal-body">


                                                        {{-- <form action="{{ route('user.update', ['id'=>$user->id]) }}" method="post">
                                                            @method("PUT")
                                                            @csrf                                                            
                                                            <div class="mb-3">
                                                                <label for="name">Name</label>
                                                                <input class="form-control" id="name" name="name" type="text" value="{{$user->name}}">
                                                            </div>
                
                                                            <div class="mb-3">
                                                                <label for="emailModal">Email</label>
                                                                <input class="form-control" id="emailModal" name="email" type="email" value="{{$user->email}}">
                                                            </div>
                
                                                            <div class="mb-3">
                                                                <label for="emailModal">phone</label>
                                                                <input class="form-control" id="emailModal" name="phone"  type="text" value="{{$user->phone_number}}">
                                                            </div>
                                                            
                                                            <div class="mb-3">
                                                                <label for="emailModal">new password</label>
                                                                <input class="form-control" id="emailModal" name="password" type="password">
                                                            </div>
                
                                                            <div class="mb-3">
                                                                <label for="emailModal">password confirm</label>
                                                                <input class="form-control" id="emailModal"  name="password_confirmation" type="password">
                                                            </div> --}}
                
                
                                                             {{-- <button class="btn btn-primary btn-sm px-4" type="submit">
                                                            <!-- <span class="fas fa-paper-plane me-2" aria-hidden="true"> </span> Font Awesome fontawesome.com -->Create User
                                                        </button> --}}
                                                        {{-- <input type="submit">
                                                        </form>  --}}
                
                                                       
                                                    </div>
                
                                                </div>
                
                                            </div>
                                        {{-- </div> --}} 
                                    </div>
                                  
                                </div>
                            </td>
                            
                            
                        </tr>
                      
                    @endforeach


                    </tbody>


                </table>


            </div>
        </div>


        <div class="card-footer d-flex align-items-center justify-content-center">
            <button class="btn btn-sm btn-falcon-default me-1 disabled" type="button" title="Previous" data-list-pagination="prev" disabled=""><svg class="svg-inline--fa fa-chevron-left fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg><!-- <span class="fas fa-chevron-left"></span> Font Awesome fontawesome.com --></button>
            <ul class="pagination mb-0"><li class="active"><button class="page" type="button" data-i="1" data-page="10">1</button></li><li><button class="page" type="button" data-i="2" data-page="10">2</button></li><li><button class="page" type="button" data-i="3" data-page="10">3</button></li></ul>
            <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next"><svg class="svg-inline--fa fa-chevron-right fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg><!-- <span class="fas fa-chevron-right"></span> Font Awesome fontawesome.com --></button>
        </div>
    </div>
@endsection
