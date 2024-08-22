<?php
	define('HOST', 'localhost');
	define('DBNAME', 'banco');
	define('CHARSET', 'utf8');
	define('USER', 'root');
	define('PASSWORD', '');

	class Conexao {
		
		private static $pdo;
		
		public static function getInstance() {
			if (!isset(self::$pdo)) {
				try {
					$opcoes = array(\PDO::MYSQL_ATTR_INIT_COMMAND => 
					'SET NAMES UTF8');
					self::$pdo = new \PDO("mysql:host=" . HOST . ";dbname=" .
					DBNAME . ";charset=" . CHARSET, USER, PASSWORD, $opcoes);
					self::$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::
					ERRMODE_EXCEPTION);
				} catch (PDOException $e) {
					die("Erro na conexão: " . $e->getMessage());
				}
			}
			return self::$pdo;
		}
		
	   /*public static function isConectado() {
			return (self::$pdo instanceof \PDO);
		} */
	}
