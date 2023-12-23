-- Insertar libros de muestra
INSERT INTO libros (titulo, autor, descripcion, precio, imagen, formato, ano_publicacion, idioma, categoria) VALUES
('Harry Potter y el prisionero de Azkaban', 'J.K. Rowling', 'Harry Potter 3', 14700, 'prisionero_azkaban.jpg', 'Libro Ilustrado', 1999, 'Español', 'Fantasía'),
('Harry Potter y el cáliz de fuego', 'J.K. Rowling', 'Harry Potter 4', 16100, 'caliz_de_fuego.jpg', 'Edicion Especial', 2000, 'Español', 'Fantasía'),
('Harry Potter y la Orden del Fénix', 'J.K. Rowling', 'Harry Potter 5', 20300, 'orden_del_fenix.jpg', 'Libro Basico', 2003, 'Español', 'Fantasía'),
('Harry Potter y la Piedra Filosofal', 'J.K. Rowling', 'Harry Potter y la Piedra Filosofal', 8400, 'piedra_filosofal.jpg', 'De Bolsillo', 1997, 'Español', 'Fantasía'),
('Harry Potter y el prisionero de Azkaban (Edición ilustrada)', 'J.K. Rowling', 'Harry Potter [edición ilustrada] 3', 23800, 'prisionero_azkaban1.jpg', 'Libro Ilustrado', 2017, 'Español', 'Fantasía'),
('Harry Potter y la Cámara Secreta', 'J.K. Rowling', 'Harry Potter y la Cámara Secreta', 9100, 'camara_secreta.jpg', 'Libro Basico', 1998, 'Español', 'Fantasía'),
('Sinsajo los Juegos del Hambre', 'Suzanne Collins', 'Sinsajo los Juegos del Hambre', 10790, 'juegos_del_hambre.jpg', 'Libro Basico', 2010, 'Español', 'Ciencia Ficción'),
('En llamas los Juegos del Hambre', 'Suzanne Collins', 'Los Juegos del Hambre 2 - En Llamas', 8020, 'en_llamas.jpg', 'Libro Basico', 2009, 'Español', 'Ciencia Ficción'),
('El Señor de los Anillos El retorno del rey', 'J.R.R. Tolkien', 'El Señor de los Anillos III: El Retorno del rey', 12030, 'retorno_del_rey.jpg', 'Libro Ilustrado', 1955, 'Español', 'Fantasía'),
('El Señor de los Anillos Las dos torres', 'J.R.R. Tolkien', 'El Señor de los Anillos II: Las dos Torres', 12030, 'las_dos_torres.jpg', 'Libro Ilustrado', 1954, 'Español', 'Fantasía');

CREATE TABLE carrito (
    id INT PRIMARY KEY AUTO_INCREMENT,
    libro_id INT,
    cantidad INT,
    FOREIGN KEY (libro_id) REFERENCES libros(id)
);

CREATE TABLE libros (
    id INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(255),
    autor VARCHAR(255),
    descripcion TEXT,
    precio DECIMAL(10, 2),
    imagen VARCHAR(255),
    formato VARCHAR(50),
    ano_publicacion INT,
    idioma VARCHAR(50),
    categoria VARCHAR(50)
);

CREATE TABLE usuarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255),
    email VARCHAR(255),
    password VARCHAR(255),
    rol VARCHAR(255)
);

-- Insertar más libros de muestra
INSERT INTO libros (titulo, autor, descripcion, precio, imagen, formato, ano_publicacion, idioma, categoria) VALUES
('Cien años de soledad', 'Gabriel García Márquez', 'Cien años de soledad', 18900, 'cien_anos_soledad.jpg', 'Libro Basico', 1967, 'Español', 'Realismo Mágico'),
('1984', 'George Orwell', '1984', 13500, '1984.jpg', 'Libro Basico', 1949, 'Inglés', 'Ciencia Ficción'),
('Orgullo y prejuicio', 'Jane Austen', 'Orgullo y prejuicio', 9800, 'orgullo_prejuicio.jpg', 'Libro Basico', 1813, 'Inglés', 'Clásico'),
('Los juegos del hambre', 'Suzanne Collins', 'Los juegos del hambre', 11800, 'juegos_del_hambre2.jpg', 'Libro Basico', 2008, 'Español', 'Ciencia Ficción'),
('La sombra del viento', 'Carlos Ruiz Zafón', 'La sombra del viento', 15600, 'sombra_del_viento.jpg', 'Libro Ilustrado', 2001, 'Español', 'Misterio'),
('Crónicas de una muerte anunciada', 'Gabriel García Márquez', 'Crónicas de una muerte anunciada', 8900, 'cronicas_muerte_anunciada.jpg', 'De Bolsillo', 1981, 'Español', 'Realismo Mágico'),
('Matar a un ruiseñor', 'Harper Lee', 'Matar a un ruiseñor', 11200, 'matar_un_ruisenor.jpg', 'Libro Ilustrado', 1960, 'Español', 'Ficción'),
('El Gran Gatsby', 'F. Scott Fitzgerald', 'El Gran Gatsby', 12450, 'gran_gatsby.jpg', 'Libro Basico', 1925, 'Inglés', 'Clásico'),
('Don Quijote de la Mancha', 'Miguel de Cervantes', 'Don Quijote de la Mancha', 16500, 'don_quijote.jpg', 'Edicion Especial', 1605, 'Español', 'Clásico'),
('La Odisea', 'Homero', 'La Odisea', 14500, 'odisea.jpg', 'Libro Basico', '800 a.C.', 'Griego', 'Épico');
