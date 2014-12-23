<div class="row">
	<div class="col-sm-12">
		<div id="partner-wrapper">
		<div class="partner-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et lacinia ipsum quam</div> 
		<div class="partners-header-wrapper"><h4>OUR PARTNERS :</h4></div>
		<?php for ($i=0; $i < 4; $i++) { ?>
			<div class="partner-item-wrapper">
				<div class="partner-img-wrapper">
					<img src="images/partner<?=$i+1?>.png" >
				</div>
				<div class="partner-details">Partiner no <?=($i+1);?></div>
			</div>
		<?php } ?>
		</div>
	</div>
</div>

<hr>

<div class="footer-text">www.ooig.co.tz <br> OOGI @ 2014 | All rights reserved </div>