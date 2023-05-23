<table>
    <thead>
    <tr>
        
        <th>SN</th>
        <th>Invoice Type</th>
        <th>Company Name</th>
        <th>Company Ibs Name</th>
        <th>Tax Rate</th>
        <th>Invoice Date</th>
        <th>Invoice Number</th>
        <th>Order Date</th>
        <th>Memo Number</th>
        <th>Heading</th>
        <th>Position</th>
        <th>Published Date</th>
        <th>Inch</th>
        <th>Col</th>
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
        <th>Total</th>
       
      
    </tr>
    </thead>
    <tbody>

    @foreach($invoices as $invoice)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td> 
                @if($invoice->invoice_type==0)
                {{'Commercial'}}
                @elseif($invoice->invoice_type==1)
                {{'Govt'}}
                @elseif($invoice->invoice_type==2)
                {{'Private'}}
                @endif
            </td>
                                    <td>{{ $invoice->company->name ?? ''}}</td>
                                    <td>{{ $invoice->companyIbs->name ?? ''}}</td>
                                    <td>{{ $invoice->tax->rate ?? ''}}</td>
                                    <td>{{ $invoice->invoice_date}}</td>
                                    <td>{{ $invoice->invoice_number}}</td>
                                    <td>{{ $invoice->order_date}}</td>
                                    <td>{{ $invoice->memo_number}}</td>
                                    <td>{{ $invoice->heading}}</td>
                                    <td>{{ $invoice->position}}</td>
                                    <td>{{ $invoice->published_date}}</td>
                                    <td>{{ $invoice->inch}}</td>
                                    <td>{{ $invoice->col}}</td>
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
                                    <td>{{ $invoice->total}}</td>
        </tr>
    @endforeach
   
    </tbody>
</table>