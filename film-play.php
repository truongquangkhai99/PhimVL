
<?php
	include 'core/Connect.php';
	
	$query = null;
	$link = null;
	$filmID = null;
	$isFilmBo = false;
	
	if(isset($_REQUEST['filmBoID'])){
		$filmID = ($_REQUEST['filmBoID']);
		$query = "SELECT * FROM film_bo WHERE film_bo_id = '".$filmID."' ";
		$isFilmBo = true;
	}
	elseif(isset($_REQUEST['filmLeID'])){
		$filmID = ($_REQUEST['filmLeID']);
		$query = "SELECT * FROM film_le WHERE film_le_id = '".$filmID."' ";
	}
	
	$result = mysql_query( $query, $my_connect);
	$row = mysql_fetch_array($result);
	
	
?>



<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1&appId=531718326909547";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<div class="eps pull-left">
	<span>Danh sách tập: </span>
	<ul class="list-inline">
		<?php
			if($isFilmBo){
				$qr = "SELECT * FROM film_bo_ct WHERE film_bo_ct_id = '".$filmID."' ";
				$rs = mysql_query( $qr, $my_connect);
				while($rw = mysql_fetch_array($rs)){
					echo '<li><a href="index.php?filmPlay=1&filmBoID='.$filmID.'&ep='.$rw[1].'">Tập '.$rw[1].'</a></li>';
				}
				mysql_free_result($rs);
			}
			
		?>
	</ul>
</div>
<div class="pull-right" style="width: 300px; border: 1px solid #000">
	<a href="#" 
	  onclick="
	    window.open(
	      'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('https://www.facebook.com/ltloi'), 
	      'facebook-share-dialog', 
	      'width=626,height=436'); 
	    return false;">
	    Share
	  <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-colorscheme="light" data-layout="standard" data-action="like" data-show-faces="false" data-send="false"></div>
	</a>
</div>
<div class="clearfix"></div>

<div class="">
	<h1 class="text-primary"><?= $row[2]?> - <?= $row[1]?> - <?= $row[3]?></h1>
	<div class="fb-comments" data-href="http://example.com/comments" data-colorscheme="dark" data-numposts="10" data-width="1040"></div>
</div>




<div class="list-film">
	<div class="list-film-header">
		<p class="title">
			Bạn đã xem chưa?
		</p>
	</div>
	<div class="list-film-body">
		<ul class="film-show-list-ul list-unstyled " style="font-size: 14px">
			<li>
				<a href=""> 
					<img class="poster" src="images/film/thumbnail/nguoi-sat-3-2013.jpg" alt='abc' /> 
				</a>
				
				<div class="name">
					<span class="name_vi"> <a href="">Nam Dam Huyen Thoai</a> </span>
					<br>
					<span class="name_en"> <a href="">First of Legend</a> </span>
					<br>
					<span > <a href="">2013</a> </span>
				</div>
			</li>
			
			<li>
				<a href=""> 
					<img class="poster" src="images/film/thumbnail/nguoi-sat-3-2013.jpg" alt='abc' /> 
				</a>
				
				<div class="name">
					<span class="name_vi"> <a href="">Nam Dam Huyen Thoai</a> </span>
					<br>
					<span class="name_en"> <a href="">First of Legend</a> </span>
					<br>
					<span > <a href="">2013</a> </span>
				</div>
			</li>
			
			<li>
				<a href=""> 
					<img class="poster" src="images/film/thumbnail/nguoi-sat-3-2013.jpg" alt='abc' /> 
				</a>
				
				<div class="name">
					<span class="name_vi"> <a href="">Nam Dam Huyen Thoai</a> </span>
					<br>
					<span class="name_en"> <a href="">First of Legend</a> </span>
					<br>
					<span > <a href="">2013</a> </span>
				</div>
			</li>
			
			<li>
				<a href=""> 
					<img class="poster" src="images/film/thumbnail/nguoi-sat-3-2013.jpg" alt='abc' /> 
				</a>
				
				<div class="name">
					<span class="name_vi"> <a href="">Nam Dam Huyen Thoai</a> </span>
					<br>
					<span class="name_en"> <a href="">First of Legend</a> </span>
					<br>
					<span > <a href="">2013</a> </span>
				</div>
			</li>
			
			<li>
				<a href=""> 
					<img class="poster" src="images/film/thumbnail/nguoi-sat-3-2013.jpg" alt='abc' /> 
				</a>
				
				<div class="name">
					<span class="name_vi"> <a href="">Nam Dam Huyen Thoai</a> </span>
					<br>
					<span class="name_en"> <a href="">First of Legend</a> </span>
					<br>
					<span > <a href="">2013</a> </span>
				</div>
			</li>
			
			<li>
				<a href=""> 
					<img class="poster" src="images/film/thumbnail/nguoi-sat-3-2013.jpg" alt='abc' /> 
				</a>
				
				<div class="name">
					<span class="name_vi"> <a href="">Nam Dam Huyen Thoai</a> </span>
					<br>
					<span class="name_en"> <a href="">First of Legend</a> </span>
					<br>
					<span > <a href="">2013</a> </span>
				</div>
			</li>
			
			<div class="clearfix"></div>
		</ul>
	</div>
	
	<div class="list-film-footer">
		<div class="divider"></div>
	</div>
</div>
<div class="clearfix"></div>
