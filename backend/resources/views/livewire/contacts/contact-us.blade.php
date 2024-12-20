@push('title')
    Liên hệ
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

    <x-table pageTitle='Bảng Liên Hệ' tableName="Bảng Liên Hệ" :$columnNamesArr :tableData='$contacts' :$tableDataColumnNames
        :isBoolean='true' :$booleanAttributes :$booleanColNames :$booleanClasses>
    </x-table>

    <!-- End #main -->
    <!-- ======= Footer ======= -->
    @livewire('layouts.footer')
    <!-- End Footer -->
</div>
