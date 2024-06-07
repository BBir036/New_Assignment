<?php

function bfs($graph, $start) {
  $visited = array(); 
  $queue = new SplQueue(); 

  $queue->enqueue($start);
  $visited[$start] = true;

  while (!$queue->isEmpty()) {
    $vertex = $queue->dequeue(); 

    echo $vertex . " ";

    foreach ($graph[$vertex] as $neighbor) {
      if (!isset($visited[$neighbor])) { 
        $queue->enqueue($neighbor); 
        $visited[$neighbor] = true; 
      }
    }
  }
}

$graph = array(
  0 => [1, 2],
  1 => [2, 3],
  2 => [0, 3, 4],
  3 => [1, 4],
  4 => [2]
);

bfs($graph, 0);

?>
