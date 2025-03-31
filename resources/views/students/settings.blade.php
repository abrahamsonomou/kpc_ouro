@extends('students.base')
@section('title', 'Parametres')
@section('isActive5')
-is-active -dark-bg-dark-2
@endsection
@section('content')

<div class="dashboard__content bg-light-4">
    <div class="row pb-50 mb-10">
      <div class="col-auto">

        <h1 class="text-30 lh-12 fw-700">Profile </h1>
        {{-- <div class="mt-10">Lorem ipsum dolor sit amet, consectetur.</div> --}}

      </div>
    </div>


    <div class="row y-gap-30">
      <div class="col-12">
        <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
          <div class="tabs -active-purple-2 js-tabs pt-0">
            <div class="tabs__controls d-flex x-gap-30 items-center pt-20 px-30 border-bottom-light js-tabs-controls">
              <button class="tabs__button text-light-1 js-tabs-button is-active" data-tab-target=".-tab-item-1" type="button">
                Mettre à jour mon profile
              </button>
              <button class="tabs__button text-light-1 js-tabs-button" data-tab-target=".-tab-item-2" type="button">
                Password
              </button>
              {{-- <button class="tabs__button text-light-1 js-tabs-button" data-tab-target=".-tab-item-3" type="button">
                Social Profiles
              </button> --}}
              {{-- <button class="tabs__button text-light-1 js-tabs-button" data-tab-target=".-tab-item-4" type="button">
                Notifications
              </button> --}}
              {{-- <button class="tabs__button text-light-1 js-tabs-button" data-tab-target=".-tab-item-5" type="button">
                Close Account
              </button> --}}
            </div>

            <div class="tabs__content py-30 px-30 js-tabs-content">
              <div class="tabs__pane -tab-item-1 is-active">

                @if ($errors->any())
                <div>
                    <p style="color: red;">{{ $errors->first() }}</p>
                </div>
                @endif

                <form action="{{ route('profile.update') }}" method="POST" class="contact-form row y-gap-30" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
          
                  <div class="col-md-6">
                      <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">First Name</label>
                      <input type="text" name="first_name" value="{{ old('first_name', $user->first_name) }}" placeholder="First Name">
                  </div>
          
                  <div class="col-md-6">
                      <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Last Name</label>
                      <input type="text" name="last_name" value="{{ old('last_name', $user->last_name) }}" placeholder="Last Name" >
                  </div>
          
                  <div class="col-md-6">
                      <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Telephone</label>
                      <input type="text" name="telephone" value="{{ old('telephone', $user->telephone) }}" placeholder="telephone" >
                  </div>
          
                  <div class="col-md-6">
                      <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Date naissance</label>
                      <input type="text" class="form-control" name="date_naissance" value="{{ old('date_naissance', $user->date_naissance) }}" placeholder="02/10/1900" >
                  </div>
          
                  <div class="col-md-6">
                      <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Address Line 1</label>
                      <input type="text" name="adresse1" value="{{ old('adresse1', $user->adresse1) }}" placeholder="Address Line 1" >
                  </div>
          
                  <div class="col-md-6">
                      <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Address Line 2</label>
                      <input type="text" name="adresse2" value="{{ old('adresse2', $user->adresse2) }}" placeholder="Address Line 2">
                  </div>
          
                  <div class="mb-2 col-md-6">
                    <label for="pays_id" class="text-16 lh-1 fw-500 text-dark-1 mb-10">Pays</label>
                    <select name="pays_id" id="pays_id" class="form-control">
                        @foreach($pays as $pay)
                            <option value="{{ $pay->id }}">{{ $pay->nom }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-2 col-md-6">
                    <label for="ville_id" class="text-16 lh-1 fw-500 text-dark-1 mb-10">Ville</label>
                    <select name="ville_id" id="ville_id" class="form-control">
                        @foreach($villes as $ville)
                            <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-2 col-md-6">
                  <label for="avatar">Avatar</label>
                  <input type="file" name="avatar" id="avatar" class="form-control">
              </div>
              @if($user->avatar)
              <div class="mb-2 col-md-6 mt-3">
                  <label>Current Avatar</label>
                  <div>
                      <img src="{{ asset('storage/users/avatar/' . $user->avatar) }}" alt="User Avatar" class="img-thumbnail" width="150">
                  </div>
              </div>
              @endif
          
                  <div class="col-12">
                      <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Personal info</label>
                      <textarea name="bio" placeholder="Text..." rows="7">{{ old('bio', $user->bio) }}</textarea>
                  </div>
          
                  {{-- <div class="col-12">
                      <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Avatar (optional)</label>
                      <input type="file" name="avatar" accept="image/*" class="mb-3">
                  </div> --}}
          
                  <div class="col-12">
                      <button class="button -md -purple-1 text-white" type="submit">Mettre à jour mon profile</button>
                  </div>
              </form>

              </div>

              {{-- <div class="tabs__pane -tab-item-2">
                <form action="{{ route('password.update') }}" method="POST" class="contact-form row y-gap-30">
                  @csrf

                  <div class="col-md-7">

                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Current password</label>

                    <input type="text" placeholder="Current password">
                  </div>


                  <div class="col-md-7">

                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">New password</label>

                    <input type="text" placeholder="New password">
                  </div>


                  <div class="col-md-7">

                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Confirm New Password</label>

                    <input type="text" placeholder="Confirm New Password">
                  </div>

                  <div class="col-12">
                    <button class="button -md -purple-1 text-white">Save Password</button>
                  </div>
                </form>
              </div> --}}

              <div class="tabs__pane -tab-item-2">
                @if ($errors->any())
                <div>
                    <p style="color: red;">{{ $errors->first() }}</p>
                </div>
                @endif
                
                <form action="{{ route('password.update') }}" method="POST" class="contact-form row y-gap-30">
                  @csrf
              
                  <div class="col-md-7">
                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Current password</label>
                    <input type="password" name="current_password" placeholder="Current password" required>
                  </div>
              
                  <div class="col-md-7">
                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">New password</label>
                    <input type="password" name="new_password" placeholder="New password" required>
                  </div>
              
                  <div class="col-md-7">
                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Confirm New Password</label>
                    <input type="password" name="new_password_confirmation" placeholder="Confirm New Password" required>
                  </div>
              
                  <div class="col-12">
                    <button class="button -md -purple-1 text-white" type="submit">Save Password</button>
                  </div>
                </form>
              </div>

              {{-- <div class="tabs__pane -tab-item-3">
                <form action="#" class="contact-form row y-gap-30">

                  <div class="col-md-6">

                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Twitter</label>

                    <input type="text" placeholder="Twitter Profile">
                  </div>


                  <div class="col-md-6">

                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Facebook</label>

                    <input type="text" placeholder="Facebook Profile">
                  </div>


                  <div class="col-md-6">

                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Instagram</label>

                    <input type="text" placeholder="Instagram Profile">
                  </div>


                  <div class="col-md-6">

                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">LinkedIn Profile URL</label>

                    <input type="text" placeholder="LinkedIn Profile">
                  </div>

                  <div class="col-12">
                    <button class="button -md -purple-1 text-white">Save Social Profile</button>
                  </div>
                </form>
              </div> --}}

              {{-- <div class="tabs__pane -tab-item-4">
                <form action="#" class="contact-form">
                  <div class="row">
                    <div class="col-12">
                      <div class="text-16 fw-500 text-dark-1">Notifications - Choose when and how to be notified</div>
                      <p class="text-14 lh-13 mt-5">Select push and email notifications you'd like to receive</p>
                    </div>
                  </div>

                  <div class="pt-60">
                    <div class="row y-gap-20 justify-between">
                      <div class="col-auto">
                        <div class="text-16 fw-500 text-dark-1">Choose when and how to be notified</div>
                      </div>
                    </div>


                    <div class="pt-30">

                      <div class="row y-gap-20 justify-between">
                        <div class="col-auto">
                          <div class="text-16 fw-500 text-dark-1">Subscriptions</div>
                          <p class="text-14 lh-13 mt-5">Notify me about activity from the profiles I'm subscribed to</p>
                        </div>
                        <div class="col-auto">
                          <div class="form-switch">
                            <div class="switch" data-switch=".js-switch-content">
                              <input type="checkbox">
                              <span class="switch__slider"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>


                    <div class="border-top-light pt-20 mt-20">

                      <div class="row y-gap-20 justify-between">
                        <div class="col-auto">
                          <div class="text-16 fw-500 text-dark-1">Recommended Courses</div>
                          <p class="text-14 lh-13 mt-5">Notify me about activity from the profiles I'm subscribed to</p>
                        </div>
                        <div class="col-auto">
                          <div class="form-switch">
                            <div class="switch" data-switch=".js-switch-content">
                              <input type="checkbox">
                              <span class="switch__slider"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>


                    <div class="border-top-light pt-20 mt-20">

                      <div class="row y-gap-20 justify-between">
                        <div class="col-auto">
                          <div class="text-16 fw-500 text-dark-1">Replies to my comments</div>
                          <p class="text-14 lh-13 mt-5">Notify me about activity from the profiles I'm subscribed to</p>
                        </div>
                        <div class="col-auto">
                          <div class="form-switch">
                            <div class="switch" data-switch=".js-switch-content">
                              <input type="checkbox">
                              <span class="switch__slider"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>


                    <div class="border-top-light pt-20 mt-20">

                      <div class="row y-gap-20 justify-between">
                        <div class="col-auto">
                          <div class="text-16 fw-500 text-dark-1">Activity on my comments</div>
                          <p class="text-14 lh-13 mt-5">Notify me about activity from the profiles I'm subscribed to</p>
                        </div>
                        <div class="col-auto">
                          <div class="form-switch">
                            <div class="switch" data-switch=".js-switch-content">
                              <input type="checkbox">
                              <span class="switch__slider"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>

                  <div class="pt-60">
                    <div class="row y-gap-20 justify-between">
                      <div class="col-auto">
                        <div class="text-16 fw-500 text-dark-1">Email notifications</div>
                      </div>
                    </div>


                    <div class="pt-30">

                      <div class="row y-gap-20 justify-between">
                        <div class="col-auto">
                          <div class="text-16 fw-500 text-dark-1">Send me emails about my Cursus activity and updates I requested</div>
                          <p class="text-14 lh-13 mt-5">Notify me about activity from the profiles I'm subscribed to</p>
                        </div>
                        <div class="col-auto">
                          <div class="form-switch">
                            <div class="switch" data-switch=".js-switch-content">
                              <input type="checkbox">
                              <span class="switch__slider"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>


                    <div class="border-top-light pt-20 mt-20">

                      <div class="row y-gap-20 justify-between">
                        <div class="col-auto">
                          <div class="text-16 fw-500 text-dark-1">Promotions, course recommendations, and helpful resources from Cursus.</div>
                          <p class="text-14 lh-13 mt-5">Notify me about activity from the profiles I'm subscribed to</p>
                        </div>
                        <div class="col-auto">
                          <div class="form-switch">
                            <div class="switch" data-switch=".js-switch-content">
                              <input type="checkbox">
                              <span class="switch__slider"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>


                    <div class="border-top-light pt-20 mt-20">

                      <div class="row y-gap-20 justify-between">
                        <div class="col-auto">
                          <div class="text-16 fw-500 text-dark-1">Announcements from instructors whose course(s) I’m enrolled in.</div>
                          <p class="text-14 lh-13 mt-5">Notify me about activity from the profiles I'm subscribed to</p>
                        </div>
                        <div class="col-auto">
                          <div class="form-switch">
                            <div class="switch" data-switch=".js-switch-content">
                              <input type="checkbox">
                              <span class="switch__slider"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>

                  <div class="row pt-30">
                    <div class="col-12">
                      <button class="button -md -purple-1 text-white">Save Changes</button>
                    </div>
                  </div>
                </form>
              </div> --}}

              {{-- <div class="tabs__pane -tab-item-5">
                <form action="#" class="contact-form row y-gap-30">
                  <div class="col-12">
                    <div class="text-16 fw-500 text-dark-1">Close account</div>
                    <p class="mt-10">Warning: If you close your account, you will be unsubscribed from all your 5 courses, and will lose access forever.</p>
                  </div>


                  <div class="col-md-7">

                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Enter Password</label>

                    <input type="text" placeholder="Enter Password">
                  </div>


                  <div class="col-12">
                    <button class="button -md -purple-1 text-white">Close Account</button>
                  </div>
                </form>
              </div> --}}
            </div>
          </div>
        </div>
      </div>
    </div>

</div>

@endsection
