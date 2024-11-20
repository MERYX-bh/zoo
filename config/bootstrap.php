use Symfony\Component\Dotenv\Dotenv;

require dirname(__DIR__).'/vendor/autoload.php';

if (file_exists(dirname(__DIR__).'/.env')) {
    (new Dotenv())->bootEnv(dirname(__DIR__).'/.env');
}
(new Dotenv())->bootEnv(dirname(__DIR__).'/.env');

dump($_ENV['DATABASE_URL'] ?? 'DATABASE_URL not set in $_ENV');
dump(getenv('DATABASE_URL') ?? 'DATABASE_URL not set in getenv');
die();
