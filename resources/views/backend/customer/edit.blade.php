@extends('backend.master')

@section('title')
    Update Customer
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Company', 'child' => 'Create'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h4 class="float-start" style="font-weight:700;">Update Customer</h4>
                                <!-- <a href="{{ route('companies.index') }}" class="btn btn-success float-end">
                                    Manage Company

                                </a> -->
                            </div>
                            <div class="card-body">
                                <div>
                                    <form action="{{ route('customers.update',$customer->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @if(isset($customer))
                                        @method('put')
                                        @endif
                                        
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control rounded-lg" name="name" value="{{$customer->name}}" data-provide="typeahead" id="the-basics" placeholder="Enter Name">
                                        </div>

                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Email</label>
                                            <input type="text" class="form-control rounded-lg" name="email" value="{{$customer->email}}" data-provide="typeahead" id="the-basics" placeholder="Enter Email">
                                        </div>

                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Phone</label>
                                            <input type="text" class="form-control rounded-lg" name="phone" value="{{$customer->phone}}" data-provide="typeahead" id="the-basics" placeholder="Enter Phone">
                                        </div>

                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Website</label>
                                            <input type="text" class="form-control rounded-lg" name="website" value="{{$customer->website}}" data-provide="typeahead" id="the-basics" placeholder="Enter Phone">
                                        </div>

                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Reference</label>
                                            <input type="text" class="form-control rounded-lg" name="reference" value="{{$customer->reference}}" data-provide="typeahead" id="the-basics" placeholder="Enter Phone">
                                        </div>

                                        
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Tax Number</label>
                                            <input type="text" class="form-control rounded-lg" name="tax_number" value="{{$customer->tax_number}}" data-provide="typeahead" id="the-basics" placeholder="Enter Tax Number">
                                        </div>

                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Currency</label>
                                            <select class="form-control" name="currency_id" required >
                                               <option value="" selected disabled>-- Select Currency Name --</option>
                                               @foreach($currencies as $currency)
                                               <option value="{{$currency->id}}" {{isset($customer) && $customer->currency_id == $currency->id ? 'selected' : ''}}>{{ $currency->name ?? ''}}</option>
                                               @endforeach
                                          </select>                                         </div>
                                      

                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Address</label>
                                            <textarea name="address" id="editor" cols="20" rows="5" class="form-control" value="">{{$customer->address}}</textarea>
                                        </div>

                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Town</label>
                                            <input type="text" class="form-control rounded-lg" name="town" value="{{$customer->town}}" data-provide="typeahead" id="the-basics" placeholder="Enter Town">
                                        </div>

                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Postal Code</label>
                                            <input type="text" class="form-control rounded-lg" name="postal_code" value="{{$customer->postal_code}}" data-provide="typeahead" id="the-basics" placeholder="Enter Postal Code">
                                        </div>

                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">State</label>
                                            <input type="text" class="form-control rounded-lg" name="state" value="{{$customer->state}}" data-provide="typeahead" id="the-basics" placeholder="Enter State">
                                        </div>

                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Country</label>
                                            <input type="text" class="form-control rounded-lg" name="country" value="{{$customer->country}}" data-provide="typeahead" id="the-basics" placeholder="Enter Country">
                                        </div>

                                        <div class="mb-3 float-end">
                                          
                                            <a href="{{route('customers.index')}}" class="btn">Cancel</a>
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
