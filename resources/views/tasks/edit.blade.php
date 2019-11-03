@extends('layout')

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
              value="{{ old('title') }}"
            >
          </div>
          <div class="row my-3">
            <label for=""></label>
          </div>
          <div class="row my-3">
            <label for="due_date" class="col-4">期限</label>
            <input type="date" id="due_date" name="due_date" class="col-8">
          </div>
          <div class="row my-3">
            <button type="submit" class="btn btn-secondary mx-auto">送信</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
