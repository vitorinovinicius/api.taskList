<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task as Task;
use App\Http\Resources\Task as TaskResource;

class TaskController extends Controller
{
    //Busca todas as tarefas do Banco de Dados e imprime na tela.
    public function index()
    {
        $titles = Task::all();
        return TaskResource::collection($titles);
    }

    //Insere uma nova tarefa.
    public function store(Request $request)
    {
        $title = new Task;
        $title->title = $request->input('title');

        if( $title->save() )
        {

        return new TaskResource( $title );
        }
    }

    //Imprime somente uma única tarefa passada via GET (id).
    public function show($id)
    {
        $title = Task::findOrFail( $id );

        return new TaskResource( $title );
    }

    //Altera a tarefa e o done 0 = não resolvido e 1 = resolvido.
    public function update(Request $request, $id)
    {
        $title = Task::findOrFail( $request->id );
        $title->title = $request->input('title');
        $title->done = 1 - $title->done;

        if( $title->save())
        {
            return new TaskResource( $title );
        }
    }

    // Deleta somente uma única tarefa.
    public function destroy($id)
    {
        $title = Task::findOrFail( $id );
        if( $title->delete() )
        {
            return new TaskResource( $title );
        }

    }
}
