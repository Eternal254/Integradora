<!doctype html>
<html lang="es">
    <head>
        
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Fuente Web">
    <title>Script de comentarios | Fuente Web</title>
    
    
<link  rel="icon"   href="logo.png" type="image/png" />
<link href="vendor/emoji-picker/lib/css/emoji.css" rel="stylesheet">
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="vendor/emoji-picker/lib/js/config.js"></script>
<script src="vendor/emoji-picker/lib/js/util.js"></script>
<script src="vendor/emoji-picker/lib/js/jquery.emojiarea.js"></script>
<script src="vendor/emoji-picker/lib/js/emoji-picker.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/sticky-footer-navbar.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    </head>

    <body>


<!-- Begin page content -->

<div class="container">
      <h3 class="mt-5"><center>Comentarios</center></h3>
      <hr>
      <div class="row">
    <div class="col-12 col-md-12"> 
          <!-- Contenido -->

<div class="output-container">
<div class="comment-form-container">
<form id="frm-comment">
<div class="input-row">
    <input type="hidden" name="comment_id" id="commentId" placeholder="Name" /> 
    <input class="form-control" type="text" name="name" id="name" placeholder="Nombres" />
</div>

<div class="input-row">
    <p>
        <textarea class="input-field" type="text" name="comment" id="comment" placeholder="Agrega tu mensaje" style="height: 150px;"></textarea>
    </p>
</div>


<div>
    <input type="button" class="btn btn-primary" id="submitButton" value="Agregar Comentario" />
    <div id="comment-message">Comentario creado con éxito!</div>
</div>


</form>
</div><div id="output"></div>

</div>
<script>

function postReply(commentId) {
	$('#commentId').val(commentId);
	$("#name").focus();
}

$("#submitButton").click(function () {
	$("#comment-message").css('display', 'none');
	var str = $("#frm-comment").serialize();

	$.ajax({
		url: "AgregarComentario.php",
		data: str,
		type: 'post',
		success: function (response)
		{
			$("#comment-message").css('display', 'inline-block');
			$("#name").val("");
			$("#comment").val("");
			$("#commentId").val("");
			listComment();
		}
	});
});

$(document).ready(function () {
	listComment();
});

$(function () {
	// Initializes and creates emoji set from sprite sheet
	window.emojiPicker = new EmojiPicker({
		emojiable_selector: '[data-emojiable=true]',
		assetsPath: 'vendor/emoji-picker/lib/img/',
		popupButtonClasses: 'icon-smile'
	});

	window.emojiPicker.discover();
});


function listComment() {
$.post("ListaComentario.php",
function (data) {
	var data = JSON.parse(data);

	var comments = "";
	var replies = "";
	var item = "";
	var parent = -1;
	var results = new Array();

	var list = $("<ul class='outer-comment'>");
	var item = $("<li>").html(comments);

	for (var i = 0; (i < data.length); i++)
	{
		var commentId = data[i]['co_id'];
		parent = data[i]['parent_id'];

		if (parent == "0")
		{
			comments =  "<div class='comment-row'>"+
			"<div class='comment-info'><img src='user.png'><span class='posted-by'>" + data[i]['comentario_nombre'].toUpperCase() + "</span></div>" + 
			"<div class='comment-text'>" + data[i]['comentarios'] + "</div>"+
			"<div><a class='btn-reply' onClick='postReply(" + commentId + ")'>Respuesta</a></div>"+
			"</div>";
			var item = $("<li>").html(comments);
			list.append(item);
			var reply_list = $('<ul>');
			item.append(reply_list);
			listReplies(commentId, data, reply_list);
		}
	}
	$("#output").html(list);
});
}

function listReplies(commentId, data, list) {

	for (var i = 0; (i < data.length); i++)
	{
		if (commentId == data[i].parent_id)
		{
			var comments = "<div class='comment-row'>"+
			" <div class='comment-info'><img src='user.png'><span class='posted-by'>" + data[i]['comentario_nombre'].toUpperCase() + " </span></div>" + 
			"<div class='comment-text'>" + data[i]['comentarios'] + "</div>"+
			"<div><a class='btn-reply' onClick='postReply(" + data[i]['co_id'] + ")'>Respuesta</a></div>"+
			"</div>";
			var item = $("<li>").html(comments);
			var reply_list = $('<ul>');
			list.append(item);
			item.append(reply_list);
			listReplies(data[i].co_id, data, reply_list);

		}
	}
}
</script>


          <!-- Fin Contenido --> 
        </div>
  </div>
      <!-- Fin row --> 
      
    </div>
<!-- Fin container -->

<!-- Bootstrap core JavaScript--> 
<script src="dist/js/bootstrap.min.js"></script> 
</body>
</html>