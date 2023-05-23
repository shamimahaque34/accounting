@extends('backend.master')

@section('title')
   Manage Customers Info
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Companies  Info', 'child' => 'Manage'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize float-start">Manage Customer</h4>
                    <a href="{{ route('customers.create') }}" class="btn btn-success float-end">
                        New Customer
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <button style="margin: 5px;" class="btn btn-danger btn-xs delete-all" data-url=""> <i class="dripicons-trash"></i></button>
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th><span>Select All</span><br><input type="checkbox" id="check_all"></th>
                                <th>SN</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Website</th>
                                <th>Reference</th>
                                <th>Tax Number</th>
                                <th>Currency</th>
                                <th>Address</th>
                                <th>Town</th>
                                <th>Postal Code</th>
                                <th>State</th>
                                <th>Country</th>
                                <th>Action</th>
                                <a href="{{ route('customers-export')}}" class="btn btn-primary btn-sm ms-2">Export</a>
                                        <a href="{{ route('customer-import')}}" class="btn btn-success btn-sm ms-2">Import</a>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($customers as $customer)
                                <tr>
                                    <tr id="tr_{{$customer->id}}">
                                        <td><input type="checkbox" class="checkbox" data-id="{{$customer->id}}"></td>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $customer->name}}</td>
                                    <td>{{ $customer->email}}</td>
                                    <td>{{ $customer->phone}}</td>
                                    <td>{{ $customer->website}}</td>
                                    <td>{{ $customer->reference}}</td>
                                    <td>{{ $customer->tax_number}}</td>
                                    <td>{{ $customer->currency->name ?? ''}}</td>
                                    <td>{{ $customer->address}}</td>
                                    <td>{{ $customer->town}}</td>
                                    <td>{{ $customer->postal_code}}</td>
                                    <td>{{ $customer->state}}</td>
                                    <td>{{ $customer->country}}</td>
                                    <td>
                                        <div class=d-flex>
                                        
                                      
                                        <a href="{{ route('customers.edit',  $customer->id) }}" class="btn btn-info btn-sm ms-2"><i class="dripicons-document-edit"></i></a>
                                        <a class="btn btn-info btn-sm ms-2" title="View Customer Detail" href="{{ route('customerdownloadPDF', $customer->id) }} ">Download</a> 
                                        <a class="btn btn-primary btn-sm ms-2" title="View Customer Detail" href="{{ route('customers.show', $customer->id) }} ">Show</a> 

                                     

                                          
                                {{-- <form action="{{ route('customers.destroy', $customer->id) }}" method="post" style="display: inline-block" onsubmit="return confirm('Are you sure to delete this Customer?');">
                                             @csrf
                                          @method('delete')
                                  <button type="submit" class="btn btn-danger btn-sm ms-2 ">
                                                                                                <i class="dripicons-trash"></i>
                                         </button>
                                     </form> --}}
                                    
                                       
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
    @section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            
        $('#check_all').on('click', function(e) {
        if($(this).is(':checked',true))  
        {
        $(".checkbox").prop('checked', true);  
        } else {  
        $(".checkbox").prop('checked',false);  
        }  
        });

        $('.checkbox').on('click',function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
        $('#check_all').prop('checked',true);
        }else{
        $('#check_all').prop('checked',false);
        }
        });

        $('.delete-all').on('click', function(e) {
        var idsArr = [];  
        $(".checkbox:checked").each(function() {  
        idsArr.push($(this).attr('data-id'));
        });  
        if(idsArr.length <=0)  
        {  
        alert("Please select atleast one record to delete.");  
        }  
        else 
        {  if(confirm("Are you sure, you want to delete the selected customer?")){  
var strIds = idsArr.join(","); 
$.ajax({
url: "{{ route('customer.delete-multiple-customer') }}",
type: 'DELETE',
headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
data: 'ids='+strIds,
success: function (data) {
if (data['status']==true) {
$(".checkbox:checked").each(function() {  
$(this).parents("tr").remove();
});
toastr.success(data.success);
$('#check_all').prop('checked',false);



} else {
alert('Whoops Something went wrong!!');
}
},
error: function (data) {

}
});
}  
}  
});
   
});
</script>
    @endsection
@endsection

