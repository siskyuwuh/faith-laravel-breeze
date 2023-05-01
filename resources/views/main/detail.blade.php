<x-app-layout>
    {{-- <div class="pt-6 pb-4 bg-white">
        <div class="mx-auto max-w-7xl h-10 max-h-10 sm:px-6 lg:px-10">
            <a href="{{ route('catalog') }}">
                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Icon description</span>
                </button>
            </a>
        </div>
    </div> --}}

    <div class="bg-white">
        <div class="mx-auto">
            {{-- <nav aria-label="Breadcrumb">
                <ol role="list"
                    class="mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                    <li>
                        <div class="flex items-center">
                            <a href="#" class="mr-2 text-sm font-medium text-gray-900">Clothing</a>
                            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor"
                                aria-hidden="true" class="h-5 w-4 text-gray-300">
                                <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                            </svg>
                        </div>
                    </li>

                    <li>
                        <div class="flex items-center">
                            <a href="#"
                                class="mr-2 text-sm font-medium text-gray-900">{{ $item->product_type }}</a>
                            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor"
                                aria-hidden="true" class="h-5 w-4 text-gray-300">
                                <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                            </svg>
                        </div>
                    </li>

                    <li class="text-sm">
                        <a href="#" aria-current="page"
                            class="font-medium text-gray-500 hover:text-gray-600">{{ $item->product_name }}</a>
                    </li>
                </ol>
            </nav> --}}

            <!-- Image gallery -->
            <div
                class="border-x-4 border-gray-900 py-8 mx-auto max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-x-8 lg:px-8">
                <div class="aspect-w-3 aspect-h-4 hidden overflow-hidden border-2 border-gray-900 lg:block">
                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-secondary-product-shot.jpg"
                        alt="Two each of gray, white, and black shirts laying flat."
                        class="h-full w-full object-cover object-center">
                </div>
                <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
                    <div class="aspect-w-3 aspect-h-2 overflow-hidden border-2 border-gray-900">
                        <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-tertiary-product-shot-01.jpg"
                            alt="Model wearing plain black basic tee." class="h-full w-full object-cover object-center">
                    </div>
                    <div class="aspect-w-3 aspect-h-2 overflow-hidden border-2 border-gray-900">
                        <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-tertiary-product-shot-02.jpg"
                            alt="Model wearing plain gray basic tee." class="h-full w-full object-cover object-center">
                    </div>
                </div>
                <div
                    class="aspect-w-4 aspect-h-5 sm:overflow-hidden sm:border-2 border-gray-900 lg:aspect-w-3 lg:aspect-h-4">
                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-featured-product-shot.jpg"
                        alt="Model wearing plain white basic tee." class="h-full w-full object-cover object-center">
                </div>
            </div>

            <!-- Product info -->
            <div
                class="border-x-4 border-t-4 border-gray-900 mx-auto max-w-2xl px-4 pt-10 pb-16 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pt-16 lg:pb-24">
                <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                    <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{ $item->product_name }}
                    </h1>
                </div>

                <!-- Options -->
                <div class="mt-4 lg:row-span-3 lg:mt-0">
                    <h2 class="sr-only">Product information</h2>
                    <p class="text-3xl tracking-tight text-gray-900">Rp{{ number_format($item->product_price) }}</p>

                    <!-- Reviews -->
                    <div class="mt-6">
                        <h3 class="sr-only">Reviews</h3>
                        <div class="flex items-center">
                            <div class="flex items-center">
                                <!-- Active: "text-gray-900", Default: "text-gray-200" -->
                                <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>

                                <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>

                                <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>

                                <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>

                                <svg class="text-gray-200 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <p class="sr-only">4 out of 5 stars</p>
                            <a href="#" class="ml-3 text-sm font-medium text-indigo-600 hover:text-indigo-500">117
                                reviews</a>
                        </div>
                    </div>

                    <form class="mt-10" action="{{ route('add.to.cart', [$item->slug]) }}" method="post">
                        @csrf
                        @method('POST')
                        {{-- <input type="hidden" name="slug" value="{{ $item->slug }}"> --}}
                        <!-- Colors -->
                        <div>
                            <h3 class="text-sm font-medium text-gray-900">Color</h3>

                            <fieldset class="mt-4 font-mono">
                                <legend class="sr-only">Choose a color</legend>
                                <div class="flex items-center space-x-3">
                                    <ul class="grid w-full gap-6 md:grid-cols-2">
                                        <li>
                                            <input type="radio" id="color-black" name="color" value="hitam"
                                                class="hidden peer" checked required>
                                            <label for="color-black"
                                                class="inline-flex items-center justify-between w-full p-2 text-gray-500 bg-white border-2 border-gray-200 cursor-pointer peer-checked:border-gray-900 peer-checked:bg-gray-900 peer-checked:text-white hover:border-gray-900  duration-200 hover:duration-200">
                                                <div class="flex justify-center w-full">
                                                    <div class="font-semibold">Hitam</div>
                                                    {{-- <div class="w-full">Good for small websites</div> --}}
                                                </div>
                                                {{-- <svg aria-hidden="true" class="w-6 h-6 ml-3" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"></path>
                                                </svg> --}}
                                            </label>
                                        </li>
                                    </ul>

                                </div>
                            </fieldset>
                        </div>

                        <!-- Sizes -->
                        <div class="mt-10">
                            <div class="flex items-center justify-between">
                                <h3 class="text-sm font-medium text-gray-900">Size</h3>
                                {{-- <a href="#"
                                    class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Size
                                    guide</a> --}}
                            </div>

                            <fieldset class="mt-4 font-mono">
                                <legend class="sr-only">Choose a size</legend>

                                {{-- <ul class="grid w-full grid-cols-5 gap-4 sm:grid-cols-5 lg:grid-cols-5">
                                    <li>
                                        <input type="radio" id="size-small" name="size" value="small"
                                            class="hidden peer" required>
                                        <label for="size-small"
                                            class="inline-flex items-center justify-between w-full py-2.5 px-1.5 text-gray-500 bg-white border-2 border-gray-200 cursor-pointer peer-checked:bg-gray-900 peer-checked:border-gray-900 peer-checked:text-white hover:border-gray-900">
                                            <div class="flex justify-center w-full">
                                                <div class="font-extrabold font-mono">S</div>

                                            </div>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="radio" id="size-medium" name="size" value="M"
                                            class="hidden peer" required>
                                        <label for="size-medium"
                                            class="inline-flex items-center justify-between w-full py-2.5 px-1.5 text-gray-500 bg-white border-2 border-gray-200 cursor-pointer peer-checked:bg-gray-900 peer-checked:border-gray-900 peer-checked:text-white hover:border-gray-900">
                                            <div class="flex justify-center w-full">
                                                <div class="font-extrabold font-mono">M</div>

                                            </div>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="radio" id="size-large" name="size" value="L"
                                            class="hidden peer" required>
                                        <label for="size-large"
                                            class="inline-flex items-center justify-between w-full py-2.5 px-1.5 text-gray-500 bg-white border-2 border-gray-200 cursor-pointer peer-checked:bg-gray-900 peer-checked:border-gray-900 peer-checked:text-white hover:border-gray-900">
                                            <div class="flex justify-center w-full">
                                                <div class="font-extrabold font-mono">L</div>

                                            </div>
                                        </label>
                                    </li>
                                </ul> --}}
                                <input type="text" name="size" id="size" required maxlength="3"
                                    minlength="1">

                            </fieldset>
                        </div>

                        <button type="submit"
                            class="mt-10 flex w-full items-center justify-center border-2 border-gray-900 bg-transparent py-3 px-8 text-base font-mono font-bold text-gray-900 hover:text-white hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-200 focus:ring-offset-2">Buy</button>
                    </form>
                </div>

                <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pt-6 lg:pb-16 lg:pr-8">
                    <!-- Description and details -->
                    <div>
                        <h3 class="sr-only">Description</h3>

                        <div class="space-y-6">
                            <p class="text-base text-gray-900">The Basic Tee 6-Pack allows you to fully express your
                                vibrant personality with three grayscale options. Feeling adventurous? Put on a heather
                                gray tee. Want to be a trendsetter? Try our exclusive colorway: &quot;Black&quot;. Need
                                to add an extra pop of color to your outfit? Our white tee has you covered.</p>
                        </div>
                    </div>

                    <div class="mt-10">
                        <h3 class="text-sm font-medium text-gray-900">Highlights</h3>

                        <div class="mt-4">
                            <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
                                <li class="text-gray-400"><span class="text-gray-600">Hand cut and sewn locally</span>
                                </li>

                                <li class="text-gray-400"><span class="text-gray-600">Dyed with our proprietary
                                        colors</span></li>

                                <li class="text-gray-400"><span class="text-gray-600">Pre-washed &amp;
                                        pre-shrunk</span></li>

                                <li class="text-gray-400"><span class="text-gray-600">Ultra-soft 100% cotton</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="mt-10">
                        <h2 class="text-sm font-medium text-gray-900">Details</h2>

                        <div class="mt-4 space-y-6">
                            <p class="text-sm text-gray-600">The 6-Pack includes two black, two white, and two heather
                                gray Basic Tees. Sign up for our subscription service and be the first to get new,
                                exciting colors, like our upcoming &quot;Charcoal Gray&quot; limited release.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
