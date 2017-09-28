<?php namespace App\Http\Controllers;

use App\Models\EXPosts;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Ramsey\Uuid\Uuid;
use Illuminate\Http\UploadedFile;

class EXPostsController extends Controller
{

    /**
     * Display a listing of the resource.
     * GET /exposts
     *
     * @return Response
     */
    public function index()
    {
return view('home');
    }

    /**
     * Show the form for creating a new resource.
     * GET /exposts/create
     *
     * @return Response
     */
    public function create()
    {
        return view('user.post-form');
    }

    /**
     * Store a newly created resource in storage.
     * POST /exposts
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //HTML INPUT name="path"
        if ($request->hasFile('path')){
            $image = Input::file('path');
            $filename = time().'.'. $image->getClientOriginalExtension();
            //image resizer before move
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $filename);
        }
        EXPosts::create([
            'id' => Uuid::uuid4(),
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'text' => $request->text,
            'path' => $filename,
        ]);
        return redirect(route('app.posts.index'));
    }


    /**
     * Display the specified resource.
     * GET /exposts/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $data = EXPosts::find($id)->toArray();
        dd($data);
        return view('layouts.app', $data);
    }

    /**
     * Show the form for editing the specified resource.
     * GET /exposts/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /exposts/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /exposts/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}