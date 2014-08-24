<?php
namespace Bahjaat\Pack\Controllers;
use Bahjaat\Pack\Models\PostModel as Post;
// use BaseController;

class PackController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /pack
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		// echo "packcontroller";
		// return;
		$comments = Post::find(1)->comments;
		echo '<pre>';
		// print_r($comments);
		foreach ($comments as $comment)
		{
			// print_r($comments);
			print_r($comment->comment);
		}
		return;
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pack/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pack
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /pack/{id}
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
	 * GET /pack/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /pack/{id}
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
	 * DELETE /pack/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}