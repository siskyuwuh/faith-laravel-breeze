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
            // 'product_size' => 'required|max:3',
            'product_desc' => 'nullable|string',
            'product_stock' => 'required|integer|numeric'
        ];
    }

    public function attributes()
    {
        return [
            'product_code' => 'Kode Produk',
            'product_name' => 'Nama Produk',
            'product_price' => 'Harga Produk',
            'product_desc' => 'Deskripsi Produk',
        ];
    }

    public function messages()
    {
        return [
            'product_code.required' => ':attributes harus Diisi!',
            'product_name.required' => 'Nama Produk harus Diisi!',
            'product_type.required' => 'Tipe Produk harus Diisi!',
            'product_batch.required' => 'Batch/Series Produk Harus Diisi',
            'product_price.required' => 'Harga Produk harus Diisi!',
            // 'product_size.required' => 'Ukuran Produk harus Diisi',
            'product_stock.required' => 'Stok Produk harus Diisi!',
        ];
    }
}
