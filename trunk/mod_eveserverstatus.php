<?php

defined('_JEXEC') or die('Restricted access');
#<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
#<script type="text/javascript">
#jQuery.noConflict();
#</script>
#
#<script type="text/javascript" src="media/jui/js/jquery.min.js"></script>

#<script type="text/javascript" src="media/jui/js/jquery.min.js"></script>
#<script type="text/javascript" src="media/jui/js/jquery-noconflict.js"></script>

#<script type="text/javascript" src="media/jui/js/jquery.min.js"></script>

?>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>

<div id="contentq"></div>

   <script>

(function($){
    //plugin code


    function show()
    {
    jQuery.ajax({
    url: "modules/mod_eveserverstatus/echostat.php",
    cache: false,
    success: function(html){
    jQuery("#contentq").html(html);
}
    });
}
jQuery(document).ready(function(){
    show();
    setInterval('show()',60000);
});
})(jQuery)
    </script>


