@extends('layouts.error-app')
@push('title')
    Lỗi Máy Chủ
@endpush
@section('section')
    <main>
        <div class="container">
            <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
                <h1>500</h1>
                <h2>Ôi! Đã xảy ra lỗi.</h2>
                <a class="btn" href="{{ route('home') }}">Quay lại trang chủ</a>
            </section>
        </div>
    </main>
@endsection
