<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\ContactModel;

class ContactController extends Controller
{   
    //Example how to validate data via function
    // public function submit(Request $req){
    //     $validation = $req->validate([
    //         'subject' => 'required|min:5|max:50',
    //         'message' => 'required|min:15|max:500'
    //     ]);
    // }
    public function submit(ContactRequest $req){
        $contact = new ContactModel(); //initiate model
        $contact->name = $req->input('name');//adding value from Name input to DB
        $contact->email = $req->input('email');//adding value from email input to DB
        $contact->subject = $req->input('subject');//adding value from Subject input to DB
        $contact->message = $req->input('message');//adding value from Message input to DB

        $contact->save();//Saving all data into DB
        return redirect()->route('home')->with('success', 'The message was added succesfully');//Redirecting from Contact page to main page and creating session with name success
    }
    public function allData(){
        $contact = new ContactModel();//initiate Model
        return view('messages', ['data' => $contact->orderBy('id', 'desc')->get()]);//provide data to HTML view
    }
    public function showPosts($id){
        $contact = new ContactModel();//initiate Model
        return view('single', ['data' => $contact->find($id)]);//provide data to HTML view
    }
    public function postUpdate($id){
        $contact = new ContactModel();//initiate Model
        return view('update-post', ['data' => $contact->find($id)]);//provide data to HTML view
    }
    public function postUpdateSubmit($id, ContactRequest $req){
        $contact = ContactModel::find($id); //initiate model
        $contact->name = $req->input('name');//adding value from Name input to DB
        $contact->email = $req->input('email');//adding value from email input to DB
        $contact->subject = $req->input('subject');//adding value from Subject input to DB
        $contact->message = $req->input('message');//adding value from Message input to DB

        $contact->save();//Saving all data into DB
        return redirect()->route('posts', $id)->with('success', 'The message was updated succesfully');//Redirecting from Contact page to main page and creating session with name success
    }

    public function postDelete($id){
        ContactModel::find($id)->delete();
        return redirect()->route('messages')->with('success', 'The message was deleted succesfully');//
    }
}
