<?php
/**
* ContactLabel.php - Model file
*
* This file is part of the Contact component.
*-----------------------------------------------------------------------------*/

namespace App\Yantrana\Components\Contact\Models;

use App\Yantrana\Base\BaseModel;

class ContactLabelModel extends BaseModel
{
    /**
     * @var  string $table - The database table used by the model.
     */
    protected $table = "contact_labels";

    /**
     * @var  array $casts - The attributes that should be casted to native types.
     */
    protected $casts = [
    ];

    /**
     * @var  array $fillable - The attributes that are mass assignable.
     */
    protected $fillable = [
    ];
}