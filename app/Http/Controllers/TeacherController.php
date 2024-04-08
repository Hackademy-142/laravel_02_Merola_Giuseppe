<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    
    public $arrayTeachers = [
        ['id' => 1, 'name' => 'Nicola', 'surname' => 'Gasparro', 'subject' => 'HTML, CSS, Bootstrap', 'img'=> 'https://picsum.photos/200'],
        ['id' => 2,'name' => 'Fabrizio', 'surname' => 'Biancaniello', 'subject' => 'Javascript', 'img'=> 'https://picsum.photos/201'],
        ['id' => 3,'name' => 'Emilia', 'surname' => 'Salvo', 'subject' => 'PHP', 'img'=> 'https://picsum.photos/202'],
        ['id' => 4,'name' => 'Annalisa', 'surname' => 'Caldarulo', 'subject' => 'PHP, Laravel', 'img'=> 'https://picsum.photos/203'],
        ['id' => 5,'name' => 'Luca', 'surname' => 'Venturi', 'subject' => 'Laravel', 'img'=> 'https://picsum.photos/204'],
    ];

    public function insegnanti(){
        return view('docenti', ['docenti' => $this->arrayTeachers]);
    }

    public function dettaglio($id){
        foreach ($this->arrayTeachers as $teacher){
            if ($id == $teacher['id']) {
                return view('docenti.dettaglioDocenti', ['docenti' => $teacher]);
            }
        }
    }
}
