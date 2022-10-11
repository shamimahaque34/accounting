@extends('backend.master')

@section('title')
   Tax detail
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Companies  Info', 'child' => 'Manage'])
@endsection

@section('body')
<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize text-center">Tax Detail</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table dt-responsive nowrap w-100">
                           
                            <tr>
                                <th>Tax Name</th>
                                <td>{{$tax->name}}</td>
                            </tr>

                            <tr>
                                <th>Rate</th>
                                <td>{{ $tax->rate}}</td>
                            </tr>

                            <tr>
                                <th>Type</th>
                                <td>{{ $tax->type}}</td>
                            </tr>

                          
                                  
                                  
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

