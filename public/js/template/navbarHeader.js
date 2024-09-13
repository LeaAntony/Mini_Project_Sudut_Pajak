if (window.location.href.indexOf('/') != -1) {
    document.getElementById('navBeranda').classList.add('bg-gradient-to-r', 'from-teal-400', 'to-green-400', 'text-white');
} else if (window.location.href.indexOf('/layanan') != -1) {
    document.getElementById('navLayanan').classList.add('bg-gradient-to-r', 'from-teal-400', 'to-green-400', 'text-white');
} else if (window.location.href.indexOf('/kalkulator') != -1) {
    document.getElementById('navKalkulator').classList.add('bg-gradient-to-r', 'from-teal-400', 'to-green-400', 'text-white');
} else if (window.location.href.indexOf('/peraturan_pajak_pusat') != -1) {
    document.getElementById('navPeraturan').classList.add('bg-gradient-to-r', 'from-teal-400', 'to-green-400', 'text-white', 'rounded');
    document.getElementById('navPeraturanPusat').classList.add('bg-gradient-to-r', 'from-teal-400', 'to-green-400', 'text-white', 'rounded');
} else if (window.location.href.indexOf('/peraturan_pajak_daerah') != -1) {
    document.getElementById('navPeraturan').classList.add('bg-gradient-to-r', 'from-teal-400', 'to-green-400', 'text-white', 'rounded');
    document.getElementById('navPeraturanDaerah').classList.add('bg-gradient-to-r', 'from-teal-400', 'to-green-400', 'text-white', 'rounded');
} else if (window.location.href.indexOf('/profil') != -1) {
    document.getElementById('navProfil').classList.add('bg-gradient-to-r', 'from-teal-400', 'to-green-400', 'text-white');
} else if (window.location.href.indexOf('/tamu') != -1) {
    document.getElementById('navBeranda').classList.add('bg-gradient-to-r', 'from-teal-400', 'to-green-400', 'text-white');
}