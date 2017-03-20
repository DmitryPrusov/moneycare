<?php namespace App\Http\Controllers;

use App\Budget;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use App\Http\Requests\BudgetRequest;

class BudgetController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$user = Auth::user();

		$budgets = Auth::user()->budgets()->orderby('created_at')->get();
		$currentTime = Carbon::now()->format('h:i a');
		$today= Carbon::now()->formatLocalized('%a %d %b %y');

		return view("pages.budget.home", compact ('budgets', 'today', 'currentTime', 'user'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if ($request->ajax()) {

			Auth::user()->budgets()->create([
				'name' => $request->name,
				'desc' => $request->desc,

			]);

			$response = [
				'msg' => 'Бюджет создан'
			];
			return Response::json($response);
		}
		else {
			Auth::user()->budgets()->create([
				'name' => $request->name,
				'desc' => $request->desc,

			]);

			return redirect()->back();
		}



		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Budget $budget, Request $request)
	{
		if ($request->ajax()) {

			$response = [
				'id' => $budget->id,
				'desc' => $budget->desc,
				'name' => $budget->name
			];
			return Response::json($response);
		}



		else {
			$budgets = Auth::user()->budgets()->orderby('created_at')->get();
			$currentTime = Carbon::now()->format('h:i a');
			$today= Carbon::now()->formatLocalized('%a %d %b %y');
			return view("pages.budget.home", compact ('budgets', 'today', 'currentTime', 'user'));


		}


	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
