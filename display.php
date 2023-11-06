<?php 

class Info{
    public int $id;
    public string $name;
    
    public string $email;
    
    public string $gender;

    public string $city;
}

$pdo = new PDO('mysql:host=127.0.0.1;dbname=asgn',
        'root',
        ''
);
    $statement = $pdo->prepare('select * from registration');//prepares query to be fired
//object statement mei aa jayega

    $statement->execute();
    
    $info=$statement->fetchAll(PDO::FETCH_CLASS,'Info');
        echo '<center><table border = "3" ><tr>';
    foreach($info as $i){
        echo '<td>'.$i->name.'</td><td>'.$i->email;
        echo '</td><td>'.$i->gender.'</td><td>'.$i->city;'</td>';
        echo '</tr>';
    }
    echo '</table><br><a href="final_form.html">Add more Data</a></center>';
    ?>