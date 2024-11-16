@extends('layouts.error-app')
@push('title')
    Trang Hết Hạn
@endpush
@section('section')
    <main>
        <div class="container">
            <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
                <h1>419</h1>
                <h2>Trang Hết Hạn.</h2>
                <a class="btn" href="{{ route('home') }}">Quay lại trang chủ</a>
            </section>
        </div>
    </main>
@endsection
