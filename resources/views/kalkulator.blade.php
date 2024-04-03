@extends('layouts.main')

@section('title', 'Dasbor')
@section('content')

<div class="my-20">
    <div class="grid grid-cols-12 gap-0">
        <i class="fa fa-calculator fa-2xl col-start-5 col-span-1 text-teal-500" style="font-size: 75px;"></i>
        <h2 class="text-3xl col-span-3 font-semibold text-teal-500 mt-1"> KALKULATOR PAJAK <div class="font-medium text-teal-700">PPh 21</div> </h2>
    </div>
    <hr class="h-px my-8 bg-teal-200 border-0">
    <div class="mx-64 my-36">
        <table>
            <tr>
                <td>
                    <label for="">Status NPWP</label>
                </td>
                <td>:</td>
                <td>
                    <input type="radio" name="radio-4" class="radio radio-accent" /> NPWP
                    <input type="radio" name="radio-4" class="radio radio-accent" /> NON NPWP
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Status Kawin</label>
                </td>
                <td>       :</td>
                <td>
                <select class="select select-accent w-full max-w-xs">
                    <option disabled selected>Dark mode or light mode?</option>
                    <option>Auto</option>
                    <option>Dark mode</option>
                    <option>Light mode</option>
                </select>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection