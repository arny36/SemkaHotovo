<?php /** @var Array $data */ ?>
<div class="container">
    <h1 class="mt-5">Kde nás najdete?</h1>
    <p class="lead">dsadas
    </p>
    <p>
        sadadsdsa
    </p>
</div>

<div class="container">

<?php
$lat = $data['lat'];//"33.80766";
$log =  $data['lng']; //"-33.76714";

?>
<iframe id="map-canvas" class="map_part" width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=<?php echo $lat.",".$log; ?>&amp;t=&amp;z=3&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
</div>