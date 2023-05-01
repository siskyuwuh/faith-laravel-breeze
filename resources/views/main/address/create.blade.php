 <x-app-layout>
     <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pt-6 lg:pb-16 lg:pr-8">
         <form action="{{ route('address.store') }}" method="POST">
             @csrf
             @method('POST')
             <div class="overflow-hidden shadow sm:rounded-md">
                 <div class="px-4 py-5 sm:p-6">
                     <div class="grid grid-cols-6 gap-6">

                         {{-- Shipping Info --}}


                         <h3 class="col-span-6 text-base font-semibold leading-6 text-gray-900">Personal
                             Information</h3>

                         {{-- Nama Depan --}}

                         <div class="col-span-6 sm:col-span-3">
                             <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Nama
                                 Depan</label>
                             <input type="text" name="firstname" id="first-name" autocomplete="first-name"
                                 class="mt-2 py-3 block w-full border border-gray-300 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-gray-900 focus:border-gray-900 sm:text-sm sm:leading-6">
                         </div>

                         {{-- Nama Belakang --}}

                         <div class="col-span-6 sm:col-span-3">
                             <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Nama
                                 Belakang</label>
                             <input type="text" name="lastname" id="last-name" autocomplete="last-name"
                                 class="mt-2 py-3 block w-full border border-gray-300 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-gray-900 focus:border-gray-900 sm:text-sm sm:leading-6">
                         </div>

                         {{-- Email --}}

                         <div class="col-span-6 sm:col-span-4">
                             <label for="email-address" class="block text-sm font-medium leading-6 text-gray-900">Alamat
                                 Email</label>
                             <input type="text" name="email" id="email-address" autocomplete="email"
                                 class="mt-2 py-3 block w-full border border-gray-300 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-gray-900 focus:border-gray-900 sm:text-sm sm:leading-6">
                         </div>

                         {{-- Negara --}}

                         <div class="col-span-6 sm:col-span-2">
                             <label for="country"
                                 class="block text-sm font-medium leading-6 text-gray-900">Negara</label>
                             <select disabled id="country" name="country" autocomplete="country-name"
                                 class="mt-2 py-3 block w-full border border-gray-300 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-gray-900 focus:border-gray-900 sm:text-sm sm:leading-6">
                                 <option selected value="Indonesia">Indonesia</option>
                                 <option>Malaysia</option>
                                 <option>Singapore</option>
                             </select>
                         </div>

                         {{-- Alamat --}}

                         <div class="col-span-6">
                             <label for="street-address"
                                 class="block text-sm font-medium leading-6 text-gray-900">Alamat</label>
                             <input type="text" name="address" id="street-address" autocomplete="street-address"
                                 class="mt-2 py-3 block w-full border border-gray-300 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-gray-900 focus:border-gray-900 sm:text-sm sm:leading-6">
                         </div>

                         {{-- Kota --}}

                         <div class="col-span-6 sm:col-span-2">
                             <label for="city"
                                 class="block text-sm font-medium leading-6 text-gray-900">Kota</label>
                             <input type="text" name="city" id="city" autocomplete="city"
                                 class="mt-2 py-3 block w-full border border-gray-300 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-gray-900 focus:border-gray-900 sm:text-sm sm:leading-6">
                         </div>

                         {{-- Provinsi --}}

                         <div class="col-span-6 sm:col-span-2">
                             <label for="region"
                                 class="block text-sm font-medium leading-6 text-gray-900">Provinsi</label>
                             <input type="text" name="region" id="region" autocomplete="region"
                                 class="mt-2 py-3 block w-full border border-gray-300 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-gray-900 focus:border-gray-900 sm:text-sm sm:leading-6">
                         </div>

                         {{-- Kode Pos --}}

                         <div class="col-span-6 sm:col-span-2">
                             <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900">Kode Pos
                             </label>
                             <input type="text" name="postal_code" id="postal-code" autocomplete="postal_code"
                                 class="mt-2 py-3 block w-full border border-gray-300 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-gray-900 focus:border-gray-900 sm:text-sm sm:leading-6">
                         </div>

                     </div>
                 </div>
                 <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                     <button type="submit"
                         class="inline-flex justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
                 </div>
             </div>
         </form>
     </div>
 </x-app-layout>
