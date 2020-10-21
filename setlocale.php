<?php

// constante LC_ALL (muda tudo para português, padrão de linguagem (dferentes no Linux e Windows e UTF-8)

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

//a formatação de data dessa função é diferente da date()
echo strftime("%A %B");

?>
