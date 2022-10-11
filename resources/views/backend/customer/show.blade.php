@extends('backend.master')

@section('title')
   Customer detail
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Companies  Info', 'child' => 'Manage'])
@endsection

@section('body')
<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize text-center">Customer Detail</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table dt-responsive nowrap w-100">
                           
                            <tr>
                                <th>Customer Name</th>
                                <td>{{$customer->name}}</td>
                            </tr>

                            <tr>
                                <th>Email</th>
                                <td>{{ $customer->email}}</td>
                            </tr>

                            <tr>
                                <th>Phone</th>
                                <td>{{ $customer->phone}}</td>
                            </tr>

                            <tr>
                                <th>Website</th>
                                <td>{{ $customer->website}}</td>
                            </tr>

                            <tr>
                                <th>Reference</th>
                                <td>{{ $customer->reference}}</td>
                            </tr>

                            <tr>
                                <th>Tax Number</th>
                                <td>{{ $customer->tax_number}}</td>
                            </tr>

                            <tr>
                                <th>Currency</th>
                                <td>{{ $customer->currency->name ?? ''}}</td>
                            </tr>

                            <tr>
                                <th>Address</th>
                                <td>{{ $customer->address}}</td>
                            </tr>

                            <tr>
                                <th>Town</th>
                                <td>{{ $customer->town}}</td>
                            </tr>

                            <tr>
                                <th>Postal Code</th>
                                <td>{{ $customer->postal_code}}</td>
                            </tr>

                            <tr>
                                <th>State</th>
                                <td>{{ $customer->state}}</td>
                            </tr>

                            <tr>
                                <th>Country</th>
                                <td>{{ $customer->country}}</td>
                            </tr>

                          
                                  
                                  
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

