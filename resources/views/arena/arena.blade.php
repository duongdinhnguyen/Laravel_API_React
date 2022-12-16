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

        .question {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            border: 1px solid black;
            border-radius: 3px;
            padding: 5px 300px;
        }

        .question ul {
            list-style-type: none;
        }

        .question li {
            margin-left: 20px;

        }
    </style>
</head>
<body>
    <div class="form">
        <div class="score">
            <label for="">Tôi: {{ auth()->user()->name ?? '' }}</label>
            <span>Score: </span>
            <span id="score1">{{ $room->user1 == auth()->user()->id ? ($room->score1 ?? 0) : ($room->score2 ?? 0) }}</span>
        </div>
        <div class="score">
            <label for="">User 2: {{ $room->user1 == auth()->user()->id ? ($room->user_2->name ?? '') : ($room->user_1->name ?? '') }}</label>
            <span>Score: </span>
            <span id="score2">{{ $room->user1 == auth()->user()->id ? ($room->score2 ?? 0) : ($room->score1 ?? 0) }}</span>
        </div>
    </div>

    <div class="form" >
        <div class="question">
            <ul id="question">1.{{ $question->name ?? ''}}
                @foreach ($question->answers as $answer)
                    <li><input type="radio" name="answer" value="{{ $answer->id }}">{{ $answer->name ?? '' }}</li>
                @endforeach
            </ul>
            <button type="submit" onclick="handleSubmit()">Submit</button>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        let time = 0;
        const timeInterval = 2000;
        const room = {!! json_encode($room) !!};
        var startInterval = setInterval(() => {
            if (time >= 120000) clearInterval(startInterval);
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

        // ...

        const handleSubmit = () => {
            let answer = $('input[name=answer]:checked').val();
            $.ajax({
                type: "POST",
                url: "{{ route('room.updateQuestionAndScore') }}",
                data: {
                    answer_id : answer,
                    _token : '{{  csrf_token() }}',
                    room_id : room['id'],

                },
                success: function (response) {
                    location.reload();
                }
            })
        }
    </script>
</body>
</html>
