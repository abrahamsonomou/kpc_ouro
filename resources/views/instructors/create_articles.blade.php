@extends('instructors.base')
@section('title', 'Create articles')
@section('isActive7')
-is-active -dark-bg-dark-2
@endsection
@section('content')

<div class="dashboard__content bg-light-4">
    <div class="row pb-50 mb-10">
      <div class="col-auto">

        <h1 class="text-30 lh-12 fw-700">Create New Article</h1>

      </div>
    </div>


    <div class="row y-gap-60">
      <div class="col-12">
        <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
          <div class="d-flex items-center py-20 px-30 border-bottom-light">
            <h2 class="text-17 lh-1 fw-500">Basic Information</h2>
          </div>

          <div class="py-30 px-30">
            <form class="contact-form row y-gap-30" action="#">

              <div class="col-12">

                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Course Title*</label>

                <input type="text" placeholder="Learn Figma - UI/UX Design Essential Training">
              </div>


              <div class="col-12">

                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Article Description*</label>

                <textarea placeholder="Description" rows="7"></textarea>
              </div>


              <div class="col-md-6">

                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Course Level*</label>

                <input type="text" placeholder="Select">
              </div>


              <div class="col-md-6">

                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Audio Language*</label>

                <input type="text" placeholder="Select">
              </div>


              <div class="col-md-6">

                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Close Caption*</label>

                <input type="text" placeholder="Select">
              </div>


              <div class="col-md-6">

                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Course Category*</label>

                <input type="text" placeholder="Select">
              </div>

            </form>

            <div class="row y-gap-20 justify-between pt-15">
              <div class="col-auto">
                <button class="button -md -purple-1 text-white">Enregistrer</button>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
  
@endsection
