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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="form">
        <div class="score">
            <label for="">Tôi: {{ $user_1->user->name ?? '' }}</label>
            <span>Score: </span>
            <span id="score1">{{ $user_1->score ?? 0 }}</span>
        </div>
        <div class="score">
            <p id="countdown">10:00</p>
        </div>
        <div class="score">
            <label for="">User 2: {{ $user_2->user->name ?? '' }}</label>
            <span>Score: </span>
            <span id="score2">{{ $user_2->score ?? 0 }}</span>
        </div>
        <div class="score">
            <button onclick="handleExit()">Thoát</button>
        </div>
    </div>

    <div class="form" >
        <div class="question">
            <ul id="question">{{ $question->name ?? ''}}
                @foreach ($question->answers as $answer)
                    <li><input type="radio" name="answer" value="{{ $answer->id }}">{{ $answer->name ?? '' }}</li>
                @endforeach
            </ul>
            <span id="message-empty"></span>
            <button type="submit" onclick="handleSubmit()">Submit</button>
        </div>
    </div>

    <button type="button" class="btn btn-info btn-lg" id="alertbox" style="visibility: hidden">Click here</button>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
            <p id="message"></p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" onclick="handleCloseModal()">Close</button>
            </div>
        </div>

        </div>
    </div>

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> --}}
    <script>
        let timeUpdateScore = 0;
        let countDownDate = 600000; // 10 phút
        const timeIntervalUpdateScore = 2000; // 2 giây load điểm 1 lần
        const room = {!! json_encode($room) !!};
        var startIntervalUpdateScore = setInterval(() => {
            if (timeUpdateScore >= 600000) clearInterval(startIntervalUpdateScore); // sau 10 phút không load dừng
            $.ajax({
                type: "GET",
                url: "{{ route('room.score') }}",
                data: {
                    room_id : room['id']
                },
                success: function (response) {
                    timeUpdateScore += timeIntervalUpdateScore
                    $('#score2').text(response['score']);
                    if (response['user_2'] == null) {
                        clearInterval(startIntervalUpdateScore);
                        $('.modal-content .modal-title').text('Bạn đã dành chiến thắng !');
                        $("#message").html("Đối thủ bỏ cuộc.");

                        $('#alertbox').click();

                        setTimeout(() => {
                            window.location.href = response['href'];
                        }, 5000);
                    }
                }
            })
        }, timeIntervalUpdateScore);

        var startCountDown = setInterval(() => {
            countDownDate -= 1000;
            if (countDownDate < 1000) {
                clearInterval(startCountDown);

                let score1 = $('#score1').text();
                let score2 = $('#score2').text();

                $('.modal-content .modal-title').text(score1 > score2 ? 'Bạn đã dành chiến thắng !' : (score1 == score2 ? 'Kết quả hòa' : 'Bạn đã thua !'));
                $("#message").html("");

                $('#alertbox').click();

            }
            var minutes = Math.floor((countDownDate % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((countDownDate % (1000 * 60)) / 1000);
            $('#countdown').text(minutes + ':' + seconds);
        }, 1000);

        // handle submit form question
        const handleSubmit = () => {
            let answer = $('input[name=answer]:checked').val() ?? null;
            if (answer != null) {
                $.ajax({
                    type: "POST",
                    url: "{{ route('room.updateQuestionAndScore') }}",
                    data: {
                        answer_id : answer,
                        _token : '{{  csrf_token() }}',
                        room_id : room['id'],

                    },
                    success: function (response) {
                        $('#question').append(response['status'] ? `<span style="color: green">Trả lời đúng</span>` : `<span style="color: red">Trả lời sai</span>`);
                        $('#score1').text(response['score']);
                        var question = createQuestion(response);
                        setTimeout(() => {
                            $('#question').replaceWith(question);
                        }, 2000);
                    }
                })
            }
            else {
                $('#message-empty').replaceWith(`<span id="message-empty" style="color: red">Bạn chưa chọn câu trả lời !</span>`);
                setTimeout(() => {
                    $('#message-empty').text('');
                }, 2000);
            }

        }

        //handle click button exit
        const handleExit = () => {
            confirm('Bạn có chắc muốn thoát');
            $.ajax({
                type: "GET",
                url: "{{ route('room.exitRoom') }}",
                data: {
                    room_id : room['id'],
                },
                success: function (response) {
                    window.location.href = response['href'];
                }
            })
        }

        function createQuestion(data) {
            var question = document.createElement('ul');
            question.setAttribute('id', 'question');
            question.textContent = data['question'];

            data['answers'].forEach(element => {
                var answer = document.createElement('li');
                var input = document.createElement('input');
                answer.textContent = element['name'];
                input.setAttribute('type', 'radio');
                input.setAttribute('name', 'answer');
                input.setAttribute('value', element['id']);
                answer.prepend(input);
                question.append(answer);
            });

            return question;
        }

        function handleCloseModal() {
            window.location.href = `{{ route('room.dashboard') }}`
        }

        $(document).ready(function(){
            $('#alertbox').click(function(){
                // $("#error").html("You Clicked on Click here Button");
                $('#myModal').modal("show");
            });
        });
    </script>
</body>
</html>
