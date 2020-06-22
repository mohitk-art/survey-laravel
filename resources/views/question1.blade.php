@include('layout.wrapper.start')

<div class="bg-primary main-wrapper">
      <div class="progress">
        <div
          class="progress-bar"
          role="progressbar"
          style="width: 15%"
          aria-valuenow="15"
          aria-valuemin="0"
          aria-valuemax="100"
        ></div>
      </div>
      <div class="w-100">
      @include('footer.menu')
      <div class="wrapper">
        <h2 class="text-center mb-4 animated fadeInDown">Question 1</h2>

        <div class="box bg-primary">
          <div class="form-wrapper">
            <h4 class="text-center mb-4 font-weight-bold animated fadeInRight">
              In the past 14 days have you, or anyone in your home had COVID
              symptoms?
            </h4>
            <h5 class="text-center mb-4 animated fadeInRight">
              Cough, shortness of breath, difficulty breathing, fever, chills,
              muscle pain, sore throat, new loss of taste or smell and/or
              gastrointestinal issues
            </h5>

            <div class="text-center mt-5 animated fadeInUp">
              <a href="question2" class="btn2 btn-success mx-2">Yes</a>
              <a href="question2" class="btn2 btn-danger mx-2">No</a>
            </div>
          </div>
        </div>
      </div>
     
      </div>
    </div>
    
    @include('layout.wrapper.end')
