<?php

namespace App\Filament\App\Resources\InvoiceItemResource\Pages;

use App\Filament\App\Resources\InvoiceItemResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateInvoiceItem extends CreateRecord
{
    protected static string $resource = InvoiceItemResource::class;
}
