@extends('backend.master')

@section('title')
   Manage Company Ibs Info
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Companies  Info', 'child' => 'Manage'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize float-start">Manage Company Ibs</h4>
                    <a href="{{ route('company_ibses.create') }}" class="btn btn-success float-end">
                        New Company Ibs
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
                                <th>Account Name</th>
                                <th>Account No</th>
                                <th>Bank Name</th>
                                <th>Bank Branch Name</th>
                                <th>Tin No</th>
                                <th>Vat Or Bin No</th>
                                <th>Contact No And Bkash No</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($companyIbses as $companyIbs)
                                <tr>
                                    <tr id="tr_{{$companyIbs->id}}">
                                        <td><input type="checkbox" class="checkbox" data-id="{{$companyIbs->id}}"></td>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $companyIbs->account_name}}</td>
                                    <td>{{ $companyIbs->account_no}}</td>
                                    <td>{{ $companyIbs->bank_name}}</td>
                                    <td>{{ $companyIbs->bank_branch_name}}</td>
                                    <td>{{ $companyIbs->tin_no}}</td>
                                    <td>{{ $companyIbs->vat_bin_no}}</td>
                                    <td>{{ $companyIbs->contact_number_and_bkash_number}}</td>
                                    <td>
                                        <div class=d-flex>
                                        
                                      
                                        <a href="{{ route('company_ibses.edit',  $companyIbs->id) }}" class="btn btn-info btn-sm ms-2"><i class="dripicons-document-edit"></i></a>
                                     

                                          
                                {{-- <form action="{{ route('company_ibses.destroy', $companyIbs->id) }}" method="post" style="display: inline-block" onsubmit="return confirm('Are you sure to delete this Company Ibs?');">
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
        {  if(confirm("Are you sure, you want to delete the selected Company Ibs?")){  
var strIds = idsArr.join(","); 
$.ajax({
url: "{{ route('company-ibs.delete-multiple-company-ibs') }}",
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

