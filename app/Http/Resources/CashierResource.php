<?php
// File: `app/Http/Resources/CashierResource.php`

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CashierResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
