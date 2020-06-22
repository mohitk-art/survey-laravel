@include('layout.wrapper.start')

<div class="bg-primary main-wrapper">

<div>
@include('footer.menu')
      <div class="wrapper">
        <h2 class="text-center mb-4 animated fadeInDown">
          Email registration
        </h2>
        <div class="box bg-primary">
          <form class="form-wrapper" action="payment">
            <h4 class="text-center mb-4 animated fadeInRight">
              Please enter the work email handle you would like to register:
            </h4>
            <input
              type="text"
              placeholder="Email handle (@company.com)"
              class="form-control animated fadeInRight"
            />

            <div class="text-center mt-5 animated fadeInUp">
              <button type="submit" class="submit-btn btn-blue">Submit</button>
            </div>
          </form>
        </div>
      </div>
      <div>
    </div>

    @include('layout.wrapper.end')
