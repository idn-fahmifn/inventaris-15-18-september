<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Data Ruangan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="post" action="{{route('ruangan.store')}}" class="mt-6 space-y-6">
                        @csrf
                        <div>
                            <x-input-label for="nama_ruangan" :value="__('Nama Ruangan')" />
                            <x-text-input id="nama_ruangan" name="nama_ruangan" type="text" class="mt-1 block w-full"
                                :value="old('nama_ruangan')" required autofocus autocomplete="nama_ruangan" />
                            <x-input-error class="mt-2" :messages="$errors->get('nama_ruangan')" />
                        </div>

                        <div>
                            <x-input-label for="id_user" :value="__('Penanggung Jawab Ruangan')" />
                            <select name="id_user" required class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" id="">
                                <option value="">- Pilih Penanggung Jawab -</option>
                                @foreach ($petugas as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('id_user')" />
                        </div>

                        <div>
                            <x-input-label for="ukuran" :value="__('Ukuran Ruangan')" />
                            <select name="ukuran" required class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" id="">
                                <option value="">- Pilih Ukuran -</option>
                                <option value="kecil">Kecil</option>
                                <option value="sedang">Sedang</option>
                                <option value="besar">Besar</option>
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('ukuran')" />
                        </div>

                        <div>
                            <x-input-label for="name" :value="__('Deskripsi Ruangan')" />
                            <textarea name="deskripsi" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"></textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
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
