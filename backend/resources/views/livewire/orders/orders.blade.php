@push('title')
    Đơn hàng
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

    <x-table pageTitle='Bảng Đơn hàng' tableName="Bảng Đơn hàng" :$columnNamesArr :tableData='$orders' :$tableDataColumnNames
        :isEnum='true' :$enumColNames :$enumAttributes :$enumClasses>
    </x-table>

    <!-- Kết thúc #main -->
    <!-- ======= Chân trang ======= -->
    @livewire('layouts.footer')
    <!-- Kết thúc Chân trang -->
</div>
