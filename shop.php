<?php if(isset($_GET['url'])){
    require_once('func.php');
    $url = $_GET['url'];  
    $shopDetail = getShopUrl($url);    
    $catDetail = allCat($shopDetail->shop_id);
    $mediaDetail = allmedia($shopDetail->shop_id , "banner"); 
    $logo = allmedia($shopDetail->shop_id , "logo"); 
    $userDetail = getUser($shopDetail->user_id);
    $itemDetail = getItem($shopDetail->shop_id);
   


}
?>

<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="theme-color" content="#e54c2a">
        <!-- Favicon -->
        <link type="image/x-icon" rel="shortcut icon" href="favicon.png" />
        <title>my Shop</title>
        <meta name="description" content="STEAM - Restaurant, food and Drinks HTML5 website template is Modern, Clean and Professional site template. Prefect for RESTAURANT, Bakery, Cafe, Bar, Catering, food business and for personal chef portfolio website."> 

        <?php require_once('shop_header.php'); ?>
        <!-- Slider Start -->
        <div class="slide"> 
            <div class="slideshow owl-carousel">
                <!-- Slider Backround Image Start -->
                
                <?php foreach ($mediaDetail as $banner){?>
                <div class="item">
                    <img src="img/shopBanners/<?=$banner['name']?>" height="680px" alt="banner" title="banner" class="img-responsive"/>
                </div>
            
              <?php } ?>
           
                <!-- Slider Backround Image End -->
            </div>

            <!-- Slide Detail Start  -->
            <div class="slide-detail">
                <div class="container">
                    <img src="assets/images/logo/logo-icon.png" alt="logo1" title="logo1" class="img-responsive" />
                    <div class="cd-headline clip">
                        <h4>LOVES <span class="cd-words-wrapper">
                            <b class="is-visible">HEALTHY</b>
                            <b>QUALITY</b>
                            <b>TESTY</b>
                            </span>FOOD</h4>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur placerat nulla, in suscipit erat sodales id. Nullam ultricies eu turpis at accumsan. Mauris a sodales mi, eget lobortis nulla.</p>
                
                </div>
            </div>	
            <!-- Slide Detail End  -->
        </div>
        <!-- Slider End  -->


        <!-- Popular Dishes Start -->
        <div class="dishes">
            <div class="container">
                <div class="row">
                    <!-- Title Content Start -->
                    <div class="col-sm-12 commontop text-center">
                        <h4>Our Popular Dishes</h4>
                        <div class="divider style-1 center">
                            <span class="hr-simple left"></span>
                            <i class="icofont icofont-ui-press hr-icon"></i>
                            <span class="hr-simple right"></span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur placerat nulla, in suscipit erat sodales id. Nullam ultricies eu turpis at accumsan. Mauris a sodales mi, eget lobortis nulla.</p>
                    </div>
                    <!-- Title Content End -->
                    <div class="col-sm-12">
                        <div class="dish owl-carousel">
                     
                    
                            
                            
                              <?php foreach ($itemDetail as $item){
                               $itemId = $item['item_id'];
                              $itemimg = allmedia($itemId, "item"); 
                            
                            ?>
                            
                            <div class="item">
                                <!-- Box Start -->
                                <div class="box">
                                    <a href="#"><img src="img/items/Pizza_912.png" alt="" title="image" class="img-fluid" /></a>
                                    <div class="caption">
                                        <h4><?=$item['name']?></h4>
                                        <span><?=$item['detail']?></span>
                                        <p>$<?=$item['price']?></p>
                                       <?php print_r($itemimg)?>
                                    </div>
                                       <button class="nav-link" title="add to basket" onclick="add()">Add</button>
                                </div>
                                <!-- Box End -->
                             
                            </div>
                          
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Popular Dishes End -->

        <!-- Food Menu Start -->
        <div class="menu">
            <div class="menu-inner">
                <div class="container">
                    <div class="row ">
                        <!-- Title Content Start -->
                        <div class="col-sm-12 col-12 commontop text-center">
                            <h4>Our Menu</h4>
                            <div class="divider style-1 center">
                                <span class="hr-simple left"></span>
                                <i class="icofont icofont-ui-press hr-icon"></i>
                                <span class="hr-simple right"></span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur placerat nulla, in suscipit erat sodales id. Nullam ultricies eu turpis at accumsan. Mauris a sodales mi, eget lobortis nulla.</p>
                        </div>
                        <!-- Title Content End -->
                        <div class="col-sm-12 col-12">
                            <!--  Menu Tabs Start  -->
                            <ul class="nav nav-tabs list-inline">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#all" data-toggle="tab" aria-expanded="true">all</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#breakfast" data-toggle="tab" aria-expanded="false">breakfast</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#lunch" data-toggle="tab" aria-expanded="false">lunch</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#dinner" data-toggle="tab" aria-expanded="false">dinner</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#drinks" data-toggle="tab" aria-expanded="false">drinks</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#others" data-toggle="tab" aria-expanded="false">others</a>
                                </li>
                            </ul>
                            <!--  Menu Tabs Start  -->

                            <!--  Menu Tabs Content Start  -->
                            <div  class="tab-content">
                                <!--  Menu Tab Start  -->
                                <div class="tab-pane show active" id="all">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/01.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/04.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/07.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/02.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/05.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/08.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/03.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/06.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                    </div>
                                </div>
                                <!--  Menu Tab End  -->

                                <!--  Menu Tab Start  -->
                                <div class="tab-pane" id="breakfast">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <div class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/07.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                            </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/02.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/01.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/04.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/05.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/06.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/09.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/08.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                    </div>
                                </div>
                                <!--  Menu Tab End  -->

                                <!--  Menu Tab Start  -->
                                <div class="tab-pane" id="lunch">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/01.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/04.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/07.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/02.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/05.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/08.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/03.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/06.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                    </div>
                                </div>
                                <!--  Menu Tab End  -->

                                <!--  Menu Tab Start  -->
                                <div class="tab-pane" id="dinner">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/07.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/02.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/01.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/04.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/05.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/08.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/03.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/09.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                    </div>
                                </div>
                                <!--  Menu Tab End  -->

                                <!--  Menu Tab Start  -->
                                <div class="tab-pane" id="drinks">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/01.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/04.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/07.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/02.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/05.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/08.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/03.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/06.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                    </div>
                                </div>
                                <!--  Menu Tab End  -->

                                <!--  Menu Tab Start  -->
                                <div class="tab-pane" id="others">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/07.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/02.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/01.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/04.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/05.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/08.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/09.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <!-- Box Start -->
                                            <diV class="box">
                                                <div class="image">
                                                    <img src="assets/images/our-menu/03.jpg" alt="image" title="image" class="img-fluid" />
                                                </div>
                                                <div class="caption">
                                                    <h4>Food Title Here</h4>
                                                    <p class="des">Cursus / Dictum / Risus</p>
                                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                                    <div class="price">$35.00</div>
                                                </div>
                                                </div>
                                            <!-- Box End -->
                                        </div>
                                    </div>
                                </div>
                                <!--  Menu Tab End  -->
                            </div>
                            <!--  Menu Tabs Content End  -->
                            <div class="text-center padbot30">
                                <a class="btn btn-theme-alt btn-wide" href='menu.html'>view more <i class="icofont icofont-curved-double-right"></i></a>
                            </div>	
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Food Menu End -->

        <!-- Reservation Start -->
        <div class="reservation">
            <div class="container">
                <div class="row ">
                    <!-- Title Content Start -->
                    <div class="col-sm-12 commontop white text-center">
                        <h4>Book Your Table</h4>
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
                        <form action="https://www.spheretheme.com/html/steam/mailer.php" method="post" class="row reservation-form" novalidate="novalidate">
                            <div class="form-group col-md-4 col-sm-6">
                                <i class="icofont icofont-ui-user"></i><input name="name" placeholder="name" id="input-name" class="form-control" type="text" required>
                            </div>
                            <div class="form-group col-md-4 col-sm-6">
                                <i class="icofont icofont-ui-message"></i><input name="email" placeholder="email" id="input-email" class="form-control" type="text" required>
                            </div>
                            <div class="form-group col-md-4 col-sm-6">
                                <i class="icofont icofont-phone"></i><input name="mobile" placeholder="mobile number" id="input-mobile" class="form-control" type="text" required>
                            </div>
                            <div class="form-group col-md-4 col-sm-6">
                                <i class="icofont icofont-ui-calendar"></i><input name="date" placeholder="date" id="input-date" class="form-control" type="text" required>
                            </div>
                            <div class="form-group col-md-4 col-sm-6">
                                <i class="icofont icofont-clock-time"></i><input name="time" placeholder="time" id="input-time" class="form-control" type="text" required>
                            </div>
                            <div class="form-group col-md-4 col-sm-6">
                                <i class="icofont icofont-users"></i><input name="persons" placeholder="number of persons" id="input-persons" class="form-control" type="text" required>
                            </div>
                            <div class="form-group col-12 col-md-12">
                                <div class="">  
                                    <div id="emailSend" class="alert alert-success" role="alert" style="display: none;">
                                        <div class="success-text">Your Message has been successfully sent.</div>
                                    </div>
                                    <div id="emailError" class="alert alert-danger" role="alert" style="display: none;">
                                        <div class="alert-text">Server error <br> Try again later.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-12 col-md-12">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-theme btn-wide">book now</button>
                                </div>
                            </div>
                        </form>
                        <!-- Reservation Form End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Reservation End  -->

     

        <!-- Newsletter End -->

        <!-- Footer Start -->
        <footer>
            <div class="container">
                <div class="row inner">
                    <div class="col-sm-6 col-md-6 col-lg-8">
                        <!-- Footer Widget Start --> 
                        <h5>Contact Us</h5>
                        <ul class="list-unstyled contact">
                            <li><i class="icofont icofont-social-google-map"></i> 20, floor, Restaurant Food & Drinks, Nr, Queenslad Victoria Building, USA</li>
                            <li><i class="icofont icofont-phone"></i> <?=$shopDetail->phone?><br><?=$userDetail->number?></li>
                            <li><a href="#"><i class="icofont icofont-ui-message"></i><?=$userDetail->email?></a></li>
                        </ul>
                        <!-- Footer Widget End --> 
                    </div>
             
                    <div class="w-100 d-none d-xs-block"></div>
            
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <!-- Footer Widget Start --> 
                        <h5>Instagram</h5>
                        <ul class="list-unstyled insta">
                            <li><a href="#"><img src="assets/images/instagram/1.jpg" alt="image" /></a></li>
                            <li><a href="#"><img src="assets/images/instagram/2.jpg" alt="image" /></a></li>
                            <li><a href="#"><img src="assets/images/instagram/3.jpg" alt="image" /></a></li>
                            <li><a href="#"><img src="assets/images/instagram/4.jpg" alt="image" /></a></li>
                            <li><a href="#"><img src="assets/images/instagram/5.jpg" alt="image" /></a></li>
                            <li><a href="#"><img src="assets/images/instagram/6.jpg" alt="image" /></a></li>
                        </ul>
                        <!-- Footer Widget End --> 
                    </div>
                </div>

            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row powered">
                        <!--  Copyright Start -->
                        <div class="col-md-3 col-sm-6 order-md-1">
                            <img src="assets/images/logo/logo-white.png" class="img-fluid" title="logo" alt="logo">
                        </div>
             
                        <div class="col-md-6 col-sm-12 text-center order-md-2">
                            <p>Copyright © <span></span> 2020. All Rights Reserved.</p>
                        </div>
                        <!--  Copyright End -->
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End  -->

    

        </div>

    <!-- jquery -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <!-- jquery Validate -->
    <script src="assets/libs/jquery-validation/jquery.validate.min.js"></script>
    <!-- popper js -->
    <script src="assets/libs/popper/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="assets/libs/bootstrap-4.5.0/js/bootstrap.min.js"></script>
    <!-- owlcarousel js -->
    <script src="assets/libs/owlcarousel2/owl.carousel.min.js"></script>
    <!--inview js code-->
    <script src="assets/libs/jquery.inview/jquery.inview.min.js"></script>
    <!--CountTo js code-->
    <script src="assets/libs/jquery.countTo/jquery.countTo.js"></script>
    <!-- Animated Headlines js code-->
    <script src="assets/libs/animated-headlines/animated-headlines.js"></script>
    <!-- mb.YTPlayer js code-->
    <script src="assets/libs/mb.YTPlayer/jquery.mb.YTPlayer.min.js"></script>
    <!-- Switch Style js -->
    <script src="assets/switch-style/switch-style.js"></script>
    <!--internal js-->
    <script src="assets/js/internal.js"></script>
    <script src="assets/js/custom.js"></script>
    </body>


</html>
