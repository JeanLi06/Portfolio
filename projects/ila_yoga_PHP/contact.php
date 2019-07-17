 <?php include("header.php"); ?>

<section id="contact">
 <h3>Réserver votre place pour le prochain cours de Yoga du rire !</h3>

 <table>
	<caption>Yoga du rire avec Jacqueline (Paris)</caption>
	<tbody>
	<tr>
		<td>05 Janvier 2016</td>
		<td>15h30</td>
		<td>Réserver ce créneau</td>
	</tr>
	<tr >
		<td>10 Janvier 2016</td>
		<td>16h30</td>
		<td>Réserver ce créneau</td>
	</tr>
	<tr>
		<td>15 Janvier 2016</td>
		<td>15h30</td>
		<td>Réserver ce créneau</td>
	</tr>
	<tr>
		<td>20 Janvier 2016</td>
		<td>16h30</td>
		<td>Réserver ce créneau</td>
	</tr>
	</tbody>
</table>
<p></p>
 <table>
	<caption>Yoga du rire avec Roger (Marseille)</caption>
	<tr>
		<td>05 Janvier 2016</td>
		<td>15h30</td>
		<td>Réserver ce créneau</td>
	</tr>
	<tr>
		<td>10 Janvier 2016</td>
		<td>16h30</td>
		<td>Réserver ce créneau</td>
	</tr>
	<tr>
		<td>15 Janvier 2016</td>
		<td>15h30</td>
		<td>Réserver ce créneau</td>
	</tr>
	<tr>
		<td>20 Janvier 2016</td>
		<td>16h30</td>
		<td>Réserver ce créneau</td>
	</tr>
</table>

<p>Pour valider votre réservation, compléter ce formulaire :	</p>
<form method="post" action="formulaire.php">
	<p id="formulaire">
	<fieldset>
		<legend>Vos coordonnées</legend>
		<ul>
			<li><label for="prenom">Votre prénom : </label><input type="text" name="prenom" id="prenom"></li>
			<li><label for="nom">Votre nom : </label><input type="text" name="nom" id="nom"></li>
			<li><label for="email">Votre mail : </label><input type="email" name="email" id="email"></li>
		</ul>
</fieldset>
<fieldset>
		<legend>Quelles sont les raisons de votre venue ?</legend>
	<ul>
		<li><label for="detente">Besoin de me détendre </label><input type="checkbox" name="detente" id="detente" /></li>
		<li><label for="medecin">Mon médecin m'a conseillé de venir </label><input type="checkbox" name="medecin" id="medecin"></li>
		<li><label for="amis">Je veux tester avec des amis </label><input type="checkbox" name="amis" id="amis"></li>
	</ul>
</fieldset>

<fieldset>
	<legend>Voulez-vous souscrire à notre programme de fidélité ?</legend>
		<ul>
			<li><label for="fidelite">Oui </label><input type="radio" name="fidelite" value="oui" id="oui"></li>
		<li><label for="fidelite">Non </label><input type="radio" name="fidelite" value="non" id="non"></li>
	</ul>
</fieldset>


<fieldset>
		<legend>Comment avez-vous connu Ila Yoga ?</legend>
		<select name="connu" id="connu">
			<option value="intenet">Par Intenet</option>
			<option value="amis">Par des amis</option>
			<option value="presse">Dans la presse</option>
			<option value="autre">Autre</option>
		</select>
</fieldset>
	<input type="submit" value="Envoyer" id="envoyer" />
</p><!--  fin formulaire -->
</form>
</section>

<?php include("footer.php"); ?>