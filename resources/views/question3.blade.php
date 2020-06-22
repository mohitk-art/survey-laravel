@include('layout.wrapper.start')

<div class="bg-primary main-wrapper">
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 45%"></div>
      </div>

      <div class="w-100">
      @include('footer.menu')
      <div class="wrapper">
        <h2 class="text-center mb-4 animated fadeInDown">Question 3</h2>

        <div class="box bg-primary">
          <div class="form-wrapper">
            <h4 class="text-center mb-4 font-weight-bold animated fadeInRight">
              Have you checked and know that you do not have a temperature
              today?
            </h4>
            <h5 class="text-center mb-4 animated fadeInRight">
              This means even slight proximity to someone with a confirmed case
            </h5>

            <div class="text-center mt-5 animated fadeInUp">
              <a href="question4" class="btn2 btn-success mx-2">Yes</a>
              <a href="question4" class="btn2 btn-danger mx-2">No</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    
    @include('layout.wrapper.end')
