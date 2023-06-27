<?php

namespace App\Models;

use App\Base\SluggableModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hewan extends SluggableModel
{
    use HasFactory;
    public function getCategoryAttribute($value)
    {
        $categoryLabels = [
            1 => 'KAMBING',
            2 => 'SAPI',
            3 => 'DOMBA',
            4 => 'KERBAU',
        ];

        return $categoryLabels[$value] ?? 'Tidak Diketahui';
    }
}
