<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DDEV Integration</title>
    <link rel="icon" type="image/x-icon" href="https://raw.githubusercontent.com/php-perfect/ddev-intellij-plugin/main/src/main/resources/META-INF/pluginIcon.svg">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'gray-dark': '#2A2E34',
                        'gray-light': '#5D5F63',
                        'gray-bg-light': '#E6E6E6',
                        'gray-bg-dark': '#AAAAAA',
                    },
                    fontFamily: {
                        sans: ['Inter var'],
                    },
                },
            },
        }
    </script>
</head>
<body class="h-screen bg-gradient-to-r from-gray-bg-light to-gray-bg-dark px-72 pt-48 pb-36">
<div class="h-full flex flex-col">
    <div class="flex-grow max-w-4xl">
        <p class="font-extrabold text-6xl text-gray-dark">
            DDEV Integration for IntelliJ
        </p>
        <p class="font-bold text-3xl text-gray-light mt-14">
            This plugin integrates DDEV with IntelliJ based IDEs such as PHPStorm or WebStorm
        </p>
        <p class="font-bold text-4xl text-gray-dark mt-36">
            More features
        </p>
        <p class="font-bold text-3xl text-gray-light mt-5 leading-relaxed">
            Get notified for DDEV updates
            <br>
            Auto configured Data Source
            <br>
            Integrated DDEV terminal
            <br>
            ...
        </p>
    </div>
    <div class="flex flex-row-reverse">
        <img class="h-72"
             src="https://raw.githubusercontent.com/php-perfect/ddev-intellij-plugin/main/src/main/resources/META-INF/pluginIcon.svg"
             alt="">
    </div>
</div>
</html>
