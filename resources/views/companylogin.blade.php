@include('layout.wrapper.start')
    
    <div class="bg-primary main-wrapper">
      <div class="wrapper">
        <h2 class="text-center mb-4 animated fadeInDown">Welcome</h2>
        <div class="box bg-primary">
          <h4 class="text-center mb-4 animated fadeInRight">
            To register an account, please login:
          </h4>

          <form class="form-wrapper" action="emailregisteration">
            <input
              type="text"
              placeholder="Work email (example@company.com)"
              class="form-control animated fadeInRight"
            />

            <input
              type="text"
              placeholder="Password (apricot1234)"
              class="form-control animated fadeInRight"
            />

            <div class="text-center animated fadeInUp">
              <button type="submit" class="submit-btn btn-blue">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    @include('layout.wrapper.end')
