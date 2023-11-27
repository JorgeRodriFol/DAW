<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        section {
            position: relative;
            width: 200px;
            height: 200px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        div {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            position: absolute;
            mix-blend-mode: difference;
            opacity: 0.7;
            display: flex;
            justify-content: center;
            align-items: center;
            outline: solid black 0.05em;
        }

        .r {
            top: 25%;
            left: 30%;
        }

        .g {
            top: 25%;
            right: 30%;
        }

        p {
            color: white;
            opacity: 1;
            font-size: 5px;
        }
    </style>
</head>

<body>
    <section>
        <?php
        $r = rand(50, 255);
        $g = rand(50, 255);
        $b = rand(50, 255);

        echo '<div class="r" style="background-color: rgb(' . $r . ',0,0)"><p>' . $r . '</p></div>';
        echo '<div class="g" style="background-color: rgb(0,' . $g . ',0)"><p>' . $g . '</p></div>';
        echo '<div class="b" style="background-color: rgb(0,0,' . $b . ')"><p>' . $b . '</p></div>';
        ?>
    </section>
</body>

</html>