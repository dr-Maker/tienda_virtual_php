use db_tienda_virtual

select * from categorias
select * from productos

insert into productos(categoria_id, nombre, descripcion, precio, stock, oferta, fecha, imagen) 
VALUES(1 , 'Polera sin Estampado', 'Polera blanca manga Corta sin logos', 5000, 10, 'ninguna', now(), 'photo.jpg' );

UPDATE productos SET nombre = ' polera roja sin mangas editado', descripcion = ' polera roja poliester sin mangas editado', precio = 4500, stock = 100 WHERE id = 5
