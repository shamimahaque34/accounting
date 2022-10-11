@extends('backend.master')

@section('title')
   Manage Roles Info
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Roles  Info', 'child' => 'Manage'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize float-start">Manage Role </h4>
                    <a href="{{ route('roles.create') }}" class="btn btn-success float-end">
                        Add Role
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>Role Title</th>
                                <th>Role Permissions</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($roles as $role)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $role->title}}</td>
                                    <td>
                                         @foreach($role->permissions as $permission)
                                        <span class="badge bg-primary">{{ $permission->title }}</span>
                                         @endforeach
                                </td>
                                    <td>
                                        <div class=d-flex>
                                        
                                      
                                        <a href="{{ route('roles.edit',  $role->id) }}" class="btn btn-info btn-sm ms-2"><i class="dripicons-document-edit"></i></a>
                                     

                                          
                                <form action="{{ route('roles.destroy', $role->id) }}" method="post" style="display: inline-block" onsubmit="return confirm('Are you sure to delete this Role?');">
                                             @csrf
                                          @method('delete')
                                  <button type="submit" class="btn btn-danger btn-sm ms-2 ">
                                                                                                <i class="dripicons-trash"></i>
                                         </button>
                                     </form>
                                    
                                       
                                    </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

