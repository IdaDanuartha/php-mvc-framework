<main class="form-signin w-100 m-auto">
  <form class="" action="/login" method="post">
    <h1 class="h3 mb-3 fw-bold text-center">Please sign in</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="email" placeholder="Email address" name="email">
      <label for="email">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="password" placeholder="Password">
      <label for="password">Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign In</button>
    <p>Doesn't have an account? <a href="/register" class="mt-3">Sign Up</a></p>
  </form>
</main>