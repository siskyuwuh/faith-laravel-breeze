<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'product_code' => 'required|string|max:7',
            'product_name' => 'required|string|max:255',
            'product_type' => 'required|string',
            'product_color' => 'string|max:10|nullable',
            'product_batch' => 'required|string|max:255',
            'product_price' => 'required|integer|numeric',
            'product_size' => 'required|max:3',
            'product_desc' => 'nullable|string',
            'product_stock' => 'required|integer|numeric'
        ];
    }

    public function attributes()
    {
        return [
            'product_code' => 'Masukkan Kode Produk',
            'product_name' => 'Masukkan Nama Produk',
            'product_price' => '*contoh 1000000 = 1,000,000',
            'product_desc' => 'Masukkan Deskripsi Produk',
        ];
    }

    public function messages()
    {
        return [
            'product_code.required' => 'Kode Produk harus Diisi!',
            'product_name.required' => 'Nama Produk harus Diisi!',
            'product_type.required' => 'Tipe Produk harus Diisi!',
            'product_batch.required' => 'Batch/Series Produk Harus Diisi',
            'product_price.required' => 'Harga Produk harus Diisi!',
            'product_size.required' => 'Ukuran Produk harus Diisi',
            'product_stock.required' => 'Stok Produk harus Diisi!',
        ];
    }
}
