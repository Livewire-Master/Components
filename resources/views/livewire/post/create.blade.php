<div>
    <form>
        <small>Your ip address: <span>{{ $ip }}</span></small>
        <br>
        <br>
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
    <div>
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
    <div>
        <h3>Recent Posts</h3>
        <ul>
            @foreach($posts as $post)
                <li wire:key="recent-posts-{{ $post['id'] }}">
                    <h4>{{ $post['title'] }}</h4>
                    <p>{{ $post['description'] }}</p>
                    <hr>
                </li>
            @endforeach
        </ul>
    </div>
</div>
