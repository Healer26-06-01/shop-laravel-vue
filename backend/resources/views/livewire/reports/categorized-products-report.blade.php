@push('title')
    Báo Cáo Sản Phẩm Theo Danh Mục
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
    <x-table pageTitle='Báo Cáo Sản Phẩm Theo Danh Mục' tableName="Bảng Báo Cáo Sản Phẩm Theo Danh Mục" :$columnNamesArr
        :showBtn='false' :tableData='$categoriesReports' :$tableDataColumnNames imageFolder='categories'>
    </x-table>
    <!-- End #main -->
    <!-- ======= Footer ======= -->
    @livewire('layouts.footer')
    <!-- End Footer -->

</div>
