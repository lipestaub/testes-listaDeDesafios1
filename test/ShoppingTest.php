<?php
    use PHPUnit\Framework\TestCase;

    require_once './src/Shopping.php';

    class ShoppingTest extends TestCase {
        private Shopping $shopping;

        public function __construct(?string $name = null) {
            parent::__construct($name);
            $this->shopping = new Shopping();
        }

        /**
         * Test if the items list is returned.
         */
        public function testGetItemsList() {
            $this->shopping->addItem('cellphone');
            $this->shopping->addItem('mouse');
            $this->assertEquals(['cellphone', 'mouse'], $this->shopping->getItems());
        }

        /**
         * Test if the empty items list is returned.
         */
        public function testGetEmptyItemsList() {

            $this->assertEquals([], $this->shopping->getItems());
        }

        /**
         * Test if the item is added to the items list.
         */
        public function testAddItemToItemsList() {
            $this->shopping->addItem('cellphone');
            $this->assertEquals(['cellphone'], $this->shopping->getItems());
        }

        /**
         * Test if the items are added to the items list.
         */
        public function testAddItemsToItemsList() {
            $this->shopping->addItem('cellphone');
            $this->shopping->addItem('mouse');
            $this->assertEquals(['cellphone', 'mouse'], $this->shopping->getItems());
        }

        /**
         * Test if duplicated item is added to the items list.
         */
        public function testAddDuplicatedItemToItemsList() {
            $this->shopping->addItem('cellphone');
            $this->shopping->addItem('cellphone');
            $this->assertEquals(['cellphone'], $this->shopping->getItems());
        }

        /**
         * Test if a empty string is added to the items list.
         */
        public function testAddEmptyStringToItemsList() {
            $this->shopping->addItem('');
            $this->assertEquals([], $this->shopping->getItems());
        }

        /**
         * Test if the item is removed from the items list.
         */
        public function testRemoveItemFromItemsList() {
            $this->shopping->addItem('cellphone');
            $this->shopping->addItem('mouse');
            $this->shopping->removeItem(0);
            $this->assertEquals([1 => 'mouse'], $this->shopping->getItems());
        }

        /**
         * Test if the nonexistent item is removed from the items list.
         */
        public function testRemoveNonxistentItemFromItemsList() {
            $this->shopping->addItem('cellphone');
            $this->shopping->removeItem(1);
            $this->assertEquals(['cellphone'], $this->shopping->getItems());
        }

        /**
         * Test if the nonexistent item is removed from empty items list.
         */
        public function testRemoveNonxistentItemFromEmptyItemsList() {
            $this->shopping->removeItem(1);
            $this->assertEquals([], $this->shopping->getItems());
        }

        /**
         * Test if the clearItemsList() removes all items from the items list.
         */
        public function testClearItemsList() {
            $this->shopping->addItem('cellphone');
            $this->shopping->addItem('mouse');
            $this->shopping->clearItemsList();
            $this->assertEquals([], $this->shopping->getItems());
        }

        /**
         * Test if the clearItemsList() removes items from empty items list.
         */
        public function testClearEmptyItemsList() {
            $this->shopping->clearItemsList();
            $this->assertEquals([], $this->shopping->getItems());
        }
    }
?>