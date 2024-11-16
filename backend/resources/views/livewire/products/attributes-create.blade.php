@push('title')
    Tạo Thuộc Tính
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

    <x-form pageTitle='Tạo Thuộc Tính' action='create'>
        <x-form-input-field.general col="col-8" lable="Tên Thuộc Tính" name="name" type="text" wireModel='name'>
        </x-form-input-field.general>

        <div class="col-1">
            <button wire:click.prevent='increaseInputField' type="button" class="btn btn-outline-primary"><i
                    class="bi bi-plus-circle"></i></button>
        </div>
        <div class="col-1">
            <button wire:click.prevent='decreaseInputField' type="button" class="btn btn-outline-primary"><i
                    class="bi bi-dash-circle"></i></button>
        </div>

        @for ($i = 1; $i <= $plusButton; $i++)
            <x-form-input-field.general col="col-sm-4" lable="Giá Trị Thuộc Tính" name="value" type="text"
                wireModel='values.{{ $i }}'>
            </x-form-input-field.general>
        @endfor

        <x-form-input-field.submit color='primary' buttonName="Lưu"></x-form-input-field.submit>
    </x-form>

    <!-- End #main -->
    <!-- ======= Footer ======= -->
    @livewire('layouts.footer')
    <!-- End Footer -->
</div>
