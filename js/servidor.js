const http = require("http");

function sitioweb(req, res) {
  res.writeHead(200, { "Content-type": "text/html" });
  res.end("Primer Servidor");
}

let servidor = http.createServer(sitioweb);

servidor.listen(6969, "192.168.1.1");
console.log("Servidor corriendo en 6969");
