@extends('layouts.app')

@section('content')
<div class="overflow-x-auto rounded-2xl shadow-md">
    <div class="container mx-auto flex items-center justify-between px-6 pb-4">
        <a href="{{ route('menus.create') }}"
            class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-lg shadow transition hover:cursor-pointer">
            + Tambah Menu
        </a>
    </div>

    <table class="w-full text-sm text-left text-gray-300 rounded-md">
        <thead class="bg-gray-800 text-gray-200 uppercase text-xs">
            <tr>
                <th class="px-6 py-3 text-center">No.</th>
                <th class="px-6 py-3">Nama</th>
                <th class="px-6 py-3">Jenis</th>
                <th class="px-6 py-3">Harga</th>
                <th class="px-6 py-3">Deskripsi</th>
                <th class="px-6 py-3">Gambar</th>
                <th class="px-6 py-3 text-center">Aksi</th>
            </tr>
        </thead>
        <tbody class="bg-gray-900 divide-y divide-gray-700">
            @foreach($menus as $index => $menu)
            <tr>
                <td class="px-6 py-4 text-center">{{ $index+1 }}</td>
                <td class="px-6 py-4 font-semibold text-white">{{ $menu->nama_menu }}</td>
                <td class="px-6 py-4">{{ $menu->jenis_menu }}</td>
                <td class="px-6 py-4 text-green-400 font-semibold">
                    Rp {{ number_format($menu->price,0,',','.') }}
                </td>
                <td class="px-6 py-4">{{ $menu->description }}</td>
                <td class="px-6 py-4">
                    @if($menu->image_url)
                        <img src="{{ asset('storage/'.$menu->image_url) }}"
                             alt="{{ $menu->nama_menu }}"
                             class="w-16 h-16 rounded-lg object-cover">
                    @endif
                </td>
                <td class="px-6 py-4 text-center">
                    <div class="flex justify-center gap-2">
                        <a href="{{ route('menus.edit', $menu->id) }}"
                           class="px-3 py-1 bg-yellow-500 hover:bg-yellow-600 text-black font-bold rounded-lg transition hover:cursor-pointer">
                           Edit
                        </a>
                        <form action="{{ route('menus.destroy', $menu->id) }}" method="POST" onsubmit="return confirm('Yakin hapus menu ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="px-3 py-1 bg-red-600 hover:bg-red-700 text-white font-bold rounded-lg transition hover:cursor-pointer">
                                Hapus
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
