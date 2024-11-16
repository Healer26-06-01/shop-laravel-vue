<x-mail::message>

    Kính gửi, {{ $order->user->name }}<br>
    Đơn hàng của bạn đã được {{ $OrderStatus }}<br>
    Mã đơn hàng: #{{ $order->id }}<br>
    Trạng thái đơn hàng: {{ $order->payment_status == 1 ? 'Đã thanh toán' : 'Chưa thanh toán' }}<br>

    Cảm ơn bạn đã đặt hàng,<br>
    {{ config('app.name') }}
</x-mail::message>
