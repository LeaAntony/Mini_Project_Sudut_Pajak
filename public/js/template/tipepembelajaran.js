// JavaScript untuk menangani tipe
const radioArtikel = document.getElementById('artikel');
const radioInfografis = document.getElementById('infografis');
const radioVideo = document.getElementById('video');
const tipeArtikel = document.getElementById('tipeArtikel');
const tipeInfografis = document.getElementById('tipeInfografis');
const tipeVideo = document.getElementById('tipeVideo');

radioArtikel.addEventListener('change', () => {
    if (radioArtikel.checked) {
        tipeArtikel.classList.remove('hidden');
        tipeInfografis.classList.add('hidden');
        tipeVideo.classList.add('hidden');
    }
});

radioInfografis.addEventListener('change', () => {
    if (radioInfografis.checked) {
        tipeInfografis.classList.remove('hidden');
        tipeArtikel.classList.add('hidden');
        tipeVideo.classList.add('hidden');
    }
});

radioVideo.addEventListener('change', () => {
    if (radioVideo.checked) {
        tipeVideo.classList.remove('hidden');
        tipeArtikel.classList.add('hidden');
        tipeInfografis.classList.add('hidden');
    }
});