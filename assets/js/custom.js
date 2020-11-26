 $(document).ready(function () {
     var x = document.getElementById("emailFound");
     var y = document.getElementById("shopcreate");

     $("#createShop").on("submit", function (e) {
         x.style.display = "none";
         y.style.display = "none";
         e.preventDefault();
         var formData = new FormData(this);
         $.ajax({
             type: 'post',
             url: 'http://localhost:8080/restautant/func.php',
             async: false,
             data: formData,
             contentType: false,
             processData: false,
             success: function (data) {
                 dat = data.replace(/\s+/g, '');
                 if (dat == "found") {
                     document.getElementById("createShop").reset();
                     x.style.display = "block";
                 } else {
                     document.getElementById("createShop").reset();
                     y.style.display = "block";
                 }

             }

         });
     });




     $("#logincheck").on("submit", function (e) {
         var x = document.getElementById("emailError");
         x.style.display = "none";
         e.preventDefault();
         var formData = new FormData(this);
         $.ajax({
             type: 'post',
             url: 'http://localhost:8080/restautant/func.php',
             async: false,
             data: formData,
             contentType: false,
             processData: false,
             success: function (data) {
                 dat = data.replace(/\s+/g, '');
                 if (dat == "found") {
                     window.open('home.php', '');
                 } else {
                     x.style.display = "block";
                 }

             }

         });
     });

     $("#edit_shop_information").on("submit", function (e) {

         e.preventDefault();
         var formData = new FormData(this);
         $.ajax({
             type: 'post',
             url: 'http://localhost:8080/restautant/func.php',
             async: false,
             data: formData,
             contentType: false,
             processData: false,
             success: function (data) {
                 if (data == "found") {

                 } else {

                 }

             }

         });
     });

     $("#shop_meun_add").on("submit", function (e) {
         alert("enter in Meun");
         e.preventDefault();
         var formData = new FormData(this);
         $.ajax({
             type: 'post',
             url: 'http://localhost:8080/restautant/func.php',
             async: false,
             data: formData,
             contentType: false,
             processData: false,
             success: function (data) {
                 document.getElementById("shop_meun_add").reset();

             }

         });
     });



     $("#shop_banner_ad").on("submit", function (e) {
         alert("enter in Banner");
         e.preventDefault();
         var formData = new FormData(this);
         $.ajax({
             type: 'post',
             url: 'http://localhost:8080/restautant/func.php',
             async: false,
             data: formData,
             contentType: false,
             processData: false,
             success: function (data) {
                 document.getElementById("shop_banner_ad").reset();

             }

         });
     });
     
          $("#add_item").on("submit", function (e) {
         alert("enter in add Item");
         e.preventDefault();
         var formData = new FormData(this);
         $.ajax({
             type: 'post',
             url: 'http://localhost:8080/restautant/func.php',
             async: false,
             data: formData,
             contentType: false,
             processData: false,
             success: function (data) {
                 document.getElementById("add_item").reset();

             }

         });
     });

 });

function add(){
    alert("Seleted");
}