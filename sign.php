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
                            <h1 class="fw-bolder">Register</h1>
                            <p class="lead fw-normal text-muted mb-0">Let's work together!</p>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                                    <!-- Name input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                        <label for="name">Last name</label>
                                        <div class="invalid-feedback" data-sb-feedback="name:required">A Last name is required.</div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                        <label for="name">First name</label>
                                        <div class="invalid-feedback" data-sb-feedback="name:required">A First name is required.</div>
                                    </div>
                                    <!-- Email address input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                        <label for="email">Email address</label>
                                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                                    </div>
                                    <!-- Password -->
                                    <div class="row">
  <div class="col-6 w-100 mb-3">
    <div class="input-group d-flex w-100">
      <input
        type="password"
        class="form-control w-100"
        placeholder="Password"
        aria-label="password"
        aria-describedby="password"
        id="password-input"
      />
      <div class="valid-feedback">Good</div>
      <div class="invalid-feedback">Wrong</div>
    </div>
  </div>

  <div class="col-6 mt-4 mt-xxl-0 w-auto h-auto">

    <div
      class="alert px-4 py-3 mb-0 d-none"
      role="alert"
      data-mdb-color="warning"
      id="password-alert"
      >
      <ul class="list-unstyled mb-0">
        <li class="requirements leng">
          <i class="fas fa-check text-success me-2"></i>
          <i class="fas fa-times text-danger me-3"></i>
          Your password must have at least 8 chars</li>
        <li class="requirements big-letter">
          <i class="fas fa-check text-success me-2"></i>
          <i class="fas fa-times text-danger me-3"></i>
          Your password must have at least 1 big letter.</li>
        <li class="requirements num">
          <i class="fas fa-check text-success me-2"></i>
          <i class="fas fa-times text-danger me-3"></i>
          Your password must have at least 1 number.</li>
        <li class="requirements special-char">
          <i class="fas fa-check text-success me-2"></i>
          <i class="fas fa-times text-danger me-3"></i>
          Your password must have at least 1 special char.</li>
      </ul>
    </div>

  </div>
</div>
                                    <!-- Phone number input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                        <label for="phone">Phone number</label>
                                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                                    </div>
                                    <div class="d-none" id="submitSuccessMessage">
                                        <div class="text-center mb-3">
                                            <div class="fw-bolder">You had sign uo successfully!</div>
                                            <br />
                                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                        </div>
                                    </div>
                                    <!-- Submit error message-->
                                    <!---->
                                    <!-- This is what your users will see when there is-->
                                    <!-- an error submitting the form-->
                                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error signing up!</div></div>
                                    <!-- Submit Button-->
                                    <div class="d-grid"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Sign Up</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer-->
        <?php
    include("Assets/PHP/footer.php");
    ?>
