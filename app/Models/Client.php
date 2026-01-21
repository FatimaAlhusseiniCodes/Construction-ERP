<?php

namespace App\Models;

use App\Enums\CompanySettingsEnum;
use Illuminate\Support\Facades\Auth; // Added for Auth facade support
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use NunoMazer\Samehouse\BelongsToTenants;
use Parallax\FilamentComments\Models\Traits\HasFilamentComments;

class Client extends Model
{
    use BelongsToTenants,
        HasFactory,
        HasFilamentComments;
    protected $guarded = ['id'];

   public function labelName(): Attribute
{
    return Attribute::make(
        get: fn () => auth()->check()
            ? (auth()->user()->company
                ->settings()->get(CompanySettingsEnum::CLIENT_PREFER_TRADENAME->value)
                    ? $this->tradename
                    : $this->name)
            : $this->name,
    );
}


    public function contracts(): HasMany
    {
        return $this->hasMany(Contract::class);
    }
}
