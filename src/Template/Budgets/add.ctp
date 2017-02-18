<?php
/**
  * @var \App\View\AppView $this
  */
  
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Budgets'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="budgets form large-9 medium-8 columns content">
    <?= $this->Form->create($budget) ?>
    <fieldset>
        <legend><?= __('Add Budget') ?></legend>
        <?php
            echo $this->Form->input('username', ['options' => $users]);
            echo $this->Form->input('source_latitude');
            echo $this->Form->input('destination_latitude');
            echo $this->Form->input('cost');
            echo $this->Form->input('delivery_time_estimated');
            echo $this->Form->input('source_longitude');
            echo $this->Form->input('destination_longitude');
        ?>
        <div id="map"></div>
    </fieldset>
    
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>


<script>

var map;

function initMap() {
  var markers = 0;
  var origin, destination;
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 09.067, lng: -079.3871},
    zoom: 11
  });
  google.maps.event.addListener(map, 'click', function(event) {
     placeMarker(event.latLng);
  });

  function placeMarker(location) {
    console.log(location);
    if (markers < 2){
      if (markers <1) {
        origin = location;
        document.getElementById('source-latitude').value= location.lat();
        document.getElementById('source-longitude').value= location.lng();
      } else {
        destination = location;
        document.getElementById('destination-latitude').value= location.lat();
        document.getElementById('destination-longitude').value= location.lng();
      }
      
      var marker = new google.maps.Marker({
          position: location,
          map: map
      });
      if (markers == 1) {
        var service = new google.maps.DistanceMatrixService();
        service.getDistanceMatrix(
          {
            origins: [origin],
            destinations: [destination],
            travelMode: google.maps.TravelMode.DRIVING,
          }, callback);

        function callback(response, status) {
          var cost;
          if(status === "OK"){
            cost = response.rows[0].elements[0].distance.value;            
            document.getElementById('cost').value = cost;
          }
        }
      }
      markers++;
    }
  }
};

</script>
