<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="pt-6 pb-2">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-10 flex justify-end">
            <a href="{{ route('product.create') }}">
                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Tambah Data Barang</button>
            </a>
        </div>
    </div>
    <div class="py-2">
        <div class="mx-auto border max-w-7xl sm:px-6 lg:px-10 shadow-lg sm:rounded-lg">

            <table class="w-full text-sm text-left text-gray-500 overflow-x-auto">
                <caption class="p-5 text-lg font-semibold text-left text-gray-900">
                    List Data Produk
                </caption>
                <thead class="text-xs text-gray-700 uppercase">
                    <tr>
                        <th scope="col" class="p-4 py-3">
                            Kode Produk
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Produk
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kategori
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Batch
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Stok
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr class="border-b hover:bg-gray-50">

                            <th scope="row" class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap">
                                {{ $product->product_code }}
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $product->product_name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $product->product_type }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->product_batch }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->product_status }}
                            </td>
                            <td class="px-6 py-4">
                                Rp {{ number_format($product->product_price) }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->product_stock }}
                            </td>
                            <td class="flex items-center px-6 py-4 space-x-3">
                                <a href="{{ route('product.show', [$product->id]) }}"
                                    class="font-medium mr-4 text-black hover:underline">Show</a>
                                <a href="{{ route('product.edit', [$product->id]) }}"
                                    class="font-medium mr-4 text-blue-600 hover:underline">Edit</a>
                                <form action="{{ route('product.destroy', [$product->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="font-medium ml-2 text-red-600 hover:underline">Remove</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

</x-app-layout>
