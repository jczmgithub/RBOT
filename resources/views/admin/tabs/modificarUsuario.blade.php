<div id="ModificarUsu" class="tabcontent">
    <?php foreach ($users as $user): ?>
    <p>
        nombre: <?=$user['name']?>
        <br>
        email: <?=$user['email']?>
    </p>
    <?php endforeach ?>
</div>