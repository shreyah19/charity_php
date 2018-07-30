<?php
$slider = [
									[
										'image_src'=>"images/slider/banner.jpg",
										'image_alt'=>"image description",
									],
									[
										'image_src'=>"images/slider/bannervivekanandquote.jpg",
										"image_alt"=>"image description"
									],
									[
										'image_src'=>"images/slider/indianss2.jpg",
										"image_alt"=>"image description"
									]
								 ];
?>      
	  <div class="clearfix"></div>
                <div class="container">
                     <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                           <div class="tg-homebannervtwo">
                              <div id="tg-homeslider" class="tg-homeslider owl-carousel tg-btnround tg-haslayout">
                                 <?php
								 foreach($slider as $key=>$row){
									 echo "<div class=\"item\">
                                    <figure>
                                       <img src=\"{$row['image_src']}\" alt=\"{$row['image_alt']}\">
                                    </figure>
                                 </div>";
								 }
								 ?>
                              </div>
                           </div>
                        </div>
                     </div>
                 </div>