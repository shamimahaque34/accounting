<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize text-center">Category Detail</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table dt-responsive nowrap w-100">
                           
                            <tr>
                                <th>Category Name</th>
                                <td>{{$category->name}}</td>
                            </tr>

                            <tr>
                                <th>Type</th>
                                <td>{{ $category->type}}</td>
                            </tr>

                            <tr>
                                <th>Color</th>
                                <td>{{ $category->color}}</td>
                            </tr>

                          
                                  
                                  
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>