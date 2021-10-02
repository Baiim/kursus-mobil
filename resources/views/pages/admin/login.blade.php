@extends('layouts.auth') @section('title') Login | Admin Kursus Mengemudi @endsection
@section('content')
<main class="main-content mt-0">
  <section>
    <div class="page-header min-vh-75">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
            <div class="card card-plain mt-8">
              <div class="card-header pb-0 text-left bg-transparent">
                <h3 class="font-weight-bolder text-info text-gradient">
                  Welcome back
                </h3>
                <p class="mb-0">Enter your email and password to sign in</p>
              </div>
              <div class="card-body">
                <form form action="{{ route('login') }}" method="post">
                  @csrf @if(session('errors'))
                  <div
                    class="alert alert-danger alert-dismissible fade show"
                    role="alert"
                  >
                    Something it's wrong:
                    <button
                      type="button"
                      class="close"
                      data-dismiss="alert"
                      aria-label="Close"
                    >
                      <span aria-hidden="true">×</span>
                    </button>
                    <ul>
                      @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                  @endif @if (Session::has('success'))
                  <div class="alert alert-success">
                    {{ Session::get('success') }}
                  </div>
                  @endif @if (Session::has('error'))
                  <div class="alert alert-danger">
                    {{ Session::get('error') }}
                  </div>
                  @endif
                  <label>Email</label>
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
                  <label>Password</label>
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
                  <div class="text-center">
                    <button
                      type="submit"
                      class="btn bg-gradient-info w-100 mt-4 mb-0"
                    >
                      Sign in
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div
              class="
                oblique
                position-absolute
                top-0
                h-100
                d-md-block d-none
                me-n8
              "
            >
              <div
                class="
                  oblique-image
                  bg-cover
                  position-absolute
                  fixed-top
                  ms-auto
                  h-100
                  z-index-0
                  ms-n6
                "
                style="
                  background-image: url('../assets/img/curved-images/curved6.jpg');
                "
              ></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
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
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
@endpush
