<?php
use App\Constants\RoomConstant;

?>
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
        <span>{{ auth()->user()->name ?? '' }}</span>
    </div>

    <div>
        <span>User 2:</span>
        <span id="user2">{{ $room->user_2->name ?? 'Đang chờ' }}</span>
    </div>
    <div>
        <div>
            <a id="arena" href="{{ ($room->user1 && $room->user2) ? route('arena', ['id' => $room->id]) : "#" }}">Bắt đầu</a>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        const room = {!! json_encode($room) !!};
        var startInterval = setInterval(() => {
            $.ajax({
                type: "GET",
                url: "{{ route('room.checkStart') }}",
                data: {
                    room_id : room['id']
                },
                success: function (response) {
                    if (response['user_name']) {
                        $('#user2').text(response['user_name']);
                        $('#arena').attr('href', "{{ route('arena', ['id' => $room->id]) }}");
                    }

                    if(response['status'] == {{ RoomConstant::START }}) {
                        clearInterval(startInterval);
                        document.getElementById("arena").click();
                    }
                }
            })
        }, 1000);
    </script>
</body>
</html>
