<?php

class CommentsController extends \BaseController {


	function __construct(Comment $comment){
		$this->comment = $comment;
	}

	/**
	 * Display a listing of posts
	 *
	 * @return Response
	 */
	public function index()
	{


		$limit = Input::get('limit', 10);

		$posts = $this->comment->with('post')->paginate($limit);

		return Response::json([
			'data' => $posts->toArray()
		], 200)->setCallback(Input::get('callback'));;
	}

	/**
	 * Display the specified post.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = $this->comment->with('post')->findOrFail($id);

		return Response::json([
			'data' => $post->toArray()
		], 200)->setCallback(Input::get('callback'));;
	}



}
