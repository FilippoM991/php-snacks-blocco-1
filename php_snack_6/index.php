<?php

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="grigio">
            <?php foreach ($db as $key => $value){ ?>
                <?php if ($key == "teachers"); ?>
                    <?php foreach ($value as $data){ ?>
                        <?php echo $data["name"];?>
                        <?php echo $data["lastname"];?>
                    <?php
                    }?>
                <?php
                } ?>


        </div>
        <div class="verde">

        </div>
    </body>
</html>
