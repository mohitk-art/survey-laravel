@include('layout.wrapper.start')

<div class="bg-primary main-wrapper">
      <div class="wrapper">
        <h2 class="text-center mb-4 animated fadeInDown">Success!</h2>
        <div class="box bg-primary">
          <div class="form-wrapper form-wrapper1">
            <h4 class="text-center mb-3 animated fadeInRight">
              Your payment was successfully registered.
            </h4>
            <h4 class="text-center mb-4 animated fadeInRight">
              Please note that you will not be charged until an employee
              registers their account
            </h4>

            <div class="text-center mt-5 animated fadeInUp">
              <a href="companylogin" class="submit-btn btn-secondary">
                Back to login
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    @include('layout.wrapper.end')
