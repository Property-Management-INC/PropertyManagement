<?php include("includes/config.php");?>
<?php include("includes/header.php"); ?>
<?php include("includes/nav.php"); ?>

<div class="container middle pt-5 pb-5">
  <form class="border p-3 w-75 rounded" action="index.php">
    <div class="mb-3">
      <h1>Sign in</h1>
    </div>
    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input type="text" class="form-control" id="username" name="username" placeholder="johnDoe2000">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="text" class="form-control" id="password" name="password" placeholder="*******">
    </div>
    <div class="mb-3">
        <a link class="link-primary" href="register.php">Create new account</a>
    </div>
    <div class="mb-3">
      <button class="btn btn-dark" type="submit">Sign in</button>
    </div>
  </form>
</div>

<?php include("includes/footer.php"); ?>