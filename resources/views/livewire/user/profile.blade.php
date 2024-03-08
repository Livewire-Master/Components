<div>
    <h1>
        Welcome Back {{ $user->name }}
    </h1>
    <p>
        Email Address: {{ $user->email }}
    </p>
    <p>
        Joined {{ $user->created_at->ago() }}
    </p>

    <hr>

    <ul>
        @foreach($users as $loopedUser)
            <li style="padding: 8px 0" wire:key="user-item-{{ $loopedUser['id'] }}">
                <span>{{ $loopedUser['name'] }}</span>
                <span>-</span>
                <span>{{ $loopedUser['email'] }}</span>
                <span>|</span>
                <a href="{{ route('page.user-profile', ['user' => $loopedUser['id']]) }}">View User Profile</a>
            </li>
        @endforeach
    </ul>
</div>
