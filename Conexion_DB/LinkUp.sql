Create Database LinkUp;
Use LinkUp;

CREATE TABLE Usuarios (
    ID_Usuario          INT AUTO_INCREMENT PRIMARY KEY,
    Nombre              VARCHAR(100) NOT NULL,
    Email               VARCHAR(100) UNIQUE NOT NULL,
    Contraseña          VARCHAR(100) NOT NULL,
    Fecha_Nac           Date DEFAULT NULL,
    Avatar              longblob DEFAULT NULL,
    Fecha_Registro      TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    Descripcion         Text DEFAULT NULL
);

CREATE TABLE Categorias (
    ID_Categorias       INT AUTO_INCREMENT PRIMARY KEY,
    Nombre              VARCHAR(100) UNIQUE NOT NULL,
    Descripcion         TEXT
);

CREATE TABLE Publicaciones (
    ID_Publicaciones        INT AUTO_INCREMENT PRIMARY KEY,
    ID_Usuario              INT NOT NULL,
    ID_Categorias            INT,
    Contenido               TEXT NOT NULL,
    Fecha                   TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (ID_Usuario) REFERENCES Usuarios(ID_Usuario) ON DELETE CASCADE,
    FOREIGN KEY (ID_Categorias) REFERENCES Categorias(ID_Categorias) ON DELETE SET NULL
);

CREATE TABLE Comentarios (
    ID_Comentarios      INT AUTO_INCREMENT PRIMARY KEY,
    ID_Publicaciones    INT NOT NULL,
    ID_Usuario          INT NOT NULL,
    Comentarios         TEXT NOT NULL,
    Fecha               TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (ID_Publicaciones) REFERENCES Publicaciones(ID_Publicaciones) ON DELETE CASCADE,
    FOREIGN KEY (ID_Usuario) REFERENCES Usuarios(ID_Usuario) ON DELETE CASCADE
);

CREATE TABLE Mensajes (
    ID_Mensajes         INT AUTO_INCREMENT PRIMARY KEY,
    ID_Emisor           INT NOT NULL,
    ID_Receptor         INT NOT NULL,
    MensajeS            TEXT NOT NULL,
    Fecha               TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (ID_Emisor) REFERENCES Usuarios(ID_Usuario) ON DELETE CASCADE,
    FOREIGN KEY (ID_Receptor) REFERENCES Usuarios(ID_Usuario) ON DELETE CASCADE
);

CREATE TABLE Reacciones (
    ID_Reacciones           INT AUTO_INCREMENT PRIMARY KEY,
    ID_Usuario              INT NOT NULL,
    ID_Publicaciones        INT NOT NULL,
    Tipo                    ENUM('like', 'dislike') NOT NULL,
    Fecha                   TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (ID_Usuario) REFERENCES Usuarios(ID_Usuario) ON DELETE CASCADE,
    FOREIGN KEY (ID_Publicaciones) REFERENCES Publicaciones(ID_Publicaciones) ON DELETE CASCADE,
    UNIQUE(ID_Usuario, ID_Publicaciones) -- Evita reacciones duplicadas
);