<?php




class ProductTest extends PHPUnit_Framework_TestCase {

	public function testIfIdIsNull() {
		$product = new \SON\Model\Product();
		$this->assertNull($product->getId());
	}


	public function testIfTotalIsNull() {
		$product = new \SON\Model\Product();
		$this->assertNull($product->getTotal());
	}


	/**
	* @dataProvider collectionData
	*/
	public function testEncapsulate($property, $expected) {
		$product = new \SON\Model\Product();
		

		$null = $product->{'get'.ucfirst($property)}();
		$this->assertNull($null);

		$result = $product->{'set'.ucfirst($property)}($expected);
		$this->assertInstanceOf(\SON\Model\Product::class, $result);

		$actual = $product->{'get'.ucfirst($property)}();
		$this->assertEquals($expected, $actual);
	}

	public function collectionData() {
		return [
			['name', 'Produto 1'],
			['price', 10.11],
			['quantity', 5]
		];
	}
}

