

## Covid-19 Ao Api

Covid-19 Ao Api is an Angolan API created to show in real time the information about the cases of the corona virus detected in the Angolan territory.

[Click here to see results in your browser](https://covid-19-ao.herokuapp.com/api/general)

## Covid-19 Ao (Plataform)
[In the home directory] (https://covid-19-ao.herokuapp.com/), you can find the platform, which can provide the same results as the API, accompanied also with "prevention tips" and one online for covid-19 dysguinostico based on the answers.

## Endpoitns
| Endpoint       | Description   | Type     | Description   |
| ---            | ---           | ---      | ---           |
| https://covid-19-ao.herokuapp.com/api/general | It returns the lastest update from governmant reports. | Object |
| https://covid-19-ao.herokuapp.com/api/report | It returns the updates from each day, since the API was created. | Array of objects |
| https://covid-19-ao.herokuapp.com/api/tips?lang=pt | It returns prevention tips in portuguese. You can change the language (available: en, pt, es, fr) | Array of objects |

## Usage (Javascript)

```javascript
fetch(`https://angola-pna.herokuapp.com/api/general/`, {
        method: 'get',
        headers: {
            'Content-Type': 'application/json'
        },

    }).then((response) => response.json())
        .then((res) => {
            console.log(res)
        }).catch((error) => {
            console.error(error)
    });
```

---

## Usage (Php)

```php
$url ='https://angola-pna.herokuapp.com/api/general/';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 3);
$response = trim(curl_exec($ch));
curl_close($ch);

echo $response;
```

---
## Usage (Python)

```python

response = requests.get('https://angola-pna.herokuapp.com/api/general/')
print(response)
```

---
## Usage (Dart)

```dart
import 'package:http/http.dart' as http;

Future<http.Response> fetchPhone() {
  return http.get('https://angola-pna.herokuapp.com/api/general/');
}
```

---
## Usage (Go)

```Go
import (
  "fmt"
  "net/http"
  "io/ioutil"
)

func Fetch() {
  url := fmt.Sprintf("https://angola-pna.herokuapp.com/api/general")

  client := &http.Client {}
  req, err := http.NewRequest("GET", url, nil)

  if err != nil {
    fmt.Println(err)
  }
  res, err := client.Do(req)
  defer res.Body.Close()
  body, err := ioutil.ReadAll(res.Body)

  fmt.Println(string(body))
}
```

---

## Contributing

You can always contribute for the improvment of this project, send an email to join this project.


