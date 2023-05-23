<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Registration</title>
</head>
<body>
    <section class="py-5">
        <div class="container">
          <div class="row ">
            <div class="col-lg-12 mx-auto">
              {{-- <div class="mb-4 text-center">
                <img src="{{asset($career->job_image)}}" alt="Image" class="">
              </div> --}}
              <h4 class="mt-3 mb-5 apply-title text-center text-capitalize">Fill Up The Form Now</h4>
              <form action="{{route('registrations.store')}}" method="Post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-lg-6" style="margin-bottom: 15px">
                    <label for="name" class="fw-bold text-muted fs-6">Name:*</label>
                    <input type="text" name="name" id="name" class="custom-input form-control shadow-none mt-2" placeholder="Enter Your Name" required value="{{ $errors->any() ? old('name') : ''}}">
                  </div>
    
                  <div class="col-lg-6 " style="margin-bottom: 15px">
                    <label for="father" class="fw-bold text-muted fs-6">Father's Name:*</label>
                    <input type="text" name="father_name" id="father" class="custom-input form-control shadow-none mt-2" placeholder="Enter Your Father Name" required>
                  </div>
    
                  <div class="col-lg-6" style="margin-bottom: 15px">
                    <label for="date" class="fw-bold text-muted fs-6">Date Of Birth
                      *</label>
                    <input type="date" name="date_of_birth" id="date" class="custom-input form-control shadow-none mt-2" placeholder="" required>
                  </div>
    
                  <div class="col-lg-6 "style="margin-bottom: 15px">
                    <label for="card" class="fw-bold text-muted fs-6">National Id Card No
                      *</label>
                    <input type="text" name="id_card_no" id="card" class="custom-input form-control shadow-none mt-2" placeholder="Enter Your Id Card No" required>
                  </div>
    
                  <div class="col-lg-6 "style="margin-bottom: 15px">
                    <label for="email" class="fw-bold text-muted fs-6">Email
                      *</label>
                    <input type="text" name="email" id="email" class="custom-input form-control shadow-none mt-2" placeholder="Enter Your Email" required>
                  </div>
    
                  <div class="col-lg-6 "style="margin-bottom: 15px">
                    <label for="blood_group" class="fw-bold text-muted fs-6">Blood Group
                      </label>
                    <input type="text" name="blood_group" id="blood_group" class="custom-input form-control shadow-none mt-2" placeholder="Enter Your Blood Group">
                  </div>
    
                  <div class="col-md-12" style="margin-bottom: 15px">
                    <label for="address" class="fw-bold text-muted fs-6">Permanent Address:
                      *
                      </label>
                      <textarea name="permanent_address" id="address" cols="20" rows="2" class="form-control custom-input shadow-none " value="" placeholder="Enter Your Permanent Address" required></textarea>
                  </div>
    
                  <div class="col-md-12" style="margin-bottom: 15px">
                    <label for="agent_address" class="fw-bold text-muted fs-6">Agent Address:
                      *
                      </label>
                      <textarea name="agent_address" id="agent_address" cols="20" rows="2" class="form-control custom-input shadow-none " value="" placeholder="Enter Your Agent Address" required></textarea>
                  </div>
    
                  <div class="col-lg-6 "style="margin-bottom: 15px">
                    <label for="mobile" class="fw-bold text-muted fs-6">Mobile No (Telegram No):
                      *</label>
                    <input type="text" name="mobile" id="mobile" class="custom-input form-control shadow-none mt-2" placeholder="Enter Your Mobile No" required>
                  </div>
    
                  <div class="col-lg-6 "style="margin-bottom: 15px">
                    <label for="district" class="fw-bold text-muted fs-6">District:
                      *
                      </label>
                    <input type="text" name="district" id="district" class="custom-input form-control shadow-none mt-2" placeholder="Enter Your District" required>
                  </div>
    
                  <div class="col-lg-6 "style="margin-bottom: 15px">
                    <label for="sub_district" class="fw-bold text-muted fs-6">Police Station:
                      *</label>
                    <input type="text" name="sub_district" id="sub_district" class="custom-input form-control shadow-none mt-2" placeholder="Enter Your Sub  District" required>
                  </div>
    
                  <div class="col-lg-6 "style="margin-bottom: 15px">
                    <label for="parent_id_card_no" class="fw-bold text-muted fs-6">Parent National Id Card No:
                      *</label>
                    <input type="text" name="parent_id_card_no" id="parent_id_card_no" class="custom-input form-control shadow-none mt-2" placeholder="Enter Your Parent National Id Card No" required>
                  </div>
    
                  <div class="col-lg-6 "style="margin-bottom: 15px">
                    <label for="bank_account_no" class="fw-bold text-muted fs-6">Agrani Bank Account No:
                      </label>
                    <input type="text" name="bank_account_no" id="bank_account_no" class="custom-input form-control shadow-none mt-2" placeholder="Enter Your Agrani Bank Account No">
                  </div>
    
                  <div class="col-lg-6 "style="margin-bottom: 15px">
                    <label for="" class="fw-bold text-muted fs-6">Bank Branch Name :
                      </label>
                    <input type="text" name="branch" id="" class="custom-input form-control shadow-none mt-2" placeholder="Enter Your Bank Branch Name">
                  </div>
    
                  <div class="col-lg-6 "style="margin-bottom: 15px">
                    <label for="facebook_account" class="fw-bold text-muted fs-6">FaceBook Account:
                      *</label>
                    <input type="text" name="facebook_account" id="facebook_account" class="custom-input form-control shadow-none mt-2" placeholder="Enter Your Facebook Account" required>
                  </div>
    
                  <div class="col-lg-6 "style="margin-bottom: 15px">
                    <label for="password" class="fw-bold text-muted fs-6"> Create a Password:
                      *</label>
                    <input type="text" name="password" id="password" class="custom-input form-control shadow-none mt-2" placeholder="Enter Your Parent National Id Card No" required>
                  </div>
    
                  <div class="col-lg-6 " style="margin-bottom: 15px">
                    <label for="image" class="fw-bold text-muted fs-6">
                       Passport Size Image
                    </label>
                    <input type="file" name="image" id="image" class="form-control shadow-none mt-2" required>
                  </div>
    
                  <div class="col-lg-6 " style="margin-bottom: 15px">
                    <label for="cv" class="fw-bold text-muted fs-6">
                      Cv
                    </label>
                    <input type="file" name="cv" id="cv" class="form-control shadow-none mt-2" required>
                  </div>
    
                  <div class="col-lg-6 " style="margin-bottom: 15px">
                    <label for="id_card_image" class="fw-bold text-muted fs-6">
                     Id Card Image
                    </label>
                    <input type="file" name="id_card_image" id="id_card_image" class="form-control shadow-none mt-2" required>
                  </div>
    
                  <div class="col-lg-6 " style="margin-bottom: 15px">
                    <label for="parent_id_card_image" class="fw-bold text-muted fs-6">
                      Parent Id Card Image
                    </label>
                    <input type="file" name="parent_id_card_image" id="parent_id_card_image" class="form-control shadow-none mt-2" required>
                  </div>
    
                  <div class="col-lg-12 " style="margin-bottom: 30px !important;text-align:center">
                    <button type="submit" class="btn btn-primary text-uppercase text-center">submit</button>
                  </div>
    
    
              </form>
            </div>
          </div>
        </div>
      </section> 
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>