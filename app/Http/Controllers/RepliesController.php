<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Reply;
use App\Like;
use App\Discussion;
use Session;
use App\User;
use Notification;

class RepliesController extends Controller
{
    public function reply($id){
        // find discussion by id
		$discussion = Discussion::find($id);

        // Create new reply in database
		$reply = Reply::create([
			'user_id' => Auth::id(),
			'discussion_id' => $id,
			'content' => request()->content
        ]);
        
        // Add 25 point to user for creating new reply
        $reply->user->points += 50;
        $reply->user->save();
        
        // watchers array to stor watches users
        $watchers = array();
        foreach ($discussion->watchers as $watcher){
            array_push($watchers, User::find($watcher->user_id));
        }

        // send mail to watche users
        Notification::send($watchers, new \App\Notifications\NewReplyAdded($discussion));

		Session::flash('smsg', 'Replayed');

		return redirect()->back();
    }

    public function like($id){
        
        Like::create([
            'reply_id' => $id,
            'user_id' => Auth::id()
        ]);

        
        Auth::user()->points += 25;
        Auth::user()->save();

        Session::flash('smsg', 'You liked the reply.');

        return redirect()->back();
    }

    public function unlike($id){
        $like = Like::where('reply_id', $id)->where('user_id', Auth::id())->first();
        
        $like->delete();

        Auth::user()->points -= 25;
        Auth::user()->save();
        
        Session::flash('wmsg', 'You unliked the reply.');

        return redirect()->back();
        
    }

    public function best_answer($id){
        $reply = Reply::find($id);

        $reply->best_answer = 1;

        $reply->save(); 
        // Add 25 point to user for marking best answer
        $reply->user->points += 100;
        $reply->user->save();

        Session::flash('smsg', 'Reply marked as best');

        return redirect()->back();
    }

    public function edit($id){
        return view('replies.edit', ['reply' => Reply::find($id)]);
    }

    public function update($id){
        $this->validate(request(),[
            'content' => 'required'
        ]);

        $reply = Reply::find($id);

        $reply->content = request()->content;
        $reply->save();

        Session::flash('smsg', "Reply updated.");
        return redirect()->route('discussion', ['slug' => $reply->discussion->slug]);
    }
    

}
