@extends('backend.master')

@section('title')
    Edit Company Ibs
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
                                <h4 class="float-start" style="font-weight:700;">Edit Company Ibs</h4>
                                <!-- <a href="{{ route('companies.index') }}" class="btn btn-success float-end">
                                    Manage Company

                                </a> -->
                            </div>
                            <div class="card-body">
                                <div>
                                    <form action="{{ route('company_ibses.update', $companyIbs->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @if(isset($companyIbs))
                                        @method('put')
                                        @endif
                                        <div class="row mx-auto">

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Account Name</label>
                                            <input type="text" class="form-control rounded-lg" name="account_name"  data-provide="typeahead" id="the-basics" placeholder="Enter Account Name" value="{{$companyIbs->account_name}}">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Account No</label>
                                            <input type="text" class="form-control rounded-lg" name="account_no"  data-provide="typeahead" id="the-basics" placeholder="Enter Account No" value="{{$companyIbs->account_no}}">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Bank Name</label>
                                            <input type="text" class="form-control rounded-lg" name="bank_name"  data-provide="typeahead" id="the-basics" placeholder="Enter Bank Name" value="{{$companyIbs->bank_name}}">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Bank Branch Name</label>
                                            <input type="text" class="form-control " name="bank_branch_name"  data-provide="typeahead" id="the-basics" placeholder="Enter Bank Branch Name" value="{{$companyIbs->bank_branch_name}}">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Tin No</label>
                                            <input type="text" class="form-control rounded-lg" name="tin_no"  data-provide="typeahead" id="the-basics" placeholder="Enter Tin No" value="{{$companyIbs->tin_no}}">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Vat/Bin No</label>
                                            <input type="text" class="form-control rounded-lg" name="vat_bin_no"  data-provide="typeahead" id="the-basics" placeholder="Enter Vat/Bin No" value="{{$companyIbs->vat_bin_no}}">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Contact Number And Bkash No</label>
                                            <input type="text" class="form-control rounded-lg" name="contact_number_and_bkash_number"  data-provide="typeahead" id="the-basics" placeholder="Enter Contact No and Bkash No" value="{{$companyIbs->contact_number_and_bkash_number}}">
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
