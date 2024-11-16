@extends('layouts.auth-app')
@push('title')
    Đăng nhập
@endpush
@section('section')
    <div class="card mb-3" style="width: 109%">
        <div class="card-body">
            <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4">Đăng nhập vào tài khoản của bạn</h5>
            </div>
            <form action="{{ route('login') }}" method="POST" class="row g-3 needs-validation">
                @csrf

                @if (Session::has('status'))
                    <p class="text-success text-center">{{ Session::get('status') }}</p>
                @endif

                <div class="col-12">
                    <input type="email" value="{{ old('email') }}" name="email" class="form-control" id="yourUsername"
                        placeholder="Email của bạn" required>
                    @error('email')
                        <small class=" error fw-lighter text-danger text-lg mx-3">*{{ $message }}*</small>
                    @enderror
                </div>
                <div class="col-12">
                    <input type="password" value="{{ old('password') }}" name="password" class="form-control"
                        id="yourPassword" placeholder="Mật khẩu****" required>
                    @error('password')
                        <small class=" error fw-lighter text-danger text-lg mx-3">*{{ $message }}*</small>
                    @enderror
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Ghi nhớ đăng nhập</label>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary w-100" type="submit">Đăng nhập</button>
                </div>
                <div class="col-12">
                    <p class="small mb-0">Quên mật khẩu? <a href="{{ route('password.request') }}">Đặt lại mật khẩu</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
@endsection
