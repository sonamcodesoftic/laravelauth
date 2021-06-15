<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class usertable extends Controller
{
    //
    // function showdata()
    // {
    //      $books = users::all();
    //      echo $books;
    //     // echo "hello";
        
    //     //return view('students.showdata',compact('books'));
    // }

    
    public function index() 
    {
        $books = User::all();
        // echo $books;  
        // dd($books);
        // return view('dashboard',compact('books'));
        return view('users.showdata',compact('books'));
    }
    public function delete($id)  // delete data from table
    {
       $books = User ::find($id);
       $books->delete();
       return view('users.showdata');

    //    echo "Data Deleted successfully";
    }

    // public function fetchdata(request $Request, $id)  // To fetch data in update form 
    // {
      
    // }

    
}
