<html>
<head>
    <title>Logowanie</title>

</head>
<body>

<div style="width: 400px; margin: 0 auto;">

    <?php if(Session::instance()->get('login') == 1) {
        echo '<a href="'.URL::base().'wyloguj">Wyloguj</a>';
    } else {
    ?>
        <h1>Logowanie</h1>

        <?php if(isset($error)): ?>
            <span style="color: red;"><?=$error?></span>
        <?php endif; ?>

        <form action="" method="post">

            <input style="height: 30px; width: 100%;" type="text" placeholder="Nazwa użytkownika" name="login"/> <br/><br/>
            <input style="height: 30px; width: 100%;" type="password" placeholder="Hasło" name="pass"/> <br/><br/>
            <input type="submit" value="Zaloguj" />

        </form>
    <?php
    }
    ?>



</div>

</body>
</html>