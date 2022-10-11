@extends('backend.master')

@section('title')
    Create Income
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
                                <h4 class="float-start" style="font-weight:700;">New Income</h4>
                                <!-- <a href="{{ route('companies.index') }}" class="btn btn-success float-end">
                                    Manage Company

                                </a> -->
                            </div>
                            <div class="card-body">
                                <div>
                                    <form action="{{ route('incomes.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Date</label>
                                            <input type="date" class="form-control rounded-lg" name="date" value="" data-provide="typeahead" id="the-basics" placeholder="Enter Date">
                                        </div>

                                        
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Payment Method</label>
                                            <select class="form-control" name="payment_method" required >
                                                <option value="" selected disabled>-- Select Payment Method --</option>
                                                <option value="1">Cash</option>
                                                <option value="2">Bank Transfer</option>
                                            </select>                                        
                                        </div>

                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Account</label>
                                            <select class="form-control" name="account" required >
                                                <option value="" selected disabled>-- Select Account --</option>
                                                <option value="1">Nogod</option>
                                                <option value="2">------</option>
                                            </select>                                        
                                        </div>

                                       

                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Amount</label>
                                            <input type="text" class="form-control rounded-lg" name="amount" value="" data-provide="typeahead" id="the-basics" placeholder="Enter Amount">
                                        </div>

                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Description</label>
                                            <textarea name="description" id="editor" cols="20" rows="5" class="form-control" value=""></textarea>
                                        </div>

                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Category</label>
                                            <select class="form-control" name="category" required >
                                                <option value="" selected disabled>-- Select Category --</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                            </select>                                        
                                        </div>

                                        
                                     

                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Customer</label>
                                            <select class="form-control" name="customer_id" required >
                                               <option value="" selected disabled>-- Select Customer Name --</option>
                                               @foreach($customers as $customer)
                                               <option value="{{$customer->id}}">{{ $customer->name ?? ''}}</option>
                                               @endforeach
                                          </select>                                         
                                        </div>
                                      

                                       

                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Number</label>
                                            <input type="text" class="form-control rounded-lg" name="number" value="" data-provide="typeahead" id="the-basics" placeholder="Enter Number">
                                        </div>

                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Reference</label>
                                            <input type="text" class="form-control rounded-lg" name="reference" value="" data-provide="typeahead" id="the-basics" placeholder="Enter Reference">
                                        </div>

                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Attachment</label>
                                            <input type="file" class="form-control-file " name="attachment" value="" data-provide="typeahead" id="the-basics" placeholder="Enter Attachment">
                                        </div>

                                        <div class="mb-3 float-end">
                                          
                                            <a href="{{route('expenses.index')}}" class="btn">Cancel</a>
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
