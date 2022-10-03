<?php require('./nav.php'); ?>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">Are you ready for the Sahel Biggest Event</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">What are you waiting for ? </p>
                    <a class="btn btn-primary btn-xl" href="#contact">Register Now</a>
                </div>
            </div>
        </div>
    </header>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h2 class="mt-0">Let's Get In Touch!</h2>
                    <hr class="divider" />
                    <p class="text-muted mb-5">Start your next journey with us? Send us a messages
                        and we will get back to you as soon as possible!</p>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
            <?php if (isset($Response['status']) && !$Response['status']) : ?>
            <br>
            <div class="alert alert-danger" role="alert">
                <span><B>Oops!</B> Some errors occurred in your form.</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true" class="text-danger">&times;</span>
                </button>
            </div>
            <?php endif; ?>
                <div class="col-lg-6">
                    <form>
                        <!-- Name input-->
                        <div class="form-group mb-3">
                            <label for="name">Full name</label>
                            <input class="form-control" id="name" type="text" placeholder="Enter your name..." />
                        </div>
                        <div id="name-group" ></div>
                        <!-- Email address input-->
                        <div class="form-group mb-3">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email">
                        </div>
                        <div id="email-group" ></div>
                        <!-- Phone number input-->
                        <div class="form-group mb-3">
                            <label for="phone">Phone number</label>
                            <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" />
                        </div>
                        <div id="phone-group" ></div>
                        <!-- Submit Button-->
                        <div class="d-grid">
                            <button class="btn btn-primary btn-xl" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5">
            <div class="small text-center text-muted">Copyright &copy; 2022 - Sahel</div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <!-- Ajax subscribbe form submittion-->
    <script src="js/registrationFormSubmition.js"></script>
</body>

</html>