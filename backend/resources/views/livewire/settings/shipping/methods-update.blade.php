@push('title')
    Cập Nhật Phương Thức Vận Chuyển
@endpush

<div>
    <!-- ======= Header ======= -->
    <div wire:ignore>
        @livewire('layouts.header')
    </div>
    <hr>
    <!-- End Header -->
    <!-- ======= Sidebar ======= -->
    @livewire('layouts.sidebar')
    <!-- End Sidebar-->

    <x-form pageTitle='Cập Nhật Phương Thức Vận Chuyển' action='update'>
        <x-form-input-field.general col="col-6" lable="Tên phương thức vận chuyển" name="name" type="text"
            wireModel='name'>
        </x-form-input-field.general>

        <x-form-input-field.general col="col-6" lable="Chi phí phương thức vận chuyển" name="cost" type="text"
            wireModel='cost'>
        </x-form-input-field.general>

        <x-form-input-field.submit color='primary' buttonName="Lưu"></x-form-input-field.submit>
    </x-form>

    <!-- End #main -->
    <!-- ======= Footer ======= -->
    @livewire('layouts.footer')
    <!-- End Footer -->
</div>
