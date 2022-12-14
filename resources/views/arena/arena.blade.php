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
            <label for="">User 1</label>
            <span>Score: 0</span>
        </div>
        <div class="score">
            <label for="">User 2</label>
            <span>Score: </span>
            <span id="score">0</span>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        let time = 0;
        const timeInterval = 2000;
        var startInterval = setInterval(() => {
            if (time >= 12000) clearInterval(startInterval);
            $.ajax({
                type: "GET",
                url: "score",
                data: {
                    user_id: 2
                },
                success: function (response) {
                    time += timeInterval
                    console.log(time);
                    $('#score').text(response['score2']);
                }
            })
        }, timeInterval);
    </script>
</body>
</html>
