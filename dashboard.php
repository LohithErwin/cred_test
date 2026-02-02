<?php
session_start();

if (!isset($_SESSION['activeUser'])) {
    header("Location: index.php");
    exit;
}
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<title>Dashboard</title>
</head>

<body class="bg-light">

<nav class="navbar navbar-dark bg-dark px-4">
  <span class="navbar-brand">
    <i class="bi bi-speedometer2"></i> Dashboard
  </span>
  <div>
    <span class="text-white me-3">
      👋 <?= $_SESSION['activeUser']; ?>
    </span>
    <a href="logout.php" class="btn btn-sm btn-danger">Logout</a>
  </div>
</nav>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="card shadow text-center">
        <img src="https://picsum.photos/300/200" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Welcome</h5>
          <p class="card-text">
            You are logged in as <b><?= $_SESSION['activeUser']; ?></b>
          </p>
          <a href="logout.php" class="btn btn-outline-danger">
            <i class="bi bi-box-arrow-right"></i> Logout
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
