@include('layout.wrapper.start')

<div class="bg-primary main-wrapper">
      <div class="wrapper">
        <h2 class="text-center mb-4 animated fadeInDown">Payment failed</h2>
        <div class="box bg-primary">
          <div class="form-wrapper form-wrapper1 mt-5">
            <h4 class="text-center mb-4 animated fadeInRight">
              Unfortunately, there was an issue in processing your payment,
              please try again
            </h4>

            <div class="text-center mt-5 animated fadeInUp">
              <a href="payment" class="submit-btn btn-secondary">
                Back to payment
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    @include('layout.wrapper.end')
