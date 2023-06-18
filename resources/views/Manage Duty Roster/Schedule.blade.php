<!DOCTYPE html>
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">



                
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th class="px-6 py-3"> id</th>
                <th class="px-6 py-3"> date</th>
                <th class="px-6 py-3"> time</th>
                <th class="px-6 py-3"> action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($duties as $duty)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $loop->iteration }}
                </th>
                <td class="px-6 py-4">
                {{ $duty->Duty_Roster_ID }}
                </td>
               
                <td class="px-6 py-4">
                {{ $duty->Date }}
                </td>
                <td class="px-6 py-4">
                {{ $duty->Time }}
                </td>
                
                <td class="px-6 py-4 text-right">
                    <button>Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('Generate Sales Report.reportAdd') }}">Add Report</a>
</div>
            </div>
        </div>
    </div>

</x-app-layout>
