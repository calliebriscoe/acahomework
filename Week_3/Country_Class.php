<?php

class CountryInformation
{

  const API_URL = 'http://restcountries.eu/rest/v1/name/';

  protected $countryName;

  protected $capital;

  protected $region;

  protected $population;

  protected $languages;

  public function __construct($countryName)
  {
    $this ->countryName = $countryName;

    $rawData = $this->getEndpointData();
    $dataArray = $this->convertJsonToArray($rawData);
    $this->populateProperties($dataArray);
  }

  public function getEndpointData()
  {
      return file_get_contents(self::API_URL . $this->countryName);
  }
  public function convertJsonToArray($rawData)
   {
       $jsonArray = json_decode($rawData, JSON_OBJECT_AS_ARRAY);
       if (sizeof($jsonArray) == 1 && !empty($jsonArray)) {
           return array_pop($jsonArray);
       } else {
           return null;
       }
   }

   public function populateProperties($dataArray)
   {
     if(empty($dataArray)) {
       throw new Exception('No data found for country ' . $this->counrtyName);
     }
       $this ->countryName = $dataArray['name'];
       $this ->capital = $dataArray['capital'];
       $this ->region = $dataArray['region'];
       $this ->population = number_format($dataArray['population']);
       $this ->languages = $dataArray['languages'];


     }
  public function getCountryName(){
  return $this->countryName;
}

public function setCountryName($countryName){
  $this->countryName = $countryName;
}

public function getCapital(){
  return $this->capital;
}

public function setCapital($capital){
  $this->capital = $capital;
}

public function getRegion(){
  return $this->region;
}

public function setRegion($region){
  $this->region = $region;
}

public function getPopulation(){
  return $this->population;
}

public function setPopulation($population){
  $this->population = $population;
}

public function getLanguages(){
  return implode(',',$this->languages);
}

public function setLanguages($languages){
  $this->languages = $languages;
}
}


$countryInfo = new CountryInformation('Mexico');
echo '<pre>';
print_r($countryInfo);

?>
<html>

    <head>
        <title>Countries on Earth</title>
    </head>

    <body>

        <h3>Countries on Earth</h3>

        <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
            Enter Country Name: <input type="text" name="country_name" size="30"/>
            <input type="submit" value="Get Details"/>
        </form>

        <hr/>

        <?php

        // Check for an incoming POST request
        if ($_POST) {



            $countryName = $_POST['country_name'];
            $info = new CountryInformation($countryName);

            echo 'The user entered the country: ' . $countryName . '</br>';
            echo 'The Capital is: ' . $info->getCapital() . '</br>';
            echo 'The region is: ' . $info->getRegion() . '</br>';
            echo 'The population is: ' . $info->getPopulation() . '</br>';
            echo 'The languages are: ' . $info->getLanguages() . '</br>';

            // Hint: To access data in a stdClass object use the -> operator
            // $data->name = 'Samir'; echo $data->name;
        }
        ?>

    </body>

</html>
