function abrirMenu() {
    var x = document.getElementById("menu-mobile-links");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

function resultConversao() {
    //variaveis dos campos
    var valor = $("#campo-texto").val()
    var entrada = $("#campo-entrada").val()
    var converter = $("#campo-converter").val()

    $.ajax({
        type: "GET",
        url: "php/converter.php",
        data: {
            valor: valor,
            entrada: entrada,
            converter: converter
        },
        error: function () {
            alert("erro")
        },
        success: function (result) {
            if (result != 0) {
                $("#retorno").html(result)
            } else {
                alert("error")
            }
        }

    })//fechar ajax
}//fechar função



function resultQuadrado() {
    //variaveis dos campos
    var valor = $("#campo-quadrado").val()
    var medida = $("#campo-medida-quadrado").val()

    $.ajax({
        type: "GET",
        url: "php/calc-area-quadrado.php",
        data: {
            valor: valor,
            medida: medida
        },
        error: function () {
            alert("erro")
        },
        success: function (result) {

            if (result != 0) {
                $("#retorno-quadrado").html(result)
            } else {
                alert("error")
            }
        }

    })//fechar ajax
}//fechar função

function resultTriangulo() {

    var base = $("#campo-base").val()
    var altura = $("#campo-altura").val()
    var medida = $("#campo-medida-triangulo").val()

    $.ajax({
        type: "GET",
        url: "php/calc-area-triangulo.php",
        data: {
            base: base,
            altura: altura
                    //medida: medida
        },
        error: function () {
            alert("erro")
        },
        success: function (result) {
            if (result != 0) {
                $("#retorno-triangulo").html(result)

            } else {
                alert("error")
            }
        }
    })//fechar ajax
}//fechar função

function resultCirculo() {
    var raio = $("#campo-raio").val()

    $.ajax({
        type: "GET",
        url: "php/calc-area-circulo.php",
        data: {
            raio: raio
        },
        error: function () {
            alert("erro")
        },
        success: function (result) {
            if (result != 0) {
                $("#retorno-circulo").html(result)
            } else {
                alert("erro")
            }
        }

    })

}

//Elétrica
function resultVolts() {
    var correnteVolt = $("#campo-corrente-volt").val()
    var resistenciaVolt = $("#campo-resistencia-volt").val()


    $.ajax({
        type: "GET",
        url: "php/calc-leideohm-volt.php",
        data: {
            correnteVolt: correnteVolt,
            resistenciaVolt: resistenciaVolt
        },
        error: function () {
            alert("Erro Fatal")
        },
        success: function (result) {
            if (result != 0) {
                $("#retorno-volts").html(result)
            } else {
                alert("erro")
            }
        }

    })
}

function resultCorrente() {
    var tensaoCorrente = $("#campo-tensao-corrente").val()
    var resistenciaCorrente = $("#campo-resistencia-corrente").val()

    //alert(tensaoCorrente)

    $.ajax({
        type: "GET",
        url: "php/calc-leideohm-corrente.php",
        data: {
            tensaoCorrente: tensaoCorrente,
            resistenciaCorrente: resistenciaCorrente
        },
        error: function () {
            alert("Erro Fatal")
        },
        success: function (result) {
            if (result != 0) {

                $("#retorno-corrente").html(result)
            } else {
                alert("erro")
            }
        }
    })

}

function resultResistencia() {
    var tensao = $("#campo-tensao-resistencia").val()
    var corrente = $("#campo-corrente-resistencia").val()

    $.ajax({
        type: "GET",
        url: "php/calc-leideohm-resistencia.php",
        data: {
            tensao: tensao,
            corrente: corrente
        },
        error: function () {
            alert:("Erro")
        },
        success: function (result) {
            if (result != 0) {
                $("#retorno-resistencia").html(result)
            } else {
                alert("erro")
            }
        }
    })

}

