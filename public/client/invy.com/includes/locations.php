<?php
function invy_location_options($selected = 'Dubai, UAE') {
  $locations = [
    'Dubai, UAE',
    'Abu Dhabi, UAE',
    'Sharjah, UAE',
    'Ajman, UAE',
    'Ras Al Khaimah, UAE',
    'Fujairah, UAE',
    'Umm Al Quwain, UAE',
    'Toulouse, France',
    'Marrakech, Morocco',
  ];

  foreach ($locations as $location) {
    $isSelected = $location === $selected ? ' selected' : '';
    echo '<option value="' . htmlspecialchars($location) . '"' . $isSelected . '>' . htmlspecialchars($location) . '</option>';
  }
}
