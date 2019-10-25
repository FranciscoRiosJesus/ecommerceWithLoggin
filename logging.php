<?php include("database.php") ?>

<?php include("includes/header.php") ?>

<!-- NAVIGATION  -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">VR AR </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>

<!-- CARD-LOGGIN -->
<div class="row d-flex justify-content-center margin-top-center">
    <div class="card col-md-5" style="width: 18rem;">

        <?php if (isset($_SESSION['message'])) { ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php session_unset(); } ?>

        <div class="card-body ">
            <h2 class="card-title">Login</h2>
            <form action="loggingController.php" method="POST">
                <div class="form-group">
                    <input type="email" id="login" class="fadeIn second form-control" name="email" placeholder="email" autofocus>
                </div>
                <div class="form-group">
                    <input type="password" id="password" class="fadeIn third form-control" name="password" placeholder="password">
                </div>
                <input type="submit" class="fadeIn fourth btn btn-primary" value="Log In" name="logging">
            </form>
            <div class="card-text">
                <a href="#" class="card-link stretched-link" style="position: relative;">Sign Up</a>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php") ?>