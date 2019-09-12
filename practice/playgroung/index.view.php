<!DOCTYPE html>
<head>
    <title>PHP Playground</title>

    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<header>
    <h1><?=" {$title} "?></h1>
</header>

<div class="container"><?= "{$nameOfExercise1}"?>
    <div class="subcontainer">
        <div class="d1 box"><?= "{$nameOfExercise1} case 1"?>
           <ul>

               <?php
               foreach ($animals as $animal) {
                   echo "<li>{$animal}</li>";
               }
                   ?>

           </ul>
        </div>

        <div class="d2 box"><?= "{$nameOfExercise1} case2"?>
            <ul>

                <?php foreach($animals as $animal) : ?>
                    <li><?= $animal; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="d3 box"><?= "$nameOfExercise3" ?>
            <ul>

                <?php foreach ($person as $key => $value) : ?>
                    <li><strong><?= ucwords($key) ?>: </strong><?= $value; ?></li>
                <?php endforeach; ?>

            </ul>
        </div>
    </div>
</div>

<div class="container">
    <div class="subcontainer">
        <div class="d1 box"><?= $nameOfExercise4; ?>
            <ul>

                <li>Who is responsible: <?= $task['who'];?></li>
                <li>Due date: <?= $task['when'];?></li>
                <li>Status: <?= $task['completed'] ? 'completed &#9989;' : 'uncompleted &#10006;';?></li>

            </ul>
        </div>
        <div class="d2 box">
            <?= $nameOfExercise5; ?>
            <?= dumper($car1) ?>
        </div>

        <div class="d3 box"><?= $nameOfExercise6; ?>
            <?php displayArray($animals);?>
        </div>
    </div>
</div>

<div class="container">
    <div class="subcontainer">
        <div class="d1 box"><?= $nameOfExercise6 ?>

            <?php displayArray($cars);?>
        </div>

        <div class="d2 box"><?= $nameOfExercise7 ?>

            <?= '<pre>';
            // fetch the statement from DB and display result
            print_r($results = $statement->fetchAll(PDO::FETCH_OBJ));
            echo '</pre>'; ?>

        </div>

        <div class="d3 box"><?= $nameOfExercise7 ?><br><hr>
            <?php var_dump($results[2]->description);?>
        </div>
    </div>
</div>

<div class="container">
    <div class="subcontainer">
        <div class="d1 box"><?= "{$nameOfExercise8}";?><br>

            <?php foreach ($results as $task) : ?>
                <li><?= $task->description; ?></li>
            <?php endforeach; ?>

        </div>
        <div class="d2 box"><?= $nameOfExercise9; ?>
            <ul>
            <?php foreach ($results as $result) : ?>
            <li>

                <?php if ($result->completed) : ?>
                    <strike><?= $result->description; ?></strike>
                <?php else: ?>
                    <?= $result->description; ?>
                <?php endif; ?>

            </li>
            <?php endforeach; ?>
            </ul>

        </div>
        <div class="d3 box"><?= $nameOfExercise10; ?>
            <?php $savedInClass = $statement2->fetchAll(PDO::FETCH_CLASS, 'Task'); ?>

            <ul>
                <?php foreach ($savedInClass as $result) : ?>
                    <li>

                        <?php if ($result->completed) : ?>
                            <strike><?= $result->description; ?></strike>
                        <?php else: ?>
                            <?= $result->description; ?>
                        <?php endif; ?>

                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>


