<?php
	mysqli_set_charset($conn1,"utf8");
	$sql134 = "SELECT * FROM article where no='$urliArr[1];'";
$result134 = mysqli_query($conn1, $sql134);
if (mysqli_num_rows($result134) > 0) {
    while($row = mysqli_fetch_assoc($result134)) {
    
		 $no = $row["no"];
		  $description_en = $row["description_en"];
			 $description = $row["description"];
		  $titlex = $row["title"];  
		  $ch_title = $row["ch_title"];  
		  $pic1 = $row["pic1"];  
		  $pic2 = $row["pic2"];  
		   $title3x=str_replace(" ","-",$titlex);
		  }}
		  
		  ?>
    
	
    
    <section class="parallax-window" data-parallax="scroll" data-image-src="<?=$pic1;?>" data-natural-width="1400" data-natural-height="470">
		
		
		
		<div class="parallax-content-1">
			<div class="animated fadeInDown">
				<h1><?=$titlex;?></h1>
		
			</div>
		</div>
	</section>
    
    
	<main>
    <div id="position">
			<div class="container">
				<ul>
					<li><a href="<?=$_path;?>index">Home</a>
					</li>
					<li><a href="#"><?=$titlex;?></a>
					</li>
					
				</ul>
			</div>
		</div>
		<!-- Position -->
        
        
    <div class="container margin_60">
 
    
    <br>
   <div class="row">
   
   <?php

					function PaginateData($start,$perPage,$total,$page){         

if($total >= 1){ 

//echo "<div class='pagination'><ul>";             //for previous             

$previous = $start - $perPage;             

if($start > 0 and $start < ($total - $perPage)) 

echo "<li><a href=\"$page$previous\">Prev</a></li>&nbsp;";             

else if($start > 0 and $start >= ($total - $perPage))                 

echo "<li><a href=\"$page$previous\">Prev</a></li>&nbsp;"; 

//complete previous             

//echo "<span class='style12'>&nbsp;Page : | </span>"; 

$l = 1;             

for($i = 0; $i < $total; $i = $i + $perPage){                 

if($i != $start) 

$a[$l] = "<li><a href=\"$page$i\">$l</a></li>&nbsp;";                 

else 

$a[$l] = "<li class='active'><a href=\"$page$i\">$l</a></li>&nbsp;";                 

$l++;             

} 

foreach($a as $p=>$pp)                 

echo $pp;             

//for next             

//echo " <span class='style12'>|</span> "; 

$next = $start + $perPage;

if(($start == 0) and $total > $perPage)

echo "<li><a href=\"$page$next\">Next</a></li>";             

else if($start > 0 and $start < ($total - $perPage))                 

echo "<li><a href=\"$page$next\">Next</a></li>";  

//complete next 

}         

//echo "</ul></div>";     

}     

//paging 

$perPage = 12; 

$mailname=1;

$total = 0;     
$start=$urliArr[3];
//if(isset($_GET['start'])){$start = $_GET['start'];}     
if($start==""){
$start = 0;
}
//else{$start = 0;} 

$num=$start+1;

	$rsC = "SELECT * FROM article where parent_cat='$no' and published_show='YES' order by datecreate desc";
$result11 = mysqli_query($conn1, $rsC);
$total = mysqli_num_rows($result11);
	
	
		$sql134 = "SELECT * FROM article where parent_cat='$no' and published_show='YES' order by datecreate desc LIMIT $start, $perPage";
$result134 = mysqli_query($conn1, $sql134);
if (mysqli_num_rows($result134) > 0) {
    while($row = mysqli_fetch_assoc($result134)) {

       $datecreate = $row["datecreate"];	
        $id = $row["no"];
 $title = $row["title"];
  $title_cn = $row["ch_title"];
	$pic_url = $row["pic2"];	
   $description = $row["description_en"];
      $description_cn= $row["description"];
   $video= $row["video_link"];
   $title3=str_replace(" ","-",$title);
?>


				<div class="col-md-3 col-sm-5 wow zoomIn" data-wow-delay="0.1s">
					<div class="tour_container">
						
						<div class="img_container">
							<a href="<?=$_path;?>article-detail/<?=$id;?>/<?=$title3;?>">
								<img src="<?=$pic_url;?>" class="img-responsive" alt="image" style="width: 100%;
	white-space: nowrap;
	overflow-x: overlay;
	height: 240px;   -o-object-fit: cover;
    object-fit: cover;">
							<div class="short_info">
									<span class="price" style="font-size:12px"><?=$datecreate;?></span>
								</div>
							</a>
						</div>
						<div class="tour_title" style="height:70px">
							<h4 style="font-size:14px"><strong><?=$title;?></strong></h4>
						
							
						</div>
					</div>
					<!-- End box tour -->
				</div>
				<!-- End col-md-4 -->

				

			
<?php $i++;}} ?>
			 <?php

						if($total >= 1){

if($total < $perPage){$perPage = $total;}  

?>

							<!--<p><?php //echo "Displaying " . ($start + 1) . " - " . ($start + $numRows) . " of $total" ?></p>-->

                            <?php } ?>	
  <div class="row">
   <div class="col-md-12 ">
					<div class="text-center">
						<ul class="pagination">
                        
                          <?php
$urls=$baseurl."gtrip/$urliArr[1]/$title3x/";
								PaginateData($start, $perPage, $total,$urls);

								?>
							<!-- <li><a href="#">Prev</a>
							</li>
							<li class="active"><a href="#">1</a>
							</li>
							<li><a href="#">2</a>
							</li>
							<li><a href="#">3</a>
							</li>
							<li><a href="#">4</a>
							</li>
							<li><a href="#">5</a>
							</li>
							<li><a href="#">Next</a>
							</li>-->
						</ul>
					</div>
					<!-- end pagination-->

			
</div></div>
			</div>
			<!-- End row -->
		  
</div>
		

		
	</main>
	<!-- End main -->
 