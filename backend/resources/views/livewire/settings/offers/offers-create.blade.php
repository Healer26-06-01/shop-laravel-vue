@push('title')
    Tạo Sản Phẩm
@endpush
@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/css/tom-select.css" rel="stylesheet">
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

    <x-form pageTitle='Tạo Ưu Đãi' action='create'>
        <x-form-input-field.general col="col-6" lable="Tên Ưu Đãi" name="name" type="text" wireModel='name'>
        </x-form-input-field.general>

        <x-form-input-field.general col="col-6" lable="Slug Ưu Đãi" name="slug" type="text" wireModel='slug'>
        </x-form-input-field.general>

        <x-form-input-field.general col="col-6" lable="Tiêu Đề Ưu Đãi" name="title" type="text"
            wireModel='title'>
        </x-form-input-field.general>

        <x-form-input-field.select-for-enum col='col-6' defaultOption='Chọn Loại Ưu Đãi' :options='$offersTypeOption'
            wireModel='type' colName='name' name="type">
        </x-form-input-field.select-for-enum>

        <x-form-input-field.general col="col-6" lable="Giảm Giá Ưu Đãi" name="discount" type="text"
            wireModel='discount'>
        </x-form-input-field.general>

        <x-form-input-field.select-for-array col='col-6' defaultOption='Chọn Trạng Thái' :options='$statusOption'
            wireModel='status' colName='name' name="status">
        </x-form-input-field.select-for-array>

        <x-form-input-field.file col="col-6" label="Tải Lên Hình Ảnh" name="image" wireModel='image'>
        </x-form-input-field.file>

        <div class="col-6"><input wire:model='start_date' class="form-control" id="start_date" type="text"
                name="start_date" autocomplete="off" placeholder="Chọn Ngày Bắt Đầu" aria-label="Ngày Bắt Đầu">
            @error('start_date')
                <span class="error fw-light text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-6"><input wire:model='expire_date' class="form-control" id="expire_date" type="text"
                name="expire_date" autocomplete="off" placeholder="Chọn Ngày Kết Thúc" aria-label="Ngày Kết Thúc">
            @error('expire_date')
                <span class="error fw-light text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div wire:ignore>
            <select id="select-cate" class="form-select" name="state[]" multiple
                placeholder="Chọn danh mục...(tùy chọn)" autocomplete="off">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div wire:ignore>
            <select id="select-subCate" class="form-select" name="state[]" multiple
                placeholder="Chọn danh mục phụ...(tùy chọn)" autocomplete="off">
                @foreach ($subCategories as $subCategory)
                    <option value="{{ $subCategory->id }}">{{ $subCategory->name }}</option>
                @endforeach
            </select>
        </div>
        <div wire:ignore>
            <select id="select-brand" class="form-select" name="state[]" multiple
                placeholder="Chọn thương hiệu...(tùy chọn)" autocomplete="off">
                @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                @endforeach
            </select>
        </div>

        <x-form-input-field.submit color='primary' buttonName="Lưu"></x-form-input-field.submit>
    </x-form>

    <!-- End #main -->
    <!-- ======= Footer ======= -->
    @livewire('layouts.footer')
    <!-- End Footer -->
</div>
@push('script')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script>
    <script>
        new TomSelect("#select-cate", {
            plugins: ['remove_button'],
            create: true,
            onChange: function(value) {
                @this.set('selectedCategories', value)
            }
        });
        new TomSelect("#select-subCate", {
            plugins: ['remove_button'],
            create: true,
            onChange: function(value) {
                @this.set('selectedSubCategories', value)
            }
        });
        new TomSelect("#select-brand", {
            plugins: ['remove_button'],
            create: true,
            onChange: function(value) {
                @this.set('selectedBrands', value)
            }
        });


        flatpickr("#start_date", {
            dateFormat: "Y-m-d H:i:s",
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });
        flatpickr("#expire_date", {
            dateFormat: "Y-m-d H:i:s",
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });
    </script>
@endpush
