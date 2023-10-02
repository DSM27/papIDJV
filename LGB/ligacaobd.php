<?php
					$databaseHost = 'localhost';
          $databaseName = 'bdpapdavid';
          $databaseUsername = 'root';
          $databasePassword = '';

          $ligacao = mysqli_connect($databaseHost, $databaseUsername,
          $databasePassword, $databaseName );

          if (!$ligacao) {
            die("Falha na ligação: " . mysqli_connect_errno() .
                    ":" . mysqli_connect_error() );
          } ?>
