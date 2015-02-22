<html>
<head>
    <title>Rejestracja</title>

</head>
<body>

<div style="width: 400px; margin: 0 auto;">


        <h1>Rejestracja</h1>

        <?php if(isset($info)): ?>
            <span style="color: green;"><?=$info?></span>
        <?php endif; ?>

        <form action="" method="post">

            <input style="height: 30px; width: 100%;" type="text" placeholder="Nazwa użytkownika" name="login"/> <br/><br/>
            <input style="height: 30px; width: 100%;" type="password" placeholder="Hasło" name="pass"/> <br/><br/>
            <input type="submit" value="Zarejetruj" />

        </form>
    <br/> <br/>
    <a href="<?=URL::base()?>">Logowanie</a>




</div>

</body>
</html>