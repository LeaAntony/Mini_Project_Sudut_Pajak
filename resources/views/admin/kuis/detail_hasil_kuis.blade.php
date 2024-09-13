@extends('layouts.admin_main')

@section('title', 'Detail Hasil Kuis | Sudut Pajak')
@section('content')

<x-admin_top_panel>Detail Hasil Kuis</x-admin_top_panel>
<div class="place-items-center">
    <div class="card bg-base-100 shadow-xl mx-16 overflow-visible -mt-10">
        <div class="card-body w-full">
            <h2 class="card-title">Detail Hasil Kuis, <div>Lea Antony</div><div> | Kuis PPh 21</div></h2>
            <p>Waktu : 15 menit</p>
            <form action="/admin/kuis/hasil_kuis">
                <div>
                    <div class="my-5">
                        <table>
                            <tr>
                                <td>1.</td>
                                <td>Soal PPh 21: Test pemahaman tentang pajak gaji</td>                                
                            </tr>
                        </table>
                        <div>
                            <p><input type="radio" name="radio-1" id="jawaban_a" class="radio radio-accent -mb-1 my-1" disabled /> Ayam</p>
                            <p><input type="radio" name="radio-1" id="jawaban_b" class="radio radio-accent -mb-1 my-1" disabled checked /> Bebek</p>
                            <p><input type="radio" name="radio-1" id="jawaban_c" class="radio radio-accent -mb-1 my-1" disabled /> Cacing</p>
                            <p><input type="radio" name="radio-1" id="jawaban_d" class="radio radio-accent -mb-1 my-1" disabled /> Domba</p>
                            <p><input type="radio" name="radio-1" id="jawaban_e" class="radio radio-accent -mb-1 my-1" disabled /> Elang</p>
                        </div>
                        <div class="my-3">
                            <select class="select select-accent w-full max-w-xs">
                                <option disabled selected>Benar atau Salah?</option>
                                <option>Benar</option>
                                <option>Salah</option>                                        
                            </select>
                        </div>
                    </div>
                    <div class="my-5">
                        <table>
                            <tr>
                                <td>2.</td>
                                <td>Soal PPh 21: Test pemahaman tentang pajak gaji</td>                                
                            </tr>
                        </table>
                        <div>
                            <p><input type="radio" name="radio-2" id="jawaban_a" class="radio radio-accent -mb-1 my-1" disabled /> Ayam</p>
                            <p><input type="radio" name="radio-2" id="jawaban_b" class="radio radio-accent -mb-1 my-1" disabled checked /> Bebek</p>
                            <p><input type="radio" name="radio-2" id="jawaban_c" class="radio radio-accent -mb-1 my-1" disabled /> Cacing</p>
                            <p><input type="radio" name="radio-2" id="jawaban_d" class="radio radio-accent -mb-1 my-1" disabled /> Domba</p>
                            <p><input type="radio" name="radio-2" id="jawaban_e" class="radio radio-accent -mb-1 my-1" disabled /> Elang</p>
                        </div>
                        <div class="my-3">
                            <select class="select select-accent w-full max-w-xs">
                                <option disabled selected>Benar atau Salah?</option>
                                <option>Benar</option>
                                <option>Salah</option>                                        
                            </select>
                        </div>
                    </div>
                    <div class="my-5">
                        <table>
                            <tr>
                                <td>3.</td>
                                <td>Soal PPh 21: Test pemahaman tentang pajak gaji</td>                                
                            </tr>
                        </table>
                        <div>
                            <p><input type="radio" name="radio-3" id="jawaban_a" class="radio radio-accent -mb-1 my-1" disabled /> Ayam</p>
                            <p><input type="radio" name="radio-3" id="jawaban_b" class="radio radio-accent -mb-1 my-1" disabled checked /> Bebek</p>
                            <p><input type="radio" name="radio-3" id="jawaban_c" class="radio radio-accent -mb-1 my-1" disabled /> Cacing</p>
                            <p><input type="radio" name="radio-3" id="jawaban_d" class="radio radio-accent -mb-1 my-1" disabled /> Domba</p>
                            <p><input type="radio" name="radio-3" id="jawaban_e" class="radio radio-accent -mb-1 my-1" disabled /> Elang</p>
                        </div>
                        <div class="my-3">
                            <select class="select select-accent w-full max-w-xs">
                                <option disabled selected>Benar atau Salah?</option>
                                <option>Benar</option>
                                <option>Salah</option>                                        
                            </select>
                        </div>
                    </div>
                    <div class="my-5">
                        <table>
                            <tr>
                                <td>4.</td>
                                <td>Soal PPh 21: Test pemahaman tentang pajak gaji</td>                                
                            </tr>
                        </table>
                        <div>
                            <p><input type="radio" name="radio-4" id="jawaban_a" class="radio radio-accent -mb-1 my-1" disabled /> Ayam</p>
                            <p><input type="radio" name="radio-4" id="jawaban_b" class="radio radio-accent -mb-1 my-1" disabled checked /> Bebek</p>
                            <p><input type="radio" name="radio-4" id="jawaban_c" class="radio radio-accent -mb-1 my-1" disabled /> Cacing</p>
                            <p><input type="radio" name="radio-4" id="jawaban_d" class="radio radio-accent -mb-1 my-1" disabled /> Domba</p>
                            <p><input type="radio" name="radio-4" id="jawaban_e" class="radio radio-accent -mb-1 my-1" disabled /> Elang</p>
                        </div>
                        <div class="my-3">
                            <select class="select select-accent w-full max-w-xs">
                                <option disabled selected>Benar atau Salah?</option>
                                <option>Benar</option>
                                <option>Salah</option>                                        
                            </select>
                        </div>
                    </div>
                    <div class="my-5">
                        <table>
                            <tr>
                                <td>5.</td>
                                <td>Soal PPh 21: Test pemahaman tentang pajak gaji</td>                                
                            </tr>
                        </table>
                        <div>
                            <p><input type="radio" name="radio-5" id="jawaban_a" class="radio radio-accent -mb-1 my-1" disabled /> Ayam</p>
                            <p><input type="radio" name="radio-5" id="jawaban_b" class="radio radio-accent -mb-1 my-1" disabled checked /> Bebek</p>
                            <p><input type="radio" name="radio-5" id="jawaban_c" class="radio radio-accent -mb-1 my-1" disabled /> Cacing</p>
                            <p><input type="radio" name="radio-5" id="jawaban_d" class="radio radio-accent -mb-1 my-1" disabled /> Domba</p>
                            <p><input type="radio" name="radio-5" id="jawaban_e" class="radio radio-accent -mb-1 my-1" disabled /> Elang</p>
                        </div>
                        <div class="my-3">
                            <select class="select select-accent w-full max-w-xs">
                                <option disabled selected>Benar atau Salah?</option>
                                <option>Benar</option>
                                <option>Salah</option>                                        
                            </select>
                        </div>
                    </div>
                </div>
                <x-button type="submit" class="sm:btn-sm md:btn-md lg:btn-lg">Selesai</x-button>
            </form>
        </div>
    </div>
</div>

<script src="/js/pilgan.js"></script>

@endsection