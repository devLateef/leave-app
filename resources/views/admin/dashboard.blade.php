    {{-- <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot>
 --}}

    @extends('admin.layouts.layout')

    @section('content')
        <div class="container">
            <table class="table-auto text-left border-collapse border border-slate-400 w-full">
                <thead class="bg-sky-300">
                    <tr>
                        <th class="border border-slate-400 p-4">Song</th>
                        <th class="border border-slate-400 p-4">Artist</th>
                        <th class="border border-slate-400 p-4">Year</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-gray-300">
                        <td class="border border-slate-300 p-4">The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                        <td class="border border-slate-300 p-4">Malcolm Lockyer</td>
                        <td class="border border-slate-300 p-4">1961</td>
                    </tr>
                    <tr class="hover:bg-gray-300">
                        <td class="border border-slate-300 p-4">Witchy Woman</td>
                        <td class="border border-slate-300 p-4">The Eagles</td>
                        <td class="border border-slate-300 p-4">1972</td>
                    </tr>
                    <tr class="hover:bg-gray-300">
                        <td class="border border-slate-300 p-4">Shining Star</td>
                        <td class="border border-slate-300 p-4">Earth, Wind, and Fire</td>
                        <td class="border border-slate-300 p-4">1975</td>
                    </tr>
                </tbody>
            </table>
        </div>
    @endsection
