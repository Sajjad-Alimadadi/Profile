<?php

namespace App\Containers\ProfileSection\SiteContainer\UI\WEB\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

class CreateAdminBlogRequest extends ParentRequest
{
    /**
     * Define which Roles and/or Permissions has access to this request.
     */
    protected array $access = [
//        'permissions' => '',
//        'roles' => '',
    ];

    /**
     * Id's that needs decoding before applying the validation rules.
     */
    protected array $decode = [
        // 'id',
    ];

    /**
     * Defining the URL parameters (e.g, `/user/{id}`) allows applying
     * validation rules on them and allows accessing them like request data.
     */
    protected array $urlParameters = [
        // 'id',
    ];


    public function rules(): array
    {
        return [
            '_token'     => 'required',
            'cat_id'     => 'required|integer|exists:cats,id',
            'subject'    => 'required|string',
            'text'       => 'required|string',
            'cover'      => 'required|mimes:jpg,jpeg,png|max:10240',
            'is_protect' => 'nullable',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            '_token'     => $this->post('_token'),
            'cat_id'     => $this->post('cat_id'),
            'subject'    => $this->post('subject'),
            'text'       => $this->post('text'),
            'cover'      => $this->post('cover'),
            'is_protect' => $this->post('is_protect'),
        ]);
    }

}