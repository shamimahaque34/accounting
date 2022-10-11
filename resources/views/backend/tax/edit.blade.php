@extends('backend.master')

@section('title')
    Update Tax
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
                                <h4 class="float-start" style="font-weight:700;">Update Tax</h4>
                                <!-- <a href="{{ route('companies.index') }}" class="btn btn-success float-end">
                                    Manage Company

                                </a> -->
                            </div>
                            <div class="card-body">
                                <div>
                                    <form action="{{ route('taxes.update',$tax->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @if(isset($tax))
                                        @method('put')
                                        @endif
                                        
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control rounded-lg" name="name" value="{{$tax->name}}" data-provide="typeahead" id="the-basics" placeholder="Enter Name">
                                        </div>

                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Rate</label>
                                            <input type="text" class="form-control rounded-lg" name="rate" value="{{$tax->rate}}" data-provide="typeahead" id="the-basics" placeholder="Enter Rate">
                                        </div>

                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Type</label>
                                            <input type="text" class="form-control rounded-lg" name="type" value="{{$tax->type}}" data-provide="typeahead" id="the-basics" placeholder="Enter Type">
                                        </div>

                                        

                                      
                                        <div class="mb-3 float-end">
                                          
                                            <a href="{{route('taxes.index')}}" class="btn">Cancel</a>
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
