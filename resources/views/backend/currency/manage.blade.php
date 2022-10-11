@extends('backend.master')

@section('title')
   Manage Currencies Info
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Companies  Info', 'child' => 'Manage'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize float-start">Manage Currency</h4>
                    <a href="{{ route('currencies.create') }}" class="btn btn-success float-end">
                        New Currency
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>Name</th>
                                <th>Code</th>
                                <th>Rate</th>
                                <th>Precision</th>
                                <th>Symbol</th>
                                <th>Symbol First</th>
                                <th>Decimal Mark</th>
                                <th>Thousands Separator</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tbody>
                            @foreach($currencies as $currency)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $currency->name}}</td>
                                    <td>{{ $currency->code}}</td>
                                    <td>{{ $currency->rate}}</td>
                                    <td>{{ $currency->precision}}</td>
                                    <td>{{ $currency->symbol}}</td>
                                    <td>{{ $currency->symbol_first}}</td>
                                    <td>{{ $currency->decimal_mark}}</td>
                                    <td>{{ $currency->thousands_separator}}</td>

                                    <td>
                                        <div class=d-flex>
                                        
                                      
                                        <a href="{{ route('currencies.edit',  $currency->id) }}" class="btn btn-info btn-sm ms-2"><i class="dripicons-document-edit"></i></a>
                                     

                                          
                                <form action="{{ route('currencies.destroy', $currency->id) }}" method="post" style="display: inline-block" onsubmit="return confirm('Are you sure to delete this Currency?');">
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

