@extends('backend.master')

@section('title')
   Manage Invoices Info
@endsection

@section('body-title-section')
    @include('backend.includes.body-page-title-two',['parent'=>'Companies  Info', 'child' => 'Manage'])
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-capitalize float-start">Manage Invoice</h4>
                    <a href="{{ route('invoices.create') }}" class="btn btn-success float-end">
                        New Invoice
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
                                <th>Company Name</th>
                                <th>Company Ibs Id</th>
                                <th>Invoice Type</th>
                                <th>Invoice Date</th>
                                <th>Invoice Number</th>
                                <th>Order Date</th>
                                <th>Memo Number</th>
                                <th>Heading</th>
                                <th>Position</th>
                                <th>Published Date</th>
                                <th>Inch</th>
                                <th>Rate</th>
                                <th>Customer Id</th>
                                <th>Customer Name</th>
                                <th>Customer Email</th>
                                <th>Customer Tax Number</th>
                                <th>Customer Phone</th>
                                <th>Customer Address</th>
                                <th>Color Charge</th>
                                <th>First Page Charge</th>
                                <th>Back Page Charge</th>
                                <th>Commercial Charge</th>
                                <th>Commision</th>
                                <th>Vat</th>
                                <th>Tax</th>
                                <th>Total</th>
                                <th>Sender Email</th>
                                <a href="{{ route('invoices-export')}}" class="btn btn-primary btn-sm ms-2">Export</a>
                                        <a href="{{ route('invoice-import')}}" class="btn btn-success btn-sm ms-2">Import</a>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($invoices as $invoice)
                                <tr>
                                    <tr id="tr_{{$invoice->id}}">
                                        <td><input type="checkbox" class="checkbox" data-id="{{$invoice->id}}"></td>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $invoice->company->name ?? ''}}</td>
                                    <td>{{ $invoice->companyIbs->account_name ?? ''}}</td>
                                   
                                    <td> 
                                        @if($invoice->invoice_type==0)
                                        {{'Commercial'}}
                                        @elseif($invoice->invoice_type==1)
                                        {{'Public'}}
                                        @elseif($invoice->invoice_type==2)
                                        {{'Private'}}
                                        @endif
                                    </td>
                                    <td>{{ $invoice->invoice_date}}</td>
                                    <td>{{ $invoice->invoice_number}}</td>
                                    <td>{{ $invoice->order_date}}</td>
                                    <td>{{ $invoice->memo_number}}</td>
                                    <td>{{ $invoice->heading}}</td>
                                    <td>{{ $invoice->position}}</td>
                                    <td>{{ $invoice->published_date}}</td>
                                    <td>{{ $invoice->inch}}</td>
                                    <td>{{ $invoice->rate}}</td>
                                    <td>{{ $invoice->customer_id}}</td>
                                    <td>{{ $invoice->customer_name}}</td>
                                    <td>{{ $invoice->customer_email}}</td>
                                    <td>{{ $invoice->customer_tax_number}}</td>
                                    <td>{{ $invoice->customer_phone}}</td>
                                    <td>{{ $invoice->customer_address}}</td>
                                    <td>{{ $invoice->color_charge}}</td>
                                    <td>{{ $invoice->first_page_charge}}</td>
                                    <td>{{ $invoice->back_page_charge}}</td>
                                    <td>{{ $invoice->commercial_charge}}</td>
                                    <td>{{ $invoice->commision}}</td>
                                    <td>{{ $invoice->vat}}</td>
                                    <td>{{ $invoice->tax_id}}</td>
                                    <td>{{ $invoice->total}}</td>
                                    <td> @php
                                         $sender_emails = $invoice->sender_email
                                        
                                        @endphp
                                       
                                       
                                       
                                        {{ $sender_emails}}
                                       
                                    </td>

                                    <td>
                                      <div class=d-flex>
                                        <a href="{{ route('invoices.edit',  $invoice->id) }}" class="btn btn-info btn-sm ms-2"><i class="dripicons-document-edit"></i></a>
                                        <a class="btn btn-info btn-sm ms-2" title="View Invoice Detail" href="{{ route('invoicedownloadPDF', $invoice->id) }}">Download</a> 
                                        <a class="btn btn-primary btn-sm ms-2" title="View Invoice Detail" href="{{ route('invoices.show', $invoice->id) }} ">Show</a> 
                                        <a href="{{url('send-mail',$invoice->id)}}" class="btn btn-info btn-sm ms-2">Mail</a>

                                     

                                          
                                {{-- <form action="{{ route('invoices.destroy', $invoice->id) }}" method="post" style="display: inline-block" onsubmit="return confirm('Are you sure to delete this Invoice?');">
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
        {  if(confirm("Are you sure, you want to delete the selected invoice?")){  
var strIds = idsArr.join(","); 
$.ajax({
url: "{{ route('invoice.delete-multiple-invoice') }}",
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

