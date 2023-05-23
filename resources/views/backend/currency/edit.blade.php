@extends('backend.master')

@section('title')
    Update Currency
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
                                <h4 class="float-start" style="font-weight:700;">Update Currency</h4>
                                <!-- <a href="{{ route('companies.index') }}" class="btn btn-success float-end">
                                    Manage Company

                                </a> -->
                            </div>
                            <div class="card-body">
                                <div>
                                    <form action="{{ route('currencies.update',$currency->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @if(isset($currency))
                                        @method('put')
                                        @endif
                                        <div class="row mx-auto">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Name *</label>
                                            <input type="text" class="form-control rounded-lg" name="name" value="{{$currency->name}}" data-provide="typeahead" id="the-basics" placeholder="Enter Name" required>
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Code *</label>
                                            <select class="form-control" name="code" required >
                                                <option value="" selected disabled>-- Select Code --</option>
                                                <option value="BDT" {{isset($currency) && $currency->code == "BDT" ? 'selected' : ''}}>BDT</option>
                                               </select> 
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Rate *</label>
                                            <input type="text" class="form-control rounded-lg" name="rate" value="{{$currency->rate}}" data-provide="typeahead" id="the-basics" placeholder="Enter Rate" required>
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Precision</label>
                                            <input type="text" class="form-control" name="precision" value="{{$currency->precision}}" data-provide="typeahead" id="the-basics" placeholder="Enter Precision">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Symbol</label>
                                            <select class="form-control" name="symbol" required >
                                                <option value="" selected disabled>-- Select Symbol --</option>
                                                
                                                <option value="৳" {{isset($currency) && $currency->symbol == "৳" ? 'selected' : ''}} >৳</option>
                                               </select>                                         </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Symbol Position</label>
                                            <select class="form-control" name="symbol_position" required >
                                                <option value="" selected disabled>-- Select Symbol Position --</option>
                                                <option value="1" {{isset($currency) && $currency->symbol_position == 1 ? 'selected' : ''}} >After Amount</option>
                                                <option value="2" {{isset($currency) && $currency->symbol_position == 2 ? 'selected' : ''}}>Before Amount</option>

                                                
                                            </select>  
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Symbol First</label>
                                            <input type="text" class="form-control rounded-lg" name="symbol_first" value="{{$currency->symbol_first}}" data-provide="typeahead" id="the-basics" placeholder="Enter Symbol First">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Decimal Mark</label>
                                            <input type="text" class="form-control rounded-lg" name="decimal_mark" value="{{$currency->decimal_mark}}" data-provide="typeahead" id="the-basics" placeholder="Enter Decimal Mark">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Thousands Separator</label>
                                            <input type="text" class="form-control rounded-lg" name="thousands_separator" value="{{$currency->thousands_separator}}" data-provide="typeahead" id="the-basics" placeholder="Enter Thousands Separator">
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
