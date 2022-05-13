$('.delete').click( function() {
    var id = $(this).attr('data-id');
    var nama = $(this).attr('data-nama');

    swal({
        title: "Yakin ?",
        text: "Kamu akan menghapus data dengan nama "+ nama +"!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            window.location = "/delete/"+id+"";
            swal("Data berjasil dihapus", {
                icon: "success",
            });
        } else {
            swal("Data tidak jadi di hapus!");
        }
    });
});

// toastr