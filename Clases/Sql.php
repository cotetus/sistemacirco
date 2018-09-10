<?php
require_once ('Espectaculos.class.php');
// Constantes para ESPECTACULO.
const SELECT_ESP = 'SELECT id, nombre, descripcion, artista FROM ' . TABLA . ' ORDER BY nombre';
const SELECTON_ESP = 'SELECT nombre, descripcion, artista FROM ' . self::TABLA . ' WHERE id = :id';
const UPDATE_ESP = 'UPDATE ' . self::TABLA .' SET nombre = :nombre, descripcion = :descripcion, artista = :artista WHERE id = :id';
const INSERT_ESP = 'INSERT INTO ' . self::TABLA .' (nombre, descripcion, artista) VALUES(:nombre, :descripcion, :artista)';



 
 const SQL_FRIEND = "SELECT user.id, user.name FROM  friend 
                            INNER JOIN user
                            ON user.id = friend.friend_id
                            WHERE friend.user_id =:id;";

const SQL_BUSSINES = "SELECT DISTINCT business.id, business.name FROM review 
                            INNER JOIN business  
                            ON business.id = review.business_id
                            WHERE review.user_id = :id;";

const SQL_REVIEW = "SELECT * FROM review 
                            INNER JOIN business ON review.business_id = business.id
                            WHERE review.user_id = :idu;
                            AND review.business_id = :id;";                           