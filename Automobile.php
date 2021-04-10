class Automobile {

	public $Licence_Plate;
	public $Brand;
  public $Model;
  public $Model_year;
  public $Color;
  public function __construct ($Licence_Plate,$Brand,$Model, $Model_year, $Color){
    $this->licence = $Licence_Plate;
		$this->brand = $Brand;
    $this->model = $Model;
    $this->modelyear = $Model_year;
    $this->color = $Color;
	

} 
  public function __toString()
{
$string = (string) $this->Automobile;
        return $string;

}
$Automobile = newAutomobile();
echo $Automobile;
}
