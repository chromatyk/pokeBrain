<form action="#" method="post" enctype="multipart/form-data">

    <input id="input-1" type="text" placeholder="John Doe" required autofocus />
    <label for="input-1">
        <span class="label-text">Nom du pokémon</span>
        <div class="signup-button-trigger">Sign Up</div>
    </label>

    <input id="input-2" type="text" placeholder="john" required />
    <label for="input-2">
        <span class="label-text">Surnom de ton pokémon</span>
    </label>

    <label>Version : </label>
    <select name="versionSelected" id="versionSelected">
        <option>Versions</option>
        <?php
        foreach ($allVersion as $allVersion) {
            ?><option value="<?= $allVersion->id ?>"><?= $allVersion->version ?></option><?php
        }
        ?>
    </select>


    <label>Methode : </label>
    <select name="methodSelected" id="allMethodsByVersion">
        <option>Méthodes</option>
    </select>


    <input id="input-5" type="text" placeholder="egzhjrre" required />
    <label for="input-5">
        <span class="label-text">Avais-tu le charme Chroma ?</span>
    </label>
    <input id="input-6" type="text" placeholder="tjzergtzeg" required />
    <label for="input-6">
        <span class="label-text">Nombre de recontre</span>
    </label>
    <input id="input-7" type="text" placeholder="grhrjt" required />
    <label for="input-7">
        <span class="label-text">Date de la capture</span>
    </label>
    <input id="input-8" type="text" placeholder="fzfz" required />
    <label for="input-8">
        <span class="label-text">Ball de capture</span>
    </label>
    <button type="submit">Create Your Account</button>

</form>
</div>