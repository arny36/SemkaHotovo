<style>
    <?php
    include "galeria.css"

    ?>
</style>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GaleriaHubariNaCestach</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="galeria.css">
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>

</head>
<body>


<a href="?c=huby&a=pridaj" class="btn btn-dark">Pridaj</a>


<div class="container">

    <?php /** @var \App\Models\HubyObsah[] $data */
    foreach ($data as $hubyObsah) { ?>
        <a href="?c=huby&a=vymaz&id=<?= $hubyObsah->getId() ?>"  class="btn btn-danger">Vymaž </a>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src= <?= $hubyObsah->getObrazok() ?> alt ="Bedla" >
                <a href="?c=huby&a=opravObrazok&id=<?= $hubyObsah->getId() ?>" class="btn btn-dark">Uprav obrázok</a>
                <div class="card-body">
                    <p1 class="card-text"><?= $hubyObsah->getNazov();
                        echo "<br>";
                        if ($hubyObsah->getJedlost() == 0) {
                            echo "Nejedlá";
                        } else {
                            echo "Jedlá";
                        }
                        ?></p1>
                    <div class="d-flex justify-content-between align-items-center">

                        <small class="text-muted"><?= $hubyObsah->getPopis() ?></small>

                    </div>
                </div>
            </div>
        </div>


    <?php } ?>
</div>
</body>
</html>

