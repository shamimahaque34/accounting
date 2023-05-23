@extends('backend.master')

@section('title')
   Manage Taxes Info
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Companies  Info', 'child' => 'Manage'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize float-start">Manage Tax</h4>
                    <a href="{{ route('taxes.create') }}" class="btn btn-success float-end">
                        New Tax
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
                                <th>Rate</th>
                                <th>Type</th>
                                <th>Action</th>
                                <a href="{{ route('taxes-export')}}" class="btn btn-primary btn-sm ms-2">Export</a>
                                        <a href="{{ route('tax-import')}}" class="btn btn-success btn-sm ms-2">Import</a>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($taxes as $tax)
                                <tr>
                                    <tr id="tr_{{$tax->id}}">
                                        <td><input type="checkbox" class="checkbox" data-id="{{$tax->id}}"></td>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $tax->name}}</td>
                                    <td>{{ $tax->rate}}</td>
                                    <td>{{ $tax->type}}</td>
                                   
                                    <td>
                                        <div class=d-flex>
                                        
                                      
                                        <a href="{{ route('taxes.edit',  $tax->id) }}" class="btn btn-info btn-sm ms-2"><i class="dripicons-document-edit"></i></a>
                                        <a class="btn btn-info btn-sm ms-2" title="View Item Detail" href="{{ route('taxdownloadPDF', $tax->id) }} ">Download</a> 
                                        <a class="btn btn-primary btn-sm ms-2" title="View Item Detail" href="{{ route('taxes.show', $tax->id) }} ">Show</a> 
                                     

                                          
                                {{-- <form action="{{ route('taxes.destroy', $tax->id) }}" method="post" style="display: inline-block" onsubmit="return confirm('Are you sure to delete this Tax?');">
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
        {  if(confirm("Are you sure, you want to delete the selected tax?")){  
var strIds = idsArr.join(","); 
$.ajax({
url: "{{ route('tax.delete-multiple-tax') }}",
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

