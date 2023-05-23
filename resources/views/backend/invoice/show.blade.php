<!doctype html>
<html lang="en">

<head>
  <!-- Required Meta Tags Starts Here-->
  <meta charset="utf-8">
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
</head>

<body>
  <!-- Section Starts Here -->
  <section class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          {{-- @foreach($companies as $company) --}}
          <div class="mt-2">
            <img src="{{asset($invoice->company->logo)}}" alt="Logo" class="img-fluid" style="height: 80px; width:200px">
          </div>
          <p class="text-muted mb-1">
            {{$invoice->company->address}}.+88-{{$invoice->company->phone}}.{{$invoice->company->email}}
          </p>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="invoice_type" value="0"  {{$invoice->invoice_type == 0 ? 'checked' :''}} >
            <label class="form-check-label" for="inlineCheckbox1"> {{'Commercial'}}</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="invoice_type" {{$invoice->invoice_type == 1 ? 'checked' :''}}>
            <label class="form-check-label" for="inlineCheckbox2">Public</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="2" name="invoice_type" {{$invoice->invoice_type == 2 ? 'checked' :''}}>
            <label class="form-check-label" for="inlineCheckbox3">Private</label>
          </div>
          <div class="mt-2">
            <span class="d-block fw-bold">To,</span>
          
            <p class="mb-0 ms-5 fs-5" style="border-bottom: 1px dotted;">
              {{$invoice->customer->name}}
            </p>
            <p class="mb-0 ms-5 fs-5" style="border-bottom: 1px dotted;">
              {{$invoice->customer->town}}
            </p>
            <p class="mb-0 ms-5 fs-5" style="border-bottom: 1px dotted;">
              {{$invoice->customer->state}}
            </p>
           
          </div>
        </div>
        {{-- @endforeach --}}

        

        {{-- @foreach($companyIbses as $companyIbs) --}}
        <div class="col-lg-6">
          <!-- <p class="fs-5">Created by Voice of Asia</p> -->
          <p class="mt-2 text-center fw-bolder fs-5">Information Form for iBAS + +</p>
          <div class="border border-dark border-2">
            <div class="border-bottom border-dark">
              <p class="ps-3 mb-0">Date:{{$invoice->invoice_date}}
                {{-- <script>
                  const date =  new Date().toJSON().slice(0, 10);
                  document.write(date);
                </script> --}}
              </p>
            </div>
            <div class="border-bottom border-dark">
              <p class="ps-3 mb-0">Bill No: {{$invoice->invoice_number}}</p>
            </div>
            <div class="border-bottom border-dark">
              <p class="ps-3 mb-0">TIN Number: {{ $invoice->companyIbs->tin_no }}</p>
            </div>
            <div class="border-bottom border-dark">
              <p class="ps-3 mb-0">VAT/BIN Number:{{ $invoice->companyIbs->vat_bin_no }}</p>
            </div>
            <div class="border-bottom border-dark">
              <p class="ps-3 mb-0">Account Name: {{ $invoice->companyIbs->account_name }}</p>
            </div>
            <div class="border-bottom border-dark">
              <p class="ps-3 mb-0">Account No: {{ $invoice->companyIbs->account_no }}</p>
            </div>
            <div class="border-bottom border-dark">
              <p class="ps-3 mb-0">Bank Name: {{ $invoice->companyIbs->bank_name }}</p>
            </div>
            <div class="border-bottom border-dark">
              <p class="ps-3 mb-0">Bank Branch Name: {{ $invoice->companyIbs->bank_branch_name }}</p>
            </div>
            <div>
              <p class="ps-3 mb-0">Contact Number & Bkash Number: {{ $invoice->companyIbs->contact_number_and_bkash_number}}.</p>
            </div>
          </div>
        </div>
      </div>
      {{-- @endforeach --}}
      <div class="text-center mt-3">
        <span class="bg-dark text-white d-inline-block px-4 py-2 rounded-4 fw-bold fs-5">Advertising Bill
        </span>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <p class="fs-5 d-inline-block" style="border-bottom: 1px dotted;">
            <span class="fs-6 fw-bold">Memorial No #</span>
            <span>{{$invoice->memo_number}}</span>
          </p>
          <table class="table table-bordered mt-2">
            <thead>
              <tr class="text-center">
                <th scope="col">Order No and Date</th>
                <th scope="col">Heading</th>
                <th scope="col">Position</th>
                <th scope="col">Published Date</th>
                <th scope="col">Size(column/inch)</th>
                <th scope="col">Rate(inch/column)</th>
                <th scope="col">Principal Amount</th>
              </tr>
            </thead>
            <tbody>
              <tr class="text-center">
                <th scope="row">{{$invoice->order_date}}</th>
                <td>{{$invoice->heading}}</td>
                <td>{{$invoice->position}}</td>
                <td>{{$invoice->published_date}}</td>
                <td>{{$invoice->inch}}</td>
                <td>{{$invoice->rate}}</td>
                <td id="principalAmount">{{$invoice->total}}</td>
              </tr>
            </tbody>
          </table>
          <div class="row">
            <div class="col-lg-5 offset-lg-4">
                <p class="text-center" >Color charge <span id="colorCharge">{{$invoice->color_charge}}</span>%(+)</p>
                <p class="text-center" >First Page charge <span id="firstPageCharge">{{$invoice->first_page_charge}}</span>%(+)</p>
                <p class="text-center">Commercial charge <span id="commercialCharge">{{$invoice->commercial_charge}}</span>%(+)</p>
                <p class="ms-5 text-center" >Vat <span id="vat">{{$invoice->vat}}</span>%(+)</p>
                <p class="ms-5 text-center" >Tax <span id="tax">{{$invoice->tax_id}}</span>%(+)</p>
                <p class="ms-5 text-center" id="totalTaka">Total Taka</p>
                <p class="ms-5 text-center" id="payableTaka">Payable Taka</p>


            </div>

            <div class="col-lg-1">
                <p class="text-center">=</p>
                <p class="text-center">=</p>
                <p class="text-center">=</p>
                <p class="text-center">=</p>
                <p class="text-center">=</p>
                <p class="text-center">=</p>
                <p class="text-center">=</p>

            </div>
            <div class="col-lg-2">
                <p class="text-center" id="colorChargeCal">0/=</p>
                <p class="text-center" id="firstPageChargeCal">0/=</p>
                <p class="text-center" id="commercialChargeCal">0/=</p>
                <p class="text-center" id="vatCal">0/=</p>
                <p class="text-center" id="taxCal">0/=</p>
                <p class="text-center" id="totalTakaCal">0/=</p>
                <p class="text-center" id="payableTakaCal">0/=</p>

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

          <p class="mt-2">
            <span class="me-2 fw-bold">In Word :</span>
            <span class="fs-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</span>
          </p>
          <div class="fs-5 p-1 text-white bg-secondary">
            <span class="fw-bold">'{{$invoice->company->name}}' নামে চেক/পে-অর্ডার/ডিডি এর মাধ্যমে বিল প্রদান করুন । </span>
          </div>
          <p class="text-center my-1 fw-bold border-bottom border-dark">
            এই মর্মে প্রত্যয়ন করা যাচ্ছে, উপরোক্ত স্মারকে প্রদত্ত বিজ্ঞাপনটি "{{$invoice->company->name_bangla}}" পত্রিকায় {{$invoice->published_date}} তারিখে প্রকাশিত সকল কপিতে প্রকাশ করা হয়েছে ।          
          </p>
          <div class="row">
            <div class="col-lg-3 text-center">
              <p class="d-inline-block fs-5 fw-bold mb-0 border-top border-dark" style="margin-top: 160px;">
                Bill preparer
              </p>
            </div>
            <div class="col-lg-3 text-center">
              <p class="d-inline-block fs-5 fw-bold mb-0 border-top border-dark" style="margin-top: 160px;">
                
              Accounts Officer
              </p>
            </div>
            <div class="col-lg-3 text-center">
              <p class="d-inline-block fs-5 fw-bold mb-0 border-top border-dark" style="margin-top: 160px;">
                Advertising Manager
              </p>
            </div>
            <div class="col-lg-3 text-center">
              <p class="d-inline-block fs-5 fw-bold mb-0 border-top border-dark" style="margin-top: 160px;">
                General Manager

              </p>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-lg-4">
              <p class="text-muted fw-bold fs-5">
                {{$invoice->company->website}}
              </p>
            </div>
            <div class="col-lg-4">
              <p class="text-dark fw-bold fs-5">
                {{$invoice->company->phone}}
              </p>
            </div>
            <div class="col-lg-4">
              <p class="text-muted fw-bold fs-5">
                {{$invoice->company->website}}
              </p>
            </div>
          </div>
          <div class="fs-5 p-1 text-white bg-secondary text-center">
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

  <script src="{{ asset('/') }}backend/assets/js/script.js"></script>

  <!-- Bootstrap JS Link Ends Here -->

  <!--Custom Template Script Link Starts Here -->
  {{-- <script src="assets/script/script.js"></script> --}}
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