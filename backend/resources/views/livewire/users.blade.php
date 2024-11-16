@push('title')
    Người dùng
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

    <x-table pageTitle='Bảng Người dùng' tableName="Bảng Người dùng" :$columnNamesArr :tableData='$users'
        :$tableDataColumnNames :showBtn='false'>
    </x-table>

    <!-- Kết thúc #main -->
    <!-- ======= Chân trang ======= -->
    @livewire('layouts.footer')
    <!-- Kết thúc Chân trang -->
</div>
