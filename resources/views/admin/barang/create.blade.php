<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Data Barang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="post" action="{{route('barang.store')}}" enctype="multipart/form-data" class="mt-6 space-y-6">
                        @csrf
                        <div>
                            <x-input-label for="nama_barang" :value="__('Nama Barang')" />
                            <x-text-input id="nama_barang" name="nama_barang" type="text" class="mt-1 block w-full"
                                :value="old('nama_barang')" required autofocus autocomplete="nama_barang" />
                            <x-input-error class="mt-2" :messages="$errors->get('nama_barang')" />
                        </div>
                        <div>
                            <x-input-label for="id_ruangan" :value="__('Tempat Penyimpanan')" />
                            <select name="id_ruangan" required class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" id="">
                                <option value="">- Pilih Tempat -</option>
                                @foreach ($ruangan as $item)
                                    <option value="{{$item->id}}">{{$item->nama_ruangan}}</option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('id_user')" />
                        </div>
                        <div>
                            <x-input-label for="merk" :value="__('Merk')" />
                            <x-text-input id="merk" name="merk" type="text" class="mt-1 block w-full"
                                :value="old('merk')" required autofocus autocomplete="merk" />
                            <x-input-error class="mt-2" :messages="$errors->get('merk')" />
                        </div>
                        <div>
                            <x-input-label for="tanggal_pembelian" :value="__('Tanggal Pembelian')" />
                            <x-text-input id="tanggal_pembelian" name="tanggal_pembelian" type="date" class="mt-1 block w-full"
                                :value="old('tanggal_pembelian')" required autofocus autocomplete="tanggal_pembelian" />
                            <x-input-error class="mt-2" :messages="$errors->get('tanggal_pembelian')" />
                        </div>
                        <div>
                            <x-input-label for="kondisi" :value="__('Kondisi Barang')" />
                            <select name="kondisi" required class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" id="">
                                <option value="">- Pilih Kondisi -</option>
                                <option value="baik">Baik</option>
                                <option value="rusak">Rusak</option>
                                <option value="sedang diperbaiki">Sedang Diperbaiki</option>
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('kondisi')" />
                        </div>

                         <div>
                            <x-input-label for="gambar" :value="__('Gambar Barang')" />
                            <x-text-input id="gambar" name="gambar" type="file" accept="image/*" class="mt-1 block w-full p-6"
                                :value="old('gambar')" required autofocus autocomplete="gambar" />
                            <x-input-error class="mt-2" :messages="$errors->get('gambar')" />
                        </div>
                        

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>

                            @if (session('status'))
                                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
