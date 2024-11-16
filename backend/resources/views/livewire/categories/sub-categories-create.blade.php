@push('title')
    Tạo Danh Mục Con
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

    <x-form pageTitle='Tạo Danh Mục Con' action='create'>
        <x-form-input-field.general col="col-6" lable="Tên Danh Mục Con" name="name" type="text" wireModel='name'>
        </x-form-input-field.general>
        <x-form-input-field.general col="col-6" lable="Slug Danh Mục Con" name="slug" type="text"
            wireModel='slug'>
        </x-form-input-field.general>
        <x-form-input-field.select col='col-6' defaultOption='Chọn Danh Mục' :options='$categories'
            wireModel='category_id' colName='name' name="category_id">
        </x-form-input-field.select>

        <x-form-input-field.select-for-array col='col-6' defaultOption='Chọn Trạng Thái' :options='$statusOption'
            wireModel='status' colName='name' name="status">
        </x-form-input-field.select-for-array>
        <x-form-input-field.submit color='primary' buttonName="Lưu"></x-form-input-field.submit>
    </x-form>

    <!-- End #main -->
    <!-- ======= Footer ======= -->
    @livewire('layouts.footer')
    <!-- End Footer -->

</div>
