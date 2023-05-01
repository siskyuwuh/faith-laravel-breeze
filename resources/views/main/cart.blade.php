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
                <div class="bg-white relative border-4 border-gray-900 overflow-hidden">
                    <div
                        class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">

                        <div
                            class="w-full flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">

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
                                <tr class=" border-y-4 border-gray-900">
                                    <th scope="col" class="px-4 py-4">Product name</th>

                                    <th scope="col" class="px-4 py-3">Price</th>
                                    <th scope="col" class="px-4 py-3">Qty</th>

                                    <th scope="col" class="px-4 py-3">SubTotal</th>

                                    <th scope="col" class="px-4 py-3">

                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $total = 0;
                                @endphp
                                @if (session('cart'))

                                    @foreach (session('cart') as $id => $item)
                                        @php
                                            $total += $item['price'] * $item['quantity'];
                                        @endphp
                                        <tr class="border-b-4 border-b-gray-900 hover:bg-slate-50">

                                            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                                {{ $item['name'] }}</td>
                                            <td class="px-4 py-3">Rp{{ number_format($item['price']) }}</td>
                                            <td class="px-4 py-3 grid w-full grid-cols-3 gap-1">
                                                <form
                                                    action="{{ route('updateCart', ['operator' => 'kurang', 'id' => $id]) }}"
                                                    method="post" class="col-span-1">
                                                    @csrf
                                                    @method('put')
                                                    <button type="submit"
                                                        class="inline-flex items-center justify-center w-full py-2.5 px-1.5 text-gray-900 bg-white border-2 border-gray-900 hover:text-gray-200 hover:bg-gray-900">
                                                        -
                                                    </button>
                                                </form>
                                                <span class="col-span-1 inline-flex items-center justify-center">
                                                    {{ $item['quantity'] }}
                                                </span>
                                                <form
                                                    action="{{ route('updateCart', ['operator' => 'tambah', 'id' => $id]) }}"
                                                    method="post" class="col-span-1">
                                                    @csrf
                                                    @method('put')
                                                    <button type="submit"
                                                        class="inline-flex items-center justify-center w-full py-2.5 px-1.5 text-gray-900 bg-white border-2 border-gray-900 hover:text-gray-200 hover:bg-gray-900">
                                                        +
                                                    </button>
                                                </form>

                                            </td>
                                            <td class="px-4 py-3">
                                                Rp{{ number_format($item['price'] * $item['quantity']) }}</td>
                                            <td class="px-4 py-3">
                                                <form action="{{ route('remove.cart', [$id]) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="w-full bg-gray-900 text-gray-300" type="submit">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>

                                        </tr>
                                    @endforeach
                                    {{-- @else --}}
                                    {{-- <tr>
                                        <td colspan="5" class="p-4">
                                            <a href="{{ route('catalog') }}" class="w-full h-20 flex justify-center">
                                                <button
                                                    class="w-auto border-2 py-3 px-6 font-bold border-gray-900 active:bg-gray-900 active:text-gray-300">
                                                    Belanja dulu Bro
                                                </button>
                                            </a>
                                        </td>
                                    </tr> --}}
                                @endif

                            </tbody>
                        </table>
                    </div>

                    @if (!session('cart'))
                        <div
                            class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 py-12 px-4">

                            <div
                                class="w-full flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-center md:space-x-3 flex-shrink-0">
                                <div class="flex items-center space-x-3 w-full md:w-auto">
                                    <a href="{{ route('catalog') }}" class="w-auto h-20 flex justify-center">
                                        <button
                                            class="w-auto border-2 py-3 px-6 font-bold border-gray-900 active:bg-gray-900 active:text-gray-200">
                                            Belanja dulu Bro
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div
                        class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">

                        <div
                            class="w-full flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                            <div class="flex items-center space-x-3 w-full md:w-auto">
                                <span class="flex items-center font-semibold w-full md:w-24">Total</span>
                                <span class="flex items-center font-semibold justify-end w-full md:w-24">Rp
                                    {{ number_format($total) }}</span>
                            </div>
                        </div>
                    </div>

                    @if (session('cart'))
                        <div class="flex border-t-4 border-gray-900 flex-col md:flex-row items-center">


                            <div class="flex items-center w-full">

                                <a href="{{ route('catalog') }}"
                                    class="w-full flex items-center justify-center py-2 px-4 text-lg font-medium text-gray-900 focus:outline-none bg-white hover:bg-gray-50"
                                    role="button">

                                    Belanja Lagi
                                </a>


                                <a href="{{ route('checkout.form') }}"
                                    class="w-full flex items-center justify-center py-2 px-4 text-lg font-medium text-gray-100 focus:outline-none bg-gray-900 hover:bg-gray-800"
                                    role="button">Checkout
                                </a>

                            </div>
                        </div>
                        {{-- {{ session('cart')->links('vendor.pagination.flowbite') }} --}}
                    @endif
                </div>
            </div>
        </section>
    </div>


</x-app-layout>
