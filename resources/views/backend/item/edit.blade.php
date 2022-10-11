@extends('backend.master')

@section('title')
    Update Item
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
                                <h4 class="float-start" style="font-weight:700;">Update Item</h4>
                                <!-- <a href="{{ route('companies.index') }}" class="btn btn-success float-end">
                                    Manage Company

                                </a> -->
                            </div>
                            <div class="card-body">
                                <div>
                                    <form action="{{ route('items.update',$item->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control rounded-lg" name="name" value="{{$item->name}}" data-provide="typeahead" id="the-basics" placeholder="Enter Name">
                                        </div>

                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Sku</label>
                                            <input type="text" class="form-control rounded-lg" name="sku" value="{{$item->sku}}" data-provide="typeahead" id="the-basics" placeholder="Enter Sku">
                                        </div>

                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Sale Price</label>
                                            <input type="text" class="form-control rounded-lg" name="sale_price" value="{{$item->sale_price}}" data-provide="typeahead" id="the-basics" placeholder="Enter Sale Price">
                                        </div>

                                       
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Purchase Price</label>
                                            <input type="text" class="form-control rounded-lg" name="purchase_price" value="{{$item->purchase_price}}" data-provide="typeahead" id="the-basics" placeholder="Enter Purchase Price">
                                        </div>

                                        
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Quantity</label>
                                            <input type="text" class="form-control rounded-lg" name="quantity" value="{{$item->quantity}}" data-provide="typeahead" id="the-basics" placeholder="Enter Quantity">
                                        </div>


                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Category</label>
                                            <select class="form-control" name="category_id" required >
                                               <option value="" selected disabled>-- Select Category Name --</option>
                                               @foreach($categories as $category)
                                               <option value="{{$category->id}}" {{isset($item) && $item->category_id == $category->id ? 'selected' : ''}}>{{ $category->name ?? ''}}</option>
                                               @endforeach
                                          </select>                                        
                                        </div>

                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Tax</label>
                                            <select class="form-control" name="tax_id" required >
                                               <option value="" selected disabled>-- Select tax Name --</option>
                                               @foreach($taxes as $tax)
                                               <option value="{{$tax->id}}" {{isset($item) && $item->tax_id == $tax->id ? 'selected' : ''}}>{{ $tax->name ?? ''}}</option>
                                               @endforeach
                                          </select>                                        
                                        </div>

                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Description</label>
                                            <textarea name="description" id="editor" cols="20" rows="5" class="form-control" value="">{{$item->description}}</textarea>
                                        </div>

                                        <div class="mb-3 float-end">
                                          
                                            <a href="{{route('companies.index')}}" class="btn">Cancel</a>
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
