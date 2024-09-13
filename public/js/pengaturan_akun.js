function showSection(section) {
    // Semua bagian diubah menjadi display: none
    document.getElementById('identitasSection').classList.add('hidden');
    document.getElementById('kataSandiSection').classList.add('hidden');
    document.getElementById('HapusAkunSection').classList.add('hidden');

    // Tombol yang sedang aktif diberikan kelas 'bg-blue-600'
    document.getElementById('identitasBtn').classList.remove('bg-gradient-to-r', 'from-green-400', 'to-teal-400',
        'hover:from-teal-300', 'hover:to-green-300', 'active:from-teal-200', 'active:to-green-200',
        'focus:outline-none', 'focus:ring', 'focus:ring-emerald-300', 'text-white');
    document.getElementById('kataSandiBtn').classList.remove('bg-gradient-to-r', 'from-green-400', 'to-teal-400',
        'hover:from-teal-300', 'hover:to-green-300', 'active:from-teal-200', 'active:to-green-200',
        'focus:outline-none', 'focus:ring', 'focus:ring-emerald-300', 'text-white');
    document.getElementById('HapusAkunBtn').classList.remove('bg-gradient-to-r', 'from-green-400', 'to-teal-400',
        'hover:from-teal-300', 'hover:to-green-300', 'active:from-teal-200', 'active:to-green-200',
        'focus:outline-none', 'focus:ring', 'focus:ring-emerald-300', 'text-white');

    // Bagian yang dipilih ditampilkan
    document.getElementById(section + 'Section').classList.remove('hidden');

    // Tombol yang sedang aktif diberikan warna latar belakang
    document.getElementById(section + 'Btn').classList.add('bg-gradient-to-r', 'from-green-400', 'to-teal-400',
        'hover:from-teal-300', 'hover:to-green-300', 'active:from-teal-200', 'active:to-green-200',
        'focus:outline-none', 'focus:ring', 'focus:ring-emerald-300', 'text-white');
}