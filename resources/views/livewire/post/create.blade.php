<div>
    <form>
        <label>
            Title
            <br>
            <input
                wire:model.blur="title"
                type="text"
                placeholder="Enter your post title"
            >
        </label>
        <br>
        <br>
        <label>
            Description
            <br>
            <textarea
                wire:model.blur="description"
                placeholder="Type about your taught..."
                cols="21"
                rows="5"
            ></textarea>
        </label>
    </form>
    @if($title || $description)
        <hr>
        <h3>Post Preview</h3>
        <h4>
            I am just thinking about <span>{{ $title }}</span>
        </h4>
        <p>
            {{ $description }}
        </p>
    @endif
</div>
