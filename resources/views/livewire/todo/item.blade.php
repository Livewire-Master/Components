<li style="padding: 8px 0">
    <p style="display: inline">{{ $task }}</p>
    <span style="color: {{ $isDone ? '#0069d9' : '#CC7832' }}">
            {{ $isDone ? 'DONE' : 'PENDING' }}
        </span>
    <span style="color: #939393">|</span>
    <button wire:click="toggle">
        {{ $isDone ? 'Uncheck' : 'Make it Done' }}
    </button>
</li>
