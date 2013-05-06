<!DOCTYPE html public "-//W3C//DTD HTML 4.0 //EN">
<html>
<head>
<title>Web Database Programming With PHP and MySQL: Object Oriented Programming - Class Activity</title>
</head>
<body bgcolor="#f9f9f9">

<?php



// Definition of the class FamilyCar

//

class FamilyCar

{

    // Member variables

/*
PLACE YOUR MEMBER VARIABLES HERE
*/ 

private $odometerLimitMiles=999999.9;
private $odometerCurrentMiles=0.0;
private $fuelTankCapacityGallons=16.0;
private $fuelTankCurrentGallons=0.0;
private $mpgCity=24.0;
private $mpgHighway=29.0;




    // Member function which adds $g gallons to the fuel tank, default $g to 1
function addFuel($g=1){
    $this->fuelTankCurrentGallons+=$g;
    if($this->fuelTankCurrentGallons > $this->fuelTankCapacityGallons)
    {
        $this->fuelTankCapacityGallons=16;
        echo("<p>The fuel capacity was exceeded</p>");
    }
}

function driveVehicule($terrain,$miles){
    switch($terrain)
    {
        
    }
}

/*
PLACE YOUR MEMBER FUNCTIONS HERE
*/ 

function queryOdometer()
{
    return $this->odometerLimitMiles;
}


function queryFuel()
{
    return $this->fuelTankCurrentGallons;
}

}

// Create a new familyCar object

$fordRanger = new FamilyCar ;

// Call the queryOdometer() function

$fordRanger->queryOdometer() ;

// Call the queryFuel() function

$fordRanger->queryFuel() ;



// Add 14.2 gallons of fuel

print "<br>??? Add 14.2 gallons of fuel." . "<br>" ;

$fordRanger->addFuel(14.2) ;

// Call the queryOdometer() function

$fordRanger->queryOdometer() ;

// Call the queryFuel() function

$fordRanger->queryFuel() ;



// Drive 48 miles in the city

print "<br>??? Drive 48 miles in the city." . "<br>" ;

$fordRanger->driveVehicle("city",48) ;

// Call the queryOdometer() function

$fordRanger->queryOdometer() ;

// Call the queryFuel() function

$fordRanger->queryFuel() ;



// Drive 290 miles on the highway

print "<br>??? Drive 290 miles on the highway." . "<br>" ;

$fordRanger->driveVehicle("highway",290) ;

// Call the queryOdometer() function

$fordRanger->queryOdometer() ;

// Call the queryFuel() function

$fordRanger->queryFuel() ;



// Add 100 gallons of fuel

print "<br>??? Add 100 gallons of fuel." . "<br>" ;

$fordRanger->addFuel(100) ;

// Call the queryOdometer() function

$fordRanger->queryOdometer() ;

// Call the queryFuel() function

$fordRanger->queryFuel() ;



// Add 2 gallons of fuel

print "<br>??? Add 2 gallons of fuel." . "<br>" ;

$fordRanger->addFuel(2) ;

// Call the queryOdometer() function

$fordRanger->queryOdometer() ;

// Call the queryFuel() function

$fordRanger->queryFuel() ;



// Drive 290,000 miles on the highway

print "<br>??? Drive 290,000 miles on the highway." . "<br>" ;

$fordRanger->driveVehicle("highway",290000) ;

// Call the queryOdometer() function

$fordRanger->queryOdometer() ;

// Call the queryFuel() function

$fordRanger->queryFuel() ;

?>

</body>
</html>