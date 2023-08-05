<?php
$articles = $result['data']['articles'];
$category = $result['data']['category'];
?>
<h2>Bienvenu dans la boutique à Mathieu</h2>


<div class="card">
	<div class="card-header">
		Recherche
	</div>
	<div class="card-body">
		<!--form = formulaire-->
		<form action="inde.php?ctrl=Article&action=findByCategory" method="post">
			<div class="row mb-3">
				<!--label for = choix-->
				<label for="category" class="col-sm-2 col-form-label">Catégories</label>
				<div class="col-sm-10">
					<!--select = selectionner une catégorie-->
					<select name="id_category">
						<option value=" ">Categorie</option>
						<?php foreach ($category as $categorie) { ?>
							<option value="<?= $categorie->getId() ?> "><?= $categorie->getLibelle() ?></option>
						<?php }
						?>
					</select>
				</div>
			</div>

			<div class="row mb-3">
				<label for="lib" class="col-sm-2 col-form-label">Libellé</label>
				<div class="col-sm-10">
					<input id="lib" class="form-control" type="text" name="libelle" placeholder="Libelle">
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
			<th>Stock</th>
			<th>Catégorie</th>

		</tr>
	</thead>
	<tbody>
		<?php
		//var_dump($arrArticles);
		foreach ($articles as $article) {
			?>
			<tr>
				<!--colonne-->
				<td>
					<?= $arrDetArticle['articles_lib'] ?>
				</td>
				<td>
					<?= $arrDetArticle['provider_name'] ?>
				</td>
				<td>
					<img src="public/img/articles/<?= $arrDetArticle['articles_img'] ?>">
					<?= $arrDetArticle['articles_img'] ?>
				</td>
				<td>
					<?= $arrDetArticle['articles_sellprice'] ?> €
				</td>
				<td>
					<?= $arrDetArticle['articles_stock'] ?>
				</td>
				<td>
					<?= $arrDetArticle['articles_cat'] ?>
				</td>

			</tr>

			<?php
		}
		?>
	</tbody>
</table>

<?php

$title = "Boutique";