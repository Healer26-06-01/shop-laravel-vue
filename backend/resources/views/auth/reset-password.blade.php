@extends('layouts.auth-app')
@push('title')
    Đổi Mật Khẩu
@endpush
@section('section')
    <div class="card mb-3">
        <div class="card-body">
            <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4">Đổi Mật Khẩu</h5>
            </div>
            <form class="row g-3 needs-validation" action="{{ route('password.store') }}" method="POST">
                @csrf

                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                <div class="col-12">
                    <input type="email" name="email" class="form-control" id="yourEmail" placeholder="Email của bạn"
                        required value="{{ old('email', $request->email) }}">
                    @error('email')
                        <small class=" error fw-lighter text-danger text-lg mx-3">*{{ $message }}*</small>
                    @enderror
                </div>
                <div class="col-12">
                    <input type="password" name="password" class="form-control" id="yourPassword" placeholder="Mật khẩu****"
                        required>
                    @error('password')
                        <small class=" error fw-lighter text-danger text-lg mx-3">*{{ $message }}*</small>
                    @enderror
                </div>
                <div class="col-12">
                    <input type="password" name="password_confirmation" class="form-control" id="yourPassword2"
                        placeholder="Xác nhận mật khẩu****" required>
                    @error('password_confirmation')
                        <small class=" error fw-lighter text-danger text-lg mx-3">*{{ $message }}*</small>
                    @enderror
                </div>

                <div class="col-12">
                    <button class="btn btn-primary w-100" type="submit">Đặt Lại Mật Khẩu</button>
                </div>
            </form>
        </div>
    </div>
@endsection
