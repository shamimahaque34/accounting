@extends('backend.master')

@section('title')
    Create Item
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
                                <h4 class="float-start" style="font-weight:700;">New Item</h4>
                               <a href="{{ route('items.index') }}" class="btn btn-success float-end">
                                    Manage Item

                                </a>
                            </div>
                            <div class="card-body">
                                <div>
                                    <form action="{{ route('items.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                       
                                        <div class="row mx-auto">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control rounded-lg" name="name" value="" data-provide="typeahead" id="the-basics" placeholder="Enter Name">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Sku</label>
                                            <input type="text" class="form-control rounded-lg" name="sku" value="" data-provide="typeahead" id="the-basics" placeholder="Enter Sku">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Sale Price</label>
                                            <input type="text" class="form-control rounded-lg" name="sale_price" value="" data-provide="typeahead" id="the-basics" placeholder="Enter Sale Price">
                                        </div>

                                       
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Purchase Price</label>
                                            <input type="text" class="form-control rounded-lg" name="purchase_price" value="" data-provide="typeahead" id="the-basics" placeholder="Enter Purchase Price">
                                        </div>

                                        
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Quantity</label>
                                            <input type="text" class="form-control rounded-lg" name="quantity" value="" data-provide="typeahead" id="the-basics" placeholder="Enter Quantity">
                                        </div>


                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Category</label>
                                            <select class="form-control" name="category_id" required >
                                               <option value="" selected disabled>-- Select Category Name --</option>
                                               @foreach($categories as $category)
                                               <option value="{{$category->id}}">{{ $category->name ?? ''}}</option>
                                               @endforeach
                                          </select>                                        
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Tax</label>
                                            <select class="form-control" name="tax_id" required >
                                               <option value="" selected disabled>-- Select tax Name --</option>
                                               @foreach($taxes as $tax)
                                               <option value="{{$tax->id}}">{{ $tax->name ?? ''}}</option>
                                               @endforeach
                                          </select>                                        
                                        </div>

                                        <div class="mb-3 col-md-12">
                                            <label class="form-label">Description</label>
                                            <textarea name="description" id="editor" cols="20" rows="5" class="form-control" value=""></textarea>
                                        </div>

                                        <div class="mb-3 float-end">
                                          
                                            <a href="{{route('items.index')}}" class="btn btn-info">Cancel</a>
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
