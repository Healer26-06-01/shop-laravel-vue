@push('title')
    Hồ sơ
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
        <section class="section profile">
            <div class="row">
                <div class="col-xl-12">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">
                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#profile-overview">Tổng quan</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Chỉnh
                                        sửa hồ sơ</button>
                                </li>

                            </ul>
                            <div class="tab-content pt-2">
                                <div class="tab-pane fade show active profile-overview active-color-overright"
                                    id="profile-overview">

                                    <h5 class="card-title">Chi tiết hồ sơ</h5>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Họ và tên</div>
                                        <div class="col-lg-9 col-md-8">{{ $name }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Vai trò</div>
                                        <div class="col-lg-9 col-md-8">
                                            @if ($role)
                                                Quản trị viên
                                            @else
                                                Biên tập viên
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                        <div class="col-lg-9 col-md-8">{{ $email }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Điện thoại</div>
                                        <div class="col-lg-9 col-md-8">{{ $phone }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Địa chỉ</div>
                                        <div class="col-lg-9 col-md-8">{{ $address }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Thành phố</div>
                                        <div class="col-lg-9 col-md-8">{{ $city }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Bang</div>
                                        <div class="col-lg-9 col-md-8">{{ $state }}</div>
                                    </div>
                                </div>

                                <div class="tab-pane fade profile-edit pt-3 active-color-overright" id="profile-edit">

                                    <!-- Profile Edit Form -->
                                    <form method="POST" wire:submit.prevent="update">

                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Họ và
                                                tên</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="fullName" type="text" class="form-control"
                                                    id="fullName" wire:model.defer='name'>
                                                @error('name')
                                                    <small
                                                        class=" error fw-lighter text-danger text-lg mx-3">*{{ $message }}*</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="company" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="company" type="text" class="form-control" id="company"
                                                    wire:model.defer='email'>
                                                @error('email')
                                                    <small
                                                        class=" error fw-lighter text-danger text-lg mx-3">*{{ $message }}*</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Điện
                                                thoại</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="phone" type="text" class="form-control" id="Phone"
                                                    wire:model.defer='phone'>
                                                @error('phone')
                                                    <small
                                                        class=" error fw-lighter text-danger text-lg mx-3">*{{ $message }}*</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Address" class="col-md-4 col-lg-3 col-form-label">Địa
                                                chỉ</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="address" type="text" class="form-control" id="Address"
                                                    wire:model.defer='address'>
                                                @error('address')
                                                    <small
                                                        class=" error fw-lighter text-danger text-lg mx-3">*{{ $message }}*</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="city" class="col-md-4 col-lg-3 col-form-label">Thành
                                                phố</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="city" type="text" class="form-control" id="city"
                                                    wire:model.defer='city'>
                                                @error('city')
                                                    <small
                                                        class=" error fw-lighter text-danger text-lg mx-3">*{{ $message }}*</small>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="State" class="col-md-4 col-lg-3 col-form-label">Bang</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="State" type="text" class="form-control"
                                                    id="State" wire:model.defer='state'>
                                                @error('state')
                                                    <small
                                                        class=" error fw-lighter text-danger text-lg mx-3">*{{ $message }}*</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Mật khẩu
                                                mới</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="password" type="password" class="form-control"
                                                    id="password" wire:model.defer="password"
                                                    placeholder="********">
                                                @error('password')
                                                    <small
                                                        class=" error fw-lighter text-danger text-lg mx-3">*{{ $message }}*</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Nhập
                                                lại mật khẩu mới</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="password_confirmation" type="password"
                                                    class="form-control" id="password_confirmation"
                                                    wire:model.defer="password_confirmation" placeholder="********">
                                                @error('password_confirmation')
                                                    <small
                                                        class=" error fw-lighter text-danger text-lg mx-3">*{{ $message }}*</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                                        </div>
                                    </form><!-- End Profile Edit Form -->

                                </div>
                            </div>
                            <br>
                            <form wire:submit.prevent="destroy">
                                @if (Auth::guard('editor')->user()->role == 0)
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-danger">Xóa tài khoản</button>
                                    </div>
                                @endif
                            </form>
                            <!-- End Bordered Tabs -->

                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->
    <!-- ======= Footer ======= -->
    @livewire('layouts.footer')
    <!-- End Footer -->

</div>
