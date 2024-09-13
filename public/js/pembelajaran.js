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
        document.getElementById("gambarArtikel").required = true;
        document.getElementById("isiArtikel").required = true;
        document.getElementById("gambarInfografis").required = false;
        document.getElementById("gambarVideo").required = false;
        document.getElementById("linkVideo").required = false;
        document.getElementById("gambarArtikel").name = "gambar_pembelajaran";
        document.getElementById("gambarInfografis").name = "";
        document.getElementById("gambarVideo").name = "";
        document.getElementById("gambarInfografis").value = "";
        document.getElementById("gambarVideo").value = "";
        document.getElementById("linkVideo").value = "";
    }
});

radioInfografis.addEventListener('change', () => {
    if (radioInfografis.checked) {
        tipeInfografis.classList.remove('hidden');
        tipeArtikel.classList.add('hidden');
        tipeVideo.classList.add('hidden');
        document.getElementById("gambarArtikel").required = false;
        document.getElementById("isiArtikel").required = false;
        document.getElementById("gambarInfografis").required = true;
        document.getElementById("gambarVideo").required = false;
        document.getElementById("linkVideo").required = false;
        document.getElementById("gambarArtikel").name = "";
        document.getElementById("gambarInfografis").name = "gambar_pembelajaran";
        document.getElementById("gambarVideo").name = "";
        document.getElementById("gambarArtikel").value = "";
        document.getElementById("isiArtikel").value = "";
        document.getElementById("gambarVideo").value = "";
        document.getElementById("linkVideo").value = "";
    }
});

radioVideo.addEventListener('change', () => {
    if (radioVideo.checked) {
        tipeVideo.classList.remove('hidden');
        tipeArtikel.classList.add('hidden');
        tipeInfografis.classList.add('hidden');
        document.getElementById("gambarArtikel").required = false;
        document.getElementById("isiArtikel").required = false;
        document.getElementById("gambarInfografis").required = false;
        document.getElementById("gambarVideo").required = true;
        document.getElementById("linkVideo").required = true;
        document.getElementById("gambarArtikel").name = "";
        document.getElementById("gambarInfografis").name = "";
        document.getElementById("gambarVideo").name = "gambar_pembelajaran";
        document.getElementById("gambarArtikel").value = "";
        document.getElementById("isiArtikel").value = "";
        document.getElementById("gambarInfografis").value = "";
    }
});