<!doctype html><?php
 $page_settings = array(
  "directory_pos" => "./",
  "page_id" => "map",
  "gnav_set" => "map",
  "page_class" => "map",
  "url" => "map.html",
  "title" => "現地案内図｜",
  "keywords" => "現地案内図,",
  "description" => "現地案内図ページ。",
  "add_stylesheet" => ["css/map.css"],
  "add_script" =>  ["js/map.js"],
  "canonical_page_id" => "map",  
  "logo_text" => "現地案内図｜"
);
?>

<?php require(INCLUDES."header.php"); ?>

<main>
<section id="submaincontainer">
            	<h2 class="ttl"><img src="images/map/ttl.jpg" alt="現地案内図"></h2>
            	<div class="mapArea"><img src="images/map/map.jpg" alt="現地案内図" id="map1"></div>
				<p class="zip">東京都墨田区太平4丁目4<br><span>※住居表示ではありません。</span></p>
				<div id="btnArea">
					<div id="GoogleMap"><a href="https://www.google.com/maps/place/%E3%82%B7%E3%83%86%E3%82%A3%E3%82%BF%E3%83%AF%E3%83%BC%E9%8C%A6%E7%B3%B8%E5%85%AC%E5%9C%92/@35.6991789,139.8135708,16z/data=!4m6!3m5!1s0x6018890008ceea2d:0x1385e81936f7a4c!8m2!3d35.701231!4d139.818736!16s%2Fg%2F11vwmqz8qf?entry=ttu&g_ep=EgoyMDI1MDQyMS4wIKXMDSoJLDEwMjExNDUzSAFQAw%3D%3D" target="_blank"><img src="images/map/btn_googlemap.jpg" alt="Google Map"></a></div>
					<div id="PrintMap"><a href="JavaScript:;" onclick="print_out(); return false;"><img src="images/map/btn_print.jpg" alt="印刷" class="pc"></a></div>
				</div>

	            <div class="container">
	                <p class="txt">※掲載の地図は一部道路・施設等を抜粋しています。</p>
	            </div>
            </section>
</main>

<?php require(INCLUDES."footer.php"); ?>
</body>
</html>
