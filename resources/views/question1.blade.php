@include('layout.wrapper.start')

<div class="bg-primary main-wrapper">
     


<div class="tab-content" id="pills-tabContent">





<!-- Questions Loop start -->

     
     <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">

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
              <div class="btn2 btn-success mx-2 radioinput"><input type="radio" value="yes" name="question1" id="pills-2-tab" data-toggle="pill" href="#pills-2" role="tab" aria-controls="pills-2" aria-selected="true"/>Yes</div>
              <div class="btn2 btn-success mx-2 radioinput"><input type="radio" value="no" name="question1" id="pills-2-tab" data-toggle="pill" href="#pills-2" role="tab" aria-controls="pills-2" aria-selected="true"/>No</div>
              
            </div>
          </div>
        </div>
      </div>
     
      </div>

</div>








<div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">

<div class="progress">
  <div
    class="progress-bar"
    role="progressbar"
    style="width: 30%"
    aria-valuenow="30"
    aria-valuemin="0"
    aria-valuemax="100"
  ></div>
</div>
<div class="w-100">
@include('footer.menu')
<div class="wrapper">
  <h2 class="text-center mb-4 animated fadeInDown">Question 2</h2>

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
      <div class="btn2 btn-success mx-2 radioinput"><input type="radio" value="yes" name="question2" id="pills-3-tab" data-toggle="pill" href="#pills-3" role="tab" aria-controls="pills-3" aria-selected="true"/>Yes</div>
      <div class="btn2 btn-success mx-2 radioinput"><input type="radio" value="no" name="question2" id="pills-3-tab" data-toggle="pill" href="#pills-3" role="tab" aria-controls="pills-3" aria-selected="true"/>No</div>
      </div>
    </div>
  </div>
</div>

</div>

</div>








<div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">

<div class="progress">
  <div
    class="progress-bar"
    role="progressbar"
    style="width: 45%"
    aria-valuenow="45"
    aria-valuemin="0"
    aria-valuemax="100"
  ></div>
</div>
<div class="w-100">
@include('footer.menu')
<div class="wrapper">
  <h2 class="text-center mb-4 animated fadeInDown">Question 3</h2>

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
      <div class="btn2 btn-success mx-2 radioinput"><input type="radio" value="yes" name="question3" id="pills-4-tab" data-toggle="pill" href="#pills-4" role="tab" aria-controls="pills-4" aria-selected="true"/>Yes</div>
      <div class="btn2 btn-success mx-2 radioinput"><input type="radio" value="no" name="question3" id="pills-4-tab" data-toggle="pill" href="#pills-4" role="tab" aria-controls="pills-4" aria-selected="true"/>No</div>
      </div>
    </div>
  </div>
</div>

</div>

</div>



<!-- Questions Loop end -->





</div>



    </div>
    
    @include('layout.wrapper.end')
