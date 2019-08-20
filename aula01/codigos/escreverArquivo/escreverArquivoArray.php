<?php

	function escreverArquivoArray($arr) {
//abre o arquivo e permite a leitura
		$fp = fopen('pessoas.txt', 'a+');
//para verificar se o arquivo existe
		if ($fp) {
      //verifica os indices do vetor
			foreach($arr as $cpf => $dados) {
				if(!empty($dados)) {
					$linha = $cpf." - ".$dados['nome']." - ".$dados['endereco']." - ".$dados['telefone'];
          //escreve no arquivo e faz uma quebra de linha
					fputs($fp, "$linha\n");
				}
			}
//fecha depois de percorrer
			fclose($fp);
		}
//mostra essa mensagem de ok
		echo "[OK] Dados escritos com Sucesso!";
	}
?>
