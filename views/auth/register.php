<main class="form-signin w-100 m-auto">
  <form class="" action="/register" method="post">
    <h1 class="h3 mb-3 fw-bold text-center">Please sign up</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="name" placeholder="Full name" name="name">
      <label for="name">Full name</label>
    </div>
    <div class="form-floating">
      <input type="email" class="form-control" id="email" placeholder="Email address" name="email">
      <label for="email">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="password" placeholder="Password">
      <label for="password">Password</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password">
      <label for="confirm_password">Confirm Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>
    <p>Already have an account? <a href="/login" class="mt-3">Sign In</a></p>
  </form>
</main>