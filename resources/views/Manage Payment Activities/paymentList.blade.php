<!DOCTYPE html>
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">



                
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                Payment ID
                </th>
                <th scope="col" class="px-6 py-3">
                User ID
                </th>
                <th scope="col" class="px-6 py-3">
                Sales ID
                </th>
                <th scope="col" class="px-6 py-3">
                Product Name
                </th>
                <th scope="col" class="px-6 py-3">
                Quantity
                </th>
                <th scope="col" class="px-6 py-3">
                Price
                </th>
                <th scope="col" class="px-6 py-3">
                Total Price
                </th>
                <th scope="col" class="px-6 py-3">
                Pay Type
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($payments as $payment)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $loop->iteration }}
                </th>

                <td class="px-6 py-4">
                {{ $payment->Payment_ID }}
                </td>

                <td class="px-6 py-4">
                {{ $payment->User_ID}}
                </td>

                <td class="px-6 py-4">
                {{ $payment->Sales_ID}}
                </td>

                <td class="px-6 py-4">
                {{ $payment->Product_name}}
                </td>

                <td class="px-6 py-4">
                {{ $payment->Quantity }}
                </td>

                <td class="px-6 py-4">
                {{ $payment->price }}
                </td>

                <td class="px-6 py-4">
                {{ $payment->Total_Price }}
                </td>

                <td class="px-6 py-4">
                {{ $payment->payType }}
                </td>
                <td class="px-6 py-4 text-right">
                    <form action="{{ route('payment.destroy', ['Payment_ID' => $payment->Payment_ID])}}" method="POST">
                        @csrf
                        @method('delete')
                        <button>delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('Manage Payment Activities.paymentAdd') }}"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add
                Payment</a>
</div>
            </div>
        </div>
    </div>

</x-app-layout>