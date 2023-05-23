@extends('backend.master')

@section('title')
   Manage Registrations Info
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Companies  Info', 'child' => 'Manage'])
@endsection

@section('body')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="text-capitalize float-start">Manage Registration</h4>
              
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
                            <th>Father's Name</th>
                            <th>Date of Birth</th>
                            <th>Id Card No</th>
                            <th>Parent's Id Card No</th>
                            <th>Id Card Image</th>
                            <th>Parent's Id Card Image</th>
                            <th>Cv</th>
                            <th>Permanet Address</th>
                            <th>Agent Address</th>
                            <th>Agrani Bank Account No</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Image</th>
                            <th>Blood Group</th>
                            <th>District</th>
                            <th>Police Station</th>
                            <th>Facebook Account</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($registrations as $registration)
                            <tr>
                                <tr id="tr_{{$registration->id}}">
                                    <td><input type="checkbox" class="checkbox" data-id="{{$registration->id}}"></td>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $registration->name}}</td>
                                <td>{{ $registration->father_name}}</td>
                                <td>{{ $registration->date_of_birth}}</td>
                                <td>{{ $registration->id_card_no}}</td>
                                <td>{{ $registration->parent_id_card_no}}</td>
                                <td><img src="{{asset($registration->id_card_image)}}" alt="" height="60" width="80"/></td>
                                <td><img src="{{asset($registration->parent_id_card_image)}}" alt="" height="60" width="80"/></td>
                                <td>{{ $registration->cv}}</td>
                                <td>{!! $registration->permanent_address !!}</td>
                                <td>{{ $registration->agent_address }}</td>
                                <td>{{ $registration->bank_account_no}}</td>
                                <td>{{ $registration->branch}}</td>
                                <td>{{ $registration->mobile}}</td>
                                <td>{{ $registration->email}}</td>
                                <td><img src="{{asset($registration->image)}}" alt="" height="60" width="80"/></td>
                                <td>{{ $registration->blood_group}}</td>
                                <td>{{ $registration->district}}</td>
                                <td>{{ $registration->sub_district}}</td>
                                <td>{{ $registration->facebook_account}}</td>
                                <td>{{ $registration->password}}</td>
                                <td>
                                    <div class=d-flex>

                                        
                                        <a href="{{route('users.add', $registration->id)}}" class="btn btn-primary btn-sm  ms-2 ">Create User</a>
                                        {{-- <form action="{{ route('registrations.destroy',['id' =>  $registration->id]) }}" method="post" style="display: inline-block" onsubmit="return confirm('Are you sure to delete this Registration?');">
                                            @csrf
                                         @method('delete')
                                 <button type="submit" class="btn btn-danger btn-lg ms-2 ">
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
    {  if(confirm("Are you sure, you want to delete the selected registration?")){  
var strIds = idsArr.join(","); 
$.ajax({
url: "{{ route('register.delete-multiple-register') }}",
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

