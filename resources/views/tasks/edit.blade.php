@extends('layouts.app')

@section('content')
  <div class="container">
    <h2 class="mt-5 text-center">タスク編集</h2>
    <div class="row my-3">
      <div class="col-12 col-md-4 offset-md-4">
        <form
          action="{{ route('tasks.edit', [
              'id' => $folder_id,
              'task_id' => $task->id,
            ])
          }}"
          method="post"
        >
        @csrf
          <div class="row">
            <label for="title" class="col-4">タイトル</label>
            <input
              type="text"
              id="title"
              name="title"
              class="col-8"
              value="{{ old('title', $task->title) }}"
            />
          </div>
          <div class="row my-3">
            <label for="status" class="col-4">状態</label>
            <select name="status" id="status" class="col-8">
            @foreach(App\Task::STATUS as $key => $val)
              <option
                value="{{ $key }}"
                {{ $key === old('status', $task->status)?'selected':'' }}
              >
                {{ $val['label'] }}
              </option>
            @endforeach
            </select>
          </div>
          <div class="row my-3">
            <label for="due_date" class="col-4">期限</label>
            <input
              type="date"
              id="due_date"
              name="due_date"
              class="col-8"
              value="{{ old('due_date', $task->due_date) }}"
            />
          </div>
          <div class="row my-3">
            <button type="submit" class="btn btn-secondary mx-auto">送信</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
