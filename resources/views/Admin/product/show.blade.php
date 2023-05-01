<x-app-layout>
    <div class="pt-6 pb-4 bg-white">
        <div class="mx-auto max-w-7xl h-10 max-h-10 sm:px-6 lg:px-10">
            <a href="{{ route('product.index') }}">
                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z">
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Icon description</span>
                </button>
            </a>
        </div>
    </div>
    <section class="bg-white">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-14">
            <h2 class="mb-4 text-xl font-bold text-gray-900">Detail Produk</h2>

            <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">

                <div class="col-span-full">


                    <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Picture :</label>
                    <img class="block max-h-44 p-0 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                        src="{{ asset('/storage/images/product/' . $product->product_batch . '/' . $product->image) }}">

                </div>

                <div class="sm:col-span-2">
                    <label for="product_name" class="block mb-2 text-sm font-medium text-gray-900">Nama
                        Produk</label>
                    <input type="text" name="product_name" id="product_name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                        value="{{ $product->product_name }}" disabled>
                </div>
                <div class="w-full">
                    <label for="product_code" class="block mb-2 text-sm font-medium text-gray-900">Kode
                        Produk</label>
                    <input type="text" name="product_code" id="product_code"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                        value="{{ $product->product_code }}" disabled>
                </div>

                <div>
                    <label for="product_type" class="block mb-2 text-sm font-medium text-gray-900">Kategori</label>
                    <input type="text" name="product_type" id="product_type"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                        value="{{ $product->product_type }}" disabled>
                </div>

                <div class="w-full">
                    <label for="product_color" class="block mb-2 text-sm font-medium text-gray-900">Warna
                        Produk</label>
                    <input type="text" name="product_color" id="product_color"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                        value="{{ $product->product_color }}" disabled>
                </div>

                <div>
                    <label for="product_batch" class="block mb-2 text-sm font-medium text-gray-900">Kategori</label>
                    <input type="text" name="product_batch" id="product_batch"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                        value="{{ $product->product_batch }}" disabled>
                </div>
                <div class="w-full">
                    <label for="product_price" class="block mb-2 text-sm font-medium text-gray-900">Harga
                        Barang</label>
                    <input type="text" name="product_price" id="product_price"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                        value="{{ number_format($product->product_price) }}" disabled>
                </div>
                {{-- <div class="w-full">
                                <label class="block mb-2 text-sm font-medium text-gray-900">Ukuran Produk</label>
                                <div class="flex items-center mb-4">
                                    <p>{{ $product->product_size }}</p>
                                </div>
                            </div> --}}

                <div>
                    <label for="product_stock" class="block mb-2 text-sm font-medium text-gray-900">Stok
                        Barang</label>
                    <input type="number" name="product_stock" id="product_stock"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                        value="{{ $product->product_stock }}" placeholder="" disabled>
                </div>
                <div class="sm:col-span-2">
                    <label for="product_desc" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi
                        Produk</label>
                    <textarea id="product_desc" rows="8"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500"
                        placeholder="Write a product product_desc here..." disabled>{{ $product->product_desc }}</textarea>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                @if ($product->product_status === 1)
                    <button
                        class="text-white w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none ">
                        Stok Aman
                    </button>
                @else
                    <button
                        class="text-white w-full bg-[#b91c1c] hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none ">
                        Stok Habis
                    </button>
                @endif

            </div>

        </div>
    </section>
</x-app-layout>
