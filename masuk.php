<div class="col-md-3 mt-5" style="background-color: #FA8733">
<main class="form-signin">
  <form method='POST' action="simpan_masuk.php">
    <img class="rounded mx-auto d-block mt-3" src="img/logo.png" alt="logo" width="72" height="67">
    <h1 class="h3 mb-3 fw-normal">Please log in</h1>
    <div class="form-floating">
      <input type="email" class="form-control" name="email" id="email" required placeholder="name@example.com">
      <label for="email">Email address</label>
    </div>
    <div class="form-floating mt-3">
      <input type="password" class="form-control" name="pass" required id="pass" placeholder="password">
      <label for="pass">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-50 btn btn-lg btn-warning mb-3" type="submit">Log in</button>
  </form>
</main>
</div>