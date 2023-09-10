<?php

namespace App\Http\Controllers\Api\V2;

use App\Models\Task;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Resources\TaskResource;

// php artisan make:controller Api/V1/CompleteTaskController  -i
// で生成されるファイル
class CompleteTaskController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Task $task)
    {
        $task->is_completed = $request->is_completed;
        $task->save();
        return TaskResource::make($task);
    }
}
