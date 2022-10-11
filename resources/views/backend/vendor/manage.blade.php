@extends('backend.master')

@section('title')
   Manage Vendors Info
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Companies  Info', 'child' => 'Manage'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize float-start">Manage Vendor</h4>
                    <a href="{{ route('vendors.create') }}" class="btn btn-success float-end">
                        New Vendor
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Image</th>
                                <th>Website</th>
                                <th>Reference</th>
                                <th>Tax Number</th>
                                <th>Currency</th>
                                <th>Address</th>
                                <th>Town</th>
                                <th>Postal Code</th>
                                <th>State</th>
                                <th>Country</th>
                                <th>Action</th>
                                <a href="{{ route('vendors-export')}}" class="btn btn-primary btn-sm ms-2">Export</a>
                                        <a href="{{ route('tax-import')}}" class="btn btn-success btn-sm ms-2">Import</a>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($vendors as $vendor)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $vendor->name}}</td>
                                    <td>{{ $vendor->email}}</td>
                                    <td>{{ $vendor->phone}}</td>
                                    <td><img src="{{asset($vendor->image)}}" alt="" height="60" width="80"/></td>
                                    <td>{{ $vendor->website}}</td>
                                    <td>{{ $vendor->reference}}</td>
                                    <td>{{ $vendor->tax_number}}</td>
                                    <td>{{ $vendor->currency->name ?? ''}}</td>
                                    <td>{{ $vendor->address}}</td>
                                    <td>{{ $vendor->town}}</td>
                                    <td>{{ $vendor->postal_code}}</td>
                                    <td>{{ $vendor->state}}</td>
                                    <td>{{ $vendor->country}}</td>
                                    <td>
                                        <div class=d-flex>
                                        
                                      
                                        <a href="{{ route('vendors.edit',  $vendor->id) }}" class="btn btn-info btn-sm ms-2"><i class="dripicons-document-edit"></i></a>

                                        <a class="btn btn-info btn-sm ms-2" title="View Item Detail" href="{{ route('vendordownloadPDF', $vendor->id) }} ">Download</a> 
                                        <a class="btn btn-primary btn-sm ms-2" title="View Item Detail" href="{{ route('vendors.show', $vendor->id) }} ">Show</a> 
                                     

                                          
                                <form action="{{ route('vendors.destroy', $vendor->id) }}" method="post" style="display: inline-block" onsubmit="return confirm('Are you sure to delete this Vendor?');">
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

