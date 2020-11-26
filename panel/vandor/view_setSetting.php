<?php
  $shopDetail = getShop($_SESSION['user']['user_id']);
?>
        <div class="container page__container page-section">

      <div class="card card-body mb-32pt">
          <div class="row">
        
              <div class="col-lg-12 d-flex align-items-center">
                  <form id="edit_shop_information" class="flex">
                     <input type="text" class="form-control" id="" name="edit_shop_id" value="<?=$shopDetail->shop_id?>" hidden>
                      <input type="text" value="<?=$_SESSION['user']['user_id']?>" name="user_id" hidden>
                      <div class="form-group">

                          <label class="form-label" for="exampleInputEmail1">Shop Name:</label>
                          <input type="text" class="form-control" id="" name="edit_shop_name" value="<?=$shopDetail->shopName?>" readonly>
                          
                      </div>

                      <div class="form-group">

                          <label class="form-label" for="exampleInputEmail1">Phone:</label>
                          <input type="text" class="form-control" id="" name="edit_shop_number" placeholder="Enter Phone Number" value="<?=$shopDetail->phone?>" required>
                      </div>

                      <div class="form-group">
                          <img src="../img/posts/" alt="" width="200px" height="200px">
                      </div>
                      <div class="form-group">
                          <div class="custom-file">

                              <input type="file" id="file" name="logo_img" class="custom-file-input">
                              <label for="file" class="custom-file-label">logo</label>
                          </div>
                      </div>


                      <div class="form-group">
                          <label class="form-label" for="exampleInputEmail1">Address:</label>
                          <input type="text" class="form-control" id="" name="edit_shop_address" placeholder="Enter Address" value="<?=$shopDetail->about?>" required>
                      </div>


                      <div class="form-group">
                          <label class="form-label">About: </label>

                          <textarea class="txt_id" name="Shop_about" id="" rows="10" style="width:100%"><?=$shopDetail->about?></textarea>

                      </div>

                      <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
              </div>
          </div>
      </div>




  </div>