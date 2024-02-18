<?php

    function add($header, $content, $index){

        return '<div class="accordion-item">
        <h3 class="accordion-header" id="heading'.$index.'">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse'.$index.'" aria-expanded="false" aria-controls="collapse'.$index.'">'.$header.'</button>
        </h3>
        <div id="collapse'.$index.'" class="accordion-collapse collapse" aria-labelledby="heading'.$index.'" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <p>'
            .$content.
            '</p>
          </div>
        </div>
      </div>'.PHP_EOL;
    }
	
    $render = "";
    $text = "";
    




    $arr = explode('@', $text);
    $index = 0;

    for ($i=0; $i < count($arr)-1; $i=$i+2) { 
      $render = $render.add($arr[$i], $arr[$i+1], $i);
    }

    // for ($i=0; $i < count($array); $i++) { 
    //     $render = $render.add($array[$i]['header'], $array[$i]['content'], $i);
    // }

    file_put_contents('output.txt', $render, FILE_APPEND);
?>