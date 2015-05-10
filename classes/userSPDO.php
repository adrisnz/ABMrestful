<?php
    class userSPDO extends PDO
    {
            private static $instance = null;
            CONST dsn ='mysql:host=localhost;dbname=2daw12_usuaris';
			CONST user='2daw12_adria';
			CONST password='2daw12_adria';

            public function __construct()
            {
                    
                    try{
                        parent::__construct(self::dsn,self::user,self::password);
                    }
                    catch (PDOException $e) {
                     echo 'Connection failed: ' . $e->getMessage();}

            }

            public static function singleton()
            {
                    if( self::$instance == null )
                    {
                            self::$instance = new self();
                    }
                    return self::$instance;
            }
            
    }