@push('title')
    Phiếu giảm giá
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

    <!-- Kết thúc Tiêu đề Trang -->

    <x-table addNewRoute='settings.coupons.create' pageTitle='Bảng Phiếu giảm giá' tableName="Bảng Phiếu giảm giá"
        :$columnNamesArr :tableData='$coupons' :$tableDataColumnNames :isBoolean='true' :$booleanAttributes
        :$booleanColNames :$booleanClasses>
    </x-table>

    <!-- Kết thúc #main -->
    <!-- ======= Chân trang ======= -->
    @livewire('layouts.footer')
    <!-- Kết thúc Chân trang -->

</div>
