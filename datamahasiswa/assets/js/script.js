// validasi alphabet
$(document).ready(function () {
    $("#username").keyup(function () {

        let namaPanjang = $(this).val();

        if (!namaPanjang.match(/^[a-z]*$/)) {
            alert('Hanya diisi dengan alphabet/tanpa spasi');
        }
    });
});
