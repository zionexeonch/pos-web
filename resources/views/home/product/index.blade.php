@extends('template.layout-main')
@section('content')
    <div class="h-auto w-full rounded-lg bg-white">

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
                <thead class="border-b-2 text-xs uppercase text-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="bg-gray-50 py-3 px-6 dark:bg-gray-800">
                            Product name
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Color
                        </th>
                        <th scope="col" class="bg-gray-50 py-3 px-6 dark:bg-gray-800">
                            Category
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Price
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                        <th scope="row"
                            class="whitespace-nowrap bg-gray-50 py-4 px-6 font-medium text-gray-900 dark:bg-gray-800 dark:text-white">
                            Apple MacBook Pro 17"
                        </th>
                        <td class="py-4 px-6">
                            Sliver
                        </td>
                        <td class="bg-gray-50 py-4 px-6 dark:bg-gray-800">
                            Laptop
                        </td>
                        <td class="py-4 px-6">
                            $2999
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
@endsection
