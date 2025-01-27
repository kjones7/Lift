<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php

    use Doctrine\DBAL\DriverManager;
    use Doctrine\DBAL\Exception;

    // Autoload dependencies
    require 'api/vendor/autoload.php';

    try {
        // Retrieve DATABASE_URL from environment
        $databaseUrl = getenv('DATABASE_URL');

        if (!$databaseUrl) {
            throw new Exception('DATABASE_URL environment variable is not set.');
        }

        // Parse and use the DATABASE_URL
        $connectionParams = [
            'url' => $databaseUrl,
        ];

        // Create a connection
        $connection = DriverManager::getConnection($connectionParams);

        // Test the connection
        $connection->connect();

        echo "Database connection successful!" . PHP_EOL;
    } catch (Exception $e) {
        echo "Database connection failed: " . $e->getMessage() . PHP_EOL;
    }

    ?> 

</html>