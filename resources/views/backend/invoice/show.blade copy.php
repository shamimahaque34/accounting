@extends('backend.master')

@section('title')
   Invoice detail
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Companies  Info', 'child' => 'Manage'])
@endsection

@section('body')
<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize text-center">Invoice Detail</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table dt-responsive nowrap w-100">
                           
                            <tr>
                                <th>Invoice Type</th>
                                <td> @if($invoice->invoice_type==0)
                                    {{'Commercial'}}
                                    @elseif($invoice->invoice_type==1)
                                    {{'Govt'}}
                                    @elseif($invoice->invoice_type==2)
                                    {{'Private'}}
                                    @endif</td>
                            </tr>

                            <tr>
                                <th>Company Name</th>
                                <td>{{$invoice->company->name}}</td>
                            </tr>

                            <tr>
                                <th>Company Ibs Id</th>
                                <td>{{$invoice->companyIbs->id}}</td>
                            </tr>

                            <tr>
                                <th>Invoice Date</th>
                                <td>{{$invoice->invoice_date}}</td>
                            </tr>


                            <tr>
                                <th>Invoice Number</th>
                                <td>{{$invoice->invoice_number}}</td>
                            </tr>

                            <tr>
                                <th>Order Date</th>
                                <td>{{$invoice->order_date}}</td>
                            </tr>

                            <tr>
                                <th>Memo Number</th>
                                <td>{{$invoice->memo_number}}</td>
                            </tr>

                            <tr>
                                <th>Heading</th>
                                <td>{{$invoice->heading}}</td>
                            </tr>

                            <tr>
                                <th>Position</th>
                                <td>{{$invoice->position}}</td>
                            </tr>

                            <tr>
                                <th>Published Date</th>
                                <td>{{$invoice->published_date}}</td>
                            </tr>

                            <tr>
                                <th>Inch</th>
                                <td>{{$invoice->inch}}</td>
                            </tr>

                            <tr>
                                <th>Rate</th>
                                <td>{{$invoice->rate}}</td>
                            </tr>

                            <tr>
                                <th>Customer Id</th>
                                <td>{{$invoice->customer_id}}</td>
                            </tr>

                            <tr>
                                <th>Customer Name</th>
                                <td>{{$invoice->customer_name}}</td>
                            </tr>

                            <tr>
                                <th>Customer Email</th>
                                <td>{{$invoice->customer_email}}</td>
                            </tr>

                            <tr>
                                <th>Customer Tax Number</th>
                                <td>{{$invoice->customer_tax_number}}</td>
                            </tr>

                            <tr>
                                <th>Customer Phone</th>
                                <td>{{$invoice->customer_phone}}</td>
                            </tr>

                            <tr>
                                <th>Customer Address</th>
                                <td>{{$invoice->customer_address}}</td>
                            </tr>

                            <tr>
                                <th>Color Charge</th>
                                <td>{{$invoice->color_charge}}</td>
                            </tr>

                            <tr>
                                <th>First Page Charge</th>
                                <td>{{$invoice->first_page_charge}}</td>
                            </tr>

                            <tr>
                                <th>Back Page Charge</th>
                                <td>{{$invoice->back_page_charge}}</td>
                            </tr>


                            <tr>
                                <th>Commercial Charge</th>
                                <td>{{$invoice->commercial_charge}}</td>
                            </tr>

                            <tr>
                                <th>Commision</th>
                                <td>{{$invoice->commision}}</td>
                            </tr>

                            <tr>
                                <th>Vat</th>
                                <td>{{$invoice->vat}}</td>
                            </tr>

                            <tr>
                                <th>Total</th>
                                <td>{{$invoice->total}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

