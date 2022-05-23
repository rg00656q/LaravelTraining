<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>helping</title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <style>
        #messages {
            height: 200px;
            overflow-y: auto;
        }

    </style>
</head>

<body>
    <div id="messages">
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
        <div class="message">
            Hello world
        </div>
    </div>
    <script>
        const messages = document.getElementById('messages');

        function appendMessage() {
            const message = document.getElementsByClassName('message')[0];
            const newMessage = message.cloneNode(true);
            messages.appendChild(newMessage);
        }

        function getMessages() {
            // Prior to getting your messages.
            shouldScroll = messages.scrollTop + messages.clientHeight === messages.scrollHeight;
            /*
             * Get your messages, we'll just simulate it by appending a new one syncronously.
             */
            appendMessage();
            // After getting your messages.
            if (!shouldScroll) {
                scrollToBottom();
            }
        }

        function scrollToBottom() {
            messages.scrollTop = messages.scrollHeight;
        }

        scrollToBottom();

        //setInterval(getMessages, 100);
    </script>
</body>

</html>
