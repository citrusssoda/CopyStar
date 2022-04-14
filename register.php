<html >
<?php
session_start();
if(isset($_SESSION['user']))
{
    header('Location: /profile.php');
}
?>
<?php require_once 'includes/head.php';?>

<body>
    <div class="page">
        <?php require_once 'includes/header.php'; ?>
        <main class="main">
            <div class="container">
                <div class="main-content">
                    <form>
                        <div class="row center">
                            <div class="form-container">
                                    <div class="title">РЕГИСТРАЦИЯ</div>
                                <div class="input-text">Имя</div>
                                <input type="text" id = "name" class="input">
                                <div class="input-text">Фамилия</div>
                                <input type="text" id="lastname" class="input">
                                <div class="input-text">Отчество (необязательное поле)</div>
                                <input type="text" id="patronymic" class="input">
                                <div class="input-text">Почта</div>
                                <input type="text" id="email" class="input">
                                <div class="input-text">Логин</div>
                                <input type="text" id="login" class="input">
                                <div class="input-text">Пароль</div>
                                <input type="password" id="password" class="input">
                                <div class="input-text">Пароль еще раз</div>
                                <input type="password" id="password_confirm" class="input">
                                <div class="checkbox row center align-items-center">
                                    <input type="checkbox"  class="checkbox-rule" id="rules">
                                    <label class="checkbox-text" for="rules">согласен с <a href="/rules_copy.php">правилами</a></label>
                                </div>
                                <div class="error-msg"></div>
                                <div class="row center">
                                    <button class="btn" id="btn-register">Создать аккаунт</button>
                                </div>
                                <a href="/entrance.php">Вход</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
        <?php require_once 'includes/footer.php'; ?>
    </div>
    <script src="js/jquery/jquery-3.6.0.min.js"></script>
    <script src="js/auth.js"></script>
</body>

</html>