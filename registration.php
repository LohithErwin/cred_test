<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<title>Register</title>
</head>

<body class="bg-success bg-gradient">

<div class="container vh-100 d-flex justify-content-center align-items-center">
  <div class="card shadow-lg p-4" style="width: 24rem;">
    <h4 class="text-center mb-3">
      <i class="bi bi-person-plus"></i> Register
    </h4>

    <form>
      <div class="mb-3">
        <label class="form-label">Full Name</label>
        <input type="text" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Contact</label>
        <input type="tel" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Password</label>
        <div class="input-group">
          <input type="password" id="regPass" class="form-control" required>
          <span class="input-group-text" onclick="togglePass('regPass')">
            <i class="bi bi-eye"></i>
          </span>
        </div>
      </div>

      <button type="submit" class="btn btn-success w-100">
        Create Account
      </button>

      <div class="text-center mt-3">
        Already registered?
        <a href="index.php">Login</a>
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
