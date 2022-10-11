SELECT `cadastro_produto`.`pro_id`,
    `cadastro_produto`.`pro_nomeProduto`,
    `cadastro_produto`.`pro_quantidadeEstoque`,
    `cadastro_produto`.`pro_preco`,
    `cadastro_produto`.`pro_categoria`,
    `cadastro_produto`.`pro_autor`,
    `cadastro_produto`.`pro_numeroPaginas`
FROM `vendas_01`.`cadastro_produto`;
