<?php

namespace App\Containers\ProfileSection\SiteContainer\UI\WEB\Requests;

use App\Containers\LabSection\VisitContainer\Models\Visit;
use App\Containers\ProfileSection\SiteContainer\Models\Blog;
use App\Ship\Parents\Requests\Request as ParentRequest;

class AdminBlogAttachRequest extends ParentRequest
{
    /**
     * Define which Roles and/or Permissions has access to this request.
     */
    protected array $access = [
//        'permissions' => '',
//        'roles'       => '',
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

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        $id = $this->route('id');
        if (Blog::query()->where('id', $id)->first() === null) {
            exit('');
        }
        return [
            'id' => 'required|int|exists:blogs,id',
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
            'id' => $this->route('id'),
        ]);
    }
}
