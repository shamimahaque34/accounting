@extends('backend.master')

@section('title')
   Manage Items Info
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Companies  Info', 'child' => 'Manage'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize float-start">Manage Item</h4>
                    <a href="{{ route('items.create') }}" class="btn btn-success float-end">
                        New Item
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>Name</th>
                                <th>Sku</th>
                                <th>Description</th>
                                <th>Sale Price</th>
                                <th>Purchase Price</th>
                                <th>Quantity</th>
                                <th>Category</th>
                                <th>Tax</th>
                                <th>Action</th>
                                <a href="{{ route('items-export')}}" class="btn btn-primary btn-sm ms-2">Export</a>
                                        <a href="{{ route('import')}}" class="btn btn-success btn-sm ms-2">Import</a>
                                        
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($items as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name}}</td>
                                    <td>{{ $item->sku}}</td>
                                    <td>{{ $item->description}}</td>
                                    <td>{{ $item->sale_price}}</td>
                                    <td>{{ $item->purchase_price}}</td>
                                    <td>{{ $item->quantity}}</td>
                                    <td>{{ $item->category->name ?? ''}}</td>
                                    <td>{{ $item->tax->name ?? ''}}</td>

                                   
                                    <td>
                                        <div class=d-flex>
                                        
                                      
                                        <a href="{{ route('items.edit',  $item->id) }}" class="btn btn-info btn-sm ms-2"><i class="dripicons-document-edit"></i></a>

                                       
                                        <a class="btn btn-info btn-sm ms-2" title="View Item Detail" href="{{ route('downloadPDF', $item->id) }} ">Download</a> 
                                        <a class="btn btn-primary btn-sm ms-2" title="View Item Detail" href="{{ route('items.show', $item->id) }} ">Show</a> 


                                     

                                          
                                <form action="{{ route('items.destroy', $item->id) }}" method="post" style="display: inline-block" onsubmit="return confirm('Are you sure to delete this Item?');">
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

