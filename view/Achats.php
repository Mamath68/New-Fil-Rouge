<?php
/*$strRqArticle = "SELECT * FROM articles";*/
$strPage = "article";
include('Partiel/connect.php');

echo "<title>Acheter</title>";
//intCat = catégories en integral
$intCat = $_POST['cat'] ?? '';
//strLib = Libéllé en strings
$strLib = $_POST['lib'] ?? '';
//boolstock = stock en boolean, oui ou non, 1 ou 0
$boolStock = $_POST['stock'] ?? 1;

//$strRqArticle 	= "SELECT * FROM articles" = selectionné Tout de la table articles;
$strRqArticle = "SELECT * 
						FROM articles
						/* ajout proid=provider_id(id fournisseur)de la table provider(fournisseur) */
							INNER JOIN provider ON articles_proid = provider_id";
//strwhere = where = remplacement du where par $strwhere
$strWhere = " WHERE";
// Recherche par catégorie
//if = requete, verificatin, si c'est comme ça, alors ça, sinon, autre chose
if ($intCat != '') {
	$strRqArticle .= $strWhere . " articles_cat = " . $intCat;
	$strWhere = " AND ";
}
// Recherche par libellé
if ($strLib != '') {
	$strRqArticle .= $strWhere . " articles_lib LIKE '%" . $strLib . "%'";
	$strWhere = " AND ";
}
// Recherche par stock
if ($boolStock == 1) {
	$strRqArticle .= $strWhere . " articles_stock > 0";
} else {
	$strRqArticle .= $strWhere . " articles_stock < 1";
}

$strRqArticle .= " ORDER BY articles_proid ";
//echo $strRqArticle;
$arrArticles = $db->query($strRqArticle)->fetchAll();


// Liste des catégories disponibles en bdd
$strRqCat = "SELECT DISTINCT articles_cat FROM articles;";
//arrcat = array = tableau
$arrCat = $db->query($strRqCat)->fetchAll();
?>

<h2>Liste des articles</h2>


<div class="card">
	<div class="card-header">
		Recherche
	</div>
	<div class="card-body">
		<!--form = formulaire-->
		<form action="" method="post">
			<div class="row mb-3">
				<!--label for = choix-->
				<label for="cat" class="col-sm-2 col-form-label">Catégories</label>
				<div class="col-sm-10">
					<!--select = selectionner une catégorie-->
					<select class="form-select" id="cat" name="cat">
						<!--option = choix des catégories-->
						<option <?php if ($intCat == '') {
							echo "Selected";
							//value="" = valeur
						} ?> value=""> -- </option>
						<!--foreach = pour chacun-->
						<?php foreach ($arrCat as $arrDetCat) {
							?>
							<option <?php if ($intCat == $arrDetCat['articles_cat']) {
								echo "Selected";
							} ?> value="<?php echo $arrDetCat['articles_cat']; ?>">
								<?php echo $arrDetCat['articles_cat']; ?>
							</option>
							<?php
						} ?>
					</select>
				</div>
			</div>

			<div class="row mb-3">
				<label for="lib" class="col-sm-2 col-form-label">Libellé</label>
				<div class="col-sm-10">
					<input id="lib" class="form-control" type="text" name="lib" value="<?php echo $strLib; ?>" />
				</div>
			</div>

			<fieldset class="row mb-3">
				<legend class="col-form-label col-sm-2 pt-0">En stock</legend>
				<div class="col-sm-10">
					<div class="form-check">
						<!--input= inserer ; radio = choix unique; check = verification si selectionné, conserver, si non, rien selectionner-->
						<input id="stock1" class="form-check-input" type="radio" name="stock" value="1" <?php if ($boolStock == 1) {
							echo "checked";
						} ?> />
						<label class="form-check-label" for="stock1">Oui</label>
					</div>
					<div class="form-check">
						<input id="stock0" class="form-check-input" type="radio" name="stock" value="0" <?php if ($boolStock == 0) {
							echo "checked";
						} ?> />
						<label class="form-check-label" for="stock0">Non</label>
					</div>
				</div>
			</fieldset>
			<!--button submit = bouton envoyer-->
			<div class="col-12">
				<button class="btn btn-primary" type="submit">Rechercher</button>
			</div>
		</form>
	</div>
</div>
<!--table = tableau-->
<table class="table table-responsive table-bordered table-sm">
	<thead>
		<!--tr = ligne-->
		<tr>
			<!--th = header-->
			<th>Libellé</th>
			<th>Fournisseur</th>
			<th>Image</th>
			<th>Prix vente</th>
			<th>Quantité en stock</th>
			<th>Catégorie</th>

		</tr>
	</thead>
	<tbody>
		<?php
		//var_dump($arrArticles);
		foreach ($arrArticles as $arrDetArticle) {
			?>
			<tr>
				<!--colonne-->
				<td>
					<?=$arrDetArticle['articles_lib']?>
				</td>
				<td>
					<?=$arrDetArticle['provider_name']?>
				</td>
				<td>
					<img src="public/img/Instruments/<?= $arrDetArticle['articles_img'] ?>">
					<?= $arrDetArticle['articles_img'] ?>
				</td>
				<td>
					<?=$arrDetArticle['articles_sellprice'] ?> €
				</td>
				<td>
					<?=$arrDetArticle['articles_stock']?>
				</td>
				<td>
					<?=$arrDetArticle['articles_cat']?>
				</td>

			</tr>

			<?php
		}
		?>
	</tbody>
</table>

</body>

</html>