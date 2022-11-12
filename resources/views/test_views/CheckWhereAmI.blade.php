<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @livewire('template.create')
    {{-- <input rows="5" cols="30" type="text" class="form-control" id="demo2" style="display: none; border:none; font-size: 50px; width:100%;"><br>
    <textarea rows="5" cols="30" type="text" class="form-control" id="demo"></textarea><br>
    <button onclick="getfingerprint()">Find Fingerprint</button>
    <script>
        function runFunction() {
            getLocation();
        }

        function getfingerprint() {
            var x = document.getElementById("demo2");
            if (x.style.display === "none") {
                x.style.display = "block";
            }
        }
        runFunction();
        var x = document.getElementById("demo");
        var y = document.getElementById("demo2");

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition, showError, {
                    maximumAge: 60000,
                    timeout: 5000,
                    enableHighAccuracy: true
                });
            } else {
                x.value = "Geolocation is not supported by this browser.";
            }
        }

        function showPosition(position) {
            // function to handle success
            function success() {
                var data = JSON.parse(this.responseText); //parse the string to JSON
                console.log(data['results'][0]['address_components'][5]['long_name']);
                x.value = data['results'][0]['formatted_address'];
                // console.log(data['results'][0]['address_components']);
                if (data['results'][0]['address_components'][5]['long_name'] == '14327' || data['results'][0][
                        'address_components'
                    ][5]['long_name'] == 14327) {
                    y.value = 'your inside the area and login complated successfully';
                } else {
                    y.value = 'your outside the area and login faild';
                }
                // console.log(data);
            }

            // function to handle error
            function error(err) {
                console.log('Request Failed', err); //error details will be in the "err" object
            }

            var xhr = new XMLHttpRequest(); //invoke a new instance of the XMLHttpRequest
            xhr.onload = success; // call success function if request is successful
            xhr.onerror = error; // call error function if request failed
            xhr.open('GET',
                'https://maps.googleapis.com/maps/api/geocode/json?language=ar&key=AIzaSyA0-aDu6GDrzZapOcgzMrZCwnyF0CLyNdw&latlng=' +
                position.coords.latitude + "," + position.coords.longitude
            ); // open a GET request
            xhr.send(); // send the request to the server.

        }

        function showError(error) {
            switch (error.code) {
                case error.PERMISSION_DENIED:
                    x.value = "User denied the request for Geolocation."
                    break;
                case error.POSITION_UNAVAILABLE:
                    x.value = "Location information is unavailable."
                    break;
                case error.TIMEOUT:
                    x.value = "The request to get user location timed out."
                    break;
                case error.UNKNOWN_ERROR:
                    x.value = "An unknown error occurred."
                    break;
            }
        }
    </script> --}}
</body>

</html>
