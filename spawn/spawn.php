<?php

function new_spawn($db,$id) {
    $request = $db->prepare('
    SELECT * FROM spawn WHERE id != ?      
        ');

    $request->execute([$id]);
    
    $result = $request->fetchAll();
    $max = sizeof($result);
    return $result[rand(0,$max-1)];
}

function add_spawn($db,$x,$y){
    $request = $db->prepare('
    INSERT INTO liste (x,y) VALUES (?,?)');
    $request->execute([$x,$y]);
}