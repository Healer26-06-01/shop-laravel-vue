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

    <x-table addNewRoute='settings.offers.create' pageTitle='Bảng ưu đãi' tableName="Bảng ưu đãi" :$columnNamesArr
        :tableData='$offers' :$tableDataColumnNames :isBoolean='true' :$booleanAttributes :$booleanColNames
        :$booleanClasses>
    </x-table>

    <!-- End #main -->
    <!-- ======= Footer ======= -->
    @livewire('layouts.footer')
    <!-- End Footer -->
</div>
