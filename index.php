<?php 
include __DIR__.'/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Movie Class</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="bg-dark text-white">
    <header class="container text-center">
        <h1 class="mt-2">PHP Movie Class</h1>
    </header>
    <main>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <?php foreach ($movies as $movie) {?>
                <div class="col-12 col-md-6 col-lg-4 g-3">
                    <div class="card bg-dark border-0">
                        <div>
                            <?php echo $movie->getCoverImage()?>
                        </div>
                        <h3><?php echo $movie->title?></h3>
                        <div><?php echo $movie->getRelaseYear()?></div>
                        <div><?php echo $movie->getDirector()?></div>
                        <div><?php echo $movie->getRating()?></div>
                        <div><?php echo $movie->genre->getGenres()?></div>
                        <div><?php echo $movie->genre->getAdultsOnly()?></div>                        
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </main>
</body>
</html>