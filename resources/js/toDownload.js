$("#x").on('click', function () {
    let x = $(this).data('download-id');
    window.location = '/photo/' + x + '/download';
})
