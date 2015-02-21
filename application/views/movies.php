<html>
<head>
    <title>Lista filmów</title>

</head>
<body>

<div style="width: 400px; margin: 0 auto;">


    <h1>Wszystkie filmy</h1>

    <?php $i = 0 ;foreach($movies as $m): $i++; ?>
        <?=$i?>. <a href="<?=URL::base()?>index.php/movie/<?=$m->id?>"> <?=$m->name?> </a> <br/>
    <?php endforeach; ?>

    <h1>Najpopularniejsze filmy</h1>

    <?php $i = 0 ;foreach($movies_popular as $m): $i++; ?>
        <?=$i?>. <a href="<?=URL::base()?>index.php/movie/<?=$m->id?>"> <?=$m->name?> </a> - <?=$m->count?> opinii <br/>
    <?php endforeach; ?>

<br/><br/>
    <a href="<?=URL::base()?>index.php/wyloguj">Wyloguj</a>

</div>

</body>
</html>