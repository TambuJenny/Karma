import { AlertError, AlertSucces } from "../components/Alert";
function Clear() {
  $("#pname").val(" ");
  $("#uname").val(" ");
  $("#email").val(" ");
  $("#ntelefone1").val(" ");
  $("#ntelefone2").val(" ");

  $("#pname").attr("placeholder", "Primeiro nome");
  $("#uname").attr("placeholder", "Ultimo nome");
  $("#email").attr("placeholder", "E-mail");
  $("#ntelefone1").attr("placeholder", "Numero de Telefone");
  $("#ntelefone2").attr("placeholder", "Nummero de Telefone alternativo");
}

function CadastrarUsuario() {
  var dataJson = {
    pNome: $("#pname").val(),
    uNome: $("#uname").val(),
    email: $("#email").val(),
    tele1: $("#ntelefone1").val(),
    tele2: $("#ntelefone2").val(),
    genero: $("#genero").val()
  };

  if (
    dataJson.pNome == "" ||
    dataJson.email == "" ||
    dataJson.genero == "" ||
    dataJson.tele1 == "" ||
    dataJson.tele2 == ""
  ) {
    alert("Campo Vazio, verifica os campos por favor !");
  } else {
    try {
      $.ajax({
        url: "../../applicationcore/Controllers/NewAccount.php",
        type: "POST",
        data: dataJson,
        success: function(data, status) {
          var jsonData = JSON.parse(data);
          //document.getElementById("alert").innerHTML = data;

          if (jsonData.code_response == "1") {
            document.getElementById("alert").innerHTML ="";
            document.getElementById("alert").innerHTML =  AlertSucces("Dados inserido com sucesso !");
            Clear();
          } else if (jsonData.code_response == "0") {
            document.getElementById("alert").innerHTML = AlertError(
              "Conta Existente, usa outros credencias."
            );
          }
        }
      });
    } catch (error) {}
  }
}

$("#btnCriar").click(() => {
  CadastrarUsuario();
});
