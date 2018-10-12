<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    protected $primaryKey = 'profession_id';
    protected $fillable = ['profession_name', 'profession_active'];
    private $rules;
    public $message = [
        'profession_name.required' => 'A profissão é obrigatoria',
        'profession_name.unique' => 'Profissão ja existente',
        'profession_name.max' => 'Deve conter no maximo 50 caracteres',
    ];
    public function Rules($type = 'insert')
    {
        switch ($type) {
            case 'insert':
                return $this->rules = [
                    'profession_name' => 'bail|required|unique:professions,profession_name|max:50'
                ];
            case 'update':
                return $this->rules = [
                    'profession_name' => 'bail|required|max:50'
                ];
        }
    
    }
}
