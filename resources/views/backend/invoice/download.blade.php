<!doctype html>
<html lang="en">

<head>
  <!-- Required Meta Tags Starts Here-->
  {{-- <meta charset="utf-8"> --}}
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <meta property="og:url" content="">
  <meta property="og:title" content="">
  <meta property="og:description" content="">
  <meta property="og:image" content="assets/images/">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Required Meta Tags Ends Here-->

  <!-- CSS Style Link Starts Here -->
  <!-- Bootstrap CSS Link Starts Here-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Bootstrap CSS Link Ends Here-->

  <!-- Custom Template CSS Link Starts Here-->
  <link rel="stylesheet" href="assets/style/style.min.css">
  
  <!-- Custom Template CSS Link Ends Here-->
  <!-- CSS Style Link Ends Here -->

  <!-- Favicon Link Starts Here-->
  <!-- <link rel="icon" href="assets/images/favicon.ico" sizes="16x16"> -->
  <!-- Favicon Link Ends Here-->

  <!-- Website Title Starts Here -->
  <title></title>
  <!-- Website Title Ends Here -->
  <style>
    *{
    box-sizing: border-box;
  }
    .row:after{
    content:'';
    clear:both;
    display: block;
}

body
{  font-family: 'soliamanlipi',sans-serif;}
/* body{
 font-family: "Times New Roman", Times, serif;
  } */
  
  </style>
</head>

<body>
  <!-- Section Starts Here -->
  <section class="py-2" style="padding: 10px 0px;">
    <div class="container" style="margin: 0 auto;  width: 100%;">
      <div class="row">
        <div class="col-lg-6" style="width: 46%; padding:0px 1px; float:left;">
          {{-- @foreach($companies as $company) --}}
          <div class="mt-2" style="margin-top: 6px;">
            <img src="{{asset($invoice->company->logo)}}" alt="Logo" class="img-fluid" style="height: 80px; width:200px">
          </div>
          <p class="text-muted mb-1" style="color:#6c757d; word-wrap:break-word;">
            {{$invoice->company->address}}.+88-{{$invoice->company->phone}}.{{$invoice->company->email}}
          </p>
          <div class="form-check form-check-inline" style="display: flex; align-items:center; ">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="invoice_type" value="0"  {{$invoice->invoice_type == 0 ? ' checked="checked"' :''}} style="font-size:20px" >
            <label class="form-check-label" for="inlineCheckbox1">Commercial</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="" value="1" name="invoice_type" {{$invoice->invoice_type == 1 ? 'checked="checked"' :''}} style="font-size:20px;">
            <label class="form-check-label" for="inlineCheckbox2">Public</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="2" name="invoice_type" {{$invoice->invoice_type == 2 ? 'checked="checked"' :''}} style="font-size:20px">
            <label class="form-check-label" for="inlineCheckbox3">Private</label>
          </div>
          <div class="mt-2" style="margin-top: 6px; word-wrap:break-word;">
            <span class="d-block fw-bold" style="display: block; font-weight:bold;">To,</span>
          
            <p class="mb-0 ms-5 fs-5" style="border-bottom: 1px dotted; margin-bottom:0; margin-left:20px; font-size:16px;">
              {{$invoice->customer->name}}
            </p>
            <p class="mb-0 ms-5 fs-5" style="border-bottom: 1px dotted; margin-bottom:0; margin-left:20px; font-size:16px;">
              {{$invoice->customer->town}}
            </p>
            <p class="mb-0 ms-5 fs-5" style="border-bottom: 1px dotted; margin-bottom:0; margin-left:20px; font-size:16px;">
              {{$invoice->customer->state}}
            </p>
           
          </div>
        </div>
        {{-- @endforeach --}}

        <div style="width: 4%; padding:0px 8px; float:left;">

        </div>

        {{-- @foreach($companyIbses as $companyIbs) --}}
        <div class="col-lg-6" style="width: 46%; padding:0px 1px; float:right;">
          <!-- <p class="fs-5">Created by Voice of Asia</p> -->
          <p class="mt-2 text-center fw-bolder fs-5" style="margin-top: 6px; text-align: center; font-weight: bold; font-size:16px;">Information Form for iBAS + +</p>
          <div class="border border-dark border-2" style="border:1px solid black;">
            <div class="border-bottom border-dark" style="border:1px solid black;">
              <p class="ps-3 mb-0 margin-bottom:0px;margin-top:6px;">Date:{{$invoice->invoice_date}}
                {{-- <script>
                  const date =  new Date().toJSON().slice(0, 10);
                  document.write(date);
                </script> --}}
              </p>
            </div>
            <div class="border-bottom border-dark" style="border:1px solid black;">
              <p class="ps-3 mb-0" style="padding-left: 20px; margin-bottom:0px;margin-top:6px;">Bill No: {{$invoice->invoice_number}}</p>
            </div>
            <div class="border-bottom border-dark" style="border:1px solid black;">
              <p class="ps-3 mb-0" style="padding-left: 20px; margin-bottom:0px;margin-top:6px;">TIN Number: {{ $invoice->companyIbs->tin_no }}</p>
            </div>
            <div class="border-bottom border-dark" style="border:1px solid black;">
              <p class="ps-3 mb-0" style="padding-left: 20px; margin-bottom:0px;margin-top:6px;">VAT/BIN Number:{{ $invoice->companyIbs->vat_bin_no }}</p>
            </div>
            <div class="border-bottom border-dark" style="border:1px solid black;">
              <p class="ps-3 mb-0" style="padding-left: 20px; margin-bottom:0px;margin-top:6px;">Account Name: {{ $invoice->companyIbs->account_name }}</p>
            </div>
            <div class="border-bottom border-dark" style="border:1px solid black;">
              <p class="ps-3 mb-0" style="padding-left: 20px; margin-bottom:0px;margin-top:6px;">Account No: {{ $invoice->companyIbs->account_no }}</p>
            </div>
            <div class="border-bottom border-dark" style="border:1px solid black;">
              <p class="ps-3 mb-0" style="padding-left: 20px; margin-bottom:0px;margin-top:6px;">Bank Name: {{ $invoice->companyIbs->bank_name }}</p>
            </div>
            <div class="border-bottom border-dark" style="border:1px solid black;">
              <p class="ps-3 mb-0" style="padding-left: 20px; margin-bottom:0px;margin-top:6px;">Bank Branch Name: {{ $invoice->companyIbs->bank_branch_name }}</p>
            </div>
            <div>
              <p class="ps-3 mb-0" style="padding-left: 20px; margin-bottom:10px;margin-top:6px;">Contact Number & Bkash Number: {{ $invoice->companyIbs->contact_number_and_bkash_number}}.</p>
            </div>
          </div>
        </div>
      </div>
      {{-- @endforeach --}}
      <div class="text-center mt-3" style="text-align: center; margin-top:3px;">
        <span class="bg-dark text-white d-inline-block px-4 py-2 rounded-4 fw-bold fs-5" style="background-color: black ;color:white;display:inline-block;padding:4px 10px;font-weight:bold;font-size:16px; border-radius:8px; margin-left:-20px;">Advertising Bill
        </span>
      </div>
      <div class="row">
        <div class="col-lg-12" style="width: 100%; padding:0px 8px;">
          <p class="fs-5 d-inline-block" style="border-bottom: 1px dotted; font-size:16px;display:inline-block">
            <span class="fs-6 fw-bold" style="font-size-16px;font-weight:bold">Memorial No #</span>
            <span>{{$invoice->memo_number}}</span>
          </p>
          <table class="table table-bordered mt-2" border="2" width="100%" style="margin-top: 2px; border:1px solid black;">
            <thead>
              <tr class="text-center" style="text-align: center;">
                <th scope="col" style="border:1px solid black;">Order No and Date</th>
                <th scope="col" style="border:1px solid black">Heading</th>
                <th scope="col" style="border:1px solid black">Position</th>
                <th scope="col" style="border:1px solid black">Published Date</th>
                <th scope="col" style="border:1px solid black">Size(column/inch)</th>
                <th scope="col" style="border:1px solid black">Rate(inch/column)</th>
                <th scope="col" style="border:1px solid black">Principal Amount</th>
              </tr>
            </thead>
            <tbody>
              <tr class="text-center" style="text-align: center;border:1px solid black;">
                <th scope="row">{{$invoice->order_date}}</th>
                <td style="border:1px solid black">{{$invoice->heading}}</td>
                <td style="border:1px solid black">{{$invoice->position}}</td>
                <td style="border:1px solid black">{{$invoice->published_date}}</td>
                <td style="border:1px solid black">{{$invoice->inch}}</td>
                <td style="border:1px solid black">{{$invoice->rate}}</td>
                <td style="border:1px solid black" id="principalAmount">{{$invoice->total}}</td>
              </tr>
            </tbody>
          </table>
          <div class="row" style="display: flex">
            <div style="width:29%; float:left;">

            </div>
            <div class="col-lg-5 offset-lg-4" style="width: 41.66% ;padding:0px 8px;float:left;">
                <p class="text-center" style="text-align:center" >Color charge <span id="colorCharge">{{$invoice->color_charge}}</span>%(+)</p>
                <p class="text-center" style="text-align:center" >First Page charge <span id="firstPageCharge">{{$invoice->first_page_charge}}</span>%(+)</p>
                <p class="text-center" style="text-align:center">Commercial charge <span id="commercialCharge">{{$invoice->commercial_charge}}</span>%(+)</p>
                <p class="ms-5 text-center" style="text-align:center;margin-left:20px;">Vat <span id="vat">{{$invoice->vat}}</span>%(+)</p>
                <p class="ms-5 text-center" style="text-align:center;margin-left:20px;">Tax <span id="tax">{{$invoice->tax_id}}</span>%(+)</p>
                <p class="ms-5 text-center" style="text-align:center;margin-left:20px;"id="totalTaka">Total Taka</p>
                <p class="ms-5 text-center"style="text-align:center;margin-left:20px;" id="payableTaka">Payable Taka</p>


            </div>

            <div class="col-lg-1" style="width: 8.33% ;padding:0px 8px; float:left;">
                <p class="text-center" style="text-align:center">=</p>
                <p class="text-center" style="text-align:center">=</p>
                <p class="text-center" style="text-align:center">=</p>
                <p class="text-center" style="text-align:center">=</p>
                <p class="text-center" style="text-align:center">=</p>
                <p class="text-center" style="text-align:center">=</p>
                <p class="text-center" style="text-align:center">=</p>

            </div>
            <div class="col-lg-2" style="width: 16.66% ;padding:0px 8px; float:right;">
                <p class="text-center" id="colorChargeCal" style="text-align:center">{{$invoice->color_charge_cal}}/=</p>
                <p class="text-center" id="firstPageChargeCal" style="text-align:center">{{$invoice->first_page_charge_cal}}/=</p>
                <p class="text-center" id="commercialChargeCal" style="text-align:center">{{$invoice->commercial_charge_cal}}/=</p>
                <p class="text-center" id="vatCal" style="text-align:center">{{$invoice->vat_cal}}/=</p>
                <p class="text-center" id="taxCal" style="text-align:center">{{$invoice->tax_cal}}/=</p>
                <p class="text-center" id="totalTakaCal" style="text-align:center">{{$invoice->total_taka_cal}}/=</p>
                <p class="text-center" id="payableTakaCal" style="text-align:center">{{$invoice->payable_taka_cal}}/=</p>

            </div>
          </div>
          {{--  --}}
          {{-- <div class="d-flex justify-content-end">
            <div>
                
            </div>
            <div>
                
            </div> --}}
            {{-- <div>
                
          
          <p>First Page charge {{$invoice->first_page_charge}}%(+)=    0/+</p>
          <p>Commercial charge {{$invoice->commercial_charge}}%(+)=    0/+</p>
          <p>Vat {{$invoice->vat}}%(+)=    0/+</p>
          <p>Total Taka=    0/+</p>
          <p>Payable Taka=    0/+</p>
        </div> --}}
        </div>
        @php $totalAmount =$invoice->payable_taka_cal;
          $amountInWords = ucwords((new NumberFormatter('en_IN', NumberFormatter::SPELLOUT))->format($totalAmount));@endphp

          <p class="mt-2" style="margin-top:2px">
            <span class="me-2 fw-bold" style="margin-right: 20px ; font-weight:bold;">In Word :</span>
            <span class="fs-5" style="font-size: 20px">{{$amountInWords}}</span>
          </p>
          <div class="fs-5 p-1 text-white bg-secondary" style="font-size: 16px; color:white;background-color:#6c757d">
            <span class="fw-bold" style="">'{{$invoice->company->name}}' নামে চেক/পে-অর্ডার/ডিডি এর মাধ্যমে বিল প্রদান করুন । </span>
          </div>
          <p class="text-center my-1 fw-bold border-bottom border-dark" style="text-align: center; margin: 0 4px; border-bottom:1px solid black;">
            এই মর্মে প্রত্যয়ন করা যাচ্ছে, উপরোক্ত স্মারকে প্রদত্ত বিজ্ঞাপনটি "{{$invoice->company->name_bangla}}" পত্রিকায় {{$invoice->published_date}} তারিখে প্রকাশিত সকল কপিতে প্রকাশ করা হয়েছে ।          
          </p>
          <div class="row" style="display: flex">
            <div class="col-lg-3 text-center" style="text-align: center;width: 24% ;padding:0px 1px; float:left;">
              <p class="d-inline-block fs-5 fw-bold mb-0 border-top border-dark" style="margin-top: 160px; font-size:16px; font-weight:bold;margin-bottom:0px; border-top:1px solid black;">
                Bill preparer
              </p>
            </div>
            <div  style="text-align: center;width: 24% ;padding:0px 1px; float:left;">
              <p class="d-inline-block fs-5 fw-bold mb-0 border-top border-dark" style="margin-top: 160px; font-size:16px; font-weight:bold;margin-bottom:0px; border-top:1px solid black;">
                
              Accounts Officer
              </p>
            </div>
            <div class="col-lg-3 text-center"  style="text-align: center;width: 24% ;padding:0px 1px;float:left;">
              <p class="d-inline-block fs-5 fw-bold mb-0 border-top border-dark" style="margin-top: 160px; font-size:16px; font-weight:bold;margin-bottom:0px; border-top:1px solid black;">
                Advertising Manager
              </p>
            </div>
            <div class="col-lg-3 text-center"  style="text-align: center;width: 24% ;padding:0px 1px;float:left;">
              <p class="d-inline-block fs-5 fw-bold mb-0 border-top border-dark" style="margin-top: 160px; font-size:16px; font-weight:bold;margin-bottom:0px; border-top:1px solid black;">
                General Manager

              </p>
            </div>
          </div>
          <div class="row mt-5" style="display: flex;margin-top:16px;">
            <div class="col-lg-4" style="width: 33% ;padding:0px 1px;float:left;">
              <p class="text-muted fw-bold fs-5" style="font-weight: bold; text-color:color:#6c757d;;font-size:16px;">
                {{$invoice->company->website}}
              </p>
            </div>
            <div class="col-lg-4" style="width: 33% ;padding:0px 1px;float:left;">
              <p class="text-dark fw-bold fs-5"  style="font-weight: bold; text-color:color:#6c757d;;font-size:16px;">
                {{$invoice->company->phone}}
              </p>
            </div>
            <div class="col-lg-4" style="width: 33% ;padding:0px 1px;float:right;">
              <p class="text-muted fw-bold fs-5"  style="font-weight: bold; text-color:color:#6c757d;;font-size:16px;">
                {{$invoice->company->website}}
              </p>
            </div>
          </div>
          <div class="fs-5 p-1 text-white bg-secondary text-center"  style="color: white; text-color:color:#6c757d;;font-size:16px; text-align:center">
            <span>Please pay Your Vat to National Ex-Cheque with Your own Responsibility .</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section Ends Here -->

  <!-- Script Link Starts Here -->
  <!-- Bootstrap JS Link Starts Here -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <!-- Bootstrap JS Link Ends Here -->

  <!--Custom Template Script Link Starts Here -->
  <script src="assets/script/script.js"></script>
  <!--Custom Template Script Link Ends Here -->
  <!-- Script Link Ends Here -->

</body>
{{-- <script>
  var colorCharge = document.getElementById('colorCharge').innerHTML;
  // console.log(colorCharge);
  var firstPageCharge = document.getElementById('firstPageCharge').innerHTML;
  // console.log(firstPageCharge);
  var commercialCharge = document.getElementById('commercialCharge').innerHTML;
  // console.log(commercialCharge);
  var vat = document.getElementById('vat').innerHTML;
  // console.log(vat );
  var tax = document.getElementById('tax').innerHTML;

  var totalTaka = document.getElementById('totalTaka');
  var payableTaka = document.getElementById('payableTaka');

  var principalAmount =document.getElementById('principalAmount').innerText;
  // console.log(principalAmount);

  var colorChargeCalculation = (principalAmount*colorCharge)/100;
  // console.log(colorChargeCalculation);


  var firstPageChargeCalculation = (principalAmount*firstPageCharge)/100;

  var commercialChargeCalculation = (principalAmount*commercialCharge)/100;

  var vatCalculation = (principalAmount*vat)/100;

  var taxCalculation = (principalAmount*tax)/100;

  var colorChargeCal = document.getElementById('colorChargeCal');
  colorChargeCal .innerHTML = colorChargeCalculation +'/=';
  
  var firstPageChargeCal = document.getElementById('firstPageChargeCal');
  firstPageChargeCal .innerHTML = firstPageChargeCalculation +'/=';

  var commercialChargeCal = document.getElementById('commercialChargeCal');
  commercialChargeCal .innerHTML = commercialChargeCalculation +'/=';

  var vatCal = document.getElementById('vatCal');
  vatCal .innerHTML = vatCalculation +'/=';

  var taxCal = document.getElementById('taxCal');
  taxCal .innerHTML = taxCalculation +'/=';

  var totalTakaCalculation = Number(principalAmount) + Number(colorChargeCalculation) + Number(firstPageChargeCalculation)+ Number(commercialChargeCalculation) + Number(vatCalculation) + Number(taxCalculation);

  // console.log(totalTakaCalculation);

  var totalTakaCal = document.getElementById('totalTakaCal');
  totalTakaCal.innerHTML =totalTakaCalculation +'/=';


  var payableTakaCal = document.getElementById('payableTakaCal');

</script> --}}

</html>