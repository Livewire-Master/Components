<header style="border-radius: 8px; display: flex; align-items: center; justify-content: space-between; gap: 32px; padding: 0 64px; background-color: #0069d9; color: white">
    <h1 style="font-size: 1rem">Livewire Navigation Component</h1>
    <nav>
        <ul style="display: flex; align-items: center; justify-content: center; gap: 64px">
            <li>
                <a style="color: white" href="{{ route('page.clocks') }}">Clocks</a>
            </li>
            <li>
                <a style="color: white" href="{{ route('page.posts') }}">Posts</a>
            </li>
            <li>
                <a style="color: white" href="{{ route('page.todo') }}">Todo</a>
            </li>
        </ul>
    </nav>
</header>
