@extends('layouts.auth') @section('title') Register | Admin Kursus Mengemudi @endsection
@section('content')
<section class="min-vh-100 mb-8">
  <div
    class="
      page-header
      align-items-start
      min-vh-50
      pt-5
      pb-11
      m-3
      border-radius-lg
    "
    style="
      background-image: url('../assets/img/curved-images/curved14.jpg');
    "
  >
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5 text-center mx-auto">
          <h1 class="text-white mb-2 mt-5">Welcome!</h1>
          <p class="text-lead text-white">
            Use these awesome forms to login or create new account in your
            project for free.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row mt-lg-n10 mt-md-n11 mt-n10">
      <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
        <div class="card z-index-0">
          <div class="card-body">
            <form form action="{{ route('register') }}" method="post">
              @csrf @if(session('errors'))
              <div
                class="alert alert-danger alert-dismissible fade show"
                role="alert"
              >
                Something it's wrong:
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              @endif
              <div class="mb-3">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Name"
                  aria-label="Name"
                  name="name"
                  aria-describedby="email-addon"
                />
              </div>
              <div class="mb-3">
                <input
                  type="email"
                  class="form-control"
                  placeholder="Email"
                  aria-label="Email"
                  name="email"
                  aria-describedby="email-addon"
                />
              </div>
              <div class="mb-3">
                <input
                  type="password"
                  class="form-control"
                  placeholder="Password"
                  aria-label="Password"
                  name="password"
                  aria-describedby="password-addon"
                />
              </div>
              <div class="mb-3">
                <input
                  type="password"
                  class="form-control"
                  placeholder="Konfirmasi Password"
                  aria-label="Password"
                  name="password_confirmation"
                  aria-describedby="password-addon"
                />
              </div>
              <div class="text-center">
                <button
                  type="submit"
                  class="btn bg-gradient-dark w-100 my-4 mb-2"
                >
                  Register
                </button>
              </div>
              <p class="text-sm mt-3 mb-0">
                Already have an account?
                <a
                  href="{{ route('login') }}"
                  class="text-dark font-weight-bolder"
                  >Sign in</a
                >
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection @push('js')
<script>
  var win = navigator.platform.indexOf("Win") > -1
  if (win && document.querySelector("#sidenav-scrollbar")) {
    var options = {
      damping: "0.5",
    }
    Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options)
  }
</script>
@endpush
