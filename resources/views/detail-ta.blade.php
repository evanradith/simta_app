@extends('layouts.app')

@section('title', 'Daftar Judul Proposal')

@section('content')
    <h2 class="mb-4 text-3xl font-bold tracking-tight leading-none text-gray-900 md:text-4xl dark:text-white">Daftar Judul Proposal TA</h2>
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

            @foreach($joined as $j)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $j['nama_mahasiswa']}}
                </th>
                <td class="py-4 px-6">
                    {{ $j['nrp_mhs'] }}
                </td>
                <td class="py-4 px-6">
                    {{ $j['judul_ta'] }}
                </td>
                <td class="py-4 px-6">
                    {{ $j['nama_pembimbing'] }}
                </td>
                <td class="py-4 px-6">
                    {{ $j['status_ta'] }}
                </td>
                <td class="py-4 px-6">
                    {{ $j['jadwal_sidang'] }}
                </td>
                <td class="py-4 px-6 text-right">
                    <a href="app-penjadwalan/{{$j['id_detail']}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit Jadwal</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>


@endsection
