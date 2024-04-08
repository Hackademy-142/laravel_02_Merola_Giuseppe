<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    
    public $arrayStudents = [
        ['id' => 1, 'name' => 'Giuseppe', 'surname' => 'Merola', 'img'=> 'https://picsum.photos/200'],
        ['id' => 2, 'name' => 'Giovanni', 'surname' => 'Sugamiele', 'img'=> 'https://picsum.photos/201'],
        ['id' => 3, 'name' => 'Flavia', 'surname' => 'Vignanelli', 'img'=> 'https://picsum.photos/202'],
        ['id' => 4, 'name' => 'Emanuele', 'surname' => 'Pelliccia', 'img'=> 'https://picsum.photos/203'],
        ['id' => 5, 'name' => 'Karim', 'surname' => 'Ben Abid', 'img'=> 'https://picsum.photos/204'],
    ];

    public function studenti(){
        return view('studenti', ['studenti' => $this->arrayStudents]);
    }
    
    public function dettaglio($id)
    {
        foreach ($this->arrayStudents as $student) {
            if ($id == $student['id']) {
                return view('studenti.dettaglioStudenti', ['studenti' => $student]);
            }
        }
    }
}
