@push('title')
    Danh mục
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

    <x-table addNewRoute='settings.shippingMethods.create' pageTitle='Bảng phương thức vận chuyển'
        tableName="Bảng phương thức vận chuyển" :$columnNamesArr :tableData='$methods' :$tableDataColumnNames>
    </x-table>

    <!-- End #main -->
    <!-- ======= Footer ======= -->
    @livewire('layouts.footer')
    <!-- End Footer -->
</div>
