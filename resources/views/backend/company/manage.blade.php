@extends('backend.master')

@section('title')
   Manage Companies Info
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Companies  Info', 'child' => 'Manage'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize float-start">Manage Company</h4>
                    <a href="{{ route('companies.create') }}" class="btn btn-success float-end">
                        New Company
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
                                <th>Bangla Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Logo</th>
                                <th>Tax Number</th>
                                <th>Currency</th>
                                <th>Language</th>
                                <th>Address</th>
                                <th>Town</th>
                                <th>Postal Code</th>
                                <th>State</th>
                                <th>Country</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($companies as $company)
                                <tr>
                                    <tr id="tr_{{$company->id}}">
                                        <td><input type="checkbox" class="checkbox" data-id="{{$company->id}}"></td>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $company->name}}</td>
                                    <td>{{ $company->name_bangla}}</td>
                                    <td>{{ $company->email}}</td>
                                    <td>{{ $company->phone}}</td>
                                    <td><img src="{{asset($company->logo)}}" alt="" height="60" width="80"/></td>
                                    <td>{{ $company->tax_number}}</td>
                                    <td>{{ $company->currency->name ?? ''}}</td>
                                    <td>{{ $company->language_id}}</td>
                                    <td>{{ $company->address}}</td>
                                    <td>{{ $company->town}}</td>
                                    <td>{{ $company->postal_code}}</td>
                                    <td>{{ $company->state}}</td>
                                    <td>{{ $company->country}}</td>
                                    <td>
                                        <div class=d-flex>
                                        
                                      
                                        <a href="{{ route('companies.edit',  $company->id) }}" class="btn btn-info btn-sm ms-2"><i class="dripicons-document-edit"></i></a>
                                     

                                          
                                {{-- <form action="{{ route('companies.destroy', $company->id) }}" method="post" style="display: inline-block" onsubmit="return confirm('Are you sure to delete this Company?');">
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
        {  if(confirm("Are you sure, you want to delete the selected company?")){  
var strIds = idsArr.join(","); 
$.ajax({
url: "{{ route('company.delete-multiple-company') }}",
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

