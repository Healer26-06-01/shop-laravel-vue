@push('title')
    Báo Cáo Đơn Hàng Khách Hàng
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
    <x-table pageTitle='Báo Cáo Đơn Hàng Khách Hàng' tableName="Bảng Báo Cáo Đơn Hàng Khách Hàng" :$columnNamesArr
        :showBtn='false' :tableData='$usersReports' :$tableDataColumnNames>

        <form class="mt-2 d-flex gap-2">
            <div class="col-2">
                <select wire:model='orderStatus' class="form-select" aria-label="Default select example">
                    <option value="" disabled selected>Chọn Trạng Thái</option>
                    <option value="approved">Đã Duyệt</option>
                    <option value="delivered">Đã Giao</option>
                    <option value="pending">Đang Chờ</option>
                    <option value="canceled">Đã Hủy</option>
                    <option value="returned">Đã Trả</option>
                </select>
            </div>
            <div class="col-2">
                <select wire:model='groupBy' class="form-select" aria-label="Default select example">
                    <option value="" disabled selected>Nhóm Theo</option>
                    <option value="Today">Ngày</option>
                    <option value="This Month">Tháng</option>
                    <option value="This Year">Năm</option>
                </select>
            </div>
            <div class="col-3"><input wire:model='startDate' class="form-control" id="start_date" type="text"
                    name="start_date" placeholder="Chọn Ngày Bắt Đầu" aria-label="Ngày Bắt Đầu" autocomplete="off">
            </div>
            <div class="col-3"><input wire:model='expireDate' class="form-control" id="expire_date" type="text"
                    name="expire_date" placeholder="Chọn Ngày Kết Thúc" aria-label="Ngày Kết Thúc" autocomplete="off">
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
            dateFormat: "Y-m-d H:i",
        });
        flatpickr("#expire_date", {
            dateFormat: "Y-m-d H:i:s",
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });
    </script>
@endpush
