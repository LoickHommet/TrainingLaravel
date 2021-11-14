<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Category;
use App\Models\Training;
use Illuminate\Http\Request;
use App\Http\Requests\TrainingResquest;
use Illuminate\Support\Facades\Storage;

class TrainingController extends Controller
{
    public function index(){       
        $training = Training::all();
        $category = Category::all();
        $type = Type::all();
       return view('training.list', compact(['training', 'category','type']));
    }

    public function detail($id){
      $training = Training::find($id);
      return view('training.detail', compact('training'));
  }

  public function add(){
    return view('training.add');
  }

  public function store(TrainingResquest $request){
   $params = $request->validated();
   $file= Storage::put('public', $params['image']);
   $params['image'] = substr($file,7);
   $params['user_id'] = auth()->user()->id;

   Training::create($params);
 
   return redirect()->route('traininglist');
  
  }

  public function update($id, TrainingResquest $request){
    $params = $request->validated();
    $training = Training::find($id);
    $params['user_id'] = auth()->user()->id;

    $training= $training->update($params);

    return redirect()->route('traininglist');
  }

  public function udpdateview($id){
    $training = Training::find($id);
    return view('training.modifier', compact('training'));
}




}
