@push('title')
    Báo Cáo Mua Sản Phẩm
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
    <x-table pageTitle='Báo Cáo Mua Sản Phẩm' tableName="Bảng Báo Cáo Mua Sản Phẩm" :$columnNamesArr :showBtn='false'
        :tableData='$revenueReports' :$tableDataColumnNames imageFolder='products'>
    </x-table>
    <!-- End #main -->
    <!-- ======= Footer ======= -->
    @livewire('layouts.footer')
    <!-- End Footer -->

</div>
