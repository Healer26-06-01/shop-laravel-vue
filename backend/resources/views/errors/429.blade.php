@extends('layouts.error-app')
@push('title')
    Quá Nhiều Yêu Cầu
@endpush
@section('section')
    <main>
        <div class="container">
            <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
                <h1>404</h1>
                <h2>Quá Nhiều Yêu Cầu.</h2>
                <a class="btn" href="{{ route('home') }}">Trở về trang chủ</a>
            </section>
        </div>
    </main>
@endsection
