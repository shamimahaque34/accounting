@extends('backend.master')

@section('title')
    Create Company Ibs
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
                                <h4 class="float-start" style="font-weight:700;">New Company Ibs</h4>
                                <a href="{{ route('company_ibses.index') }}" class="btn btn-success float-end">
                                    Manage Company Ibs
                                </a>
                            </div>
                            <div class="card-body">
                                <div>
                                    <form action="{{ route('company_ibses.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mx-auto">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Account Name</label>
                                            <input type="text" class="form-control rounded-lg" name="account_name" value="" data-provide="typeahead" id="the-basics" placeholder="Enter Account Name">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Account No</label>
                                            <input type="text" class="form-control rounded-lg" name="account_no" value="" data-provide="typeahead" id="the-basics" placeholder="Enter Account No">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Bank Name</label>
                                            <input type="text" class="form-control rounded-lg" name="bank_name" value="" data-provide="typeahead" id="the-basics" placeholder="Enter Bank Name">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Bank Branch Name</label>
                                            <input type="text" class="form-control " name="bank_branch_name" value="" data-provide="typeahead" id="the-basics" placeholder="Enter Bank Branch Name">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Tin No</label>
                                            <input type="text" class="form-control rounded-lg" name="tin_no" value="" data-provide="typeahead" id="the-basics" placeholder="Enter Tin No">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Vat/Bin No</label>
                                            <input type="text" class="form-control rounded-lg" name="vat_bin_no" value="" data-provide="typeahead" id="the-basics" placeholder="Enter Vat/Bin No">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Contact Number And Bkash No</label>
                                            <input type="text" class="form-control rounded-lg" name="contact_number_and_bkash_number" value="" data-provide="typeahead" id="the-basics" placeholder="Enter Contact No and Bkash No">
                                        </div>


                                       <div class="mb-3 float-end">
                                          
                                            <a href="{{route('company_ibses.index')}}" class="btn btn-info">Cancel</a>
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

   
@endsection
