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
                        <button style="margin: 5px;" class="btn btn-danger btn-xs delete-all" data-url=""> <i class="dripicons-trash"></i></button>
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th><span>Select All</span><br><input type="checkbox" id="check_all"></th>
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
                                    <tr id="tr_{{$currency->id}}">
                                        <td><input type="checkbox" class="checkbox" data-id="{{$currency->id}}"></td>
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
                                     

                                          
                                {{-- <form action="{{ route('currencies.destroy', $currency->id) }}" method="post" style="display: inline-block" onsubmit="return confirm('Are you sure to delete this Currency?');">
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
        {  if(confirm("Are you sure, you want to delete the selected currency?")){  
var strIds = idsArr.join(","); 
$.ajax({
url: "{{ route('currency.delete-multiple-currency') }}",
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

