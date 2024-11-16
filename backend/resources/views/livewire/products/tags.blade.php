@push('title')
    Thẻ
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

    <x-table addNewRoute='tags.create' pageTitle='Bảng Thẻ' tableName="Bảng Thẻ" :$columnNamesArr :tableData='$tags'
        :$tableDataColumnNames :showBtnEdit='false'>
    </x-table>

    <!-- End #main -->
    <!-- ======= Footer ======= -->
    @livewire('layouts.footer')
    <!-- End Footer -->
</div>
