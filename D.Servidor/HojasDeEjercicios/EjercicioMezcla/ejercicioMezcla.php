<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <svg height="400" width="400" xmlns="http://www.w3.org/2000/svg">
        <!-- Primer círculo (circunferencia) -->
        <path d="M 100,100 m -80,0 a 80,80 0 1,0 160,0 a 80,80 0 1,0 -160,0" fill="red" transform="rotate(-90 100 100)" />

        <!-- Segundo círculo -->
        <path d="M 200,100 m -80,0 a 80,80 0 1,0 160,0 a 80,80 0 1,0 -160,0" fill="blue" transform="rotate(-90 200 100)" />

        <!-- Tercer triangulo -->
        <path d="M 70,190 a 80,80 0 1,0 160,0 a 80,80 0 1,0 -160,0" fill="purple" />
        <!-- Primera mezcla -->
        <path d="M 120,100
                a 25,50 0 1,0 50,0
                a 25,50 0 1,0 -50,0" fill="green"/>
    </svg>
</body>
</html>