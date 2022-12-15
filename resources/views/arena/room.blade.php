<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <style>
        .room {
            display: flex;
            justify-content: space-evenly;
        }

        .score {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body>
    <div class="room">
        <a href="{{ route('room.create') }}">Tạo Room</a>
        <a href="{{ route('room.destroy') }}">Xóa hết room</a>
    </div>
    @if ($rooms)
        @foreach ($rooms as $room)
            <div style="padding: 20px">
                @if ($room->user1 && $room->user2)
                    Room {{ $room->id }}(Đã đầy)
                @else
                    <a href="{{ route('room.index', ['id' => $room->id]) }}">
                        Room {{ $room->id }}
                    </a>
                @endif
            </div>
        @endforeach
    @endif
</body>
</html>
