$('button[confirm-destroy]').on('click', function (e) {
    e.preventDefault();

    let link = $(this).parent().attr('href');

    $('#confirmDestroyConfirm').parent().attr('href', link);

    $('#confirmDestroy').removeClass('hidden');
});

$('[confirmDestroyCancel]').on('click', function () {
    $('#confirmDestroy').addClass('hidden');
});
