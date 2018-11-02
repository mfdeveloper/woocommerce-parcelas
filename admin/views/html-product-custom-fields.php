<div class="options_group">
    <?php
        woocommerce_wp_text_input([
            'id' => '_installments_amount',
            'type' => 'price',
            'label' => __('Parcelas', 'woocommerce-parcelas'),
            'placeholder' => __('Quantidade de parcelas', 'woocommerce-parcelas'),
            'desc_tip' => false,
            'description' => __('This is test of description', 'woocommerce-parcelas')
        ]);
    ?>    
</div>