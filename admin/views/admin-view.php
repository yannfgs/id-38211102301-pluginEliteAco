<?php

// Verificar persmissões
if ( !current_user_can( 'manage_options' ) ) {
    wp_die( __( 'Você não tem permissões suficientes para acessar esta página' ) );
}

// Lógica de manipulação de formulário e geração de relatórios aqui...

?>

<div class="wrap">
    <h2>Relatórios de Vendas - Elite Aço</h2>

    <!-- Formulário para selecionar datas e gerar relatório -->
    <form method="post" action="">
        <!-- Inputs de data e botões aqui... -->
    </form>

    <!-- Exibição de resultados aqui... -->
</div>