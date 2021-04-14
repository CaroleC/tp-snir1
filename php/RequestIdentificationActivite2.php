<html>
	<head>
	</head>
	<body>
		<?php
				include "ConnectBase.php";		//----- Inclure le fichier -------

				$identifiant = $_GET['id'];
				$password = $_GET['pwd'];



				$id = ConnectBase();			//------ Connexion à la BdD ------

				if ($id)				//------ Test Si Connexion réussie -----
				{
				//----------------------------------------------------------------------
				//------  Envoyer la requête    ----------------------------------
				$requete = "SELECT pwd FROM user WHERE pseudo = '$identifiant' AND pwd = '$password'";
					//$requete = "SELECT * FROM user WHERE pwd = '".$password."'";
					//---- Préparation de la requête
					echo"Requête envoyée : $requete";
					$resultat = $id -> query($requete);			//---- Envoie de la requête

				//----------------------------------------------------------------------
				//------  Exploiter les résultats  --------------------------------
					$row = $resultat->fetch_array(MYSQLI_ASSOC);
					if ($row['pwd']=="LeMotDePasseEstBrav0"){
						/*$message = "C'est le bon mot de passe !";
						echo"Contenu de row[0] : $row[0]";
						echo "$message";*/
						echo '<script type="text/javascript">
						document.location.href="http://127.0.0.1/tp-snir1/Activite3.html"</script>';
					}
					else{
						/*$message = "Ce n'est pas le bon mot de passe !";
						echo"Contenu de row[0] : $row[0]";
						echo "$message";*/
						echo '<script type="text/javascript">
						document.location.href="http://127.0.0.1/tp-snir1/Activite2.html"</script>';

						exit();
					}
					//----------------------------------------------------------------------
					//------  Libérer les résultats  ----------------------------------
					//----------------------------------------------------------------------
					$id -> close();			//------ Déconnexion de la BdD ------
				}
				else
				{
					echo "Connexion à la BdD échouée";
				}
			?>
	</body>
</html>
