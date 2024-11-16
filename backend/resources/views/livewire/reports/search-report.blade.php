@push('title')
    Báo cáo Tìm kiếm
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
    <x-table pageTitle='Báo cáo Bán hàng' tableName="Bảng Báo cáo Bán hàng" :$columnNamesArr :showBtn='false'
        :tableData='$keywordReports' :$tableDataColumnNames>
    </x-table>
    <!-- Kết thúc #main -->
    <!-- ======= Chân trang ======= -->
    @livewire('layouts.footer')
    <!-- Kết thúc Chân trang -->

</div>
