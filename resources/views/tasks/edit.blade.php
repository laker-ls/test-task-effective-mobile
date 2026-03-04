@extends('layouts.app')

@section('title', 'Редактирование задачи - ' . $task->title)

@section('content')
    <div class="edit-task-container">
        <div class="edit-task">
            <form method="POST" action="{{ url('/tasks/'.$task->id) }}">
                @csrf
                @method('PUT')
                <div class="edit-task__form-field">
                    <label class="edit-task__label">Наименование*</label>
                    <input type="text" name="title" value="{{ old('title', $task->title) }}" required
                           class="default-input">
                </div>
                <div class="edit-task__form-field">
                    <label class="edit-task__label">Описание</label>
                    <textarea name="description" rows="4"
                              class="default-textarea">{{ old('description', $task->description) }}</textarea>
                </div>
                <div class="edit-task__form-field">
                    <label class="edit-task__checkbox-label">
                        <input type="checkbox" name="status" value="1"
                               class="edit-task__checkbox" {{ old('status', $task->status) ? 'checked' : '' }}>
                        <span>Пометить выполненной</span>
                    </label>
                </div>
                <div class="edit-task__actions">
                    <button type="submit" class="edit-task__submit">Обновить</button>
                    <a href="{{ url('/tasks/' . $task->id) }}" class="edit-task__cancel">Отмена</a>
                </div>
            </form>
        </div>
    </div>
@endsection
