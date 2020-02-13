
<?php
include 'ShootInterface.php';
include 'PushButtonInterface.php';


	interface tikling extends ShootInterface,PushButtonInterface
	{
		public function shootpush();

	}
    class Game implements tikling
    {
    
        public function setPushButton()
        {
            echo 'Button is pushed'."<br>";
        }
        public function setShoot()
        {
        	echo "Shoot! "."<br>";
        }
        public function shootpush()
        {
        	echo "";
        }
    
    }
$obj = new Game;
$obj->setPushButton();
$obj-> setShoot();
$obj-> shootpush();
?>
