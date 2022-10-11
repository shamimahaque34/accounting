@extends('backend.master')

<!-- @section('title')
    Update Vendor
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Company', 'child' => 'Create'])
@endsection -->

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h4 class="float-start" style="font-weight:700;"></h4>
                                <!-- <a href="{{ route('companies.index') }}" class="btn btn-success float-end">
                                    Manage Company

                                </a> -->
                            </div>
                            <div class="card-body">
                                <div>
                                    <form action="{{ route('customers-import') }}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                       
                                        
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label"></label>
                                            <input type="file" class="form-control-file" name="file" value="" data-provide="typeahead" id="the-basics" placeholder="">
                                        </div>

                                       
                                       
                                        <div class="mb-3 float-end">
                                          
                                            <a href="{{route('customers.index')}}" class="btn">Cancel</a>
                                            <input type="submit" class="btn btn-success" data-provide="typeahead" id="" value="Import">
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

   
@endsection
