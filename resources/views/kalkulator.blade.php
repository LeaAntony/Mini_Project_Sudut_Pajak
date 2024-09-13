<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator | Sudut Pajak</title>
    <link rel="icon" type="image/png" href="/images/favicon.png">
    <link rel="stylesheet" href="/css/template/main.css">
    <link rel="stylesheet" href="/css/daisyui/daisyui.min.css">
    <link rel="stylesheet" href="/icons/uicons/css/uicons-thin-rounded.css">
    <link rel="stylesheet" href="/icons/uicons/css/uicons-regular-rounded.css">
    <link rel="stylesheet" href="/icons/uicons/css/uicons-brands.css">
    <link rel="stylesheet" href="/css/template/title.css">
    <link rel="stylesheet" href="/css/template/footer.css">
    <script src="/js/daisyui/daisyui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
</head>
<body class="bg-slate-100 flex flex-col min-h-screen poppins">
    <header>
        @include('components.header')
    </header>

    <div class="flex-1 pt-28">
        <div class="my-6">
            <!-- Judul Besar -->
            <div class="grid grid-cols-12 gap-0">
                <i class="fi fi-rr-calculator text-4xl col-start-5 col-span-1 text-teal-500" style="font-size: 60px;"></i>
                <h2 class="text-4xl col-span-4 font-semibold text-teal-500 "> KALKULATOR PAJAK <div
                        class="text-sm font-medium text-teal-700">PPh 21</div>
                </h2>
            </div>
            <!-- Kalkulator -->
            <hr class="h-px mt-5 bg-teal-200 border-0">
                <div id="Informasi" class="carousel-item relative w-full h-1/2">
                    <div class="mx-56 my-10 card bg-base-100 shadow-xl rounded relative p-8 w-full">
                        <!-- Timeline -->
                        <div class="mx-auto mb-5 text-sm">
                            <ul class="timeline">
                                <li>
                                    <div class="timeline-start timeline-box">Informasi Wajib Pajak</div>
                                    <div class="timeline-middle">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            class="w-5 h-5">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                                clip-rule="evenodd" /></svg>
                                    </div>
                                    <hr class="" />
                                </li>
                                <li>
                                    <hr class="mr-48" />
                                    <div class="timeline-middle">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            class="w-5 h-5">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                                clip-rule="evenodd" /></svg>
                                    </div>
                                    <div class="timeline-end timeline-box">Penghasilan</div>
                                    <hr />
                                </li>
                                <li>
                                    <hr />
                                    <div class="timeline-start timeline-box">Perhitungan</div>
                                    <div class="timeline-middle">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            class="w-5 h-5">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                                clip-rule="evenodd" /></svg>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        {{-- Form Kalkulator --}}
                        <div class="border-separate border-spacing-2 border w-full text-sm">
                            <div id="skemaPajakSection">
                                <table class="border-separate border-spacing-2 border w-full text-sm">
                                    <tr>
                                        <td>
                                            <label for="Status NPWP">Skema Pajak</label>
                                        </td>
                                        <td>:</td>
                                        <td>
                                            <select class="select select-accent w-full select-md">
                                                <option selected>Pegawai Tetap</option>
                                                <option>Pegawai Tidak Tetap</option>
                                                <option>Bukan Pegawai</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="Status NPWP">Masa Pemotongan</label>
                                        </td>
                                        <td>:</td>
                                        <td>
                                            <select id="jenisPemotongan" class="select select-accent w-full select-md">
                                                <option value="setiap_masa">Setiap Masa</option>
                                                <option value="masa_terakhir">Masa Terakhir</option>
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div id="kalkulatorSetiapMasa">
                                <form name="formBulanan" action="">
                                    <!-- Informasi -->
                                    <table class="border-separate border-spacing-2 border w-full text-sm">
                                        <tr>
                                            <td class="text-xl font-bold">Informasi Wajib Pajak</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="Status NPWP">Status NPWP</label>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <input type="radio" name="radio-4" class="radio radio-accent" /> <span
                                                    class="align-[7px]">NPWP</span>
                                                <input type="radio" name="radio-4" class="radio radio-accent ml-20" /> <span
                                                    class="align-[7px]">Non NPWP</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="PTKP">PTKP</label>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <select class="select select-accent w-full select-md">
                                                    <option value="54000000" selected>TK/0</option>
                                                    <option value="58500000">TK/1</option>
                                                    <option value="63000000">TK/2</option>
                                                    <option value="67500000">TK/3</option>
                                                    <option value="58500000">K/0</option>
                                                    <option value="63000000">K/1</option>
                                                    <option value="67500000">K/2</option>
                                                    <option value="72000000">K/3</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="Masa Penghasilan">Masa Penghasilan</label>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <select class="select select-accent w-2/5 select-md">
                                                    <option value="1" selected="selected">Januari</option>
                                                    <option value="2">Februari</option>
                                                    <option value="3">Maret</option>
                                                    <option value="4">April</option>
                                                    <option value="5">Mei</option>
                                                    <option value="6">Juni</option>
                                                    <option value="7">Juli</option>
                                                    <option value="8">Agustus</option>
                                                    <option value="9">September</option>
                                                    <option value="10">Oktober</option>
                                                    <option value="11">November</option>
                                                    <option value="12">Desember</option>
                                                </select>
                                                <span class="mx-10">s/d</span>
                                                <select class="select select-accent w-2/5 select-md">
                                                    <option value="1">Januari</option>
                                                    <option value="2">Februari</option>
                                                    <option value="3">Maret</option>
                                                    <option value="4">April</option>
                                                    <option value="5">Mei</option>
                                                    <option value="6">Juni</option>
                                                    <option value="7">Juli</option>
                                                    <option value="8">Agustus</option>
                                                    <option value="9">September</option>
                                                    <option value="10">Oktober</option>
                                                    <option value="11">November</option>
                                                    <option value="12" selected="selected">Desember</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <x-link_button href="#Penghasilan" class="sm:btn-sm md:btn-md lg:btn-lg mt-10">Selanjutnya</x-link_button>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                            <div id="kalkulatorMasaTerakhir" class="hidden">
                                <form name="formMasaTerakhir" action="POST">
                                    <!-- Informasi -->
                                    <table class="border-separate border-spacing-2 border w-full text-sm" id="informasiSection">
                                        <tr>
                                            <td class="text-xl font-bold">Informasi Wajib Pajak</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="status npwp">Status NPWP</label>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <input type="radio" name="radio-4" class="radio radio-accent" /> <span
                                                    class="align-[7px]">NPWP</span>
                                                <input type="radio" name="radio-4" class="radio radio-accent ml-20" /> <span
                                                    class="align-[7px]">Non NPWP</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="ptkp">PTKP</label>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <select class="select select-accent w-full select-md">
                                                    <option value="54000000" selected>TK/0</option>
                                                    <option value="58500000">TK/1</option>
                                                    <option value="63000000">TK/2</option>
                                                    <option value="67500000">TK/3</option>
                                                    <option value="58500000">K/0</option>
                                                    <option value="63000000">K/1</option>
                                                    <option value="67500000">K/2</option>
                                                    <option value="72000000">K/3</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="masa penghasilan">Masa Penghasilan</label>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                <select class="select select-accent w-2/5 select-md">
                                                    <option value="1" selected="selected">Januari</option>
                                                    <option value="2">Februari</option>
                                                    <option value="3">Maret</option>
                                                    <option value="4">April</option>
                                                    <option value="5">Mei</option>
                                                    <option value="6">Juni</option>
                                                    <option value="7">Juli</option>
                                                    <option value="8">Agustus</option>
                                                    <option value="9">September</option>
                                                    <option value="10">Oktober</option>
                                                    <option value="11">November</option>
                                                    <option value="12">Desember</option>
                                                </select>
                                                <span class="mx-10">s/d</span>
                                                <select class="select select-accent w-2/5 select-md">
                                                    <option value="1">Januari</option>
                                                    <option value="2">Februari</option>
                                                    <option value="3">Maret</option>
                                                    <option value="4">April</option>
                                                    <option value="5">Mei</option>
                                                    <option value="6">Juni</option>
                                                    <option value="7">Juli</option>
                                                    <option value="8">Agustus</option>
                                                    <option value="9">September</option>
                                                    <option value="10">Oktober</option>
                                                    <option value="11">November</option>
                                                    <option value="12" selected="selected">Desember</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <button type="button" class="btn sm:btn-sm md:btn-md lg:btn-lg bg-gradient-to-r from-cyan-400 to-blue-400 hover:from-blue-300 hover:to-cyan-300 active:from-blue-200 active:to-cyan-200 focus:outline-none focus:ring focus:ring-sky-300 text-white" onclick="showSection('penghasilan'); hideSection('skemaPajak')" id="setelahInformasiBtn">Selanjutnya</button>
                                            </td>
                                        </tr>
                                    </table>
                                    
                                    <!-- Penghasilan -->
                                    <table class="border-separate border-spacing-2 border w-full text-sm page" id="penghasilanSection">
                                        <tr>
                                            <td class="text-xl font-bold">A. Penghasilan</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="gaji">1. Gaji/Pensiun atau THT/JHT</label>
                                            </td>
                                            <td>:</td>
                                            <td>
                                            <input type="text" name="gajiPensiun" id="gajiPensiun" placeholder="0" class="input input-bordered input-accent w-full text-right input-sm penjumlah_bruto" oninput="formatNumber(this)" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="tunjangan pph">2. Tunjangan PPh</label>
                                            </td>
                                            <td>:</td>
                                            <td>
                                            <input type="text" placeholder="0" class="input input-bordered input-accent w-full text-right input-sm penjumlah_bruto" oninput="formatNumber(this)" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="tunjangan lainnya">3. Tunjangan Lainnya, Uang Lembur, dan sebagainya</label>
                                            </td>
                                            <td>:</td>
                                            <td>
                                            <input type="text" placeholder="0" class="input input-bordered input-accent w-full text-right input-sm penjumlah_bruto" oninput="formatNumber(this)" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="honorarium">4. Honorarium dan Imbalan Lainnya Sejenisnya</label>
                                            </td>
                                            <td>:</td>
                                            <td>
                                            <input type="text" placeholder="0" class="input input-bordered input-accent w-full text-right input-sm penjumlah_bruto" oninput="formatNumber(this)" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="asuransi">5. Premi Asuransi yang dibayar Pemberi Kerja</label>
                                            </td>
                                            <td>:</td>
                                            <td>
                                            <input type="text" placeholder="0" class="input input-bordered input-accent w-full text-right input-sm penjumlah_bruto" oninput="formatNumber(this)" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="natura">6. Natura dan Kenikmatan Lainnya</label>
                                            </td>
                                            <td>:</td>
                                            <td>
                                            <input type="text" placeholder="0" class="input input-bordered input-accent w-full text-right input-sm penjumlah_bruto" oninput="formatNumber(this)" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="bonus">7. Tantiem, Bonus, Gratifikasi, Jasa Produksi dan THR</label>
                                            </td>
                                            <td>:</td>
                                            <td>
                                            <input type="text" placeholder="0" class="input input-bordered input-accent w-full text-right input-sm penjumlah_bruto" oninput="formatNumber(this)" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="bruto">8. Penghasilan Bruto (1 - 7)</label>
                                            </td>
                                            <td>:</td>
                                            <td>
                                            <input type="text" name="hasilBruto" id="hasilBruto" placeholder="0" class="input input-bordered input-accent w-full text-right input-sm" disabled="true" readonly="readonly" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-xl font-bold">B. Pengurang</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="biaya jabatan">9. Biaya Jabatan</label>
                                            </td>
                                            <td>:</td>
                                            <td>
                                            <input type="text" name="biayaJabatan" id="biayaJabatan" maxlength="6000000" placeholder="0" class="input input-bordered input-accent w-full text-right input-sm" oninput="formatNumber(this)" disabled="true" readonly="readonly" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="iuran pensiun">10. Iuran Pensiun atau Iuran THT/JHT</label>
                                            </td>
                                            <td>:</td>
                                            <td>
                                            <input type="text" placeholder="0" class="input input-bordered input-accent w-full text-right input-sm" oninput="formatNumber(this)" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="zakat sumbangan">11. Zakat/Sumbangan Keagamaan yang Bersifat Wajib</label>
                                            </td>
                                            <td>:</td>
                                            <td>
                                            <input type="text" placeholder="0" class="input input-bordered input-accent w-full text-right input-sm" oninput="formatNumber(this)" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="pengurang setahun">12. Jumlah Pengurang Setahun (9 - 11)</label>
                                            </td>
                                            <td>:</td>
                                            <td>
                                            <input type="text" placeholder="0" class="input input-bordered input-accent w-full text-right input-sm" oninput="formatNumber(this)" disabled="true" readonly="readonly" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <button type="button" class="btn sm:btn-sm md:btn-md lg:btn-lg bg-gradient-to-r from-cyan-400 to-blue-400 hover:from-blue-300 hover:to-cyan-300 active:from-blue-200 active:to-cyan-200 focus:outline-none focus:ring focus:ring-sky-300 text-white" onclick="showSection('informasi'); addSection('skemaPajak');" id="sebelumPenghasilanBtn">Sebelumnya</button>
                                                <button type="button" class="btn sm:btn-sm md:btn-md lg:btn-lg bg-gradient-to-r from-cyan-400 to-blue-400 hover:from-blue-300 hover:to-cyan-300 active:from-blue-200 active:to-cyan-200 focus:outline-none focus:ring focus:ring-sky-300 text-white" onclick="showSection('perhitungan')" id="setelahPenghasilanBtn">Selanjutnya</button>
                                            </td>
                                        </tr>
                                    </table>
                                    
                                    <!-- Perhitungan -->
                                    <table class="border-separate border-spacing-2 border w-full text-sm" id="perhitunganSection">
                                        <tr>
                                            <td class="text-xl font-bold">C. Penghitungan PPh Pasal 21:</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="neto">13. Penghasilan Neto (8 - 12)</label>
                                            </td>
                                            <td>:</td>
                                            <td>
                                            <input type="text" placeholder="0" class="input input-bordered input-accent w-full text-right input-sm" oninput="formatNumber(this)" disabled="true" readonly="readonly" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="neto sebelumnya">14. Penghasilan Neto Masa Pajak Sebelumnya</label>
                                            </td>
                                            <td>:</td>
                                            <td>
                                            <input type="text" placeholder="0" class="input input-bordered input-accent w-full text-right input-sm" oninput="formatNumber(this)" disabled="true" readonly="readonly" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="neto setahun">15. Jumlah Penghasilan Neto Setahun</label>
                                            </td>
                                            <td>:</td>
                                            <td>
                                            <input type="text" placeholder="0" class="input input-bordered input-accent w-full text-right input-sm" oninput="formatNumber(this)" disabled="true" readonly="readonly" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="hasil ptkp">16.  Penghasilan Tidak Kena Pajak (PTKP)</label>
                                            </td>
                                            <td>:</td>
                                            <td>
                                            <input type="text" placeholder="0" class="input input-bordered input-accent w-full text-right input-sm" oninput="formatNumber(this)" disabled="true" readonly="readonly" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="pkp">17. Penghasilan Kena Pajak (PKP) Setahun (15 - 16)</label>
                                            </td>
                                            <td>:</td>
                                            <td>
                                            <input type="text" placeholder="0" class="input input-bordered input-accent w-full text-right input-sm" oninput="formatNumber(this)" disabled="true" readonly="readonly" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="pph21 pkp">18.  PPh Pasal 21 atas Penghasilan Kena Pajak (PKP) Setahun</label>
                                            </td>
                                            <td>:</td>
                                            <td>
                                            <input type="text" placeholder="0" class="input input-bordered input-accent w-full text-right input-sm" oninput="formatNumber(this)" disabled="true" readonly="readonly" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="pph21 dipotong">19.  PPh Pasal 21 Dipotong Masa Pajak Sebelumnya</label>
                                            </td>
                                            <td>:</td>
                                            <td>
                                            <input type="text" placeholder="0" class="input input-bordered input-accent w-full text-right input-sm" oninput="formatNumber(this)" disabled="true" readonly="readonly" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="pph21 terutang">20. PPh Pasal 21 Terutang (18 - 19)</label>
                                            </td>
                                            <td>:</td>
                                            <td>
                                            <input type="text" placeholder="0" class="input input-bordered input-accent w-full text-right input-sm" oninput="formatNumber(this)" disabled="true" readonly="readonly" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <button type="button" href="/kalkulator" class="btn sm:btn-sm md:btn-md lg:btn-lg bg-gradient-to-r from-cyan-400 to-blue-400 hover:from-blue-300 hover:to-cyan-300 active:from-blue-200 active:to-cyan-200 focus:outline-none focus:ring focus:ring-sky-300 text-white" onclick="showSection('penghasilan')" id="sebelumPerhitunganBtn">Kembali</button>
                                                <button type="reset" href="/kalkulator#Perhitungan" class="btn sm:btn-sm md:btn-md lg:btn-lg bg-gradient-to-r from-cyan-400 to-blue-400 hover:from-blue-300 hover:to-cyan-300 active:from-blue-200 active:to-cyan-200 focus:outline-none focus:ring focus:ring-sky-300 text-white" onclick="showSection('informasi'); addSection('skemaPajak');" id="resetPerhitunganBtn">Reset</button>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/template/navbarHeader.js"></script>
    <script src="/js/kalkulator.js"></script>
</body>
</html>