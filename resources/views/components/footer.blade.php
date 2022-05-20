<footer class="text-center mt-5 text-lg-start bg-light text-muted">
    <section
      class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
    >
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>
    </section>

    <section class="">
      <div class="container text-center text-md-start mt-5">
        <div class="row mt-3">
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">
                {{ config('app.name') }}
            </h6>
            <p>
                Blog Web Apps.
            </p>
          </div>

          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">
                Connect with me
            </h6>
            <p>
              <a href="#!" class="text-reset">Instagram</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Twitter</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Github</a>
            </p>
          </div>

          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">
              Resources
            </h6>
            <p>
              <a href="#!" class="text-reset">Posts</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Categories</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Tags</a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <div class="text-center p-4 mt-3" style="background-color: rgba(0, 0, 0, 0.05);">
      © {{ date('Y') }} Copyright:
      <a class="text-reset fw-bold" href="https://polytecsousse.tn/">{{ config('app.name') }}</a>
    </div>
  </footer>
