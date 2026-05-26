<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeWhale - Maintenance</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(to bottom, #002244, #004d7a, #0073e6);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            overflow: hidden;
            perspective: 1000px;
            position: relative;
        }

        @keyframes wave {
            from {
                background-position: 0 0;
            }

            to {
                background-position: 1000px 0;
            }
        }

        .container {
            background: rgba(255, 255, 255, 0.1);
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(15px);
            border: 2px solid rgba(255, 255, 255, 0.2);
            max-width: 700px;
            transform: rotateY(10deg);
            animation: float 4s infinite ease-in-out alternate;
            position: relative;
            z-index: 2;
        }

        @keyframes float {
            from {
                transform: rotateY(10deg) translateY(-10px);
            }

            to {
                transform: rotateY(-10deg) translateY(10px);
            }
        }

        h1 {
            font-size: 3rem;
            margin-bottom: 10px;
            text-shadow: 0px 5px 15px rgba(255, 255, 255, 0.4);
        }

        p {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .countdown {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            font-size: 3rem;
            font-weight: bold;
            text-shadow: 0px 0px 20px #00d4ff;
        }

        .time-box {
            background: rgba(255, 255, 255, 0.15);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 212, 255, 0.5);
            text-align: center;
            width: 100px;
        }

        .time-box span {
            display: block;
            font-size: 2rem;
            font-weight: bold;
        }

        .label {
            font-size: 1rem;
            opacity: 0.8;
        }

        .terminal {
            background: rgba(0, 0, 0, 0.8);
            color: #00ff00;
            padding: 10px;
            border-radius: 5px;
            font-family: monospace;
            font-size: 14px;
            max-width: 100%;
            margin-top: 20px;
            white-space: pre-wrap;
            text-align: left;
            height: 150px;
            overflow: hidden;
        }

        .blinking {
            animation: blink 1s infinite;
        }

        @keyframes blink {
            50% {
                opacity: 0;
            }
        }
    </style>
    <script>
        function updateTime() {
            let now = new Date();
            let targetDate = new Date("2025-04-07T00:00:00"); // Set exact end date
            let diff = targetDate - now;

            let days = Math.floor(diff / (1000 * 60 * 60 * 24));
            let hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            let minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
            let seconds = Math.floor((diff % (1000 * 60)) / 1000);

            document.getElementById('countdown').innerHTML = `
                <div class="time-box"><span>${days}</span><div class="label">Days</div></div>
                <div class="time-box"><span>${hours}</span><div class="label">Hours</div></div>
                <div class="time-box"><span>${minutes}</span><div class="label">Minutes</div></div>
                <div class="time-box"><span>${seconds}</span><div class="label">Seconds</div></div>
            `;
        }
        setInterval(updateTime, 1000);
        window.onload = updateTime;


        function typeWriterEffect(text, element, speed = 100) {
            let i = 0;
            element.innerHTML = ""; // Ensure the terminal starts empty
            function typing() {
                if (i < text.length) {
                    element.innerHTML += text.charAt(i);
                    i++;
                    setTimeout(typing, speed);
                }
            }
            typing();
        }

        window.onload = function() {
            updateTime(); // Start countdown timer
            let terminalText = "Initializing system...\nChecking dependencies...\nLoading assets...\nDeployment in progress...\nStay tuned!";
            let terminalElement = document.getElementById("terminal");

            setTimeout(() => {
                typeWriterEffect(terminalText, terminalElement, 80);
            }, 500); // Small delay to ensure it's rendered
        };
    </script>
</head>

<body>
    <div class="container">
        <h1>🐋 CodeWhale 🐋</h1>
        <p>We're crafting something amazing! Stay tuned.</p>
        <p>🌊 Maintenance Mode 🌊</p>
        <div class="countdown" id="countdown"></div>
        <div class="terminal" id="terminal"></div>
    </div>
</body>

</html>