@extends('layouts.error-app')
@push('title')
    Không được phép
@endpush
@section('section')
    <main>
        <div class="container">
            <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
                <h1>401</h1>
                <h2>Không được phép.</h2>
                <a class="btn" href="{{ route('home') }}">Quay lại trang chủ</a>
            </section>
        </div>
    </main>
@endsection
