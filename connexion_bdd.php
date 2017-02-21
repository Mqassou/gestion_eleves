<?php	
try{
		$strConnection = ('mysql:host=localhost;dbname=gestion_note_efrei4');
		$pdo = new PDO($strConnection, 'root', ''); // Instancie la connexion
		$pdo->query("SET NAMES utf8"); // permet de gérer les accents dans MySQL
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//
				
		}
		catch(PDOException $e) {
			$msg ='ERREUR PDO dans ' . $e->getFile() . ' Ligne ' . $e->getLine() . ' : ' . $e->getMessage(); 
					
		}
				
?>