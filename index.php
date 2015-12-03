<?php include("header.php"); ?>
<a href="/archives.php"> Archives </a>
<div id="form-main">
<div id="form-div">
<div class="champs">
<form class="form" id="form1" action="/goornot.php" method="post">
<p>
    <label for="">Nom client</label> <br />
        <input ="text" name="name" value="" />
</p>
<p>
    <label for="">Nom Projet</label> <br />
        <input ="text" name="projet" value="" />
</p>
<p>
    <p> Impact :</p>
    <p>
        <input class="" type="radio" name="imp" value="1" />
        <label for=""> 1 </label>
        <input class="" type="radio" name="imp" value="2" />
        <label for=""> 2 </label>
        <input class="" type="radio" name="imp" value="3" />
        <label for=""> 3</label>
        <input class="" type="radio" name="imp" value="4" />
        <label for=""> 4 </label>
    </p>

</p>
<br />
<p>
    <p> Intérêt pour Simplon :</p>
    <p>
        <input class="" type="radio" name="intSim" value="1" />
        <label for=""> 1 </label>
        <input class="" type="radio" name="intSim" value="2" />
        <label for=""> 2 </label>
        <input class="" type="radio" name="intSim" value="3" />
        <label for=""> 3</label>
        <input class="" type="radio" name="intSim" value="4" />
        <label for=""> 4 </label>
    </p>

</p>
<br />
<p>
    <p> Feeling avec le client :</p>
    <p>
        <input class="" type="radio" name="feel" value="1" />
        <label for=""> 1 </label>
        <input class="" type="radio" name="feel" value="2" />
        <label for=""> 2 </label>
        <input class="" type="radio" name="feel" value="3" />
        <label for=""> 3</label>
        <input class="" type="radio" name="feel" value="4" />
        <label for=""> 4 </label>
    </p>

</p>
<br />
<p>
    <p> Argent :</p>
    <p>
        <input class="" type="radio" name="cash" value="1" />
        <label for=""> 1 </label>
        <input class="" type="radio" name="cash" value="2" />
        <label for=""> 2 </label>
        <input class="" type="radio" name="cash" value="3" />
        <label for=""> 3</label>
        <input class="" type="radio" name="cash" value="4" />
        <label for=""> 4 </label>
    </p>

</p>
<br />
<p>
    <p> Délais :</p>
    <p>
        <input class="" type="radio" name="delais" value="1" />
        <label for=""> 1 </label>
        <input class="" type="radio" name="delais" value="2" />
        <label for=""> 2 </label>
        <input class="" type="radio" name="delais" value="3" />
        <label for=""> 3</label>
        <input class="" type="radio" name="delais" value="4" />
        <label for=""> 4 </label>
    </p>

</p>
<br />
<p>
    <p> Technos :</p>
    <p>
        <input class="" type="radio" name="tech" value="1" />
        <label for=""> 1 </label>
        <input class="" type="radio" name="tech" value="2" />
        <label for=""> 2 </label>
        <input class="" type="radio" name="tech" value="3" />
        <label for=""> 3</label>
        <input class="" type="radio" name="tech" value="4" />
        <label for=""> 4 </label>
    </p>

</p>
<br />
<p>
    <input type="submit" value="valider"/>
</p>


</form>
</div>
</div>
</div>
F<?php include ("footer.php"); ?>