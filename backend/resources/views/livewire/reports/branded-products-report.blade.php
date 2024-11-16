@push('title')
    Báo Cáo Sản Phẩm Theo Thương Hiệu
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
    <x-table pageTitle='Báo Cáo Sản Phẩm Theo Thương Hiệu' tableName="Bảng Báo Cáo Sản Phẩm Theo Thương Hiệu"
        :$columnNamesArr :showBtn='false' :tableData='$brandReports' :$tableDataColumnNames imageFolder='brands'>
    </x-table>
    <!-- End #main -->
    <!-- ======= Footer ======= -->
    @livewire('layouts.footer')
    <!-- End Footer -->

</div>
