@push('title')
    Sản phẩm
@endpush
<div>
    <!-- ======= Tiêu đề ======= -->
    <div wire:ignore>
        @livewire('layouts.header')
    </div>
    <hr>
    <!-- Kết thúc Tiêu đề -->
    <!-- ======= Thanh bên ======= -->
    @livewire('layouts.sidebar')
    <!-- Kết thúc Thanh bên-->

    <x-table addNewRoute='products.create' pageTitle='Bảng Sản phẩm' tableName="Bảng Sản phẩm" :$columnNamesArr
        :tableData='$products' :$tableDataColumnNames :isBoolean='true' :$booleanAttributes :$booleanColNames
        :$booleanClasses imageFolder='products'>
    </x-table>

    <!-- Kết thúc #main -->
    <!-- ======= Chân trang ======= -->
    @livewire('layouts.footer')
    <!-- Kết thúc Chân trang -->
</div>
