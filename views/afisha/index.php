<?php include ROOT . '/views/template/header/header.php'; ?>

<div class="spacing"></div>

<?php foreach($afishaList as $afishaItem): ?>
<div class="row">
    <div class="ml-auto col-md-1 afishaItemDate text-center">
        <h1><?php echo $afishaItem['day'] . '/' . $afishaItem['month'];?></h1><br>
        <h4><?php echo $afishaItem['dweek']; ?></h4>
    </div>
    <div class="col-md-3 afishaItemInfo text-center">
        <h4><?php echo $afishaItem['spectacleName']; ?></h4><br>
        <p><?php echo $afishaItem['adress']; ?></p><br>
        <p><?php echo $afishaItem['time']; ?></p>
    </div>
    <div class="col-md-1 afishaItemButton mr-auto text-center">
    <a href="/spectacle/view<?php echo $afishaItem['spectacleId'];?>">ПОДРОБНЕЕ</a>
    </div>
</div>
<div class="ml-auto col-md-6 mr-auto spacingBorder"></div>
<?php endforeach; ?>

<div class="spacing"></div>
<div class="spacing"></div>

<?php include ROOT . '/views/template/footer/footer.php'; ?>