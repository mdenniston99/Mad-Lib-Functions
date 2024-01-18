<?php
function generateStory($singular_noun, $verb, $color, $distance_unit) {
  $story = "The $singular_noun are lovely, $color, and deep.\n
But I have promises to keep,\n
And $distance_unit to go before I $verb,\n
And $distance_unit to go before I $verb.";
return $story;
}

echo generateStory("dog", "eat", "purple", "10 miles");
echo generateStory("car", "cook", "vermilion", "10 feet");
echo generateStory("empty void", "speak","red","25 miles");
