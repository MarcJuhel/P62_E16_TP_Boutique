<?php
    require_once('data/data.php');
?>

/*Affichage du catalogue*/
<ul>
<?php foreach ($data as $id => $item) { ?>
    <li>
        <div>
            <?= $item['nom'] ?>
            <p><?</p>
            <img src="<?= $item['photo']?>" alt=""/>
            
        </div>
            </li>
    
    
    
        ?>
        
    }
?>
</ul>
