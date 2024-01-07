<?php

namespace App\Http\Requests;

use App\Constants\Constants;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Http\Exceptions\HttpResponseException;

class GetStoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id' => 'required|integer'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $response = response()->json([
            'status' => Constants::API_STATUS_FAILURE,
            'message' => 'バリデーションエラー',
            'errors' => $validator->errors()
        ],  Response::HTTP_BAD_REQUEST);

        throw new HttpResponseException($response);
    }
}
