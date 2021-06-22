@extends('layouts.ustadz')

@section('content')

<div class="w-full flex flex-col h-screen overflow-y-hidden">
    <div class="overflow-x-hidden">
        <main class="pt-6 px-6">
            <h1 class="text-3xl text-black pb-2 mt-2">Input Nilai</h1>
            <div class="bg-white rounded-lg shadow-md p-8 my-8">
                <div class="flex space-x-4 items-center pb-8">
                    <div class="flex-none w-36">
                        <a class="self-center">Kelas</a>
                    </div>
                    <div class="flex-none md:w-1/5">
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center text-grey-darker">
                                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </div>
                            <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="grid-state">
                                <option>Awaliyah</option>
                                <option>1 Wustho</option>
                                <option>2 Wustho</option>
                                <option>1 Ulya</option>
                                <option>2 Ulya</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="flex space-x-4 items-center pb-8">
                    <div class="flex-none w-36">
                        <a class="self-center">Mapel</a>
                    </div>
                    <div class="flex-none md:w-1/5">
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center text-grey-darker">
                                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </div>
                            <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="grid-state">
                                <option>Tafsir</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="flex space-x-4 items-center pb-8">
                    <div class="flex-none w-36">
                        <a class="self-center">Semester</a>
                    </div>
                    <div class="flex-none md:w-1/5">
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center text-grey-darker">
                                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </div>
                            <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="grid-state">
                                <option>Ganjil</option>
                                <option>Genap</option>
                            </select>
                        </div>
                    </div>
                    <div class="object-left text-center text-white text-base">
                        <button class="bg-blue-600 hover:bg-blue-800 rounded shadow-lg py-3 px-8" href="#">Lihat</button>
                    </div>
                </div>
                <p class="text-xl py-8 flex items-center">
                    Inputkan Nilai Ke Santri
                </p>
                <div class="bg-white overflow-auto pb-8">
                    <table class="table-auto bg-white">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">No</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">NIS</th>
                                <th class="text-left w-1/6 py-3 px-4 uppercase font-semibold text-sm">Nama
                                    Santri</th>
                                <th class="text-left w-1/6 py-3 px-4 uppercase font-semibold text-sm">Nilai
                                    Hasil Belajar</th>
                                <th class="text-left w-1/6 py-3 px-4 uppercase font-semibold text-sm">Absensi
                                    Asrama</th>
                                <th class="text-left w-1/6 py-3 px-4 uppercase font-semibold text-sm">Absensi
                                    MDNU</th>
                                <th class="text-left w-1/6 py-3 px-4 uppercase font-semibold text-sm">Total</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            <tr>
                                <td class="text-left py-3 px-4">1</td>
                                <td class="text-left py-3 px-4">0001</td>
                                <td class="text-left py-3 px-4"><a>Si Jhon</a></td>
                                <td class="text-left py-3 px-4">
                                    <div class="relative z-0 w-full">
                                        <input type="text" name="name" placeholder="" required class="pt-3 block w-1/2 bg-transparent border-b appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-400" />
                                        <span class="text-sm text-red-600 hidden" id="error">This field is
                                            required</span>
                                    </div>
                                </td>
                                <td class="text-left py-3 px-4">
                                    <div class="relative z-0 w-full">
                                        <input type="text" name="name" placeholder="(%)" required class="pt-3 block w-1/2 bg-transparent border-b appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-400" />
                                        <span class="text-sm text-red-600 hidden" id="error">This field is
                                            required</span>
                                    </div>
                                </td>
                                <td class="text-left py-3 px-4">
                                    <div class="relative z-0 w-full">
                                        <input type="text" name="name" placeholder="(%)" required class="pt-3 block w-1/2 bg-transparent border-b appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-400" />
                                        <span class="text-sm text-red-600 hidden" id="error">This field is
                                            required</span>
                                    </div>
                                </td>
                                <td class="text-left py-3 px-4"><a>-</a></td>
                            </tr>
                            <tr class="bg-gray-200">
                                <td class="text-left py-3 px-4">2</td>
                                <td class="text-left py-3 px-4">0002</td>
                                <td class="text-left py-3 px-4"><a>Si Jhon</a></td>
                                <td class="text-left py-3 px-4">
                                    <div class="relative z-0 w-full">
                                        <input type="text" name="name" placeholder="" required class="pt-3 block w-1/2 bg-transparent border-b appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-400" />
                                        <span class="text-sm text-red-600 hidden" id="error">This field is
                                            required</span>
                                    </div>
                                </td>
                                <td class="text-left py-3 px-4">
                                    <div class="relative z-0 w-full">
                                        <input type="text" name="name" placeholder="(%)" required class="pt-3 block w-1/2 bg-transparent border-b appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-400" />
                                        <span class="text-sm text-red-600 hidden" id="error">This field is
                                            required</span>
                                    </div>
                                </td>
                                <td class="text-left py-3 px-4">
                                    <div class="relative z-0 w-full">
                                        <input type="text" name="name" placeholder="(%)" required class="pt-3 block w-1/2 bg-transparent border-b appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-400" />
                                        <span class="text-sm text-red-600 hidden" id="error">This field is
                                            required</span>
                                    </div>
                                </td>
                                <td class="text-left py-3 px-4"><a>-</a></td>
                            </tr>
                            <tr>
                                <td class="text-left py-3 px-4">3</td>
                                <td class="text-left py-3 px-4">0003</td>
                                <td class="text-left py-3 px-4"><a>Si Jhon</a></td>
                                <td class="text-left py-3 px-4">
                                    <div class="relative z-0 w-full">
                                        <input type="text" name="name" placeholder="" required class="pt-3 block w-1/2 bg-transparent border-b appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-400" />
                                        <span class="text-sm text-red-600 hidden" id="error">This field is
                                            required</span>
                                    </div>
                                </td>
                                <td class="text-left py-3 px-4">
                                    <div class="relative z-0 w-full">
                                        <input type="text" name="name" placeholder="(%)" required class="pt-3 block w-1/2 bg-transparent border-b appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-400" />
                                        <span class="text-sm text-red-600 hidden" id="error">This field is
                                            required</span>
                                    </div>
                                </td>
                                <td class="text-left py-3 px-4">
                                    <div class="relative z-0 w-full">
                                        <input type="text" name="name" placeholder="(%)" required class="pt-3 block w-1/2 bg-transparent border-b appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-400" />
                                        <span class="text-sm text-red-600 hidden" id="error">This field is
                                            required</span>
                                    </div>
                                </td>
                                <td class="text-left py-3 px-4"><a>-</a></td>
                            </tr>
                            <tr class="bg-gray-200">
                                <td class="text-left py-3 px-4">4</td>
                                <td class="text-left py-3 px-4">0004</td>
                                <td class="text-left py-3 px-4"><a>Si Jhon</a></td>
                                <td class="text-left py-3 px-4">
                                    <div class="relative z-0 w-full">
                                        <input type="text" name="name" placeholder="" required class="pt-3 block w-1/2 bg-transparent border-b appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-400" />
                                        <span class="text-sm text-red-600 hidden" id="error">This field is
                                            required</span>
                                    </div>
                                </td>
                                <td class="text-left py-3 px-4">
                                    <div class="relative z-0 w-full">
                                        <input type="text" name="name" placeholder="(%)" required class="pt-3 block w-1/2 bg-transparent border-b appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-400" />
                                        <span class="text-sm text-red-600 hidden" id="error">This field is
                                            required</span>
                                    </div>
                                </td>
                                <td class="text-left py-3 px-4">
                                    <div class="relative z-0 w-full">
                                        <input type="text" name="name" placeholder="(%)" required class="pt-3 block w-1/2 bg-transparent border-b appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-400" />
                                        <span class="text-sm text-red-600 hidden" id="error">This field is
                                            required</span>
                                    </div>
                                </td>
                                <td class="text-left py-3 px-4"><a>-</a></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="bg-white overflow-auto py-8">
                        <table class="table-auto bg-white py-4">
                            <tbody class="text-gray-700">
                                <tr class="bg-gray-200">
                                    <td class="text-left font-semibold py-3 px-4"><a>Keterangan</a></td>
                                    <td class="text-left w-1/2 py-3 px-4"><a>: Naik Kelas/Tidak Naik Kelas/-</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-xl flex items-center py-8">
                        Catatan Untuk Santri
                    </p>
                    <div class="bg-white overflow-auto pb-8">
                        <table class="table-auto bg-white">
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">No</th>
                                    <th class="text-left w-1/5 py-3 px-4 uppercase font-semibold text-sm">Nama
                                        Santri</th>
                                    <th class="text-left w-full py-3 px-4 uppercase font-semibold text-sm">
                                        Catatan</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                <tr>
                                    <td class="text-left py-3 px-4">1</td>
                                    <td class="text-left py-3 px-4"><a>Si Jhon</a></td>
                                    <td class="text-left py-3 px-4">
                                        <div class="relative z-0 w-full">
                                            <input type="text" name="name" placeholder="" required class="pt-3 block w-full bg-transparent border-b appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-400" />
                                            <span class="text-sm text-red-600 hidden" id="error">This field is
                                                required</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="bg-gray-200">
                                    <td class="text-left py-3 px-4">2</td>
                                    <td class="text-left py-3 px-4"><a>Si Jhon</a></td>
                                    <td class="text-left py-3 px-4">
                                        <div class="relative z-0 w-full">
                                            <input type="text" name="name" placeholder="" required class="pt-3 block w-full bg-transparent border-b appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-400" />
                                            <span class="text-sm text-red-600 hidden" id="error">This field is
                                                required</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-left py-3 px-4">3</td>
                                    <td class="text-left py-3 px-4"><a>Si Jhon</a></td>
                                    <td class="text-left py-3 px-4">
                                        <div class="relative z-0 w-full">
                                            <input type="text" name="name" placeholder="" required class="pt-3 block w-full bg-transparent border-b appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-400" />
                                            <span class="text-sm text-red-600 hidden" id="error">This field is
                                                required</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="bg-gray-200">
                                    <td class="text-left py-3 px-4">4</td>
                                    <td class="text-left py-3 px-4"><a>Si Jhon</a></td>
                                    <td class="text-left py-3 px-4">
                                        <div class="relative z-0 w-full">
                                            <input type="text" name="name" placeholder="" required class="pt-3 block w-full bg-transparent border-b appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-400" />
                                            <span class="text-sm text-red-600 hidden" id="error">This field is
                                                required</span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="flex space-x-6 p-4">
                    <button class="border border-teal-500 text-teal-500 block rounded-sm py-3 px-8 flex items-center hover:bg-red-700 hover:text-white">
                        <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                        Cancel
                    </button>
                    <button class="border border-teal-500 bg-blue-600 hover:bg-blue-800 text-white block rounded-sm py-3 px-8 ml-2 flex items-center">
                        Save
                    </button>
                </div>
            </div>
        </main>
    </div>
</div>

@endsection