<form action="#" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="form-group col-lg-offset-2 col-lg-3">
            <p><label>Version : </label></p>
            <select name="versionSelected" id="versionSelected" class="btn">
                <option>Versions</option>
                <?php
                foreach ($allVersion as $allVersion) {
                    ?><option value="<?= $allVersion->id ?>"><?= $allVersion->version ?></option><?php
                }
                ?>
            </select>
        </div>
        <div class="form-group col-lg-offset-2 col-lg-3">
            <p><label>Methode : </label></p>
            <select name="methodSelected" id="allMethodsByVersion" class="btn">
                <option>Méthodes</option>
            </select>
        </div>
    </div>
</form>
</div>