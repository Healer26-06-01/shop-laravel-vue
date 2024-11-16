@push('title')
    Phản hồi Liên hệ
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
    <x-form pageTitle='Phản hồi Liên hệ' pageUrl='Liên hệ / Phản hồi' action='reply'>
        <x-form-input-field.general col="col-6" lable="Đến" name="to" type="email" wireModel='email'
            disabled='disabled'>
        </x-form-input-field.general>
        <x-form-input-field.general col="col-6" lable="Tên" name="name" type="name" wireModel='name'
            disabled='disabled'>
        </x-form-input-field.general>
        <x-form-input-field.general col="col-6" lable="Chủ đề" name="subject" type="text" wireModel='subject'
            disabled='disabled'>
        </x-form-input-field.general>
        <x-form-input-field.text-area col="col-6" lable="Tin nhắn" name="message" wireModel='message'
            disabled='disabled'>
        </x-form-input-field.text-area>

        <h4>Phản hồi Tin nhắn</h4>
        <x-form-input-field.general col="col-6" lable="Chủ đề" name="repliedSubject" type="text"
            wireModel='repliedSubject'>
        </x-form-input-field.general>
        <x-form-input-field.text-area col="col-6" lable="Tin nhắn" name="repliedMessage" wireModel='repliedMessage'>
        </x-form-input-field.text-area>

        <x-form-input-field.submit color='primary' buttonName="Lưu"></x-form-input-field.submit>
    </x-form>

    <!-- End #main -->
    <!-- ======= Footer ======= -->
    @livewire('layouts.footer')
    <!-- End Footer -->

</div>
