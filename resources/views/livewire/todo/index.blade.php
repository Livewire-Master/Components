<div>
    <h1>Todo List</h1>
    <hr>
    <form>
        <label for="input-task">
            <span>
                Task <span style="color: red">*</span>
            </span>
            <br>
            <input
                wire:model="task"
                name="task"
                id="input-task"
                required
                type="text"
                placeholder="go shopping..."
            >
        </label>

        <button
            type="submit"
            wire:click.prevent="addTask"
        >
            Add
        </button>
    </form>
    <hr>
    <div>
        <h2>Total Tasks: {{ count($tasks) }}</h2>
        <ul>
            @foreach($tasks as $task)
                <li>
                    <p>{{ $task }}</p>
                </li>
            @endforeach
        </ul>
    </div>
</div>
