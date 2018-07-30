        <?php
$galary = [
									[
										'image_src'=>"images/brands/IMG1.jpg",
										'image_alt'=>"image description",
									],
									[
										'image_src'=>"images/brands/IMG2.jpg",
										"image_alt"=>"image description"
									],
									[
										'image_src'=>"images/brands/IMG3.jpg",
										"image_alt"=>"image description"
									],
									[
										'image_src'=>"images/brands/IMG4.jpg",
										"image_alt"=>"image description"
									],
									[
										'image_src'=>"images/brands/IMG5.jpg",
										"image_alt"=>"image description"
									],
									[
										'image_src'=>"images/brands/IMG6.jpg",
										"image_alt"=>"image description"
									]
								 ];
?>          
			   
			   
			   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                 <section class="tg-sectionspace tg-haslayout">
                                    <div class="tg-affiliationscertifications">
                                       <div class="tg-borderheading">
                                          <h2>OUR GALLERY</h2>
                                       </div>
                                       <div id="tg-affiliationscertificationsslider" class="tg-affiliationscertificationsslider owl-carousel">
									   
									   <?php
								 foreach($galary as $key=>$row){
									 echo "<div class=\"item\">
                                    <figure>
                                       <img src=\"{$row['image_src']}\" alt=\"{$row['image_alt']}\">
                                    </figure>
                                 </div>";
								 }
								 ?>
                                       </div>
                                    </div>
                                 </section>
                </div>