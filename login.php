<?php
            include ("Assets/PHP/header.php");
        ?>
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
            <!-- Page content-->
            <section class="py-5">
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-plus"></i></div>
                            <h1 class="fw-bolder">Log in</h1>
                            <p class="lead fw-normal text-muted mb-0">You already have an account?</p>
                        </div>
                        <form action="contacts.php">
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form2Example1" class="form-control" />
    <label class="form-label" for="form2Example1">Email address</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="form2Example2" class="form-control" />
    <label class="form-label" for="form2Example2">Password</label>
  </div>
  <!-- Submit button -->
  <button type="Submit" class="btn btn-primary btn-block mb-4">Log in</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Not a member? <a href="sign.php">Register</a></p>
</form>
        </main>
        <!-- Footer-->
        <?php
    include("Assets/PHP/footer.php");
    ?>
