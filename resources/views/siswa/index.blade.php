@extends('components.index')

@section('content')
    <h1 class="font-semibold text-4xl">Data Siswa</h1>
    <a href="/siswa/create" class="mt-5 mb-2 py-2 px-4 bg-blue-700 text-white rounded-md block w-min">Tambah</a>
    <div class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default">

        <table class="w-full text-left rtl:text-right text-body">
            <thead class="bg-neutral-secondary-soft border-b border-default">
                <tr>
                    <th scope="col" class="px-6 py-3 font-medium text-center">
                        Nama Siswa
                    </th>
                    <th scope="col" class="px-6 py-3 font-medium text-center">
                        Nama Sekolah
                    </th>
                    <th scope="col" class="px-6 py-3 font-medium text-center">
                        Kelas
                    </th>
                    <th scope="col" class="px-6 py-3 font-medium text-center">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd:bg-neutral-primary even:bg-neutral-secondary-soft border-b border-default">
                    <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap text-center">
                        Alandrian Surya Tantra
                    </th>
                    <td class="px-6 py-4 text-center">
                        Universitas Esa Unggul
                    </td>
                    <td class="px-6 py-4 text-center">
                        2
                    </td>
                    <td class="px-6 py-4 text-center space-x-4">
                        <a href="#" class="font-medium text-fg-brand hover:underline">Edit</a>
                        {{-- <a href="#" class="font-medium text-red-600 hover:underline" onclick="return confirm('Apakah Anda yakin ingin menghapus data siswa {{ $siswa->nama_siswa || 'N/A' }} ini?')">Hapus</a> --}}
                        <a href="#" class="font-medium text-red-600 hover:underline" onclick="return confirm('Apakah Anda yakin ingin menghapus data siswa N/A?')">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
