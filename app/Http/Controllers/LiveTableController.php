<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Yajira;

class LiveTableController extends Controller
{

	public function table(Request $request){
$live_tables=Yajira::all();
		if ($request->ajax()) {
			
			return datatables()->of($live_tables)

          ->addColumn('action', function($data){
          	              // $group.='<div class="btn-group">';
                             $button = ' <div class="btn-group"><a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Add" class="edit btn btn-primary btn-sm save-data"><i class="fas fa-plus"></i>Add</a>';
                            $button .= ' <div class="btn-group"><a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Edit" class="edit btn btn-info btn-sm edit-data"><i class="fas fa-edit"></i> Edit</a>';
                          
                            $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Delete</button></div>';  

                            return $button;
                        })
                        ->rawColumns(['action'])
                        ->addIndexColumn()
                        ->make(true);
                    }
			 return view('yajira');
		}

//return response()->json($live_tables);


		   public function edit($id)
    {
        $where = array('id' => $id);
        $post  = Yajira::where($where)->first();
        return response()->json($post);
    }
   

        public function store(Request $request)
    {
        $id = $request->id;
        
        $post   =   Yajira::updateOrCreate(['id' => $id],
                    [
                        'firstname' => $request->firstname,
                        'lastname' => $request->lastname,
                        'email' => $request->email,
                        'address' => $request->address,
                    ]); 

        return response()->json($post);
    }


        public function destroy($id)
    {
        $post = Yajira::where(['id'=>$id])->delete();
     
        return response()->json($post);
    }

}
