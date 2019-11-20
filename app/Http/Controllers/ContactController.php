<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class ContactController extends Controller
{
    public function newContact(){
        $newContact=new Contact;
        $newContact->name='hjk';
        $newContact->email='rgh';

        $newContact->msg='rez';


        $newContact->save();

    }
    public function listContact(){
        $contact= Contact::all();
        dd($contact);
    }
    public function index(){

    }
    public function create(){

    }
    public function store(){

    }
    public function edit(){

    }
    public function update(){

    }
    public function destroy(){

    }
}
