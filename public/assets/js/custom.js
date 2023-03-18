$(document).ready(function() {
    $('.auto-datatable').each(function(index, table) {
        let $table = $(table);
        let cols = [];
        $table.find('thead th').each(function(index, th) {
            cols.push({
                data: $(th).data('column'),
            });
        });
        $table.DataTable({
            processing: true,
            serverSide: true,
            ajax: $table.data('href'),
            columns: cols,
        });
    });
})

let api = axios.create({
    timeout: 1000,
    headers: {'X-Custom-Header': 'foobar'}
});
api.interceptors.response.use((response) => response, (error) => {
    Swal.fire({
        icon: 'error',
        title: 'Hata !',
        text: error.response.data.message,
    });
});


const formSubmit = (form, button, modal) => {
    console.log(form);
    let $form = $('#'+form);
    let url = $form.attr('action');
    let method = $form.attr('method');
    let data = $form.serialize();
    $('#'+button).html('Kaydediliyor...');
    api({
        method: method,
        url: url,
        data: data,
    }).then(function (response) {
        Swal.fire({
            icon: 'success',
            title: 'Başarılı !',
            text: response.data.message,
        });
        $('.'+modal).modal('hide');
        $('#'+button).html('Kaydet');
        $('.auto-datatable').DataTable().ajax.reload();
    });
}

const formEdit = (button) => {
    let $url = $(button).data('href');
    let form = $(button).data('form');
    let modal = $(button).data('modal');
    let updateUrl = $(button).data('update-url');
    api({
        method: 'get',
        url: $url,
    }).then(function (response) {
        let $form = $(form);
        $form.attr('action', updateUrl);
        Object.keys(response.data.data).forEach(function(key) {
            $form.find('input[name="'+key+'"]').val(response.data.data[key]);
        });
        $(modal).modal('show');
    });
}

const formDelete = (button) => {
    let $url = $(button).data('href');
    Swal.fire({
        title: 'Emin misiniz?',
        text: "Bu işlem geri alınamaz!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Evet, sil!',
        cancelButtonText: 'Hayır, iptal et!'
    }).then((result) => {
        if (result.value) {
            api({
                method: 'delete',
                url: $url,
            }).then(function (response) {
                Swal.fire({
                    icon: 'success',
                    title: 'Başarılı !',
                    text: response.data.message,
                });
                $('.auto-datatable').DataTable().ajax.reload();
            });
        }
    });
}
