<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Notebook - Free HTML Template</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link href="css/tooplate_style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="scripts/contentslider.js">

</script>
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/coda-slider.css" type="text/css" charset="utf-8" />

<script src="js/jquery-1.2.6.js" type="text/javascript"></script>
<script src="js/jquery.scrollTo-1.3.3.js" type="text/javascript"></script>
<script src="js/jquery.localscroll-1.2.5.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.serialScroll-1.2.1.js" type="text/javascript" charset="utf-8"></script>
<script src="js/coda-slider.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>

</head>
<body>
	
<div id="slider">
	<div id="tooplate_wrapper">
        <div id="tooplate_sidebar">
		
            <div id="header">
                <h1><a href="#"><img src="images/tooplate_logo.png" title="Notebook Template - tooplate.com" alt="Notebook free html template" /></a></h1>
            </div>    
			
            <div id="menu">
                <ul class="navigation">
                    <li><a href="#home" class="selected menu_01">Home</a></li>
                    <li><a href="#aboutus" class="menu_02">Cont.....</a></li>

                </ul>
            </div>
			</div> <!-- end of sidebar -->  
    
        <div id="content">
          <div class="scroll">
            <div class="scrollContainer">
              <div class="panel" id="home">
                <div class="content_section">
			<div id="mid_slider">
        	<div id="slider1" class="sliderwrapper">

                <div class="contentdiv">
                    <img src="images/slider/1.jpg" alt="Image 00" />
                </div>
    
                <div class="contentdiv">
                    <img src="images/slider/2.jpg" alt="Image 01" />
                </div>            
                
                <div class="contentdiv">
                    <img src="images/slider/3.jpg" alt="Image 02" />
                </div>
                
                <div class="contentdiv">
                    <img src="images/slider/4.jpg" alt="Image 03" />
                </div>
                <div class="contentdiv">
                    <img src="images/slider/5.jpg" alt="Image 03" />
                </div>
                <div class="contentdiv">
                    <img src="images/slider/6.jpg" alt="Image 03" />
                </div>
                <div class="contentdiv">
                    <img src="images/slider/7.jpg" alt="Image 03" />
                </div>
                <div class="contentdiv">
                    <img src="images/slider/8.jpg" alt="Image 03" />
                </div>
                <div class="contentdiv">
                    <img src="images/slider/9.jpg" alt="Image 03" />
                </div>
                <div class="contentdiv">
                    <img src="images/slider/10.jpg" alt="Image 03" />
                </div>

            
            </div>
            
            <div id="paginate-slider1" class="pagination">
            
          </div>
            
            <script type="text/javascript">
            
            featuredcontentslider.init({
                id: "slider1",  //id of main slider DIV
                contentsource: ["inline", ""],  //Valid values: ["inline", ""] or ["ajax", "path_to_file"]
                toc: "#increment",  //Valid values: "#increment", "markup", ["label1", "label2", etc]
                nextprev: ["", ""],  //labels for "prev" and "next" links. Set to "" to hide.
                revealtype: "click", //Behavior of pagination links to reveal the slides: "click" or "mouseover"
                enablefade: [true, 0.2],  //[true/false, fadedegree]
                autorotate: [true, 3000],  //[true/false, pausetime]
                onChange: function(previndex, curindex){  //event handler fired whenever script changes slide
                    //previndex holds index of last slide viewed b4 current (1=1st slide, 2nd=2nd etc)
                    //curindex holds index of currently shown slide (1=1st slide, 2nd=2nd etc)
                }
            })
            
            </script>
        </div>


                  <h2>Welcome to PriceBook </h2>
       <form class= action="index.php" method="get">
 <p>
 <input name="searchdata" class="sfield"type="text" required>
 <p>
 <input id="search" type="submit" class="sbutton"value="Search">
 </form>
	<input=>
	<?php
error_reporting(E_ALL & ~E_NOTICE);
if(isset($_GET['searchdata']))
{
$search = $_GET['searchdata'];
$search = strtolower($search);
$search = str_replace(" ","+",$search);
$web_page_data = file_get_contents("http://www.pricetree.com/search.aspx?q=".$search);
$item_list = explode('<div class="items-wrap">', $web_page_data); 
$i=1;
  if(sizeof($item_list)<2){
    echo '<p><b>No results, enter proper product name Ex: Moto G</b></p>';
    $i=5;
  }
$count = 4;
    for($i;$i<5;$i++){
    $url_link1 = explode('href="',$item_list[$i]);
    $url_link2 = explode('"', $url_link1[1]); //$url_link1[0] will be before http=" data
    $image_link1 = explode('data-original="',$item_list[$i]);
    $image_link2 = explode('"', $image_link1[1]); //$image_link1[0] will be before data-original=" data
    $title1 = explode('title="', $item_list[$i]);
    $title2 = explode('"', $title1[1]);
    $avaliavle1 = explode('avail-stores">', $item_list[$i]);
    $avaliable = explode('</div>', $avaliavle1[1]);
    if(strcmp($avaliable[0],"Not available") == 0) {
      $count = $count-1;
      continue;
    }

    $item_title = $title2[0];
    if(strlen($item_title)<2){
      continue;
    }
    $item_link = $url_link2[0];
    $item_image_link = $image_link2[0];
    $item_id1 = explode("-", $item_link);
    $item_id = end($item_id1); //split with "-" and print last one after split that is id
    echo '
    <br>
    <div>
    <div id="image" style="background:none;color:white;">
    <img src="'.$item_image_link.'" style="width:30%">
    <h5>'.$item_title.'</h5>
    </div>
  ';
    $request = "http://www.pricetree.com/dev/api.ashx?pricetreeId=".$item_id."&apikey=7770AD31-382F-4D32-8C36-3743C0271699";
    $response = file_get_contents($request);
    $results = json_decode($response, TRUE);
    echo '
    <div id="details">
      <table>
          <thead>
      <tr>
        <th>Seller_Name</th>
        <th>Price</th>
        <th>Buy Here</th>
      </tr>
      </thead>
       
          ';
    foreach ($results['data'] as $itemdata) {
      $seller = $itemdata['Seller_Name'];
      $price = $itemdata['Best_Price'];
      $product_link = $itemdata['Uri'];
  echo '
    
      <tr>
        <td>'.$seller.'</td>
        <td>'.$price.'</td>
        <td><a href="'.$product_link.'">Buy</a></td>
  </tr>
      ';
    }
    echo '
      </table>
      </div>
    ';
  }
  if($count == 0){
    echo '<p><b>No Products avaliable, Enter Proper Product Ex: Moto G</b></p>';
  }
}
else {
  echo '<p>Use this to get Best Price from all Sites. <b>Search Product to Know Price from All Online Shops</b></p>';
}
?>
 </div>
                <div class="content_section last_section">
                  <h2></h2>
              
                </div>
              </div> 
			  
              <div class="panel" id="aboutus">
                <div class="content_section">
                  </div>
				
                <div class="content_section last_section">
                 </div>
              </div> 
			  
                              <div class="col_380 float_r"> </div>
              </div>
            </div>
          </div><!-- end of scroll -->
		</div>
    </div> <!-- end of content -->
</div>

<div id="footer">
    
	<div id="social_box">
		
    </div>
    
   
	
    <div class="cleaner"></div>
</div>
<!--   Free Website Template by t o o p l a t e . c o m   -->
</body>
<span id="cdSiteSeal1"><script type="text/javascript" src="//tracedseals.starfieldtech.com/siteseal/get?scriptId=cdSiteSeal1&amp;cdSealType=Seal1&amp;sealId=55e4ye7y7mb734321b60c5b876fa135djn9y7mb7355e4ye74743fb359f277844"></script></span>
</html>