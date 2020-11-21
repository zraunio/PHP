<?PHP
include_once("Fleet.class.php");
include_once("Spaceship.class.php");
include_once("Traits.class.php");

class Flowership extends Spaceship
{
	use Terror, Canon;

	public function __construct()
	{
		parent::__construct("Flower Ship");
	}

	public function getName()
	{
		return $this->_name;
	}
}

class FluffyTeddy extends Spaceship
{
	use Destroyer, HeavySpear;

	public function __construct()
	{
		parent::__construct("Fluffy Teddy");
	}

	public function getName()
	{
		return $this->_name;
	}
}

$fleet1 = new Fleet();
$fleet2 = new FLeet();

$fleet1->gather(new Flowership());
$fleet2->gather(new Flowership());
$fleet1->gather(new FluffyTeddy());
$fleet1->gather(new FluffyTeddy());

$fleet1->gather(new Flowership());
$fleet2->gather(new Flowership());
$fleet1->gather(new FluffyTeddy());
$fleet1->gather(new FluffyTeddy());

$testship = new Flowership;
$testship->setName();

$requested_fighters = Array(
	"Flower Ship of Doom",
	"Fluffy Teddy The Destroyer",
);

$actual_fighters = Array(
);

foreach ($requested_fighters as $rf) {
	$f = $fleet1->send_out($rf);
	if ($f != null) {
		array_push($actual_fighters, $f);
	}
}

foreach ($requested_fighters as $rf) {
	$f = $fleet2->send_out($rf);
	if ($f != null) {
		array_push($actual_fighters, $f);
	}
}
?>
