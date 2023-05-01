<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $title }}
        </h2>
    </x-slot>

    <div class="py-2">

        <section class=" bg-inherit p-3 sm:p-5">
            <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
                <!-- Start coding here -->
                <div class="bg-white relative shadow-md sm:rounded-lg"> {{-- overflow-hidden --}}
                    <div
                        class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                        <div class="w-full md:w-1/2">
                            {{-- <form class="flex items-center">
                                <label for="simple-search" class="sr-only">Search</label>
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                            fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <input type="text" id="simple-search"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2"
                                        placeholder="Search" required="">
                                </div>
                            </form> --}}
                        </div>
                        <div
                            class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                            <a href="{{ route('product.create') }}">
                                <button type="button"
                                    class="flex items-center justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">
                                    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                    </svg>
                                    Add product
                                </button>
                            </a>
                            <div class="flex items-center space-x-3 w-full md:w-auto">

                                {{-- Action Dropdown --}}

                                {{-- Action Dropdown Button On Disabled --}}

                                <button disabled id="actionsDropdownButton" data-dropdown-toggle="actionsDropdown"
                                    class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200"
                                    type="button">
                                    <svg class="-ml-1 mr-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                    </svg>
                                    Actions
                                </button>
                                <div id="actionsDropdown"
                                    class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow">
                                    <ul class="py-1 text-sm text-gray-700" aria-labelledby="actionsDropdownButton">
                                        <li>
                                            <a href="#" class="block py-2 px-4 hover:bg-gray-100">Mass
                                                Edit</a>
                                        </li>
                                    </ul>
                                    <div class="py-1">
                                        <a href="#"
                                            class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Delete
                                            all</a>
                                    </div>
                                </div>

                                {{-- Filter Dropdown Button --}}

                                {{-- Filter Dropdown Button on Disabled --}}

                                <button disabled id="filterDropdownButton" data-dropdown-toggle="filterDropdown"
                                    class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200"
                                    type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                        class="h-4 w-4 mr-2 text-gray-400" viewbox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Filter
                                    <svg class="-mr-1 ml-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                    </svg>
                                </button>
                                <div id="filterDropdown" class="z-10 hidden w-48 p-3 bg-white rounded-lg shadow">
                                    <h6 class="mb-3 text-sm font-medium text-gray-900">Choose brand
                                    </h6>
                                    <ul class="space-y-2 text-sm" aria-labelledby="filterDropdownButton">
                                        <li class="flex items-center">
                                            <input id="apple" type="checkbox" value=""
                                                class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-blue-600 focus:ring-blue-500">
                                            <label for="apple" class="ml-2 text-sm font-medium text-gray-900">Nama
                                                Category
                                                (jumlah category)</label>
                                        </li>
                                    </ul>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="overflow-x-auto">

                        <table class="w-full text-sm text-left text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-4 py-3">Product code</th>
                                    <th scope="col" class="px-4 py-3">Product name</th>
                                    <th scope="col" class="px-4 py-3">Category</th>
                                    <th scope="col" class="px-4 py-3">Batch</th>
                                    <th scope="col" class="px-4 py-3">Amount</th>
                                    <th scope="col" class="px-4 py-3">Price</th>
                                    <th scope="col" class="px-4 py-3">Status</th>
                                    <th scope="col" class="px-4 py-3">
                                        <span class="sr-only">Actions</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr class="border-b hover:bg-slate-100">
                                        <th scope="row"
                                            class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                            {{ $product->product_code }}</th>
                                        <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                            {{ $product->product_name }}</td>
                                        <td class="px-4 py-3">{{ $product->product_type }}</td>
                                        <td class="px-4 py-3">{{ $product->product_batch }}</td>
                                        <td class="px-4 py-3">{{ $product->product_stock }}</td>
                                        <td class="px-4 py-3">Rp{{ number_format($product->product_price) }}</td>
                                        <td class="px-4 py-3">
                                            @if ($product->product_status === 1)
                                                <span
                                                    class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded border border-blue-400">in
                                                    Amount</span>
                                            @else
                                                <span
                                                    class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded border border-red-400">Out
                                                    of Amount</span>
                                            @endif
                                        </td>
                                        <td class="px-4 py-3">
                                            <div class=" flex items-center justify-end">
                                                <button id="{{ $product->name }}-dropdown-button"
                                                    data-dropdown-toggle="{{ $product->name }}-dropdown"
                                                    class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none"
                                                    type="button">
                                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                        viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                                    </svg>
                                                </button>
                                                <div id="{{ $product->name }}-dropdown"
                                                    class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow">
                                                    <ul class="py-1 text-sm text-gray-700"
                                                        aria-labelledby="{{ $product->product_name }}-dropdown-button">
                                                        <li>
                                                            <a href="{{ route('product.show', [$product->slug]) }}"
                                                                class="block py-2 px-4 hover:bg-gray-100">Show</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('product.edit', [$product->slug]) }}"
                                                                class="block py-2 px-4 hover:bg-gray-100">Edit</a>
                                                        </li>
                                                    </ul>
                                                    <div class="py-1">
                                                        <span href="{{-- route('product.destroy',[$product->slug]) --}}"
                                                            class="block py-2 px-4 text-sm text-gray-700 hover:text-white hover:bg-red-700">Delete</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    {{ $products->links('vendor.pagination.flowbite') }}
                </div>
            </div>
        </section>
    </div>


</x-app-layout>
