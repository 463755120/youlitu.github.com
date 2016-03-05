<?php 
	header("Content-Type:text/html; charset=utf-8");
	echo '<div class="m-container" >
			<!-- view -->
			<div class="c-carousel">
				<div class="c-inner">
					<div class="c-item">
						<img src="images/pic/img-1.jpg" alt="#">
					</div>	
					<!-- controls -->
					<a href="#" class="c-left c-control">&lt;</a>
					<a href="#" class="c-right c-control">&gt;</a>	
				</div>
				
				<!-- photo info -->
				<div class="i-info">
					<div class="i-user">
						<img src="images/icon.png" alt="#">
						<div class="i-userData">
							<span class="i-userName">name</span>
							<span class="i-date">date</span>
						</div>						
					</div>
					<div class="i-function">
						<button class="i-liked">liked</button>
						<button class="i-downLoad">download</button>
					</div>
				</div><!-- end of info -->
				<div class="i-comment">
					<div class="i-user">
						<img src="images/icon.png" alt="#">
						<span class="i-userName">name</span>
						<span class="i-date">date</span>
					</div>
					<span class="comment">comment</span>
				</div>		
			</div>			
		</div>';
?>