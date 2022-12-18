@extends('layouts.app')

@section('title', 'Daftar Judul Proposal')

@section('content')
    <h2 class="mb-4 text-3xl font-bold tracking-tight leading-none text-gray-900 md:text-4xl dark:text-white">Daftar Judul Proposal TA</h2>
<h1> </h1>
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">Nama Mahasiswa</th>
                <th scope="col" class="py-3 px-6">NRP</th>
                <th scope="col" class="py-3 px-6">Judul Proposal</th>
                <th scope="col" class="py-3 px-6">Dosen Pembimbing</th>
                <th scope="col" class="py-3 px-6">Status Proposal</th>
                <th scope="col" class="py-3 px-6">Jadwal Sidang</th>
                <th scope="col" class="py-3 px-6">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($detail_ta as $d)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $d->nama_mahasiswa }}
                </th>
                <td class="py-4 px-6">
                    {{ $d->nrp }}
                </td>
                <td class="py-4 px-6">
                    {{ $d->judul_ta }}
                </td>
                <td class="py-4 px-6">
                    {{ $d->nama_pembimbing }}
                </td>
                <td class="py-4 px-6">
                    {{ $d->status_ta }}
                </td>
                <td class="py-4 px-6">
                    {{ $d->tanggal_sidang }}
                </td>
                <td class="py-4 px-6 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Roger Sumatra
                </th>
                <td class="py-4 px-6">
                    0521194000156
                </td>
                <td class="py-4 px-6">
                    Analisa Pengaruh One Piece Terhadap Motivasi Belajar Siswa
                </td>
                <td class="py-4 px-6">
                    Radityo Prasetianto, S.Kom., M.Kom.
                </td>
                <td class="py-4 px-6">
                    Belum Disetujui
                </td>
                <td class="py-4 px-6">
                    N/A
                </td>
                <td class="py-4 px-6 text-right">
                    <a href="/penjadwalan" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit Jadwal</a>
                </td>
            </tr>
            <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Muklis Audio
                </th>
                <td class="py-4 px-6">
                    0521194000187
                </td>
                <td class="py-4 px-6">
                    Rancang Bangun Meja Kursi Berbasis Arduino
                </td>
                <td class="py-4 px-6">
                    Bapak Iyan
                </td>
                <td class="py-4 px-6">
                    Sudah Disetujui
                </td>
                <td class="py-4 px-6">
                    23 Desember 2022
                </td>
                <td class="py-4 px-6 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit Jadwal</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>


@endsection
