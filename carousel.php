		 <div class = 'row'>
		
		
			<div class = 'hero-unit'>
				<div id = 'myCarousel' class = 'carousel slide'>
				
					<ol class = 'carousel-indicators'>
						<li data-target = '#myCarousel' data-slide-to = '0' class = 'active'></li>
						<li data-target = '#myCarousel' data-slide-to = '1'></li>
		
					</ol>
				<div class = 'carousel-inner'>
				
					<div class = 'item active'>
					<img src = 'bootstrap\img\Whitesands.jpg' alt = 'Beest' class = 'img-responsive'>			
					</div>
					
					<div class = 'item'>
					<img src = 'bootstrap\img\Sunset.jpg' alt = 'sunset' class = 'img-responsive'>
					</div>	
					
					<div class = 'item'>
					<img src = 'bootstrap\img\TropicalBeach.jpg' alt = 'TropicalBeach' class = 'img-responsive'>
					</div>
						
				</div>
				<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div>
		</div>
	</div>
	</div> 

<script>
$('.carousel').carousel('cycle');
</script>