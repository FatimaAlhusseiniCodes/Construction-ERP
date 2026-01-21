<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{

    public function category (): BelongsTo
    {
        return $this->belongsTo(FinanceCaategory::class, 'finance_category_id');
    }

     public function project (): BelongsTo
     {
        return $this->belongsTo(Project::class, 'project_id');
    }

     public function account (): BelongsTo
     {
        return $this->belongsTo(Account::class, 'account_id');
    }

     public function vendor (): BelongsTo
     {
        return $this->belongsTo(vendor::class, 'vendor_id');
    }

     public function invoice (): BelongsTo{
        return $this->belongsTo(Invoice::class, 'invoice_id');
    }

     public function company (): BelongsTo{
        return $this->belongsTo(Company::class, 'company_id');
    }

}
