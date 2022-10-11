@extends('backend.master')

@section('title')
   Manage Permissions Info
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Permissions  Info', 'child' => 'Manage'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize float-start">Manage Permission </h4>
                    <a href="{{ route('permissions.create') }}" class="btn btn-success float-end">
                        Add Permission
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>Permission Title</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($permissions as $permission)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $permission->title}}</td>
                                    <td>
                                        <div class=d-flex>
                                            
                                        <a href="{{ route('permissions.edit',  $permission->id) }}" class="btn btn-info btn-sm ms-2"><i class="dripicons-document-edit"></i></a>
                                
                                          
                                <form action="{{ route('permissions.destroy', $permission->id) }}" method="post" style="display: inline-block" onsubmit="return confirm('Are you sure to delete this Permission?');">
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

