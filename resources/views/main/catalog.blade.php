<x-app-layout>
    <div class="container mx-auto">


        <div class="flex font-mono items-center justify-center py-4 md:py-8 flex-wrap">
            <button type="button"
                class="text-white border-2 border-gray-900 bg-gray-900 hover:bg-gray-800 hover:border-gray-800 focus:ring-2 focus:outline-none focus:ring-gray-400 text-base px-5 py-2.5 text-center mr-3 mb-3">All
                categories</button>
            <button type="button"
                class="text-gray-900 border-2 border-gray-900 bg-white hover:bg-gray-900 hover:text-white focus:ring-2 focus:outline-none focus:ring-gray-400 text-base px-5 py-2.5 text-center mr-3 mb-3">Shoes</button>
            <button type="button"
                class="text-gray-900 border-2 border-gray-900 bg-white hover:bg-gray-900 hover:text-white focus:ring-2 focus:outline-none focus:ring-gray-400 text-base px-5 py-2.5 text-center mr-3 mb-3">Bags</button>
            <button type="button"
                class="text-gray-900 border-2 border-gray-900 bg-white hover:bg-gray-900 hover:text-white focus:ring-2 focus:outline-none focus:ring-gray-400 text-base px-5 py-2.5 text-center mr-3 mb-3">Electronics</button>
            <button type="button"
                class="text-gray-900 border-2 border-gray-900 bg-white hover:bg-gray-900 hover:text-white focus:ring-2 focus:outline-none focus:ring-gray-400 text-base px-5 py-2.5 text-center mr-3 mb-3">Gaming</button>
        </div>

        {{-- Shop List  --}}
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 font-mono">

            @foreach ($items as $item)
                {{-- Card E-Commerce --}}

                <div
                    class="flex-none w-full mb-10 relative z-0 before:absolute before:-z-10 hover:before:transition hover:before:translate-x-2 hover:before:translate-y-2 hover:before:duration-300 before:w-full before:h-full before:bg-gray-900">
                    <div class="w-full max-w-sm bg-white border-2 border-black">
                        <a href="{{ route('detail.product', ['category' => $item->product_type, 'item' => $item->slug]) }}"
                            class="">
                            <div class="px-8 pt-8 pb-4">
                                <img class="border-2 border-black"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg"
                                    alt="product image" />
                            </div>
                            <div class="px-8 pb-5">
                                {{-- <a href="#"> --}}
                                <h5 class="text-xl font-semibold tracking-tight text-gray-900">
                                    {{ $item->product_name }}
                                </h5>
                                {{-- </a> --}}

                                {{-- Star Rate  --}}

                                <div class="flex items-center mt-2 mb-3">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-900 stroke-gray-900"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>First star</title>
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-900 stroke-gray-900"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>Second star</title>
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-900 stroke-gray-900"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>Third star</title>
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-900 stroke-gray-900"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>Fourth star</title>
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-900 stroke-gray-900"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>Fifth star</title>
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    <span
                                        class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
                                </div>



                                <div class="flex items-center justify-between">
                                    <span
                                        class="text-3xl font-bold text-gray-900">Rp{{ number_format($item->product_price) }}</span>
                                    {{-- <a href="{{ route('detail.product', ['category' => $item->product_type, 'item' => $item->slug]) }}"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                            Beli
                                        </a> --}}
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            @endforeach
        </div>

    </div>
</x-app-layout>
