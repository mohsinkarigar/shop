<?php
$shopDetail = getShop($_SESSION['user']['user_id']);
$catDetail = allCat($shopDetail->shop_id);
?>
<div class="container page__container page-section">

    <div class="card card-body mb-32pt">
        <div class="row">

            <div class="col-lg-12 d-flex align-items-center">
                <form id="add_item" class="flex">
                    <input type="text" class="form-control" id="" name="shop_id" value="<?=$shopDetail->shop_id?>" hidden>

                    <div class="form-group">

                        <label class="form-label" for="exampleInputEmail1">Item :</label>
                        <input type="text" class="form-control" id="" name="add_item">

                    </div>

                    <div class="list-group-item">
                        <div class="form-group row mb-0">
                            <label class="col-form-label col-sm-3">Select Main Category</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="meun_idd" required>
                                    <option value="0">Main</option>
                                    <?php foreach($catDetail as $meun){ ?>
                                    <option value="<?=$meun['category_id']?>"><?=$meun['name']?></option>
                                    <?php } ?>
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-file">

                            <input type="file" id="file" name="img" class="custom-file-input">
                            <label for="file" class="custom-file-label">Image</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="exampleInputEmail1">Price:</label>
                        <input type="text" class="form-control" id="" name="price" placeholder="Enter Price" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Detail: </label>

                        <textarea class="txt_id" name="detail" id="" rows="10" style="width:100%"></textarea>

                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>




</div>