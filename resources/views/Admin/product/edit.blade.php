<x-app-layout>
    <div class="pt-6 pb-4 bg-white">
        <div class="mx-auto max-w-7xl h-10 max-h-10 sm:px-6 lg:px-10">
            <a href="{{ route('product.index') }}">
                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2">
                    <svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Icon description</span>
                </button>
            </a>
            {{-- </div> --}}
        </div>
    </div>
    <section class="bg-white">

        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-14">
            <h2 class="mb-4 text-xl font-bold text-gray-900">Update product</h2>
            {{-- @foreach ($products as $product) --}}
            <form action="{{ route('product.update', $product->slug) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">


                    <div class="col-span-full">


                        <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Picture Before
                            :</label>
                        <img class="block max-h-44 p-2.5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                            src="{{ asset('/storage/images/product/' . $product->product_batch . '/' . $product->image) }}">

                    </div>

                    <div class="col-span-full">


                        <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Upload file</label>
                        <input
                            class="block w-full p-2.5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                            aria-describedby="file_input_help" id="file_input" name="image" type="file"
                            value="{{ asset('/storage/images/product/' . $product->product_batch . '/' . $product->image) }}">
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG
                            or GIF (MAX. 800x400px).</p>


                    </div>

                    {{-- Nama Produk --}}

                    <div class="sm:col-span-2">
                        <label for="product_name" class="block mb-2 text-sm font-medium text-gray-900">Nama
                            Produk</label>
                        <input type="text" name="product_name" id="product_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            value="{{ old('product_name', $product->product_name) }}" required>
                    </div>

                    {{-- Kode Produk --}}

                    <div class="w-full">
                        <label for="product_code" class="block mb-2 text-sm font-medium text-gray-900">Kode
                            Produk</label>
                        <input type="text" name="product_code" id="product_code"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            value="{{ old('product_code', $product->product_code) }}" required>
                    </div>

                    {{-- Kategori --}}

                    <div>
                        <label for="product_type" class="block mb-2 text-sm font-medium text-gray-900">Kategori</label>
                        <select id="product_type" name="product_type"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                            <option value="T-Shirt">T-Shirt</option>
                            <option value="Sukajan">Sukajan</option>
                            <option value="Crowneck">Crowneck</option>
                            <option value="Hoodie">Hoodie Jacket</option>
                            <option value="Varsity">Varsity Jacket</option>
                        </select>
                        <p class=" text-red-500 text-sm">*pastikan tipe barang nya sama seperti sebelumnya</p>
                    </div>

                    {{-- Warna Produk --}}

                    <div class="w-full">
                        <label for="product_color" class="block mb-2 text-sm font-medium text-gray-900">Warna
                            Produk</label>
                        <input type="text" name="product_color" id="product_color"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            value="{{ old('product_color', $product->product_color) }}">
                    </div>

                    {{-- Batch Produk --}}

                    <div>
                        <label for="product_batch" class="block mb-2 text-sm font-medium text-gray-900">Kategori</label>
                        <select id="product_batch" name="product_batch"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 disabled:bg-gray-100"
                            disabled>
                            <option value="{{ $product->product_batch }}">{{ $product->product_batch }}</option>
                        </select>
                    </div>

                    {{-- Harga Barang --}}

                    <div class="w-full">
                        <label for="product_price" class="block mb-2 text-sm font-medium text-gray-900">Harga
                            Barang</label>
                        <input type="number" name="product_price" id="product_price"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            value="{{ old('product_price', $product->product_price) }}" placeholder="" required>
                    </div>

                    {{-- Ukuran Produk --}}

                    {{-- <div class="w-full">
                                    <label class="block mb-2 text-sm font-medium text-gray-900">Ukuran
                                        Produk</label>
                                    <div class="flex items-center mb-4">
                                        <input id="product_size_s" type="radio" name="product_size" value="S"
                                            class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="product_size_s"
                                            class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            S
                                        </label>
                                    </div>
                                    <div class="flex items-center mb-4">
                                        <input id="product_size_m" type="radio" name="product_size" value="M"
                                            class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="product_size_m"
                                            class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            M
                                        </label>
                                    </div>
                                    <div class="flex items-center mb-4">
                                        <input id="product_size_s" type="radio" name="product_size" value="S"
                                            class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="product_size_s"
                                            class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            S
                                        </label>
                                    </div>
                                    <div class="flex items-center mb-4">
                                        <input id="product_size_s" type="radio" name="product_size" value="S"
                                            class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="product_size_s"
                                            class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            S
                                        </label>
                                    </div>
                                    <div class="flex items-center mb-4">
                                        <input id="product_size_s" type="radio" name="product_size" value="S"
                                            class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="product_size_s"
                                            class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            S
                                        </label>
                                    </div>
                                </div> --}}

                    {{-- Stok Produk --}}

                    <div>
                        <label for="product_stock" class="block mb-2 text-sm font-medium text-gray-900">Stok
                            Barang</label>
                        <input type="number" name="product_stock" id="product_stock"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            value="{{ old('product_stock', $product->product_stock) }}" placeholder="" required>
                    </div>

                    {{-- Deskripsi Produk --}}

                    <div class="sm:col-span-2">
                        <label for="product_desc" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi
                            Produk</label>
                        <textarea id="product_desc" rows="8" name="product_desc"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500"
                            placeholder="Write a product description here...">{{ old('product_desc', $product->product_desc) }}</textarea>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <button type="submit"
                        class="text-white w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Update
                    </button>
                </div>
            </form>
            {{-- @endforeach --}}
        </div>
    </section>
</x-app-layout>
