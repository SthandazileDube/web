<?php

include_once('../functions-page.php');

if(isset($_POST['add_product'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = '../uploaded_img/'.$image;

    $insert = mysqli_query($conn, "INSERT INTO `new_products`(name, price, description, image) VALUES('$name', '$price', '$description', '$image')") or die('query failed');
   
    if($insert){
        move_uploaded_file($image_tmp_name, $image_folder);
        $message[] = 'product added successfully';
    }else{
        $message[] = 'product not added';
    }
};

if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $delete_query = mysqli_query($conn, "DELETE FROM `new_products` where id = $delete_id") or die('query failed');
    if($delete_query){
        //header('loaction:addproducts.php');
        $message[] = 'product deleted';
    }else{
        $message[] = 'product not deleted';
    };
};

if(isset($_POST['update_product'])){
    $update_id = $_POST['upadate_id'];
    $update_name = $_POST['upadate_name'];
    $update_price = $_POST['upadate_price'];
    $update_image = $_FILES['upadate_image'];
    $update_image_tmp_name = $_FILES['upadate_image']['tmp_name'];
    $update_image_tmp_folder = '../images/'.$update_image;

    $update_query = mysqli_query($conn, "UPDATE `new_products` SET name = '$update_name', price = '$update_price', image = '$update_image' WHERE id = '$update_id'");

    if($update_query){
        move_uploaded_file($update_image_tmp_name, $update_image_tmp_folder);
        $message[] = 'product updated';
        header('location:addproducts.php');
    }else{
        $message[] = 'product not updated';
        header('location:addproducts.php');
    };

};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    
</head>
<body>



<link rel="icon" type="image/vnd.microsoft.icon" href="https://connexstore.co.za/img/favicon.ico?1671096750">
  <link rel="shortcut icon" type="image/x-icon" href="https://connexstore.co.za/img/favicon.ico?1671096750">



  
<link rel="font" as="font" type="font/woff2" crossorigin="" href="https://connexstore.co.za/themes/AngarTheme/assets/css/fonts/material_icons.woff2">
<link rel="font" as="font" type="font/woff2" crossorigin="" href="https://connexstore.co.za/themes/AngarTheme/assets/css/fonts/fontawesome-webfont.woff2?v=4.7.0">

  <link rel="stylesheet" as="style" href="https://connexstore.co.za/themes/AngarTheme/assets/cache/theme-c4ebc228.css" media="all">


  <link rel="stylesheet" href="https://connexstore.co.za/themes/AngarTheme/assets/cache/theme-c4ebc228.css" type="text/css" media="all">


<link rel="stylesheet" as="style" href="https://fonts.googleapis.com/css?family=Poppins:400,600&amp;subset=latin,latin-ext&amp;display=block" type="text/css" media="all">
<link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/themes/AngarTheme/assets/css/theme.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/themes/AngarTheme/assets/css/libs/jquery.bxslider.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/themes/AngarTheme/assets/css/font-awesome.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/themes/AngarTheme/assets/css/home_modyficators.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/themes/AngarTheme/assets/css/rwd.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/themes/AngarTheme/assets/css/black.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/modules/blockreassurance/views/dist/front.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/themes/AngarTheme/modules/ps_searchbar/ps_searchbar.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/modules/productcomments/views/css/productcomments.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/modules/angarbanners/views/css/hooks.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/modules/angarcatproduct/views/css/at_catproduct.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/modules/angarcmsinfo/views/css/angarcmsinfo.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/modules/angarfacebook/views/css/angarfacebook.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/modules/angarhomecat/views/css/at_homecat.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/modules/angarslider/views/css/angarslider.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/modules/angarscrolltop/views/css/angarscrolltop.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/modules/prestanotifypro/views/css/shadowbox/shadowbox.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/modules/ets_banneranywhere/views/css/front.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/modules/roja45quotationspro/views/css/roja45quotationspro17.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/modules/ybc_productimagehover/views/css/fix17.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/modules/nkmdeliverydate//views/css/front.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/modules/responsive/views/css/fluid.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/modules/carrieronorder//views/css/front.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/modules/codwfeeplus/views/css/style-front_17.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/js/jquery/ui/themes/base/minified/jquery-ui.min.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/js/jquery/ui/themes/base/minified/jquery.ui.theme.min.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/themes/AngarTheme/modules/blockwishlist/public/wishlist.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/js/jquery/plugins/fancybox/jquery.fancybox.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/js/jquery/plugins/growl/jquery.growl.css" media="all" />
    <link rel="stylesheet" rel="preload" as="style" href="https://connexstore.co.za/themes/AngarTheme/assets/css/custom.css" media="all" />

    <link rel="stylesheet" href="https://connexstore.co.za/themes/AngarTheme/assets/css/theme.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/themes/AngarTheme/assets/css/libs/jquery.bxslider.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/themes/AngarTheme/assets/css/font-awesome.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/themes/AngarTheme/assets/css/angartheme.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/themes/AngarTheme/assets/css/home_modyficators.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/themes/AngarTheme/assets/css/rwd.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/themes/AngarTheme/assets/css/black.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/modules/blockreassurance/views/dist/front.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/themes/AngarTheme/modules/ps_searchbar/ps_searchbar.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/modules/productcomments/views/css/productcomments.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/modules/angarbanners/views/css/hooks.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/modules/angarcatproduct/views/css/at_catproduct.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/modules/angarcmsinfo/views/css/angarcmsinfo.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/modules/angarfacebook/views/css/angarfacebook.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/modules/angarhomecat/views/css/at_homecat.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/modules/angarslider/views/css/angarslider.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/modules/angarscrolltop/views/css/angarscrolltop.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/modules/prestanotifypro/views/css/shadowbox/shadowbox.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/modules/ets_banneranywhere/views/css/front.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/modules/roja45quotationspro/views/css/roja45quotationspro17.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/modules/ybc_productimagehover/views/css/fix17.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/modules/nkmdeliverydate//views/css/front.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/modules/responsive/views/css/fluid.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/modules/carrieronorder//views/css/front.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/modules/codwfeeplus/views/css/style-front_17.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/js/jquery/ui/themes/base/minified/jquery-ui.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/js/jquery/ui/themes/base/minified/jquery.ui.theme.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/themes/AngarTheme/modules/blockwishlist/public/wishlist.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/js/jquery/plugins/fancybox/jquery.fancybox.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/js/jquery/plugins/growl/jquery.growl.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://connexstore.co.za/themes/AngarTheme/assets/css/custom.css" type="text/css" media="all">

    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/angartheme.css" type="text/css">
    <link rel="stylesheet" href="css/res-style.css" type="text/css">
    <link rel="stylesheet" rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Poppins:400,600&amp;subset=latin,latin-ext&display=block" type="text/css" media="all" />

    

  

  <script src="https://embed.tawk.to/_s/v4/app/642b759ae8c/js/twk-main.js" charset="UTF-8" crossorigin="*"></script><script src="https://embed.tawk.to/_s/v4/app/642b759ae8c/js/twk-vendor.js" charset="UTF-8" crossorigin="*"></script><script src="https://embed.tawk.to/_s/v4/app/642b759ae8c/js/twk-chunk-vendors.js" charset="UTF-8" crossorigin="*"></script><script src="https://embed.tawk.to/_s/v4/app/642b759ae8c/js/twk-chunk-common.js" charset="UTF-8" crossorigin="*"></script><script src="https://embed.tawk.to/_s/v4/app/642b759ae8c/js/twk-runtime.js" charset="UTF-8" crossorigin="*"></script><script src="https://embed.tawk.to/_s/v4/app/642b759ae8c/js/twk-app.js" charset="UTF-8" crossorigin="*"></script><script src="https://connect.facebook.net/en_US/sdk.js?hash=2a00ea15e65f9d742d982741853d963f" async="" crossorigin="anonymous"></script><script type="text/javascript" async="" src="//connexstorecoza.api.oneall.com/socialize/library.js"></script><script id="facebook-jssdk" src="//connect.facebook.net/en_EN/sdk.js#xfbml=1&amp;version=v2.6"></script><script async="" src="https://embed.tawk.to/5dc24b5be4c2fa4b6bda3357/default" charset="UTF-8" crossorigin="*"></script><script async="" src="https://www.googletagmanager.com/gtm.js?id=AW-749461096"></script><script async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript">
        var blockwishlistController = "https:\/\/connexstore.co.za\/module\/blockwishlist\/action";
        var codwfeeplus_codproductid = "4804";
        var codwfeeplus_codproductreference = "COD";
        var codwfeeplus_is17 = true;
        var prestashop = {"cart":{"products":[{"add_to_cart_url":"https:\/\/connexstore.co.za\/cart?add=1&id_product=5028&id_product_attribute=0&token=fff5ab8d6eda7d36378b534fd6386aa7","id":"5028","attributes":[],"show_price":true,"weight_unit":"kg","url":"https:\/\/connexstore.co.za\/home\/5028-dell-latitude-7430-14-fhd-ag-300-nits-intel-core-i7-1270p-12-core-32gb-ram-512gb-ssd-4-years-prosupport-win11-pro.html","canonical_url":"https:\/\/connexstore.co.za\/home\/5028-dell-latitude-7430-14-fhd-ag-300-nits-intel-core-i7-1270p-12-core-32gb-ram-512gb-ssd-4-years-prosupport-win11-pro.html","condition":false,"embedded_attributes":{"id_product":"5028","id_manufacturer":"39","on_sale":"1","online_only":"0","ecotax":"0.000000","quantity":1,"minimal_quantity":"1","price":"R\u00a044,000.00","reference":"Dell Latitude 7430","customizable":"0","condition":"new","description_short":"<div id=\"product-description-short-4656\" class=\"product_desc\"><br \/><ul style=\"list-style:circle;margin-top:0px;margin-bottom:10px;padding-left:0px;margin-left:16px;font-size:13px;font-family:'Open Sans', Arial, Helvetica, sans-serif;background-color:#ffffff;\"><br \/><li><span style=\"font-size:0.92308rem;color:#b11010;\">Free delivery available or express delivery available.<\/span><\/li><br \/><li><span style=\"font-size:0.92308rem;color:#b11010;\">Hassle-Free exchanges &amp; returns for 30 days.<\/span><\/li><br \/><li><span style=\"font-size:0.92308rem;color:#b11010;\">48-Months Limited Warranty<\/span><\/li><br \/><\/ul><br \/><p style=\"margin-top:0px;margin-bottom:10px;font-size:13px;font-family:'Open Sans', Arial, Helvetica, sans-serif;background-color:#ffffff;\"><span style=\"font-size:0.92308rem;color:#218e53;\"><\/span><\/p><br \/><ul style=\"list-style:circle;margin-top:0px;margin-bottom:10px;padding-left:0px;margin-left:16px;font-size:13px;font-family:'Open Sans', Arial, Helvetica, sans-serif;background-color:#ffffff;\"><br \/><li><br \/><h3 style=\"margin-bottom:15px;margin-top:0px;font-family:inherit;line-height:1.1;color:inherit;font-size:18px;\"><span style=\"font-weight:bolder;\">Available Payment Options<\/span><\/h3><br \/><ul style=\"list-style:disc;margin-top:0px;margin-bottom:10px;padding-left:0px;margin-left:16px;\"><br \/><li>EFT (Bank Transfer)<\/li><br \/><li>Visa, Master card and Credit Card<\/li><br \/><li>Installment zero pay (3 Months to pay)<\/li><br \/><li>Installment mobicred (12 Months to pay)<\/li><br \/><\/ul><br \/><\/li><br \/><\/ul><br \/><\/div><br \/><p><\/p>","link_rewrite":"dell-latitude-7430-14-fhd-ag-300-nits-intel-core-i7-1270p-12-core-32gb-ram-512gb-ssd-4-years-prosupport-win11-pro","name":"Dell Latitude 7430 14\" FHD AG 300-nits Intel Core i7-1270P 12-Core 32GB RAM - 512GB SSD 4 Years ProSupport Win11 pro","available_now":"","available_later":"","new":"0","id_product_attribute":"0","id_customization":null,"category":"home","id_image":"5028-13125","reduction":1000,"price_without_reduction":45000,"specific_prices":{"id_specific_price":"786","id_specific_price_rule":"0","id_cart":"0","id_product":"5028","id_shop":"1","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"1000.000000","reduction_tax":"1","reduction_type":"amount","from":"0000-00-00 00:00:00","to":"2023-06-30 00:00:00","score":"16"},"features":[],"attributes":[],"rate":15,"tax_name":"VAT","pack":false,"ecotax_rate":0,"price_amount":"R\u00a044,000.00","quantity_wanted":"1"},"quantity_discounts":[],"reference_to_display":"Dell Latitude 7430","seo_availability":"https:\/\/schema.org\/InStock","labels":{"tax_short":"(tax incl.)","tax_long":"Tax included"},"ecotax":{"value":"R\u00a00.00","amount":"0.000000","rate":0},"flags":{"on-sale":{"type":"on-sale","label":"On sale!"},"discount":{"type":"discount","label":"-R\u00a01,000.00"}},"main_variants":[],"id_product":"5028","id_manufacturer":"39","on_sale":"1","online_only":"0","ean13":"","isbn":"","upc":"","quantity":1,"minimal_quantity":"1","price":"R\u00a044,000.00","reference":"Dell Latitude 7430","customizable":"0","description_short":"<div id=\"product-description-short-4656\" class=\"product_desc\"><br \/><ul style=\"list-style:circle;margin-top:0px;margin-bottom:10px;padding-left:0px;margin-left:16px;font-size:13px;font-family:'Open Sans', Arial, Helvetica, sans-serif;background-color:#ffffff;\"><br \/><li><span style=\"font-size:0.92308rem;color:#b11010;\">Free delivery available or express delivery available.<\/span><\/li><br \/><li><span style=\"font-size:0.92308rem;color:#b11010;\">Hassle-Free exchanges &amp; returns for 30 days.<\/span><\/li><br \/><li><span style=\"font-size:0.92308rem;color:#b11010;\">48-Months Limited Warranty<\/span><\/li><br \/><\/ul><br \/><p style=\"margin-top:0px;margin-bottom:10px;font-size:13px;font-family:'Open Sans', Arial, Helvetica, sans-serif;background-color:#ffffff;\"><span style=\"font-size:0.92308rem;color:#218e53;\"><\/span><\/p><br \/><ul style=\"list-style:circle;margin-top:0px;margin-bottom:10px;padding-left:0px;margin-left:16px;font-size:13px;font-family:'Open Sans', Arial, Helvetica, sans-serif;background-color:#ffffff;\"><br \/><li><br \/><h3 style=\"margin-bottom:15px;margin-top:0px;font-family:inherit;line-height:1.1;color:inherit;font-size:18px;\"><span style=\"font-weight:bolder;\">Available Payment Options<\/span><\/h3><br \/><ul style=\"list-style:disc;margin-top:0px;margin-bottom:10px;padding-left:0px;margin-left:16px;\"><br \/><li>EFT (Bank Transfer)<\/li><br \/><li>Visa, Master card and Credit Card<\/li><br \/><li>Installment zero pay (3 Months to pay)<\/li><br \/><li>Installment mobicred (12 Months to pay)<\/li><br \/><\/ul><br \/><\/li><br \/><\/ul><br \/><\/div><br \/><p><\/p>","link_rewrite":"dell-latitude-7430-14-fhd-ag-300-nits-intel-core-i7-1270p-12-core-32gb-ram-512gb-ssd-4-years-prosupport-win11-pro","name":"Dell Latitude 7430 14\" FHD AG 300-nits Intel Core i7-1270P 12-Core 32GB RAM - 512GB SSD 4 Years ProSupport Win11 pro","available_now":"","available_later":"","new":"0","id_product_attribute":"0","cart_quantity":"1","id_customization":null,"manufacturer_name":"dell","category":"home","price_attribute":null,"ecotax_attr":null,"id_image":"5028-13125","legend":"","reduction":1000,"price_without_reduction":45000,"specific_prices":{"id_specific_price":"786","id_specific_price_rule":"0","id_cart":"0","id_product":"5028","id_shop":"1","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"1000.000000","reduction_tax":"1","reduction_type":"amount","from":"0000-00-00 00:00:00","to":"2023-06-30 00:00:00","score":"16"},"stock_quantity":4,"price_with_reduction":44000,"price_with_reduction_without_tax":38260.869566,"total":"R\u00a044,000.00","total_wt":44000,"price_wt":44000,"allow_oosp":0,"attributes_small":"","rate":15,"tax_name":"VAT","pack":false,"ecotax_rate":0,"unit_price":"","remove_from_cart_url":"https:\/\/connexstore.co.za\/cart?delete=1&id_product=5028&id_product_attribute=0&token=fff5ab8d6eda7d36378b534fd6386aa7","up_quantity_url":"https:\/\/connexstore.co.za\/cart?update=1&id_product=5028&id_product_attribute=0&token=fff5ab8d6eda7d36378b534fd6386aa7&op=up","down_quantity_url":"https:\/\/connexstore.co.za\/cart?update=1&id_product=5028&id_product_attribute=0&token=fff5ab8d6eda7d36378b534fd6386aa7&op=down","update_quantity_url":"https:\/\/connexstore.co.za\/cart?update=1&id_product=5028&id_product_attribute=0&token=fff5ab8d6eda7d36378b534fd6386aa7","price_amount":"R\u00a044,000.00","quantity_wanted":"1","images":[{"bySize":{"small_default":{"url":"https:\/\/connexstore.co.za\/13125-small_default\/dell-latitude-7430-14-fhd-ag-300-nits-intel-core-i7-1270p-12-core-32gb-ram-512gb-ssd-4-years-prosupport-win11-pro.jpg","width":98,"height":98},"cart_default":{"url":"https:\/\/connexstore.co.za\/13125-cart_default\/dell-latitude-7430-14-fhd-ag-300-nits-intel-core-i7-1270p-12-core-32gb-ram-512gb-ssd-4-years-prosupport-win11-pro.jpg","width":125,"height":125},"home_default":{"url":"https:\/\/connexstore.co.za\/13125-home_default\/dell-latitude-7430-14-fhd-ag-300-nits-intel-core-i7-1270p-12-core-32gb-ram-512gb-ssd-4-years-prosupport-win11-pro.jpg","width":259,"height":259},"medium_default":{"url":"https:\/\/connexstore.co.za\/13125-medium_default\/dell-latitude-7430-14-fhd-ag-300-nits-intel-core-i7-1270p-12-core-32gb-ram-512gb-ssd-4-years-prosupport-win11-pro.jpg","width":400,"height":200},"large_default":{"url":"https:\/\/connexstore.co.za\/13125-large_default\/dell-latitude-7430-14-fhd-ag-300-nits-intel-core-i7-1270p-12-core-32gb-ram-512gb-ssd-4-years-prosupport-win11-pro.jpg","width":800,"height":600}},"small":{"url":"https:\/\/connexstore.co.za\/13125-small_default\/dell-latitude-7430-14-fhd-ag-300-nits-intel-core-i7-1270p-12-core-32gb-ram-512gb-ssd-4-years-prosupport-win11-pro.jpg","width":98,"height":98},"medium":{"url":"https:\/\/connexstore.co.za\/13125-home_default\/dell-latitude-7430-14-fhd-ag-300-nits-intel-core-i7-1270p-12-core-32gb-ram-512gb-ssd-4-years-prosupport-win11-pro.jpg","width":259,"height":259},"large":{"url":"https:\/\/connexstore.co.za\/13125-large_default\/dell-latitude-7430-14-fhd-ag-300-nits-intel-core-i7-1270p-12-core-32gb-ram-512gb-ssd-4-years-prosupport-win11-pro.jpg","width":800,"height":600},"legend":"","id_image":"13125","cover":"1","position":"1","associatedVariants":[]}],"cover":{"bySize":{"small_default":{"url":"https:\/\/connexstore.co.za\/13125-small_default\/dell-latitude-7430-14-fhd-ag-300-nits-intel-core-i7-1270p-12-core-32gb-ram-512gb-ssd-4-years-prosupport-win11-pro.jpg","width":98,"height":98},"cart_default":{"url":"https:\/\/connexstore.co.za\/13125-cart_default\/dell-latitude-7430-14-fhd-ag-300-nits-intel-core-i7-1270p-12-core-32gb-ram-512gb-ssd-4-years-prosupport-win11-pro.jpg","width":125,"height":125},"home_default":{"url":"https:\/\/connexstore.co.za\/13125-home_default\/dell-latitude-7430-14-fhd-ag-300-nits-intel-core-i7-1270p-12-core-32gb-ram-512gb-ssd-4-years-prosupport-win11-pro.jpg","width":259,"height":259},"medium_default":{"url":"https:\/\/connexstore.co.za\/13125-medium_default\/dell-latitude-7430-14-fhd-ag-300-nits-intel-core-i7-1270p-12-core-32gb-ram-512gb-ssd-4-years-prosupport-win11-pro.jpg","width":400,"height":200},"large_default":{"url":"https:\/\/connexstore.co.za\/13125-large_default\/dell-latitude-7430-14-fhd-ag-300-nits-intel-core-i7-1270p-12-core-32gb-ram-512gb-ssd-4-years-prosupport-win11-pro.jpg","width":800,"height":600}},"small":{"url":"https:\/\/connexstore.co.za\/13125-small_default\/dell-latitude-7430-14-fhd-ag-300-nits-intel-core-i7-1270p-12-core-32gb-ram-512gb-ssd-4-years-prosupport-win11-pro.jpg","width":98,"height":98},"medium":{"url":"https:\/\/connexstore.co.za\/13125-home_default\/dell-latitude-7430-14-fhd-ag-300-nits-intel-core-i7-1270p-12-core-32gb-ram-512gb-ssd-4-years-prosupport-win11-pro.jpg","width":259,"height":259},"large":{"url":"https:\/\/connexstore.co.za\/13125-large_default\/dell-latitude-7430-14-fhd-ag-300-nits-intel-core-i7-1270p-12-core-32gb-ram-512gb-ssd-4-years-prosupport-win11-pro.jpg","width":800,"height":600},"legend":"","id_image":"13125","cover":"1","position":"1","associatedVariants":[]},"has_discount":true,"discount_type":"amount","discount_percentage":"-100,000%","discount_percentage_absolute":"100,000%","discount_amount":"R\u00a01,000.00","regular_price_amount":45000,"regular_price":"R\u00a045,000.00","discount_to_display":"R\u00a01,000.00","unit_price_full":"","show_availability":true,"availability_date":null,"availability_message":"","availability":"available","customizations":[]}],"totals":{"total":{"type":"total","label":"Total","amount":44000,"value":"R\u00a044,000.00"},"total_including_tax":{"type":"total","label":"Total (tax incl.)","amount":44000,"value":"R\u00a044,000.00"},"total_excluding_tax":{"type":"total","label":"Total (tax excl.)","amount":38260.87,"value":"R\u00a038,260.87"}},"subtotals":{"products":{"type":"products","label":"Subtotal","amount":44000,"value":"R\u00a044,000.00"},"discounts":null,"shipping":{"type":"shipping","label":"Shipping","amount":0,"value":"Free"},"tax":null},"products_count":1,"summary_string":"1 item","vouchers":{"allowed":1,"added":[]},"discounts":[],"minimalPurchase":0,"minimalPurchaseRequired":""},"currency":{"id":2,"name":"South African Rand","iso_code":"ZAR","iso_code_num":"710","sign":"R"},"customer":{"lastname":"nkomo","firstname":"poppy","email":"ndlovusithembinkosi332@gmail.com","birthday":"0000-00-00","newsletter":"1","newsletter_date_add":"2023-05-23 02:48:48","optin":"0","website":"","company":"","siret":"","ape":"","is_logged":true,"gender":{"type":"1","name":{"1":"Mrs."}},"addresses":[]},"language":{"name":"English (English)","iso_code":"en","locale":"en-US","language_code":"en-za","is_rtl":"0","date_format_lite":"m\/d\/Y","date_format_full":"m\/d\/Y H:i:s","id":1},"page":{"title":"","canonical":null,"meta":{"title":"My account","description":"","keywords":"","robots":"index"},"page_name":"my-account","body_classes":{"lang-en":true,"lang-rtl":false,"country-ZA":true,"currency-ZAR":true,"layout-full-width":true,"page-my-account":true,"tax-display-enabled":true},"admin_notifications":[]},"shop":{"name":"Connex Store","logo":"https:\/\/connexstore.co.za\/img\/logo-1671096750.jpg","stores_icon":"https:\/\/connexstore.co.za\/img\/logo_stores.png","favicon":"https:\/\/connexstore.co.za\/img\/favicon.ico"},"urls":{"base_url":"https:\/\/connexstore.co.za\/","current_url":"https:\/\/connexstore.co.za\/my-account","shop_domain_url":"https:\/\/connexstore.co.za","img_ps_url":"https:\/\/connexstore.co.za\/img\/","img_cat_url":"https:\/\/connexstore.co.za\/img\/c\/","img_lang_url":"https:\/\/connexstore.co.za\/img\/l\/","img_prod_url":"https:\/\/connexstore.co.za\/img\/p\/","img_manu_url":"https:\/\/connexstore.co.za\/img\/m\/","img_sup_url":"https:\/\/connexstore.co.za\/img\/su\/","img_ship_url":"https:\/\/connexstore.co.za\/img\/s\/","img_store_url":"https:\/\/connexstore.co.za\/img\/st\/","img_col_url":"https:\/\/connexstore.co.za\/img\/co\/","img_url":"https:\/\/connexstore.co.za\/themes\/AngarTheme\/assets\/img\/","css_url":"https:\/\/connexstore.co.za\/themes\/AngarTheme\/assets\/css\/","js_url":"https:\/\/connexstore.co.za\/themes\/AngarTheme\/assets\/js\/","pic_url":"https:\/\/connexstore.co.za\/upload\/","pages":{"address":"https:\/\/connexstore.co.za\/address","addresses":"https:\/\/connexstore.co.za\/addresses","authentication":"https:\/\/connexstore.co.za\/login","cart":"https:\/\/connexstore.co.za\/cart","category":"https:\/\/connexstore.co.za\/index.php?controller=category","cms":"https:\/\/connexstore.co.za\/index.php?controller=cms","contact":"https:\/\/connexstore.co.za\/contact-us","discount":"https:\/\/connexstore.co.za\/discount","guest_tracking":"https:\/\/connexstore.co.za\/guest-tracking","history":"https:\/\/connexstore.co.za\/order-history","identity":"https:\/\/connexstore.co.za\/identity","index":"https:\/\/connexstore.co.za\/","my_account":"https:\/\/connexstore.co.za\/my-account","order_confirmation":"https:\/\/connexstore.co.za\/order-confirmation","order_detail":"https:\/\/connexstore.co.za\/index.php?controller=order-detail","order_follow":"https:\/\/connexstore.co.za\/order-follow","order":"https:\/\/connexstore.co.za\/order","order_return":"https:\/\/connexstore.co.za\/index.php?controller=order-return","order_slip":"https:\/\/connexstore.co.za\/credit-slip","pagenotfound":"https:\/\/connexstore.co.za\/page-not-found","password":"https:\/\/connexstore.co.za\/password-recovery","pdf_invoice":"https:\/\/connexstore.co.za\/index.php?controller=pdf-invoice","pdf_order_return":"https:\/\/connexstore.co.za\/index.php?controller=pdf-order-return","pdf_order_slip":"https:\/\/connexstore.co.za\/index.php?controller=pdf-order-slip","prices_drop":"https:\/\/connexstore.co.za\/prices-drop","product":"https:\/\/connexstore.co.za\/index.php?controller=product","search":"https:\/\/connexstore.co.za\/search","sitemap":"https:\/\/connexstore.co.za\/sitemap","stores":"https:\/\/connexstore.co.za\/stores","supplier":"https:\/\/connexstore.co.za\/supplier","register":"https:\/\/connexstore.co.za\/login?create_account=1","order_login":"https:\/\/connexstore.co.za\/order?login=1"},"alternative_langs":[],"theme_assets":"\/themes\/AngarTheme\/assets\/","actions":{"logout":"https:\/\/connexstore.co.za\/?mylogout="},"no_picture_image":{"bySize":{"small_default":{"url":"https:\/\/connexstore.co.za\/img\/p\/en-default-small_default.jpg","width":98,"height":98},"cart_default":{"url":"https:\/\/connexstore.co.za\/img\/p\/en-default-cart_default.jpg","width":125,"height":125},"home_default":{"url":"https:\/\/connexstore.co.za\/img\/p\/en-default-home_default.jpg","width":259,"height":259},"medium_default":{"url":"https:\/\/connexstore.co.za\/img\/p\/en-default-medium_default.jpg","width":400,"height":200},"large_default":{"url":"https:\/\/connexstore.co.za\/img\/p\/en-default-large_default.jpg","width":800,"height":600}},"small":{"url":"https:\/\/connexstore.co.za\/img\/p\/en-default-small_default.jpg","width":98,"height":98},"medium":{"url":"https:\/\/connexstore.co.za\/img\/p\/en-default-home_default.jpg","width":259,"height":259},"large":{"url":"https:\/\/connexstore.co.za\/img\/p\/en-default-large_default.jpg","width":800,"height":600},"legend":""}},"configuration":{"display_taxes_label":true,"display_prices_tax_incl":true,"is_catalog":false,"show_prices":true,"opt_in":{"partner":false},"quantity_discount":{"type":"price","label":"Unit price"},"voucher_enabled":1,"return_enabled":0},"field_required":[],"breadcrumb":{"links":[{"title":"Home","url":"https:\/\/connexstore.co.za\/"},{"title":"Your account","url":"https:\/\/connexstore.co.za\/my-account"}],"count":2},"link":{"protocol_link":"https:\/\/","protocol_content":"https:\/\/"},"time":1684802979,"static_token":"fff5ab8d6eda7d36378b534fd6386aa7","token":"837ed86d5613748a2e7d0620abdd58e0","debug":false};
        var productsAlreadyTagged = [];
        var psemailsubscription_subscription = "https:\/\/connexstore.co.za\/module\/ps_emailsubscription\/subscription";
        var psr_icon_color = "#F19D76";
        var removeFromWishlistUrl = "https:\/\/connexstore.co.za\/module\/blockwishlist\/action?action=deleteProductFromWishlist";
        var roja45_hide_add_to_cart = 0;
        var roja45_hide_price = 0;
        var roja45_quotation_useajax = 1;
        var roja45quotationspro_added_failed = "Unable to add product to your request.";
        var roja45quotationspro_added_success = "Product added to your request successfully.";
        var roja45quotationspro_allow_modifications = 0;
        var roja45quotationspro_button_addquote = "Add To Quote";
        var roja45quotationspro_button_text = "Request Quote";
        var roja45quotationspro_button_text_2 = "Request New Quote";
        var roja45quotationspro_cart_modified = 0;
        var roja45quotationspro_cartbutton_text = "Add To Quote";
        var roja45quotationspro_catalog_mode = 0;
        var roja45quotationspro_change_qty = 0;
        var roja45quotationspro_controller = "https:\/\/connexstore.co.za\/module\/roja45quotationspro\/QuotationsProFront?token=fff5ab8d6eda7d36378b534fd6386aa7";
        var roja45quotationspro_delete_products = 0;
        var roja45quotationspro_deleted_failed = "Unable to remove product from your request.";
        var roja45quotationspro_deleted_success = "Product removed from your request successfully.";
        var roja45quotationspro_enable_captcha = 0;
        var roja45quotationspro_enable_captchatype = 0;
        var roja45quotationspro_enable_inquotenotify = 1;
        var roja45quotationspro_enable_quote_dropdown = 0;
        var roja45quotationspro_enablequotecart = 1;
        var roja45quotationspro_enablequotecartpopup = 0;
        var roja45quotationspro_error_title = "Error";
        var roja45quotationspro_in_cart = 0;
        var roja45quotationspro_instantresponse = 0;
        var roja45quotationspro_label_position = "";
        var roja45quotationspro_new_quote_available = "A new quotation is available in your account.";
        var roja45quotationspro_productlistitemselector = "article.product-miniature";
        var roja45quotationspro_productlistselector_addtocart = "";
        var roja45quotationspro_productlistselector_buttons = "";
        var roja45quotationspro_productlistselector_flag = ".product-flags";
        var roja45quotationspro_productlistselector_price = ".product-price-and-shipping";
        var roja45quotationspro_productselector_addtocart = ".product-add-to-cart";
        var roja45quotationspro_productselector_price = "div.product-prices";
        var roja45quotationspro_productselector_qty = ".quote_quantity_wanted";
        var roja45quotationspro_quote_link_text = "Get A Quote";
        var roja45quotationspro_quote_modified = "Your cart has changed, you can request a new quote or reload an existing quote by clicking the link below.";
        var roja45quotationspro_recaptcha_site_key = "";
        var roja45quotationspro_request_buttons = "";
        var roja45quotationspro_responsivecartnavselector = "._desktop_quotecart";
        var roja45quotationspro_responsivecartselector = "#header .header-nav div.hidden-md-up";
        var roja45quotationspro_sent_failed = "Unable to send request. Please try again later.";
        var roja45quotationspro_sent_success = "Request received, we will be in touch shortly. Thank You.";
        var roja45quotationspro_show_label = 1;
        var roja45quotationspro_success_title = "Success";
        var roja45quotationspro_touchspin = 1;
        var roja45quotationspro_unknown_error = "An unexpected error has occurred, please raise this with your support provider.";
        var roja45quotationspro_usejs = 1;
        var roja45quotationspro_warning_title = "Warning";
        var wishlistAddProductToCartUrl = "https:\/\/connexstore.co.za\/module\/blockwishlist\/action?action=addProductToCart";
        var wishlistUrl = "https:\/\/connexstore.co.za\/module\/blockwishlist\/view";
      </script>



  
<style type="text/css">
body {
background-color: #ffffff;
font-family: "Poppins", Arial, Helvetica, sans-serif;
}

.products .product-miniature .product-title {
height: 45px;
}

.products .product-miniature .product-title a {
font-size: 14px;
line-height: 12px;
}

#content-wrapper .products .product-miniature .product-desc {
height: 0px;
}

@media (min-width: 991px) {
#home_categories ul li .cat-container {
min-height: 0px;
}
}

@media (min-width: 768px) {
#_desktop_logo {
padding-top: 0px;
padding-bottom: 0px;
}
}

nav.header-nav {
background: #ffffff;
}

nav.header-nav,
.header_sep2 #contact-link span.shop-phone,
.header_sep2 #contact-link span.shop-phone.shop-tel,
.header_sep2 #contact-link span.shop-phone:last-child,
.header_sep2 .lang_currency_top,
.header_sep2 .lang_currency_top:last-child,
.header_sep2 #_desktop_currency_selector,
.header_sep2 #_desktop_language_selector,
.header_sep2 #_desktop_user_info {
border-color: #d6d4d4;
}

#contact-link,
#contact-link a,
.lang_currency_top span.lang_currency_text,
.lang_currency_top .dropdown i.expand-more,
nav.header-nav .user-info span,
nav.header-nav .user-info a.logout,
#languages-block-top div.current,
nav.header-nav a{
color: #000000;
}

#contact-link span.shop-phone strong,
#contact-link span.shop-phone strong a,
.lang_currency_top span.expand-more,
nav.header-nav .user-info a.account {
color: #1b82d6;
}

#contact-link span.shop-phone i {
color: #1b82d6;
}

.header-top {
background: #ffffff;
}

div#search_widget form button[type=submit] {
background: #1b82d6;
color: #ffffff;
}

div#search_widget form button[type=submit]:hover {
background: #1b82d6;
color: #ffffff;
}


#header div#_desktop_cart .blockcart .header {
background: #1b82d6;
}

#header div#_desktop_cart .blockcart .header a.cart_link {
color: #ffffff;
}


#homepage-slider .bx-wrapper .bx-pager.bx-default-pager a:hover,
#homepage-slider .bx-wrapper .bx-pager.bx-default-pager a.active{
background: #1b82d6;
}

div#rwd_menu {
background: #1b1a1b;
}

div#rwd_menu,
div#rwd_menu a {
color: #ffffff;
}

div#rwd_menu,
div#rwd_menu .rwd_menu_item,
div#rwd_menu .rwd_menu_item:first-child {
border-color: #363636;
}

div#rwd_menu .rwd_menu_item:hover,
div#rwd_menu .rwd_menu_item:focus,
div#rwd_menu .rwd_menu_item a:hover,
div#rwd_menu .rwd_menu_item a:focus {
color: #ffffff;
background: #1b82d6;
}

#mobile_top_menu_wrapper2 .top-menu li a:hover,
.rwd_menu_open ul.user_info li a:hover {
background: #1b82d6;
color: #ffffff;
}

#_desktop_top_menu{
background: #1b1a1b;
}

#_desktop_top_menu,
#_desktop_top_menu > ul > li,
.menu_sep1 #_desktop_top_menu > ul > li,
.menu_sep1 #_desktop_top_menu > ul > li:last-child,
.menu_sep2 #_desktop_top_menu,
.menu_sep2 #_desktop_top_menu > ul > li,
.menu_sep2 #_desktop_top_menu > ul > li:last-child,
.menu_sep3 #_desktop_top_menu,
.menu_sep4 #_desktop_top_menu,
.menu_sep5 #_desktop_top_menu,
.menu_sep6 #_desktop_top_menu {
border-color: #363636;
}

#_desktop_top_menu > ul > li > a {
color: #ffffff;
}

#_desktop_top_menu > ul > li:hover > a {
color: #ffffff;
background: #1b82d6;
}

.submenu1 #_desktop_top_menu .popover.sub-menu ul.top-menu li a:hover,
.submenu3 #_desktop_top_menu .popover.sub-menu ul.top-menu li a:hover,
.live_edit_0.submenu1 #_desktop_top_menu .popover.sub-menu ul.top-menu li:hover > a,
.live_edit_0.submenu3 #_desktop_top_menu .popover.sub-menu ul.top-menu li:hover > a {
background: #1b82d6;
color: #ffffff;
}


#home_categories .homecat_title span {
border-color: #1b82d6;
}

#home_categories ul li .homecat_name span {
background: #1b82d6;
}

#home_categories ul li a.view_more {
background: #1b82d6;
color: #ffffff;
border-color: #1b82d6;
}

#home_categories ul li a.view_more:hover {
background: #1b1a1b;
color: #ffffff;
border-color: #1b1a1b;
}

.columns .text-uppercase a,
.columns .text-uppercase span,
.columns div#_desktop_cart .cart_index_title a,
#home_man_product .catprod_title a span {
border-color: #1b82d6;
}

#index .tabs ul.nav-tabs li.nav-item a.active,
#index .tabs ul.nav-tabs li.nav-item a:hover,
.index_title a,
.index_title span {
border-color: #1b82d6;
}

a.product-flags-plist span.product-flag.new,
#home_cat_product a.product-flags-plist span.product-flag.new,
#product #content .product-flags li,
#product #content .product-flags .product-flag.new {
background: #1b82d6;
}

.products .product-miniature .product-title a,
#home_cat_product ul li .right-block .name_block a {
color: #000000;
}

.products .product-miniature span.price,
#home_cat_product ul li .product-price-and-shipping .price,
.ui-widget .search_right span.search_price,
body#view #main .wishlist-product-price {
color: #ff5722;
}

.button-container .add-to-cart:hover,
#subcart .cart-buttons .viewcart:hover,
body#view ul li.wishlist-products-item .wishlist-product-bottom .btn-primary:hover {
background: #282828;
color: #ffffff;
border-color: #282828;
}

.button-container .add-to-cart,
.button-container .add-to-cart:disabled,
#subcart .cart-buttons .viewcart,
body#view ul li.wishlist-products-item .wishlist-product-bottom .btn-primary {
background: #1b82d6;
color: #ffffff;
border-color: #1b82d6;
}

#home_cat_product .catprod_title span {
border-color: #1b82d6;
}

#home_man .man_title span {
border-color: #1b82d6;
}

div#angarinfo_block .icon_cms {
color: #1b82d6;
}

.footer-container {
background: #1b1a1b;
}

.footer-container,
.footer-container .h3,
.footer-container .links .title,
.row.social_footer {
border-color: #363636;
}

.footer-container .h3 span,
.footer-container .h3 a,
.footer-container .links .title span.h3,
.footer-container .links .title a.h3 {
border-color: #1b82d6;
}

.footer-container,
.footer-container .h3,
.footer-container .links .title .h3,
.footer-container a,
.footer-container li a,
.footer-container .links ul>li a {
color: #ffffff;
}

.block_newsletter .btn-newsletter {
background: #1b82d6;
color: #ffffff;
}

.block_newsletter .btn-newsletter:hover {
background: #1b82d6;
color: #ffffff;
}

.footer-container .bottom-footer {
background: #1b1a1b;
border-color: #363636;
color: #ffffff;
}

.product-prices .current-price span.price {
color: #ff5722;
}

.product-add-to-cart button.btn.add-to-cart:hover {
background: #282828;
color: #ffffff;
border-color: #282828;
}

.product-add-to-cart button.btn.add-to-cart,
.product-add-to-cart button.btn.add-to-cart:disabled {
background: #1b82d6;
color: #ffffff;
border-color: #1b82d6;
}

#product .tabs ul.nav-tabs li.nav-item a.active,
#product .tabs ul.nav-tabs li.nav-item a:hover,
#product .index_title span,
.page-product-heading span,
body #product-comments-list-header .comments-nb {
border-color: #1b82d6;
}

body .btn-primary:hover {
background: #3aa04c;
color: #ffffff;
border-color: #196f28;
}

body .btn-primary,
body .btn-primary.disabled,
body .btn-primary:disabled,
body .btn-primary.disabled:hover {
background: #43b754;
color: #ffffff;
border-color: #399a49;
}

body .btn-secondary:hover {
background: #eeeeee;
color: #000000;
border-color: #d8d8d8;
}

body .btn-secondary,
body .btn-secondary.disabled,
body .btn-secondary:disabled,
body .btn-secondary.disabled:hover {
background: #f6f6f6;
color: #000000;
border-color: #d8d8d8;
}

.form-control:focus, .input-group.focus {
border-color: #dbdbdb;
outline-color: #dbdbdb;
}

body .pagination .page-list .current a,
body .pagination .page-list a:hover,
body .pagination .page-list .current a.disabled,
body .pagination .page-list .current a.disabled:hover {
color: #1b82d6;
}

.page-my-account #content .links a:hover i {
color: #1b82d6;
}

#scroll_top {
background: #1b82d6;
color: #ffffff;
}

#scroll_top:hover,
#scroll_top:focus {
background: #1b1a1b;
color: #ffffff;
}

</style>
  <script type="text/javascript">
    (window.gaDevIds=window.gaDevIds||[]).push('d6YPbH');
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'G-SFDH9RJQ2W', 'auto');
              ga('set', 'userId', '1697');
              ga('set', 'anonymizeIp', true);
              ga('send', 'pageview');
        ga('require', 'ec');
  </script>

   
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','AW-749461096');</script>
    <!-- End Google Tag Manager -->
    
<script type="text/javascript">
 var baseAjax ='https://connexstore.co.za/module/ybc_productimagehover/ajax';
 var YBC_PI_TRANSITION_EFFECT = 'fade';
 var _PI_VER_17_ = 1
 var _PI_VER_16_ = 1
</script> 



	<script type="text/javascript">

	  	oasl_translated_title = typeof oasl_translated_title != 'undefined' ? oasl_translated_title : '';
	  	oasl_widget_location = "library";
    	oasl_subdomain = "connexstorecoza";
	    oasl_auth_disable = '0';

		var providers = [];
				    providers.push("facebook");
				    providers.push("google");
		
	</script>











    
  <style type="text/css">.wishlist-button-product{margin-left:1.25rem}.wishlist-button-add{display:flex;align-items:center;justify-content:center;height:2.5rem;width:2.5rem;min-width:2.5rem;padding-top:0.1875rem;background-color:#ffffff;box-shadow:0.125rem -0.125rem 0.25rem 0 rgba(0,0,0,0.2);border-radius:50%;cursor:pointer;transition:0.2s ease-out;border:none}.wishlist-button-add:hover{opacity:0.7}.wishlist-button-add:focus{outline:0}.wishlist-button-add:active{transform:scale(1.2)}.wishlist-button-add i{color:#7a7a7a}
</style><style type="text/css">.wishlist-toast{padding:0.875rem 1.25rem;box-sizing:border-box;width:auto;border:1px solid #e5e5e5;border-radius:4px;background-color:#ffffff;box-shadow:0.125rem 0.125rem 0.625rem 0 rgba(0,0,0,0.2);position:fixed;right:1.25rem;z-index:9999;top:4.375rem;transition:0.2s ease-out;transform:translateY(-10px);pointer-events:none;opacity:0}.wishlist-toast.success{background-color:#69b92d;border-color:#69b92d}.wishlist-toast.success .wishlist-toast-text{color:white}.wishlist-toast.error{background-color:#b9312d;border-color:#b9312d}.wishlist-toast.error .wishlist-toast-text{color:white}.wishlist-toast.isActive{transform:translateY(0);pointer-events:all;opacity:1}.wishlist-toast-text{color:#232323;font-size:0.875rem;letter-spacing:0;line-height:1.1875rem;margin-bottom:0}
</style><style type="text/css">.wishlist-login .wishlist-modal{z-index:0}.wishlist-login .wishlist-modal.show{z-index:1053}
</style><style type="text/css">.wishlist-create .wishlist-modal{opacity:0;pointer-events:none;z-index:0}.wishlist-create .wishlist-modal.show{opacity:1;pointer-events:all;z-index:1053}
</style><style type="text/css">.wishlist-list{max-height:55vh;overflow-y:auto;border-top:1px solid #e5e5e5;border-bottom:1px solid #e5e5e5;margin:0}.wishlist-list-empty{font-size:30;text-align:center;padding:30px;padding-bottom:1.25rem;font-weight:bold;color:#000}.wishlist-list .wishlist-list-item{padding:0.875rem 0;transition:0.25s ease-out;cursor:pointer;margin-bottom:0}.wishlist-list .wishlist-list-item:hover{background:#ecf8fb}.wishlist-list .wishlist-list-item p{font-size:0.875rem;letter-spacing:0;color:#232323;margin-bottom:0;line-height:1rem;padding:0 2.5rem}
</style><style type="text/css">.wishlist-add-to-new{cursor:pointer;transition:0.2s ease-out;font-size:0.875rem;letter-spacing:0;line-height:1rem}.wishlist-add-to-new:hover{opacity:0.7}.wishlist-add-to-new i{margin-right:0.3125rem;vertical-align:middle;color:#2fb5d2;margin-top:-0.125rem;font-size:1.25rem}.wishlist-add-to .modal-body{padding:0}.wishlist-add-to .modal-footer{text-align:left;padding:0.75rem 1.25rem}
</style><style type="text/css">.fancybox-margin{margin-right:17px;}</style><style type="text/css" data-fbcssmodules="css:fb.css.base css:fb.css.dialog css:fb.css.iframewidget css:fb.css.customer_chat_plugin_iframe">.fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_reposition{overflow:hidden;position:relative}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:'lucida grande', tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}@keyframes fb_transform{from{opacity:0;transform:scale(.95)}to{opacity:1;transform:scale(1)}}.fb_animate{animation:fb_transform .3s forwards}
.fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_reposition{overflow:hidden;position:relative}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:'lucida grande', tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}@keyframes fb_transform{from{opacity:0;transform:scale(.95)}to{opacity:1;transform:scale(1)}}.fb_animate{animation:fb_transform .3s forwards}
.fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}.fb_dialog_advanced{border-radius:8px;padding:10px}.fb_dialog_content{background:#fff;color:#373737}.fb_dialog_close_icon{background:url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px}.fb_dialog_mobile .fb_dialog_close_icon{left:5px;right:auto;top:5px}.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}.fb_dialog_close_icon:hover{background:url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent}.fb_dialog_close_icon:active{background:url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent}.fb_dialog_iframe{line-height:0}.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #365899;color:#fff;font-size:14px;font-weight:bold;margin:0}.fb_dialog_content .dialog_title>span{background:url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}body.fb_hidden{height:100%;left:0;margin:0;overflow:visible;position:absolute;top:-10000px;transform:none;width:100%}.fb_dialog.fb_dialog_mobile.loading{background:url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}.fb_dialog.fb_dialog_mobile.loading.centered{background:none;height:auto;min-height:initial;min-width:initial;width:auto}.fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner{width:100%}.fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content{background:none}.loading.centered #fb_dialog_loader_close{clear:both;color:#fff;display:block;font-size:18px;padding-top:20px}#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .4);bottom:0;left:0;min-height:100%;position:absolute;right:0;top:0;width:100%;z-index:10000}#fb-root #fb_dialog_ipad_overlay.hidden{display:none}.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}.fb_dialog_mobile .fb_dialog_iframe{position:sticky;top:0}.fb_dialog_content .dialog_header{background:linear-gradient(from(#738aba), to(#2c4987));border-bottom:1px solid;border-color:#043b87;box-shadow:white 0 1px 1px -1px inset;color:#fff;font:bold 14px Helvetica, sans-serif;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}.fb_dialog_content .dialog_header table{height:43px;width:100%}.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px}.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px}.fb_dialog_content .touchable_button{background:linear-gradient(from(#4267B2), to(#2a4887));background-clip:padding-box;border:1px solid #29487d;border-radius:3px;display:inline-block;line-height:18px;margin-top:3px;max-width:85px;padding:4px 12px;position:relative}.fb_dialog_content .dialog_header .touchable_button input{background:none;border:none;color:#fff;font:bold 12px Helvetica, sans-serif;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}.fb_dialog_content .dialog_content{background:url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #4a4a4a;border-bottom:0;border-top:0;height:150px}.fb_dialog_content .dialog_footer{background:#f5f6f7;border:1px solid #4a4a4a;border-top-color:#ccc;height:40px}#fb_dialog_loader_close{float:left}.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}#fb_dialog_loader_spinner{animation:rotateSpinner 1.2s linear infinite;background-color:transparent;background-image:url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);background-position:50% 50%;background-repeat:no-repeat;height:24px;width:24px}@keyframes rotateSpinner{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}
.fb_iframe_widget{display:inline-block;position:relative}.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}.fb_iframe_widget iframe{position:absolute}.fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{max-width:100%}.fb_iframe_widget_fluid_desktop iframe{min-width:220px;position:relative}.fb_iframe_widget_lift{z-index:1}.fb_iframe_widget_fluid{display:inline}.fb_iframe_widget_fluid span{width:100%}
.fb_mpn_mobile_landing_page_slide_out{animation-duration:200ms;animation-name:fb_mpn_landing_page_slide_out;transition-timing-function:ease-in}.fb_mpn_mobile_landing_page_slide_out_from_left{animation-duration:200ms;animation-name:fb_mpn_landing_page_slide_out_from_left;transition-timing-function:ease-in}.fb_mpn_mobile_landing_page_slide_up{animation-duration:500ms;animation-name:fb_mpn_landing_page_slide_up;transition-timing-function:ease-in}.fb_mpn_mobile_bounce_in{animation-duration:300ms;animation-name:fb_mpn_bounce_in;transition-timing-function:ease-in}.fb_mpn_mobile_bounce_out{animation-duration:300ms;animation-name:fb_mpn_bounce_out;transition-timing-function:ease-in}.fb_mpn_mobile_bounce_out_v2{animation-duration:300ms;animation-name:fb_mpn_fade_out;transition-timing-function:ease-in}.fb_customer_chat_bounce_in_v2{animation-duration:300ms;animation-name:fb_bounce_in_v2;transition-timing-function:ease-in}.fb_customer_chat_bounce_in_from_left{animation-duration:300ms;animation-name:fb_bounce_in_from_left;transition-timing-function:ease-in}.fb_customer_chat_bounce_out_v2{animation-duration:300ms;animation-name:fb_bounce_out_v2;transition-timing-function:ease-in}.fb_customer_chat_bounce_out_from_left{animation-duration:300ms;animation-name:fb_bounce_out_from_left;transition-timing-function:ease-in}.fb_invisible_flow{display:inherit;height:0;overflow-x:hidden;width:0}@keyframes fb_mpn_landing_page_slide_out{0%{margin:0 12px;width:100% - 24px}60%{border-radius:18px}100%{border-radius:50%;margin:0 24px;width:60px}}@keyframes fb_mpn_landing_page_slide_out_from_left{0%{left:12px;width:100% - 24px}60%{border-radius:18px}100%{border-radius:50%;left:12px;width:60px}}@keyframes fb_mpn_landing_page_slide_up{0%{bottom:0;opacity:0}100%{bottom:24px;opacity:1}}@keyframes fb_mpn_bounce_in{0%{opacity:.5;top:100%}100%{opacity:1;top:0}}@keyframes fb_mpn_fade_out{0%{bottom:30px;opacity:1}100%{bottom:0;opacity:0}}@keyframes fb_mpn_bounce_out{0%{opacity:1;top:0}100%{opacity:.5;top:100%}}@keyframes fb_bounce_in_v2{0%{opacity:0;transform:scale(0, 0);transform-origin:bottom right}50%{transform:scale(1.03, 1.03);transform-origin:bottom right}100%{opacity:1;transform:scale(1, 1);transform-origin:bottom right}}@keyframes fb_bounce_in_from_left{0%{opacity:0;transform:scale(0, 0);transform-origin:bottom left}50%{transform:scale(1.03, 1.03);transform-origin:bottom left}100%{opacity:1;transform:scale(1, 1);transform-origin:bottom left}}@keyframes fb_bounce_out_v2{0%{opacity:1;transform:scale(1, 1);transform-origin:bottom right}100%{opacity:0;transform:scale(0, 0);transform-origin:bottom right}}@keyframes fb_bounce_out_from_left{0%{opacity:1;transform:scale(1, 1);transform-origin:bottom left}100%{opacity:0;transform:scale(0, 0);transform-origin:bottom left}}@keyframes slideInFromBottom{0%{opacity:.1;transform:translateY(100%)}100%{opacity:1;transform:translateY(0)}}@keyframes slideInFromBottomDelay{0%{opacity:0;transform:translateY(100%)}97%{opacity:0;transform:translateY(100%)}100%{opacity:1;transform:translateY(0)}}</style><script charset="utf-8" src="https://embed.tawk.to/_s/v4/app/642b759ae8c/js/twk-chunk-2c78ba82.js"></script><script charset="utf-8" src="https://embed.tawk.to/_s/v4/app/642b759ae8c/js/twk-chunk-696bc286.js"></script><script charset="utf-8" src="https://embed.tawk.to/_s/v4/app/642b759ae8c/js/twk-chunk-f1596d96.js"></script><script charset="utf-8" src="https://embed.tawk.to/_s/v4/app/642b759ae8c/js/twk-chunk-48f46bef.js"></script><script charset="utf-8" src="https://embed.tawk.to/_s/v4/app/642b759ae8c/js/twk-chunk-4fe9d5dd.js"></script><script charset="utf-8" src="https://embed.tawk.to/_s/v4/app/642b759ae8c/js/twk-chunk-2d0b9454.js"></script><script charset="utf-8" src="https://embed.tawk.to/_s/v4/app/642b759ae8c/js/twk-chunk-f163fcd0.js"></script><script charset="utf-8" src="https://embed.tawk.to/_s/v4/app/642b759ae8c/js/twk-chunk-32507910.js"></script><style type="text/css">#uo72eecr9i7o1684802987163 {outline:none !important;
visibility:visible !important;
resize:none !important;
box-shadow:none !important;
overflow:visible !important;
background:none !important;
opacity:1 !important;
filter:alpha(opacity=100) !important;
-ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity 1}) !important;
-mz-opacity:1 !important;
-khtml-opacity:1 !important;
top:auto !important;
right:0px !important;
bottom:0px !important;
left:auto !important;
position:fixed !important;
border:0 !important;
min-height:0px  !important;
min-width:0px  !important;
max-height:none  !important;
max-width:none  !important;
padding:0px !important;
margin:0px !important;
-moz-transition-property:none !important;
-webkit-transition-property:none !important;
-o-transition-property:none !important;
transition-property:none !important;
transform:none !important;
-webkit-transform:none !important;
-ms-transform:none !important;
width:auto !important;
height:auto  !important;
display:none !important;
z-index:2000000000 !important;
background-color:transparent !important;
cursor:none !important;
float:none !important;
border-radius:unset !important;
pointer-events:auto !important;
clip:auto !important;
color-scheme:light !important;}#uo72eecr9i7o1684802987163.widget-hidden {display: none !important;}#uo72eecr9i7o1684802987163.widget-visible {display: block !important;}
@media print{
 #uo72eecr9i7o1684802987163.widget-visible { 
display: none !important;
 }
}</style><script src="https://cdn.jsdelivr.net/emojione/2.2.7/lib/js/emojione.min.js" type="text/javascript" async="" defer=""></script><script src="https://cdn.jsdelivr.net/emojione/2.2.7/lib/js/emojione.min.js" type="text/javascript" async="" defer=""></script><style type="text/css">@keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}@-moz-keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}@-webkit-keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}#gvi0qf2vkrq81684802987228.open{animation : tawkMaxOpen .25s ease!important;}@keyframes tawkMaxClose{from{opacity: 1;transform:translate(0, 0px);;}to{opacity: 0;transform:translate(0, 30px);;}}@-moz-keyframes tawkMaxClose{from{opacity: 1;transform:translate(0, 0px);;}to{opacity: 0;transform:translate(0, 30px);;}}@-webkit-keyframes tawkMaxClose{from{opacity: 1;transform:translate(0, 0px);;}to{opacity: 0;transform:translate(0, 30px);;}}#gvi0qf2vkrq81684802987228.closed{animation: tawkMaxClose .25s ease!important}</style></head>

  <body id="my-account" class="lang-en country-za currency-zar layout-full-width page-my-account tax-display-enabled live_edit_0 ps_178 no_bg #ffffff bg_attatchment_normal bg_position_tl bg_repeat_xy bg_size_initial slider_position_column slider_controls_black banners_top2 banners_top_tablets2 banners_top_phones1 banners_bottom2 banners_bottom_tablets2 banners_bottom_phones1 submenu1 pl_1col_qty_5 pl_2col_qty_5 pl_3col_qty_3 pl_1col_qty_bigtablets_4 pl_2col_qty_bigtablets_3 pl_3col_qty_bigtablets_2 pl_1col_qty_tablets_3 pl_1col_qty_phones_1 home_tabs2 pl_border_type2 45 14 12 pl_button_icon_no pl_button_qty2 pl_desc_no pl_reviews_no pl_availability_no hide_reference_no hide_reassurance_yes product_tabs1 menu_sep6 header_sep1 slider_full_width feat_cat_style2 feat_cat6 feat_cat_bigtablets4 feat_cat_tablets4 feat_cat_phones0 all_products_yes pl_colors_yes newsletter_info_yes stickycart_yes stickymenu_yes homeicon_no pl_man_no product_hide_man_no pl_ref_yes mainfont_Poppins bg_white standard_carusele display_slider">

    
        
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=AW-749461096"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  
  <main>
      
              

      <header id="header" class="is-open">
        
          


  <div class="header-banner">
    
  </div>



  <nav class="header-nav">
    <div class="container">
      <div class="row">
          <div class="col-md-12 col-xs-12">
           

  </div>
</div>
<div id="_desktop_user_info"><div class="user-info">








</div></div>
  
</div>

            
          </div>
     
  



  <div class="header-top">
    <div class="container">
	  <div class="row">
        <div class="col-md-4 hidden-sm-down2" id="_desktop_logo">
                            <a href="">
                  <img class="logo img-responsive" src="https://connexstore.co.za/img/logo-1671096750.jpg" alt="Connex Store">
                </a>
                    </div>
		
					

<div class="menu js-top-menu position-static hidden-sm-down" id="_desktop_top_menu">
    

      


    
</div>


        
      </header>

      

      <?php
if(isset($message)){
    foreach($message as $message){
        echo '<div class="message"><span>'.$message.'</span><i class="fas fa-times" onclick="this.parentElement.style.display = `none`"></i></div>';
    };
};

?>
            
      <section id="wrapper">
        
        <div class="container">
			
			
			<div class="row">
			  			  
				<nav data-depth="2" class="breadcrumb hidden-sm-down">
  <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
          
        <li itemprop="itemListElement" itemscope="" >
          <a itemprop="item" href="admindashboard.php">
            <span itemprop="name">Admin Dashboard</span>
          </a>
          <meta itemprop="position" content="1">
        </li>
         
        <li itemprop="itemListElement" itemscope="" >
          <a itemprop="item" href="userdisplay.php">
            <span itemprop="name">Users </span>
          </a>
          <meta itemprop="position" content="2">
        </li>
          
        <li itemprop="itemListElement" itemscope="" >
          <a itemprop="item" href="addproducts.php">
            <span itemprop="name">Add Products </span>
          </a>
          <meta itemprop="position" content="2">
        </li>
      
      </ol>
</nav>

                <a class="label" href="admindashboard.php">
    <i class="material-icons">chevron_left</i>Go Back
  </a>
  </section>

<div class="container3">

<section>
<form action="" method="post" class="add-product-form" enctype="multipart/form-data">
    <h3>Add a new product</h3>
    <input type="text" name="name" placeholder="enter the product name" class="box" required>
    <input type="number" name="price" min="0" placeholder="enter the product price" class="box" required>
    <input type="text" name="description" placeholder="enter the product description" class="box" required>
    <input type="file" name="image" accept="image/png, image/jpg, image/jpeg" class="box" required>
    <input type="submit" value="add the product" name="add_product" class="btn" >
</form>
        
</section>
</div>

<section class="display-product-table">
    <table>
    
    <thead>
            <th class="text-center" style="color: white;">Image</th>
            <th class="text-center" style="color: white;">Name</th>
            <th class="text-center" style="color: white;">Price</th>
            <th class="text-center" style="color: white;">Description</th>
            <th class="text-center" style="color: white;">Action</th>
    </thead>

    <tbody>
        <?php

        $select_products = mysqli_query($conn, "SELECT * FROM `new_products`");
        if(mysqli_num_rows($select_products) > 0){
            while($row = mysqli_fetch_assoc($select_products)){
        
        
        ?>
            <tr>
                <td><img src="../images/<?php echo $row['image']; ?>" height="100" width="100px" alt=""></td>
                <td><?php echo $row['name']?></td>
                <td>R<?php echo $row['price']?></td>
                <td><?php echo $row['description']?></td>
                <td>
                    <a href="addproducts.php?delete=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('are you sure you want to delete this?');"><i class="fas fa-trash"></i>delete</a>
                    <a href="updateproducts.php?edit=<?php echo $row['id']; ?>" class="option-btn"><i class="fas fa-edit"></i>update
                </a>
                </td>
            </tr>
        <?php
        }
    }else{
        echo "<span>no products added</span>";
    }
        ?>
    </tbody>
    </table>
    
</section>

<section class="edit-form-container">
    <?php
    
    if(isset($_POST['edit'])){ 
    $edit = $_POST['edit'];
    $edit_query = mysqli_query($conn, "SELECT * FROM `new_products` WHERE id = '$edit'");
    if(mysqli_num_rows($edit_query) > 0){
        while($fetch_edit = mysqli_fetch_assoc($edit_query)){

       
    ?>

    <form action="" method="POST" enctype="multipart/form-data">
        <img src="../images/<?php echo $fetch_edit['image'];?>" height="200" alt="">
        <input type="hidden" name="update_id" value="<?php echo $fetch_edit['id']; ?>">
        <input type="text" class="box" required name="update_name" value="<?php echo $fetch_edit['name']; ?>">
        <input type="number" class="box" min="0" name="update_price" value="<?php echo $fetch_edit['price']; ?>">
        <input type="file" class="box" name="update_image" accept="image/png, image/jpg, image/jpeg">
    <input type="submit" value="update the product" name="update_product" class="btn">
    <input type="reset" name="edit" value="cancel" id="close-edit" class="option-btn">
    </form>

    <?php
 }
    }
    echo "<script>document.querySelector('.edit-form-container').style.display = 'flex';</script>";
  }
 
    ?>
</section>
</div>
   
</body>
</html>