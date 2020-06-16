@include('layout.wrapper.start')

<div class="bg-primary main-wrapper">
      <div class="wrapper">
        <h2 class="text-center mb-4 animated fadeInDown">Payment</h2>
        <div class="box bg-primary">
          <form class="form-wrapper" action="success">
            <h4 class="text-center mb-4 animated fadeInRight">
              <b>Fixed rate</b><br />
              $5 / employee / month
            </h4>
            <div class="form-row mb-5">
              <div class="col-md-6 mb-3">
                <input
                  type="text"
                  placeholder="First name"
                  class="form-control form-control1 mb-0 animated fadeInRight"
                />
              </div>

              <div class="col-md-6 mb-3">
                <input
                  type="text"
                  placeholder="Last name"
                  class="form-control form-control1 mb-0 animated fadeInRight"
                />
              </div>

              <div class="col-md-12 mb-3">
                <input
                  type="text"
                  placeholder="Card number"
                  class="form-control form-control1 mb-0 animated fadeInRight"
                />
              </div>
            </div>

            <div class="text-center animated fadeInUp">
              <button type="submit" class="submit-btn btn-success">
                Register
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>

    @include('layout.wrapper.end')
