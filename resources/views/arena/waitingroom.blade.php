<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Waiting Room</title>
</head>
<body>
    <div>
        <span>User 1:</span>
        <span>{{ $room->user_1->name ?? '' }}</span>
    </div>

    <div>
        <span>User 2:</span>
        <span>{{ $room->user_2->name ?? 'Đang chờ' }}</span>
    </div>
    <div>
        @if ($room->user1 && $room->user2)
            <div>
                <a href="{{ route('arena', ['id' => $room->id]) }}">Bắt đầu</a>
            </div>
        @endif
    </div>
</body>
</html>
