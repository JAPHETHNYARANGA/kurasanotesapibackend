<?php

namespace App\Http\Controllers;

use App\Models\notesModel;
use Illuminate\Http\Request;

class notesController extends Controller
{
    public function addNote(Request $request){
        $note = new notesModel();

        $note->phoneNumber = $request->phoneNumber;
        $note->firstName = $request->firstName;
        $note->lastName = $request->lastName;
        $note->email = $request ->email;

        $res = $note->save();
        if ($res) {
            return response(
                [
                'success' =>true,
                'message'=>'note added successfully',
                
                
            ],200);
        } else {
            return response(
                [
                'success' =>false,
                'message'=>'noteadd failed',
            ],201);
        }
    }

    public function getNotes(){
        $notes = notesModel::all();

        return response(
            [
            'success' =>true,
            'message'=>'Data Fetch success',
            'notes' => $notes,
        ],200);
    }

    public function getSpecificNote($id){
        $note = notesModel::find($id);
        return response([
            'note'=> $note
        ]);
    }

    public function deleteNote($id){
        $notes = notesModel::find($id);
        $res = $notes->delete();

        if($res){
            return response(
                [
                'success' =>true,
                'message'=>'listing deleted successfully',
            ],200);
        } else {
            return response(
                [
                'success' =>false,
                'message'=>'listing delete failed',
            ],201);
        }

        
    }

    public function updateNote(Request $request,$id){
        $notes = notesModel::find($id);

        $notes->id;
        $notes->firstName = $request->firstName;
        $notes->lastName = $request->lastName;
        $notes->email = $request->email;
        $notes->phoneNumber = $request->phoneNumber;
        $res = $notes->save();

        if($res){
            return response([
                'success'=>true,
                'message' => 'note updated successfully',
            ], 200);
        }else{
            return response([
                'success'=>false,
                'message' => 'note failed to update',
            ], 201);
        }
        }
}