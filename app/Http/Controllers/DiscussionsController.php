<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discussion;
use Session;
use Auth;
use App\Reply;

class DiscussionsController extends Controller
{

	
	public function index(){
		return view('discuss')->with('discussions', Discussion::all());
	}

    public function create(){
    	return view('discussions.create');
    }

    public function store(Request $request){
    	$this->validate($request, [
    		'title' => 'required',
    		'content' => 'required',
    		'channel_id' => 'required'
    	]);

    	$discussion = Discussion::create([
    		'title' => $request->title,
    		'content' => $request->content,
    		'channel_id' => $request->channel_id,
    		'user_id' => Auth::id(),
            'slug' => str_slug($request->title)
    	]);

    	Session::flash('smsg', 'Discussion created successfully.');

    	return redirect()->route('discussion', ['slug' => $discussion->slug]);
    }

    public function show($slug){
		$discussion = Discussion::where('slug', $slug)->first();
		if($discussion){
			$replies = Reply::where('discussion_id', $discussion->id)->count();
			$best_answer = $discussion->replies()->where('best_answer', 1)->first();
		} else {
			$replies = '';
			$best_answer = 0;
		}
        return view('discussions.show')
                ->with('discussion', $discussion)
				->with('reply_count', $replies)
				->with('best_answer', $best_answer);
	}

	public function edit($slug){
		return view('discussions.edit',[ 'discussion' => Discussion::where('slug', $slug)->first() ]);
	}

	public function update($id){
		$this->validate(request(), [
			'content' => 'required'
		]);

		$discussion = Discussion::find($id);
		$discussion->content = request()->content;

		$discussion->save();

		Session::flash('smsg', 'Discussion Updated');

		return redirect()->route('discussion' , ['slug' => $discussion->slug]);
	}
}
