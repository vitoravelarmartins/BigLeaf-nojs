const app = require("./app.js");

let server = app.listen(8081, () => {
  let port = server.address().port
  console.log("Servidor rodando em http://localhost:%s", port)
})
