
<?php

public function addItem( $product_id, $quantity){
	$product = $this->Produto_model->getById($product_id);
	$this->carrinho->setItem($product, $quantity);
	echo json_encode($this->carrinho);
}
?>