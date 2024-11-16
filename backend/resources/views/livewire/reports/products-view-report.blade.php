@push('title')
    Báo Cáo Xem Sản Phẩm
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
    <x-table pageTitle='Báo Cáo Tồn Kho Sản Phẩm' tableName="Bảng Báo Cáo Tồn Kho Sản Phẩm" :$columnNamesArr
        :showBtn='false' :tableData='$productViewReports' :$tableDataColumnNames imageFolder='products'>
    </x-table>
    <!-- End #main -->
    <!-- ======= Footer ======= -->
    @livewire('layouts.footer')
    <!-- End Footer -->

</div>
