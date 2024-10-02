<?php

function secondTask($html, $text, $itaration)
{
    for ($m = 0; $m < $itaration; $m++)
        echo "<$html>$text</$html>";
};

secondTask('h1', 'Title', 3);
