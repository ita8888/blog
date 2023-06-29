<?php require_once 'partials/top.php' ?>
<nav class="navbar navbar-expand navbar-light bg-light">
    <a href="" class="navbar-brand">Blogger</a>
    <ul class="navbar-nav mx-auto">
        <li class="nav-item">
            <a href="index.php" class="nav-link">Back to Blog</a>
        </li>
    </ul>
</nav>
<div class="bg-light p-5 rounded-lg text-center m-5">
    <h4>Login/Register</h4>
</div>
<div class="container">
    <div class="row">
        <div class="col-6">
            <h4 class="mb-5">Login</h4>
            <form action="login_register.php" method="POST">
                <input type="text" name="login_email" placeholder="email" class="form-control" required><br>
                <input type="password" name="login_password" placeholder="password" class="form-control" required><br><br>
                <button class="form-control btn btn-primary" name="loginBtn">Login</button>
            </form>
            <?php if ($user->loggedUser) : ?>
                <div class="alert alert-success">Uspješno ste logirani <a href="index.php">Idi na Blog</a></div>
            <?php elseif (isset($_POST['loginBtn'])) : ?>
                <div class="alert alert-danger">Username i password pogređni</div>
            <?php endif; ?>
        </div>
        <div class="col-6">
            <h4>Register</h4>
            <form action="login_register.php" method="POST">
                <input type="text" name="register_name" placeholder="name" class="form-control" required><br>
                <input type="email" name="register_email" placeholder="email" class="form-control" required><br>
                <input type="password" name="register_password" placeholder="password" class="form-control" required><br>
                <button class="form-control btn btn-warning" name="registerBtn">Register</button>
            </form>
            <?php if ($user->register_result) : ?>
                <div class="alert alert-success">Uspješna registracija</div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php require_once 'partials/bottom.php' ?>