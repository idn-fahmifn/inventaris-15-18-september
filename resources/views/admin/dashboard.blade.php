<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-red-600 rounded-lg shadow-md p-6 flex justify-between items-center mb-8 dark:bg-slate-800">
                <h1 class="text-2xl font-bold text-white">Dashboard Admin</h1>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                <div class="bg-white dark:bg-slate-800 dark:text-white p-6 rounded-lg shadow-md">
                    <h3 class="text-gray-600">Data Petugas Inventaris</h3>
                    <p class="text-3xl font-bold mt-2">18</p>
                </div>

                <div class="bg-white dark:bg-slate-800 dark:text-white p-6 rounded-lg shadow-md">
                    <h3 class="text-gray-600">Data Ruangan</h3>
                    <p class="text-3xl font-bold mt-2">132</p>
                </div>

                <div class="bg-white dark:bg-slate-800 dark:text-white p-6 rounded-lg shadow-md">
                    <h3 class="text-gray-600">Data Barang</h3>
                    <p class="text-3xl font-bold mt-2">12</p>
                </div>


            </div>

            <div class="bg-white dark:bg-slate-800 overflow-hidden shadow-md sm:rounded-lg p-6">

                <div class="flex justify-between my-4">
                    <h2 class="text-xl font-bold mb-4 text-gray-800 dark:text-slate-200">Laporan Anda</h2>
                    <a href="" class="text-sm text-white p-2 rounded-md">Tambah Petugas</a>
                </div>

                <div class="hidden md:grid grid-cols-12 gap-4 text-sm text-gray-500 font-semibold my-2 px-4">
                    <div class="col-span-4">Nama Petugas</div>
                    <div class="col-span-2 text-center">Email Petugas</div>
                    
                </div>

                <div class="space-y-4">
                    <a href=""
                        class="grid grid-cols-1 md:grid-cols-12 gap-4 items-center bg-gray-50 dark:bg-slate-700 hover:bg-gray-100 dark:hover:bg-slate-600 p-4 rounded-lg">
                        <div class="col-span-1 md:col-span-2 flex items-center">
                            <span class="font-semibold text-gray-900 dark:text-gray-100">Mobil Hilang</span>
                        </div>
                        <div class="col-span-1 md:col-span-6 text-center text-gray-700 dark:text-gray-100">27 Juli 2025
                        </div>

                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
