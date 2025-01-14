@extends('auth.layout')

@section('content')
  <div class="row justify-content-center w-100">
    <div class="col-md-8 col-lg-6 col-xxl-3">
      <div class="card mb-0">
        <div class="card-body">
          <h1 class="text-nowrap text-center d-block py-3 w-100">
            Personal Data Center
          </h1>
          <p class="text-center">By Fahmi</p>
          <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input name="username" type="text" class="form-control" id="username"
                aria-describedby="username-invalid">
              @error('username')
                <div id="username-invalid" class="invalid-feedback">
                  {{ $value }}
                </div>
              @enderror
            </div>
            <div class="mb-4">
              <label for="password" class="form-label">Password</label>
              <input name="password" type="password" class="form-control" id="password"
                aria-describedby="password-invalid">
              @error('password')
                <div id="password-invalid" class="invalid-feedback">
                  {{ $value }}
                </div>
              @enderror
            </div>
            <div class="d-flex align-items-center justify-content-between mb-4">
              <div class="form-check">
                <input name="rmember" class="form-check-input primary" type="checkbox" value="1" id="remember"
                  checked>
                <label class="form-check-label text-dark" for="remember">
                  Ingat saya
                </label>
              </div>
              <button type="submit" class="text-primary fw-bold">Lupa Password ?</button>
            </div>
            <a href="" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Log In</a>
            <div class="d-flex align-items-center justify-content-center">
              <p class="fs-4 mb-0 fw-bold">Pengguna baru?</p>
              <a class="text-primary fw-bold ms-2" href="#">Buat Akun</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
