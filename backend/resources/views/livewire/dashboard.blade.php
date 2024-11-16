@push('title')
    Bảng điều khiển
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
        <!-- End Page Title -->
        <section class="section dashboard">
            <div class="row">
                <!-- Left side columns -->
                <div class="col-lg-7">
                    <div class="row">
                        <!-- Sales Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">
                                <div class="filter">
                                    <a class="icon" href="# " data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Bộ lọc</h6>
                                        </li>
                                        <li>
                                            <form wire:submit.prevent='showSale("Hôm nay")'>
                                                <button class="dropdown-item">Hôm nay</button>
                                            </form>
                                        </li>
                                        <li>
                                            <form wire:submit.prevent='showSale("Tháng này")'>
                                                <button class="dropdown-item">Tháng này</button>
                                            </form>
                                        </li>
                                        <li>
                                            <form wire:submit.prevent='showSale("Năm nay")'>
                                                <button class="dropdown-item">Năm nay</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Doanh số <span>| {{ $strTimeOfSale }}</span></h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $sale }}</h6>
                                            {{-- <span class="text-success small pt-1 fw-bold">12%</span> <span
                                                class="text-muted small pt-2 ps-1">tăng</span> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Sales Card -->
                        <!-- Revenue Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Bộ lọc</h6>
                                        </li>
                                        <li>
                                            <form wire:submit.prevent='showRevenue("Hôm nay")'>
                                                <button class="dropdown-item">Hôm nay</button>
                                            </form>
                                        </li>
                                        <li>
                                            <form wire:submit.prevent='showRevenue("Tháng này")'>
                                                <button class="dropdown-item">Tháng này</button>
                                            </form>
                                        </li>
                                        <li>
                                            <form wire:submit.prevent='showRevenue("Năm nay")'>
                                                <button class="dropdown-item">Năm nay</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Doanh thu <span>| {{ $strTimeOfRevenue }}</span></h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-currency-dollar"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $revenue }}</h6>
                                            {{-- <span class="text-success small pt-1 fw-bold">8%</span> <span
                                                class="text-muted small pt-2 ps-1">tăng</span> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Revenue Card -->
                        <!-- Customers Card -->
                        <div class="col-xxl-4 col-xl-6">
                            <div class="card info-card customers-card">
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Bộ lọc</h6>
                                        </li>
                                        <li>
                                            <form wire:submit.prevent='showUsers("Hôm nay")'>
                                                <button class="dropdown-item">Hôm nay</button>
                                            </form>
                                        </li>
                                        <li>
                                            <form wire:submit.prevent='showUsers("Tháng này")'>
                                                <button class="dropdown-item">Tháng này</button>
                                            </form>
                                        </li>
                                        <li>
                                            <form wire:submit.prevent='showUsers("Năm nay")'>
                                                <button class="dropdown-item">Năm nay</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Khách hàng <span>| {{ $strTimeOfUsers }}</span></h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $users }}</h6>
                                            {{-- <span class="text-danger small pt-1 fw-bold">12%</span> <span
                                                class="text-muted small pt-2 ps-1">giảm</span> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Customers Card -->
                        <!-- All Order Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Bộ lọc</h6>
                                        </li>
                                        <li>
                                            <form wire:submit.prevent='showOrders("Hôm nay")'>
                                                <button class="dropdown-item">Hôm nay</button>
                                            </form>
                                        </li>
                                        <li>
                                            <form wire:submit.prevent='showOrders("Tháng này")'>
                                                <button class="dropdown-item">Tháng này</button>
                                            </form>
                                        </li>
                                        <li>
                                            <form wire:submit.prevent='showOrders("Năm nay")'>
                                                <button class="dropdown-item">Năm nay</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Đơn hàng <span>| {{ $strTimeOfOrders }}</span></h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-box2"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $totalOrders }}</h6>
                                            {{-- <span class="text-success small pt-1 fw-bold">8%</span> <span
                                                class="text-muted small pt-2 ps-1">tăng</span> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End All Order Card -->

                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Bộ lọc</h6>
                                        </li>
                                        <li>
                                            <form wire:submit.prevent='showRecentSale("Hôm nay")'>
                                                <button class="dropdown-item">Hôm nay</button>
                                            </form>
                                        </li>
                                        <li>
                                            <form wire:submit.prevent='showRecentSale("Tháng này")'>
                                                <button class="dropdown-item">Tháng này</button>
                                            </form>
                                        </li>
                                        <li>
                                            <form wire:submit.prevent='showRecentSale("Năm nay")'>
                                                <button class="dropdown-item">Năm nay</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Bán hàng gần đây <span>| {{ $strTimeOfRecentSale }}</span>
                                    </h5>
                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Xem trước</th>
                                                <th scope="col">Sản phẩm</th>
                                                <th scope="col">SKU</th>
                                                <th scope="col">Giá</th>
                                                <th scope="col">Số lượng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($newRecentSaleProducts as $product)
                                                <tr>
                                                    <th scope="row"><img src="{{ $product[1] }}"
                                                            alt="{{ $product[1] }}">
                                                    </th>
                                                    <td>{{ $product[2] }}
                                                    </td>
                                                    <td>{{ $product[3] }}</td>
                                                    <td class="fw-bold">${{ $product[4] }}</td>
                                                    <td>{{ $product[5] }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- End Recent Sales -->
                        <!-- New Arrivals -->
                        <div class="col-12">
                            <div class="card top-selling overflow-auto">
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Bộ lọc</h6>
                                        </li>
                                        <li>
                                            <form wire:submit.prevent='showArrivals("Hôm nay")'>
                                                <button class="dropdown-item">Hôm nay</button>
                                            </form>
                                        </li>
                                        <li>
                                            <form wire:submit.prevent='showArrivals("Tháng này")'>
                                                <button class="dropdown-item">Tháng này</button>
                                            </form>
                                        </li>
                                        <li>
                                            <form wire:submit.prevent='showArrivals("Năm nay")'>
                                                <button class="dropdown-item">Năm nay</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body pb-0">
                                    <h5 class="card-title">Hàng mới về <span>| {{ $strTimeOfArrivals }}</span>
                                    </h5>
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">Xem trước</th>
                                                <th scope="col">Sản phẩm</th>
                                                <th scope="col">Giá</th>
                                                <th scope="col">Số lượng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($newArrivalProducts as $product)
                                                <tr>
                                                    <th scope="row"><img src="{{ $product->image }}"
                                                            alt="{{ $product->image }}">
                                                    </th>
                                                    <td>{{ $product->name }}
                                                    </td>
                                                    <td class="fw-bold">${{ $product->sale_price }}</td>
                                                    <td>{{ $product->qty_in_stock }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- End New Arrivals -->
                        <!-- Top Selling -->
                        <div class="col-12">
                            <div class="card top-selling overflow-auto">

                                <div class="card-body pb-0">
                                    <h5 class="card-title">Doanh thu hàng đầu</h5>
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">Xem trước</th>
                                                <th scope="col">Sản phẩm</th>
                                                <th scope="col">Giá</th>
                                                <th scope="col">Đã bán</th>
                                                <th scope="col">Doanh thu</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- {{ $topRevenueProducts }} --}}
                                            @foreach ($topRevenueProducts as $topRevenueProduct)
                                                <tr>
                                                    <th scope="row"><img
                                                            src="{{ $topRevenueProduct->product?->image }}"
                                                            alt="{{ $topRevenueProduct->product?->image }}">
                                                    </th>
                                                    <td>{{ $topRevenueProduct->product?->name }}
                                                    </td>
                                                    <td class="fw-bold">
                                                        ${{ $topRevenueProduct->product?->sale_price }}</td>
                                                    <td>{{ $topRevenueProduct->sold_qty }}</td>
                                                    <td class="fw-bold">${{ $topRevenueProduct->revenue }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- End Top Selling -->
                    </div>
                </div><!-- End Left side columns -->
                <!-- Right side columns -->
                <div class="col-lg-5">
                    <!--Button Strat -->
                    <div class="card" wire:ignore>
                        <div class="card-body m-auto mt-3">
                            <button type="button" wire:click='AllCalculationsAreBasedOnDayOrMonthOrYear("Hôm nay")'
                                class="btn btn-outline-primary btn-sm">Hôm nay</button>
                            <button type="button" wire:click='AllCalculationsAreBasedOnDayOrMonthOrYear("Tháng này")'
                                class="btn btn-outline-secondary btn-sm">Tháng này</button>
                            <button type="button" wire:click='AllCalculationsAreBasedOnDayOrMonthOrYear("Năm nay")'
                                class="btn btn-outline-success btn-sm">Năm nay</button>
                        </div>
                    </div>
                    <!--End Button Strat -->
                    <!--Biểu đồ Js -->
                    <div class="card" wire:ignore>
                        <div class="card-body">
                            <h5 class="card-title">Biểu đồ đơn hàng</h5>
                            <!-- Biểu đồ cột -->
                            <canvas id="barChart" style="max-height: 400px;"></canvas>
                            <!-- Kết thúc biểu đồ cột -->
                        </div>
                    </div>
                    <!-- Kết thúc biểu đồ Js -->
                    <!-- Bắt đầu biểu đồ tròn đơn hàng -->
                    <div class="card " wire:ignore>
                        <div class="card-body ">
                            <h5 class="card-title">Biểu đồ đơn hàng <span></span></h5>

                            <!-- Biểu đồ Doughnut -->
                            <canvas id="orderChart" style="max-height: 400px;"></canvas>

                            <!-- Kết thúc biểu đồ Doughnut -->

                        </div>
                    </div>
                    <!-- Kết thúc biểu đồ tròn đơn hàng -->
                    <!-- Bắt đầu biểu đồ tròn thu nhập và chi tiêu -->
                    <div class="card " wire:ignore>
                        <div class="card-body ">
                            <h5 class="card-title">Biểu đồ thu nhập và chi tiêu <span></span>
                            </h5>
                            <!-- Biểu đồ Doughnut -->
                            <canvas id="incomeExpenditureChart" style="max-height: 400px;"></canvas>
                            <!-- Kết thúc biểu đồ Doughnut -->
                        </div>
                    </div>
                    <!-- Kết thúc biểu đồ tròn thu nhập và chi tiêu -->


                </div>
                <!-- Kết thúc cột bên phải -->
            </div>

        </section>
    </main><!-- Kết thúc #main -->
    <!-- ======= Footer ======= -->
    @livewire('layouts.footer')
    <!-- Kết thúc Footer -->

</div>

@push('script')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            new Chart(document.querySelector('#barChart'), {
                type: 'bar',
                data: {
                    labels: @js($ordersBarChart->pluck('month')->toArray()),
                    datasets: [{
                        label: 'Số lượng đơn hàng',
                        data: @js($ordersBarChart->pluck('total')->toArray()),
                        backgroundColor: [
                            'rgba(155,255,3, 0.2)',
                            'rgba(255,0,55, 0.2)',
                            'rgba(55,13,22, 0.2)',
                            'rgba(68,229,255, 0.2)',
                            'rgb(56,42,251, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgb(173,59,57, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(255, 205, 86, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(153, 102, 255, 0.2)',

                        ],
                        borderColor: [
                            'rgb(155,255,3)',
                            'rgb(255,0,55)',
                            'rgb(55,13,22)',
                            'rgb(68,229,255)',
                            'rgb(56,42,251)',
                            'rgb(255, 99, 132)',
                            'rgb(255, 159, 64)',
                            'rgb(173,59,57)',
                            'rgb(75, 192, 192)',
                            'rgb(255, 205, 86)',
                            'rgb(54, 162, 235)',
                            'rgb(153, 102, 255)',

                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });

        function capitalizeWords(arr) {
            return arr.map(word => {
                const firstLetter = word.charAt(0).toUpperCase();
                const rest = word.slice(1).toLowerCase();
                return firstLetter + rest;
            });
        }

        document.addEventListener("DOMContentLoaded", () => {
            new Chart(document.querySelector('#orderChart'), {
                type: 'doughnut',
                data: {
                    labels: capitalizeWords(@js($ordersChart->pluck('order_status')->toArray())),
                    datasets: [{
                        label: 'Quantity',
                        data: @js($ordersChart->pluck('status_quantity')->toArray()),
                        backgroundColor: [
                            'rgb(255, 165, 0)',
                            'rgb(54, 162, 235)',
                            'rgb(50, 205, 50)',
                            'rgb(255, 0, 0)',
                            'rgb(0, 0, 255)',
                        ],
                        hoverOffset: 4
                    }]
                }
            });
        });

        document.addEventListener("DOMContentLoaded", () => {
            new Chart(document.querySelector('#incomeExpenditureChart'), {
                type: 'doughnut',
                data: {
                    labels: ['Revenue', 'Cost'],
                    datasets: [{
                        label: 'Số tiền',
                        data: @js([$incomeExpenditureChart->sum('revenue'), $incomeExpenditureChart->sum('cost')]),
                        backgroundColor: [
                            'rgb(54, 162, 235)',
                            'rgb(255, 0, 0)',
                        ],
                        hoverOffset: 4
                    }]
                }
            });
        });
    </script>
@endpush
