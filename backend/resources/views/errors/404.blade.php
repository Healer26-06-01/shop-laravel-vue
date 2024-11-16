@extends('layouts.error-app')
@push('title')
    Không Tìm Thấy
@endpush
@section('section')
    <main>
        <div class="container">
            <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
                <h1>404</h1>
                <h2>Trang bạn đang tìm kiếm không tồn tại.</h2>
                <a class="btn" href="{{ route('home') }}">Quay lại trang chủ</a>
            </section>
        </div>
    </main>
@endsection
