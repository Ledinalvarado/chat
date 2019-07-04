
<html>
<head>
    <title>Chat en vivo</title>
    <style>
        body{
            padding: 10px;
            margin: 10px;
            width: 100%;
        }
        #contenedor{
            /*padding: 10px;*/
            margin-top: 10px;
            height: 250px;
            width: 95%;
            /*background: aliceblue;*/
        }
        textarea{
            width: auto;
            min-width: 500px;
            max-width: 700px;

        }
        p{

            background: rgba(21,122,16,0.62);
            color: #fff;
            border-radius:5px;
            border-style: solid;
            font-family: Arial;
            border-width:1px;
            border-color: rgba(29,217,20,0.35);
            padding: 5px;

        }
    </style>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<h1>Chat Negocios Web</h1>


    <!-- Content here -->


    <input type="text" id="mensaje">
    <!--<textarea id="mensaje"> </textarea>-->
    <button id="enviar" onclick="f()" class="btn btn-secondary">Enviar Mensaje</button>



<div id="contenedor">

</div>



<script>



   // const mensaje = document.getElementById('mensaje');
   // document.getElementById('enviar').addEventListener('click',function (e) {
   //    e.preventDefault() ;
   //    alert('llegamos')
   // });


   function f() {
       var m = document.getElementById('mensaje').value;
       ws.send(m);


   }

    var ws = new WebSocket('ws://192.168.43.101:4000');
    ws.onmessage=function (event) {
        var msj = event.data;
        console.log(msj);
        $('#contenedor').append('<p>'+msj+'</p>');

    }


</script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>