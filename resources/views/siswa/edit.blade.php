@extends('components.index')

@section('content')
    <h1 class="font-semibold text-3xl">Edit Data Siswa({{ $siswa->nama_siswa }})</h1>
    <form action="{{ route('siswa.update', $siswa->id) }}" method="post" class="mt-5 space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label for="nama_siswa" class="block mb-2.5 font-medium text-heading">Nama Siswa</label>
            <input type="text" id="nama_siswa" name="nama_siswa"
                class="bg-neutral-secondary-medium border border-default-medium text-heading rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                placeholder="Masukkan nama siswa" value="{{ old('nama_siswa', $siswa->nama_siswa) }}" required />
        </div>
        <div>
            <label for="nama_sekolah" class="block mb-2.5 font-medium text-heading">Nama Sekolah Siswa</label>
            <input type="text" id="nama_sekolah" name="nama_sekolah"
                class="bg-neutral-secondary-medium border border-default-medium text-heading rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                placeholder="Masukkan nama sekolah siswa" value="{{ old('nama_sekolah', $siswa->nama_sekolah) }}" required />
        </div>
        <div>
            <label for="kelas_siswa" class="block mb-2.5 font-medium text-heading">Kelas Siswa</label>
            <input type="text" id="kelas_siswa" name="kelas_siswa"
                class="bg-neutral-secondary-medium border border-default-medium text-heading rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                placeholder="Masukkan kelas siswa" value="{{ old('kelas_siswa', $siswa->kelas_siswa) }}" required />
        </div>
        <div class="mt-5">
            <button type="submit"
                class="text-white bg-blue-700 rounded-base px-5 py-2.5 text-center hover:cursor-pointer">Simpan</button>
        </div>
    </form>
@endsection
