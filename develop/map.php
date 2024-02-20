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
					<div id="GoogleMap"><a href="https://maps.app.goo.gl/pXQe8xz8C3nj3Sa19" target="_blank"><img src="images/map/btn_googlemap.jpg" alt="Google Map"></a></div>
					<div id="PrintMap"><a href="JavaScript:;" onclick="print_out(); return false;"><img src="images/map/btn_print.jpg" alt="印刷" class="pc"></a></div>
				</div>

	            <div class="container">
	                <p class="txt">※1.都営三田線・浅草線「三田」駅A7出口徒歩10分。公園ルートの場合（イベント実施時除く）であり、公道ルートの場合はA9出口徒歩13分。<br>※掲載の地図は一部道路・施設等を抜粋しています。</p>
	            </div>
            </section>
</main>

<?php require(INCLUDES."footer.php"); ?>
</body>
</html>
