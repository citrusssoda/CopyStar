<?php session_start();?>
<header class="header">
    <div class="container">
        <div class="row space-between align-items-center">
            <img src="logo.png" alt="" width ="100px">    

            <nav class="nav">
                <ul class="row">
                    <li><a class="nav-link" href="/">Главная</a></li>
                    <li><a class="nav-link" href="/shop.php">Магазин</a></li>
                    <li><a class="nav-link" href="/about.php">О нас</a></li>
                    <?php

                    if (isset($_SESSION['user']))
                    {
                        if ($_SESSION['user']['id_role']==2){
                        ?>
                        <li><a class="nav-link" href="/admin.php">Личный кабинет</a></li>
                        <li><a class="nav-link" href="/App/Controllers/logoutController.php">Выход</a></li>
                        <?php
                         }
                         if ($_SESSION['user']['id_role']==1)
                        {
                       ?>
                        <li><a class="nav-link" href="/profile.php">Личный кабинет</a></li>
                        <li><a class="nav-link" href="/App/Controllers/logoutController.php">Выход</a></li>
                        <?php
                        }
                    }
                    else
                    {
                       ?>
                        <li><a class="nav-link" href="/entrance.php">Вход</a></li>
                        <li><a class="nav-link" href="/register.php">Регистрация</a></li>
                        <?php
                    }
                    ?>

                </ul>
            </nav>
        </div>
    </div>
</header>