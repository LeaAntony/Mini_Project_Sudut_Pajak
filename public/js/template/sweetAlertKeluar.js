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
document.querySelectorAll('.tombol_keluar').forEach(form => {
    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission}
        let data = event.currentTarget.dataset.name;

        const swalWithTailwinds = Swal.mixin({
            customClass: {
                confirmButton: "btn bg-gradient-to-r from-cyan-400 to-blue-400 hover:from-blue-300 hover:to-cyan-300 active:from-blue-200 active:to-cyan-200 focus:outline-none focus:ring focus:ring-sky-300 text-white mx-2",
                cancelButton: "btn bg-stone-300 text-white mx-2"
            },
            buttonsStyling: false
        });
        swalWithTailwinds.fire({
                title: `Apakah Anda yakin ingin keluar?`,
                text: "Anda akan keluar dari akun anda saat ini.",
                icon: 'warning',
                confirmButton: '#dc3545',
                showCancelButton: true,
                confirmButtonText: 'Oke',
                cancelButtonText: 'Batal'
            })
            .then((willDelete) => {
                if (willDelete.value) {
                    form.submit();
                    Swal.fire({
                        title: "Keluar!",
                        text: "Anda berhasil keluar.",
                        icon: "success"
                    });
                }
            });

    });
})