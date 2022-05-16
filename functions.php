<?php
function wpb_demo_shortcode_2($atts = '') {   
// Advertisement code pasted inside a variable

  $atributos = shortcode_atts([  'id' => 'PORDEFECTO',  ], $atts);
  $numero = $atributos['id'];
 // if ($atributos['url'] <> 'PORDEFECTO') {
     

$string .= '
<div class="su-button-center"><span data-js="open'.$numero.'" href="#" class="su-button su-button-style-default su-button-wide" style="cursor:pointer;color:#333;background-color:#ffde64;border-color:#ccb250;border-radius:7px;-moz-border-radius:7px;-webkit-border-radius:7px" rel="nofollow noopener"><span style="color:#333;padding:5px 50px;font-size:16px;line-height:32px;border-color:#ffe893;border-radius:7px;-moz-border-radius:7px;-webkit-border-radius:7px;text-shadow:0.5px 0.5px 0.5px #000000;-moz-text-shadow:0.5px 0.5px 0.5px #000000;-webkit-text-shadow:0.5px 0.5px 0.5px #000000"> 📌 QUIERO SABER MÁS</span></span></div>
<div class="popup'.$numero.'">
<div class="_form_'.$numero.'" id="_form_'.$numero.'"></div>
<script src="https://usuarioXXX.activehosted.com/f/embed.php?id='.$numero.'" type="text/javascript" charset="utf-8"></script>
</div>
<style>
.popup'.$numero.' {
  background: rgba(100, 100, 100, 0.5);
  position: fixed;
  display: none;
  z-index: 5000;
  height: 100%;
  width: 100%;
  left: 0;
  top: 0;
}
  .popup'.$numero.' > div {
    position: fixed;
    transform: translate(-50%, -50%);
    left: 50%;
    top: 50%; 
  }
@media (max-width: 600px) {
  .popup'.$numero.' > div {
    position: relative;
    min-width: 350px;
    max-width: 70%;
  }
}
#_form_'.$numero.' {
  display: none;
}
</style>
<script>
function popupOpenClose'.$numero.'(popup) {  
  jQuery("#_form_'.$numero.'").appendTo(".popup'.$numero.'");
  jQuery("#_form_'.$numero.'").css("display","block");
  if (jQuery(".wrapper'.$numero.'").length == 0){
    jQuery(popup).wrapInner("<div class=\'wrapper'.$numero.'\'></div>");
  }  
  jQuery(popup).show();
  jQuery(popup).click(function(e) {
    if ( e.target == this ) {
      if (jQuery(popup).is(":visible")) {
        jQuery(popup).hide();
      }
    }
  });
}
jQuery(document).ready(function () {
  jQuery("[data-js=open'.$numero.']").on("click", function() {
    popupOpenClose'.$numero.'(jQuery(".popup'.$numero.'"));
  });
});
</script>';  
// Ad code returned
return $string;   
}
// Register shortcode
add_shortcode('boton', 'wpb_demo_shortcode_2'); 
