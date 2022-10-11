<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize text-center">Item Detail</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table dt-responsive nowrap w-100">
                           
                            <tr>
                                <th>Item Name</th>
                                <td>{{$item->name}}</td>
                            </tr>

                            <tr>
                                <th>SKU</th>
                                <td>{{ $item->sku}}</td>
                            </tr>

                            <tr>
                                <th>Description</th>
                                <td>{{ $item->description}}</td>
                            </tr>

                            <tr>
                                <th>Sale Price</th>
                                <td>{{ $item->sale_price}}</td>
                            </tr>

                            <tr>
                                <th>Purchase Price</th>
                                <td>{{ $item->purchase_price}}</td>
                            </tr>

                            <tr>
                                <th>Quantity</th>
                                <td>{{ $item->quantity}}</td>
                            </tr>

                            <tr>
                                <th>Category Name</th>
                                <td>{{ $item->category->name ?? ''}}</td>
                            </tr>

                            <tr>
                                <th>Tax Name</th>
                                <td>{{ $item->tax->name ?? ''}}</td>
                            </tr>
                                  
                                  
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>