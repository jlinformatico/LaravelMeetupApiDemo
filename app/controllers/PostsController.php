<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of posts
	 *
	 * @return Response
	 */
	public function index()
	{
		// dd('test');
		$posts = Post::all();

		return Response::json($posts);
	}

	/**
	 * Display the specified post.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::with(['comments', 'author'])->findOrFail($id);

		return Response::json(['data'=>$post->toArray()])->setcallback(Input::get("callback"));
	}

	

}
