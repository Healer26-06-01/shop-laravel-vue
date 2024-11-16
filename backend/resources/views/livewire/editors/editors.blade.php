@push('title')
    Biên tập viên
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

    <x-table addNewRoute='register' pageTitle='Bảng Biên tập viên' tableName="Bảng Biên tập viên" :$columnNamesArr
        :tableData='$editors' :$tableDataColumnNames :isBoolean='true' :$booleanAttributes :$booleanColNames
        :$booleanClasses>
    </x-table>

    <!-- Kết thúc #main -->
    <!-- ======= Chân trang ======= -->
    @livewire('layouts.footer')
    <!-- Kết thúc Chân trang -->
</div>
