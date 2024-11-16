@extends('layouts.error-app')
@push('title')
    Dịch Vụ Không Khả Dụng
@endpush
@section('section')
    <main>
        <div class="container">
            <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
                <h1>503</h1>
                <h2>Dịch Vụ Không Khả Dụng.</h2>
                <a class="btn" href="{{ route('home') }}">Trở về trang chủ</a>
            </section>
        </div>
    </main>
@endsection
