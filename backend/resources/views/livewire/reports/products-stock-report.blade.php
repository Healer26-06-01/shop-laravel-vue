@push('title')
    Báo Cáo Tồn Kho Sản Phẩm
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
        :showBtn='false' :tableData='$productStockReports' :$tableDataColumnNames :isBoolean='true' :$booleanAttributes
        :$booleanColNames :$booleanClasses imageFolder='products'>

        <form class="mt-2 d-flex gap-2">
            <div class="col-4">
                <select wire:model='stockAvailability' class="form-select" aria-label="Default select example">
                    <option value="null" disabled selected>Tình Trạng Tồn Kho</option>
                    <option value="1">Còn Hàng</option>
                    <option value="2">Hết Hàng</option>
                </select>
            </div>
            <div class="col-4 d-flex gap-2">
                <x-form-input-field.general col="col-10" lable="Số Lượng Trên" name="quantityAbove" type="number"
                    wireModel='quantityAbove'>
                </x-form-input-field.general>
                <x-form-input-field.general col="col-10" lable="Số Lượng Dưới" name="quantityBelow" type="number"
                    wireModel='quantityBelow'>
                </x-form-input-field.general>

            </div>

        </form>

    </x-table>
    <!-- End #main -->
    <!-- ======= Footer ======= -->
    @livewire('layouts.footer')
    <!-- End Footer -->

</div>
