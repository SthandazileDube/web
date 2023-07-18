<?php
include_once('../functions-page.php');

?>
<?php
//$fullname = "User";
if (isset($_SESSION['name'])){
	$fullname = $_SESSION['name'];
}
else
{
	header("location: admindashboard.php");
}
?>
<!DOCTYPE html>

<html lang="en" class=""><head>
    
      
  <meta charset="utf-8">


  <meta http-equiv="x-ua-compatible" content="ie=edge">



  <title>Admin Dashboard</title>
  
    
  
  <meta name="description" content="">
  <meta name="keywords" content="">
    
  
        




  <meta name="viewport" content="width=device-width, initial-scale=1">



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


<ul class="user_info hidden-md-up">

	
		<li><a href="login.php" title="Log in to your customer account" rel="nofollow">Sign in</a></li>
		<li><a href="reg.php" title="Log in to your customer account" rel="nofollow">Create an account</a></li>

	
</ul>


<div  class="col-md-12 col-xs-5">
	<span class="welcome">Welcome,</span>
				<a class="account" href="admindashboard.php" title="Log in to your customer account" rel="nofollow"><?php echo $fullname; ?></a>

		<span class="or">or</span>

		<a class="account" href="../logout.php" title="Log in to your customer account" rel="nofollow">logout</a>
		</div>


</div></div>
  
</div>

            
          </div>
      </div>
    </div>
  </nav>



  <div class="header-top">
    <div class="container">
	  <div class="row">
        <div class="col-md-4 hidden-sm-down2" id="_desktop_logo">
        <img class="logo img-responsive" src="https://connexstore.co.za/img/logo-1671096750.jpg" alt="Connex Store">
                </a>
                    </div>
		
					





		<!--<div class="clearfix"></div>
	  </div>
    </div>
	<div id="rwd_menu" class="hidden-md-up">
					<div class="container">
						<div id="menu-icon2" class="rwd_menu_item"><i class="material-icons d-inline">&#xE5D2;</i></div>
						<div id="search-icon" class="rwd_menu_item"><i class="material-icons search">&#xE8B6;</i></div>
						<div id="user-icon" class="rwd_menu_item"><i class="material-icons logged">&#xE7FF;</i></div>
						<div id="_mobile_cart" class="rwd_menu_item"></div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="container">
					<div id="mobile_top_menu_wrapper2" class="rwd_menu_open hidden-md-up" style="display:none;">
						<div class="js-top-menu mobile" id="_mobile_top_menu"></div>
					</div>
					<div id="mobile_search_wrapper" class="rwd_menu_open hidden-md-up" style="display:none;">
						<div id="_mobile_search_widget"></div>
					</div>
					<div id="mobile_user_wrapper" class="rwd_menu_open hidden-md-up" style="display:none;">
						<div id="_mobile_user_info"></div>
					</div>
				</div>
  			</div>
            <div class="menu js-top-menu position-static hidden-sm-down" id="_desktop_top_menu">
                <ul class="top-menu container" id="top-menu" data-depth="0">
                    <li class="home_icon"><a href="index.html"><i class="icon-home"></i><span>Home</span></a></li>
                    <li class="category" id="category-2">
                        <a class="dropdown-item sf-with-ul" href="#" data-depth="0">
                            <span class="float-xs-right hidden-md-up">
                                <span data-target="#top_sub_menu_72226" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                    <i class="material-icons add">&#xE313;</i>
                                    <i class="material-icons remove">&#xE316;</i>
                                </span>
                            </span>
                            Home
                        </a>
                        <div class="popover sub-menu js-sub-menu collapse" id="top_sub_menu_72226">
                            <ul class="top-menu container" data-depth="1">
                                <li class="category" id="category-327">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="#" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_80555" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Gaming
                                    </a>
                                    <div class="collapse" id="top_sub_menu_80555">
                                        <ul class="top-menu container" data-depth="2">
                                            <li class="category" id="category-479">
                                                <a class="dropdown-item" href="#" data-depth="2">Pico</a>
                                            </li>
                                            <li class="category" id="category-328">
                                                <a class="dropdown-item" href="#" data-depth="2">Oculus</a>
                                            </li>
                                            <li class="category" id="category-329">
                                                <a class="dropdown-item" href="#" data-depth="2">
                                                    Gaming Accessories
                                                </a>
                                            </li>
                                            <li class="category" id="category-330">
                                                <a class="dropdown-item" href="#" data-depth="2">
                                                    Playstation
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="category" id="category-252">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="#" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_64529" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Automation
                                    </a>
                                    <div class="collapse" id="top_sub_menu_64529">
                                        <ul class="top-menu container" data-depth="2">
                                            <li class="category" id="category-255">
                                                <a class="dropdown-item" href="#" data-depth="2">BMW</a>
                                            </li>
                                            <li class="category" id="category-413">
                                                <a class="dropdown-item" href="#" data-depth="2">Car Accessories</a>
                                            </li>
                                            <li class="category" id="category-425">
                                                <a class="dropdown-item" href="#" data-depth="2">DIY</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="category" id="category-323">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="#" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_66394" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Beauty And Personal Care
                                    </a>
                                    <div class="collapse" id="top_sub_menu_66394">
                                        <ul class="top-menu container" data-depth="2">
                                            <li class="category" id="category-324">
                                                <a class="dropdown-item sf-with-ul" href="#" data-depth="2">
                                                    <span class="float-xs-right hidden-md-up">
                                                        <span data-target="#top_sub_menu_33790" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                            <i class="material-icons add">&#xE313;</i>
                                                            <i class="material-icons remove">&#xE316;</i>
                                                        </span>
                                                    </span>
                                                    Hair Shaver
                                                </a>
                                                <div class="collapse" id="top_sub_menu_33790">
                                                    <ul class="top-menu container" data-depth="3">
                                                        <li class="category" id="category-325">
                                                            <a class="dropdown-item" href="#" data-depth="3">Philips</a>
                                                        </li>
                                                        <li class="category" id="category-326">
                                                            <a class="dropdown-item" href="#" data-depth="3">Hatteker</a>
                                                        </li>
                                                        <li class="category" id="category-401">
                                                            <a class="dropdown-item" href="#" data-depth="3">TRU BARBER</a>
                                                        </li>
                                                        <li class="category" id="category-459">
                                                            <a class="dropdown-item" href="#" data-depth="3">Braun</a>
                                                        </li>
                                                        <li class="category" id="category-472">
                                                            <a class="dropdown-item" href="#" data-depth="3">Gillette</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="category" id="category-438">
                                                <a class="dropdown-item" href="#" data-depth="2">Nail Care</a>
                                            </li>
                                            <li class="category" id="category-461">
                                                <a class="dropdown-item" href="#" data-depth="2">Hair Care</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="category" id="category-363">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="#" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_11113" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Computers
                                    </a>
                                    <div class="collapse" id="top_sub_menu_11113">
                                        <ul class="top-menu container" data-depth="2">
                                            <li class="category" id="category-365">
                                                <a class="dropdown-item sf-with-ul" href="#" data-depth="2">
                                                    <span class="float-xs-right hidden-md-up">
                                                        <span data-target="#top_sub_menu_83203" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                            <i class="material-icons add">&#xE313;</i>
                                                            <i class="material-icons remove">&#xE316;</i>
                                                        </span>
                                                    </span>
                                                    Tablets
                                                </a>
                                                <div class="collapse" id="top_sub_menu_83203">
                                                    <ul class="top-menu container" data-depth="3">
                                                        <li class="category" id="category-373">
                                                            <a class="dropdown-item" href="#" data-depth="3">Samsung</a>
                                                        </li>
                                                        <li class="category" id="category-374">
                                                            <a class="dropdown-item" href="#" data-depth="3">Huawei</a>
                                                        </li>
                                                        <li class="category" id="category-375">
                                                            <a class="dropdown-item" href="#" data-depth="3">Lenovo</a>
                                                        </li>
                                                        <li class="category" id="category-408">
                                                            <a class="dropdown-item" href="#" data-depth="3">Tablet Accessories</a>
                                                        </li>
                                                        <li class="category" id="category-450">
                                                            <a class="dropdown-item" href="#" data-depth="3">Kindle</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="category" id="category-367">
                                                <a class="dropdown-item sf-with-ul" href="#" data-depth="2">
                                                    <span class="float-xs-right hidden-md-up">
                                                        <span data-target="#top_sub_menu_78071" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                            <i class="material-icons add">&#xE313;</i>
                                                            <i class="material-icons remove">&#xE316;</i>
                                                        </span>
                                                    </span>
                                                    Projector
                                                </a>
                                                <div class="collapse" id="top_sub_menu_78071">
                                                    <ul class="top-menu container" data-depth="3">
                                                        <li class="category" id="category-404">
                                                            <a class="dropdown-item" href="#" data-depth="3">BenQ</a>
                                                        </li>
                                                        <li class="category" id="category-405">
                                                            <a class="dropdown-item" href="#" data-depth="3">Epson</a>
                                                        </li>
                                                        <li class="category" id="category-457">
                                                            <a class="dropdown-item" href="#" data-depth="3">ViewSonic</a>
                                                        </li>
                                                        <li class="category" id="category-458">
                                                            <a class="dropdown-item" href="#" data-depth="3">Philips Projector</a>
                                                        </li>
                                                        <li class="category" id="category-480">
                                                            <a class="dropdown-item" href="#" data-depth="3">Acer</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="category" id="category-364">
                                                <a class="dropdown-item sf-with-ul" href="#" data-depth="2">
                                                    <span class="float-xs-right hidden-md-up">
                                                        <span data-target="#top_sub_menu_47446" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                            <i class="material-icons add">&#xE313;</i>
                                                            <i class="material-icons remove">&#xE316;</i>
                                                        </span>
                                                    </span>
                                                    Laptops
                                                </a>
                                                <div class="collapse" id="top_sub_menu_47446">
                                                    <ul class="top-menu container" data-depth="3">
                                                        <li class="category" id="category-376">
                                                            <a class="dropdown-item" href="#" data-depth="3">Lenovo</a>
                                                        </li>
                                                        <li class="category" id="category-377">
                                                            <a class="dropdown-item sf-with-ul" href="#" data-depth="3">
                                                                <span class="float-xs-right hidden-md-up">
                                                                    <span data-target="#top_sub_menu_40146" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                                        <i class="material-icons add">&#xE313;</i>
                                                                        <i class="material-icons remove">&#xE316;</i>
                                                                    </span>
                                                                </span>
                                                                HP
                                                            </a>
                                                            <div class="collapse" id="top_sub_menu_40146">
                                                                <ul class="top-menu container" data-depth="4">
                                                                    <li class="category" id="category-451">
                                                                        <a class="dropdown-item" href="#" data-depth="4">Pavillion</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="category" id="category-378">
                                                            <a class="dropdown-item" href="#" data-depth="3">Samsung</a>
                                                        </li>
                                                        <li class="category" id="category-380">
                                                            <a class="dropdown-item" href="#" data-depth="3">Jumper</a>
                                                        </li>
                                                        <li class="category" id="category-381">
                                                            <a class="dropdown-item" href="#" data-depth="3">Huawei</a>
                                                        </li>
                                                        <li class="category" id="category-402">
                                                            <a class="dropdown-item" href="#" data-depth="3">ACER</a>
                                                        </li>
                                                        <li class="category" id="category-417">
                                                            <a class="dropdown-item" href="#" data-depth="3">Laptop Bags</a>
                                                        </li>
                                                        <li class="category" id="category-418">
                                                            <a class="dropdown-item" href="#" data-depth="3">Dell</a>
                                                        </li>
                                                        <li class="category" id="category-419">
                                                            <a class="dropdown-item" href="#" data-depth="3">Asus</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="category" id="category-368">
                                                <a class="dropdown-item sf-with-ul" href="#" data-depth="2">
                                                    <span class="float-xs-right hidden-md-up">
                                                        <span data-target="#top_sub_menu_83248" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                            <i class="material-icons add">&#xE313;</i>
                                                            <i class="material-icons remove">&#xE316;</i>
                                                        </span>
                                                    </span>
                                                    Networking
                                                </a>
                                                <div class="collapse" id="top_sub_menu_83248">
                                                    <ul class="top-menu container" data-depth="3">
                                                        <li class="category" id="category-420">
                                                            <a class="dropdown-item sf-with-ul" href="#" data-depth="3">
                                                                <span class="float-xs-right hidden-md-up">
                                                                    <span data-target="#top_sub_menu_94401" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                                        <i class="material-icons add">&#xE313;</i>
                                                                        <i class="material-icons remove">&#xE316;</i>
                                                                    </span>
                                                                </span>
                                                                Routers
                                                            </a>
                                                            <div class="collapse" id="top_sub_menu_94401">
                                                                <ul class="top-menu container" data-depth="4">
                                                                    <li class="category" id="category-421">
                                                                        <a class="dropdown-item" href="#" data-depth="4">Netgear</a>
                                                                    </li>
                                                                    <li class="category" id="category-422">
                                                                        <a class="dropdown-item" href="#" data-depth="4">D-Link</a>
                                                                    </li>
                                                                    <li class="category" id="category-423">
                                                                        <a class="dropdown-item" href="#" data-depth="4">TP-Link</a>
                                                                    </li>
                                                                    <li class="category" id="category-424">
                                                                        <a class="dropdown-item" href="#" data-depth="4">ASUS</a>
                                                                    </li>
                                                                    <li class="category" id="category-426">
                                                                        <a class="dropdown-item" href="#" data-depth="4">GL.iNet</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="category" id="category-370">
                                                <a class="dropdown-item sf-with-ul" href="#" data-depth="2">
                                                    <span class="float-xs-right hidden-md-up">
                                                        <span data-target="#top_sub_menu_19329" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                            <i class="material-icons add">&#xE313;</i>
                                                            <i class="material-icons remove">&#xE316;</i>
                                                        </span>
                                                    </span>
                                                    Components
                                                </a>
                                                <div class="collapse" id="top_sub_menu_19329">
                                                    <ul class="top-menu container" data-depth="3">
                                                        <li class="category" id="category-382">
                                                            <a class="dropdown-item sf-with-ul" href="#" data-depth="3">
                                                                <span class="float-xs-right hidden-md-up">
                                                                    <span data-target="#top_sub_menu_6459" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                                        <i class="material-icons add">&#xE313;</i>
                                                                        <i class="material-icons remove">&#xE316;</i>
                                                                    </span>
                                                                </span>
                                                                Memory Modules
                                                            </a>
                                                            <div class="collapse" id="top_sub_menu_6459">
                                                                <ul class="top-menu container" data-depth="4">
                                                                    <li class="category" id="category-383">
                                                                        <a class="dropdown-item" href="#" data-depth="4">PATRIOT</a>
                                                                    </li>
                                                                    <li class="category" id="category-410">
                                                                        <a class="dropdown-item" href="#" data-depth="4">Gigastone</a>
                                                                    </li>
                                                                    <li class="category" id="category-411">
                                                                        <a class="dropdown-item" href="#" data-depth="4">Timetec</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="category" id="category-416">
                                                            <a class="dropdown-item" href="#" data-depth="3">Hard Drives</a>
                                                        </li>
                                                        <li class="category" id="category-454">
                                                            <a class="dropdown-item" href="#" data-depth="3">Keyboard</a>
                                                        </li>
                                                        <li class="category" id="category-455">
                                                            <a class="dropdown-item" href="#" data-depth="3">Processors</a>
                                                        </li>
                                                        <li class="category" id="category-476">
                                                            <a class="dropdown-item" href="#" data-depth="3">Motherboard</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="category" id="category-371">
                                                <a class="dropdown-item" href="" data-depth="2">Monitors</a>
                                            </li>
                                            <li class="category" id="category-369">
                                                <a class="dropdown-item" href="" data-depth="2">Storage</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="category" id="category-433">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="#" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_4290" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Camping and Outdoor
                                    </a>
                                    <div class="collapse" id="top_sub_menu_4290">
                                        <ul class="top-menu container" data-depth="2">
                                            <li class="category" id="category-434">
                                                <a class="dropdown-item sf-with-ul" href="#" data-depth="2">
                                                    <span class="float-xs-right hidden-md-up">
                                                        <span data-target="#top_sub_menu_96566" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                            <i class="material-icons add">&#xE313;</i>
                                                            <i class="material-icons remove">&#xE316;</i>
                                                        </span>
                                                    </span>
                                                    Water Storage
                                                </a>
                                                <div class="collapse" id="top_sub_menu_96566">
                                                    <ul class="top-menu container" data-depth="3">
                                                        <li class="category" id="category-435">
                                                            <a class="dropdown-item" href="#" data-depth="3">Water Bottles</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="category" id="category-336">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="#" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_24744" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Electronics
                                    </a>
                                    <div class="collapse" id="top_sub_menu_24744">
                                        <ul class="top-menu container" data-depth="2">
                                            <li class="category" id="category-337">
                                                <a class="dropdown-item sf-with-ul" href="#" data-depth="2">
                                                    <span class="float-xs-right hidden-md-up">
                                                        <span data-target="#top_sub_menu_93689" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                            <i class="material-icons add">&#xE313;</i>
                                                            <i class="material-icons remove">&#xE316;</i>
                                                        </span>
                                                    </span>
                                                    Cameras
                                                </a>
                                                <div class="collapse" id="top_sub_menu_93689">
                                                    <ul class="top-menu container" data-depth="3">
                                                        <li class="category" id="category-346">
                                                            <a class="dropdown-item" href="#" data-depth="3">LOGITECH</a>
                                                        </li>
                                                        <li class="category" id="category-347">
                                                            <a class="dropdown-item" href="#" data-depth="3">GOPRO</a>
                                                        </li>
                                                        <li class="category" id="category-348">
                                                            <a class="dropdown-item" href="#" data-depth="3">SONY</a>
                                                        </li>
                                                        <li class="category" id="category-428">
                                                            <a class="dropdown-item sf-with-ul" href="#" data-depth="3">
                                                                <span class="float-xs-right hidden-md-up">
                                                                    <span data-target="#top_sub_menu_24963" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                                        <i class="material-icons add">&#xE313;</i>
                                                                        <i class="material-icons remove">&#xE316;</i>
                                                                    </span>
                                                                </span>
                                                                Binoculars
                                                            </a>
                                                            <div class="collapse" id="top_sub_menu_24963">
                                                                <ul class="top-menu container" data-depth="4">
                                                                    <li class="category" id="category-429">
                                                                        <a class="dropdown-item" href="#" data-depth="4">occer</a>
                                                                    </li>
                                                                    <li class="category" id="category-430">
                                                                        <a class="dropdown-item" href="#" data-depth="4">Nikon</a>
                                                                    </li>
                                                                    <li class="category" id="category-431">
                                                                        <a class="dropdown-item" href="#" data-depth="4">Vortex</a>
                                                                    </li>
                                                                    <li class="category" id="category-432">
                                                                        <a class="dropdown-item" href="#" data-depth="4">SkyGenius</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="category" id="category-436">
                                                            <a class="dropdown-item" href="#" data-depth="3">Camera Accessories</a>
                                                        </li>
                                                        <li class="category" id="category-440">
                                                            <a class="dropdown-item" href="#" data-depth="3">Panasonic</a>
                                                        </li>
                                                        <li class="category" id="category-441">
                                                            <a class="dropdown-item" href="3" data-depth="3">Canon</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="category" id="category-338">
                                                <a class="dropdown-item" href="#" data-depth="2">GPS and Navigation</a>
                                            </li>
                                            <li class="category" id="category-339">
                                                <a class="dropdown-item" href="#" data-depth="2">Car and Vehicle Electronics</a>
                                            </li>
                                            <li class="category" id="category-340">
                                                <a class="dropdown-item sf-with-ul" href="#" data-depth="2">
                                                    <span class="float-xs-right hidden-md-up">
                                                        <span data-target="#top_sub_menu_73195" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                            <i class="material-icons add">&#xE313;</i>
                                                            <i class="material-icons remove">&#xE316;</i>
                                                        </span>
                                                    </span>
                                                    Smartwatch
                                                </a>
                                                <div class="collapse" id="top_sub_menu_73195">
                                                    <ul class="top-menu container" data-depth="3">
                                                        <li class="category" id="category-442">
                                                            <a class="dropdown-item" href="#" data-depth="3">Fossil</a>
                                                        </li>
                                                        <li class="category" id="category-342">
                                                            <a class="dropdown-item" href="#" data-depth="3">Garmin</a>
                                                        </li>
                                                        <li class="category" id="category-345">
                                                            <a class="dropdown-item" href="#" data-depth="3">Huawei</a>
                                                        </li>
                                                        <li class="category" id="category-474">
                                                            <a class="dropdown-item" href="#" data-depth="3">Nokia</a>
                                                        </li>
                                                        <li class="category" id="category-343">
                                                            <a class="dropdown-item" href="#" data-depth="3">Samsung</a>
                                                        </li>
                                                        <li class="category" id="category-453">
                                                            <a class="dropdown-item" href="#" data-depth="3">Accessories</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="category" id="category-341">
                                                <a class="dropdown-item" href="#" data-depth="2">Audio</a>
                                            </li>
                                            <li class="category" id="category-427">
                                                <a class="dropdown-item" href="#" data-depth="2">Fogger machines</a>
                                            </li>
                                            <li class="category" id="category-448">
                                                <a class="dropdown-item" href="#" data-depth="2">Components</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="category" id="category-437">
                                    <a class="dropdown-item dropdown-submenu" href="#" data-depth="1">Engraving Machine</a>
                                </li>
                                <li class="category" id="category-443">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="#" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_30460" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Garden, Pool and Patio
                                    </a>
                                    <div class="collapse" id="top_sub_menu_30460">
                                        <ul class="top-menu container" data-depth="2">
                                            <li class="category" id="category-444">
                                                <a class="dropdown-item" href="#" data-depth="2">Pool Equipment</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="category" id="category-385">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="#" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_92500" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Printers
                                    </a>
                                    <div class="collapse" id="top_sub_menu_92500">
                                        <ul class="top-menu container" data-depth="2">
                                            <li class="category" id="category-386">
                                                <a class="dropdown-item sf-with-ul" href="#" data-depth="2">
                                                    <span class="float-xs-right hidden-md-up">
                                                        <span data-target="#top_sub_menu_52907" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                            <i class="material-icons add">&#xE313;</i>
                                                            <i class="material-icons remove">&#xE316;</i>
                                                        </span>
                                                    </span>
                                                    Printers
                                                </a>
                                                <div class="collapse" id="top_sub_menu_52907">
                                                    <ul class="top-menu container" data-depth="3">
                                                        <li class="category" id="category-395">
                                                            <a class="dropdown-item" href="#" data-depth="3">HP</a>
                                                        </li>
                                                        <li class="category" id="category-396">
                                                            <a class="dropdown-item" href="#" data-depth="3">Lexmark</a>
                                                        </li>
                                                        <li class="category" id="category-397">
                                                            <a class="dropdown-item" href="#" data-depth="3">Canon</a>
                                                        </li>
                                                        <li class="category" id="category-398">
                                                            <a class="dropdown-item" href="#" data-depth="3">Brother</a>
                                                        </li>
                                                        <li class="category" id="category-409">
                                                            <a class="dropdown-item" href="#" data-depth="3">Thermal Printer</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="category" id="category-387">
                                                <a class="dropdown-item sf-with-ul" href="#" data-depth="2">
                                                    <span class="float-xs-right hidden-md-up">
                                                        <span data-target="#top_sub_menu_95042" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                            <i class="material-icons add">&#xE313;</i>
                                                            <i class="material-icons remove">&#xE316;</i>
                                                        </span>
                                                    </span>
                                                    Inks
                                                </a>
                                                <div class="collapse" id="top_sub_menu_95042">
                                                    <ul class="top-menu container" data-depth="3">
                                                        <li class="category" id="category-392">
                                                            <a class="dropdown-item" href="#" data-depth="3">HP</a>
                                                        </li>
                                                        <li class="category" id="category-393">
                                                            <a class="dropdown-item" href="#" data-depth="3">Lexmark</a>
                                                        </li>
                                                        <li class="category" id="category-394">
                                                            <a class="dropdown-item" href="#" data-depth="3">Canon</a>
                                                        </li>
                                                        <li class="category" id="category-399">
                                                            <a class="dropdown-item" href="#" data-depth="3">Brother</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="category" id="category-388">
                                                <a class="dropdown-item sf-with-ul" href="#" data-depth="2">
                                                    <span class="float-xs-right hidden-md-up">
                                                        <span data-target="#top_sub_menu_66407" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                            <i class="material-icons add">&#xE313;</i>
                                                            <i class="material-icons remove">&#xE316;</i>
                                                        </span>
                                                    </span>
                                                    Toner Cartridges
                                                </a>
                                                <div class="collapse" id="top_sub_menu_66407">
                                                    <ul class="top-menu container" data-depth="3">
                                                        <li class="category" id="category-389">
                                                            <a class="dropdown-item" href="#" data-depth="3">HP</a>
                                                        </li>
                                                        <li class="category" id="category-390">
                                                            <a class="dropdown-item" href="#" data-depth="3">Lexmark</a>
                                                        </li>
                                                        <li class="category" id="category-391">
                                                            <a class="dropdown-item" href="#" data-depth="3">Canon</a>
                                                        </li>
                                                        <li class="category" id="category-400">
                                                            <a class="dropdown-item" href="#" data-depth="3">Brother</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="category" id="category-456">
                                                <a class="dropdown-item sf-with-ul" href="#" data-depth="2">
                                                    <span class="float-xs-right hidden-md-up">
                                                        <span data-target="#top_sub_menu_87190" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                            <i class="material-icons add">&#xE313;</i>
                                                            <i class="material-icons remove">&#xE316;</i>
                                                        </span>
                                                    </span>
                                                    Scanner
                                                </a>
                                                <div class="collapse" id="top_sub_menu_87190">
                                                    <ul class="top-menu container" data-depth="3">
                                                        <li class="category" id="category-462">
                                                            <a class="dropdown-item" href="#" data-depth="3">Brother</a>
                                                        </li>
                                                        <li class="category" id="category-463">
                                                            <a class="dropdown-item" href="#" data-depth="3">HP</a>
                                                        </li>
                                                        <li class="category" id="category-464">
                                                            <a class="dropdown-item" href="#" data-depth="3">Epson</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="category" id="category-403">
                                    <a class="dropdown-item dropdown-submenu" href="#" data-depth="1">Daily Deals</a>
                                </li>
                                <li class="category" id="category-349">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="#" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_86067" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Smart Home
                                    </a>
                                    <div class="collapse" id="top_sub_menu_86067">
                                        <ul class="top-menu container" data-depth="2">
                                            <li class="category" id="category-351">
                                                <a class="dropdown-item" href="#" data-depth="2">Kitchen Tools</a>
                                            </li>
                                            <li class="category" id="category-460">
                                                <a class="dropdown-item" href="#" data-depth="2">Solar Panels</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="category" id="category-331">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="#" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_26168" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Smartphones
                                    </a>
                                    <div class="collapse" id="top_sub_menu_26168">
                                        <ul class="top-menu container" data-depth="2">
                                            <li class="category" id="category-332">
                                                <a class="dropdown-item" href="#" data-depth="2">Apple</a>
                                            </li>
                                            <li class="category" id="category-333">
                                                <a class="dropdown-item" href="#" data-depth="2">Samsung</a>
                                            </li>
                                            <li class="category" id="category-334">
                                                <a class="dropdown-item" href="#" data-depth="2">HUAWEI</a>
                                            </li>
                                            <li class="category" id="category-384">
                                                <a class="dropdown-item" href="#" data-depth="2">Smartphone Accessories</a>
                                            </li>
                                            <li class="category" id="category-412">
                                                <a class="dropdown-item" href="#" data-depth="2">Motorola</a>
                                            </li>
                                            <li class="category" id="category-414">
                                                <a class="dropdown-item" href="#" data-depth="2">realme</a>
                                            </li>
                                            <li class="category" id="category-415">
                                                <a class="dropdown-item" href="#" data-depth="2">Blackview</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="category" id="category-352">
                                    <a class="dropdown-item dropdown-submenu" href="#" data-depth="1">Software</a>
                                </li>
                                <li class="category" id="category-445">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="#" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_80988" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Fashion and Luggage
                                    </a>
                                    <div class="collapse" id="top_sub_menu_80988">
                                        <ul class="top-menu container" data-depth="2">
                                            <li class="category" id="category-446">
                                                <a class="dropdown-item" href="3" data-depth="2">Dresses</a>
                                            </li>
                                            <li class="category" id="category-447">
                                                <a class="dropdown-item" href="#" data-depth="2">Fashion Boots</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="category" id="category-467">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="#" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_38312" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Entertainment
                                    </a>
                                    <div class="collapse" id="top_sub_menu_38312">
                                        <ul class="top-menu container" data-depth="2">
                                            <li class="category" id="category-468">
                                                <a class="dropdown-item sf-with-ul" href="#" data-depth="2">
                                                    <span class="float-xs-right hidden-md-up">
                                                        <span data-target="#top_sub_menu_45307" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                            <i class="material-icons add">&#xE313;</i>
                                                            <i class="material-icons remove">&#xE316;</i>
                                                        </span>
                                                    </span>
                                                    Sound
                                                </a>
                                                <div class="collapse" id="top_sub_menu_45307">
                                                    <ul class="top-menu container" data-depth="3">
                                                        <li class="category" id="category-469">
                                                            <a class="dropdown-item" href="#" data-depth="3">SENNHEISER</a>
                                                        </li>
                                                        <li class="category" id="category-470">
                                                            <a class="dropdown-item" href="#" data-depth="3">Bose</a>
                                                        </li>
                                                        <li class="category" id="category-471">
                                                            <a class="dropdown-item" href="#" data-depth="3">Sony</a>
                                                        </li>
                                                        <li class="category" id="category-478">
                                                            <a class="dropdown-item" href="#" data-depth="3">Pioneer</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="category" id="category-128">
                                    <a class="dropdown-item dropdown-submenu" href="#" data-depth="1">On Sale</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="category" id="category-363">
                        <a class="dropdown-item sf-with-ul" href="#" data-depth="0">
                            <span class="float-xs-right hidden-md-up">
                                <span data-target="#top_sub_menu_5086" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                    <i class="material-icons add">&#xE313;</i>
                                    <i class="material-icons remove">&#xE316;</i>
                                </span>
                            </span>
                            Computers
                        </a>
                        <div class="popover sub-menu js-sub-menu collapse" id="top_sub_menu_5086">
                            <ul class="top-menu container" data-depth="1">
                                <li class="category" id="category-365">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="#" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_77930" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Tablets
                                    </a>
                                    <div class="collapse" id="top_sub_menu_77930">
                                        <ul class="top-menu container" data-depth="2">
                                            <li class="category" id="category-373">
                                                <a class="dropdown-item" href="#" data-depth="2">Samsung</a>
                                            </li>
                                            <li class="category" id="category-374">
                                                <a class="dropdown-item" href="#" data-depth="2">Huawei</a>
                                            </li>
                                            <li class="category" id="category-375">
                                                <a class="dropdown-item" href="3" data-depth="2">Lenovo</a>
                                            </li>
                                            <li class="category" id="category-408">
                                                <a class="dropdown-item" href="#" data-depth="2">Tablet Accessories</a>
                                            </li>
                                            <li class="category" id="category-450">
                                                <a class="dropdown-item" href="#" data-depth="2">Kindle</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="category" id="category-367">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="#" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_99527" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Projector
                                    </a>
                                    <div class="collapse" id="top_sub_menu_99527">
                                        <ul class="top-menu container" data-depth="2">
                                            <li class="category" id="category-404">
                                                <a class="dropdown-item" href="#" data-depth="2">BenQ</a>
                                            </li>
                                            <li class="category" id="category-405">
                                                <a class="dropdown-item" href="#" data-depth="2">Epson</a>
                                            </li>
                                            <li class="category" id="category-457">
                                                <a class="dropdown-item" href="#" data-depth="2">ViewSonic</a>
                                            </li>
                                            <li class="category" id="category-458">
                                                <a class="dropdown-item" href="#" data-depth="2">Philips Projector</a>
                                            </li>
                                            <li class="category" id="category-480">
                                                <a class="dropdown-item" href="#" data-depth="2">Acer</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="category" id="category-364">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="#" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_16496" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Laptops
                                    </a>
                                    <div class="collapse" id="top_sub_menu_16496">
                                        <ul class="top-menu container" data-depth="2">
                                            <li class="category" id="category-376">
                                                <a class="dropdown-item" href="#" data-depth="2">Lenovo</a>
                                            </li>
                                            <li class="category" id="category-377">
                                                <a class="dropdown-item sf-with-ul" href="#" data-depth="2">
                                                    <span class="float-xs-right hidden-md-up">
                                                        <span data-target="#top_sub_menu_46233" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                            <i class="material-icons add">&#xE313;</i>
                                                            <i class="material-icons remove">&#xE316;</i>
                                                        </span>
                                                    </span>
                                                    HP
                                                </a>
                                                <div class="collapse" id="top_sub_menu_46233">
                                                    <ul class="top-menu container" data-depth="3">
                                                        <li class="category" id="category-451">
                                                            <a class="dropdown-item" href="#" data-depth="3">Pavillion</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="category" id="category-378">
                                                <a class="dropdown-item" href="#" data-depth="2">Samsung</a>
                                            </li>
                                            <li class="category" id="category-380">
                                                <a class="dropdown-item" href="#" data-depth="2">Jumper</a>
                                            </li>
                                            <li class="category" id="category-381">
                                                <a class="dropdown-item" href="#" data-depth="2">Huawei</a>
                                            </li>
                                            <li class="category" id="category-402">
                                                <a class="dropdown-item" href="#" data-depth="2">ACER</a>
                                            </li>
                                            <li class="category" id="category-417">
                                                <a class="dropdown-item" href="#" data-depth="2">Laptop Bags</a>
                                            </li>
                                            <li class="category" id="category-418">
                                                <a class="dropdown-item" href="#" data-depth="2">Dell</a>
                                            </li>
                                            <li class="category" id="category-419">
                                                <a class="dropdown-item" href="#" data-depth="2">Asus</a>
                                        </ul>
                                    </div>
                                </li>
                                <li class="category" id="category-368">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="#" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_25388" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Networking
                                    </a>
                                    <div class="collapse" id="top_sub_menu_25388">
                                        <ul class="top-menu container" data-depth="2">
                                            <li class="category" id="category-420">
                                                <a class="dropdown-item sf-with-ul" href="#" data-depth="2">
                                                    <span class="float-xs-right hidden-md-up">
                                                        <span data-target="#top_sub_menu_80503" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                            <i class="material-icons add">&#xE313;</i>
                                                            <i class="material-icons remove">&#xE316;</i>
                                                        </span>
                                                    </span>
                                                    Routers
                                                </a>
                                                <div class="collapse" id="top_sub_menu_80503">
                                                    <ul class="top-menu container" data-depth="3">
                                                        <li class="category" id="category-421">
                                                            <a class="dropdown-item" href="#" data-depth="3">Netgear</a>
                                                        </li>
                                                        <li class="category" id="category-422">
                                                            <a class="dropdown-item" href="#" data-depth="3">D-Link</a>
                                                        </li>
                                                        <li class="category" id="category-423">
                                                            <a class="dropdown-item" href="#" data-depth="3">TP-Link</a>
                                                        </li>
                                                        <li class="category" id="category-424">
                                                            <a class="dropdown-item" href="#" data-depth="3">ASUS</a>
                                                        </li>
                                                        <li class="category" id="category-426">
                                                            <a class="dropdown-item" href="#" data-depth="3">GL.iNet</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="category" id="category-370">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="#" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_94926" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Components
                                    </a>
                                    <div class="collapse" id="top_sub_menu_94926">
                                        <ul class="top-menu container" data-depth="2">
                                            <li class="category" id="category-382">
                                                <a class="dropdown-item sf-with-ul" href="#" data-depth="2">
                                                    <span class="float-xs-right hidden-md-up">
                                                        <span data-target="#top_sub_menu_8021" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                            <i class="material-icons add">&#xE313;</i>
                                                            <i class="material-icons remove">&#xE316;</i>
                                                        </span>
                                                    </span>
                                                    Memory Modules
                                                </a>
                                                <div class="collapse" id="top_sub_menu_8021">
                                                    <ul class="top-menu container" data-depth="3">
                                                        <li class="category" id="category-383">
                                                            <a class="dropdown-item" href="#" data-depth="3">PATRIOT</a>
                                                        </li>
                                                        <li class="category" id="category-410">
                                                            <a class="dropdown-item" href="#" data-depth="3">Gigastone</a>
                                                        </li>
                                                        <li class="category" id="category-411">
                                                            <a class="dropdown-item" href="#" data-depth="3">Timetec</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="category" id="category-416">
                                                <a class="dropdown-item" href="#" data-depth="2">
                                                    Hard Drives
                                                </a>
                                            </li>
                                            <li class="category" id="category-454">
                                                <a class="dropdown-item" href="#" data-depth="2">
                                                    Keyboard
                                                </a>
                                            </li>
                                            <li class="category" id="category-455">
                                                <a class="dropdown-item" href="#" data-depth="2">
                                                    Processors
                                                </a>
                                            </li>
                                            <li class="category" id="category-476">
                                                <a class="dropdown-item" href="#" data-depth="2">
                                                    Motherboard
                                                </a>
                                            </li>


                                        </ul>


                                    </div>
                                </li>
                                <li class="category" id="category-371">
                                    <a class="dropdown-item dropdown-submenu" href="#" data-depth="1">
                                        Monitors
                                    </a>
                                </li>
                                <li class="category" id="category-369">
                                    <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/369-storage" data-depth="1">
                                        Storage
                                    </a>
                                </li>


                            </ul>


                            <div class="menu-images-container">
                                <img src="https://connexstore.co.za/img/c/363-0_thumb.jpg">
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </li>
                    <li class="category" id="category-331">
                        <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/331-smartphones" data-depth="0">
                            <span class="float-xs-right hidden-md-up">
                                <span data-target="#top_sub_menu_28388" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                    <i class="material-icons add">&#xE313;</i>
                                    <i class="material-icons remove">&#xE316;</i>
                                </span>
                            </span>
                            Smartphones
                        </a>
                        <div class="popover sub-menu js-sub-menu collapse" id="top_sub_menu_28388">


                            <ul class="top-menu container" data-depth="1">



                                <li class="category" id="category-332">
                                    <a class="dropdown-item dropdown-submenu" href="#" data-depth="1">
                                        Apple
                                    </a>
                                </li>
                                <li class="category" id="category-333">
                                    <a class="dropdown-item dropdown-submenu" href="#" data-depth="1">
                                        Samsung
                                    </a>
                                </li>
                                <li class="category" id="category-334">
                                    <a class="dropdown-item dropdown-submenu" href="#" data-depth="1">
                                        HUAWEI
                                    </a>
                                </li>
                                <li class="category" id="category-384">
                                    <a class="dropdown-item dropdown-submenu" href="#" data-depth="1">
                                        Smartphone Accessories
                                    </a>
                                </li>
                                <li class="category" id="category-412">
                                    <a class="dropdown-item dropdown-submenu" href="#" data-depth="1">
                                        Motorola
                                    </a>
                                </li>
                                <li class="category" id="category-414">
                                    <a class="dropdown-item dropdown-submenu" href="#" data-depth="1">
                                        realme
                                    </a>
                                </li>
                                <li class="category" id="category-415">
                                    <a class="dropdown-item dropdown-submenu" href="#" data-depth="1">
                                        Blackview
                                    </a>
                                </li>


                            </ul>


                            <div class="menu-images-container">
                                <img src="https://connexstore.co.za/img/c/331-0_thumb.jpg">
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </li>
                    <li class="category" id="category-365">
                        <a class="dropdown-item sf-with-ul" href="#" data-depth="0">
                            <span class="float-xs-right hidden-md-up">
                                <span data-target="#top_sub_menu_19784" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                    <i class="material-icons add">&#xE313;</i>
                                    <i class="material-icons remove">&#xE316;</i>
                                </span>
                            </span>
                            Tablets
                        </a>
                        <div class="popover sub-menu js-sub-menu collapse" id="top_sub_menu_19784">


                            <ul class="top-menu container" data-depth="1">



                                <li class="category" id="category-373">
                                    <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/373-samsung" data-depth="1">
                                        Samsung
                                    </a>
                                </li>
                                <li class="category" id="category-374">
                                    <a class="dropdown-item dropdown-submenu" href="#" data-depth="1">
                                        Huawei
                                    </a>
                                </li>
                                <li class="category" id="category-375">
                                    <a class="dropdown-item dropdown-submenu" href="#" data-depth="1">
                                        Lenovo
                                    </a>
                                </li>
                                <li class="category" id="category-408">
                                    <a class="dropdown-item dropdown-submenu" href="#" data-depth="1">
                                        Tablet Accessories
                                    </a>
                                </li>
                                <li class="category" id="category-450">
                                    <a class="dropdown-item dropdown-submenu" href="#" data-depth="1">
                                        Kindle
                                    </a>
                                </li>


                            </ul>


                            <div class="menu-images-container">
                                <img src="https://connexstore.co.za/img/c/365-0_thumb.jpg">
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </li>
                    <li class="category" id="category-327">
                        <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/327-gaming" data-depth="0">
                            <span class="float-xs-right hidden-md-up">
                                <span data-target="#top_sub_menu_68763" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                    <i class="material-icons add">&#xE313;</i>
                                    <i class="material-icons remove">&#xE316;</i>
                                </span>
                            </span>
                            Gaming
                        </a>
                        <div class="popover sub-menu js-sub-menu collapse" id="top_sub_menu_68763">


                            <ul class="top-menu container" data-depth="1">



                                <li class="category" id="category-479">
                                    <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/479-pico" data-depth="1">
                                        Pico
                                    </a>
                                </li>
                                <li class="category" id="category-328">
                                    <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/328-oculus" data-depth="1">
                                        Oculus
                                    </a>
                                </li>
                                <li class="category" id="category-329">
                                    <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/329-gaming-accessories" data-depth="1">
                                        Gaming Accessories
                                    </a>
                                </li>
                                <li class="category" id="category-330">
                                    <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/330-playstation" data-depth="1">
                                        Playstation
                                    </a>
                                </li>


                            </ul>


                            <div class="menu-images-container">
                                <img src="https://connexstore.co.za/img/c/327-0_thumb.jpg">
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </li>
                    <li class="category" id="category-340">
                        <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/340-smartwatch" data-depth="0">
                            <span class="float-xs-right hidden-md-up">
                                <span data-target="#top_sub_menu_56386" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                    <i class="material-icons add">&#xE313;</i>
                                    <i class="material-icons remove">&#xE316;</i>
                                </span>
                            </span>
                            Smartwatch
                        </a>
                        <div class="popover sub-menu js-sub-menu collapse" id="top_sub_menu_56386">


                            <ul class="top-menu container" data-depth="1">



                                <li class="category" id="category-442">
                                    <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/442-fossil" data-depth="1">
                                        Fossil
                                    </a>
                                </li>
                                <li class="category" id="category-342">
                                    <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/342-garmin" data-depth="1">
                                        Garmin
                                    </a>
                                </li>
                                <li class="category" id="category-345">
                                    <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/345-huawei" data-depth="1">
                                        Huawei
                                    </a>
                                </li>
                                <li class="category" id="category-474">
                                    <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/474-nokia" data-depth="1">
                                        Nokia
                                    </a>
                                </li>
                                <li class="category" id="category-343">
                                    <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/343-samsung-" data-depth="1">
                                        Samsung
                                    </a>
                                </li>
                                <li class="category" id="category-453">
                                    <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/453-accessories" data-depth="1">
                                        Accessories
                                    </a>
                                </li>


                            </ul>
							<div class="menu-images-container">
                                <img src="https://connexstore.co.za/img/c/340-0_thumb.jpg">
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </li>
                    <li class="category" id="category-385">
                        <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/385-printers" data-depth="0">
                            <span class="float-xs-right hidden-md-up">
                                <span data-target="#top_sub_menu_35649" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                    <i class="material-icons add">&#xE313;</i>
                                    <i class="material-icons remove">&#xE316;</i>
                                </span>
                            </span>
                            Printers
                        </a>
                        <div class="popover sub-menu js-sub-menu collapse" id="top_sub_menu_35649">


                            <ul class="top-menu container" data-depth="1">



                                <li class="category" id="category-386">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="https://connexstore.co.za/386-printers" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_81219" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Printers
                                    </a>
                                    <div class="collapse" id="top_sub_menu_81219">


                                        <ul class="top-menu container" data-depth="2">



                                            <li class="category" id="category-395">
                                                <a class="dropdown-item" href="https://connexstore.co.za/395-hp" data-depth="2">
                                                    HP
                                                </a>
                                            </li>
                                            <li class="category" id="category-396">
                                                <a class="dropdown-item" href="https://connexstore.co.za/396-lexmark" data-depth="2">
                                                    Lexmark
                                                </a>
                                            </li>
                                            <li class="category" id="category-397">
                                                <a class="dropdown-item" href="https://connexstore.co.za/397-canon" data-depth="2">
                                                    Canon
                                                </a>
                                            </li>
                                            <li class="category" id="category-398">
                                                <a class="dropdown-item" href="https://connexstore.co.za/398-brother" data-depth="2">
                                                    Brother
                                                </a>
                                            </li>
                                            <li class="category" id="category-409">
                                                <a class="dropdown-item" href="https://connexstore.co.za/409-thermal-printer" data-depth="2">
                                                    Thermal Printer
                                                </a>
                                            </li>


                                        </ul>


                                    </div>
                                </li>
                                <li class="category" id="category-387">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="https://connexstore.co.za/387-inks" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_59363" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Inks
                                    </a>
                                    <div class="collapse" id="top_sub_menu_59363">


                                        <ul class="top-menu container" data-depth="2">



                                            <li class="category" id="category-392">
                                                <a class="dropdown-item" href="https://connexstore.co.za/392-hp" data-depth="2">
                                                    HP
                                                </a>
                                            </li>
                                            <li class="category" id="category-393">
                                                <a class="dropdown-item" href="https://connexstore.co.za/393-lexmark" data-depth="2">
                                                    Lexmark
                                                </a>
                                            </li>
                                            <li class="category" id="category-394">
                                                <a class="dropdown-item" href="https://connexstore.co.za/394-canon" data-depth="2">
                                                    Canon
                                                </a>
                                            </li>
                                            <li class="category" id="category-399">
                                                <a class="dropdown-item" href="https://connexstore.co.za/399-brother" data-depth="2">
                                                    Brother
                                                </a>
                                            </li>


                                        </ul>


                                    </div>
                                </li>
                                <li class="category" id="category-388">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="https://connexstore.co.za/388-toner-cartridges" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_76458" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Toner Cartridges
                                    </a>
                                    <div class="collapse" id="top_sub_menu_76458">


                                        <ul class="top-menu container" data-depth="2">



                                            <li class="category" id="category-389">
                                                <a class="dropdown-item" href="https://connexstore.co.za/389-hp" data-depth="2">
                                                    HP
                                                </a>
                                            </li>
                                            <li class="category" id="category-390">
                                                <a class="dropdown-item" href="https://connexstore.co.za/390-lexmark" data-depth="2">
                                                    Lexmark
                                                </a>
                                            </li>
                                            <li class="category" id="category-391">
                                                <a class="dropdown-item" href="https://connexstore.co.za/391-canon" data-depth="2">
                                                    Canon
                                                </a>
                                            </li>
                                            <li class="category" id="category-400">
                                                <a class="dropdown-item" href="https://connexstore.co.za/400-brother" data-depth="2">
                                                    Brother
                                                </a>
                                            </li>


                                        </ul>


                                    </div>
                                </li>
                                <li class="category" id="category-456">
                                    <a class="dropdown-item dropdown-submenu sf-with-ul" href="https://connexstore.co.za/456-scanner" data-depth="1">
                                        <span class="float-xs-right hidden-md-up">
                                            <span data-target="#top_sub_menu_4786" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                                <i class="material-icons add">&#xE313;</i>
                                                <i class="material-icons remove">&#xE316;</i>
                                            </span>
                                        </span>
                                        Scanner
                                    </a>
                                    <div class="collapse" id="top_sub_menu_4786">


                                        <ul class="top-menu container" data-depth="2">



                                            <li class="category" id="category-462">
                                                <a class="dropdown-item" href="https://connexstore.co.za/462-brother" data-depth="2">
                                                    Brother
                                                </a>
                                            </li>
                                            <li class="category" id="category-463">
                                                <a class="dropdown-item" href="https://connexstore.co.za/463-hp" data-depth="2">
                                                    HP
                                                </a>
                                            </li>
                                            <li class="category" id="category-464">
                                                <a class="dropdown-item" href="https://connexstore.co.za/464-epson" data-depth="2">
                                                    Epson
                                                </a>
                                            </li>


                                        </ul>


                                    </div>
                                </li>


                            </ul>


                            <div class="menu-images-container">
                                <img src="https://connexstore.co.za/img/c/385-0_thumb.jpg">
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </li>
                    <li class="category" id="category-371">
                        <a class="dropdown-item" href="https://connexstore.co.za/371-monitors" data-depth="0">
                            Monitors
                        </a>
                    </li>
                    <li class="category" id="category-367">
                        <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/367-projector" data-depth="0">
                            <span class="float-xs-right hidden-md-up">
                                <span data-target="#top_sub_menu_11926" data-toggle="collapse" class="navbar-toggler collapse-icons">
                                    <i class="material-icons add">&#xE313;</i>
                                    <i class="material-icons remove">&#xE316;</i>
                                </span>
                            </span>
                            Projector
                        </a>
                        <div class="popover sub-menu js-sub-menu collapse" id="top_sub_menu_11926">


                            <ul class="top-menu container" data-depth="1">



                                <li class="category" id="category-404">
                                    <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/404-benq" data-depth="1">
                                        BenQ
                                    </a>
                                </li>
                                <li class="category" id="category-405">
                                    <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/405-epson" data-depth="1">
                                        Epson
                                    </a>
                                </li>
                                <li class="category" id="category-457">
                                    <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/457-viewsonic" data-depth="1">
                                        ViewSonic
                                    </a>
                                </li>
                                <li class="category" id="category-458">
                                    <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/458-philips-projector" data-depth="1">
                                        Philips Projector
                                    </a>
                                </li>
                                <li class="category" id="category-480">
                                    <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/480-acer" data-depth="1">
                                        Acer
                                    </a>
                                </li>


                            </ul>


                            <div class="menu-images-container">
                                <img src="https://connexstore.co.za/img/c/367-0_thumb.jpg">
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </li>
                    <li class="category" id="category-403">
                        <a class="dropdown-item" href="https://connexstore.co.za/403-daily-deals" data-depth="0">
                            Daily Deals
                        </a>
                    </li>


                </ul>

	<div id="rwd_menu" class="hidden-md-up">
		<div class="container">
			<div id="menu-icon2" class="rwd_menu_item"><i class="material-icons d-inline"></i></div>
			<div id="search-icon" class="rwd_menu_item"><i class="material-icons search"></i></div>
			<div id="user-icon" class="rwd_menu_item"><i class="material-icons logged"></i></div>
			<div id="_mobile_cart" class="rwd_menu_item"><div class="cart_top">

		<div class="blockcart cart-preview active" data-refresh-url="//connexstore.co.za/module/ps_shoppingcart/ajax">
			<div class="header">
			
				<div class="cart_index_title">
					<a class="cart_link" rel="nofollow" href="//connexstore.co.za/cart?action=show">
						<i class="material-icons shopping-cart">shopping_cart</i>
						<span class="hidden-sm-down cart_title">Cart:</span>
						<span class="cart-products-count">
							1<span> Product - R&nbsp;44,000.00</span>
						</span>
					</a>
				</div>


				<div id="subcart">

					<ul class="cart_products">

					
											<li>
							
<div class="cart_left">
<a href="https://connexstore.co.za/home/5028-dell-latitude-7430-14-fhd-ag-300-nits-intel-core-i7-1270p-12-core-32gb-ram-512gb-ssd-4-years-prosupport-win11-pro.html" data-id_customization="0">
	<img src="https://connexstore.co.za/13125-small_default/dell-latitude-7430-14-fhd-ag-300-nits-intel-core-i7-1270p-12-core-32gb-ram-512gb-ssd-4-years-prosupport-win11-pro.jpg" title="Dell Latitude 7430 14&quot; FHD AG 300-nits Intel Core i7-1270P 12-Core 32GB RAM - 512GB SSD 4 Years ProSupport Win11 pro">
</a>
</div>

<div class="cart_right">
	<a class="remove-from-cart" rel="nofollow" href="https://connexstore.co.za/cart?delete=1&amp;id_product=5028&amp;id_product_attribute=0&amp;token=fff5ab8d6eda7d36378b534fd6386aa7" data-link-action="delete-from-cart" data-id-product="5028" data-id-product-attribute="0" data-id-customization="">
		<i class="material-icons"></i>
	</a>
	<span class="product-quantity">1x</span>
	<span class="product-name"><a href="https://connexstore.co.za/home/5028-dell-latitude-7430-14-fhd-ag-300-nits-intel-core-i7-1270p-12-core-32gb-ram-512gb-ssd-4-years-prosupport-win11-pro.html" data-id_customization="0">Dell Latitude 7430 14" FHD AG 300-nits Intel Core i7-1270P 12-Core 32GB RAM - 512GB SSD 4 Years ProSupport Win11 pro</a></span>
	<span class="product-price">R&nbsp;44,000.00</span>
</div>


<div class="clearfix"></div>

						</li>
										</ul>

					<ul class="cart-subtotals">

				
						<li>
							<span class="text">Shipping</span>
							<span class="value">Free</span>
							<span class="clearfix"></span>
						</li>

						<li>
							<span class="text">Total</span>
							<span class="value">R&nbsp;44,000.00</span>
							<span class="clearfix"></span>
						</li>

					</ul>

					<div class="cart-buttons">
						<a class="btn btn-primary viewcart" href="//connexstore.co.za/cart?action=show">Check Out <i class="material-icons"></i></a>
											</div>

				</div>

			</div>
		</div>

	</div></div><div class="float-xs-right" id="_mobile_quotecart"></div>
		</div>
		<div class="clearfix"></div>
	</div>

	<div class="container">
		<div id="mobile_top_menu_wrapper2" class="rwd_menu_open hidden-md-up" style="display:none;">
			<div class="js-top-menu mobile" id="_mobile_top_menu"><ul class="top-menu container" id="top-menu" data-depth="0">

					<li class="home_icon"><a href="../index.php"><i class="icon-home"></i><span>Home</span></a></li>
		
	    
							<li class="category" id="category-2">
								  <a class="dropdown-item sf-with-ul" href="../index.php" data-depth="0">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_66288" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Home
				  </a>
				  				  <div class="popover sub-menu js-sub-menu collapse" id="top_sub_menu_66288">
					

      <ul class="top-menu container" data-depth="1">

		
	    
							<li class="category" id="category-327">
								  <a class="dropdown-item dropdown-submenu sf-with-ul" href="https://connexstore.co.za/327-gaming" data-depth="1">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_59372" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Gaming
				  </a>
				  				  <div class="collapse" id="top_sub_menu_59372">
					

      <ul class="top-menu container" data-depth="2">

		
	    
							<li class="category" id="category-479">
								  <a class="dropdown-item" href="https://connexstore.co.za/479-pico" data-depth="2">
										Pico
				  </a>
				  				</li>
							<li class="category" id="category-328">
								  <a class="dropdown-item" href="https://connexstore.co.za/328-oculus" data-depth="2">
										Oculus
				  </a>
				  				</li>
							<li class="category" id="category-330">
								  <a class="dropdown-item" href="https://connexstore.co.za/330-playstation" data-depth="2">
										Playstation
				  </a>
				  				</li>
							<li class="category" id="category-484">
								  <a class="dropdown-item" href="https://connexstore.co.za/484-nintendo" data-depth="2">
										Nintendo
				  </a>
				  				</li>
							<li class="category" id="category-329">
								  <a class="dropdown-item" href="https://connexstore.co.za/329-gaming-accessories" data-depth="2">
										Gaming Accessories
				  </a>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
							<li class="category" id="category-252">
								  <a class="dropdown-item dropdown-submenu sf-with-ul" href="https://connexstore.co.za/252-automation" data-depth="1">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_52996" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Automation
				  </a>
				  				  <div class="collapse" id="top_sub_menu_52996">
					

      <ul class="top-menu container" data-depth="2">

		
	    
							<li class="category" id="category-255">
								  <a class="dropdown-item" href="https://connexstore.co.za/255-bmw" data-depth="2">
										bmw
				  </a>
				  				</li>
							<li class="category" id="category-413">
								  <a class="dropdown-item" href="https://connexstore.co.za/413-car-accessories" data-depth="2">
										Car Accessories
				  </a>
				  				</li>
							<li class="category" id="category-425">
								  <a class="dropdown-item" href="https://connexstore.co.za/425-diy" data-depth="2">
										DIY
				  </a>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
							<li class="category" id="category-323">
								  <a class="dropdown-item dropdown-submenu sf-with-ul" href="https://connexstore.co.za/323-beauty-and-personal-care" data-depth="1">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_61766" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Beauty And Personal Care
				  </a>
				  				  <div class="collapse" id="top_sub_menu_61766">
					

      <ul class="top-menu container" data-depth="2">

		
	    
							<li class="category" id="category-324">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/324-hair-shaver" data-depth="2">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_99747" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Hair Shaver
				  </a>
				  				  <div class="collapse" id="top_sub_menu_99747">
					

      <ul class="top-menu container" data-depth="3">

		
	    
							<li class="category" id="category-325">
								  <a class="dropdown-item" href="https://connexstore.co.za/325-philips" data-depth="3">
										Philips
				  </a>
				  				</li>
							<li class="category" id="category-326">
								  <a class="dropdown-item" href="https://connexstore.co.za/326-hatteker" data-depth="3">
										Hatteker
				  </a>
				  				</li>
							<li class="category" id="category-401">
								  <a class="dropdown-item" href="https://connexstore.co.za/401-tru-barber" data-depth="3">
										TRU BARBER
				  </a>
				  				</li>
							<li class="category" id="category-459">
								  <a class="dropdown-item" href="https://connexstore.co.za/459-braun" data-depth="3">
										Braun
				  </a>
				  				</li>
							<li class="category" id="category-472">
								  <a class="dropdown-item" href="https://connexstore.co.za/472-gillette" data-depth="3">
										Gillette
				  </a>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
							<li class="category" id="category-438">
								  <a class="dropdown-item" href="https://connexstore.co.za/438-nail-care" data-depth="2">
										Nail Care
				  </a>
				  				</li>
							<li class="category" id="category-461">
								  <a class="dropdown-item" href="https://connexstore.co.za/461-hair-care" data-depth="2">
										Hair Care
				  </a>
				  				</li>
							<li class="category" id="category-481">
								  <a class="dropdown-item" href="https://connexstore.co.za/481-oral-care" data-depth="2">
										Oral Care
				  </a>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
							<li class="category" id="category-363">
								  <a class="dropdown-item dropdown-submenu sf-with-ul" href="https://connexstore.co.za/363-computers" data-depth="1">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_75485" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Computers
				  </a>
				  				  <div class="collapse" id="top_sub_menu_75485">
					

      <ul class="top-menu container" data-depth="2">

		
	    
							<li class="category" id="category-365">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/365-tablets" data-depth="2">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_97020" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Tablets
				  </a>
				  				  <div class="collapse" id="top_sub_menu_97020">
					

      <ul class="top-menu container" data-depth="3">

		
	    
							<li class="category" id="category-373">
								  <a class="dropdown-item" href="https://connexstore.co.za/373-samsung" data-depth="3">
										Samsung
				  </a>
				  				</li>
							<li class="category" id="category-374">
								  <a class="dropdown-item" href="https://connexstore.co.za/374-huawei" data-depth="3">
										Huawei
				  </a>
				  				</li>
							<li class="category" id="category-375">
								  <a class="dropdown-item" href="https://connexstore.co.za/375-lenovo" data-depth="3">
										Lenovo
				  </a>
				  				</li>
							<li class="category" id="category-408">
								  <a class="dropdown-item" href="https://connexstore.co.za/408-tablet-accessories" data-depth="3">
										Tablet Accessories
				  </a>
				  				</li>
							<li class="category" id="category-450">
								  <a class="dropdown-item" href="https://connexstore.co.za/450-kindle" data-depth="3">
										Kindle
				  </a>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
							<li class="category" id="category-367">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/367-projector" data-depth="2">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_40535" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Projector
				  </a>
				  				  <div class="collapse" id="top_sub_menu_40535">
					

      <ul class="top-menu container" data-depth="3">

		
	    
							<li class="category" id="category-404">
								  <a class="dropdown-item" href="https://connexstore.co.za/404-benq" data-depth="3">
										BenQ
				  </a>
				  				</li>
							<li class="category" id="category-405">
								  <a class="dropdown-item" href="https://connexstore.co.za/405-epson" data-depth="3">
										Epson
				  </a>
				  				</li>
							<li class="category" id="category-457">
								  <a class="dropdown-item" href="https://connexstore.co.za/457-viewsonic" data-depth="3">
										ViewSonic
				  </a>
				  				</li>
							<li class="category" id="category-458">
								  <a class="dropdown-item" href="https://connexstore.co.za/458-philips-projector" data-depth="3">
										Philips Projector
				  </a>
				  				</li>
							<li class="category" id="category-480">
								  <a class="dropdown-item" href="https://connexstore.co.za/480-acer" data-depth="3">
										Acer
				  </a>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
							<li class="category" id="category-364">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/364-laptops" data-depth="2">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_13027" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Laptops
				  </a>
				  				  <div class="collapse" id="top_sub_menu_13027">
					

      <ul class="top-menu container" data-depth="3">

		
	    
							<li class="category" id="category-376">
								  <a class="dropdown-item" href="https://connexstore.co.za/376-lenovo" data-depth="3">
										Lenovo
				  </a>
				  				</li>
							<li class="category" id="category-377">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/377-hp" data-depth="3">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_81414" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										HP
				  </a>
				  				  <div class="collapse" id="top_sub_menu_81414">
					

      <ul class="top-menu container" data-depth="4">

		
	    
							<li class="category" id="category-451">
								  <a class="dropdown-item" href="https://connexstore.co.za/451-pavillion" data-depth="4">
										Pavillion
				  </a>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
							<li class="category" id="category-378">
								  <a class="dropdown-item" href="https://connexstore.co.za/378-samsung" data-depth="3">
										Samsung
				  </a>
				  				</li>
							<li class="category" id="category-380">
								  <a class="dropdown-item" href="https://connexstore.co.za/380-jumper" data-depth="3">
										Jumper
				  </a>
				  				</li>
							<li class="category" id="category-381">
								  <a class="dropdown-item" href="https://connexstore.co.za/381-huawei" data-depth="3">
										Huawei
				  </a>
				  				</li>
							<li class="category" id="category-402">
								  <a class="dropdown-item" href="https://connexstore.co.za/402-acer" data-depth="3">
										ACER
				  </a>
				  				</li>
							<li class="category" id="category-417">
								  <a class="dropdown-item" href="https://connexstore.co.za/417-laptop-bags" data-depth="3">
										Laptop Bags
				  </a>
				  				</li>
							<li class="category" id="category-418">
								  <a class="dropdown-item" href="https://connexstore.co.za/418-dell" data-depth="3">
										Dell
				  </a>
				  				</li>
							<li class="category" id="category-419">
								  <a class="dropdown-item" href="https://connexstore.co.za/419-asus" data-depth="3">
										Asus
				  </a>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
							<li class="category" id="category-368">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/368-networking" data-depth="2">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_31589" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Networking
				  </a>
				  				  <div class="collapse" id="top_sub_menu_31589">
					

      <ul class="top-menu container" data-depth="3">

		
	    
							<li class="category" id="category-420">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/420-routers" data-depth="3">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_90096" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Routers
				  </a>
				  				  <div class="collapse" id="top_sub_menu_90096">
					

      <ul class="top-menu container" data-depth="4">

		
	    
							<li class="category" id="category-421">
								  <a class="dropdown-item" href="https://connexstore.co.za/421-netgear" data-depth="4">
										Netgear
				  </a>
				  				</li>
							<li class="category" id="category-422">
								  <a class="dropdown-item" href="https://connexstore.co.za/422-d-link-" data-depth="4">
										D-Link
				  </a>
				  				</li>
							<li class="category" id="category-423">
								  <a class="dropdown-item" href="https://connexstore.co.za/423-tp-link" data-depth="4">
										TP-Link
				  </a>
				  				</li>
							<li class="category" id="category-424">
								  <a class="dropdown-item" href="https://connexstore.co.za/424-ASUS" data-depth="4">
										ASUS
				  </a>
				  				</li>
							<li class="category" id="category-426">
								  <a class="dropdown-item" href="https://connexstore.co.za/426-glinet" data-depth="4">
										GL.iNet
				  </a>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
							<li class="category" id="category-370">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/370-components" data-depth="2">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_84539" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Components
				  </a>
				  				  <div class="collapse" id="top_sub_menu_84539">
					

      <ul class="top-menu container" data-depth="3">

		
	    
							<li class="category" id="category-382">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/382-memory-modules" data-depth="3">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_22939" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Memory Modules
				  </a>
				  				  <div class="collapse" id="top_sub_menu_22939">
					

      <ul class="top-menu container" data-depth="4">

		
	    
							<li class="category" id="category-383">
								  <a class="dropdown-item" href="https://connexstore.co.za/383-patriot" data-depth="4">
										PATRIOT
				  </a>
				  				</li>
							<li class="category" id="category-410">
								  <a class="dropdown-item" href="https://connexstore.co.za/410-gigastone" data-depth="4">
										Gigastone
				  </a>
				  				</li>
							<li class="category" id="category-411">
								  <a class="dropdown-item" href="https://connexstore.co.za/411-timetec" data-depth="4">
										Timetec
				  </a>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
							<li class="category" id="category-416">
								  <a class="dropdown-item" href="https://connexstore.co.za/416-hard-drives" data-depth="3">
										Hard Drives
				  </a>
				  				</li>
							<li class="category" id="category-454">
								  <a class="dropdown-item" href="https://connexstore.co.za/454-keyboard" data-depth="3">
										Keyboard
				  </a>
				  				</li>
							<li class="category" id="category-455">
								  <a class="dropdown-item" href="https://connexstore.co.za/455-processors" data-depth="3">
										Processors
				  </a>
				  				</li>
							<li class="category" id="category-476">
								  <a class="dropdown-item" href="https://connexstore.co.za/476-motherboard" data-depth="3">
										Motherboard
				  </a>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
							<li class="category" id="category-371">
								  <a class="dropdown-item" href="https://connexstore.co.za/371-monitors" data-depth="2">
										Monitors
				  </a>
				  				</li>
							<li class="category" id="category-369">
								  <a class="dropdown-item" href="https://connexstore.co.za/369-storage" data-depth="2">
										Storage
				  </a>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
							<li class="category" id="category-433">
								  <a class="dropdown-item dropdown-submenu sf-with-ul" href="https://connexstore.co.za/433-camping-and-outdoor" data-depth="1">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_58803" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Camping and Outdoor
				  </a>
				  				  <div class="collapse" id="top_sub_menu_58803">
					

      <ul class="top-menu container" data-depth="2">

		
	    
							<li class="category" id="category-434">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/434-water-storage" data-depth="2">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_99952" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Water Storage
				  </a>
				  				  <div class="collapse" id="top_sub_menu_99952">
					

      <ul class="top-menu container" data-depth="3">

		
	    
							<li class="category" id="category-435">
								  <a class="dropdown-item" href="https://connexstore.co.za/435-water-bottles" data-depth="3">
										Water Bottles
				  </a>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
							<li class="category" id="category-336">
								  <a class="dropdown-item dropdown-submenu sf-with-ul" href="https://connexstore.co.za/336-electronics" data-depth="1">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_65556" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Electronics
				  </a>
				  				  <div class="collapse" id="top_sub_menu_65556">
					

      <ul class="top-menu container" data-depth="2">

		
	    
							<li class="category" id="category-337">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/337-cameras" data-depth="2">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_78909" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Cameras
				  </a>
				  				  <div class="collapse" id="top_sub_menu_78909">
					

      <ul class="top-menu container" data-depth="3">

		
	    
							<li class="category" id="category-346">
								  <a class="dropdown-item" href="https://connexstore.co.za/346-logitech" data-depth="3">
										LOGITECH
				  </a>
				  				</li>
							<li class="category" id="category-347">
								  <a class="dropdown-item" href="https://connexstore.co.za/347-gopro" data-depth="3">
										GOPRO
				  </a>
				  				</li>
							<li class="category" id="category-348">
								  <a class="dropdown-item" href="https://connexstore.co.za/348-sony" data-depth="3">
										SONY
				  </a>
				  				</li>
							<li class="category" id="category-428">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/428-binoculars" data-depth="3">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_26087" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Binoculars
				  </a>
				  				  <div class="collapse" id="top_sub_menu_26087">
					

      <ul class="top-menu container" data-depth="4">

		
	    
							<li class="category" id="category-429">
								  <a class="dropdown-item" href="https://connexstore.co.za/429-occer-" data-depth="4">
										occer
				  </a>
				  				</li>
							<li class="category" id="category-430">
								  <a class="dropdown-item" href="https://connexstore.co.za/430-nikon" data-depth="4">
										Nikon
				  </a>
				  				</li>
							<li class="category" id="category-431">
								  <a class="dropdown-item" href="https://connexstore.co.za/431-vortex" data-depth="4">
										Vortex
				  </a>
				  				</li>
							<li class="category" id="category-432">
								  <a class="dropdown-item" href="https://connexstore.co.za/432-skygenius" data-depth="4">
										SkyGenius
				  </a>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
							<li class="category" id="category-436">
								  <a class="dropdown-item" href="https://connexstore.co.za/436-camera-accessories" data-depth="3">
										Camera Accessories
				  </a>
				  				</li>
							<li class="category" id="category-440">
								  <a class="dropdown-item" href="https://connexstore.co.za/440-panasonic" data-depth="3">
										Panasonic
				  </a>
				  				</li>
							<li class="category" id="category-441">
								  <a class="dropdown-item" href="https://connexstore.co.za/441-canon" data-depth="3">
										Canon
				  </a>
				  				</li>
							<li class="category" id="category-486">
								  <a class="dropdown-item" href="https://connexstore.co.za/486-bosch" data-depth="3">
										Bosch
				  </a>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
							<li class="category" id="category-338">
								  <a class="dropdown-item" href="https://connexstore.co.za/338-gps-and-navigation" data-depth="2">
										GPS and Navigation
				  </a>
				  				</li>
							<li class="category" id="category-339">
								  <a class="dropdown-item" href="https://connexstore.co.za/339-car-and-vehicle-electronics" data-depth="2">
										Car and Vehicle Electronics
				  </a>
				  				</li>
							<li class="category" id="category-340">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/340-smartwatch" data-depth="2">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_6567" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Smartwatch
				  </a>
				  				  <div class="collapse" id="top_sub_menu_6567">
					

      <ul class="top-menu container" data-depth="3">

		
	    
							<li class="category" id="category-442">
								  <a class="dropdown-item" href="https://connexstore.co.za/442-fossil" data-depth="3">
										Fossil
				  </a>
				  				</li>
							<li class="category" id="category-342">
								  <a class="dropdown-item" href="https://connexstore.co.za/342-garmin" data-depth="3">
										Garmin
				  </a>
				  				</li>
							<li class="category" id="category-345">
								  <a class="dropdown-item" href="https://connexstore.co.za/345-huawei" data-depth="3">
										Huawei
				  </a>
				  				</li>
							<li class="category" id="category-474">
								  <a class="dropdown-item" href="https://connexstore.co.za/474-nokia" data-depth="3">
										Nokia
				  </a>
				  				</li>
							<li class="category" id="category-343">
								  <a class="dropdown-item" href="https://connexstore.co.za/343-samsung-" data-depth="3">
										Samsung
				  </a>
				  				</li>
							<li class="category" id="category-453">
								  <a class="dropdown-item" href="https://connexstore.co.za/453-accessories" data-depth="3">
										Accessories
				  </a>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
							<li class="category" id="category-341">
								  <a class="dropdown-item" href="https://connexstore.co.za/341-audio" data-depth="2">
										Audio
				  </a>
				  				</li>
							<li class="category" id="category-427">
								  <a class="dropdown-item" href="https://connexstore.co.za/427-fogger-machines" data-depth="2">
										Fogger machines
				  </a>
				  				</li>
							<li class="category" id="category-448">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/448-components" data-depth="2">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_14054" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Components
				  </a>
				  				  <div class="collapse" id="top_sub_menu_14054">
					

      <ul class="top-menu container" data-depth="3">

		
	    
							<li class="category" id="category-482">
								  <a class="dropdown-item" href="https://connexstore.co.za/482-mouse-and-keyboards" data-depth="3">
										Mouse and Keyboards
				  </a>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
							<li class="category" id="category-437">
								  <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/437-engraving-machine" data-depth="1">
										Engraving Machine
				  </a>
				  				</li>
							<li class="category" id="category-443">
								  <a class="dropdown-item dropdown-submenu sf-with-ul" href="https://connexstore.co.za/443-garden-pool-and-patio" data-depth="1">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_96147" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Garden, Pool and Patio
				  </a>
				  				  <div class="collapse" id="top_sub_menu_96147">
					

      <ul class="top-menu container" data-depth="2">

		
	    
							<li class="category" id="category-444">
								  <a class="dropdown-item" href="https://connexstore.co.za/444-pool-equipment" data-depth="2">
										Pool Equipment
				  </a>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
							<li class="category" id="category-385">
								  <a class="dropdown-item dropdown-submenu sf-with-ul" href="https://connexstore.co.za/385-printers" data-depth="1">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_40604" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Printers
				  </a>
				  				  <div class="collapse" id="top_sub_menu_40604">
					

      <ul class="top-menu container" data-depth="2">

		
	    
							<li class="category" id="category-386">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/386-printers" data-depth="2">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_45231" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Printers
				  </a>
				  				  <div class="collapse" id="top_sub_menu_45231">
					

      <ul class="top-menu container" data-depth="3">

		
	    
							<li class="category" id="category-395">
								  <a class="dropdown-item" href="https://connexstore.co.za/395-hp" data-depth="3">
										HP
				  </a>
				  				</li>
							<li class="category" id="category-396">
								  <a class="dropdown-item" href="https://connexstore.co.za/396-lexmark" data-depth="3">
										Lexmark
				  </a>
				  				</li>
							<li class="category" id="category-397">
								  <a class="dropdown-item" href="https://connexstore.co.za/397-canon" data-depth="3">
										Canon
				  </a>
				  				</li>
							<li class="category" id="category-398">
								  <a class="dropdown-item" href="https://connexstore.co.za/398-brother" data-depth="3">
										Brother
				  </a>
				  				</li>
							<li class="category" id="category-409">
								  <a class="dropdown-item" href="https://connexstore.co.za/409-thermal-printer" data-depth="3">
										Thermal Printer
				  </a>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
							<li class="category" id="category-387">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/387-inks" data-depth="2">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_45016" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Inks
				  </a>
				  				  <div class="collapse" id="top_sub_menu_45016">
					

      <ul class="top-menu container" data-depth="3">

		
	    
							<li class="category" id="category-392">
								  <a class="dropdown-item" href="https://connexstore.co.za/392-hp" data-depth="3">
										HP
				  </a>
				  				</li>
							<li class="category" id="category-393">
								  <a class="dropdown-item" href="https://connexstore.co.za/393-lexmark" data-depth="3">
										Lexmark
				  </a>
				  				</li>
							<li class="category" id="category-394">
								  <a class="dropdown-item" href="https://connexstore.co.za/394-canon" data-depth="3">
										Canon
				  </a>
				  				</li>
							<li class="category" id="category-399">
								  <a class="dropdown-item" href="https://connexstore.co.za/399-brother" data-depth="3">
										Brother
				  </a>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
							<li class="category" id="category-388">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/388-toner-cartridges" data-depth="2">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_5271" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Toner Cartridges
				  </a>
				  				  <div class="collapse" id="top_sub_menu_5271">
					

      <ul class="top-menu container" data-depth="3">

		
	    
							<li class="category" id="category-389">
								  <a class="dropdown-item" href="https://connexstore.co.za/389-hp" data-depth="3">
										HP
				  </a>
				  				</li>
							<li class="category" id="category-390">
								  <a class="dropdown-item" href="https://connexstore.co.za/390-lexmark" data-depth="3">
										Lexmark
				  </a>
				  				</li>
							<li class="category" id="category-391">
								  <a class="dropdown-item" href="https://connexstore.co.za/391-canon" data-depth="3">
										Canon
				  </a>
				  				</li>
							<li class="category" id="category-400">
								  <a class="dropdown-item" href="https://connexstore.co.za/400-brother" data-depth="3">
										Brother
				  </a>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
							<li class="category" id="category-456">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/456-scanner" data-depth="2">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_2810" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Scanner
				  </a>
				  				  <div class="collapse" id="top_sub_menu_2810">
					

      <ul class="top-menu container" data-depth="3">

		
	    
							<li class="category" id="category-462">
								  <a class="dropdown-item" href="https://connexstore.co.za/462-brother" data-depth="3">
										Brother
				  </a>
				  				</li>
							<li class="category" id="category-463">
								  <a class="dropdown-item" href="https://connexstore.co.za/463-hp" data-depth="3">
										HP
				  </a>
				  				</li>
							<li class="category" id="category-464">
								  <a class="dropdown-item" href="https://connexstore.co.za/464-epson" data-depth="3">
										Epson
				  </a>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
							<li class="category" id="category-349">
								  <a class="dropdown-item dropdown-submenu sf-with-ul" href="https://connexstore.co.za/349-smart-home" data-depth="1">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_90178" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Smart Home
				  </a>
				  				  <div class="collapse" id="top_sub_menu_90178">
					

      <ul class="top-menu container" data-depth="2">

		
	    
							<li class="category" id="category-351">
								  <a class="dropdown-item" href="https://connexstore.co.za/351-kitchen-tools" data-depth="2">
										Kitchen Tools
				  </a>
				  				</li>
							<li class="category" id="category-460">
								  <a class="dropdown-item" href="https://connexstore.co.za/460-solar-panels" data-depth="2">
										Solar Panels
				  </a>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
							<li class="category" id="category-331">
								  <a class="dropdown-item dropdown-submenu sf-with-ul" href="https://connexstore.co.za/331-smartphones" data-depth="1">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_53444" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Smartphones
				  </a>
				  				  <div class="collapse" id="top_sub_menu_53444">
					

      <ul class="top-menu container" data-depth="2">

		
	    
							<li class="category" id="category-332">
								  <a class="dropdown-item" href="https://connexstore.co.za/332-apple" data-depth="2">
										Apple
				  </a>
				  				</li>
							<li class="category" id="category-333">
								  <a class="dropdown-item" href="https://connexstore.co.za/333-samsung" data-depth="2">
										Samsung
				  </a>
				  				</li>
							<li class="category" id="category-334">
								  <a class="dropdown-item" href="https://connexstore.co.za/334-huawei" data-depth="2">
										HUAWEI
				  </a>
				  				</li>
							<li class="category" id="category-384">
								  <a class="dropdown-item" href="https://connexstore.co.za/384-smartphone-accessories" data-depth="2">
										Smartphone Accessories
				  </a>
				  				</li>
							<li class="category" id="category-412">
								  <a class="dropdown-item" href="https://connexstore.co.za/412-motorola" data-depth="2">
										Motorola
				  </a>
				  				</li>
							<li class="category" id="category-414">
								  <a class="dropdown-item" href="https://connexstore.co.za/414-realme" data-depth="2">
										realme
				  </a>
				  				</li>
							<li class="category" id="category-415">
								  <a class="dropdown-item" href="https://connexstore.co.za/415-blackview" data-depth="2">
										Blackview
				  </a>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
							<li class="category" id="category-352">
								  <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/352-software" data-depth="1">
										Software
				  </a>
				  				</li>
							<li class="category" id="category-445">
								  <a class="dropdown-item dropdown-submenu sf-with-ul" href="https://connexstore.co.za/445-fashion-and-luggage" data-depth="1">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_529" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Fashion and Luggage
				  </a>
				  				  <div class="collapse" id="top_sub_menu_529">
					

      <ul class="top-menu container" data-depth="2">

		
	    
							<li class="category" id="category-446">
								  <a class="dropdown-item" href="https://connexstore.co.za/446-dresses" data-depth="2">
										Dresses
				  </a>
				  				</li>
							<li class="category" id="category-447">
								  <a class="dropdown-item" href="https://connexstore.co.za/447-fashion-boots" data-depth="2">
										Fashion Boots
				  </a>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
							<li class="category" id="category-467">
								  <a class="dropdown-item dropdown-submenu sf-with-ul" href="https://connexstore.co.za/467-entertainment" data-depth="1">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_20499" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Entertainment
				  </a>
				  				  <div class="collapse" id="top_sub_menu_20499">
					

      <ul class="top-menu container" data-depth="2">

		
	    
							<li class="category" id="category-468">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/468-sound" data-depth="2">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_99132" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Sound
				  </a>
				  				  <div class="collapse" id="top_sub_menu_99132">
					

      <ul class="top-menu container" data-depth="3">

		
	    
							<li class="category" id="category-469">
								  <a class="dropdown-item" href="https://connexstore.co.za/469-sennheiser" data-depth="3">
										SENNHEISER
				  </a>
				  				</li>
							<li class="category" id="category-470">
								  <a class="dropdown-item" href="https://connexstore.co.za/470-bose" data-depth="3">
										Bose
				  </a>
				  				</li>
							<li class="category" id="category-471">
								  <a class="dropdown-item" href="https://connexstore.co.za/471-sony" data-depth="3">
										Sony
				  </a>
				  				</li>
							<li class="category" id="category-478">
								  <a class="dropdown-item" href="https://connexstore.co.za/478-pioneer" data-depth="3">
										Pioneer
				  </a>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
							<li class="category" id="category-128">
								  <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/128-on-sale" data-depth="1">
										On Sale
				  </a>
				  				</li>
							<li class="category" id="category-403">
								  <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/403-daily-deals" data-depth="1">
										Daily Deals
				  </a>
				  				</li>
							<li class="category" id="category-483">
								  <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/483-apple-deals" data-depth="1">
										Apple Deals
				  </a>
				  				</li>
			
		
      </ul>


																																	  </div>
				  				</li>
							<li class="category" id="category-363">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/363-computers" data-depth="0">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_57866" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Computers
				  </a>
				  				  <div class="popover sub-menu js-sub-menu collapse" id="top_sub_menu_57866">
					

      <ul class="top-menu container" data-depth="1">

		
	    
							<li class="category" id="category-365">
								  <a class="dropdown-item dropdown-submenu sf-with-ul" href="https://connexstore.co.za/365-tablets" data-depth="1">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_97902" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Tablets
				  </a>
				  				  <div class="collapse" id="top_sub_menu_97902">
					

      <ul class="top-menu container" data-depth="2">

		
	    
							<li class="category" id="category-373">
								  <a class="dropdown-item" href="https://connexstore.co.za/373-samsung" data-depth="2">
										Samsung
				  </a>
				  				</li>
							<li class="category" id="category-374">
								  <a class="dropdown-item" href="https://connexstore.co.za/374-huawei" data-depth="2">
										Huawei
				  </a>
				  				</li>
							<li class="category" id="category-375">
								  <a class="dropdown-item" href="https://connexstore.co.za/375-lenovo" data-depth="2">
										Lenovo
				  </a>
				  				</li>
							<li class="category" id="category-408">
								  <a class="dropdown-item" href="https://connexstore.co.za/408-tablet-accessories" data-depth="2">
										Tablet Accessories
				  </a>
				  				</li>
							<li class="category" id="category-450">
								  <a class="dropdown-item" href="https://connexstore.co.za/450-kindle" data-depth="2">
										Kindle
				  </a>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
							<li class="category" id="category-367">
								  <a class="dropdown-item dropdown-submenu sf-with-ul" href="https://connexstore.co.za/367-projector" data-depth="1">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_27299" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Projector
				  </a>
				  				  <div class="collapse" id="top_sub_menu_27299">
					

      <ul class="top-menu container" data-depth="2">

		
	    
							<li class="category" id="category-404">
								  <a class="dropdown-item" href="https://connexstore.co.za/404-benq" data-depth="2">
										BenQ
				  </a>
				  				</li>
							<li class="category" id="category-405">
								  <a class="dropdown-item" href="https://connexstore.co.za/405-epson" data-depth="2">
										Epson
				  </a>
				  				</li>
							<li class="category" id="category-457">
								  <a class="dropdown-item" href="https://connexstore.co.za/457-viewsonic" data-depth="2">
										ViewSonic
				  </a>
				  				</li>
							<li class="category" id="category-458">
								  <a class="dropdown-item" href="https://connexstore.co.za/458-philips-projector" data-depth="2">
										Philips Projector
				  </a>
				  				</li>
							<li class="category" id="category-480">
								  <a class="dropdown-item" href="https://connexstore.co.za/480-acer" data-depth="2">
										Acer
				  </a>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
							<li class="category" id="category-364">
								  <a class="dropdown-item dropdown-submenu sf-with-ul" href="https://connexstore.co.za/364-laptops" data-depth="1">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_30046" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Laptops
				  </a>
				  				  <div class="collapse" id="top_sub_menu_30046">
					

      <ul class="top-menu container" data-depth="2">

		
	    
							<li class="category" id="category-376">
								  <a class="dropdown-item" href="https://connexstore.co.za/376-lenovo" data-depth="2">
										Lenovo
				  </a>
				  				</li>
							<li class="category" id="category-377">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/377-hp" data-depth="2">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_12078" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										HP
				  </a>
				  				  <div class="collapse" id="top_sub_menu_12078">
					

      <ul class="top-menu container" data-depth="3">

		
	    
							<li class="category" id="category-451">
								  <a class="dropdown-item" href="https://connexstore.co.za/451-pavillion" data-depth="3">
										Pavillion
				  </a>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
							<li class="category" id="category-378">
								  <a class="dropdown-item" href="https://connexstore.co.za/378-samsung" data-depth="2">
										Samsung
				  </a>
				  				</li>
							<li class="category" id="category-380">
								  <a class="dropdown-item" href="https://connexstore.co.za/380-jumper" data-depth="2">
										Jumper
				  </a>
				  				</li>
							<li class="category" id="category-381">
								  <a class="dropdown-item" href="https://connexstore.co.za/381-huawei" data-depth="2">
										Huawei
				  </a>
				  				</li>
							<li class="category" id="category-402">
								  <a class="dropdown-item" href="https://connexstore.co.za/402-acer" data-depth="2">
										ACER
				  </a>
				  				</li>
							<li class="category" id="category-417">
								  <a class="dropdown-item" href="https://connexstore.co.za/417-laptop-bags" data-depth="2">
										Laptop Bags
				  </a>
				  				</li>
							<li class="category" id="category-418">
								  <a class="dropdown-item" href="https://connexstore.co.za/418-dell" data-depth="2">
										Dell
				  </a>
				  				</li>
							<li class="category" id="category-419">
								  <a class="dropdown-item" href="https://connexstore.co.za/419-asus" data-depth="2">
										Asus
				  </a>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
							<li class="category" id="category-368">
								  <a class="dropdown-item dropdown-submenu sf-with-ul" href="https://connexstore.co.za/368-networking" data-depth="1">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_38885" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Networking
				  </a>
				  				  <div class="collapse" id="top_sub_menu_38885">
					

      <ul class="top-menu container" data-depth="2">

		
	    
							<li class="category" id="category-420">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/420-routers" data-depth="2">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_7997" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Routers
				  </a>
				  				  <div class="collapse" id="top_sub_menu_7997">
					

      <ul class="top-menu container" data-depth="3">

		
	    
							<li class="category" id="category-421">
								  <a class="dropdown-item" href="https://connexstore.co.za/421-netgear" data-depth="3">
										Netgear
				  </a>
				  				</li>
							<li class="category" id="category-422">
								  <a class="dropdown-item" href="https://connexstore.co.za/422-d-link-" data-depth="3">
										D-Link
				  </a>
				  				</li>
							<li class="category" id="category-423">
								  <a class="dropdown-item" href="https://connexstore.co.za/423-tp-link" data-depth="3">
										TP-Link
				  </a>
				  				</li>
							<li class="category" id="category-424">
								  <a class="dropdown-item" href="https://connexstore.co.za/424-ASUS" data-depth="3">
										ASUS
				  </a>
				  				</li>
							<li class="category" id="category-426">
								  <a class="dropdown-item" href="https://connexstore.co.za/426-glinet" data-depth="3">
										GL.iNet
				  </a>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
							<li class="category" id="category-370">
								  <a class="dropdown-item dropdown-submenu sf-with-ul" href="https://connexstore.co.za/370-components" data-depth="1">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_19148" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Components
				  </a>
				  				  <div class="collapse" id="top_sub_menu_19148">
					

      <ul class="top-menu container" data-depth="2">

		
	    
							<li class="category" id="category-382">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/382-memory-modules" data-depth="2">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_59563" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Memory Modules
				  </a>
				  				  <div class="collapse" id="top_sub_menu_59563">
					

      <ul class="top-menu container" data-depth="3">

		
	    
							<li class="category" id="category-383">
								  <a class="dropdown-item" href="https://connexstore.co.za/383-patriot" data-depth="3">
										PATRIOT
				  </a>
				  				</li>
							<li class="category" id="category-410">
								  <a class="dropdown-item" href="https://connexstore.co.za/410-gigastone" data-depth="3">
										Gigastone
				  </a>
				  				</li>
							<li class="category" id="category-411">
								  <a class="dropdown-item" href="https://connexstore.co.za/411-timetec" data-depth="3">
										Timetec
				  </a>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
							<li class="category" id="category-416">
								  <a class="dropdown-item" href="https://connexstore.co.za/416-hard-drives" data-depth="2">
										Hard Drives
				  </a>
				  				</li>
							<li class="category" id="category-454">
								  <a class="dropdown-item" href="https://connexstore.co.za/454-keyboard" data-depth="2">
										Keyboard
				  </a>
				  				</li>
							<li class="category" id="category-455">
								  <a class="dropdown-item" href="https://connexstore.co.za/455-processors" data-depth="2">
										Processors
				  </a>
				  				</li>
							<li class="category" id="category-476">
								  <a class="dropdown-item" href="https://connexstore.co.za/476-motherboard" data-depth="2">
										Motherboard
				  </a>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
							<li class="category" id="category-371">
								  <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/371-monitors" data-depth="1">
										Monitors
				  </a>
				  				</li>
							<li class="category" id="category-369">
								  <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/369-storage" data-depth="1">
										Storage
				  </a>
				  				</li>
			
		
      </ul>


																										<div class="menu-images-container">
																			<img src="https://connexstore.co.za/img/c/363-0_thumb.jpg">
																		<div class="clearfix"></div>
								</div>
																						  </div>
				  				</li>
							<li class="category" id="category-331">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/331-smartphones" data-depth="0">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_76262" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Smartphones
				  </a>
				  				  <div class="popover sub-menu js-sub-menu collapse" id="top_sub_menu_76262">
					

      <ul class="top-menu container" data-depth="1">

		
	    
							<li class="category" id="category-332">
								  <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/332-apple" data-depth="1">
										Apple
				  </a>
				  				</li>
							<li class="category" id="category-333">
								  <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/333-samsung" data-depth="1">
										Samsung
				  </a>
				  				</li>
							<li class="category" id="category-334">
								  <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/334-huawei" data-depth="1">
										HUAWEI
				  </a>
				  				</li>
							<li class="category" id="category-384">
								  <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/384-smartphone-accessories" data-depth="1">
										Smartphone Accessories
				  </a>
				  				</li>
							<li class="category" id="category-412">
								  <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/412-motorola" data-depth="1">
										Motorola
				  </a>
				  				</li>
							<li class="category" id="category-414">
								  <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/414-realme" data-depth="1">
										realme
				  </a>
				  				</li>
							<li class="category" id="category-415">
								  <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/415-blackview" data-depth="1">
										Blackview
				  </a>
				  				</li>
			
		
      </ul>


																										<div class="menu-images-container">
																			<img src="https://connexstore.co.za/img/c/331-0_thumb.jpg">
																		<div class="clearfix"></div>
								</div>
																						  </div>
				  				</li>
							<li class="category" id="category-365">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/365-tablets" data-depth="0">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_76667" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Tablets
				  </a>
				  				  <div class="popover sub-menu js-sub-menu collapse" id="top_sub_menu_76667">
					

      <ul class="top-menu container" data-depth="1">

		
	    
							<li class="category" id="category-373">
								  <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/373-samsung" data-depth="1">
										Samsung
				  </a>
				  				</li>
							<li class="category" id="category-374">
								  <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/374-huawei" data-depth="1">
										Huawei
				  </a>
				  				</li>
							<li class="category" id="category-375">
								  <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/375-lenovo" data-depth="1">
										Lenovo
				  </a>
				  				</li>
							<li class="category" id="category-408">
								  <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/408-tablet-accessories" data-depth="1">
										Tablet Accessories
				  </a>
				  				</li>
							<li class="category" id="category-450">
								  <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/450-kindle" data-depth="1">
										Kindle
				  </a>
				  				</li>
			
		
      </ul>


																										<div class="menu-images-container">
																			<img src="https://connexstore.co.za/img/c/365-0_thumb.jpg">
																		<div class="clearfix"></div>
								</div>
																						  </div>
				  				</li>
							<li class="category" id="category-327">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/327-gaming" data-depth="0">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_68358" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Gaming
				  </a>
				  				  <div class="popover sub-menu js-sub-menu collapse" id="top_sub_menu_68358">
					

      <ul class="top-menu container" data-depth="1">

		
	    
							<li class="category" id="category-479">
								  <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/479-pico" data-depth="1">
										Pico
				  </a>
				  				</li>
							<li class="category" id="category-328">
								  <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/328-oculus" data-depth="1">
										Oculus
				  </a>
				  				</li>
							<li class="category" id="category-330">
								  <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/330-playstation" data-depth="1">
										Playstation
				  </a>
				  				</li>
							<li class="category" id="category-484">
								  <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/484-nintendo" data-depth="1">
										Nintendo
				  </a>
				  				</li>
							<li class="category" id="category-329">
								  <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/329-gaming-accessories" data-depth="1">
										Gaming Accessories
				  </a>
				  				</li>
			
		
      </ul>


																										<div class="menu-images-container">
																			<img src="https://connexstore.co.za/img/c/327-0_thumb.jpg">
																		<div class="clearfix"></div>
								</div>
																						  </div>
				  				</li>
							<li class="category" id="category-340">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/340-smartwatch" data-depth="0">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_85183" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Smartwatch
				  </a>
				  				  <div class="popover sub-menu js-sub-menu collapse" id="top_sub_menu_85183">
					

      <ul class="top-menu container" data-depth="1">

		
	    
							<li class="category" id="category-442">
								  <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/442-fossil" data-depth="1">
										Fossil
				  </a>
				  				</li>
							<li class="category" id="category-342">
								  <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/342-garmin" data-depth="1">
										Garmin
				  </a>
				  				</li>
							<li class="category" id="category-345">
								  <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/345-huawei" data-depth="1">
										Huawei
				  </a>
				  				</li>
							<li class="category" id="category-474">
								  <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/474-nokia" data-depth="1">
										Nokia
				  </a>
				  				</li>
							<li class="category" id="category-343">
								  <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/343-samsung-" data-depth="1">
										Samsung
				  </a>
				  				</li>
							<li class="category" id="category-453">
								  <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/453-accessories" data-depth="1">
										Accessories
				  </a>
				  				</li>
			
		
      </ul>


																										<div class="menu-images-container">
																			<img src="https://connexstore.co.za/img/c/340-0_thumb.jpg">
																		<div class="clearfix"></div>
								</div>
																						  </div>
				  				</li>
							<li class="category" id="category-385">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/385-printers" data-depth="0">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_51776" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Printers
				  </a>
				  				  <div class="popover sub-menu js-sub-menu collapse" id="top_sub_menu_51776">
					

      <ul class="top-menu container" data-depth="1">

		
	    
							<li class="category" id="category-386">
								  <a class="dropdown-item dropdown-submenu sf-with-ul" href="https://connexstore.co.za/386-printers" data-depth="1">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_34464" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Printers
				  </a>
				  				  <div class="collapse" id="top_sub_menu_34464">
					

      <ul class="top-menu container" data-depth="2">

		
	    
							<li class="category" id="category-395">
								  <a class="dropdown-item" href="https://connexstore.co.za/395-hp" data-depth="2">
										HP
				  </a>
				  				</li>
							<li class="category" id="category-396">
								  <a class="dropdown-item" href="https://connexstore.co.za/396-lexmark" data-depth="2">
										Lexmark
				  </a>
				  				</li>
							<li class="category" id="category-397">
								  <a class="dropdown-item" href="https://connexstore.co.za/397-canon" data-depth="2">
										Canon
				  </a>
				  				</li>
							<li class="category" id="category-398">
								  <a class="dropdown-item" href="https://connexstore.co.za/398-brother" data-depth="2">
										Brother
				  </a>
				  				</li>
							<li class="category" id="category-409">
								  <a class="dropdown-item" href="https://connexstore.co.za/409-thermal-printer" data-depth="2">
										Thermal Printer
				  </a>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
							<li class="category" id="category-387">
								  <a class="dropdown-item dropdown-submenu sf-with-ul" href="https://connexstore.co.za/387-inks" data-depth="1">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_53612" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Inks
				  </a>
				  				  <div class="collapse" id="top_sub_menu_53612">
					

      <ul class="top-menu container" data-depth="2">

		
	    
							<li class="category" id="category-392">
								  <a class="dropdown-item" href="https://connexstore.co.za/392-hp" data-depth="2">
										HP
				  </a>
				  				</li>
							<li class="category" id="category-393">
								  <a class="dropdown-item" href="https://connexstore.co.za/393-lexmark" data-depth="2">
										Lexmark
				  </a>
				  				</li>
							<li class="category" id="category-394">
								  <a class="dropdown-item" href="https://connexstore.co.za/394-canon" data-depth="2">
										Canon
				  </a>
				  				</li>
							<li class="category" id="category-399">
								  <a class="dropdown-item" href="https://connexstore.co.za/399-brother" data-depth="2">
										Brother
				  </a>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
							<li class="category" id="category-388">
								  <a class="dropdown-item dropdown-submenu sf-with-ul" href="https://connexstore.co.za/388-toner-cartridges" data-depth="1">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_84106" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Toner Cartridges
				  </a>
				  				  <div class="collapse" id="top_sub_menu_84106">
					

      <ul class="top-menu container" data-depth="2">

		
	    
							<li class="category" id="category-389">
								  <a class="dropdown-item" href="https://connexstore.co.za/389-hp" data-depth="2">
										HP
				  </a>
				  				</li>
							<li class="category" id="category-390">
								  <a class="dropdown-item" href="https://connexstore.co.za/390-lexmark" data-depth="2">
										Lexmark
				  </a>
				  				</li>
							<li class="category" id="category-391">
								  <a class="dropdown-item" href="https://connexstore.co.za/391-canon" data-depth="2">
										Canon
				  </a>
				  				</li>
							<li class="category" id="category-400">
								  <a class="dropdown-item" href="https://connexstore.co.za/400-brother" data-depth="2">
										Brother
				  </a>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
							<li class="category" id="category-456">
								  <a class="dropdown-item dropdown-submenu sf-with-ul" href="https://connexstore.co.za/456-scanner" data-depth="1">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_61520" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Scanner
				  </a>
				  				  <div class="collapse" id="top_sub_menu_61520">
					

      <ul class="top-menu container" data-depth="2">

		
	    
							<li class="category" id="category-462">
								  <a class="dropdown-item" href="https://connexstore.co.za/462-brother" data-depth="2">
										Brother
				  </a>
				  				</li>
							<li class="category" id="category-463">
								  <a class="dropdown-item" href="https://connexstore.co.za/463-hp" data-depth="2">
										HP
				  </a>
				  				</li>
							<li class="category" id="category-464">
								  <a class="dropdown-item" href="https://connexstore.co.za/464-epson" data-depth="2">
										Epson
				  </a>
				  				</li>
			
		
      </ul>


									  </div>
				  				</li>
			
		
      </ul>


																										<div class="menu-images-container">
																			<img src="https://connexstore.co.za/img/c/385-0_thumb.jpg">
																		<div class="clearfix"></div>
								</div>
																						  </div>
				  				</li>
							<li class="category" id="category-371">
								  <a class="dropdown-item" href="https://connexstore.co.za/371-monitors" data-depth="0">
										Monitors
				  </a>
				  				</li>
							<li class="category" id="category-367">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/367-projector" data-depth="0">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_18245" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Projector
				  </a>
				  				  <div class="popover sub-menu js-sub-menu collapse" id="top_sub_menu_18245">
					

      <ul class="top-menu container" data-depth="1">

		
	    
							<li class="category" id="category-404">
								  <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/404-benq" data-depth="1">
										BenQ
				  </a>
				  				</li>
							<li class="category" id="category-405">
								  <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/405-epson" data-depth="1">
										Epson
				  </a>
				  				</li>
							<li class="category" id="category-457">
								  <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/457-viewsonic" data-depth="1">
										ViewSonic
				  </a>
				  				</li>
							<li class="category" id="category-458">
								  <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/458-philips-projector" data-depth="1">
										Philips Projector
				  </a>
				  				</li>
							<li class="category" id="category-480">
								  <a class="dropdown-item dropdown-submenu" href="https://connexstore.co.za/480-acer" data-depth="1">
										Acer
				  </a>
				  				</li>
			
		
      </ul>


																										<div class="menu-images-container">
																			<img src="https://connexstore.co.za/img/c/367-0_thumb.jpg">
																		<div class="clearfix"></div>
								</div>
																						  </div>
				  				</li>
			
		
      </ul><div class="clearfix"></div></div>
		</div>

		<div id="mobile_search_wrapper" class="rwd_menu_open hidden-md-up" style="display:none;">
			<div id="_mobile_search_widget"><div id="search_widget" data-search-controller-url="//connexstore.co.za/search">
		<form method="get" action="//connexstore.co.za/search">
			<input type="hidden" name="controller" value="search">
			<span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input type="text" name="s" value="" placeholder="Search our catalog" aria-label="Search" class="ui-autocomplete-input" autocomplete="off">
			<button type="submit">
				<i class="material-icons search"></i>
				<span class="hidden-xl-down">Search</span>
			</button>
		</form>
	</div></div>
		</div>

		<div id="mobile_user_wrapper" class="rwd_menu_open hidden-md-up" style="display:none;">
			<div id="_mobile_user_info"><div class="user-info">


	<ul class="user_info hidden-md-up">

		
			<li><a href="./User/account.php" title="View my customer account" rel="nofollow">Your account</a></li>

			<li><a id="./User/identity.php" href="https://connexstore.co.za/identity">Information</a></li>

						<li><a id="address-link" href="https://connexstore.co.za/address">Add first address</a></li>
			
						<li><a id="history-link" href="https://connexstore.co.za/order-history">Order history and details</a></li>
			
						<li><a id="order-slips-link" href="https://connexstore.co.za/credit-slip">Credit slips</a></li>
			
						<li><a id="discounts-link" href="https://connexstore.co.za/discount">Vouchers</a></li>
			
			
			<li><a href="https://connexstore.co.za/?mylogout=" rel="nofollow">(Sign out)</a></li>

		
	</ul>


	<div class="hidden-sm-down">
		<span class="welcome">Welcome,</span>
					<a class="account" href="https://connexstore.co.za/my-account" title="View my customer account" rel="nofollow">User</a>
			<a class="logout" href="https://connexstore.co.za/?mylogout=" rel="nofollow">(Sign out)</a>
			</div>


  </div></div>
		</div>
	</div>
  </div>-->
  

<div class="menu js-top-menu position-static hidden-sm-down" id="_desktop_top_menu">
    

      


    
</div>


        
      </header>

      

      
            
      <section id="wrapper">
        
        <div class="container">
			
			
			<div class="row">
			  			  
				<nav data-depth="2" class="breadcrumb hidden-sm-down">
  <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
          
        <li itemprop="itemListElement" itemscope="" itemtype="index.php">
          <a itemprop="item" href="admininfor.php">
            <span itemprop="name">Information</span>
          </a>
          <meta itemprop="position" content="1">
        </li>
      
          
        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
          <a itemprop="item" href="admindashboard.php">
            <span itemprop="name">Admin Dashboard</span>
          </a>
          <meta itemprop="position" content="2">
        </li>
      
      </ol>
</nav>
			  
			  
			  

			  
  <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12">
    
    

  <section id="main">

    
      
        <header class="page-header">
          <h1>
  ADMIN Dashboard
</h1>
        </header>
      
    

    
  <section id="content" class="page-content">
    
      
        
<aside id="notifications">
  <div class="container">
    
    
    
      </div>
</aside>
      
    
    
  <div class="row">
    <div class="links">

      <a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="identity-link" href="admininfor.php">
        <span class="link-item">
          <i class="material-icons"></i>
          Information
        </span>
      </a>
      
              <a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="discounts-link" href="addproducts.php">
          <span class="link-item">
            <i class="material-icons"><span class="material-symbols-outlined">
add
</span></i>
            Add products
          </span>
        </a>
      
      
      
        <a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="wishlist-link" href="userdisplay.php">
  <span class="link-item">
    <i class="material-icons"><span class="material-symbols-outlined">
supervisor_account
</span></i>
    <span class="material-symbols-outlined">
User/Admin accounts
</span>
  </span>
</a>


<a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="wishlist-link" href="registeradmin.php">
  <span class="link-item">
    <i class="material-icons"><span class="material-symbols-outlined">
group_add
</span></i>
    <span class="material-symbols-outlined">
Register New Admin/User
</span>
  </span>
</a>


      

    </div>
  </div>

  </section>


    
      <footer class="page-footer">
        
  
    <div class="text-sm-center">
      <a class="btn btn-primary" href="../logout.php">
        Sign out
      </a>
    </div>
  

      </footer>
    

  </section>


    
  </div>


			  
			</div>
        </div>
        

		<!--<div class="container hook_box">
			
			<div id="likebox_content">
	<h4>Follow us on Facebook</h4>
	<div class="likebox_tab"></div>
	<div class="fb-page fb_iframe_widget" data-href="https://web.facebook.com/profile.php?id=100090032495161" data-width="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=292&amp;hide_cover=false&amp;href=https%3A%2F%2Fweb.facebook.com%2Fprofile.php%3Fid%3D100090032495161&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;width=500"><span style="vertical-align: bottom; width: 292px; height: 130px;"><iframe name="f25a67c24de8074" width="500px" height="1000px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://web.facebook.com/v2.6/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Dfa8c7648175ee4%26domain%3Dconnexstore.co.za%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fconnexstore.co.za%252Ff3d4551b07a6c28%26relation%3Dparent.parent&amp;container_width=292&amp;hide_cover=false&amp;href=https%3A%2F%2Fweb.facebook.com%2Fprofile.php%3Fid%3D100090032495161&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;width=500" style="border: none; visibility: visible; width: 292px; height: 130px;" class=""></iframe></span></div>
</div>

		</div>

      </section>

      <footer id="footer" class="accordion">
        
          
<div class="container">
  <div class="row">
    
      
    
  </div>
</div>

<div class="footer-container">

  <div class="container">

    <div class="row">
      
        
			<div class="col-md-3 links wrapper">
		  		  <div class="h3 hidden-sm-down"><span>Products</span></div>
		  		  <div class="title clearfix hidden-md-up" data-target="#footer_sub_menu_21937" data-toggle="collapse">
			<span class="h3">Products</span>
			<span class="float-xs-right">
			  <span class="navbar-toggler collapse-icons">
				<i class="material-icons add"></i>
				<i class="material-icons remove"></i>
			  </span>
			</span>
		  </div>
		  <ul id="footer_sub_menu_21937" class="collapse">
						  <li>
				<a id="link-product-page-prices-drop-1" class="cms-page-link" href="https://connexstore.co.za/prices-drop" title="Our special products">
				  Prices drop
				</a>
			  </li>
						  <li>
				<a id="link-product-page-new-products-1" class="cms-page-link" href="https://connexstore.co.za/new-products" title="Our new products">
				  New products
				</a>
			  </li>
						  <li>
				<a id="link-product-page-best-sales-1" class="cms-page-link" href="https://connexstore.co.za/best-sales" title="Our best sales">
				  Best sales
				</a>
			  </li>
					  </ul>
		</div>
				<div class="col-md-3 links wrapper">
		  		  <div class="h3 hidden-sm-down"><span>Our company</span></div>
		  		  <div class="title clearfix hidden-md-up" data-target="#footer_sub_menu_23248" data-toggle="collapse">
			<span class="h3">Our company</span>
			<span class="float-xs-right">
			  <span class="navbar-toggler collapse-icons">
				<i class="material-icons add"></i>
				<i class="material-icons remove"></i>
			  </span>
			</span>
		  </div>
		  <ul id="footer_sub_menu_23248" class="collapse">
						  <li>
				<a id="link-cms-page-1-2" class="cms-page-link" href="https://connexstore.co.za/content/1-delivery" title="Our terms and conditions of delivery">
				  Delivery
				</a>
			  </li>
						  <li>
				<a id="link-cms-page-2-2" class="cms-page-link" href="https://connexstore.co.za/content/2-legal-notice" title="Legal notice">
				  Legal Notice
				</a>
			  </li>
						  <li>
				<a id="link-cms-page-3-2" class="cms-page-link" href="https://connexstore.co.za/content/3-terms-and-conditions-of-use" title="Our terms and conditions of use">
				  Terms and conditions of use
				</a>
			  </li>
						  <li>
				<a id="link-cms-page-4-2" class="cms-page-link" href="https://connexstore.co.za/content/4-about-us" title="Learn more about us">
				  About us
				</a>
			  </li>
						  <li>
				<a id="link-cms-page-5-2" class="cms-page-link" href="https://connexstore.co.za/content/5-secure-payment" title="Our secure payment method">
				  Secure payment
				</a>
			  </li>
						  <li>
				<a id="link-static-page-contact-2" class="cms-page-link" href="https://connexstore.co.za/contact-us" title="Use our form to contact us">
				  Contact us
				</a>
			  </li>
						  <li>
				<a id="link-static-page-sitemap-2" class="cms-page-link" href="https://connexstore.co.za/sitemap" title="Lost ? Find what your are looking for">
				  Sitemap
				</a>
			  </li>
						  <li>
				<a id="link-static-page-stores-2" class="cms-page-link" href="https://connexstore.co.za/stores" title="">
				  Stores
				</a>
			  </li>
					  </ul>
		</div>
	<div class="block-contact col-md-3 links wrapper">
  <div class="h3 block-contact-title hidden-sm-down">
    <a class="text-uppercase" href="https://connexstore.co.za/contact-us" rel="nofollow">
      Contact
    </a>
  </div>
  <div class="title clearfix hidden-md-up" data-target="#footer_contact" data-toggle="collapse">
    <span class="h3">Contact</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add"></i>
        <i class="material-icons remove"></i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_contact">
    <li>Connex Store </li>	<li><p>22 Magwa Crescent</p>
<p>S10 First Floor Spaces Building</p>
<p>Midrand 1682</p> </li>	<li>Phone: <strong>010 009 5384</strong></li>		<li>Email: <strong><a href="mailto:%73%61%6c%65%73@%63%6f%6e%6e%65%78%73%74%6f%72%65.%63%6f.%7a%61">sales@connexstore.co.za</a></strong></li>  </ul>
</div><a href="javascript:void(0);" id="scroll_top" title="Scroll to Top" style="display: none;"></a>
<!--Start of tawk.to Script
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();

   Tawk_API.visitor = {
        name  : "poppy nkomo",
        email : "ndlovusithembinkosi332@gmail.com"
    };

(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src="https://embed.tawk.to/5dc24b5be4c2fa4b6bda3357/default";
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of tawk.to Script
<div id="block_myaccount_infos" class="col-md-3 links wrapper">
    <div class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="https://connexstore.co.za/my-account" rel="nofollow">
      Your account
    </a>
  </div>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Your account</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add"></i>
        <i class="material-icons remove"></i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li>
          <a href="https://connexstore.co.za/identity" title="Personal info" rel="nofollow">
            Personal info
          </a>
        </li>
            <li>
          <a href="https://connexstore.co.za/order-history" title="Orders" rel="nofollow">
            Orders
          </a>
        </li>
            <li>
          <a href="https://connexstore.co.za/credit-slip" title="Credit slips" rel="nofollow">
            Credit slips
          </a>
        </li>
            <li>
          <a href="https://connexstore.co.za/addresses" title="Addresses" rel="nofollow">
            Addresses
          </a>
        </li>
            <li>
          <a href="https://connexstore.co.za/discount" title="Vouchers" rel="nofollow">
            Vouchers
          </a>
        </li>
          <li>
    <a href="https://connexstore.co.za/module/blockwishlist/lists" title="My wishlists" rel="nofollow">
      Wishlist
    </a>
  </li>
<li>
  <a href="//connexstore.co.za/module/ps_emailalerts/account" title="My alerts">
    My alerts
  </a>
</li>

	</ul>
</div>

      
    </div>

    <div class="row social_footer">
      
        
<div class="block_newsletter col-lg-6 col-md-12 col-sm-12">
  <div class="row">
    <p id="block-newsletter-label" class="col-md-4 col-xs-12">Newsletter</p>
    <div id="block-newsletter-content" class="col-md-8 col-xs-12">
      <form action="https://connexstore.co.za/#footer" method="post">
        <div class="row">
          <div class="col-xs-12">
            <input class="btn btn-newsletter float-xs-right hidden-xs-down" name="submitNewsletter" type="submit" value="Subscribe">
            <input class="btn btn-newsletter float-xs-right hidden-sm-up" name="submitNewsletter" type="submit" value="OK">
            <div class="input-wrapper">
              <input name="email" type="text" value="" placeholder="Your email address" aria-labelledby="block-newsletter-label">
            </div>
            <input type="hidden" name="action" value="0">
            <div class="clearfix"></div>
          </div>
          <div class="col-xs-12">
                              <p class="news_info">You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</p>
                                                          
                        </div>
        </div>
      </form>
    </div>
  </div>
</div>


  <div class="block-social col-lg-6 col-md-12 col-sm-12">
    <ul>
              <li class="facebook"><a href="https://web.facebook.com/profile.php?id=100089705677428" target="_blank"><span>Facebook</span></a></li>
              <li class="twitter"><a href="https://twitter.com/RetailConnex" target="_blank"><span>Twitter</span></a></li>
              <li class="youtube"><a href="https://www.youtube.com/" target="_blank"><span>YouTube</span></a></li>
              <li class="pinterest"><a href="https://pinterest.com" target="_blank"><span>Pinterest</span></a></li>
              <li class="instagram"><a href="https://www.instagram.com/" target="_blank"><span>Instagram</span></a></li>
          </ul>
	<p id="block-social-label">Follow us</p>
  </div>


      
    </div>

  </div>

  <div class="bottom-footer">
      
        © Copyright 2023 Connex Store. All Rights Reserved.
      
  </div>

</div>
        
      </footer>

    </main>-->

    
        <script type="text/javascript" src="https://connexstore.co.za/themes/AngarTheme/assets/cache/bottom-76066827.js"></script>
  <script type="text/javascript" src="https://sfdr.co/sfdr.js?platform=prestashop"></script>


    

    
      <script>
$(window).load(function(){
		$('#angarslider').bxSlider({
			maxSlides: 1,
			slideWidth: 1920,
			infiniteLoop: true,
			auto: true,
			pager: 1,
			autoHover: 1,
			speed: 500,
			pause: 5000,
			adaptiveHeight: true,
			touchEnabled: true
		});
});
</script>
<script type="text/javascript">
				var time_start;
				$(window).on("load", function (e) {
					time_start = new Date();
				});
				$(window).on("unload", function (e) {
					var time_end = new Date();
					var pagetime = new FormData();
					pagetime.append("type", "pagetime");
					pagetime.append("id_connections", "223125");
					pagetime.append("id_page", "786");
					pagetime.append("time_start", "2023-05-23 02:49:39");
					pagetime.append("token", "c0877fab87ba780bba089b2483d7f313fc763802");
					pagetime.append("time", time_end-time_start);
					pagetime.append("ajax", "1");
					navigator.sendBeacon("https://connexstore.co.za/index.php?controller=statistics", pagetime);
				});
			</script> 
    
  

<div id="roja45quotationspro-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
</div><ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all" id="ui-id-1" tabindex="0" style="display: none;"></ul><div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div></div></div><script async="" charset="UTF-8" src="https://embed.tawk.to/_s/v4/app/642b759ae8c/languages/en.js"></script><div id="uo72eecr9i7o1684802987163" class="widget-visible"><iframe src="about:blank" frameborder="0" scrolling="no" width="64px" height="60px" style="outline:none !important; visibility:visible !important; resize:none !important; box-shadow:none !important; overflow:visible !important; background:none !important; opacity:1 !important; filter:alpha(opacity=100) !important; -ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity 1}) !important; -mz-opacity:1 !important; -khtml-opacity:1 !important; top:auto !important; right:20px !important; bottom:20px !important; left:auto !important; position:fixed !important; border:0 !important; min-height:60px !important; min-width:64px !important; max-height:60px !important; max-width:64px !important; padding:0 !important; margin:0 !important; -moz-transition-property:none !important; -webkit-transition-property:none !important; -o-transition-property:none !important; transition-property:none !important; transform:none !important; -webkit-transform:none !important; -ms-transform:none !important; width:64px !important; height:60px !important; display:block !important; z-index:1000001 !important; background-color:transparent !important; cursor:none !important; float:none !important; border-radius:unset !important; pointer-events:auto !important; clip:auto !important; color-scheme:light !important;" id="b99g32crjveo1684802987178" class="" title="chat widget"></iframe><iframe src="about:blank" frameborder="0" scrolling="no" width="350px" height="520px" style="outline:none !important; visibility:visible !important; resize:none !important; box-shadow:none !important; overflow:visible !important; background:none !important; opacity:1 !important; filter:alpha(opacity=100) !important; -ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity 1}) !important; -mz-opacity:1 !important; -khtml-opacity:1 !important; top:auto !important; right:10px !important; bottom:90px !important; left:auto !important; position:fixed !important; border:0 !important; min-height:520px !important; min-width:350px !important; max-height:520px !important; max-width:350px !important; padding:0 !important; margin:0 !important; -moz-transition-property:none !important; -webkit-transition-property:none !important; -o-transition-property:none !important; transition-property:none !important; transform:none !important; -webkit-transform:none !important; -ms-transform:none !important; width:350px !important; height:520px !important; display:none !important; z-index:auto !important; background-color:transparent !important; cursor:none !important; float:none !important; border-radius:5px !important; pointer-events:auto !important; clip:auto !important; color-scheme:light !important;" id="gvi0qf2vkrq81684802987228" class="" title="chat widget"></iframe><iframe src="about:blank" frameborder="0" scrolling="no" width="360px" height="55px" style="outline:none !important; visibility:visible !important; resize:none !important; box-shadow:none !important; overflow:visible !important; background:none !important; opacity:1 !important; filter:alpha(opacity=100) !important; -ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity 1}) !important; -mz-opacity:1 !important; -khtml-opacity:1 !important; top:auto !important; right:20px !important; bottom:100px; left:auto !important; position:fixed !important; border:0 !important; min-height:55px !important; min-width:360px !important; max-height:55px !important; max-width:360px !important; padding:0 !important; margin:0 !important; -moz-transition-property:none !important; -webkit-transition-property:none !important; -o-transition-property:none !important; transition-property:none !important; transform:none !important; -webkit-transform:none !important; -ms-transform:none !important; width:360px !important; height:55px !important; display:none !important; z-index:auto !important; background-color:transparent !important; cursor:none !important; float:none !important; border-radius:unset !important; pointer-events:auto !important; clip:auto !important; color-scheme:light !important;" id="ff9vu4r36p51684802987209" class="" title="chat widget"></iframe><iframe src="about:blank" frameborder="0" scrolling="no" width="124px" height="95px" style="outline:none !important; visibility:visible !important; resize:none !important; box-shadow:none !important; overflow:visible !important; background:none !important; opacity:1 !important; filter:alpha(opacity=100) !important; -ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity 1}) !important; -mz-opacity:1 !important; -khtml-opacity:1 !important; top:auto !important; right:0px !important; bottom:30px !important; left:auto !important; position:fixed !important; border:0 !important; min-height:95px !important; min-width:124px !important; max-height:95px !important; max-width:124px !important; padding:0 !important; margin:0px 0 0 0 !important; -moz-transition-property:none !important; -webkit-transition-property:none !important; -o-transition-property:none !important; transition-property:none !important; transform:rotate(0deg) translateZ(0); -webkit-transform:rotate(0deg) translateZ(0); -ms-transform:rotate(0deg) translateZ(0); width:124px !important; height:95px !important; display:none !important; z-index:1000002 !important; background-color:transparent !important; cursor:none !important; float:none !important; border-radius:unset !important; pointer-events:auto !important; clip:auto !important; color-scheme:light !important; -moz-transform:rotate(0deg) translateZ(0); -o-transform:rotate(0deg) translateZ(0); transform-origin:0; -moz-transform-origin:0; -webkit-transform-origin:0; -o-transform-origin:0; -ms-transform-origin:0;" id="bepeigrm7sb1684802987194" class="" title="chat widget"></iframe></div></body></html>