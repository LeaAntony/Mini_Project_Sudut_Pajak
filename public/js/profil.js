function showSection(section) {
    // Semua bagian diubah menjadi display: none
    document.getElementById('profilSection').classList.add('hidden');
    document.getElementById('pengaturanAkunSection').classList.add('hidden');

    // Tombol yang sedang aktif diberikan kelas 'bg-blue-600'
    document.getElementById('profilBtn').classList.remove('bg-gradient-to-r', 'from-green-400', 'to-teal-400',
        'hover:from-teal-300', 'hover:to-green-300', 'active:from-teal-200', 'active:to-green-200',
        'focus:outline-none', 'focus:ring', 'focus:ring-emerald-300', 'text-white');
    document.getElementById('pengaturanAkunBtn').classList.remove('bg-gradient-to-r', 'from-green-400', 'to-teal-400',
        'hover:from-teal-300', 'hover:to-green-300', 'active:from-teal-200', 'active:to-green-200',
        'focus:outline-none', 'focus:ring', 'focus:ring-emerald-300', 'text-white');

    // Bagian yang dipilih ditampilkan
    document.getElementById(section + 'Section').classList.remove('hidden');

    // Tombol yang sedang aktif diberikan warna latar belakang
    document.getElementById(section + 'Btn').classList.add('bg-gradient-to-r', 'from-green-400', 'to-teal-400',
        'hover:from-teal-300', 'hover:to-green-300', 'active:from-teal-200', 'active:to-green-200',
        'focus:outline-none', 'focus:ring', 'focus:ring-emerald-300', 'text-white');
}