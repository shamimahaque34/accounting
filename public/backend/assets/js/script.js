
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

