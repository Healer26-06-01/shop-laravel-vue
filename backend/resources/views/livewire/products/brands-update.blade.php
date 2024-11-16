@push('title')
    Cập Nhật Thương Hiệu
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

    <x-form pageTitle='Tạo Thương Hiệu' action='update'>
        <x-form-input-field.general col="col-6" lable="Tên Thương Hiệu" name="name" type="text" wireModel='name'>
        </x-form-input-field.general>
        <x-form-input-field.general col="col-6" lable="Slug Thương Hiệu" name="slug" type="text" wireModel='slug'>
        </x-form-input-field.general>
        <x-form-input-field.select-for-array col='col-6' defaultOption='Chọn Trạng Thái' :options='$statusOption'
            wireModel='status' colName='name' name="status">
        </x-form-input-field.select-for-array>
        <x-form-input-field.file col="col-6" label="Tải Lên Hình Ảnh" name="image" wireModel='image'>
        </x-form-input-field.file>
        <x-form-input-field.submit color='primary' buttonName="Lưu"></x-form-input-field.submit>
    </x-form>

    <!-- End #main -->
    <!-- ======= Footer ======= -->
    @livewire('layouts.footer')
    <!-- End Footer -->

</div>
