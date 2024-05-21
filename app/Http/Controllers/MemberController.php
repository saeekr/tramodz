<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();
        return view('members.index')->with('members', $members);
    }
    public function member()
    {
        $members = Member::all();
        return view('member')->with('members', $members);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('members.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     $input = $request->all();
    //     Member::create($input);
    //     return redirect('members')->with('flash_message', 'Anggota baru telah ditambahkan!');
    // }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'usia' => 'required',
            'jabatan' => 'required',
            'tahun' => 'required',
        ]);

        $member = Member::create([
            'nama' => $request->nama,
            'usia' => $request->usia,
            'jabatan' => $request->jabatan,
            'tahun' => $request->tahun,
        ]);

        return redirect('members');
    }
    public function store2(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'usia' => 'required',
            'jabatan' => 'required',
            'tahun' => 'required',
        ]);

        $member = Member::create([
            'nama' => $request->nama,
            'usia' => $request->usia,
            'jabatan' => $request->jabatan,
            'tahun' => $request->tahun,
        ]);

        return redirect('join');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $member = Member::find($id);
        return view('members.show')->with('members', $member);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = Member::find($id);
        return view('members.edit')->with('members', $member);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $member = Member::find($id);
        $input = $request->all();
        $member->update($input);
        return redirect('members')->with('flash_message', 'Anggota telah diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     Member::destroy($id);
    //     return redirect('members')->with('flash_message', 'Anggota telah dihapus!');
    // }
    public function destroy($id)
    {
        $member = Member::find($id);
        $member->delete();
        return redirect('members')->with('flash_message', 'Anggota telah dihapus!');
    }
    public static function countMembers()
    {
        $totalMembers = Member::count();
        return $totalMembers;
    }
}
