<?php
// Set the boss's name
$bossName = "Ms. Fifi"; // Replace with your boss's name

// Set the birthday message
$birthdayMessage = "Happy Birthday, $bossName! 🎉 May your year be filled with success, happiness, and great health.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Birthday!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: white;
            text-align: center;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background: black; /* Black background */
        }
        h1 {
            font-size: 3rem;
            margin-top: 10%;
            z-index: 10;
            position: relative;
            animation: fadeIn 2s ease-in-out;
        }
        p {
            font-size: 1.5rem;
            margin-top: 10px;
            z-index: 10;
            position: relative;
            animation: fadeIn 3s ease-in-out;
        }
        .cake {
            margin-top: 20px;
            font-size: 3rem;
            z-index: 10;
            position: relative;
            animation: bounce 1s infinite;
        }

        /* Balloon container */
        .balloons {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }
        .balloon {
            position: absolute;
            width: 50px;
            height: 70px;
            background: radial-gradient(circle, rgba(255,0,0,1) 0%, rgba(255,165,0,0.8) 70%);
            border-radius: 50% 50% 45% 45%;
            animation: flyUp 6s infinite ease-in-out;
        }
        .balloon:before {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 50%;
            width: 2px;
            height: 20px;
            background: gray;
            transform: translateX(-50%);
        }

        /* Fade-in effect for text */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Bounce effect for cake */
        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        /* Fly-up animation for balloons */
        @keyframes flyUp {
            0% {
                transform: translateY(100vh);
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
            100% {
                transform: translateY(-10%);
                opacity: 0;
            }
        }
    </style>
</head>
<body>
    <div class="balloons">
        <div class="balloon" style="left: 10%; animation-delay: 0s;"></div>
        <div class="balloon" style="left: 30%; animation-delay: 2s;"></div>
        <div class="balloon" style="left: 50%; animation-delay: 1s;"></div>
        <div class="balloon" style="left: 70%; animation-delay: 3s;"></div>
        <div class="balloon" style="left: 90%; animation-delay: 0.5s;"></div>
    </div>
    <h1><?php echo $birthdayMessage; ?></h1>
    <p>We appreciate everything you do. Enjoy your special day!</p>
    <div class="cake">
        🎂🎁🎈
    </div>
</body>
</html>
