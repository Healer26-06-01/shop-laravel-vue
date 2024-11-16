@push('title')
    Báo cáo phiếu giảm giá
@endpush
@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
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
    <x-table pageTitle='Báo cáo đơn hàng phiếu giảm giá' tableName="Bảng báo cáo đơn hàng phiếu giảm giá" :$columnNamesArr
        :tableData='$couponsReports' :$tableDataColumnNames :showBtn='false'>
        <form class="mt-2 d-flex gap-2">
            <div class="col-2">
                <select wire:model='orderStatus' class="form-select" aria-label="Default select example">
                    <option value="" disabled selected>Chọn trạng thái</option>
                    <option value="approved">Đã duyệt</option>
                    <option value="delivered">Đã giao</option>
                    <option value="pending">Đang chờ</option>
                    <option value="canceled">Đã hủy</option>
                    <option value="returned">Đã trả lại</option>
                </select>
            </div>
            <div class="col-2">
                <select wire:model='groupBy' class="form-select" aria-label="Default select example">
                    <option value="" disabled selected>Nhóm theo</option>
                    <option value="Today">Ngày</option>
                    <option value="This Month">Tháng</option>
                    <option value="This Year">Năm</option>
                </select>
            </div>
            <div class="col-3"><input wire:model='startDate' class="form-control" id="start_date" type="text"
                    name="start_date" placeholder="Chọn ngày bắt đầu" aria-label="Ngày bắt đầu" autocomplete="off">
            </div>
            <div class="col-3"><input wire:model='expireDate' class="form-control" id="start_date" type="text"
                    name="start_date" placeholder="Chọn ngày kết thúc" aria-label="Ngày kết thúc" autocomplete="off">
            </div>
        </form>
    </x-table>
    <!-- End #main -->
    <!-- ======= Footer ======= -->
    @livewire('layouts.footer')
    <!-- End Footer -->
</div>
@push('script')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr("#start_date", {
            dateFormat: "Y-m-d H:i:s",
            enableTime: true,
        });
        flatpickr("#expire_date", {
            dateFormat: "Y-m-d H:i:s",
            enableTime: true,
        });
    </script>
@endpush
