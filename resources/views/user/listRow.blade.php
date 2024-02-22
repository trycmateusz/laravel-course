<div>
    <span>
        {{ $userData['id'] }}
    </span>
    <span>
        -
    </span>
    <a href="{{
        route('get.user.show', [
            'id' => $userData['id']
        ])
    }}">
        {{ $userData['name'] }}
    </a>
</div>