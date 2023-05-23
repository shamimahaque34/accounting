@extends('backend.master')

@section('title')
    Create Invoice
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
                                <h4 class="float-start" style="font-weight:700;">New Invoice</h4>
                                <a href="{{ route('invoices.index') }}" class="btn btn-success float-end">
                                    Manage Invoice
                                </a>
                               
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    @foreach($companies as $company)
                                    <div class="">
                                        <p class="text-center fw-bold ">Logo</p>
                                        <img class="img-fluid" src="{{asset($company->logo)}}" style="height: 200px; width:200px; object-fit:cover;"/>
                                    </div>
                                    @endforeach
                    
                                    @foreach($companies as $company)
                                    <div class="">                    
                                        <p class="fw-bold text-start pr-5">{{$company->name}}</p>
                                        <p class="text-start pr-5">{{$company->address}}</p>
                                        <p class="text-start pr-5">{{$company->phone}}</p>
                                        <p class="text-start pr-5">{{$company->email}}</p>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            




                           
                            <div class="card-body">

                                {{-- <div class="row">

                                    @foreach($companies as $company)
                                    <div class="col-md-4 p-5">
                                        <p class="text-center fw-bold ">Logo</p>
                                        <img class="img-fluid" src="{{asset($company->logo)}}"/>
                                    </div>
                                    <div class="col-md-8 p-5">
                                        
                                        <p class="fw-bold text-start pr-5">{{$company->name}}</p>
                                        <p class="text-start pr-5">{{$company->address}}</p>
                                        <p class="text-start pr-5">{{$company->phone}}</p>
                                        <p class="text-start pr-5">{{$company->email}}</p>
                                    </div>
                                    @endforeach

                                </div> --}}
                                <div>
                                    <form action="{{ route('invoices.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        
                                <div>
                                
                                <div class="col-md-4 mb-3">
                                    <input class="form-control" id="customerId" name="customer_id" type="" required value="" />
                                </div>

                                <div class="col-md-4 mb-3">
                                   <input class="form-control" id="customerName" name="customer_name" type="" required value="" />
                                </div>


                                <div class="col-md-4 mb-3">
                                   <input class="form-control" id="customerEmail" name="customer_email" type="" required value="" />
                                </div>

                                <div class="col-md-4 mb-3">
                                   <input class="form-control" id="customerTaxNumber" name="customer_tax_number" type="" required value="" />
                                </div>

                                <div class="col-md-4 mb-3">
                                   <input class="form-control" id="customerPhone" name="customer_phone" type="" required value="" />
                                </div>

                                <div class="col-md-4 mb-3">
                                   <input class="form-control" id="customerAddress" name="customer_address" type="" required value="" />
                                </div>    
                            
                        </div>

                                            <div class="row">
                                                <div class="card-body" style="display:none" id="customers">
                                
                                                    @foreach($customers as $customer)
                                                  <a onclick="getCustomer({{ $customer->id }})">{{$customer->name}}</a>
                                                    @endforeach
                                                
                                            </div>
                                                <div class="col-lg-4">
                                                    <button id="button" class="btn py-3 px-5 border border-2 rounded border-secondary">
                                                        <div class="mb-2 text-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" style="height: 50px;width:50px">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                                                            </svg>
                                                        </div>
                                                        <p class="text-center fs-5 fw-bold text-muted">Add a Customer</p>
                                                    </button>
                                                    {{-- <div class="py-3 px-4 border border-2 rounded border-secondary">
                                                        <div class="mb-2 text-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3" style="height: 50px;width:50px">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                                                            </svg>
                                                        </div>
                                                        <p class="text-center fs-5 fw-bold text-muted">Add a Customer</p>
                                                    </div> --}}
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="row">
                                                        <div class="col-lg-6 mb-3">
                                                            <label>Invoice Date</label>
                                                            <input class="form-control" name="invoice_date" type="" required  />
                                                        </div>
                                                        <div class="col-lg-6 mb-3">
                                                            <label>Invoice Number</label>
                                                            <input class="form-control" name="invoice_number" type="" required  />
                                                        </div>
                                                        <div class="col-lg-6 mb-3">
                                                            <label>Order Date</label>
                                                            <input class="form-control" name="order_date" type="" required  />
                                                        </div>
                                                        <div class="col-lg-6 mb-3">
                                                            <label>Memo Number</label>
                                                            <input class="form-control" name="memo_number" type="" required  />
                                                        </div>
                                                        <div class="col-lg-6 mb-3">
                                                            <label>Heading</label>
                                                            <input class="form-control" name="heading" type="" required  />
                                                        </div>
                                                        <div class="col-lg-6 mb-3">
                                                            <label>Position</label>
                                                            <input class="form-control" name="position" type="" required  />
                                                        </div>
                                                        <div class="col-lg-6 mb-3">
                                                            <label>Published Date</label>
                                                            <input class="form-control" name="published_date" type="" required  />
                                                        </div>
                                                        <div class="col-lg-6 mb-3">
                                                            <label>Inch</label>
                                                            <input class="form-control" name="inch" type=""/>
                                                        </div>
                                                        <div class="col-lg-6 mb-3">
                                                            <label>Rate</label>
                                                            <input class="form-control" name="rate" type="" required/>
                                                        </div>
                                                        <div class="col-lg-6 mb-3">
                                                            <label>Color Charge</label>
                                                            <input class="form-control" name="color_charge" type="" required/>
                                                        </div>
                                                        <div class="col-lg-6 mb-3">
                                                            <label>First Page Charge</label>
                                                            <input class="form-control" name="first_page_charge" type="" required/>
                                                        </div>
                                                        <div class="col-lg-6 mb-3">
                                                            <label>Back Page Charge</label>
                                                            <input class="form-control" name="back_page_charge" type="" required/>
                                                        </div>
                                                        <div class="col-lg-6 mb-3">
                                                            <label>Commercial Charge</label>
                                                            <input class="form-control" name="commercial_charge" type="" required/>
                                                        </div>
                                                        <div class="col-lg-6 mb-3">
                                                            <label>Commision</label>
                                                            <input class="form-control" name="commision" type="text"/>
                                                        </div>

                                                        <div class="col-lg-6 mb-3">
                                                            <label>Vat</label>
                                                            <input class="form-control" name="vat" type="" required/>
                                                        </div>

                                                        <div class="col-lg-6 mb-3">
                                                            <label>Total</label>
                                                            <input class="form-control" name="total" type="" required/>
                                                        </div>

                                                        <div class="col-lg-6 mb-3">
                                                            <label for="" class="form-label">Invoice Type</label>
                                                            <select name="invoice_type" class="form-control"  data-placeholder="">
                                                                <option value="" disabled selected>select a invoice type</option>
                                                                <option value="0">Commercial</option>
                                                                <option value="1">Public</option>
                                                                <option value="2">Private</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-lg-6 mb-3">
                                                            <label>Sender Email</label>
                                                            <input class="form-control" name="sender_email"  type="" required/>
                                                        </div>

                                                        <div class="col-lg-6 mt-1">
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

                                                        <div class="mb-3 col-md-4">
                                                            @foreach($companies as $company)
                                                            <input class="form-control" name="company_id" type="hidden" required value="{{$company->id}}" />
                                                            @endforeach
                                                          </div>

                                                        
                                                    </div>
                                                 </div>
        
                                                </div>
                                            </div>
                                            
                                      
                                        <div class="mb-3 float-end">
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

    @section('script')

        <script>
            $('#button').click(function(){
                $('#button').hide();
              $('#customers').show();
               
        });
        
        
        </script>

<script>
    function getCustomer(id)
    {  event.preventDefault();
    
		
        $.ajax({
            method: "GET",
            url: "{{url('/customer-detail')}}",
            data: {id:id},
            type: 'JSON',
            success: function (response) {
                // console.log(response);

                var id ='';
                var name ='';
                var email ='';
                var tax ='';
                var phone ='';
                var address ='';
                 $.each(response, function (key, value) {
                      
                      id = value.id;
					  name = value.name;
                      email = value.email;
                      tax = value.tax_number;
                      phone = value.phone;
                      address = value.address
					
					
                 });
                 
                 $('#customerId').val(id);
				 $('#customerName').val(name);
                 $('#customerEmail').val(email);
                 $('#customerTaxNumber').val(tax);
                 $('#customerPhone').val(phone);
                 $('#customerAddress').val(address);
            }
        });
	
    }
</script>

    
    @endsection

   
@endsection
