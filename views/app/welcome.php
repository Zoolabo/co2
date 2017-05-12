
<?php 
    $layoutPath = 'webroot.themes.'.Yii::app()->theme->name.'.views.layouts.';
    //header + menu
    $this->renderPartial($layoutPath.'header', 
                        array(  "layoutPath"=>$layoutPath , 
                                "page" => "welcome",
                            )
                        );
    $cssAnsScriptFiles = array(
     '/assets/css/profilSocial.css',
     '/assets/css/default/directory.js',
    //  '/assets/css/referencement.css'
    );
    HtmlHelper::registerCssAndScriptsFiles($cssAnsScriptFiles, Yii::app()->theme->baseUrl); 

       
?>

<section class="padding-top-70 bg-white inline-block">
    <?php $this->renderPartial($layoutPath.'home.'.Yii::app()->params["CO2DomainName"], array());  ?>
</section>

<script type="text/javascript" >

var currentCategory = "";

jQuery(document).ready(function() {
    initKInterface();
    location.hash = "";
});



</script>