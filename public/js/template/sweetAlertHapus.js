// function hapus(ev){
//     ev.preventDefault();
//     var urlToRedirect = ev.currentTarget.getAttribute('href');
//     console.log(urlToRedirect);

//     swal({
//         title: `Apakah Anda yakin ingin menghapus data ini?`,
//         text: "Jika Anda menghapusnya, data terpilih akan hilang selamanya.",
//         icon: "warning",
//         buttons: true,
//         dangerMode: true,
//     })
//     .then((willDelete) => {
//         if (willDelete) {
//             window.location.href=urlToRedirect;
//         }
//     });
// }
document.querySelectorAll('.tombol_hapus').forEach(form => {
    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission}
        let data = event.currentTarget.dataset.name;

        const swalWithTailwinds = Swal.mixin({
            customClass: {
                confirmButton: "btn bg-gradient-to-r from-red-500 to-red-400 hover:from-red-700 hover:to-red-600 active:from-red-200 active:to-red-200 focus:outline-none text-white mx-2",
                cancelButton: "btn bg-stone-300 text-white mx-2"
            },
            buttonsStyling: false
        });
        swalWithTailwinds.fire({
                title: `Apakah Anda yakin ingin menghapus data \"${data}\"?`,
                text: "Jika Anda menghapusnya, data terpilih akan hilang permanen.",
                icon: 'warning',
                confirmButton: '#dc3545',
                showCancelButton: true,
                confirmButtonText: 'Hapus',
                cancelButtonText: 'Batal'
            })
            .then((willDelete) => {
                if (willDelete.value) {
                    form.submit();
                    Swal.fire({
                        title: "Terhapus!",
                        text: "Data berhasil terhapus.",
                        icon: "success"
                    });
                }
            });

    });
})