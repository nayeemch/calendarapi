<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Holiday;

use DB;


class CalendarController extends Controller
{
    public function index(){
    	$showData = DB::table('calendar_types')
            ->select('calendar_types.*')
            ->get();

    	return view('layouts.cal_type' , compact('showData'));
    }
    public function showdata(Request $request,$id){
    	

    	$showData = DB::table('holidays')
            ->join('months', 'holidays.months_id', '=', 'months.id')
            ->select('holidays.*', 'months.months_name')
            ->where('calendar_type_id', '=', $id)
            ->get();

        
        return view('layouts.showdata',compact('showData','id'));
    }

    public function create($id){
    	return view('layouts.create' , compact('id'));
    }

    public function store(Request $request, $calendar_type_id)
    {

    	$this->validate($request,[
    		'holiday_name'=>'required',
    		'holiday_details'=>'required'
    	]);

    	$holiday= new Holiday;
    	$holiday->holiday_name = $request->holiday_name;
        $holiday->holiday_details = $request->holiday_details;
        $holiday->holiday_img_url = $request->holiday_img_url;
        $holiday->holiday_date = $request->holiday_date;
        $holiday->holiday_year = $request->holiday_year;
    	$holiday->months_id= $request->id;
    	$holiday->calendar_type_id= $request->calendar_type_id;
    	$holiday->save();
    	$showData = DB::table('holidays')
            ->join('months', 'holidays.months_id', '=', 'months.id')
            ->select('holidays.*', 'months.months_name')
            ->where('calendar_type_id', '=', $calendar_type_id)
            ->get();
        $id = $request->calendar_type_id;
        return view('layouts.showdata',compact('showData','id'));

    }

    public function edit($id){
    	$holiday = Holiday::find($id);
    	return view('layouts.edit' , compact('holiday' ,'id'));
    }

    public function update(Request $request,$id){

    	$this->validate($request,[
    		'holiday_name'=>'required',
    		'holiday_details'=>'required'
    	]);

    	$holiday= Holiday::find($id);
    	$holiday->holiday_name = $request->holiday_name;
        $holiday->holiday_details = $request->holiday_details;
        $holiday->holiday_img_url = $request->holiday_img_url;
        $holiday->holiday_date = $request->holiday_date;
        $holiday->holiday_year = $request->holiday_year;
    	$holiday->months_id = $request->months_id;
    	$holiday->save();
    	$id = $request->calendar_type_id;
    	$showData = DB::table('holidays')
            ->join('months', 'holidays.months_id', '=', 'months.id')
            ->select('holidays.*', 'months.months_name')
            ->where('calendar_type_id', '=', $id)
            ->get();
        $id = $request->calendar_type_id;
        return view('layouts.showdata',compact('showData','id'));
    }

    public function delete(Request $request,$id)
    {
    	$holiday= Holiday::find($id);
    	Holiday::find($id)->delete();
    	$calendar_type_id=$request->calendar_type_id;
    	$showData = DB::table('holidays')
            ->join('months', 'holidays.months_id', '=', 'months.id')
            ->select('holidays.*', 'months.months_name')
            ->where('calendar_type_id', '=', $calendar_type_id)
            ->get();
        $id = $request->calendar_type_id;
        return view('layouts.showdata',compact('showData','id'));
    }

    public function api()
    {

        $showData = DB::table('holidays')
            ->join('months', 'holidays.months_id', '=', 'months.id')
            ->join('calendar_types', 'holidays.calendar_type_id', '=', 'calendar_types.id')
            ->select('holidays.id','holidays.holiday_name','holidays.holiday_details','holidays.holiday_img_url','holidays.holiday_date','holidays.holiday_year','holidays.months_id', 'months.months_name' , 'holidays.calendar_type_id','calendar_types.calendar_type')
            ->get();
        return view('layouts.api',compact('showData'));


    }


}
