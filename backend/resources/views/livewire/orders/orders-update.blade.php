@push('title')
    Chi tiết đơn hàng
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
    <main id="main" class="main">
        @livewire('layouts.page-title', ['pageTitle' => 'Chi tiết đơn hàng'])
        <!-- End Page Title -->
        @if ($this->order->count() == null)
            @livewire('layouts.empty-page', ['tableName' => 'Bảng chi tiết đơn hàng'])
        @else
            <section class="section">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="container mb-5 mt-3">
                                    <div class="row d-flex align-items-baseline">
                                        <div class="col-xl-9">
                                            <p style="color: #7e8d9f;font-size: 20px;">Hóa đơn >> <strong>ID:
                                                    #{{ $order->id }}</strong>
                                            </p>
                                        </div>
                                        <div class="col-xl-3 float-end d-print-none">
                                            <button class="btn btn btn-outline-secondary btn-sm px-3"
                                                onclick="window.print()">In <i class="bi bi-printer"></i></button>
                                        </div>
                                        <hr>
                                    </div>

                                    <div class="container">
                                        <div class="col-md-12">
                                            <div class="text-center">
                                                <i class="fab fa-mdb fa-4x ms-0" style="color:#5d9fc5 ;"></i>
                                                <p class="pt-0">{{ config('app.name') }}</p>
                                            </div>

                                        </div>


                                        <div class="row">
                                            <div class="col-xl-8">
                                                <ul class="list-unstyled">
                                                    <li class="text-muted"><span class="fw-bold">Đến : </span><span
                                                            style="color:#5d9fc5 ;">{{ $order->user->name }}</span>
                                                    </li>
                                                    <li class="text-muted"><i class="fas fa-phone"></i><span
                                                            class="fw-bold">Điện thoại : </span>
                                                        {{ $order->user->billingDetail->phone }}</li>
                                                    <li class="text-muted"><span class="fw-bold">Thành phố:
                                                        </span>{{ $order->user->billingDetail->city }}
                                                    </li>
                                                    <li class="text-muted"><span class="fw-bold">Bang :
                                                        </span>{{ $order->user->billingDetail->state }}
                                                    </li>
                                                    <li class="text-muted"><span class="fw-bold">Địa chỉ :
                                                        </span>{{ $order->user->billingDetail->address }}</li>
                                                </ul>
                                            </div>
                                            <div class="col-xl-4">
                                                <p class="text-muted">Hóa đơn</p>
                                                <ul class="list-unstyled">
                                                    <li class="text-muted"><i class="fas fa-circle"
                                                            style="color:#84B0CA ;"></i>
                                                        <span class="fw-bold">ID:</span>#{{ $order->id }}
                                                    </li>
                                                    <li class="text-muted"><i class="fas fa-circle"
                                                            style="color:#84B0CA ;"></i>
                                                        <span class="fw-bold">Ngày tạo:
                                                        </span>{{ $order->created_at->toFormattedDateString() }}
                                                    </li>
                                                    <li class="text-muted"><i class="fas fa-circle"
                                                            style="color:#84B0CA ;"></i>
                                                        <span class="me-1 fw-bold">Trạng thái đơn hàng:</span><span
                                                            class="badge bg-info text-black fw-bold">
                                                            <td>{{ $order->order_status }}
                                                            </td>
                                                        </span>
                                                    </li>
                                                    <li class="text-muted"><i class="fas fa-circle"
                                                            style="color:#84B0CA ;"></i>
                                                        @if ($order->payment_status == 0)
                                                            <span class="me-1 fw-bold">Trạng thái thanh
                                                                toán:</span><span
                                                                class="badge bg-warning text-black fw-bold">
                                                                <td>Chưa thanh toán
                                                                </td>
                                                            </span>
                                                        @else
                                                            <span class="me-1 fw-bold">Trạng thái thanh
                                                                toán:</span><span
                                                                class="badge bg-info text-black fw-bold">
                                                                <td>Đã thanh toán
                                                                </td>
                                                            </span>
                                                        @endif
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row my-2 mx-1 justify-content-center">
                                            <table class="table table-striped table-borderless">
                                                <thead style="background-color:#84B0CA ;" class="text-white">
                                                    <tr>
                                                        <th scope="col">#Id</th>
                                                        <th scope="col">Tiêu đề</th>
                                                        <th scope="col">Số lượng</th>
                                                        <th scope="col">Giảm giá đơn vị</th>
                                                        <th scope="col">Đơn giá</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($order->orderItem as $key => $item)
                                                        <tr>
                                                            <th scope="row">{{ ++$key }}</th>
                                                            <td>{{ $item->product->name }}</td>
                                                            <td>{{ $item->qty }}</td>
                                                            <td>${{ number_format($item->discount_price) }}</td>
                                                            <td>${{ number_format($item->product->sale_price) }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>

                                            </table>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-8">
                                                <div class="col-6 mt-3">
                                                    <form wire:submit.prevent='update'>
                                                        <select wire:model='changedStatus' class="form-select"
                                                            aria-label="Default select example">
                                                            <option value="Approved">Đã duyệt</option>
                                                            <option value="Delivered">Đã giao</option>
                                                            <option value="Pending">Đang chờ</option>
                                                            <option value="Canceled">Đã hủy</option>
                                                            <option value="Returned">Đã trả lại</option>
                                                        </select>
                                                        <br>
                                                        <x-form-input-field.submit color='primary' buttonName="Lưu">
                                                        </x-form-input-field.submit>
                                                    </form>
                                                </div>

                                            </div>
                                            <div class="col-xl-3">
                                                <ul class="list-unstyled">
                                                    <li class="text-muted ms-3 mt-2"><span class="fw-bold me-4">Vận
                                                            chuyển</span>${{ number_format($order->shippingMethod->cost, 2) }}
                                                    </li>
                                                    @if ($order->coupon)
                                                        <li class="text-muted ms-3 mt-2"><span class="fw-bold me-4">Mã
                                                                giảm
                                                                giá</span>${{ number_format($order->coupon->discount, 2) }}
                                                        </li>
                                                    @endif
                                                    @if ($order->discount > 0)
                                                        <li class="text-muted ms-3 mt-2"><span
                                                                class="fw-bold
                                                    me-4">Tổng
                                                                giảm
                                                                giá</span>${{ number_format($order->discount, 2) }}
                                                        </li>
                                                    @endif

                                                    <li class="text-muted ms-3"><span class="fw-bold me-4">Tổng
                                                            phụ</span>${{ number_format($order->subtotal, 2) }}
                                                    </li>

                                                </ul>
                                                <p class="text-black float-start mx-3"><span class="fw-bold me-4">Tổng
                                                        cộng :
                                                    </span><span style="font-size: 25px;">
                                                        ${{ $order->total }}
                                                    </span></p>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    </main>

    <!-- End #main -->
    <!-- ======= Footer ======= -->
    @livewire('layouts.footer')
    <!-- End Footer -->
</div>
