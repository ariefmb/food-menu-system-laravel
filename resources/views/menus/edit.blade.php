@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto">
    <h2 class="text-2xl font-bold mb-6 text-center text-gray-800 dark:text-gray-100">Edit Menu</h2>

    <form action="{{ route('menus.update', $menu->id) }}" method="POST" enctype="multipart/form-data"
          class="space-y-5 bg-white dark:bg-gray-800 p-8 shadow-lg rounded-2xl border border-gray-200 dark:border-gray-700">
        @csrf
        @method('PUT')

        <div>
            <label class="block font-medium text-gray-700 dark:text-gray-300 mb-1">Nama Menu</label>
            <input type="text" name="nama_menu" value="{{ $menu->nama_menu }}"
                   class="w-full border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100
                          focus:ring-2 focus:ring-blue-500 focus:border-blue-500 rounded-lg p-3"
                   required>
        </div>

        <div>
            <label class="block font-medium text-gray-700 dark:text-gray-300 mb-1">Jenis Menu</label>
            <input type="text" name="jenis_menu" value="{{ $menu->jenis_menu }}"
                   class="w-full border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100
                          focus:ring-2 focus:ring-blue-500 focus:border-blue-500 rounded-lg p-3"
                   required>
        </div>

        <div>
            <label class="block font-medium text-gray-700 dark:text-gray-300 mb-1">Harga</label>
            <input type="number" step="0.01" name="price" value="{{ $menu->price }}"
                   class="w-full border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100
                          focus:ring-2 focus:ring-blue-500 focus:border-blue-500 rounded-lg p-3"
                   required>
        </div>

        <div>
            <label class="block font-medium text-gray-700 dark:text-gray-300 mb-1">
                Upload Gambar <span class="text-sm text-gray-500">(kosongkan jika tidak diganti)</span>
            </label>
            <input type="file" name="image_url"
                   class="w-full text-gray-700 dark:text-gray-200 file:mr-4 file:py-2 file:px-4
                          file:rounded-lg file:border-0 file:text-sm file:font-semibold
                          file:bg-blue-600 file:text-white hover:file:bg-blue-700
                          cursor-pointer">

            @if($menu->image_url)
                <div class="mt-3">
                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-1">Gambar saat ini:</p>
                    <img src="{{ asset('storage/'.$menu->image_url) }}"
                         alt="{{ $menu->nama_menu }}"
                         class="w-28 h-28 rounded-lg shadow object-cover border border-gray-200 dark:border-gray-600">
                </div>
            @endif
        </div>

        <div>
            <label class="block font-medium text-gray-700 dark:text-gray-300 mb-1">Deskripsi</label>
            <textarea name="description" rows="3"
                      class="w-full border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100
                             focus:ring-2 focus:ring-blue-500 focus:border-blue-500 rounded-lg p-3"
                      placeholder="Tuliskan deskripsi singkat menu...">{{ $menu->description }}</textarea>
        </div>

        <div class="flex justify-between items-center">
            <a href="{{ route('menus.index') }}"
               class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition hover:cursor-pointer">
                Kembali
            </a>
            <button type="submit"
                    class="px-5 py-2 bg-blue-600 text-white font-medium rounded-lg shadow-md
                           hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition hover:cursor-pointer">
                Update
            </button>
        </div>
    </form>
</div>
@endsection
