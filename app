----- rand numbers -----
$array = [];
for($i = 0;$i <= 5; $i++){
    $number = rand(1,60);
    if(!in_array($number,$array)){
        array_push($array,$number);
    }
    else{
        $i--;
    }
}
sort($array);
print_r($array);


----- NODE -----
var http = require('http');
http.createServer(function (req, res) {
  res.writeHead(200, {'Content-Type': 'text/plain'});
  res.end('Hello Node.JS!');
}).listen(8080);
console.log('Server running at http://localhost:8080/');


----- formulario bootstrap (mystuff crud)

----- select second row -----
SELECT * from table LIMIT 1 OFFSET 1
