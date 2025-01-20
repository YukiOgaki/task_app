<?php

namespace App\Http\Controllers;

use App\Models\Task;
//use App\Http\Requests\TaskRequest;


class Taskcontroller extends Controller
{
    // indexページへ移動
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', ['tasks' => $tasks]);
    }

    // createページへ移動
    public function create()
    {
        return view('tasks.create');
    }

    // // storeページへ移動
    // public function store(TaskRequest $request)
    // {
    //     //インスタンスの作成
    //     $task = new Task();

    //     $task->title = $request->title;
    //     $task->body = $request->body;

    //     $task->save();

    //     //登録したらindexに戻る
    //     return redirect(route('tasks.index'));
    // }

    // showページへ移動
    public function show($id)
    {
        $task = Task::find($id);
        return view('tasks.show', ['task' => $task]);
    }

    // editページへ移動
    public function edit($id)
    {
        $task = Task::find($id);
        return view('tasks.edit', ['task' => $task]);
    }

    // // updateページへ移動
    // public function update(TaskRequest $request, $id)
    // {
    //     //更新対象データの取得
    //     $task = Task::find($id);

    //     $task->title = $request->title;
    //     $task->body = $request->body;

    //     $task->save();

    //     //更新したらindexに戻る
    //     return redirect(route('tasks.index'));
    // }

    // destroyページへ移動
    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();

        //削除したらindexに戻る
        return redirect(route('tasks.index'));
    }
}
