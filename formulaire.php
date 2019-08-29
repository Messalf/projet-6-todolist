<?php
    //Récupère les donneés envoyer
    $input = $_POST['input'];
    $check = $_POST['checked'];
    //Decode le fichier json
    $json = json_decode(file_get_contents("todo.json"));
    $newArr = array('todo' => $input,'checked' => $check);
    $isFinded = false;

    for($index = 0; $index < count($json);$index++){
        $find = $json[$index]->todo;

        echo $find;

        if($find == $input){
            if($check == "true")
                $json[$index]->checked = true;
            else
                $json[$index]->checked = false;
            $isFinded = true;
            break;
        }
    }
    if(!$isFinded){
        //Push dans le tableau qui est le fichier json
        array_push($json,$newArr);
    }
    //Permet d'écrire dans le fichier
    if(file_put_contents("todo.json",json_encode($json))){
        echo "Data writed";
    }else{
        echo "Data not writed";
    }
?>