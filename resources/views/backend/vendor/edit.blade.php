@extends('backend.master')

@section('title')
    Update Vendor
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
                                <h4 class="float-start" style="font-weight:700;">Update Vendor</h4>
                                <!-- <a href="{{ route('companies.index') }}" class="btn btn-success float-end">
                                    Manage Company

                                </a> -->
                            </div>
                            <div class="card-body">
                                <div>
                                    <form action="{{ route('vendors.update',$vendor->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        @if(isset($vendor))
                                        @method('put')
                                        @endif
                                       <div class="row mx-auto">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control rounded-lg" name="name" value="{{$vendor->name}}" data-provide="typeahead" id="the-basics" placeholder="Enter Name">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Email</label>
                                            <input type="text" class="form-control rounded-lg" name="email" value="{{$vendor->email}}" data-provide="typeahead" id="the-basics" placeholder="Enter Email">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Phone</label>
                                            <input type="text" class="form-control rounded-lg" name="phone" value="{{$vendor->phone}}" data-provide="typeahead" id="the-basics" placeholder="Enter Phone">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Image</label>
                                            <img src="{{ asset($vendor->image) }}" alt="vendor Image" style="height: 50px; width: 50px; object-fit:cover;">

                                            <input type="file" class="form-control-file " name="image" value="" data-provide="typeahead" id="the-basics" placeholder="Enter Image">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Website</label>
                                            <input type="text" class="form-control rounded-lg" name="website" value="{{$vendor->website}}" data-provide="typeahead" id="the-basics" placeholder="Enter Website">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Reference</label>
                                            <input type="text" class="form-control rounded-lg" name="reference" value="{{$vendor->reference}}" data-provide="typeahead" id="the-basics" placeholder="Enter Reference">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Tax Number</label>
                                            <input type="text" class="form-control rounded-lg" name="tax_number" value="{{$vendor->tax_number}}" data-provide="typeahead" id="the-basics" placeholder="Enter Tax Number">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Currency</label>
                                            <select class="form-control" name="currency_id" required >
                                               <option value="" selected disabled>-- Select Currency Name --</option>
                                               @foreach($currencies as $currency)
                                               <option value="{{$currency->id}}" {{isset($vendor) && $vendor->currency_id == $currency->id ? 'selected' : ''}}>{{ $currency->name ?? ''}}</option>
                                               @endforeach
                                          </select>                                        
                                        </div>


                                      

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Town</label>
                                            <input type="text" class="form-control rounded-lg" name="town" value="{{$vendor->town}}" data-provide="typeahead" id="the-basics" placeholder="Enter Town">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Postal Code</label>
                                            <input type="text" class="form-control rounded-lg" name="postal_code" value="{{$vendor->postal_code}}" data-provide="typeahead" id="the-basics" placeholder="Enter Postal Code">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">State</label>
                                            <input type="text" class="form-control rounded-lg" name="state" value="{{$vendor->state}}" data-provide="typeahead" id="the-basics" placeholder="Enter State">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Country</label>
                                            <input type="text" class="form-control rounded-lg" name="country" value="{{$vendor->country}}" data-provide="typeahead" id="the-basics" placeholder="Enter Country">
                                        </div>

                                        <div class="mb-3 col-md-12">
                                            <label class="form-label">Address</label>
                                            <textarea name="address" id="editor" cols="20" rows="5" class="form-control" value="">{{$vendor->address}}</textarea>
                                        </div>

                                        <div class="mb-3 float-end">
                                          
                                            <a href="{{route('companies.index')}}" class="btn btn-info">Cancel</a>
                                            <input type="submit" class="btn btn-success" data-provide="typeahead" id="" value="Save">
                                        </div>
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
