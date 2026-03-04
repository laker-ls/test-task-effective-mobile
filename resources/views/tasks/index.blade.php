@extends('layouts.app')

@section('title', 'Список задач')

@section('content')
    <div class="container">
        <div id="createTaskForm">
            <form method="POST" action="{{ url('/tasks') }}" class="task-form">
                @csrf
                <h2 class="task-form__title">Добавить задачу</h2>
                @if ($errors->any())
                    <div class="task-form__errors">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="task-form__field">
                    <label class="task-form__label">Наименование*</label>
                    <input
                        type="text"
                        name="title"
                        value="{{ old('title') }}"
                        placeholder="Укажите название задачи"
                        required
                        class="default-input"
                    >
                </div>
                <div class="task-form__field">
                    <label class="task-form__label">Описание</label>
                    <textarea
                        name="description"
                        placeholder="Укажите описание (не обязательно)"
                        rows="4"
                        class="default-textarea"
                    >{{ old('description') }}</textarea>
                </div>
                <div class="task-form__actions">
                    <button type="submit" class="btn-primary">
                        Создать задачу
                    </button>
                </div>
            </form>
        </div>
        <div id="tasksContainer" class="task-list">
            @if(!isset($tasks) || $tasks->isEmpty())
                <div class="task-list__empty">
                    <p class="task-list__empty-text">Нет созданных задач</p>
                </div>
            @else
                @foreach($tasks as $task)
                    <div class="task-list__item{{ $task->status ? ' task-list__item--completed' : '' }}">
                        <div class="task-list__row">
                            <div class="task-list__header">
                                <h3 class="task-list__title{{ $task->status ? ' task-list__title--completed' : '' }}">
                                    {{ $task->title }}
                                </h3>
                            </div>
                            <a href="{{ url('/tasks/'.$task->id) }}" class="btn-primary">
                                Подробнее
                            </a>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
