@extends('layouts.main')

@section('title', 'Kalkulator')
@section('content')

<link rel="stylesheet" href="./css/page.css">

<div class="my-12">
    <!-- Judul Besar -->
    <div class="grid grid-cols-12 gap-0">
        <i class="fa fa-calculator fa-2xl col-start-5 col-span-1 text-teal-500" style="font-size: 75px;"></i>
        <h2 class="text-4xl col-span-4 font-semibold text-teal-500 "> KALKULATOR PAJAK <div
                class="font-medium text-teal-700">PPh 21</div>
        </h2>
    </div>
    <!-- Kalkulator -->
    <hr class="h-px mt-5 bg-teal-200 border-0">
    <form action="" class="carousel w-full">
        <!-- Informasi -->
        <div id="Informasi" class="carousel-item relative w-full h-1/2">
            <div class="mx-56 my-10 card bg-base-100 shadow-xl rounded relative p-8 w-full">
                <!-- Timeline -->
                <div class="mx-auto mb-5">
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
                <!-- Form Kalkulator -->
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
                            <label for="Status Kawin">Status Kawin</label>
                        </td>
                        <td>:</td>
                        <td>
                            <select class="select select-accent w-full">
                                <option>Tidak Kawin</option>
                                <option>Kawin</option>
                                <option>Kawin/1</option>
                                <option>Kawin/2</option>
                                <option>Kawin/3</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Tanggungan">Tanggungan</label>
                        </td>
                        <td>:</td>
                        <td>
                            <select class="select select-accent w-full">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Masa Penghasilan">Masa Penghasilan</label>
                        </td>
                        <td>:</td>
                        <td>
                            <select class="select select-accent w-2/5">
                                <option>Januari</option>
                                <option>Februari</option>
                                <option>Maret</option>
                                <option>April</option>
                                <option>Mei</option>
                                <option>Juni</option>
                                <option>Juli</option>
                                <option>Agustus</option>
                                <option>September</option>
                                <option>Oktober</option>
                                <option>November</option>
                                <option>Desember</option>
                            </select>
                            <span class="mx-10">s/d</span>
                            <select class="select select-accent w-2/5">
                                <option>Januari</option>
                                <option>Februari</option>
                                <option>Maret</option>
                                <option>April</option>
                                <option>Mei</option>
                                <option>Juni</option>
                                <option>Juli</option>
                                <option>Agustus</option>
                                <option>September</option>
                                <option>Oktober</option>
                                <option>November</option>
                                <option>Desember</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Status Masuk">Status Masuk</label>
                        </td>
                        <td>:</td>
                        <td>
                            <select class="select select-accent w-full">
                                <option>Pegawai Baru</option>
                                <option>Pegawai Pindahan</option>
                                <option>Eskpatriat</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-xl font-bold">Konfigurasi</td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Status NPWP">Status NPWP</label>
                        </td>
                        <td>:</td>
                        <td>
                            <input type="radio" name="radio-4" class="radio radio-accent" /> <span
                                class="align-[7px]">Gross-up</span>
                            <input type="radio" name="radio-4" class="radio radio-accent ml-16" /> <span
                                class="align-[7px]">Non Gross-up</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Tanggungan">Ketentuan PTKP</label>
                        </td>
                        <td>:</td>
                        <td>
                            <select class="select select-accent w-full">
                                <option>Januari 2011 - Desember 2012</option>
                                <option>Januari 2013 - Desember 2014</option>
                                <option>Januari 2015 - Desember 2015</option>
                                <option Selected>Mulai Januari 2016</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <x-link_button href="#Penghasilan" class="">Selanjutnya</x-link_button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- Penghasilan -->
        <div id="Penghasilan" class="carousel-item relative w-full h-3/4 ">
            <div class="mx-56 my-10 card w-auto bg-base-100 shadow-xl rounded relative p-8 w-full">
                <!-- Timeline -->
                <div class="mx-auto mb-5">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-start timeline-box">Informasi Wajib Pajak</div>
                            <div class="timeline-middle text-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                        clip-rule="evenodd" /></svg>
                            </div>
                            <hr class="bg-accent" />
                        </li>
                        <li>
                            <hr class="bg-accent mr-48" />
                            <div class="timeline-middle ">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                        clip-rule="evenodd" /></svg>
                            </div>
                            <div class="timeline-end timeline-box">Penghasilan</div>
                            <hr class="" />
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
                <!-- Form Kalkulator -->
                <table class="border-separate border-spacing-2 border w-full text-sm page">
                    <tr>
                        <td class="text-xl font-bold">A. Penghasilan</td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Status NPWP">1. Gaji/Pensiun atau THT/JHT</label>
                        </td>
                        <td>:</td>
                        <td>
                        <input type="number" placeholder="0" class="input input-bordered input-accent w-full text-right" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Status NPWP">2. Tunjangan PPh</label>
                        </td>
                        <td>:</td>
                        <td>
                        <input type="number" placeholder="0" class="input input-bordered input-accent w-full text-right" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Status NPWP">3. Tunjangan Lainnya, Uang Lembur, dan sebagainya</label>
                        </td>
                        <td>:</td>
                        <td>
                        <input type="number" placeholder="0" class="input input-bordered input-accent w-full text-right" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Status NPWP">4. Honorarium dan Imbalan Lainnya Sejenisnya</label>
                        </td>
                        <td>:</td>
                        <td>
                        <input type="number" placeholder="0" class="input input-bordered input-accent w-full text-right" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Status NPWP">5. Premi Asuransi yang dibayar Pemberi Kerja</label>
                        </td>
                        <td>:</td>
                        <td>
                        <input type="number" placeholder="0" class="input input-bordered input-accent w-full text-right" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Status NPWP">6. Natura dan Kenikmatan Lainnya</label>
                        </td>
                        <td>:</td>
                        <td>
                        <input type="number" placeholder="0" class="input input-bordered input-accent w-full text-right" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Status NPWP">7. Tantiem, Bonus, Gratifikasi, Jasa Produksi dan THR</label>
                        </td>
                        <td>:</td>
                        <td>
                        <input type="number" placeholder="0" class="input input-bordered input-accent w-full text-right" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Status NPWP">8. Penghasilan Bruto</label>
                        </td>
                        <td>:</td>
                        <td>
                        <input type="number" placeholder="0" class="input input-bordered input-accent w-full text-right" disabled="true" readonly="readonly" />
                        </td>
                    </tr>
                    <tr>
                        <td class="text-xl font-bold">B. Pengurang</td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Status NPWP">9. Biaya Jabatan</label>
                        </td>
                        <td>:</td>
                        <td>
                        <input type="number" placeholder="0" class="input input-bordered input-accent w-full text-right" disabled="true" readonly="readonly" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Status NPWP">10. Iuran Pensiun atau Iuran THT/JHT</label>
                        </td>
                        <td>:</td>
                        <td>
                        <input type="number" placeholder="0" class="input input-bordered input-accent w-full text-right" />
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <x-link_button href="#Informasi" class="">Sebelumnya</x-link_button>
                            <x-link_button href="#Perhitungan" class="">Selanjutnya</x-link_button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- Perhitungan -->
        <div id="Perhitungan" class="carousel-item relative w-full">
            <div class="mx-56 my-10 card w-auto bg-base-100 shadow-xl rounded relative p-8 w-full">
                <!-- Timeline -->
                <div class="mx-auto mb-5">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-start timeline-box">Informasi Wajib Pajak</div>
                            <div class="timeline-middle text-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                        clip-rule="evenodd" /></svg>
                            </div>
                            <hr class="bg-accent" />
                        </li>
                        <li>
                            <hr class="bg-accent mr-48" />
                            <div class="timeline-middle ">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-5 h-5 text-accent">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                        clip-rule="evenodd" /></svg>
                            </div>
                            <div class="timeline-end timeline-box">Penghasilan</div>
                            <hr class="bg-accent" />
                        </li>
                        <li>
                            <hr class="bg-accent" />
                            <div class="timeline-start timeline-box">Perhitungan</div>
                            <div class="timeline-middle text-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                        clip-rule="evenodd" /></svg>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Form Kalkulator -->
                <table class="border-separate border-spacing-2 border w-full text-sm">
                <tr>
                        <td class="text-xl font-bold">C. Penghitungan PPh Pasal 21:</td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Status NPWP">11. Penghasilan Bruto Setahun</label>
                        </td>
                        <td>:</td>
                        <td>
                        <input type="number" placeholder="0" class="input input-bordered input-accent w-full text-right" disabled="true" readonly="readonly" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Status NPWP">12. Biaya Jabatan Setahun</label>
                        </td>
                        <td>:</td>
                        <td>
                        <input type="number" placeholder="0" class="input input-bordered input-accent w-full text-right" disabled="true" readonly="readonly" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Status NPWP">13. Iuran Pensiun Setahun</label>
                        </td>
                        <td>:</td>
                        <td>
                        <input type="number" placeholder="0" class="input input-bordered input-accent w-full text-right" disabled="true" readonly="readonly" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Status NPWP">14. Jumlah Pengurang Setahun</label>
                        </td>
                        <td>:</td>
                        <td>
                        <input type="number" placeholder="0" class="input input-bordered input-accent w-full text-right" disabled="true" readonly="readonly" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Status NPWP">15. Penghasilan Neto</label>
                        </td>
                        <td>:</td>
                        <td>
                        <input type="number" placeholder="0" class="input input-bordered input-accent w-full text-right" disabled="true" readonly="readonly" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Status NPWP">16. Penghasilan Neto Masa Sebelumnya</label>
                        </td>
                        <td>:</td>
                        <td>
                        <input type="number" placeholder="0" class="input input-bordered input-accent w-full text-right" disabled="true" readonly="readonly" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Status NPWP">17. Penghasilan Neto Setahun/Disetahunkan</label>
                        </td>
                        <td>:</td>
                        <td>
                        <input type="number" placeholder="0" class="input input-bordered input-accent w-full text-right" disabled="true" readonly="readonly" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Status NPWP">18. Penghasilan Tidak Kena Pajak</label>
                        </td>
                        <td>:</td>
                        <td>
                        <input type="number" placeholder="0" class="input input-bordered input-accent w-full text-right" disabled="true" readonly="readonly" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Status NPWP">19. PKP Setahun/Disetahunkan</label>
                        </td>
                        <td>:</td>
                        <td>
                        <input type="number" placeholder="0" class="input input-bordered input-accent w-full text-right" disabled="true" readonly="readonly" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Status NPWP">20. PPh Pasal 21 atas PKP</label>
                        </td>
                        <td>:</td>
                        <td>
                        <input type="number" placeholder="0" class="input input-bordered input-accent w-full text-right" disabled="true" readonly="readonly" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Status NPWP">21. PPh Pasal 21 Dipotong Masa Sebelumnya</label>
                        </td>
                        <td>:</td>
                        <td>
                        <input type="number" placeholder="0" class="input input-bordered input-accent w-full text-right" disabled="true" readonly="readonly" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Status NPWP">22. PPh Pasal 21 Terutang Setahun/Disetahunkan</label>
                        </td>
                        <td>:</td>
                        <td>
                        <input type="number" placeholder="0" class="input input-bordered input-accent w-full text-right" disabled="true" readonly="readonly" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Status NPWP">23. PPh Pasal 21 Terutang bulan ini</label>
                        </td>
                        <td>:</td>
                        <td>
                        <input type="number" placeholder="0" class="input input-bordered input-accent w-full text-right" disabled="true" readonly="readonly" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Status NPWP">PKP atas Penghasilan Teratur Setahun</label>
                        </td>
                        <td>:</td>
                        <td>
                        <input type="number" placeholder="0" class="input input-bordered input-accent w-full text-right" disabled="true" readonly="readonly" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Status NPWP">PPh Pasal 21 atas Penghasilan Teratur Setahun</label>
                        </td>
                        <td>:</td>
                        <td>
                        <input type="number" placeholder="0" class="input input-bordered input-accent w-full text-right" disabled="true" readonly="readonly" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Status NPWP">PPh Pasal 21 atas Penghasilan Tidak Teratur</label>
                        </td>
                        <td>:</td>
                        <td>
                        <input type="number" placeholder="0" class="input input-bordered input-accent w-full text-right" disabled="true" readonly="readonly" />
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <x-link_button href="/kalkulator" class="">Reset</x-link_button>
                            <x-link_button href="Perhitungan" class="">Simpan</x-link_button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </form>
</div>
</div>
@endsection