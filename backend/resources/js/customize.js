window.addEventListener('success-toast', event => {
    iziToast.success({
        title: 'Thành công',
        message: event.detail.message,
    });
})
window.addEventListener('error-toast', event => {
    iziToast.error({
        title: 'Lỗi',
        message: event.detail.message,
    });
})
