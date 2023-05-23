@extends('backend.master')

@section('title')
    Edit Invoice
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Company', 'child' => 'Create'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h4 class="float-start" style="font-weight:700;">Edit Invoice</h4>
                               
                            </div>
                            <div class="card-body">

                                <div class="row">

                                    @foreach($companies as $company)
                                    <div class="col-md-4 p-5">
                                        <p class="text-center fw-bold ">Logo</p>
                                        <img class="img-fluid" src="{{asset($company->logo)}}"/>
                                    </div>
                                    <div class="col-md-8 p-5 ">
                                        <p class="fw-bold text-start pr-5">{{$company->name}}</p>
                                        <p class="text-start pr-5">{{$company->address}}</p>
                                        <p class="text-start pr-5">{{$company->phone}}</p>
                                        <p class="text-start pr-5">{{$company->email}}</p>
                                    </div>
                                    @endforeach

                                </div>
                                <div>
                                    <form action="{{ route('invoices.update',$invoice->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @if(isset($invoice))
                                        @method('put')
                                        @endif
                                        <div class="col-md-12">
                                            @foreach($customers as $customer)
                                            <div class="col-md-6">
                                                <div class="col-md-4 mb-3">
                                                <input class="form-control" name="customer_id" type="" required value="{{$customer->id}}" />
                                            </div>

                                            <div class="col-md-4 mb-3">
                                               <input class="form-control" name="customer_name" type="" required value="{{$customer->name}}" />
                                            </div>

                                            <div class="col-md-4 mb-3">
                                               <input class="form-control" name="customer_email" type="" required value="{{$customer->email}}" />
                                            </div>

                                            <div class="col-md-4 mb-3">
                                               <input class="form-control" name="customer_tax_number" type="" required value="{{$customer->tax_number}}" />
                                            </div>

                                            <div class="col-md-4 mb-3">
                                               <input class="form-control" name="customer_phone" type="" required value="{{$customer->phone}}" />
                                            </div>

                                            <div class="col-md-4 mb-3">
                                               <input class="form-control" name="customer_address" type="" required value="{{$customer->address}}" />
                                            </div>
                                        </div>
                                            @endforeach
                                            <div class="col-md-6">
                                                <div class="mb-3 col-md-4">
                                                    @foreach($companies as $company)
                                                    <input class="form-control" name="company_id" type="hidden" required value="{{$company->id}}" />
                                                    @endforeach
                                                  </div>
                                              
                                            </div>

                                            <div class="mb-3 col-md-4">
                                                <label>Invoice Date</label>
                                                <input class="form-control" name="invoice_date" type="" required  value="{{$invoice->invoice_date}}"/>
                                            </div>

                                            <div class="mb-3 col-md-4">
                                                <label>Invoice Number</label>
                                                <input class="form-control" name="invoice_number" type="" required  value="{{$invoice->invoice_number}}"/>
                                            </div>

                                            <div class="mb-3 col-md-4">
                                                <label>Order Date</label>
                                                <input class="form-control" name="order_date" type="" required value="{{$invoice->order_date}}" />
                                            </div>

                                            <div class="mb-3 col-md-4">
                                                <label>Memo Number</label>
                                                <input class="form-control" name="memo_number" type="" required value="{{$invoice->memo_number}}" />
                                            </div>

                                            <div class="mb-3 col-md-4">
                                                <label>Heading</label>
                                                <input class="form-control" name="heading" type="" required  value="{{$invoice->heading}}"/>
                                            </div>

                                            <div class="mb-3 col-md-4">
                                                <label>Position</label>
                                                <input class="form-control" name="position" type="" required value="{{$invoice->position}}" />
                                            </div>

                                            <div class="mb-3 col-md-4">
                                                <label>Published Date</label>
                                                <input class="form-control" name="published_date" type="" required value="{{$invoice->published_date}}" />
                                            </div>

                                            <div class="mb-3 col-md-4">
                                                <label>Inch</label>
                                                <input class="form-control" name="inch" type="" value="{{$invoice->inch}}"  />
                                            </div>

                                            

                                            <div class="mb-3 col-md-4">
                                                <label>Rate</label>
                                                <input class="form-control" name="rate" type="" required value="{{$invoice->rate}}" />
                                            </div>

                                            <div class="mb-3 col-md-4">
                                                <label>Color Charge</label>
                                                <input class="form-control" name="color_charge" type="" required value="{{$invoice->color_charge}}" />
                                            </div>


                                            <div class="mb-3 col-md-4">
                                                <label>First Page Charge</label>
                                                <input class="form-control" name="first_page_charge" type="" required value="{{$invoice->first_page_charge}}" />
                                            </div>

                                            <div class="mb-3 col-md-4">
                                                <label>Back Page Charge</label>
                                                <input class="form-control" name="back_page_charge" type="" required value="{{$invoice->back_page_charge}}" />
                                            </div>

                                            <div class="mb-3 col-md-4">
                                                <label>Commercial Charge</label>
                                                <input class="form-control" name="commercial_charge" type="" required value="{{$invoice->commercial_charge}}" />
                                            </div>

                                            <div class="mb-3 col-md-4">
                                                <label>Commision</label>
                                                <input class="form-control" name="commision" type=""  value="{{$invoice->commision}}" />
                                            </div>

                                            <div class="mb-3 col-md-4">
                                                <label>Vat</label>
                                                <input class="form-control" name="vat" type="" required value="{{$invoice->vat}}" />
                                            </div>

                                            <div class="mb-3 col-md-4">
                                                <label>Total</label>
                                                <input class="form-control" name="total" type="" required value="{{$invoice->total}}" />
                                            </div>

                                            <div class="col-lg-4 mb-3">
                                                <label for="" class="form-label">Invoice Type</label>
                                                <select name="invoice_type" class="form-control"  data-placeholder="">
                                                    <option value="" disabled selected>select a invoice type</option>
                                                    <option value="0" {{$invoice->invoice_type == 0 ? 'selected' :''}}>Commercial</option>
                                                    <option value="1" {{$invoice->invoice_type == 1 ? 'selected' :''}}>Public</option>
                                                    <option value="2" {{$invoice->invoice_type == 2 ? 'selected' :''}}>Private</option>
                                                </select>
                                            </div>

                                            <div class="col-lg-6 mb-3">
                                                <label>Sender Email</label>
                                                <input class="form-control" name="sender_email"  type="" value="{{$invoice->sender_email}} " required/>
                                            </div>
                                            
                                             <div class="mb-3 col-md-4">
                                                <label>company Ibs Id</label>
                                               @foreach($companyIbses as $companyIbs)
                                        <input class="form-control" name="company_ibs_id" type="" required value="{{$companyIbs->id}}"/>
                                                @endforeach
                                            </div>

                                            
                                            <div class="col-lg-6 mt-1">
                                                <label>Tax</label>
                                                @foreach($taxIds as $taxId)
                                          <input class="form-control" name="tax_id" type="" required value="{{$taxId->rate}}"/>
                                                 @endforeach
                                            </div>
                                        </div>

                                      <div class="mb-3 float-end">
                                            <a href="" class="btn">Cancel</a>
                                            <input type="submit" class="btn btn-success" data-provide="typeahead" id="" value="Save">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div id="main-body">
        <div class="container">
            <div id="header" class="xl:pt-6">
                <div class="flex flex-col sm:flex-row flex-wrap items-start justify-between hide-empty-page">
                    <div class="w-full sm:w-6/12 items-center mb-3 sm:mb-0">
                        <div class="flex-items-center">
                            <h1 class="flex items-center text-2xl xl:text-5xl  -ml-0.5" style="font-weight:300;">New Company 
</h1>
</div>
</div>
</div>
</div>
</div>
</div> -->
@endsection
