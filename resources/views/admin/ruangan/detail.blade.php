<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-slate-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 md:p-8">
                    {{-- Grid utama untuk 2 kolom --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">

                        <div class="flex flex-col justify-center">
                            <div>
                                <h1 class="text-3xl lg:text-4xl font-bold text-gray-900 dark:text-gray-100">
                                    {{ $data->nama_ruangan }}
                                </h1>
                                <p class="text-md text-gray-900 dark:text-gray-400 mt-2">
                                    Penanggung Jawab : <span class="font-bold">{{ $data->petugas->name }}</span>
                                </p>
                                <p class="text-md text-gray-900 dark:text-gray-400 mt-2">
                                    Ukuran :

                                    @switch($data->ukuran)
                                        @case('kecil')
                                            <span class="text-blue-500">Ruangan Kecil</span>
                                        @break

                                        @case('sedang')
                                            <span class="text-yellow-500">Ruangan Sedang</span>
                                        @break

                                        @default
                                            <span class="text-green-500">Ruangan Besar</span>
                                    @endswitch
                                </p>
                                <p class="text-md text-gray-900 dark:text-gray-400 mt-2">
                                    Deskripsi : <span class="font-bold">{{ $data->deskripsi }}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-4">
            <div class="bg-white dark:bg-slate-800 overflow-hidden shadow-sm sm:rounded-lg p-4">

            </div>

        </div>
    </div>
</x-app-layout>
