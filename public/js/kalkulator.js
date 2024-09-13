// JavaScript untuk menangani jenis pemotongan
const selectJenisPemotongan = document.getElementById("jenisPemotongan");
const kalkulatorSetiapMasa = document.getElementById("kalkulatorSetiapMasa");
const kalkulatorMasaTerakhir = document.getElementById("kalkulatorMasaTerakhir");
const bagianPenghasilan = document.getElementById('penghasilanSection')
const bagianPerhitungan = document.getElementById('perhitunganSection')

selectJenisPemotongan.addEventListener("change", () => {
   if (selectJenisPemotongan.value == "setiap_masa") {
      kalkulatorSetiapMasa.classList.remove("hidden");
      kalkulatorMasaTerakhir.classList.add("hidden");;
   }
});

selectJenisPemotongan.addEventListener("change", () => {
   if (selectJenisPemotongan.value == "masa_terakhir") {
      kalkulatorMasaTerakhir.classList.remove("hidden");
      kalkulatorSetiapMasa.classList.add("hidden");
      bagianPenghasilan.classList.add("hidden");
      bagianPerhitungan.classList.add("hidden");
   }
});

// 

// Javascript untuk menangani page tahunan
function showSection(section) {
   // Semua bagian diubah menjadi display: none
   document.getElementById('informasiSection').classList.add('hidden');
   document.getElementById('penghasilanSection').classList.add('hidden');
   document.getElementById('perhitunganSection').classList.add('hidden');

   // Bagian yang dipilih ditampilkan
   document.getElementById(section + 'Section').classList.remove('hidden');
}

function hideSection(section) {
   // Bagian yang dipilih ditampilkan
   document.getElementById(section + 'Section').classList.add('hidden');
}

function addSection(section) {
   // Bagian yang dipilih ditampilkan
   document.getElementById(section + 'Section').classList.remove('hidden');
}

//

// Javascript Kalkulator Pegawai Tetap
// Memformat angka ribuan berkoma
function formatNumber(input) {
   let value = input.value.replace(/\D/g, '');
   input.value = new Intl.NumberFormat('en-US').format(value);
}

// Menghitung Jumlah Bruto
document.addEventListener('DOMContentLoaded', function() {
   const valuePenjumlahBruto = document.querySelectorAll('.penjumlah_bruto');
   const jumlahHasilBruto = document.getElementById('hasilBruto');

   valuePenjumlahBruto.forEach(input => {
      input.addEventListener('input', perhitunganDanPemformatan);
   });

   function perhitunganDanPemformatan() {
      let hasil = 0;
      valuePenjumlahBruto.forEach(input => {
         const formattedValue = input.value.replace(/,/g, ''); // Menghapus format angka ribuan berkoma sehingga bisa dihitung dengan benar
         const value = parseFloat(formattedValue) || 0;
         hasil += value;
      });
      jumlahHasilBruto.value = pemformatanAngka(hasil);
   }

   function pemformatanAngka(number) {
      return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
   }

   // Menjalankan Kalkulasi
   perhitunganDanPemformatan();
});

document.getElementById('hasilBruto').addEventListener('hitung', hitungBiayaJabatan);

function hitungBiayaJabatan() {
   var hasilBruto = document.getElementById('hasilBruto').value;

   var jumlahBiayaJabatan = hasilBruto;

   document.getElementById('biayaJabatan').value = jumlahBiayaJabatan;
}