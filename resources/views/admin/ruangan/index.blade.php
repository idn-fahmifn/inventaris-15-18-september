<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-red-600 rounded-lg shadow-md p-6 flex justify-between items-center mb-8 dark:bg-slate-800">
                <h1 class="text-2xl font-bold text-white">Ruangan</h1>
            </div>

            

            <div class="bg-white dark:bg-slate-800 overflow-hidden shadow-md sm:rounded-lg p-6">

                <div class="flex justify-between my-4">
                    <h2 class="text-xl font-bold mb-4 text-gray-800 dark:text-slate-200">Data Ruangan</h2>
                    <a href="" class="text-sm text-white p-2 rounded-md">Tambah Ruangan</a>
                </div>

                <div class="hidden md:grid grid-cols-12 gap-4 text-sm text-gray-500 font-semibold my-2 px-4">
                    <div class="col-span-4">Nama Ruangan</div>
                    <div class="col-span-2 text-center">Nama Petugas</div>
                </div>

                <div class="space-y-4">

                    @forelse ($data as $item)
                        <a href=""
                            class="grid grid-cols-1 md:grid-cols-12 gap-4 items-center bg-gray-50 dark:bg-slate-700 hover:bg-gray-100 dark:hover:bg-slate-600 p-4 rounded-lg">
                            <div class="col-span-1 md:col-span-2 flex items-center">
                                <span class="font-semibold text-gray-900 dark:text-gray-100">{{$item->nama_ruangan}}</span>
                            </div>
                            <div class="col-span-1 md:col-span-6 text-center text-gray-700 dark:text-gray-100">{{$item->petugas->name}}</div>
                        </a>
                    @empty
                    @endforelse



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
