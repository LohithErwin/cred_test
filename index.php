<?php
session_start();

if (isset($_SESSION['activeUser'])) {
    header("Location: dashboard.php");
    exit;
}

$error = "";

if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($username === "Robin" && $password === "1234") {
        $_SESSION['activeUser'] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "❌ Invalid username or password";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<title>Login</title>
</head>

<body class="bg-primary bg-gradient">

<div class="container vh-100 d-flex justify-content-center align-items-center">
  <div class="card shadow-lg p-4" style="width: 23rem;">
    <h4 class="text-center mb-3">
      <i class="bi bi-person-circle"></i> Login
    </h4>

    <?php if ($error): ?>
      <div class="alert alert-danger"><?= $error ?></div>
    <?php endif; ?>

    <form method="POST">
      <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" name="username" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Password</label>
        <div class="input-group">
          <input type="password" name="password" id="loginPass" class="form-control" required>
          <span class="input-group-text" onclick="togglePass('loginPass')">
            <i class="bi bi-eye"></i>
          </span>
        </div>
      </div>

      <button type="submit" name="login" class="btn btn-primary w-100">
        Login
      </button>

      <div class="text-center mt-3">
        New here? <a href="registration.php">Create account</a>
      </div>
    </form>
  </div>
</div>

<script>
function togglePass(id) {
  const x = document.getElementById(id);
  x.type = x.type === "password" ? "text" : "password";
}
</script>

</body>
</html>
