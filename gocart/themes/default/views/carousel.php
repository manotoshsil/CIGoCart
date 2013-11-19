<?php echo theme_css('diapo.css', true);?>

<?php echo theme_js('equal_heights.js', true);?>
<?php echo theme_js('jquery.easing.1.3.js', true);?>
<?php echo theme_js('jquery.hoverIntent.minified.js', true);?>
<?php echo theme_js('diapo.js', true);?>
<div class="container" >
	<div class="pix_diapo span12">

		            <div data-thumb="images/thumbs/megamind1048.jpg">
                        <img src="images/slides/sizpunjab.jpg">
                        <div class="caption elemHover fromLeft">
                            This is a simple sliding image with caption. You can have more than one caption and decide the layout of the caption via css.
                        </div>
                    </div>
                    
                    <div data-thumb="images/thumbs/megamind_07.jpg">
                        <img src="images/slides/megamind_07.jpg"> 
                        <div class="caption elemHover fromRight" style="bottom:65px; padding-bottom:5px; color:#ff0; text-transform:uppercase">
                            Here you can see two captions.
                        </div>
                        <div class="caption elemHover fromLeft" style="padding-top:5px;">
                            The first are loaded immediately before than the second one
                        </div>
                    </div>
                    
                    <div data-thumb="images/thumbs/wall-e.jpg" data-time="7000">
                        <img src="images/slides/wall-e.jpg">
                        <div class="elemHover caption fromLeft" style="bottom:70px; width:auto; -webkit-border-top-right-radius: 6px; -webkit-border-bottom-right-radius: 6px; -moz-border-radius-topright: 6px; -moz-border-radius-bottomright: 6px; border-top-right-radius: 6px; border-bottom-right-radius: 6px;">
                            You can also get the same effect as the caption with:
                        </div>
                        <div class="elemHover button fromTop" data-easing="easeOutExpo" style="left:388px; bottom:78px;">
                            A button
                        </div>
                        <div class="elemHover button button2 fromBottom" data-easing="easeOutExpo" style="left:512px; bottom:78px;">
                            Or two buttons
                        </div>
                        <div class="elemHover fadeIn" style="left:600px; bottom:auto; top:0; padding-top:50px; color:#ff0; font-size:13px; line-height:20px; width:auto; -webkit-border-top-right-radius: 6px; -webkit-border-bottom-right-radius: 6px; -moz-border-radius-topright: 6px; -moz-border-radius-bottomright: 6px; border-top-right-radius: 6px; border-bottom-right-radius: 6px; background:url(images/demo/arrow_caption.png) no-repeat 230px 30px">
                            Or any other html element...<br>
                            and you can decide the transition time of any slide
                        </div>
                    </div>
</div>
</div>
<script type="text/javascript">
//$('.carousel').carousel({
 // interval: 4000
//});
 //$('.carousel').carousel('cycle');
 
$(function(){
	$('.pix_diapo').diapo();
});

</script>