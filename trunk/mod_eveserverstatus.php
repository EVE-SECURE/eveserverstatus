<?php

defined('_JEXEC') or die('Restricted access');
?>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>

<div id="contentq"></div>

   <script>
    function show()
    {
    $.ajax({
    url: "modules/mod_eveserverstatus/echostat.php",
    cache: false,
    success: function(html){
    $("#contentq").html(html);
}
    });
}
$(document).ready(function(){
    show();
    setInterval('show()',60000);
});
    </script>


