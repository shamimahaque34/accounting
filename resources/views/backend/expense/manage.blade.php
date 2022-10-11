@extends('backend.master')

@section('title')
   Manage Expenses Info
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Companies  Info', 'child' => 'Manage'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize float-start">Manage Expense</h4>
                    <a href="{{ route('expenses.create') }}" class="btn btn-success float-end">
                        New Expense
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>Date</th>
                                <th>Payment Method</th>
                                <th>Account</th>
                                <th>Amount</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Vendor</th>
                                <th>Number</th>
                                <th>Reference</th>
                                <th>Attachment</th>
                                <th>Action</th>
                                <a href="{{ route('expenses-export')}}" class="btn btn-primary btn-sm ms-2">Export</a>
                                        <a href="{{ route('expense-import')}}" class="btn btn-success btn-sm ms-2">Import</a>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($expenses as $expense)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $expense->date}}</td>
                                    <td>{{ $expense->payment_method}}</td>
                                    <td>{{ $expense->account}}</td>
                                    <td>{{ $expense->amount}}</td>
                                    <td>{{ $expense->description}}</td>
                                    <td>{{ $expense->category}}</td>
                                    <td>{{ $expense->vendor->name}}</td>
                                    <td>{{ $expense->number}}</td>
                                    <td>{{ $expense->reference}}</td>
                                    <td>{{ $expense->attachment}}</td>
                                    <td>
                                        <div class=d-flex>
                                        
                                      
                                        <a href="{{ route('expenses.edit',  $expense->id) }}" class="btn btn-info btn-sm ms-2"><i class="dripicons-document-edit"></i></a>
                                        <a class="btn btn-info btn-sm ms-2" title="View Expense Detail" href="{{ route('expensedownloadPDF', $expense->id) }} ">Download</a> 
                                        <a class="btn btn-primary btn-sm ms-2" title="View Expense Detail" href="{{ route('expenses.show', $expense->id) }} ">Show</a> 

                                     

                                          
                                <form action="{{ route('expenses.destroy', $expense->id) }}" method="post" style="display: inline-block" onsubmit="return confirm('Are you sure to delete this Expense?');">
                                             @csrf
                                          @method('delete')
                                  <button type="submit" class="btn btn-danger btn-sm ms-2 ">
                                                                                                <i class="dripicons-trash"></i>
                                         </button>
                                     </form>
                                    
                                       
                                    </div>
                                    </td>
                                </tr>
                            @endforeach
                           
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

