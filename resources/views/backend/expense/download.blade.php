<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize text-center">Expense Detail</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table dt-responsive nowrap w-100">
                           
                            <tr>
                                <th>Date</th>
                                <td>{{$expense->date}}</td>
                            </tr>

                            <tr>
                                <th>Payment Method</th>
                                <td>{{ $expense->payment_method}}</td>
                            </tr>

                            <tr>
                                <th>Account</th>
                                <td>{{ $expense->account}}</td>
                            </tr>

                            <tr>
                                <th>Amount</th>
                                <td>{{ $expense->amount}}</td>
                            </tr>

                            <tr>
                                <th>Description</th>
                                <td>{{ $expense->description}}</td>
                            </tr>

                            <tr>
                                <th>Category</th>
                                <td>{{ $expense->category}}</td>
                            </tr>

                            <tr>
                                <th>Vendor</th>
                                <td>{{ $expense->vendor->name}}</td>
                            </tr>

                            <tr>
                                <th>Number</th>
                                <td>{{ $expense->number}}</td>
                            </tr>

                            <tr>
                                <th>Reference</th>
                                <td>{{ $expense->reference}}</td>
                            </tr>

                            <tr>
                                <th>Attachment</th>
                                <td>{{ $expense->attachment}}</td>
                            </tr>
                                  
                                  
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>