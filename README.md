## Who's currently playing?
**Simple webbapp for musicfestivals**

A simple webbapplication built in PHP to store data and Ajax to display data.
Features two divs that loops throught associative arrays in order to check if there's currently an artist playing.

## Demo

[DEMO](http://www.jeffdesign.se/whosplaying)
- note that the demo is designed to display dummy-artists every 5 seconds.
- in production - see #Installation below.

## Code Example
Core PHP function:
```sh
//Loop trought all arrays and get all data
      foreach ($arr as $val) {

      //Loop trought all ['start'] and ['end'] arrays in order to get date-data
      $artistBegin = $val['start'];
      $artistEnd = $val['end'];

//loop trought new data and if its true, print relative array
      while (($currentDate > $artistBegin) && ($currentDate < $artistEnd) && ($val['scene'] === "small") ) {
      if currentDate === artistDate then print all below
      echo '<div class="artist-container">';
      echo '<h3>' . $val['name'] . $val['date'] . '</h3>' . $val['img'] . '<h4 class="blink title-bg-green">' . '<span class="blink">' . $val['next'] . '</h4>' . '</span>';
      echo "</div>";
      break;
      } //end-while

      } //end-foreach
```


## Motivation
Not all festivals has their own mobile/webapp so I built this webapp because I wanted to know myself which artists that was currently playing on an unspecific festival.

## Installation

index.php only contains the markup while stage-1.php and stage-2.php contains the core functions.
Go to stage-1.php / stage-2.php and remove the last codeblock since it's only made for the demo.

Want to insert real artist data? Go to artist-data-stage-1.php / artist-data-stage-2.php and start inserting relative artist-data.

Want to make configurations to the ajax script? Go to main.js

Want to make configurations to the youtube api? Go to app.js (Code by Mio Rogvall)

## API

The core API function is in app.js where the API is listening on the artist-data.
The object is then placed inside the iframe in order to give the currently-playing-artists a youtube thumbnail.

- REMEMBER TO ADD APIKEY IN APP.JS

## Contributors

Main Dev:
Jeffrey Örnerstedt - Project Manager

- [jeffdesign.se](http://www.jeffdesign.se/)
- [linkedin](https://se.linkedin.com/in/jeffrey-%C3%B6rnerstedt-2b43b284)

API Dev - Mio Rogvall

- [linkedin](https://www.linkedin.com/in/mio-rogvall-998096118)

## License

The MIT License (MIT) **- Free Software, Hell Yeah!**

[jeffdesign.se](http://www.jeffdesign.se/)
