<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;


class ApiController extends Controller
{
    public function getAllData(Request $request)
    {

       try {
        // dd($request->page);
        $response=[];
        if($request->description != "" || $request->location != ""){
            $response = Http::get('http://dev3.dansmultipro.co.id/api/recruitment/positions.json?description='.$request->description.'&location='.$request->location);
        }else if($request->full_time){
            $response = Http::get('http://dev3.dansmultipro.co.id/api/recruitment/positions.json?description='.$request->description.'&location='.$request->location.'&full_time='.$request->full_time );
        }else if($request->page){
            $response = Http::get('http://dev3.dansmultipro.co.id/api/recruitment/positions.json');
        }
        else{
            $response = Http::get('http://dev3.dansmultipro.co.id/api/recruitment/positions.json?page=1');
        }
        
           
        // $response = Http::get('http://dev3.dansmultipro.co.id/api/recruitment/positions.json');
        $datas = $response->json();
        // dd($datas);
        return view('data.data',compact('datas'));
       } catch (\Exception $e) {
        return $e;
        }
    }

    public function getDetailData(Request $request, $id)
    {
       try {
        // dd($id);
            $response = Http::get('http://dev3.dansmultipro.co.id/api/recruitment/positions/'.$id );
        $datas = $response->json();
        // dd($datas);
        return view('data.detail',compact('datas'));
       } catch (\Exception $e) {
        return $e;
        }
    }

    public function getAllDataMore(Request $request)
    {

       try {
        // dd($request->page);
        $response=[];
        if($request->description != "" || $request->location != ""){
            $response = Http::get('http://dev3.dansmultipro.co.id/api/recruitment/positions.json?description='.$request->description.'&location='.$request->location);
        }else if($request->full_time){
            $response = Http::get('http://dev3.dansmultipro.co.id/api/recruitment/positions.json?description='.$request->description.'&location='.$request->location.'&full_time='.$request->full_time );
        }else if($request->page){
            $response = Http::get('http://dev3.dansmultipro.co.id/api/recruitment/positions.json');
        }
        else{
            $response = Http::get('http://dev3.dansmultipro.co.id/api/recruitment/positions.json?page=1');
        }
        
           
        // $response = Http::get('http://dev3.dansmultipro.co.id/api/recruitment/positions.json');
        $datas = $response->json();
        // dd($datas);
        return view('data.data',compact('datas'));
       } catch (\Exception $e) {
        return $e;
        }
    }

}