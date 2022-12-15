<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .form {
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
    <div class="form">
        <div class="score">
            <label for="">Tôi: {{ auth()->user()->name ?? '' }}</label>
            <span>Score: </span>
            <span id="score1">0</span>
        </div>
        <div class="score">
            <label for="">User 2: {{ $room->user1 == auth()->user()->id ? ($room->user_2->name ?? '') : ($room->user_1->name) }}</label>
            <span>Score: </span>
            <span id="score2">0</span>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        let time = 0;
        const timeInterval = 2000;
        const room = {!! json_encode($room) !!};
        console.log(room['id']);
        var startInterval = setInterval(() => {
            if (time >= 12000) clearInterval(startInterval);
            $.ajax({
                type: "GET",
                url: "{{ route('room.score') }}",
                data: {
                    room_id : room['id']
                },
                success: function (response) {
                    time += timeInterval
                    $('#score2').text(response);
                }
            })
        }, timeInterval);
    </script>
</body>
</html>
