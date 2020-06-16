@include('layout.wrapper.start')
    
<div class="bg-primary main-wrapper">
      <div class="wrapper">
        <h2 class="text-center mb-4 animated fadeInDown">Registeration</h2>
        <div class="box bg-primary">
          <form class="form-wrapper" action="companylogin">
            <input
              type="text"
              placeholder="Company Name"
              class="form-control form-control1 animated fadeInRight"
            />

            <input
              type="text"
              placeholder="Company Email (example@company.com)"
              class="form-control form-control1 animated fadeInRight"
            />

            <input
              type="text"
              placeholder="Company Phone"
              class="form-control form-control1 animated fadeInRight"
            />

            <input
              type="password"
              placeholder="Password (apricot1234)"
              class="form-control form-control1 animated fadeInRight"
            />

            <input
              type="password"
              placeholder="Confirm Password"
              class="form-control form-control1 animated fadeInRight"
            />

            <div class="text-center animated fadeInUp">
              <button type="submit" class="submit-btn btn-blue">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    @include('layout.wrapper.end')
