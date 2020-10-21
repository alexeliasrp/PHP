CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_UsuarioInsert`(
	pLogin VARCHAR(64), pSenha VARCHAR(256)
)
BEGIN
INSERT INTO tb_usuario(login, senha) VALUES(pLogin, pSenha);

SELECT * FROM tb_usuario where idusuario = LAST_INSERT_ID();

END;

