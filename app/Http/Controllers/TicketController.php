<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\User;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Status;
use App\Models\Comment;
class TicketController extends Controller
{
    public function index(){
    $tickets = Ticket::all();
    return view('tickets.list', compact('tickets'));
    }

    public function create(){
        $categories = Category::all();
        $customers = Customer::all();
        return view('tickets.new', compact('categories','customers'));
    }

    public function store(){
        $ticket = new Ticket;
        $ticket->title = request('title');
        $ticket->description = request('desc');
        $ticket->category_id = request('cat_id');
        //$ticket->user_id = request('user_id');
        $ticket->user_id = 1;
        $ticket->customer_id = request('cust_id');
        $ticket->save();
        return redirect('/tickets');
    }

    public function show($id){
        $ticket = Ticket::find($id);
        $statuses = Status::all();
        return view('tickets.show', compact('ticket', 'statuses'));
    }

    public function edit($id){
        $ticket = Ticket::find($id);
        $categories = Category::all();
        $customers = Customer::all();
        return view('tickets.edit', compact('ticket','categories','customers'));
    }

    public function update($id){
        $ticket = Ticket::find($id);
        $ticket->title = request('title');
        $ticket->description = request('desc');
        $ticket->category_id = request('cat_id');
        $ticket->user_id = request('user_id');
        $ticket->customer_id = request('cust_id');
        $ticket->save();
        return redirect('/tickets');
    }

    public function store_comment($id){
        $comment = new Comment();
        $comment->comment = request('comment');
        $comment->status_id = request('status');
        $comment->ticket_id = $id;
        $comment->user_id = 1;
        $comment->save();
        return redirect('/tickets/' . $id);
    }
}
