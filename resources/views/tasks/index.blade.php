@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row my-5">
      <div class="col-12 col-md-4">
        <h3>フォルダ</h3>
        <div>
          <div>
            <a href="{{ route('folders.create') }}" class="btn btn-primary col-12">
              フォルダを追加する
            </a>
          </div>
          @foreach($folders as $folder)
            <div class="list-group">
              <a href="{{ route('tasks.index', ['folder' => $folder]) }}" class="list-group-item list-group-item-action">
                {{ $folder->title }}
              </a>
            </div>
          @endforeach
        </div>
      </div>
      <div class="col-12 col-md-8 mt-5 mt-md-0">
        <h3>タスク</h3>
        <div>
          <div>
            <a
              href="{{ route('tasks.create', [
                'folder' => $current_folder_id
              ]) }}"
              class="btn btn-primary col-12"
            >
              タスクを追加する
            </a>
          </div>
          <table class="table">
            <tr>
              <th>タイトル</th>
              <th>状態</th>
              <th>期限</th>
            </tr>
            @foreach($tasks as $task)
              <tr>
                <td>{{ $task->title }}</td>
                <td>
                  <span class="badge {{ $task->status_badge }} p-2">
                    {{ $task->status_label }}
                  </span>
                </td>
                <td>{{ $task->formatted_due_date }}</td>
                <td>
                  <a
                    href="{{ route('tasks.edit', [
                      'folder' => $current_folder_id,
                      'task' => $task,
                    ]) }}"
                    class="btn btn-outline-primary col-12"
                  >
                    編集
                  </a>
                </td>
                <td>
                  <a
                    href="{{ route('tasks.delete', [
                      'folder' => $current_folder_id,
                      'task' => $task,
                    ]) }}"
                    class="btn btn-outline-danger col-12"
                  >
                    削除
                  </a>
                </td>
              </tr>
            @endforeach
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
