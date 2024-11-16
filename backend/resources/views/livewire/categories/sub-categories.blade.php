@push('title')
    Danh Mục Con
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

    <x-table addNewRoute='subCategories.create' pageTitle='Bảng Danh Mục Con' tableName="Bảng Danh Mục Con"
        :$columnNamesArr :tableData='$subCategories' :$tableDataColumnNames :isBoolean='true' :$booleanAttributes
        :$booleanColNames :$booleanClasses :relation='true' :$relationTableDataColumnNames :$relationName>
    </x-table>

    <!-- End #main -->
    <!-- ======= Footer ======= -->
    @livewire('layouts.footer')
    <!-- End Footer -->
</div>
