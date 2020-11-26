  <!-- Reservation Start -->
  <div id="reservation" class="reservation" style="margin-top:125px">
      <div class="container">
          <div class="row ">
              <!-- Title Content Start -->
              <div class="col-sm-12 commontop white text-center">
                  <h4>Create Your Online Restaurant</h4>
                  <div class="divider style-1 center">
                      <span class="hr-simple left"></span>
                      <i class="icofont icofont-ui-press hr-icon"></i>
                      <span class="hr-simple right"></span>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur placerat nulla, in suscipit erat sodales id. Nullam ultricies eu turpis at accumsan. Mauris a sodales mi, eget lobortis nulla.</p>
              </div>
              <!-- Title Content End -->
              <div class="col-md-12 col-12">
                  <!-- Reservation Form Start -->
                  <form action="" method="post" class="row reservation-form" novalidate="novalidate" id="createShop">
                      <div class="form-group col-md-3 col-sm-6">
                          <i class="icofont icofont-ui-user"></i><input name="name" placeholder="name" id="input-name" class="form-control" type="text" required>
                      </div>
                      <div class="form-group col-md-3 col-sm-6">
                          <i class="icofont icofont-ui-message"></i><input name="email" placeholder="email" id="input-email" class="form-control" type="email" required>
                      </div>
                      <div class="form-group col-md-3 col-sm-6">
                          <i class="icofont icofont-phone"></i><input name="mobile" placeholder="mobile number" id="input-mobile" class="form-control" type="text" required>
                      </div>
                      <div class="form-group col-md-3 col-sm-6">
                          <i class="icofont icofont-phone"></i><input name="password" placeholder="Password" id="input-mobile" class="form-control" type="password" required>
                      </div>
                      <div class="form-group col-md-4 col-sm-6">
                          <i class="icofont icofont-ui-shop"></i><input name="shopname" placeholder="Shop Name" id="input-shopname" class="form-control" type="text" required>
                      </div>

                      <div class="form-group col-md-4 col-sm-6">
                          <i class="icofont icofont-users"></i><input name="shopmobile" placeholder="Shop Mobile" id="input-mobile" class="form-control" type="text" required>
                      </div>
                      <div class="form-group col-md-4 col-sm-6">
                          <i class="icofont icofont-users"></i>

                          <select name="shopType" id="" class="form-control">
                              <option value="Fast food">Select Type</option>
                              <option value="Fast food">Fast food</option>
                              <option value="Fast casual">Fast casual</option>
                              <option value="Casual dining">Casual dining</option>
                              <option value="Cafés">Cafés</option>
                          </select>

                      </div>
                      <div class="form-group col-md-4 col-sm-6">
                          <i class="icofont icofont-users"></i><input name="address" placeholder="Address" id="input-address" class="form-control" type="text" required>
                      </div>
                      <div class="form-group col-md-8 col-sm-6">
                          <i class="icofont icofont-users"></i><input name="about" placeholder="About" id="input-about" class="form-control" type="text" required>
                      </div>
                      <div class="form-group col-12 col-md-12">
                          <div class="">
                              <div id="shopcreate" class="alert alert-success" role="alert" style="display: none;">
                                  <div class="success-text">Your Shop is Create on our System <br /> Admin Panel Url :http://localhost:8080/restautant/admin <br />Use Register Email & Password to login in Panal to Control Your site </div>
                              </div>
                              <div id="emailError" class="alert alert-danger" role="alert" style="display: none;">
                                  <div class="alert-text">Server error <br> Try again later.</div>
                              </div>
                              <div id="emailFound" class="alert alert-danger" role="alert" style="display: none;">
                                  <div class="alert-text">Email Is Already in Use <br> Try again later.</div>
                              </div>
                          </div>
                      </div>
                      <div class="form-group col-12 col-md-12">
                          <div class="text-center">
                              <button type="submit" class="btn btn-theme btn-wide">Create Now</button>
                          </div>
                      </div>
                  </form>
                  <!-- Reservation Form End -->

              </div>
          </div>
      </div>
  </div>
  <!-- Reservation End  -->