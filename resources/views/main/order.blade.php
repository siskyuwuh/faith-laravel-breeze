<x-app-layout>


    <div class="border-x-4 border-gray-900 container py-16 mx-auto">
        <div
            class="border-y-4 border-gray-900 max-w-2xl px-4 pt-10 pb-16 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pt-16 lg:pb-24">


            {{-- <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                <div class="px-4 sm:px-0">
                    <h3 class="text-base font-semibold leading-6 text-gray-900">Personal Information</h3>
                    <p class="mt-1 text-sm text-gray-600">Use a permanent address where you can receive mail.</p>
                </div>
            </div> --}}

            <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pt-6 lg:pb-16 lg:pr-8">
                <form action="#" method="POST">
                    <div class="overflow-hidden shadow sm:rounded-md">
                        <div class="px-4 py-5 sm:p-6">
                            <div class="grid grid-cols-6 gap-6">

                                {{-- Shipping Info --}}


                                <h3 class="col-span-6 text-base font-semibold leading-6 text-gray-900">Personal
                                    Information</h3>

                                <a href="{{ route('address.create') }}"
                                    class="w-full cols-span-6 grid grid-col-3 bg-slate-50 border-4 border-gray-900">
                                    <div class="border-r-4 p-2">
                                        +
                                    </div>
                                    <div class="p-2 items-center justify-content">
                                        Data Pemgiriman Belum ada, silahkn buat terlebih dahulu
                                    </div>
                                </a>

                                {{-- Payment Method --}}

                                <h3 class="col-span-6 text-base font-semibold leading-6 text-gray-900">Payment Method
                                </h3>
                                <ul class="col-span-6 grid gap-6 md:grid-cols-3">

                                    {{-- Indomart --}}
                                    <li>

                                        <input type="radio" id="indomart" name="payment-method" value="indomart"
                                            class="hidden peer" required>
                                        <label for="indomart"
                                            class="inline-flex items-center justify-between w-full h-5/6 p-5 text-gray-600 bg-white border-2 border-gray-600 cursor-pointer peer-checked:bg-black peer-checked:border-gray-900 peer-checked:text-gray-200 hover:text-gray-700 hover:bg-gray-200">
                                            <svg fill="none" class="w-12 h-12 mx-3" stroke="currentColor"
                                                stroke-width="1.5" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z">
                                                </path>
                                            </svg>
                                            <div class="block w-full pl-2">
                                                <div class="w-full text-lg font-semibold">Indomart</div>
                                                <div class="w-full text-sm">dengan tambahan biaya admin</div>
                                            </div>
                                        </label>
                                    </li>

                                    {{-- COD --}}
                                    <li>

                                        <input type="radio" id="cash-on-delivery" name="payment-method" value="COD"
                                            class="hidden peer" required>
                                        <label for="cash-on-delivery"
                                            class="inline-flex items-center justify-between w-full h-5/6 p-5 text-gray-600 bg-white border-2 border-gray-600 cursor-pointer peer-checked:bg-black peer-checked:border-gray-900 peer-checked:text-gray-200 hover:text-gray-700 hover:bg-gray-200">
                                            <svg fill="none" class="w-12 h-12 mx-3" stroke="currentColor"
                                                stroke-width="1.5" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z">
                                                </path>
                                            </svg>
                                            <div class="block w-full pl-2">
                                                <div class="w-full text-lg font-semibold">COD</div>
                                                <div class="w-full text-sm">Cash Or Duel</div>
                                            </div>
                                        </label>
                                    </li>
                                </ul>


                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                            <button type="submit"
                                class="inline-flex justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Options -->
            <div class="mt-4 lg:row-span-3 lg:mt-0">
                <h2 class="sr-only">Product information</h2>
                @if (session('cart'))

                    @foreach (session('cart') as $id => $items)
                        <div class="bg-slate-50 border-2 border-gray-900 p-6 my-2">
                            <p class="text-3xl tracking-tight text-gray-900">{{ $items['name'] }}</p>
                            <p class="text-3xl tracking-tight text-gray-900">Rp{{ number_format($items['price']) }}</p>
                        </div>
                    @endforeach
                @endif
            </div>


        </div>
    </div>


</x-app-layout>
