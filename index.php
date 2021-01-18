  
<?php
    include_once __DIR__ . '/classi/scarpe.php';
    include_once __DIR__ . '/classi/maglie.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>negozio php-oop2</title>
</head>
    <body>
        <main>
            <section>

                <?php
                    $scarpe = new Scarpa('Predator', 220, 'Adidas', 9);
                ?>
                <h1>Scarpe Calcio</h1>
                <div>
                    <h3>Modello:</h3> <?php echo $scarpe->modello; ?> <br>
                    <h3>Prezzo:</h3> <?php echo $scarpe->sconto(); ?>€<br>
                    <h3>Marca:</h3> <?php echo $scarpe->marca; ?> <br>
                    <h3>Taglia (us):</h3> <?php echo $scarpe->taglia; ?> <br> 
                </div>
            </section>
            <section>
                <?php 
                    $maglia = new Maglia('Juventus', 85, 'Adidas', 'M');
                    $maglia->setType('Maglia Away');
                ?>
                <h1>Maglia Calcio</h1>
            <div>
                <h3>Squadra:</h3> <?php echo $maglia->modello; ?> <br>
                <strong>Prezzo:</strong> <?php echo $maglia->sconto(); ?>€ 
                <br>Applicato sconto di :<?php echo $maglia->prezzo - $maglia->sconto(); ?>€
                <h3>Marca:</h3> <?php echo $maglia->marca; ?> <br>
                <h3>Home/Away:</h3> <?php echo $maglia->getType(); ?> <br> 
                <h3>Taglia:</h3> <?php echo $maglia->taglia; ?> <br>
            </div>
            </section>
        </main>
    </body>
</html>