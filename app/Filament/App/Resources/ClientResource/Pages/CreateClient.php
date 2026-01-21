<?php
namespace App\Filament\App\Resources\ClientResource\Pages;
use Illuminate\Validation\ValidationException;
use App\Filament\App\Resources\ClientResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Facades\Filament;

class CreateClient extends CreateRecord
{
    protected static string $resource = ClientResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
 {
        $companyId=auth()->user()?->company_id;
        if(! $companyId){
            throw ValidationException::withMessages([
                'company_id' => 'your user is not linked to a company. Set company_id for your user first.',
            ]);
        }

        $data['company_id'] = $companyId;

        return $data;
 }
}
