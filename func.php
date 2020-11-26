<?php
session_start();
define("panelRoot",    "http://localhost:8080/restautant/panel/");
define("siteRoot",    "http://localhost:8080/restautant/");

$toDate = date("Y-m-d");
function conn()
{
    try {

        $pdo = new PDO("mysql:host=localhost;dbname=restaurant", 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;

    }
    catch (PDOException $e) {
        echo "Connection : " . $e;
    }

}
$conn = conn();
function checkEmail($Cemail){
    $run = conn()->prepare("SELECT * FROM tbl_login WHERE email = :email");
    $run->execute(['email' => $Cemail]);
    return $run->rowCount();
}

function sql_insert($table, $data) {
    global $conn;
    $key = array_keys($data);
    $val = array_values($data);
    $run = $conn->prepare("INSERT INTO $table (" . implode(', ', $key) . ") " . "VALUES ('" . implode("', '", $val) . "')");
    $run->execute();
    return $conn->lastInsertId();

}
function setImage($sourceType , $name , $refId , $type){
    $run = conn()->prepare("INSERT INTO `tbl_media` (`sourceType`, `name`, `refId` , `type`) VALUES ('$sourceType' , '$name' , '$refId', '$type')");
    $run->execute();
}
function getUser($uId){
    $run = conn()->prepare("SELECT * FROM  tbl_uses WHERE user_id = :uid");
    $run->execute(['uid' => $uId]);
    $row = $run->fetchObject();
    return $row;

}
function getShop($uId){
    $run = conn()->prepare("SELECT * FROM  tbl_shop WHERE user_id = :uid");
    $run->execute(['uid' => $uId]);
    $row = $run->fetchObject();
    return $row;  

}
////////////////getShopBy Url
function getShopUrl($Url){
    $run = conn()->prepare("SELECT * FROM  tbl_shop WHERE shopUrl = :url");
    $run->execute(['url' => $Url]);
    $row = $run->fetchObject();
    return $row;  

}
function allshop(){
    $run = conn()->prepare("SELECT * FROM  tbl_shop WHERE status = 'active'");
    $run->execute();

    $row = $run->fetchAll();
    return $row;   
}
function allCat($shopId){
    $run = conn()->prepare("SELECT * FROM  tbl_category WHERE shop_id = '$shopId' ORDER by category_id ASC");
    $run->execute();

    $row = $run->fetchAll();
    return $row;   
}
function allmedia($refId , $type){
    $run = conn()->prepare("SELECT * FROM  tbl_media WHERE refId = '$refId' AND type = '$type' ORDER by id ASC");
    $run->execute();

    $row = $run->fetchAll();
    return $row;   
}
function getItem($shop_id){
    $run = conn()->prepare("SELECT * FROM  tbl_items WHERE shop_id = '$shop_id'");
    $run->execute();

    $row = $run->fetchAll();
    return $row;   
}
/////////////// Createing New Restanrant///////////////////////////
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['name'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mPas = md5($password);
    $mobile = $_POST['mobile'];
    $shopname = $_POST['shopname'];
    $shopmobile = $_POST['shopmobile'];
    $shopType = $_POST['shopType'];
    $address = $_POST['address'];
    $about = $_POST['about'];
    $reEmail = checkEmail($email);

    $shopUrl = str_replace(' ' , '-' ,$shopname);

    if($reEmail > 0){
        echo "found";
    }
    else if ($reEmail == 0){
        $userData = array("name"=> $name, "number"=> $mobile, "email"=> $email, "type"=> "vandor");

        $uId = sql_insert("tbl_uses",$userData);

        $login= array("user_id"=> $uId ,"email"=> $email, "password"=> $mPas, "type"=> "vandor");
        sql_insert("tbl_login",$login);


        $shopDetail = array("user_id"=> $uId, "shopName"=> $shopname, "shopUrl"=> $shopUrl, "about"=> $about, "phone"=> $shopmobile, "createDate"=> $toDate, "shopType"=> $shopType, "status"=> 'active');

        $shopId = sql_insert("tbl_shop",$shopDetail);

        $addressShop = array ("adress"=> $address ,"refId"=>$shopId ,"type" =>"shop");
        sql_insert("tbl_adress",$addressShop);
    }
}


if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['loginEmail'])){

    $email = $_POST['loginEmail'];
    $password = $_POST['password'];
    $mPas = md5($password);

    $run = conn()->prepare("SELECT * FROM tbl_login WHERE email = :email AND password = :password");
    $run->execute(['email' => $email , 'password' => $mPas]);
    if($run->rowCount() > 0 ){

        $row = $run->fetchObject();

        $_SESSION['user'] = array(
            'type' => $row->type,
            'user_id' => $row->user_id,
            'create_time' => time(),
        );

        //
        //        $_SESSION['user']=$row['type'];
        //        $_SESSION['user_id']=$row['user_id'];
        echo "found";
    }
}


if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['edit_shop_number'])){

    $email = $_POST['edit_shop_number'];
    $address = $_POST['edit_shop_address'];
    $about = $_POST['Shop_about'];
    $shopName = $_POST['edit_shop_name'];
    $user_id = $_POST['user_id'];
    $eshop_id = $_POST['edit_shop_id'];
    $pic = $_FILES['logo_img']['name'];
    $ex =pathinfo($pic,PATHINFO_EXTENSION);
    $picName =  $shopName .".".$ex;
    setImage('image', $picName , $eshop_id ,'logo');

    move_uploaded_file($_FILES['logo_img']['tmp_name'],"img/logo/$picName");


}
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['main_meun_add'])){

    $Main = $_POST['main_meun_add'];
    $shop_id = $_POST['shop_id'];
    $meun_name = $_POST['meun_name'];
    $run = conn()->prepare("INSERT INTO `tbl_category` (`shop_id`, `name`, `parId`) VALUES (:shopId,  :meunName, :MainId)");
    $run->execute(['shopId' => $shop_id , 'meunName' => $meun_name , 'MainId' => $Main]);

}

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['shop_banner_id'])){
    $shop_id = $_POST['shop_banner_id'];
    $shop_name = $_POST['shop_name'];
    $pic = $_FILES['shop_banner']['name'];
    $ex =pathinfo($pic,PATHINFO_EXTENSION);
    $rand = rand(10,1000);

    $picName =  $shop_name ."_".$rand.".".$ex;
    setImage('image', $picName , $shop_id ,'banner');

    move_uploaded_file($_FILES['shop_banner']['tmp_name'],"img/shopBanners/$picName");


}

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_item'])){
    $item = $_POST['add_item'];
    $shop_id = $_POST['shop_id'];
    $price = $_POST['price'];
    $detail = $_POST['detail'];
    $meun_idd = $_POST['meun_idd'];
    $pic = $_FILES['img']['name'];
    $ex =pathinfo($pic,PATHINFO_EXTENSION);
    $rand = rand(10,1000);
    $itemRun = conn();
    $run = $itemRun->prepare("INSERT INTO `tbl_items` (`shop_id`, `category_id`, `name`, `detail`, `price`) VALUES (:shopId,  :category_id, :name, :detail, :price)");
    $run->execute(['shopId' => $shop_id , 'category_id' => $meun_idd , 'name' => $item , 'detail' => $detail , 'price' => $price]);    
    $itemId = $itemRun->lastInsertId();

    $picName =  $item ."_".$rand.".".$ex;
    setImage('image', $picName , $itemId ,'item');

    move_uploaded_file($_FILES['img']['tmp_name'],"img/items/$picName");


}

?>