@extends('layouts.app')

@section('title', 'Задача - ' . $task->title)


@section('content')
<div class="task-details-container">
    <a href="{{ url('/tasks') }}" class="task-details__back">&larr; Вернуться к списку задач</a>
    <div class="task-details">
        <div class="task-details__header">
            <h1 class="task-details__title">{{ $task->title }}</h1>
            <span class="task-details__status{{ $task->status ? ' task-details__status--completed' : '' }}">
                {{ $task->status ? 'Выполнено' : 'В работе' }}
            </span>
        </div>
        <div class="task-details__section">
            {{ $task->description }}
        </div>
        <div class="task-details__meta">
            <div>
                <span class="task-details__meta-label">Дата: </span>
                <span>{{ $task->created_at->format('d M, Y H:i') }}</span>
            </div>
        </div>
        <div class="task-details__actions">
            <a href="{{ url('/tasks/'.$task->id.'/edit') }}" class="btn-primary">Редактировать</a>
            <form method="POST" action="{{ url('/tasks/'.$task->id) }}" onsubmit="return confirm('Удалить данную задачу?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-delete">
                    Удалить
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
