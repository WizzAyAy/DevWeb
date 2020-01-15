<?php
    $articles = range("A","Z");
    
    function gener($n) {
        $tva = [0.05,0.10,0.20];
        $prix_rand = rand(0,100);
        $tva_rand = $tva[array_rand($tva)];
        
        return  ["prix"=>$prix_rand, "taux"=>$tva_rand];
    }
    
    $articles = array_fill_keys($articles, 0);
    $articles = array_map('gener', $articles);
    
    
    function tri ($a, $b){
        if($a["taux"] < $b["taux"])
            return -1;
        if($a["taux"] > $b["taux"])
            return 1;
            if($a["taux"] == $b["taux"]){
                if($a["prix"] < $b["prix"])
                    return 1;
                if($a["prix"] > $b["prix"])
                    return -1;
                if($a["prix"] == $b["prix"])
                    return 0;
            }
    }
        usort($articles, "tri");

    
    echo "<style>
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        }
        </style>";
    
    echo "<table><tr>";
    echo "<th>article</th>";
    echo "<th>prix</th>";
    echo "<th><a href='creer_tableau.php'>taux tva</a></th>";
    echo "<th>cout ht</th>";
    echo "<th>cout ttc</th>";
    echo "</tr>";
    
    foreach ($articles as $key=>$val){
        echo "<tr>";
        echo "<td>". ($key+1) ."</td>";
        echo "<td>". $val["prix"]*(1+$val["taux"]) ."</td>";
        echo "<td>".$val["taux"]."</td>";
        echo "<td>". $val["prix"] ."</td>";
        echo "<td style='background-color:red'>".$val["prix"]*(1+$val["taux"]) ."</td>";
        echo "</tr>";
    }
    
    echo "</table>";
    
?>