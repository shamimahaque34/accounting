@extends('backend.master')

@section('title')
   Vendor detail
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Companies  Info', 'child' => 'Manage'])
@endsection

@section('body')
<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize text-center">Vendor Detail</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table dt-responsive nowrap w-100">
                           
                            <tr>
                                <th>Vendor Name</th>
                                <td>{{$vendor->name}}</td>
                            </tr>

                            <tr>
                                <th>Email</th>
                                <td>{{ $vendor->email}}</td>
                            </tr>

                            <tr>
                                <th>Phone</th>
                                <td>{{ $vendor->phone}}</td>
                            </tr>

                            <tr>
                                <th>Website</th>
                                <td>{{ $vendor->website}}</td>
                            </tr>

                            <tr>
                                <th>Image</th>
                                <td><img src="{{asset($vendor->image)}}" alt="" height="60" width="80"/></td>
                            </tr>


                            <tr>
                                <th>Reference</th>
                                <td>{{ $vendor->reference}}</td>
                            </tr>

                            <tr>
                                <th>Tax Number</th>
                                <td>{{ $vendor->tax_number}}</td>
                            </tr>

                            <tr>
                                <th>Currency</th>
                                <td>{{ $vendor->currency->name ?? ''}}</td>
                            </tr>

                            <tr>
                                <th>Address</th>
                                <td>{{ $vendor->address}}</td>
                            </tr>

                            <tr>
                                <th>Town</th>
                                <td>{{ $vendor->town}}</td>
                            </tr>

                            <tr>
                                <th>Postal Code</th>
                                <td>{{ $vendor->postal_code}}</td>
                            </tr>

                            <tr>
                                <th>State</th>
                                <td>{{ $vendor->state}}</td>
                            </tr>

                            <tr>
                                <th>Country</th>
                                <td>{{ $vendor->country}}</td>
                            </tr>

                          
                                  
                                  
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

