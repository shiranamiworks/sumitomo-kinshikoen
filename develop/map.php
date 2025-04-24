<!doctype html><?php
 $page_settings = array(
  "directory_pos" => "./",
  "page_id" => "map",
  "gnav_set" => "map",
  "page_class" => "map",
  "url" => "map.html",
  "title" => "���n�ē��}�b",
  "keywords" => "���n�ē��},",
  "description" => "���n�ē��}�y�[�W�B",
  "add_stylesheet" => ["css/map.css"],
  "add_script" =>  ["js/map.js"],
  "canonical_page_id" => "map",  
  "logo_text" => "���n�ē��}�b"
);
?>

<?php require(INCLUDES."header.php"); ?>

<main>
<section id="submaincontainer">
            	<h2 class="ttl"><img src="images/map/ttl.jpg" alt="���n�ē��}"></h2>
            	<div class="mapArea"><img src="images/map/map.jpg" alt="���n�ē��}" id="map1"></div>
				<p class="zip">�����s�n�c�摾��4����4<br><span>���Z���\���ł͂���܂���B</span></p>
				<div id="btnArea">
					<div id="GoogleMap"><a href="https://www.google.com/maps/place/%E3%82%B7%E3%83%86%E3%82%A3%E3%82%BF%E3%83%AF%E3%83%BC%E9%8C%A6%E7%B3%B8%E5%85%AC%E5%9C%92/@35.6991789,139.8135708,16z/data=!4m6!3m5!1s0x6018890008ceea2d:0x1385e81936f7a4c!8m2!3d35.701231!4d139.818736!16s%2Fg%2F11vwmqz8qf?entry=ttu&g_ep=EgoyMDI1MDQyMS4wIKXMDSoJLDEwMjExNDUzSAFQAw%3D%3D" target="_blank"><img src="images/map/btn_googlemap.jpg" alt="Google Map"></a></div>
					<div id="PrintMap"><a href="JavaScript:;" onclick="print_out(); return false;"><img src="images/map/btn_print.jpg" alt="���" class="pc"></a></div>
				</div>

	            <div class="container">
	                <p class="txt">���f�ڂ̒n�}�͈ꕔ���H�E�{�ݓ��𔲐����Ă��܂��B</p>
	            </div>
            </section>
</main>

<?php require(INCLUDES."footer.php"); ?>
</body>
</html>
