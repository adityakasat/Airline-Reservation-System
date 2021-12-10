<?php
class Airline_Reservation{
  
  // Properties
  public $user, $mob, $address, $email, $password;
  public $source, $destination, $date, $passengers, $FlightName;
  public $customerId, $flightId, $query;

  // Methods
  function user($user, $mob, $address, $email, $password) {
    $this->user = $user;
    $this->mob = $mob;
    $this->address = $address;
    $this->email = $email;
    $this->password = $password;
      
      return validation.php
  }

  function customer($email, $password) {
    $this->email = $email;
    $this->password = $password;
      
      return registration.php
  }

  function ticket($source, $destination, $date, $passengers, $FlightName, $FlightNumber) {
    $this->source = $source;
    $this->destination = $destination;  
    $this.date = $date;
    $this.passengers=$passengers;
    $this.flightName=$flightName;
    $this.$FlightNumber=$$FlightNumber;
      
      return ticket.php
      
      
  }

  function Booked_Flight($customerId, $flightId, $dateOfBooking) {
    $this->customerId = $customerId;
    $this->flightId = $flightId;  
    $this.dateOfBooking = $dateofBooking;
      
      return mybook.php
  }

  function cancellation($customerId, $flightId) {
   $this.customerId=$customerId;
   $this.flightId=$flightId;
      
      return ticket.php
  }

  function Customer_Support ($user, $email, $flightName, $query) {
    $this->user = $user;
    $this->email = $email;
    $this.flightName=$flightName;
    $this.query=$query;
      
      return enqi.php
  }

  
?>