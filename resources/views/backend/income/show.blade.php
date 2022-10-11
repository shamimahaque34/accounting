@extends('backend.master')

@section('title')
   Income detail
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Companies  Info', 'child' => 'Manage'])
@endsection

@section('body')
<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize text-center">Income Detail</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table dt-responsive nowrap w-100">
                           
                            <tr>
                                <th>Date</th>
                                <td>{{$income->date}}</td>
                            </tr>

                            <tr>
                                <th>Payment Method</th>
                                <td>{{ $income->payment_method}}</td>
                            </tr>

                            <tr>
                                <th>Account</th>
                                <td>{{ $income->account}}</td>
                            </tr>

                            <tr>
                                <th>Amount</th>
                                <td>{{ $income->amount}}</td>
                            </tr>

                            <tr>
                                <th>Description</th>
                                <td>{{ $income->description}}</td>
                            </tr>

                            <tr>
                                <th>Category</th>
                                <td>{{ $income->category}}</td>
                            </tr>

                            <tr>
                                <th>Customer</th>
                                <td>{{ $income->customer_id}}</td>
                            </tr>

                            <tr>
                                <th>Number</th>
                                <td>{{ $income->number}}</td>
                            </tr>

                            <tr>
                                <th>Reference</th>
                                <td>{{ $income->reference}}</td>
                            </tr>

                            <tr>
                                <th>Attachment</th>
                                <td>{{ $income->attachment}}</td>
                            </tr>
                                  
                                  
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

