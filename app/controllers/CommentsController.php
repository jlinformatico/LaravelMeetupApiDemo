<?php

class CommentsController extends ApiController {


	function __construct(Comment $comment)
	{
		$this->comment = $comment;
	}

	public function index()
	{
		$limit = Input::get('limit', 10);

		$comments = $this->comment->with('post')->paginate($limit);

		return $this->response($comments->toArray());
	}


	public function show($id)
	{

		try {

			$comment = $this->comment->with('post')->findOrFail($id);
			return $this->response(['data'=>$comment->toArray()]);

		}
		catch(Illuminate\Database\Eloquent\ModelNotFoundException $e) 
		{
			return $this->response(['error'=>$e->getMessage()], 404);
		}

	}



}
