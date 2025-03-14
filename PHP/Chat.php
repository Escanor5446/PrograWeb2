<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat - Alumnos y Profesores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/chat.css">
    <link rel="icon" href="../Imagenes/LinkUp.png" type="image/png">
 

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/Perfil.css">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="content-wrapper"></div>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="../Imagenes/LinkUp.png" alt="LinkUp Logo" style="height: 40px;">
        <img src="../Imagenes/LinkUp 2.png" alt="LinkUp Logo" style="height: 40px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link btn btn-primary text-white" href="../PHP/Busqueda.php">Regresar</a>
                </li>
        </ul>
    </div>
</nav>
    </header>

    <!-- Contenedor del Chat -->
    <div class="chat-container">
        <aside class="user-list">
            
        </aside>

        <main class="chat-window">
            <div class="chat-header">
                <h3 id="chat-header">Chat con [Seleccione un usuario]</h3>
            </div>

            <div class="chat-messages" id="chat-messages">
                <?php if (isset($messages)): ?>
                    <?php foreach ($messages as $msg): ?>
                        <div class="message <?php echo $msg['id_remitente'] == $user_id ? 'sent' : 'received'; ?>">
                            <p><strong><?php echo htmlspecialchars($msg['nombre_remitente']); ?>:</strong> <?php echo htmlspecialchars($msg['mensaje']); ?></p>
                            <span class="timestamp"><?php echo $msg['fecha_envio']; ?></span>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>Seleccione un usuario para iniciar el chat.</p>
                <?php endif; ?>
            </div>

            <div class="chat-input" style="display:none;" id="chat-input-container">
                <input type="text" placeholder="Escribe tu mensaje..." id="message-input">
                <button type="submit" id="send-btn">Enviar</button>
            </div>
        </main>
    </div>

    <footer>
        <p>LinkUp &copy; 2025. Todos los derechos reservados.</p>
    </footer>

    <script>
        $(document).ready(function () {
        let userId; // Declarar la variable userId fuera de los eventos

        // Mostrar el área de entrada de mensajes cuando un usuario es seleccionado
        $('.user-link').click(function (e) {
            e.preventDefault();
            userId = $(this).data('id'); // Guardar el userId cuando se hace clic en el usuario
            const userName = $(this).data('name');
            $('#chat-header').text('Chat con ' + userName);
            $('#chat-input-container').show();

            // Obtener el ID del chat desde el servidor
            $.get('BackEnd/get_chat_id.php?chat_with=' + userId, function (response) {
                try {
                    const data = JSON.parse(response); // Asegúrate de parsear correctamente el JSON
                    const chatId = data.chat_id;
                    if (chatId && chatId !== 0) {
                        // Almacenar chatId para su uso posterior
                        $('#send-btn').data('chat-id', chatId);
                        $('#chat-header').text('Chat con ' + userName);
                        $('#chat-input-container').show();
                    } else {
                        alert('No se pudo obtener el chat.');
                    }
                    // Cargar los mensajes
                    $.get('chat.php?chat_with=' + userId, function (data) {
                        $('#chat-messages').html($(data).find('#chat-messages').html());
                    });
                } catch (e) {
                    console.error('Error al procesar la respuesta:', e);
                }
            });
        });

        // Enviar un mensaje
        $('#send-btn').click(function () {
            const message = $('#message-input').val();
            if (message.trim() !== '') {
                const chatId = $(this).data('chat-id');
                $.post('BackEnd/send_message.php', { message: message, chat_id: chatId }, function (data) {
                    $('#message-input').val(''); // Limpiar el campo de entrada
                    // Recargar mensajes
                    $.get('chat.php?chat_with=' + userId, function (data) {
                        $('#chat-messages').html($(data).find('#chat-messages').html());
                    });
                });
            }
        });
    });
    </script>
</body>
</html>