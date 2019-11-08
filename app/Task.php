<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Task extends Model
{
    const STATUS = [
        1 => ['label' => '未着手', 'badge' => 'badge-danger'],
        2 => ['label' => '進行中', 'badge' => 'badge-primary'],
        3 => ['label' => '完了', 'badge' => 'badge-secondary'],
    ];
    public function getStatusLabelAttribute()
    {
        $status = $this->attributes['status'];
        if (!isset(self::STATUS[$status])) {
            return '';
        }
        return self::STATUS[$status]['label'];
    }
    public function getFormattedDueDateAttribute()
    {
        return Carbon::createFromFormat('Y-m-d', $this->attributes['due_date'])->format('Y/m/d');
    }
    public function getStatusBadgeAttribute()
    {
        $status = $this->attributes['status'];
        if(!isset(self::STATUS[$status]['badge'])){
            return '';
        }
        return self::STATUS[$status]['badge'];
    }
}
