<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">



                
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                    Product name
                </th>
                <th scope="col" class="px-6 py-3">
                    quantity
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Notes
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($inventories as $inventory)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $loop->iteration }}
                </th>
                <td class="px-6 py-4">
                    {{ $inventory->product_Name}}
                </td>
                <td class="px-6 py-4">
                    {{ $inventory->quantity}}
                </td>
                <td class="px-6 py-4">
                   RM {{ number_format($inventory->price, 2) }}
                </td>
                <td class="px-6 py-4">
                    {{ $inventory->notes}}
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="{{ route('inventory.edit', $inventory->inventory_id) }}"
                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                        Edit
                    </a>

                    <form method="POST" action="{{ route('inventory.destroy',$inventory->inventory_id) }}">
                        @csrf
                        @method('delete')

                        <x-primary-button>{{ __('Delete') }}</x-primary-button>

                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('inventory.create') }}"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add
                Task</a>
</div>



            </div>
        </div>
    </div>

</x-app-layout>