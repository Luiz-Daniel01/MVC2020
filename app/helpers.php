<?php 

function asset($path)
{
    return ROOT . "app/views/assets/{$path}";
}

function debug($param)
{
    echo"<pre style='background-color: #222; color: limegreen'>";
    echo "<h1> D E B U G A N D O ! ! !</h1>";
        print_r($param);
    echo"</pre>";

}
