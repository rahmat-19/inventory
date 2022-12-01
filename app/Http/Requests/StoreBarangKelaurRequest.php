<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBarangKelaurRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'category_id' => ['required'],
            'serialNumber' => ['required', 'min:4', 'unique:barang_masuks'],
            'device' => ['required'],
            'gambar' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'tanggalKeluar' => 'required|date',
            'keterangan' => 'nullable',
        ];
    }
}
