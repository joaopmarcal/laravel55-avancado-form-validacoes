<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    const MARITAL_STATUS= [
      1 => 'Solteiro',
      1 => 'Casado',
      1 => 'Divorciado'
    ];

    protected $fillable = [
      'name',
      'document_number',
      'email',
      'phone',
      'defaulter',
      'date_birth',
      'sex',
      'marital_status',
      'physical_disability',
      'company_name',
      'client_type'
    ];
}
