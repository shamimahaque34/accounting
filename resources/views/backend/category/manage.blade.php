@extends('backend.master')

@section('title')
   Manage Categories Info
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Companies  Info', 'child' => 'Manage'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize float-start">Manage Category</h4>
                    <a href="{{ route('categories.create') }}" class="btn btn-success float-end">
                        New Category
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Color</th>
                                <th>Action</th>
                                <a href="{{ route('categories-export')}}" class="btn btn-primary btn-sm ms-2">Export</a>
                                        <a href="{{ route('category-import')}}" class="btn btn-success btn-sm ms-2">Import</a>
                            </tr>
                            </thead>
                            <tbody>


                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $category->name}}</td>
                                    <td>{{ $category->type}}</td>
                                    <td>{{ $category->color}}</td>
                                    <td>
                                        <div class=d-flex>
                                        
                                      
                                        <a href="{{ route('categories.edit',  $category->id) }}" class="btn btn-info btn-sm ms-2"><i class="dripicons-document-edit"></i></a>
                                        <a class="btn btn-info btn-sm ms-2" title="View Category Detail" href="{{ route('categorydownloadPDF', $category->id) }} ">Download</a> 
                                        <a class="btn btn-primary btn-sm ms-2" title="View Category Detail" href="{{ route('categories.show', $category->id) }} ">Show</a> 

                                     

                                          
                                <form action="{{ route('categories.destroy', $category->id) }}" method="post" style="display: inline-block" onsubmit="return confirm('Are you sure to delete this Category?');">
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

