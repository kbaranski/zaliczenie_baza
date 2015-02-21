<html>
<head>
    <title>Film <?=$movie->name?></title>

</head>
<body>

<div style="width: 400px; margin: 0 auto;">


    <h1><?=$movie->name?></h1>

    <strong>Aktorzy: </strong><?=$movie->actors?> <br/>
    <strong>Gatunek: </strong><?php if($movie->cat_id == 1) echo 'dramat'; else if($movie->cat_id == 2) echo 'komedia'; else if($movie->cat_id == 3) echo 'sensacja'; ?> <br/>
    <strong>Opis: </strong> <br/> <br/> <?=$movie->desc?>
    <br/><br/>

    <h2>Recenzje</h2> <br/>

    <?php foreach($opinions as $o): ?>
        <?=$o->opinion?> <br/><hr/>
    <?php endforeach; ?>

    <?php if(isset($info)): ?>
        <div style="text-align: center">
            <?=$info ?>
        </div>
    <?php endif; ?>

    <form action="" method="post">
        <textarea style="width: 600px; height: 200px;" name="opinion"></textarea>
        <input type="hidden" value="<?=$movie->id?>" name="movies_id" /> <br/><br/>
        <input type="submit" value="Dodaj">
    </form>


</div>

</body>
</html>