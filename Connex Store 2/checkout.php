<?php
include_once('functions-page.php');

if (isset($_GET['quantity']))
{
	$quantity = $_GET['quantity'];
}else{
	header("location: cart.php");
}
?>
<?php
//$fullname = "User";
if (isset($_SESSION['user-name'])){
	$fullname = $_SESSION['user-name'];
}
else
{
	header("location: login.php");
}
?>
<html lang="en" class=""><head>
    
      
  <meta charset="utf-8">


  <meta http-equiv="x-ua-compatible" content="ie=edge">



  <title>Checkout</title>
  
    
  
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


  

  <script src="https://connect.facebook.net/en_US/sdk.js?hash=2a00ea15e65f9d742d982741853d963f" async="" crossorigin="anonymous"></script><script type="text/javascript" async="" src="//connexstorecoza.api.oneall.com/socialize/library.js"></script><script id="facebook-jssdk" src="//connect.facebook.net/en_EN/sdk.js#xfbml=1&amp;version=v2.6"></script><script src="https://embed.tawk.to/_s/v4/app/642b759ae8c/js/twk-main.js" charset="UTF-8" crossorigin="*"></script><script src="https://embed.tawk.to/_s/v4/app/642b759ae8c/js/twk-vendor.js" charset="UTF-8" crossorigin="*"></script><script src="https://embed.tawk.to/_s/v4/app/642b759ae8c/js/twk-chunk-vendors.js" charset="UTF-8" crossorigin="*"></script><script src="https://embed.tawk.to/_s/v4/app/642b759ae8c/js/twk-chunk-common.js" charset="UTF-8" crossorigin="*"></script><script src="https://embed.tawk.to/_s/v4/app/642b759ae8c/js/twk-runtime.js" charset="UTF-8" crossorigin="*"></script><script src="https://embed.tawk.to/_s/v4/app/642b759ae8c/js/twk-app.js" charset="UTF-8" crossorigin="*"></script><script async="" src="https://embed.tawk.to/5dc24b5be4c2fa4b6bda3357/default" charset="UTF-8" crossorigin="*"></script><script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/FFtxPnbuZxq6kkeHkQJR2MNQ/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-ptmwbpsACz7y9IBS7VZYyzas+7WNM9qDCKfauON623ZcucM2tfJ80HnL9F1UJkWY"></script><script async="" src="https://www.googletagmanager.com/gtm.js?id=AW-749461096"></script><script async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript">
        var blockwishlistController = "https:\/\/connexstore.co.za\/module\/blockwishlist\/action";
        var codwfeeplus_codproductid = "4804";
        var codwfeeplus_codproductreference = "COD";
        var codwfeeplus_is17 = true;
        var prestashop = {"cart":{"products":[{"add_to_cart_url":"https:\/\/connexstore.co.za\/cart?add=1&id_product=5039&id_product_attribute=0&token=fff5ab8d6eda7d36378b534fd6386aa7","id":"5039","attributes":[],"show_price":true,"weight_unit":"kg","url":"https:\/\/connexstore.co.za\/home\/5039-bose-music-amplifier-speaker-amp-with-bluetooth-wi-fi-connectivity-.html","canonical_url":"https:\/\/connexstore.co.za\/home\/5039-bose-music-amplifier-speaker-amp-with-bluetooth-wi-fi-connectivity-.html","condition":false,"embedded_attributes":{"id_product":"5039","id_manufacturer":"7","on_sale":"1","online_only":"0","ecotax":"0.000000","quantity":1,"minimal_quantity":"1","price":"R\u00a021,000.00","reference":"Bose Music Amplifier","customizable":"0","condition":"new","description_short":"<div id=\"product-description-short-4811\" class=\"product_desc\"><br \/><ul style=\"list-style:circle;margin-top:0px;margin-bottom:10px;padding-left:0px;margin-left:16px;font-size:13px;font-family:'Open Sans', Arial, Helvetica, sans-serif;background-color:#ffffff;\"><br \/><li><span style=\"font-size:0.92308rem;color:#d0121a;\">Free delivery available.<\/span><\/li><br \/><li><span style=\"font-size:0.92308rem;color:#d0121a;\">Hassle-Free exchanges &amp; returns for 30 days.<\/span><\/li><br \/><li><span style=\"font-size:0.92308rem;color:#d0121a;\">12-Month Limited Warranty<\/span><\/li><br \/><\/ul><br \/><h3 style=\"margin-bottom:15px;margin-top:0px;font-family:inherit;line-height:1.1;color:inherit;font-size:18px;background-color:#ffffff;\"><span>Available Payment Options<\/span><\/h3><br \/><ul style=\"margin-top:0px;margin-bottom:10px;padding-left:0px;margin-left:16px;font-size:13px;font-family:'Open Sans', Arial, Helvetica, sans-serif;background-color:#ffffff;\"><br \/><li style=\"list-style-type:none;\"><br \/><ul style=\"list-style:disc;margin-top:0px;margin-bottom:10px;padding-left:0px;margin-left:16px;\"><br \/><li>EFT (Bank Transfer)<\/li><br \/><li>Visa, Master card and Credit Card<\/li><br \/><li>Installment zero pay (3 Months to pay)<\/li><br \/><li>Installment mobicred (12 Months to pay)<\/li><br \/><\/ul><br \/><\/li><br \/><\/ul><br \/><\/div><br \/><p><\/p>","link_rewrite":"bose-music-amplifier-speaker-amp-with-bluetooth-wi-fi-connectivity-","name":"Bose Music Amplifier \u2013 speaker amp with Bluetooth & Wi-Fi connectivity","available_now":"","available_later":"","new":"0","id_product_attribute":"0","id_customization":null,"category":"home","id_image":"5039-13147","reduction":1000,"price_without_reduction":22000,"specific_prices":{"id_specific_price":"746","id_specific_price_rule":"0","id_cart":"0","id_product":"5039","id_shop":"1","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"1000.000000","reduction_tax":"1","reduction_type":"amount","from":"0000-00-00 00:00:00","to":"2023-06-30 00:00:00","score":"16"},"features":[],"attributes":[],"rate":15,"tax_name":"VAT","pack":false,"ecotax_rate":0,"price_amount":"R\u00a021,000.00","quantity_wanted":"1"},"quantity_discounts":[],"reference_to_display":"Bose Music Amplifier","seo_availability":"https:\/\/schema.org\/InStock","labels":{"tax_short":"(tax incl.)","tax_long":"Tax included"},"ecotax":{"value":"R\u00a00.00","amount":"0.000000","rate":0},"flags":{"on-sale":{"type":"on-sale","label":"On sale!"},"discount":{"type":"discount","label":"-R\u00a01,000.00"}},"main_variants":[],"id_product":"5039","id_manufacturer":"7","on_sale":"1","online_only":"0","ean13":"","isbn":"","upc":"","quantity":1,"minimal_quantity":"1","price":"R\u00a021,000.00","reference":"Bose Music Amplifier","customizable":"0","description_short":"<div id=\"product-description-short-4811\" class=\"product_desc\"><br \/><ul style=\"list-style:circle;margin-top:0px;margin-bottom:10px;padding-left:0px;margin-left:16px;font-size:13px;font-family:'Open Sans', Arial, Helvetica, sans-serif;background-color:#ffffff;\"><br \/><li><span style=\"font-size:0.92308rem;color:#d0121a;\">Free delivery available.<\/span><\/li><br \/><li><span style=\"font-size:0.92308rem;color:#d0121a;\">Hassle-Free exchanges &amp; returns for 30 days.<\/span><\/li><br \/><li><span style=\"font-size:0.92308rem;color:#d0121a;\">12-Month Limited Warranty<\/span><\/li><br \/><\/ul><br \/><h3 style=\"margin-bottom:15px;margin-top:0px;font-family:inherit;line-height:1.1;color:inherit;font-size:18px;background-color:#ffffff;\"><span>Available Payment Options<\/span><\/h3><br \/><ul style=\"margin-top:0px;margin-bottom:10px;padding-left:0px;margin-left:16px;font-size:13px;font-family:'Open Sans', Arial, Helvetica, sans-serif;background-color:#ffffff;\"><br \/><li style=\"list-style-type:none;\"><br \/><ul style=\"list-style:disc;margin-top:0px;margin-bottom:10px;padding-left:0px;margin-left:16px;\"><br \/><li>EFT (Bank Transfer)<\/li><br \/><li>Visa, Master card and Credit Card<\/li><br \/><li>Installment zero pay (3 Months to pay)<\/li><br \/><li>Installment mobicred (12 Months to pay)<\/li><br \/><\/ul><br \/><\/li><br \/><\/ul><br \/><\/div><br \/><p><\/p>","link_rewrite":"bose-music-amplifier-speaker-amp-with-bluetooth-wi-fi-connectivity-","name":"Bose Music Amplifier \u2013 speaker amp with Bluetooth & Wi-Fi connectivity","available_now":"","available_later":"","new":"0","id_product_attribute":"0","cart_quantity":"1","id_customization":null,"manufacturer_name":"Bose","category":"home","price_attribute":null,"ecotax_attr":null,"id_image":"5039-13147","legend":"","reduction":1000,"price_without_reduction":22000,"specific_prices":{"id_specific_price":"746","id_specific_price_rule":"0","id_cart":"0","id_product":"5039","id_shop":"1","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"1000.000000","reduction_tax":"1","reduction_type":"amount","from":"0000-00-00 00:00:00","to":"2023-06-30 00:00:00","score":"16"},"stock_quantity":7,"price_with_reduction":21000,"price_with_reduction_without_tax":18260.869566,"total":"R\u00a021,000.00","total_wt":21000,"price_wt":21000,"allow_oosp":0,"attributes_small":"","rate":15,"tax_name":"VAT","pack":false,"ecotax_rate":0,"unit_price":"","remove_from_cart_url":"https:\/\/connexstore.co.za\/cart?delete=1&id_product=5039&id_product_attribute=0&token=fff5ab8d6eda7d36378b534fd6386aa7","up_quantity_url":"https:\/\/connexstore.co.za\/cart?update=1&id_product=5039&id_product_attribute=0&token=fff5ab8d6eda7d36378b534fd6386aa7&op=up","down_quantity_url":"https:\/\/connexstore.co.za\/cart?update=1&id_product=5039&id_product_attribute=0&token=fff5ab8d6eda7d36378b534fd6386aa7&op=down","update_quantity_url":"https:\/\/connexstore.co.za\/cart?update=1&id_product=5039&id_product_attribute=0&token=fff5ab8d6eda7d36378b534fd6386aa7","price_amount":"R\u00a021,000.00","quantity_wanted":"1","images":[{"bySize":{"small_default":{"url":"https:\/\/connexstore.co.za\/13147-small_default\/bose-music-amplifier-speaker-amp-with-bluetooth-wi-fi-connectivity-.jpg","width":98,"height":98},"cart_default":{"url":"https:\/\/connexstore.co.za\/13147-cart_default\/bose-music-amplifier-speaker-amp-with-bluetooth-wi-fi-connectivity-.jpg","width":125,"height":125},"home_default":{"url":"https:\/\/connexstore.co.za\/13147-home_default\/bose-music-amplifier-speaker-amp-with-bluetooth-wi-fi-connectivity-.jpg","width":259,"height":259},"medium_default":{"url":"https:\/\/connexstore.co.za\/13147-medium_default\/bose-music-amplifier-speaker-amp-with-bluetooth-wi-fi-connectivity-.jpg","width":400,"height":200},"large_default":{"url":"https:\/\/connexstore.co.za\/13147-large_default\/bose-music-amplifier-speaker-amp-with-bluetooth-wi-fi-connectivity-.jpg","width":800,"height":600}},"small":{"url":"https:\/\/connexstore.co.za\/13147-small_default\/bose-music-amplifier-speaker-amp-with-bluetooth-wi-fi-connectivity-.jpg","width":98,"height":98},"medium":{"url":"https:\/\/connexstore.co.za\/13147-home_default\/bose-music-amplifier-speaker-amp-with-bluetooth-wi-fi-connectivity-.jpg","width":259,"height":259},"large":{"url":"https:\/\/connexstore.co.za\/13147-large_default\/bose-music-amplifier-speaker-amp-with-bluetooth-wi-fi-connectivity-.jpg","width":800,"height":600},"legend":"","id_image":"13147","cover":"1","position":"1","associatedVariants":[]},{"bySize":{"small_default":{"url":"https:\/\/connexstore.co.za\/13148-small_default\/bose-music-amplifier-speaker-amp-with-bluetooth-wi-fi-connectivity-.jpg","width":98,"height":98},"cart_default":{"url":"https:\/\/connexstore.co.za\/13148-cart_default\/bose-music-amplifier-speaker-amp-with-bluetooth-wi-fi-connectivity-.jpg","width":125,"height":125},"home_default":{"url":"https:\/\/connexstore.co.za\/13148-home_default\/bose-music-amplifier-speaker-amp-with-bluetooth-wi-fi-connectivity-.jpg","width":259,"height":259},"medium_default":{"url":"https:\/\/connexstore.co.za\/13148-medium_default\/bose-music-amplifier-speaker-amp-with-bluetooth-wi-fi-connectivity-.jpg","width":400,"height":200},"large_default":{"url":"https:\/\/connexstore.co.za\/13148-large_default\/bose-music-amplifier-speaker-amp-with-bluetooth-wi-fi-connectivity-.jpg","width":800,"height":600}},"small":{"url":"https:\/\/connexstore.co.za\/13148-small_default\/bose-music-amplifier-speaker-amp-with-bluetooth-wi-fi-connectivity-.jpg","width":98,"height":98},"medium":{"url":"https:\/\/connexstore.co.za\/13148-home_default\/bose-music-amplifier-speaker-amp-with-bluetooth-wi-fi-connectivity-.jpg","width":259,"height":259},"large":{"url":"https:\/\/connexstore.co.za\/13148-large_default\/bose-music-amplifier-speaker-amp-with-bluetooth-wi-fi-connectivity-.jpg","width":800,"height":600},"legend":"","id_image":"13148","cover":null,"position":"2","associatedVariants":[]},{"bySize":{"small_default":{"url":"https:\/\/connexstore.co.za\/13149-small_default\/bose-music-amplifier-speaker-amp-with-bluetooth-wi-fi-connectivity-.jpg","width":98,"height":98},"cart_default":{"url":"https:\/\/connexstore.co.za\/13149-cart_default\/bose-music-amplifier-speaker-amp-with-bluetooth-wi-fi-connectivity-.jpg","width":125,"height":125},"home_default":{"url":"https:\/\/connexstore.co.za\/13149-home_default\/bose-music-amplifier-speaker-amp-with-bluetooth-wi-fi-connectivity-.jpg","width":259,"height":259},"medium_default":{"url":"https:\/\/connexstore.co.za\/13149-medium_default\/bose-music-amplifier-speaker-amp-with-bluetooth-wi-fi-connectivity-.jpg","width":400,"height":200},"large_default":{"url":"https:\/\/connexstore.co.za\/13149-large_default\/bose-music-amplifier-speaker-amp-with-bluetooth-wi-fi-connectivity-.jpg","width":800,"height":600}},"small":{"url":"https:\/\/connexstore.co.za\/13149-small_default\/bose-music-amplifier-speaker-amp-with-bluetooth-wi-fi-connectivity-.jpg","width":98,"height":98},"medium":{"url":"https:\/\/connexstore.co.za\/13149-home_default\/bose-music-amplifier-speaker-amp-with-bluetooth-wi-fi-connectivity-.jpg","width":259,"height":259},"large":{"url":"https:\/\/connexstore.co.za\/13149-large_default\/bose-music-amplifier-speaker-amp-with-bluetooth-wi-fi-connectivity-.jpg","width":800,"height":600},"legend":"","id_image":"13149","cover":null,"position":"3","associatedVariants":[]}],"cover":{"bySize":{"small_default":{"url":"https:\/\/connexstore.co.za\/13147-small_default\/bose-music-amplifier-speaker-amp-with-bluetooth-wi-fi-connectivity-.jpg","width":98,"height":98},"cart_default":{"url":"https:\/\/connexstore.co.za\/13147-cart_default\/bose-music-amplifier-speaker-amp-with-bluetooth-wi-fi-connectivity-.jpg","width":125,"height":125},"home_default":{"url":"https:\/\/connexstore.co.za\/13147-home_default\/bose-music-amplifier-speaker-amp-with-bluetooth-wi-fi-connectivity-.jpg","width":259,"height":259},"medium_default":{"url":"https:\/\/connexstore.co.za\/13147-medium_default\/bose-music-amplifier-speaker-amp-with-bluetooth-wi-fi-connectivity-.jpg","width":400,"height":200},"large_default":{"url":"https:\/\/connexstore.co.za\/13147-large_default\/bose-music-amplifier-speaker-amp-with-bluetooth-wi-fi-connectivity-.jpg","width":800,"height":600}},"small":{"url":"https:\/\/connexstore.co.za\/13147-small_default\/bose-music-amplifier-speaker-amp-with-bluetooth-wi-fi-connectivity-.jpg","width":98,"height":98},"medium":{"url":"https:\/\/connexstore.co.za\/13147-home_default\/bose-music-amplifier-speaker-amp-with-bluetooth-wi-fi-connectivity-.jpg","width":259,"height":259},"large":{"url":"https:\/\/connexstore.co.za\/13147-large_default\/bose-music-amplifier-speaker-amp-with-bluetooth-wi-fi-connectivity-.jpg","width":800,"height":600},"legend":"","id_image":"13147","cover":"1","position":"1","associatedVariants":[]},"has_discount":true,"discount_type":"amount","discount_percentage":"-100,000%","discount_percentage_absolute":"100,000%","discount_amount":"R\u00a01,000.00","regular_price_amount":22000,"regular_price":"R\u00a022,000.00","discount_to_display":"R\u00a01,000.00","unit_price_full":"","show_availability":true,"availability_date":null,"availability_message":"","availability":"available","customizations":[]}],"totals":{"total":{"type":"total","label":"Total","amount":21000,"value":"R\u00a021,000.00"},"total_including_tax":{"type":"total","label":"Total (tax incl.)","amount":21000,"value":"R\u00a021,000.00"},"total_excluding_tax":{"type":"total","label":"Total (tax excl.)","amount":18260.87,"value":"R\u00a018,260.87"}},"subtotals":{"products":{"type":"products","label":"Subtotal","amount":21000,"value":"R\u00a021,000.00"},"discounts":null,"shipping":{"type":"shipping","label":"Shipping","amount":0,"value":"Free"},"tax":null},"products_count":1,"summary_string":"1 item","vouchers":{"allowed":1,"added":[]},"discounts":[],"minimalPurchase":0,"minimalPurchaseRequired":""},"currency":{"id":2,"name":"South African Rand","iso_code":"ZAR","iso_code_num":"710","sign":"R"},"customer":{"lastname":"nkomo","firstname":"poppy","email":"ndlovusithembinkosi332@gmail.com","birthday":"0000-00-00","newsletter":"1","newsletter_date_add":"2023-05-23 02:48:48","optin":"0","website":"","company":"","siret":"","ape":"","is_logged":true,"gender":{"type":"1","name":{"1":"Mrs."}},"addresses":[]},"language":{"name":"English (English)","iso_code":"en","locale":"en-US","language_code":"en-za","is_rtl":"0","date_format_lite":"m\/d\/Y","date_format_full":"m\/d\/Y H:i:s","id":1},"page":{"title":"","canonical":null,"meta":{"title":"Connex Store","description":"","keywords":"","robots":"index"},"page_name":"checkout","body_classes":{"lang-en":true,"lang-rtl":false,"country-ZA":true,"currency-ZAR":true,"layout-full-width":true,"page-order":true,"tax-display-enabled":true},"admin_notifications":[]},"shop":{"name":"Connex Store","logo":"https:\/\/connexstore.co.za\/img\/logo-1671096750.jpg","stores_icon":"https:\/\/connexstore.co.za\/img\/logo_stores.png","favicon":"https:\/\/connexstore.co.za\/img\/favicon.ico"},"urls":{"base_url":"https:\/\/connexstore.co.za\/","current_url":"https:\/\/connexstore.co.za\/order","shop_domain_url":"https:\/\/connexstore.co.za","img_ps_url":"https:\/\/connexstore.co.za\/img\/","img_cat_url":"https:\/\/connexstore.co.za\/img\/c\/","img_lang_url":"https:\/\/connexstore.co.za\/img\/l\/","img_prod_url":"https:\/\/connexstore.co.za\/img\/p\/","img_manu_url":"https:\/\/connexstore.co.za\/img\/m\/","img_sup_url":"https:\/\/connexstore.co.za\/img\/su\/","img_ship_url":"https:\/\/connexstore.co.za\/img\/s\/","img_store_url":"https:\/\/connexstore.co.za\/img\/st\/","img_col_url":"https:\/\/connexstore.co.za\/img\/co\/","img_url":"https:\/\/connexstore.co.za\/themes\/AngarTheme\/assets\/img\/","css_url":"https:\/\/connexstore.co.za\/themes\/AngarTheme\/assets\/css\/","js_url":"https:\/\/connexstore.co.za\/themes\/AngarTheme\/assets\/js\/","pic_url":"https:\/\/connexstore.co.za\/upload\/","pages":{"address":"https:\/\/connexstore.co.za\/address","addresses":"https:\/\/connexstore.co.za\/addresses","authentication":"https:\/\/connexstore.co.za\/login","cart":"https:\/\/connexstore.co.za\/cart","category":"https:\/\/connexstore.co.za\/index.php?controller=category","cms":"https:\/\/connexstore.co.za\/index.php?controller=cms","contact":"https:\/\/connexstore.co.za\/contact-us","discount":"https:\/\/connexstore.co.za\/discount","guest_tracking":"https:\/\/connexstore.co.za\/guest-tracking","history":"https:\/\/connexstore.co.za\/order-history","identity":"https:\/\/connexstore.co.za\/identity","index":"https:\/\/connexstore.co.za\/","my_account":"https:\/\/connexstore.co.za\/my-account","order_confirmation":"https:\/\/connexstore.co.za\/order-confirmation","order_detail":"https:\/\/connexstore.co.za\/index.php?controller=order-detail","order_follow":"https:\/\/connexstore.co.za\/order-follow","order":"https:\/\/connexstore.co.za\/order","order_return":"https:\/\/connexstore.co.za\/index.php?controller=order-return","order_slip":"https:\/\/connexstore.co.za\/credit-slip","pagenotfound":"https:\/\/connexstore.co.za\/page-not-found","password":"https:\/\/connexstore.co.za\/password-recovery","pdf_invoice":"https:\/\/connexstore.co.za\/index.php?controller=pdf-invoice","pdf_order_return":"https:\/\/connexstore.co.za\/index.php?controller=pdf-order-return","pdf_order_slip":"https:\/\/connexstore.co.za\/index.php?controller=pdf-order-slip","prices_drop":"https:\/\/connexstore.co.za\/prices-drop","product":"https:\/\/connexstore.co.za\/index.php?controller=product","search":"https:\/\/connexstore.co.za\/search","sitemap":"https:\/\/connexstore.co.za\/sitemap","stores":"https:\/\/connexstore.co.za\/stores","supplier":"https:\/\/connexstore.co.za\/supplier","register":"https:\/\/connexstore.co.za\/login?create_account=1","order_login":"https:\/\/connexstore.co.za\/order?login=1"},"alternative_langs":[],"theme_assets":"\/themes\/AngarTheme\/assets\/","actions":{"logout":"https:\/\/connexstore.co.za\/?mylogout="},"no_picture_image":{"bySize":{"small_default":{"url":"https:\/\/connexstore.co.za\/img\/p\/en-default-small_default.jpg","width":98,"height":98},"cart_default":{"url":"https:\/\/connexstore.co.za\/img\/p\/en-default-cart_default.jpg","width":125,"height":125},"home_default":{"url":"https:\/\/connexstore.co.za\/img\/p\/en-default-home_default.jpg","width":259,"height":259},"medium_default":{"url":"https:\/\/connexstore.co.za\/img\/p\/en-default-medium_default.jpg","width":400,"height":200},"large_default":{"url":"https:\/\/connexstore.co.za\/img\/p\/en-default-large_default.jpg","width":800,"height":600}},"small":{"url":"https:\/\/connexstore.co.za\/img\/p\/en-default-small_default.jpg","width":98,"height":98},"medium":{"url":"https:\/\/connexstore.co.za\/img\/p\/en-default-home_default.jpg","width":259,"height":259},"large":{"url":"https:\/\/connexstore.co.za\/img\/p\/en-default-large_default.jpg","width":800,"height":600},"legend":""}},"configuration":{"display_taxes_label":true,"display_prices_tax_incl":true,"is_catalog":false,"show_prices":true,"opt_in":{"partner":false},"quantity_discount":{"type":"price","label":"Unit price"},"voucher_enabled":1,"return_enabled":0},"field_required":[],"breadcrumb":{"links":[{"title":"Home","url":"https:\/\/connexstore.co.za\/"}],"count":1},"link":{"protocol_link":"https:\/\/","protocol_content":"https:\/\/"},"time":1684803133,"static_token":"fff5ab8d6eda7d36378b534fd6386aa7","token":"837ed86d5613748a2e7d0620abdd58e0","debug":false};
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

</style><script src="https://www.google.com/recaptcha/api.js?onload=rcf_onloadCallback&amp;render=explicit&amp;hl=en" async="" defer=""></script>
<script type="text/javascript">
            var ETS_RCF_GOOGLE_CAPTCHA_SITE_KEY = '6Ld8u24jAAAAAGSiYNPXzZLqcpbVcS_fN8-n8U78';
        var recaptchaWidgets = [];
        var rcf_onloadCallback = function () {
            ets_rcf_captcha_load(document.getElementsByTagName('form'));
        };
        var ets_rcf_captcha_load = function (forms) {
            var pattern = /(^|\s)g-recaptcha(\s|$)/;
            for (var i = 0; i < forms.length; i++) {
                var items = forms[i].getElementsByTagName('div');
                for (var k = 0; k < items.length; k++) {
                    if (items[k].className && items[k].className.match(pattern) && ETS_RCF_GOOGLE_CAPTCHA_SITE_KEY) {
                        var widget_id = grecaptcha.render(items[k], {
                            'sitekey': ETS_RCF_GOOGLE_CAPTCHA_SITE_KEY,
                            'theme': 'light',
                        });
                        recaptchaWidgets.push(widget_id);
                        break;
                    }
                }
            }
        };
    </script>
<style>
    #contact #notifications{
        display:none;
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
.fb_mpn_mobile_landing_page_slide_out{animation-duration:200ms;animation-name:fb_mpn_landing_page_slide_out;transition-timing-function:ease-in}.fb_mpn_mobile_landing_page_slide_out_from_left{animation-duration:200ms;animation-name:fb_mpn_landing_page_slide_out_from_left;transition-timing-function:ease-in}.fb_mpn_mobile_landing_page_slide_up{animation-duration:500ms;animation-name:fb_mpn_landing_page_slide_up;transition-timing-function:ease-in}.fb_mpn_mobile_bounce_in{animation-duration:300ms;animation-name:fb_mpn_bounce_in;transition-timing-function:ease-in}.fb_mpn_mobile_bounce_out{animation-duration:300ms;animation-name:fb_mpn_bounce_out;transition-timing-function:ease-in}.fb_mpn_mobile_bounce_out_v2{animation-duration:300ms;animation-name:fb_mpn_fade_out;transition-timing-function:ease-in}.fb_customer_chat_bounce_in_v2{animation-duration:300ms;animation-name:fb_bounce_in_v2;transition-timing-function:ease-in}.fb_customer_chat_bounce_in_from_left{animation-duration:300ms;animation-name:fb_bounce_in_from_left;transition-timing-function:ease-in}.fb_customer_chat_bounce_out_v2{animation-duration:300ms;animation-name:fb_bounce_out_v2;transition-timing-function:ease-in}.fb_customer_chat_bounce_out_from_left{animation-duration:300ms;animation-name:fb_bounce_out_from_left;transition-timing-function:ease-in}.fb_invisible_flow{display:inherit;height:0;overflow-x:hidden;width:0}@keyframes fb_mpn_landing_page_slide_out{0%{margin:0 12px;width:100% - 24px}60%{border-radius:18px}100%{border-radius:50%;margin:0 24px;width:60px}}@keyframes fb_mpn_landing_page_slide_out_from_left{0%{left:12px;width:100% - 24px}60%{border-radius:18px}100%{border-radius:50%;left:12px;width:60px}}@keyframes fb_mpn_landing_page_slide_up{0%{bottom:0;opacity:0}100%{bottom:24px;opacity:1}}@keyframes fb_mpn_bounce_in{0%{opacity:.5;top:100%}100%{opacity:1;top:0}}@keyframes fb_mpn_fade_out{0%{bottom:30px;opacity:1}100%{bottom:0;opacity:0}}@keyframes fb_mpn_bounce_out{0%{opacity:1;top:0}100%{opacity:.5;top:100%}}@keyframes fb_bounce_in_v2{0%{opacity:0;transform:scale(0, 0);transform-origin:bottom right}50%{transform:scale(1.03, 1.03);transform-origin:bottom right}100%{opacity:1;transform:scale(1, 1);transform-origin:bottom right}}@keyframes fb_bounce_in_from_left{0%{opacity:0;transform:scale(0, 0);transform-origin:bottom left}50%{transform:scale(1.03, 1.03);transform-origin:bottom left}100%{opacity:1;transform:scale(1, 1);transform-origin:bottom left}}@keyframes fb_bounce_out_v2{0%{opacity:1;transform:scale(1, 1);transform-origin:bottom right}100%{opacity:0;transform:scale(0, 0);transform-origin:bottom right}}@keyframes fb_bounce_out_from_left{0%{opacity:1;transform:scale(1, 1);transform-origin:bottom left}100%{opacity:0;transform:scale(0, 0);transform-origin:bottom left}}@keyframes slideInFromBottom{0%{opacity:.1;transform:translateY(100%)}100%{opacity:1;transform:translateY(0)}}@keyframes slideInFromBottomDelay{0%{opacity:0;transform:translateY(100%)}97%{opacity:0;transform:translateY(100%)}100%{opacity:1;transform:translateY(0)}}</style><script charset="utf-8" src="https://embed.tawk.to/_s/v4/app/642b759ae8c/js/twk-chunk-2c78ba82.js"></script><script charset="utf-8" src="https://embed.tawk.to/_s/v4/app/642b759ae8c/js/twk-chunk-696bc286.js"></script><script charset="utf-8" src="https://embed.tawk.to/_s/v4/app/642b759ae8c/js/twk-chunk-f1596d96.js"></script><script charset="utf-8" src="https://embed.tawk.to/_s/v4/app/642b759ae8c/js/twk-chunk-48f46bef.js"></script><script charset="utf-8" src="https://embed.tawk.to/_s/v4/app/642b759ae8c/js/twk-chunk-4fe9d5dd.js"></script><script charset="utf-8" src="https://embed.tawk.to/_s/v4/app/642b759ae8c/js/twk-chunk-2d0b9454.js"></script><script charset="utf-8" src="https://embed.tawk.to/_s/v4/app/642b759ae8c/js/twk-chunk-f163fcd0.js"></script><script charset="utf-8" src="https://embed.tawk.to/_s/v4/app/642b759ae8c/js/twk-chunk-32507910.js"></script><style type="text/css">#dk7l7toojoqo1684803141745 {outline:none !important;
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
color-scheme:light !important;}#dk7l7toojoqo1684803141745.widget-hidden {display: none !important;}#dk7l7toojoqo1684803141745.widget-visible {display: block !important;}
@media print{
 #dk7l7toojoqo1684803141745.widget-visible { 
display: none !important;
 }
}</style><script src="https://cdn.jsdelivr.net/emojione/2.2.7/lib/js/emojione.min.js" type="text/javascript" async="" defer=""></script><script src="https://cdn.jsdelivr.net/emojione/2.2.7/lib/js/emojione.min.js" type="text/javascript" async="" defer=""></script><style type="text/css">@keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}@-moz-keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}@-webkit-keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}#j4lg7hi056g1684803141823.open{animation : tawkMaxOpen .25s ease!important;}@keyframes tawkMaxClose{from{opacity: 1;transform:translate(0, 0px);;}to{opacity: 0;transform:translate(0, 30px);;}}@-moz-keyframes tawkMaxClose{from{opacity: 1;transform:translate(0, 0px);;}to{opacity: 0;transform:translate(0, 30px);;}}@-webkit-keyframes tawkMaxClose{from{opacity: 1;transform:translate(0, 0px);;}to{opacity: 0;transform:translate(0, 30px);;}}#j4lg7hi056g1684803141823.closed{animation: tawkMaxClose .25s ease!important}</style></head>

  <body id="checkout" class="lang-en country-za currency-zar layout-full-width page-order tax-display-enabled live_edit_0 ps_178 no_bg #ffffff bg_attatchment_normal bg_position_tl bg_repeat_xy bg_size_initial slider_position_column slider_controls_black banners_top2 banners_top_tablets2 banners_top_phones1 banners_bottom2 banners_bottom_tablets2 banners_bottom_phones1 submenu1 pl_1col_qty_5 pl_2col_qty_5 pl_3col_qty_3 pl_1col_qty_bigtablets_4 pl_2col_qty_bigtablets_3 pl_3col_qty_bigtablets_2 pl_1col_qty_tablets_3 pl_1col_qty_phones_1 home_tabs2 pl_border_type2 45 14 12 pl_button_icon_no pl_button_qty2 pl_desc_no pl_reviews_no pl_availability_no hide_reference_no hide_reassurance_yes product_tabs1 menu_sep6 header_sep1 slider_full_width feat_cat_style2 feat_cat6 feat_cat_bigtablets4 feat_cat_tablets4 feat_cat_phones0 all_products_yes pl_colors_yes newsletter_info_yes stickycart_yes stickymenu_yes homeicon_no pl_man_no product_hide_man_no pl_ref_yes mainfont_Poppins bg_white standard_carusele display_slider sticky_menu_rwd sticky_menu sticky_cart2 sticky_cart">

	<main>

    
        
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=AW-749461096"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  

    

    <header id="header" class="is-open">
      
        


  <div class="header-banner">
    
  </div>



  <nav class="header-nav">
    <div class="container">
      <div class="row">
          <div class="col-md-12 col-xs-12">
            <div id="_desktop_contact_link">
  <div id="contact-link">

			<span class="shop-phone contact_link">
			<a href="https://connexstore.co.za/contact-us">Contact</a>
		</span>
	
			<span class="shop-phone shop-tel">
			<i class="fa fa-phone"></i>
			<span class="shop-phone_text">Phone:</span>
			<strong><a href="tel:010 009 5384">010 009 5384</a></strong>
		</span>
	
			<span class="shop-phone shop-email">
			<i class="fa fa-envelope"></i>
			<span class="shop-phone_text">Email:</span>
			<strong><a href="mailto:%73%61%6c%65%73@%63%6f%6e%6e%65%78%73%74%6f%72%65.%63%6f.%7a%61">sales@connexstore.co.za</a></strong>
		</span>
	

  </div>
</div>
<div id="_desktop_user_info">
  
</div>

            
          </div>
      </div>
    </div>
  </nav>



  <div class="header-top">
    <div class="container">
	  <div class="row">
        <div class="col-md-4 hidden-sm-down2" id="_desktop_logo">
                            <a href="index.php">
                  <img class="logo img-responsive" src="https://connexstore.co.za/img/logo-1671096750.jpg" alt="Connex Store">
                </a>
                    </div>
		
<div id="_desktop_cart">

	

</div>


<!-- Block search module TOP -->
<div id="_desktop_search_widget" class="col-lg-4 col-md-4 col-sm-12 search-widget hidden-sm-down ">
	
</div>
<!-- /Block search module TOP -->

		<div class="clearfix"></div>
	  </div>
    </div>

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
							1<span> Product - R&nbsp;21,000.00</span>
						</span>
					</a>
				</div>


				<div id="subcart">

					<ul class="cart_products">

					
											<li>
							
<div class="cart_left">
<a href="https://connexstore.co.za/home/5039-bose-music-amplifier-speaker-amp-with-bluetooth-wi-fi-connectivity-.html" data-id_customization="0">
	<img src="https://connexstore.co.za/13147-small_default/bose-music-amplifier-speaker-amp-with-bluetooth-wi-fi-connectivity-.jpg" title="Bose Music Amplifier – speaker amp with Bluetooth &amp; Wi-Fi connectivity">
</a>
</div>

<div class="cart_right">
	<a class="remove-from-cart" rel="nofollow" href="https://connexstore.co.za/cart?delete=1&amp;id_product=5039&amp;id_product_attribute=0&amp;token=fff5ab8d6eda7d36378b534fd6386aa7" data-link-action="delete-from-cart" data-id-product="5039" data-id-product-attribute="0" data-id-customization="">
		<i class="material-icons"></i>
	</a>
	<span class="product-quantity">1x</span>
	<span class="product-name"><a href="https://connexstore.co.za/home/5039-bose-music-amplifier-speaker-amp-with-bluetooth-wi-fi-connectivity-.html" data-id_customization="0">Bose Music Amplifier – speaker amp with Bluetooth &amp; Wi-Fi connectivity</a></span>
	<span class="product-price">R&nbsp;21,000.00</span>
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
							<span class="value">R&nbsp;21,000.00</span>
							<span class="clearfix"></span>
						</li>

					</ul>

					<div class="cart-buttons">
						<a class="btn btn-primary viewcart" href="checkout.php">Check Out <i class="material-icons"></i></a>
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

					<li class="home_icon"><a href="https://connexstore.co.za/"><i class="icon-home"></i><span>Home</span></a></li>
		
	    
							<li class="category" id="category-2">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/" data-depth="0">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_94296" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Home
				  </a>
				  				  <div class="popover sub-menu js-sub-menu collapse" id="top_sub_menu_94296">
					

      <ul class="top-menu container" data-depth="1">

		
	    
							<li class="category" id="category-327">
								  <a class="dropdown-item dropdown-submenu sf-with-ul" href="https://connexstore.co.za/327-gaming" data-depth="1">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_51666" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Gaming
				  </a>
				  				  <div class="collapse" id="top_sub_menu_51666">
					

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
						<span data-target="#top_sub_menu_71327" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Automation
				  </a>
				  				  <div class="collapse" id="top_sub_menu_71327">
					

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
						<span data-target="#top_sub_menu_5130" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Beauty And Personal Care
				  </a>
				  				  <div class="collapse" id="top_sub_menu_5130">
					

      <ul class="top-menu container" data-depth="2">

		
	    
							<li class="category" id="category-324">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/324-hair-shaver" data-depth="2">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_94603" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Hair Shaver
				  </a>
				  				  <div class="collapse" id="top_sub_menu_94603">
					

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
						<span data-target="#top_sub_menu_73038" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Computers
				  </a>
				  				  <div class="collapse" id="top_sub_menu_73038">
					

      <ul class="top-menu container" data-depth="2">

		
	    
							<li class="category" id="category-365">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/365-tablets" data-depth="2">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_44141" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Tablets
				  </a>
				  				  <div class="collapse" id="top_sub_menu_44141">
					

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
						<span data-target="#top_sub_menu_93211" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Projector
				  </a>
				  				  <div class="collapse" id="top_sub_menu_93211">
					

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
						<span data-target="#top_sub_menu_97025" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Laptops
				  </a>
				  				  <div class="collapse" id="top_sub_menu_97025">
					

      <ul class="top-menu container" data-depth="3">

		
	    
							<li class="category" id="category-376">
								  <a class="dropdown-item" href="https://connexstore.co.za/376-lenovo" data-depth="3">
										Lenovo
				  </a>
				  				</li>
							<li class="category" id="category-377">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/377-hp" data-depth="3">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_12181" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										HP
				  </a>
				  				  <div class="collapse" id="top_sub_menu_12181">
					

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
						<span data-target="#top_sub_menu_87263" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Networking
				  </a>
				  				  <div class="collapse" id="top_sub_menu_87263">
					

      <ul class="top-menu container" data-depth="3">

		
	    
							<li class="category" id="category-420">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/420-routers" data-depth="3">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_21723" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Routers
				  </a>
				  				  <div class="collapse" id="top_sub_menu_21723">
					

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
						<span data-target="#top_sub_menu_19457" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Components
				  </a>
				  				  <div class="collapse" id="top_sub_menu_19457">
					

      <ul class="top-menu container" data-depth="3">

		
	    
							<li class="category" id="category-382">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/382-memory-modules" data-depth="3">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_58330" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Memory Modules
				  </a>
				  				  <div class="collapse" id="top_sub_menu_58330">
					

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
						<span data-target="#top_sub_menu_42853" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Camping and Outdoor
				  </a>
				  				  <div class="collapse" id="top_sub_menu_42853">
					

      <ul class="top-menu container" data-depth="2">

		
	    
							<li class="category" id="category-434">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/434-water-storage" data-depth="2">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_67004" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Water Storage
				  </a>
				  				  <div class="collapse" id="top_sub_menu_67004">
					

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
						<span data-target="#top_sub_menu_80552" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Electronics
				  </a>
				  				  <div class="collapse" id="top_sub_menu_80552">
					

      <ul class="top-menu container" data-depth="2">

		
	    
							<li class="category" id="category-337">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/337-cameras" data-depth="2">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_5701" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Cameras
				  </a>
				  				  <div class="collapse" id="top_sub_menu_5701">
					

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
						<span data-target="#top_sub_menu_71758" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Binoculars
				  </a>
				  				  <div class="collapse" id="top_sub_menu_71758">
					

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
						<span data-target="#top_sub_menu_59649" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Smartwatch
				  </a>
				  				  <div class="collapse" id="top_sub_menu_59649">
					

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
						<span data-target="#top_sub_menu_50404" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Components
				  </a>
				  				  <div class="collapse" id="top_sub_menu_50404">
					

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
						<span data-target="#top_sub_menu_24522" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Garden, Pool and Patio
				  </a>
				  				  <div class="collapse" id="top_sub_menu_24522">
					

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
						<span data-target="#top_sub_menu_50348" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Printers
				  </a>
				  				  <div class="collapse" id="top_sub_menu_50348">
					

      <ul class="top-menu container" data-depth="2">

		
	    
							<li class="category" id="category-386">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/386-printers" data-depth="2">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_97633" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Printers
				  </a>
				  				  <div class="collapse" id="top_sub_menu_97633">
					

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
						<span data-target="#top_sub_menu_6267" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Inks
				  </a>
				  				  <div class="collapse" id="top_sub_menu_6267">
					

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
						<span data-target="#top_sub_menu_24384" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Toner Cartridges
				  </a>
				  				  <div class="collapse" id="top_sub_menu_24384">
					

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
						<span data-target="#top_sub_menu_17624" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Scanner
				  </a>
				  				  <div class="collapse" id="top_sub_menu_17624">
					

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
						<span data-target="#top_sub_menu_10444" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Smart Home
				  </a>
				  				  <div class="collapse" id="top_sub_menu_10444">
					

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
						<span data-target="#top_sub_menu_10321" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Smartphones
				  </a>
				  				  <div class="collapse" id="top_sub_menu_10321">
					

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
						<span data-target="#top_sub_menu_12495" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Fashion and Luggage
				  </a>
				  				  <div class="collapse" id="top_sub_menu_12495">
					

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
						<span data-target="#top_sub_menu_5608" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Entertainment
				  </a>
				  				  <div class="collapse" id="top_sub_menu_5608">
					

      <ul class="top-menu container" data-depth="2">

		
	    
							<li class="category" id="category-468">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/468-sound" data-depth="2">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_76687" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Sound
				  </a>
				  				  <div class="collapse" id="top_sub_menu_76687">
					

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
						<span data-target="#top_sub_menu_93656" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Computers
				  </a>
				  				  <div class="popover sub-menu js-sub-menu collapse" id="top_sub_menu_93656">
					

      <ul class="top-menu container" data-depth="1">

		
	    
							<li class="category" id="category-365">
								  <a class="dropdown-item dropdown-submenu sf-with-ul" href="https://connexstore.co.za/365-tablets" data-depth="1">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_70892" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Tablets
				  </a>
				  				  <div class="collapse" id="top_sub_menu_70892">
					

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
						<span data-target="#top_sub_menu_37702" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Projector
				  </a>
				  				  <div class="collapse" id="top_sub_menu_37702">
					

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
						<span data-target="#top_sub_menu_26179" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Laptops
				  </a>
				  				  <div class="collapse" id="top_sub_menu_26179">
					

      <ul class="top-menu container" data-depth="2">

		
	    
							<li class="category" id="category-376">
								  <a class="dropdown-item" href="https://connexstore.co.za/376-lenovo" data-depth="2">
										Lenovo
				  </a>
				  				</li>
							<li class="category" id="category-377">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/377-hp" data-depth="2">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_41135" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										HP
				  </a>
				  				  <div class="collapse" id="top_sub_menu_41135">
					

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
						<span data-target="#top_sub_menu_48554" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Networking
				  </a>
				  				  <div class="collapse" id="top_sub_menu_48554">
					

      <ul class="top-menu container" data-depth="2">

		
	    
							<li class="category" id="category-420">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/420-routers" data-depth="2">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_10773" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Routers
				  </a>
				  				  <div class="collapse" id="top_sub_menu_10773">
					

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
						<span data-target="#top_sub_menu_93925" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Components
				  </a>
				  				  <div class="collapse" id="top_sub_menu_93925">
					

      <ul class="top-menu container" data-depth="2">

		
	    
							<li class="category" id="category-382">
								  <a class="dropdown-item sf-with-ul" href="https://connexstore.co.za/382-memory-modules" data-depth="2">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_22915" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Memory Modules
				  </a>
				  				  <div class="collapse" id="top_sub_menu_22915">
					

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
						<span data-target="#top_sub_menu_26672" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Smartphones
				  </a>
				  				  <div class="popover sub-menu js-sub-menu collapse" id="top_sub_menu_26672">
					

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
						<span data-target="#top_sub_menu_4633" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Tablets
				  </a>
				  				  <div class="popover sub-menu js-sub-menu collapse" id="top_sub_menu_4633">
					

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
						<span data-target="#top_sub_menu_93011" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Gaming
				  </a>
				  				  <div class="popover sub-menu js-sub-menu collapse" id="top_sub_menu_93011">
					

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
						<span data-target="#top_sub_menu_22983" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Smartwatch
				  </a>
				  				  <div class="popover sub-menu js-sub-menu collapse" id="top_sub_menu_22983">
					

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
						<span data-target="#top_sub_menu_79851" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Printers
				  </a>
				  				  <div class="popover sub-menu js-sub-menu collapse" id="top_sub_menu_79851">
					

      <ul class="top-menu container" data-depth="1">

		
	    
							<li class="category" id="category-386">
								  <a class="dropdown-item dropdown-submenu sf-with-ul" href="https://connexstore.co.za/386-printers" data-depth="1">
										  					  					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_17302" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Printers
				  </a>
				  				  <div class="collapse" id="top_sub_menu_17302">
					

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
						<span data-target="#top_sub_menu_69507" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Inks
				  </a>
				  				  <div class="collapse" id="top_sub_menu_69507">
					

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
						<span data-target="#top_sub_menu_43602" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Toner Cartridges
				  </a>
				  				  <div class="collapse" id="top_sub_menu_43602">
					

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
						<span data-target="#top_sub_menu_7201" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Scanner
				  </a>
				  				  <div class="collapse" id="top_sub_menu_7201">
					

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
						<span data-target="#top_sub_menu_18423" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add"></i>
						  <i class="material-icons remove"></i>
						</span>
					  </span>
										Projector
				  </a>
				  				  <div class="popover sub-menu js-sub-menu collapse" id="top_sub_menu_18423">
					

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

		
			<li><a href="https://connexstore.co.za/my-account" title="View my customer account" rel="nofollow">Your account</a></li>

			<li><a id="identity-link" href="https://connexstore.co.za/identity">Information</a></li>

						<li><a id="address-link" href="https://connexstore.co.za/address">Add first address</a></li>
			
						<li><a id="history-link" href="https://connexstore.co.za/order-history">Order history and details</a></li>
			
						<li><a id="order-slips-link" href="https://connexstore.co.za/credit-slip">Credit slips</a></li>
			
						<li><a id="discounts-link" href="https://connexstore.co.za/discount">Vouchers</a></li>
			
			
			<li><a href="logout.php" rel="nofollow">(Sign out)</a></li>

		
	</ul>


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

		
			<li><a href="login.php" title="Log in to your customer account" rel="nofollow">Sign in</a></li>
			<li><a href="reg.php" title="Log in to your customer account" rel="nofollow">Create an account</a></li>

		
	</ul>


	<div class="hidden-sm-down">
		<span class="welcome">Welcome,</span>
					<a class="account" href="login.php" title="Log in to your customer account" rel="nofollow">Sign in</a>

			<span class="or">or</span>

			<a class="account" href="reg.php" title="Log in to your customer account" rel="nofollow">Create an account</a>
			</div>


  </div></div>

		</div>
		<div class="hidden-sm-down">
	<span class="welcome">Welcome,</span>
				<a class="account" href="./User/user.php" title="Log in to your customer account" rel="nofollow"><?php echo $fullname; ?></a>

		<span class="or">or</span>

		<a class="account" href="logout.php" title="Log in to your customer account" rel="nofollow">logout</a>
		</div>


</div></div>

		
<div class="menu js-top-menu position-static hidden-sm-down" id="_desktop_top_menu"></div>


  </div></div>
		</div>
	</div>
  </div>
  

<div class="menu js-top-menu position-static hidden-sm-down" id="_desktop_top_menu">
    

      


    
</div>


      
    </header>

    
	<section id="wrapper">
        
        <div class="container">
			
			
			<div class="row">
			  			  
				<nav data-depth="2" class="breadcrumb hidden-sm-down">
  <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
          
        <li itemprop="itemListElement" itemscope="" itemtype="index.php">
          <a itemprop="item" href="cart.php">
            <span itemprop="name">Cart</span>
          </a>
          <meta itemprop="position" content="1">
        </li>
      
          
        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
          <a itemprop="item" href="checkout.php.php">
            <span itemprop="name">Checkout</span>
          </a>
          <meta itemprop="position" content="2">
        </li>
      
      </ol>
</nav>
			
				
			 </section>
<aside id="notifications">
  <div class="container">
    
    
    
      </div>
</aside>
    

    <section id="wrapper">
      
      <div class="container">

      
        <section id="content">
          <div class="row">
            <div class="col-md-8">
              
                  


  <section id="checkout-personal-information-step" class="checkout-step -reachable -complete -clickable">
    <h1 class="step-title h3">
      <i class="material-icons rtl-no-flip done"></i>
      <span class="step-number">1</span>
      Personal Information
      <span class="step-edit"><i class="material-icons edit">mode_edit</i>Edit</span>
    </h1>

    <div class="content">
      
  
    <p class="identity">
            Connected as <a href="./User/information"><?php echo $fullname; ?></a>.
    </p>
    <p>
      Not you?
	  <a href="logout.php" rel="nofollow">Sign out</a>
    </p>
    
  
    </div>
  </section>

  
  


  <section id="checkout-addresses-step" class="checkout-step -current -reachable js-current-step -clickable">
    <h1 class="step-title h3">
      <i class="material-icons rtl-no-flip done"></i>
      <span class="step-number">2</span>
      Addresses
      <span class="step-edit"><i class="material-icons edit">mode_edit</i>Edit</span>
    </h1>

    <div class="content">
      
  <div class="js-address-form">
    <form method="POST" action="" data-refresh-url="//connexstore.co.za/order?ajax=1&amp;action=addressForm">

      
              <p>
          The selected address will be used both as your personal address (for invoice) and as your delivery address.
        </p>
      
              <div id="delivery-address">
          
  <div class="js-address-form">
    
    
    


      
        <section class="form-fields">
          
                          
      
                
  
    <input type="hidden" name="back" value="">
  


              
  
                          
      
                
  
    <input type="hidden" name="token" value="837ed86d5613748a2e7d0620abdd58e0">
  


      
                
  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              Email
          </label>
    <div class="col-md-6">

      
        
          <input class="form-control" name="firstname" type="text" value="<?php echo $fullname?>" maxlength="255" required="">
                  

      
      
              

    </div>

    <div class="col-md-3 form-control-comment">
      
              
    </div>
  </div>


              
  
                          
      
                
  <div class="form-group row ">
    
    <div class="col-md-6">

      

      
      
              

    </div>

    <div class="col-md-3 form-control-comment">
      
              
    </div>
  </div>


  
                          
      
                
  <div class="form-group row ">
    <label class="col-md-3 form-control-label">
              Company
          </label>
    <div class="col-md-6">

      
        
          <input class="form-control" name="company" type="text" value="" maxlength="255">
                  

      
      
              

    </div>

    <div class="col-md-3 form-control-comment">
      
                 Optional
              
    </div>
  </div>


              
  
                          
      
                
  <div class="form-group row ">
    <label class="col-md-3 form-control-label">
              VAT number
          </label>
    <div class="col-md-6">

      
        
          <input class="form-control" name="vat_number" type="text" value="">
                  

      
      
              

    </div>

    <div class="col-md-3 form-control-comment">
      
                 Optional
              
    </div>
  </div>


              
  
                          
      
                
  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              Address
          </label>
    <div class="col-md-6">

      
        
          <input class="form-control" name="address1" type="text" value="" maxlength="128" required="">
                  

      
      
              

    </div>

    <div class="col-md-3 form-control-comment">
      
              
    </div>
  </div>


              
  
                          
      
                
  <div class="form-group row ">
    <label class="col-md-3 form-control-label">
              Address Complement
          </label>
    <div class="col-md-6">

      
        
          <input class="form-control" name="address2" type="text" value="" maxlength="128">
                  

      
      
              

    </div>

    <div class="col-md-3 form-control-comment">
      
                 Optional
              
    </div>
  </div>


              
  
                          
      
                
  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              Zip/Postal Code
          </label>
    <div class="col-md-6">

      
        
          <input class="form-control" name="postcode" type="text" value="" maxlength="12" required="">
                  

      
      
              

    </div>

    <div class="col-md-3 form-control-comment">
      
              
    </div>
  </div>


              
  
                          
      
                
  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              City
          </label>
    <div class="col-md-6">

      
        
          <input class="form-control" name="city" type="text" value="" maxlength="64" required="">
                  

      
      
              

    </div>

    <div class="col-md-3 form-control-comment">
      
              
    </div>
  </div>


              
  
                          
      
                
  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              Country
          </label>
    <div class="col-md-6">

      
        
          <select class="form-control form-control-select js-country" name="id_country" required="">
            <option value="" disabled="" selected="">-- please choose --</option>
                          <option value="30" selected="">South Africa</option>
                      </select>
        

      
      
              

    </div>

    <div class="col-md-3 form-control-comment">
      
              
    </div>
  </div>


              
  
                          
      
                
  <div class="form-group row ">
    <label class="col-md-3 form-control-label">
              Phone
          </label>
    <div class="col-md-6">

      
        
          <input class="form-control" name="phone" type="tel" value="" maxlength="32">
                  

      
      
              

    </div>

    <div class="col-md-3 form-control-comment">
      
                 Optional
              
    </div>
  </div>


              
  
                      
  <input type="hidden" name="saveAddress" value="delivery">
      <div class="form-group row">
      <div class="col-md-9 col-md-offset-3">
        <input name="use_same_address" id="use_same_address" type="checkbox" value="1" checked="">
        <label for="use_same_address">Use this address for invoice too</label>
      </div>
    </div>
  
        </section>
      

      
      <footer class="form-footer clearfix">
        <input type="hidden" name="submitAddress" value="1">
      
      
      <button type="submit" class="continue btn btn-primary float-xs-right" name="confirm-addresses" value="1"><a href="shipping.php?quantity=<?php echo $quantity;?>">
          Continue</a>
      </button>
          
  
      </footer>
      

    
  </div>


        </div></form>
      
      
      
    
  </div>

    </div>
  </section>


  
  <section class="checkout-step -unreachable" id="checkout-delivery-step">
    <h1 class="step-title h3">
      <span class="step-number">3</span> Shipping Method
    </h1>
  </section>


  
  <section class="checkout-step -unreachable" id="checkout-payment-step">
    <h1 class="step-title h3">
      <span class="step-number">4</span> Payment
    </h1>
  </section>



              
            </div>
            <div class="col-md-4">

              
                

<section id="js-checkout-summary" class="card js-cart" data-refresh-url="https://connexstore.co.za/cart?ajax=1&amp;action=refresh">
  <div class="card-block">

    <h4 class="show_cart"><a rel="nofollow" href="https://connexstore.co.za/cart?action=show">Shopping Cart</a></h4>

    
      
    

    
      <div class="cart-summary-products">

        <p><?php
                            						$tot = $total = 0;
                            						foreach ($_SESSION as $key=>$val){
                                					$tot++;
                            						}
                            						$tot -= 1;
													echo  $tot += $quantity;
                        ?> item</p>

        <p>
          <a class="btn btn-primary" href="#" data-toggle="collapse" data-target="#cart-summary-product-list">
            show details
          </a>
        </p>

		<?php
                                 $total = 0;
                                 foreach ($_SESSION as $key=>$val){
                                    if($key == 'register'){continue;}
                                 $product_id_number_without_p = substr($key, -6);    // returns "f"
                                 $name = return_info($conn, 'products', 'name', 'id', $product_id_number_without_p);
                                 $price = return_info($conn, 'products', 'price', 'id', $product_id_number_without_p);
                                 $image = return_info($conn, 'products', 'image', 'id', $product_id_number_without_p);
                              
                                 $total += intval($price);
                                 
                                 
                                 
                                 //echo"</tr>";
                                 //echo("<br>");
                                 //echo("<br>");} 
                                
                            
                            ?>
                                <?php
                        }
                        ?>
          <div class="collapse" id="cart-summary-product-list">
            <ul class="media-list">
                              <li class="media">


  <div class="media-left">
    
  <?php echo"<td class='align-middle'><img src='images/$image' alt='' style='width: 50px;'></td>";?>
		  
  </div>
  <div class="media-body">
    <span class="product-name"><?php echo $name?></span>
    <span class="product-quantity"><?php echo $quantity?></span>
    <span class="product-price float-xs-right">R<?php echo $price * $quantity?></span>
    
  </div>

</li>
                          </ul>
          </div>
        
      </div>
	  <?php
                        $total = 0;
                        foreach ($_SESSION as $key=>$val){
                            $product_id_number_without_p = substr($key, -6);    // returns "f"
                            $price = return_info($conn, 'products', 'price', 'id', $product_id_number_without_p);

                            $total += intval($price);
                                 
                        }
                        ?>
    

    
                        <div class="cart-summary-line cart-summary-subtotals" id="cart-subtotal-products">
            <span class="label">Subtotal</span>
            <span class="value">R<?php echo $total * $quantity?>.00</span>
          </div>
                                              <div class="cart-summary-line cart-summary-subtotals" id="cart-subtotal-shipping">
            <span class="label">Shipping</span>
            <span class="value">Free</span>
          </div>
                                

  </div>

  
      
    <div class="block-promo">
      <div class="cart-voucher">
        
       

        <div class="promo-code collapse" id="promo-code">
          
            <form action="https://connexstore.co.za/cart" data-link-action="add-voucher" method="post">
              <input type="hidden" name="token" value="fff5ab8d6eda7d36378b534fd6386aa7">
              <input type="hidden" name="addDiscount" value="1">
              <input class="promo-input" type="text" name="discount_name" placeholder="Promo code">
              <button type="submit" class="btn btn-primary"><span>Add</span></button>
            </form>
          

          
            <div class="alert alert-danger js-error" role="alert">
              <i class="material-icons"></i><span class="ml-1 js-error-text"></span>
            </div>
          
        </div>

              </div>
    </div>
  
  

  <hr class="separator">

  
    

<div class="card-block cart-summary-totals">

  
    <div class="cart-summary-line cart-total">
      <span class="label">Total <span class="price_tax_label">(tax incl.)</span></span>
      <span class="value">R<?php echo $total * $quantity?></span>
    </div>
  

  
	  

	
</div>
  

</section>
              

              <div class="blockreassurance_product">
            <div style="cursor:pointer;" onclick="window.open('https://connexstore.co.za/content/3-terms-and-conditions-of-use')">
            <span class="item-product">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="70px" height="70px" viewBox="0 0 70 70" version="1.1" data-img-url="/modules/blockreassurance/views/img/reassurance/pack2/security.svg" class="svg replaced-svg">
    <!-- Generator: Sketch 53.2 (72643) - https://sketchapp.com -->
    <title>pack2_security</title>
    <desc>Created with Sketch.</desc>
    <g id="pack2_security" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <path d="M26.115688,27.7186584 L26.115688,16.8806233 L26.1175074,16.8101129 C26.422874,10.8969727 29.5805327,7.70698547 35.2102124,7.70698547 C40.8497547,7.70698547 43.9637933,10.9118721 44.162563,16.8806233 L44.162563,27.7186584 L48.2378661,27.7186584 L48.2385412,17.047783 C47.9356398,8.45240836 43.7592608,4.375 35.2734375,4.375 C26.7897161,4.375 22.5192031,8.45604204 22.0405579,17.0372705 L22.0405579,27.7186584 L26.115688,27.7186584 Z M28.850063,27.7186584 L41.4283638,27.7186584 L41.4289513,16.9263024 C41.2790015,12.4407741 39.3362648,10.4413605 35.2102124,10.4413605 C31.0848959,10.4413605 29.0906312,12.4453631 28.850063,16.916623 L28.850063,27.7186584 L28.850063,27.7186584 Z M19.3061829,27.7186584 L19.3061829,16.9996332 L19.3082042,16.9253153 C19.8552849,6.87583419 25.3180769,1.640625 35.2734375,1.640625 C45.2387751,1.640625 50.6166915,6.89109709 50.9720681,16.9996332 L50.9720681,27.7186584 L56.875,27.7186584 C58.3851536,27.7186584 59.609375,28.9428798 59.609375,30.4530334 L59.609375,65.9999084 C59.609375,67.5100621 58.3851536,68.7342834 56.875,68.7342834 L13.125,68.7342834 C11.6148464,68.7342834 10.390625,67.5100621 10.390625,65.9999084 L10.390625,30.4530334 C10.390625,28.9428798 11.6148464,27.7186584 13.125,27.7186584 L19.3061829,27.7186584 Z M13.671875,30.9999084 L13.671875,65.4530334 L56.328125,65.4530334 L56.328125,30.9999084 L13.671875,30.9999084 Z M35,58.8905334 C29.2614163,58.8905334 24.609375,54.2384922 24.609375,48.4999084 C24.609375,42.7613247 29.2614163,38.1092834 35,38.1092834 C40.7385837,38.1092834 45.390625,42.7613247 45.390625,48.4999084 C45.390625,54.2384922 40.7385837,58.8905334 35,58.8905334 Z M35,56.1799356 C39.2415619,56.1799356 42.6800272,52.7414703 42.6800272,48.4999084 C42.6800272,44.2583466 39.2415619,40.8198813 35,40.8198813 C30.7584381,40.8198813 27.3199728,44.2583466 27.3199728,48.4999084 C27.3199728,52.7414703 30.7584381,56.1799356 35,56.1799356 Z" id="color" fill="#F19D76" fill-rule="nonzero"></path>
        <path d="M29.8994316,54.1473519 C28.6522442,52.7925101 27.890625,50.9837316 27.890625,48.9970675 C27.890625,44.7960948 31.2961863,41.3905334 35.4971591,41.3905334 C37.4838232,41.3905334 39.2926016,42.1521526 40.6474434,43.39934 C41.8946308,44.7541818 42.65625,46.5629603 42.65625,48.5496244 C42.65625,52.7505971 39.2506887,56.1561584 35.0497159,56.1561584 C33.0630518,56.1561584 31.2542734,55.3945393 29.8994316,54.1473519 L29.8994316,54.1473519 Z M30.4703395,49.6235125 L31.1836295,50.3767977 C31.7480625,50.9722223 32.3390935,51.5829784 32.924255,52.174315 C33.1225287,52.3917596 33.4185689,52.5136928 33.7328431,52.5073566 C33.7768372,52.4980054 33.8254322,52.5086612 33.8704262,52.4990975 C34.071098,52.4540434 34.2518209,52.348396 34.3832214,52.1993265 C36.2117392,50.0641368 38.0389238,47.9292303 39.8421767,45.7784257 C40.0159592,45.5928682 40.1060492,45.3546002 40.0930399,45.1149476 C40.0592462,44.899232 39.9357683,44.7069238 39.7483167,44.5780653 C39.5552693,44.4432647 39.3074798,44.3895268 39.0630582,44.429454 C38.8186367,44.4693811 38.5990846,44.599461 38.4558899,44.7891881 C38.2520531,45.0232879 38.029905,45.2794034 37.8258095,45.5122863 C37.7326265,45.616351 37.6439697,45.7417105 37.5284663,45.8489298 L33.6673353,50.3521923 C33.6104088,50.3007014 33.5792745,50.2656672 33.522746,50.2144096 C33.3170919,50.0056666 33.1377024,49.8123258 32.931715,49.6036536 C32.5204067,49.1861674 32.1044328,48.74837 31.6707942,48.3356304 C31.5230814,48.1677015 31.3034254,48.0668983 31.0649762,48.0576121 C30.8265269,48.048326 30.5910095,48.1314029 30.4154119,48.2867409 C30.0314365,48.5950665 29.9608984,49.1153155 30.2538349,49.478441 C30.3358289,49.5134355 30.4092923,49.5626605 30.4703395,49.6235125 L30.4703395,49.6235125 Z" id="fill" fill="#F19D76" fill-rule="nonzero" opacity="0.3"></path>
    </g>
</svg>
                                    &nbsp;
            </span>
                          <p class="block-title" style="color:#000000;">Security policy</p>
                    </div>
            <div style="cursor:pointer;" onclick="window.open('https://connexstore.co.za/content/1-delivery')">
            <span class="item-product">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="70px" height="70px" viewBox="0 0 70 70" version="1.1" data-img-url="/modules/blockreassurance/views/img/reassurance/pack2/carrier.svg" class="svg replaced-svg">
    <!-- Generator: Sketch 53.2 (72643) - https://sketchapp.com -->
    <title>pack2_carrier</title>
    <desc>Created with Sketch.</desc>
    <g id="pack2_carrier" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <path d="M28.984375,45.3503662 L33.3155515,45.3503662 C33.8624265,44.2566162 34.7426471,43.2190318 36.5119485,43.2190318 C38.28125,43.2190318 39.3581772,44.2566162 39.7083456,45.3503662 L53.046875,45.3503662 L53.046875,21.8347412 L47.4494485,21.8347412 L47.4494485,33.8008906 C47.4494485,34.5012754 46.8733443,35.0690494 46.1626838,35.0690494 C45.8197983,35.0690494 45.4910937,34.9341768 45.2495163,34.6943626 L43.5138893,32.9714037 L41.6590074,31.1715233 L39.8744401,32.9584673 L38.0619353,34.7320645 C37.5576198,35.2255284 36.7428907,35.2226429 36.2421869,34.7256195 C36.0028693,34.488061 35.8685662,34.1668819 35.8685662,33.8321242 L35.8685662,21.8347412 L28.984375,21.8347412 L28.984375,45.3503662 Z M55.8455882,27.3472412 L64.0340909,27.3472412 L70,38.362298 L70,48.1662753 L65.2193963,48.1662753 C64.7238954,49.7045521 63.2637171,50.8191162 61.5395221,50.8191162 C59.815327,50.8191162 58.3551487,49.7045521 57.8596478,48.1662753 L40.2239919,48.1662753 C39.728491,49.7045521 38.2683127,50.8191162 36.5441176,50.8191162 C34.8199226,50.8191162 33.3597443,49.7045521 32.8642434,48.1662753 L26.25,48.1662753 L26.25,22.2722412 C26.25,20.520463 27.6902605,19.1003662 29.4669118,19.1003662 L52.6286765,19.1003662 C54.4053278,19.1003662 55.8455882,20.520463 55.8455882,22.2722412 L55.8455882,27.3472412 Z M38.28125,21.8347412 L38.28125,30.5847412 L41.6184924,27.4653396 L44.84375,30.5238742 L44.84375,21.8347412 L38.28125,21.8347412 Z M58.2495787,45.3503662 C58.5911942,44.2566162 60.1242065,43.110328 61.5209675,43.110328 C62.9177284,43.110328 64.3857193,44.2566162 64.7923563,45.3503662 L67.265625,45.3503662 L67.265625,39.2426972 L62.3681798,30.0378662 L55.78125,30.0378662 L55.78125,45.3503662 L57.8346968,45.3503662 L58.2495787,45.3503662 Z M36.640625,48.0847412 C37.2446864,48.0847412 37.734375,47.5950527 37.734375,46.9909912 C37.734375,46.3869298 37.2446864,45.8972412 36.640625,45.8972412 C36.0365636,45.8972412 35.546875,46.3869298 35.546875,46.9909912 C35.546875,47.5950527 36.0365636,48.0847412 36.640625,48.0847412 Z M61.5234375,48.0847412 C62.1274989,48.0847412 62.6171875,47.5950527 62.6171875,46.9909912 C62.6171875,46.3869298 62.1274989,45.8972412 61.5234375,45.8972412 C60.9193761,45.8972412 60.4296875,46.3869298 60.4296875,46.9909912 C60.4296875,47.5950527 60.9193761,48.0847412 61.5234375,48.0847412 Z" id="color" fill="#F19D76" fill-rule="nonzero"></path>
        <path d="M20.3910556,36.5241223 L1.25412602,36.5241223 C0.911800873,36.5201533 0.585605642,36.3780215 0.34961853,36.1300047 C0.113631419,35.8819879 -0.0121199988,35.5491345 0.000922140458,35.2070349 C-0.0135552202,34.4984918 0.545738573,33.9106874 1.25412602,33.8899475 C2.1858736,33.8580058 19.4912498,33.8580058 20.3910556,33.8899475 C20.7332622,33.8940983 21.0592811,34.0363097 21.2951207,34.2843061 C21.5309604,34.5323024 21.6566198,34.8650517 21.6435799,35.2070349 C21.6566198,35.5490181 21.5309604,35.8817674 21.2951207,36.1297637 C21.0592811,36.3777601 20.7332622,36.5199715 20.3910556,36.5241223 Z M20.3910556,31.0553723 L6.72287602,31.0553723 C6.38055087,31.0514033 6.05435564,30.9092715 5.81836853,30.6612547 C5.58238142,30.4132379 5.45663,30.0803845 5.46967214,29.7382849 C5.45519478,29.0297418 6.01448857,28.4419374 6.72287602,28.4211975 C7.6546236,28.3892558 19.4912498,28.3892558 20.3910556,28.4211975 C20.7332622,28.4253483 21.0592811,28.5675597 21.2951207,28.8155561 C21.5309604,29.0635524 21.6566198,29.3963017 21.6435799,29.7382849 C21.6566198,30.0802681 21.5309604,30.4130174 21.2951207,30.6610137 C21.0592811,30.9090101 20.7332622,31.0512215 20.3910556,31.0553723 Z M20.3910556,41.9928723 L12.191626,41.9928723 C11.8493009,41.9889033 11.5231056,41.8467715 11.2871185,41.5987547 C11.0511314,41.3507379 10.92538,41.0178845 10.9384221,40.6757849 C10.9239448,39.9672418 11.4832386,39.3794374 12.191626,39.3586975 C13.1233736,39.3267558 19.4912498,39.3267558 20.3910556,39.3586975 C20.7332622,39.3628483 21.0592811,39.5050597 21.2951207,39.7530561 C21.5309604,40.0010524 21.6566198,40.3338017 21.6435799,40.6757849 C21.6566198,41.0177681 21.5309604,41.3505174 21.2951207,41.5985137 C21.0592811,41.8465101 20.7332622,41.9887215 20.3910556,41.9928723 Z M38.828125,22.3816162 L44.84375,22.3816162 L44.84375,30.5238742 L41.6184924,27.4653396 L38.828125,30.5847412 L38.828125,22.3816162 Z M58.2495787,45.3503662 L56.328125,45.3503662 L56.328125,30.5847412 L62.3681798,30.5847412 L67.265625,39.2426972 L67.265625,45.3503662 L64.7923563,45.3503662 C64.3857193,44.2566162 62.9177284,43.110328 61.5209675,43.110328 C60.1242065,43.110328 58.5911942,44.2566162 58.2495787,45.3503662 Z M55.611389,9.43773704 L56.4712859,10.1136559 L55.1194483,11.8334498 L54.2595513,11.157531 C54.1211905,11.048773 53.9819698,10.9412727 53.8419023,10.8350369 L52.9704544,10.1740773 L54.2923737,8.43118151 L55.1638215,9.09214114 C55.3139264,9.20598992 55.4631203,9.32119103 55.611389,9.43773704 Z M50.9938867,6.36784966 L51.9485039,6.9016991 L50.880805,8.81093334 L49.9261879,8.2770839 C49.7728136,8.19131258 49.6187325,8.1068933 49.4639606,8.02383229 L48.5002245,7.50662666 L49.5346357,5.57915433 L50.4983719,6.09635996 C50.6642894,6.18540245 50.8294668,6.27590128 50.9938867,6.36784966 Z M46.3496234,4.23012061 L47.3759416,4.60822125 L46.6197403,6.66085757 L45.5934221,6.28275692 C45.4284472,6.22197935 45.2629565,6.16263123 45.0969684,6.10471759 L44.0642704,5.7444067 L44.7848922,3.67901073 L45.8175902,4.03932162 C45.9954718,4.10138497 46.1728229,4.16498641 46.3496234,4.23012061 Z M41.4701209,2.85057013 L42.5424457,3.06599625 L42.1115935,5.21064601 L41.0392686,4.99521989 C40.8666721,4.96054589 40.6937772,4.92735534 40.5206044,4.89565138 L39.4447358,4.6986846 L39.8386694,2.54694749 L40.9145379,2.74391427 C41.1000354,2.77787458 41.2852369,2.81342763 41.4701209,2.85057013 Z M36.4008037,2.23566666 L37.4935313,2.28294824 L37.3989681,4.46840335 L36.3062406,4.42112178 C36.1305771,4.41352094 35.9548511,4.40742325 35.7790833,4.40282944 L34.6857067,4.37425327 L34.742859,2.1875 L35.8362356,2.21607617 C36.0244771,2.22099599 36.212674,2.22752641 36.4008037,2.23566666 Z M31.2894206,2.41120489 L32.3763218,2.28899683 L32.6207379,4.46279926 L31.5338367,4.58500732 C31.3588818,4.60467875 31.1841015,4.62585256 31.0095164,4.64852703 L29.9248759,4.78939621 L29.6431376,2.62011528 L30.7277781,2.47924611 C30.9147924,2.45495735 31.1020139,2.43227636 31.2894206,2.41120489 Z M26.3339629,3.35806707 L27.3893052,3.07076605 L27.9639072,5.18145048 L26.908565,5.4687515 C26.7386618,5.51500507 26.5691559,5.56272909 26.4000661,5.61191984 L25.3498541,5.91744218 L24.7388094,3.81701826 L25.7890214,3.51149592 C25.9702318,3.45877912 26.1518857,3.40763485 26.3339629,3.35806707 Z M21.5339165,5.07731169 L22.5316199,4.62911879 L23.4280058,6.6245257 L22.4303023,7.0727186 C22.2698967,7.14477676 22.1100861,7.21824146 21.9508871,7.29310756 L20.9611194,7.7585631 L20.0302083,5.7790276 L21.019976,5.31357206 C21.1906402,5.23331428 21.3619596,5.15455896 21.5339165,5.07731169 Z M17.0552505,7.52778385 L17.9707427,6.92931658 L19.1676772,8.760301 L18.252185,9.35876828 C18.1049352,9.45502706 17.958443,9.55260817 17.8127218,9.65150585 L16.9077148,10.2657138 L15.679299,8.45569973 L16.584306,7.84149182 C16.7404621,7.73551216 16.8974486,7.63094069 17.0552505,7.52778385 Z M13.0087298,10.647391 L13.8208282,9.91473475 L15.2861407,11.5389317 L14.4740422,12.2715879 C14.3469937,12.3862081 14.2207713,12.5019787 14.0954125,12.6188685 L14.0843002,12.6292351 L13.2847144,13.375527 L11.7921307,11.7763552 L12.5917165,11.0300634 L12.6035753,11.0190005 C12.7377276,10.8939111 12.8727827,10.7700393 13.0087298,10.647391 Z M9.50225073,14.3349873 L10.1926162,13.486645 L11.8893007,14.8673759 L11.1989353,15.7157182 C11.0879734,15.8520715 10.9782548,15.9892965 10.869786,16.1273804 L10.1941426,16.9874938 L8.47391578,15.6362071 L9.14955916,14.7760936 C9.26578939,14.6281292 9.38335573,14.4810891 9.50225073,14.3349873 Z M6.60450988,18.5249466 L7.15445925,17.579513 L9.04532651,18.6794117 L8.49537714,19.6248454 C8.40688807,19.7769695 8.31974541,19.9298209 8.23395551,20.083384 L7.70051823,21.0382315 L5.79082325,19.9713569 L6.32426053,19.0165094 C6.41622904,18.8518867 6.50964779,18.6880267 6.60450988,18.5249466 Z M4.81956521,47.9608949 L4.38827502,46.9557691 L6.39852658,46.0931887 L6.82981677,47.0983145 C6.89917552,47.2599557 6.96994927,47.4210213 7.042133,47.5814946 L7.49081812,48.5789768 L5.49585374,49.4763471 L5.04716861,48.4788649 C4.96978721,48.3068365 4.8939176,48.1341738 4.81956521,47.9608949 Z M7.19333287,52.4789508 L6.61039091,51.5534954 L8.46130175,50.3876115 L9.04424371,51.3130669 C9.13796289,51.4618517 9.2330135,51.609895 9.32938983,51.757183 L9.92826004,52.6724117 L8.09780269,53.8701521 L7.49893248,52.9549234 C7.39564525,52.7970738 7.29377659,52.6384112 7.19333287,52.4789508 Z M10.2429764,56.5749757 L9.52391747,55.7508136 L11.1722418,54.3126956 L11.8913007,55.1368578 C12.0069686,55.2694325 12.1238649,55.401144 12.2419841,55.5319812 L12.9749172,56.3438298 L11.3512198,57.8096959 L10.6182868,56.9978472 C10.49188,56.8578301 10.3667743,56.7168689 10.2429764,56.5749757 Z M13.8750375,60.1455381 L13.0383684,59.441071 L14.4473026,57.7677328 L15.2839717,58.4721999 C15.4189585,58.5858574 15.5548364,58.6982743 15.6915931,58.8094437 L16.5403018,59.4993587 L15.1604718,61.196776 L14.3117631,60.506861 C14.1652374,60.3877503 14.0196576,60.2673068 13.8750375,60.1455381 Z M18.0126907,63.1115781 L17.0767304,62.5456563 L18.208574,60.6737358 L19.1445343,61.2396576 C19.295319,61.3308286 19.446851,61.4206598 19.5991148,61.5091447 L20.5447787,62.058698 L19.4456722,63.9500259 L18.5000083,63.4004726 C18.3367788,63.3056151 18.174334,63.2093146 18.0126907,63.1115781 Z M22.5766017,65.4032767 L21.5637215,64.9905263 L22.3892223,62.9647661 L23.4021024,63.3775164 C23.565096,63.4439366 23.7286511,63.5089386 23.8927496,63.5725171 L24.9126278,63.9676596 L24.1223427,66.0074159 L23.1024645,65.6122734 C22.9265902,65.5441324 22.7512961,65.474465 22.5766017,65.4032767 Z M27.4125106,66.9486652 L26.3480215,66.6973642 L26.8506235,64.5683862 L27.9151125,64.8196872 C28.0863453,64.8601112 28.2579254,64.8990623 28.4298326,64.9365367 L29.4984858,65.1694947 L29.0325698,67.3068011 L27.9639166,67.0738431 C27.779759,67.0336982 27.5959499,66.9919709 27.4125106,66.9486652 Z M32.4557025,67.7328074 L31.3651746,67.6489152 L31.532959,65.4678593 L32.6234869,65.5517516 C32.7988849,65.5652446 32.9743971,65.5772356 33.1500026,65.5877235 L34.2418072,65.6529303 L34.1113935,67.8365394 L33.019589,67.7713326 C32.8315199,67.7601003 32.6435503,67.7472582 32.4557025,67.7328074 Z M37.5683396,67.7289673 L36.4779419,67.8145354 L36.3068056,65.63374 L37.3972033,65.5481718 C37.5727549,65.5343956 37.7481827,65.5191129 37.9234658,65.502325 L39.0122336,65.3980476 L39.2207885,67.5755832 L38.1320207,67.6798606 C37.9442729,67.6978423 37.7563718,67.7142116 37.5683396,67.7289673 Z M42.5579871,66.9486574 L41.4935642,67.2002384 L40.9904021,65.0713927 L42.0548249,64.8198117 C42.2261526,64.7793176 42.3971301,64.7373443 42.5677382,64.6938951 L43.627656,64.4239632 L44.1675198,66.5437989 L43.107602,66.8137308 C42.9247835,66.8602897 42.7415716,66.9052663 42.5579871,66.9486574 Z M47.4151556,65.3918844 L46.4028678,65.8060854 L45.5744658,63.7815098 L46.5867536,63.3673088 C46.7496513,63.3006554 46.9119931,63.2325777 47.0737619,63.1630807 L48.0786994,62.7313521 L48.9421566,64.7412272 L47.937219,65.1729558 C47.763805,65.2474557 47.5897778,65.3204337 47.4151556,65.3918844 Z M51.9718092,63.0955693 L51.0366129,63.6627526 L49.9022463,61.7923599 L50.8374426,61.2251766 C50.9877997,61.1339872 51.1374311,61.0414561 51.2863227,60.9475891 L52.2115523,60.3642888 L53.378153,62.214748 L52.4529234,62.7980483 C52.2933427,62.8986541 52.1329662,62.9978299 51.9718092,63.0955693 Z M56.1192497,60.1146289 L55.2832563,60.8198976 L53.8727188,59.1479106 L54.7087123,58.4426419 C54.8431876,58.3291946 54.9768104,58.2145067 55.1095693,58.0985838 L55.9334416,57.3791927 L57.3722238,59.0269373 L56.5483515,59.7463284 C56.406246,59.8704125 56.263208,59.9931815 56.1192497,60.1146289 Z M59.7503732,56.5416173 L59.0319866,57.3663656 L57.3824901,55.9295923 L58.1008768,55.104844 C58.2165866,54.9720026 58.3310721,54.8382605 58.4443266,54.7036298 L59.1484184,53.8666448 L60.8223884,55.2748283 L60.1182966,56.1118133 C59.9969675,56.2560426 59.8743239,56.399315 59.7503732,56.5416173 Z M65.5606353,23.0975995 L65.9575648,24.1167835 L63.9191968,24.9106425 L63.5222673,23.8914585 C63.4584521,23.7276022 63.3932082,23.5642801 63.3265401,23.4015093 L62.9119842,22.3893668 L64.9362692,21.5602549 L65.3508251,22.5723975 C65.4222906,22.7468812 65.492229,22.9219548 65.5606353,23.0975995 Z M63.2734902,18.1896983 L63.8247778,19.1343523 L61.93547,20.2369275 L61.3841824,19.2922736 C61.2955151,19.1403386 61.2054953,18.9891133 61.1141288,18.8386123 L60.5465375,17.9036635 L62.416435,16.7684809 L62.9840263,17.7034297 C63.0819585,17.8647458 63.1784486,18.0268406 63.2734902,18.1896983 Z M59.7506688,13.364156 L60.4852922,14.1744754 L58.8646534,15.6437222 L58.13003,14.8334028 C58.0118606,14.7030572 57.8924844,14.5736173 57.7719077,14.4450942 L57.023562,13.6474304 L58.6188897,12.1507388 L59.3672355,12.9484027 C59.4963278,13.0860025 59.6241413,13.2245911 59.7506688,13.364156 Z" id="fill" fill="#F19D76" fill-rule="nonzero" opacity="0.3"></path>
    </g>
</svg>
                                    &nbsp;
            </span>
                          <p class="block-title" style="color:#000000;">Delivery policy</p>
                    </div>
            <div style="cursor:pointer;" onclick="window.open('https://connexstore.co.za/content/3-terms-and-conditions-of-use')">
            <span class="item-product">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="70px" height="70px" viewBox="0 0 70 70" version="1.1" data-img-url="/modules/blockreassurance/views/img/reassurance/pack2/parcel.svg" class="svg replaced-svg">
    <!-- Generator: Sketch 53.2 (72643) - https://sketchapp.com -->
    <title>pack2_parcel</title>
    <desc>Created with Sketch.</desc>
    <g id="pack2_parcel" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <path d="M19.6875,35.6408493 C23.8323243,34.5517156 28.5551351,34.9084354 31.4267056,36.516514 C32.7151791,37.2380588 34.1821369,37.5270916 36.6900435,37.6835808 C36.9319823,37.6986773 37.1133791,37.7090555 37.5709959,37.7344997 C38.830563,37.8045336 39.4051314,37.8451772 40.1030671,37.9267598 C42.2407406,38.1766351 43.6532133,39.4015314 44.2362553,41.431302 L52.3894279,39.6901459 C54.9252702,39.1580916 56.8486068,39.6189939 57.9519146,41.198553 C59.0194043,42.7268329 59.0194043,44.438328 57.9878121,46.1216837 L57.7885153,46.4468969 L57.4302075,46.5776573 C49.5462217,49.4548285 44.1432676,51.3538628 41.2084581,52.2787524 C38.0872708,53.2623781 35.491893,53.2767157 33.4512595,52.2514796 L19.6835142,47.9329411 C19.6426596,48.3477843 19.2927713,48.671875 18.8671875,48.671875 L12.8515625,48.671875 C12.3985164,48.671875 12.03125,48.3046086 12.03125,47.8515625 L12.03125,35.2734375 C12.03125,34.8203914 12.3985164,34.453125 12.8515625,34.453125 L18.8671875,34.453125 C19.3202336,34.453125 19.6875,34.8203914 19.6875,35.2734375 L19.6875,35.6408493 L19.6875,35.6408493 Z M19.6875,37.9138259 L19.6875,45.6416023 L34.2868583,50.2209935 L34.3728522,50.2658553 C35.8399624,51.0312268 37.8892512,51.0312268 40.5509566,50.1924044 C43.3981174,49.2951368 48.6515105,47.4503535 56.2988674,44.6618553 C56.7055208,43.8428613 56.6503809,43.1552838 56.1585743,42.451185 C55.6404831,41.7094557 54.6030044,41.4608376 52.8424479,41.8302192 L44.5606045,43.5988601 C44.4824247,45.9237816 42.6727722,47.1949387 39.5736694,47.1949387 L34.0398979,47.1949387 C33.4358365,47.1949387 32.9461479,46.7052501 32.9461479,46.1011887 C32.9461479,45.4971272 33.4358365,45.0074387 34.0398979,45.0074387 L39.5736694,45.0074387 C41.5439289,45.0074387 42.3414536,44.5674087 42.3738457,43.4868845 L42.2978415,42.864374 C42.0824737,41.1004092 41.3231979,40.2717762 39.8490966,40.0994667 C39.2100464,40.0247673 38.6646555,39.9861876 37.4495551,39.9186262 C36.9868661,39.8929 36.8024226,39.8823475 36.5538122,39.8668346 C33.7406487,39.691298 32.0100165,39.3503136 30.3578861,38.4251211 C27.8915018,37.0439467 23.4364973,36.7754949 19.6875,37.9138259 L19.6875,37.9138259 Z M14.21875,36.640625 L14.21875,46.484375 L17.5,46.484375 L17.5,36.640625 L14.21875,36.640625 Z M23.7890625,35.0320309 L23.7890625,15.859375 C23.7890625,15.4063289 24.1563289,15.0390625 24.609375,15.0390625 L54.6875,15.0390625 C55.1405461,15.0390625 55.5078125,15.4063289 55.5078125,15.859375 L55.5078125,39.6044716 C55.0077348,39.4956284 53.9127655,39.4579926 53.3203125,39.4893487 L53.3203125,17.2265625 L44.0234375,17.2265625 L44.0234375,26.796875 C44.0234375,27.5146254 43.1667739,27.8862587 42.642667,27.3958737 L39.6887534,24.63202 L36.6461289,27.403332 C36.1193641,27.8831249 35.2734375,27.5093933 35.2734375,26.796875 L35.2734375,17.2265625 L25.9765625,17.2265625 L25.9765625,35.0318591 C25.436617,35.009025 24.3411112,35.0089417 23.7890625,35.0320309 Z M37.4609375,17.2265625 L37.4609375,23.84375 L39.2447729,22.0823504 C39.4977136,21.832591 39.8852125,21.8354065 40.1350425,22.0888189 L41.8359375,23.8141038 L41.8359375,17.2265625 L37.4609375,17.2265625 Z" id="color" fill="#F19D76" fill-rule="nonzero"></path>
        <path d="M67.9813127,35.4493932 C67.7891087,35.4436712 66.911277,35.4858071 65.3478176,35.575801 C64.6245677,35.5909574 64.0207506,35.0274752 63.9859478,34.3049042 C63.9511451,33.5823333 64.4980124,32.9634282 65.219371,32.9090049 C66.1511186,32.8444417 67.0828661,32.8125 67.9500506,32.8125 C68.2886972,32.8180574 68.6116031,32.9564456 68.8491768,33.1978398 C69.1115439,33.4742813 69.2505862,33.845306 69.2345166,34.2260922 C69.2498845,34.560302 69.1217281,34.8851549 68.8823174,35.1188531 C68.6429067,35.3525512 68.315054,35.4728263 67.9813127,35.4493932 Z M2.39496536,35.4467736 C1.66755809,35.4379531 1.08502839,34.8411226 1.09384886,34.1137154 C1.10266933,33.3863081 1.69949984,32.8037784 2.42690711,32.8125989 C3.32603333,32.8125989 4.22583915,32.8452202 5.09302362,32.9091037 C5.44568442,32.9168687 5.7796502,33.0692496 6.01663862,33.330528 C6.25362703,33.5918065 6.37280159,33.9390103 6.3462275,34.2907542 C6.32511604,35.0166193 5.72323354,35.5899996 4.99719837,35.5758998 L2.39496536,35.4467736 Z M36.4274108,2.34719672 L36.4274108,5.07787633 C36.4234418,5.42020148 36.28131,5.74639671 36.0332932,5.98238382 C35.7852764,6.21837094 35.452423,6.34412235 35.1103234,6.33108021 C34.4017803,6.34555757 33.8139758,5.78626378 33.793236,5.07787633 C33.7612942,4.14612876 33.7612942,3.24700254 33.793236,2.34719672 C33.7973868,2.00499019 33.9395982,1.6789713 34.1875945,1.44313164 C34.4355909,1.20729198 34.7683402,1.08163257 35.1103234,1.09467245 C35.4523066,1.08163257 35.7850559,1.20729198 36.0330522,1.44313164 C36.2810486,1.6789713 36.4232599,2.00499019 36.4274108,2.34719672 Z M35.0783816,68.9991749 C34.727899,69.0030358 34.3906447,68.8655118 34.142801,68.6176681 C33.8949574,68.3698244 33.7574333,68.0325701 33.7612942,67.6820875 C33.7293525,66.8142234 33.7293525,65.9150972 33.7612942,65.0152914 C33.7585202,64.6680184 33.8974538,64.3346256 34.1460163,64.0920912 C34.3945787,63.8495568 34.7312813,63.7188484 35.0783816,63.7301457 L35.1103234,63.7301457 C35.825437,63.7299354 36.410068,64.300388 36.4274108,65.0152914 L36.4274108,67.7140292 C36.4225048,68.0645185 36.2767192,68.3982785 36.0229253,68.640054 C35.7691313,68.8818295 35.4286966,69.0112647 35.0783816,68.9991749 Z M63.3834571,51.8037392 C63.2198646,51.7026818 62.438572,51.3002567 61.0395796,50.596464 C60.4056486,50.2479649 60.1644687,49.4580664 60.4956141,48.8149002 C60.8267596,48.171734 61.6098131,47.9091802 62.2617396,48.2227275 C63.1009382,48.632688 63.9238262,49.0708994 64.6748299,49.5044916 C64.9653278,49.6786278 65.1757784,49.9599284 65.2608262,50.2877688 C65.349822,50.6583577 65.2847238,51.0491956 65.080414,51.3709314 C64.9266181,51.6680495 64.653205,51.8853022 64.3290201,51.9679854 C64.0048353,52.0506685 63.660769,51.9909035 63.3834571,51.8037392 Z M6.58532398,19.0082969 C5.95978103,18.6369545 5.75371077,17.8288193 6.12505316,17.2032763 C6.49639554,16.5777334 7.30453078,16.3716631 7.93007372,16.7430055 C8.70873986,17.1925686 9.47168389,17.6707225 10.1907459,18.1596394 C10.4922767,18.3426945 10.705309,18.6416431 10.7799078,18.9864111 C10.8545066,19.3311791 10.7841128,19.6914537 10.5852271,19.9827858 C10.2040115,20.6008477 9.39607579,20.7964683 8.77436076,20.42124 L6.58532398,19.0082969 Z M52.6080747,7.35944514 L51.2427349,9.72428305 C51.0681351,10.0187609 50.7819477,10.2301883 50.4491653,10.3105507 C50.1163829,10.3909132 49.7652477,10.3333904 49.4755018,10.1510458 C48.8546468,9.80931197 48.6252401,9.03104712 48.9614726,8.40719567 C49.399684,7.58430773 49.8492471,6.80564159 50.3268124,6.04235776 C50.5015104,5.74807362 50.7876785,5.53683867 51.1203695,5.4565937 C51.4530604,5.37634873 51.8040595,5.43389915 52.0937057,5.61618361 C52.3963918,5.77588234 52.6217314,6.05108123 52.7185827,6.37932254 C52.815434,6.70756385 52.7755832,7.06101018 52.6080747,7.35944514 Z M18.1137921,64.4072369 C17.8083348,64.2353392 17.585026,63.9476128 17.494309,63.609052 C17.4035919,63.2704912 17.4531197,62.9096585 17.6317047,62.608062 C18.0379743,61.8404988 18.4875375,61.0618327 18.9651027,60.2985489 C19.1363368,59.9964146 19.4233533,59.7771547 19.7598819,59.691395 C20.0964105,59.6056353 20.4533577,59.6607899 20.7483067,59.8441238 L20.775969,59.8600947 C21.3953808,60.2174693 21.6164598,61.0038113 21.2740274,61.6316071 L19.9246584,63.9687827 C19.7451652,64.2698623 19.4520311,64.4860142 19.1113513,64.5685009 C18.7706716,64.6509877 18.4111289,64.5928645 18.1137921,64.4072369 Z M51.2244244,63.6680905 C51.1332778,63.4987759 50.6578711,62.7596193 49.7982045,61.4506207 C49.4234538,60.8318462 49.609535,60.0271841 50.2178985,59.6357585 C50.8262619,59.244333 51.6356831,59.4084815 52.0434944,60.0059846 C52.5652815,60.7806201 53.0588176,61.5715663 53.4924098,62.3225701 C53.6569203,62.6186254 53.6985255,62.9674642 53.6082589,63.2939062 C53.5000371,63.6593435 53.2482415,63.96527 52.9104361,64.1417464 C52.6286859,64.3221602 52.2832768,64.3736001 51.9611829,64.2831134 C51.639089,64.1926266 51.3710013,63.9688355 51.2244244,63.6680905 Z M18.4335193,6.86733775 C18.0774545,6.23297434 18.30306,5.43007356 18.9374234,5.07400868 C19.5717868,4.71794379 20.3746876,4.94354933 20.7307525,5.57791274 C21.1803156,6.35657888 21.6019676,7.15214426 21.9802351,7.93508979 C22.1498408,8.24438548 22.184858,8.60979878 22.0770784,8.945676 C21.9692988,9.28155322 21.7281988,9.55836333 21.4102926,9.71122143 C20.7711192,10.0558709 19.9736161,9.82131552 19.6228093,9.18550075 L18.4335193,6.86733775 Z M64.1148165,19.7905116 L61.7499786,21.1558514 C61.4515318,21.3235767 61.0979726,21.3635846 60.7695933,21.2667893 C60.4412141,21.169994 60.1658835,20.9446102 60.0061285,20.6418222 C59.6393192,20.0354445 59.8297796,19.2467441 60.4328912,18.8745891 C61.2238374,18.381053 62.0025035,17.9314899 62.7977291,17.5092493 C63.0961641,17.3417408 63.4496104,17.30189 63.7778517,17.3987413 C64.106093,17.4955926 64.3812919,17.7209322 64.5409906,18.0236183 C64.7232751,18.3132645 64.7808255,18.6642635 64.7005805,18.9969545 C64.6203356,19.3296455 64.4091006,19.6158136 64.1148165,19.7905116 Z M5.71799563,51.9482071 C5.53941068,51.6466107 5.48988283,51.285778 5.58059992,50.9472172 C5.671317,50.6086564 5.89462576,50.32093 6.20008307,50.1490323 C6.93570454,49.6874379 7.71437068,49.2378748 8.50959626,48.8156343 C8.80895645,48.6395953 9.16714992,48.593219 9.5014721,48.6872132 C9.83579428,48.7812074 10.1173424,49.0074462 10.2811087,49.3136926 L10.2970796,49.3413549 C10.6548186,49.9605564 10.4531076,50.7520879 9.84265451,51.1245589 L7.50547896,52.4739278 C7.19949344,52.6449238 6.83755591,52.6855498 6.50127521,52.5866455 C6.16499451,52.4877413 5.88268301,52.2576338 5.71799563,51.9482071 Z M53.59375,39.5724919 C53.3794745,39.603906 53.1602778,39.6431529 52.9363029,39.6901459 L44.7831303,41.431302 C44.2000883,39.4015314 42.7876156,38.1766351 40.6499421,37.9267598 C39.9520064,37.8451772 39.377438,37.8045336 38.1178709,37.7344997 C37.6602541,37.7090555 37.4788573,37.6986773 37.2369185,37.6835808 C34.7290119,37.5270916 33.2620541,37.2380588 31.9735806,36.516514 C30.5880387,35.740611 28.7715108,35.2560359 26.796875,35.0846367 L26.796875,17.5 L53.59375,17.5 L53.59375,39.5724919 L53.59375,39.5724919 Z" id="fill" fill="#F19D76" fill-rule="nonzero" opacity="0.3"></path>
    </g>
</svg>
                                    &nbsp;
            </span>
                          <p class="block-title" style="color:#000000;">Return policy</p>
                    </div>
        <div class="clearfix"></div>
</div>

            </div>
          </div>
        </section>
      
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
</div><a href="javascript:void(0);" id="scroll_top" title="Scroll to Top" style="display: inline;"></a>
<!--Start of tawk.to Script-->
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
<!--End of tawk.to Script-->
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
      <form action=" method="post">
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

    
        <script type="text/javascript" src="https://connexstore.co.za/themes/AngarTheme/assets/cache/bottom-a22ed127.js"></script>
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
					pagetime.append("id_page", "1819");
					pagetime.append("time_start", "2023-05-23 02:52:13");
					pagetime.append("token", "6be5596edc8bc99b585e4510f77e3af0ce338c58");
					pagetime.append("time", time_end-time_start);
					pagetime.append("ajax", "1");
					navigator.sendBeacon("https://connexstore.co.za/index.php?controller=statistics", pagetime);
				});
			</script> <script type="text/javascript">
            
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof GoogleAnalyticEnhancedECommerce !== 'undefined') {
                var MBG = GoogleAnalyticEnhancedECommerce;
                MBG.setCurrency('ZAR');
                MBG.addCheckoutOption(2,'');MBG.addCheckout('0');
            }
        });
        
    </script>

    

	</main>

  

<div id="roja45quotationspro-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
</div><ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all" id="ui-id-1" tabindex="0" style="display: none;"></ul><script async="" charset="UTF-8" src="https://embed.tawk.to/_s/v4/app/642b759ae8c/languages/en.js"></script><div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div></div></div><div id="dk7l7toojoqo1684803141745" class="widget-visible"><iframe src="about:blank" frameborder="0" scrolling="no" width="64px" height="60px" style="outline:none !important; visibility:visible !important; resize:none !important; box-shadow:none !important; overflow:visible !important; background:none !important; opacity:1 !important; filter:alpha(opacity=100) !important; -ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity 1}) !important; -mz-opacity:1 !important; -khtml-opacity:1 !important; top:auto !important; right:20px !important; bottom:20px !important; left:auto !important; position:fixed !important; border:0 !important; min-height:60px !important; min-width:64px !important; max-height:60px !important; max-width:64px !important; padding:0 !important; margin:0 !important; -moz-transition-property:none !important; -webkit-transition-property:none !important; -o-transition-property:none !important; transition-property:none !important; transform:none !important; -webkit-transform:none !important; -ms-transform:none !important; width:64px !important; height:60px !important; display:block !important; z-index:1000001 !important; background-color:transparent !important; cursor:none !important; float:none !important; border-radius:unset !important; pointer-events:auto !important; clip:auto !important; color-scheme:light !important;" id="lu1qpd2c6j2o1684803141774" class="" title="chat widget"></iframe><iframe src="about:blank" frameborder="0" scrolling="no" width="350px" height="520px" style="outline:none !important; visibility:visible !important; resize:none !important; box-shadow:none !important; overflow:visible !important; background:none !important; opacity:1 !important; filter:alpha(opacity=100) !important; -ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity 1}) !important; -mz-opacity:1 !important; -khtml-opacity:1 !important; top:auto !important; right:10px !important; bottom:90px !important; left:auto !important; position:fixed !important; border:0 !important; min-height:520px !important; min-width:350px !important; max-height:520px !important; max-width:350px !important; padding:0 !important; margin:0 !important; -moz-transition-property:none !important; -webkit-transition-property:none !important; -o-transition-property:none !important; transition-property:none !important; transform:none !important; -webkit-transform:none !important; -ms-transform:none !important; width:350px !important; height:520px !important; display:none !important; z-index:auto !important; background-color:transparent !important; cursor:none !important; float:none !important; border-radius:5px !important; pointer-events:auto !important; clip:auto !important; color-scheme:light !important;" id="j4lg7hi056g1684803141823" class="" title="chat widget"></iframe><iframe src="about:blank" frameborder="0" scrolling="no" width="360px" height="55px" style="outline:none !important; visibility:visible !important; resize:none !important; box-shadow:none !important; overflow:visible !important; background:none !important; opacity:1 !important; filter:alpha(opacity=100) !important; -ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity 1}) !important; -mz-opacity:1 !important; -khtml-opacity:1 !important; top:auto !important; right:20px !important; bottom:100px; left:auto !important; position:fixed !important; border:0 !important; min-height:55px !important; min-width:360px !important; max-height:55px !important; max-width:360px !important; padding:0 !important; margin:0 !important; -moz-transition-property:none !important; -webkit-transition-property:none !important; -o-transition-property:none !important; transition-property:none !important; transform:none !important; -webkit-transform:none !important; -ms-transform:none !important; width:360px !important; height:55px !important; display:none !important; z-index:auto !important; background-color:transparent !important; cursor:none !important; float:none !important; border-radius:unset !important; pointer-events:auto !important; clip:auto !important; color-scheme:light !important;" id="f4d2kd2erhmo1684803141807" class="" title="chat widget"></iframe><iframe src="about:blank" frameborder="0" scrolling="no" width="124px" height="95px" style="outline:none !important; visibility:visible !important; resize:none !important; box-shadow:none !important; overflow:visible !important; background:none !important; opacity:1 !important; filter:alpha(opacity=100) !important; -ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity 1}) !important; -mz-opacity:1 !important; -khtml-opacity:1 !important; top:auto !important; right:0px !important; bottom:30px !important; left:auto !important; position:fixed !important; border:0 !important; min-height:95px !important; min-width:124px !important; max-height:95px !important; max-width:124px !important; padding:0 !important; margin:0px 0 0 0 !important; -moz-transition-property:none !important; -webkit-transition-property:none !important; -o-transition-property:none !important; transition-property:none !important; transform:rotate(0deg) translateZ(0); -webkit-transform:rotate(0deg) translateZ(0); -ms-transform:rotate(0deg) translateZ(0); width:124px !important; height:95px !important; display:none !important; z-index:1000002 !important; background-color:transparent !important; cursor:none !important; float:none !important; border-radius:unset !important; pointer-events:auto !important; clip:auto !important; color-scheme:light !important; -moz-transform:rotate(0deg) translateZ(0); -o-transform:rotate(0deg) translateZ(0); transform-origin:0; -moz-transform-origin:0; -webkit-transform-origin:0; -o-transform-origin:0; -ms-transform-origin:0;" id="za59a9fvfeso1684803141791" class="" title="chat widget"></iframe></div></body></html>